<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */

session_start();

if (isset($_POST['mark_selected_as_lost']) && isset($_POST['lost_copies'])) {
    require_once('../database_constants.php');
    require_once('../classes/Query.php');
    $q = new Query();
    $copy_ids = array();
    foreach ($_POST['lost_copies'] as $lost_copy) {
        list($bibid, $copyid) = explode(',', $lost_copy);
        $copy_ids[] = $q->mkSQL("(bibid=%N AND copyid=%N)", $bibid, $copyid);
    }
    $sql = "UPDATE biblio_copy SET status_cd = 'lost' WHERE " . implode(' OR ', $copy_ids);
    $q->exec($sql);
}

require_once("../shared/common.php");
$tab = "circulation";
$nav = "cobranca_atrasos";
$helpPage = "circulation";

require_once("../shared/logincheck.php");
require_once("../shared/header.php");
require_once("../classes/Localize.php");
$loc = new Localize(OBIB_LOCALE, $tab);
?>
<script>
function checkAll(bx) {
  var cbs = document.getElementsByName('lost_copies[]');
  for(var i=0; i < cbs.length; i++) {
    cbs[i].checked = bx.checked;
  }
}
</script>
<?php




function extractHeaderData($pageText) {
  $data = array('CURSO' => null, 'SERIAÇÃO' => null, 'TURNO' => null, 'TURMA' => null);
  $header_line = null;
  $lines = explode("\n", $pageText);
  foreach ($lines as $line) {
    if (strpos($line, "Curso:") !== false && strpos($line, "Seriação:") !== false) {
      $header_line = $line;
      break;
    }
  }

  if ($header_line) {
    $idx_curso = strpos($header_line, "Curso:");
    $idx_seriacao = strpos($header_line, "Seriação:");
    $idx_turno = strpos($header_line, "Turno:");
    $idx_turma = strpos($header_line, "Turma:");

    if ($idx_curso !== false && $idx_seriacao !== false) {
      $data['CURSO'] = trim(substr($header_line, $idx_curso + strlen("Curso:"), $idx_seriacao - ($idx_curso + strlen("Curso:"))));
    }
    if ($idx_seriacao !== false && $idx_turno !== false) {
      $data['SERIAÇÃO'] = trim(substr($header_line, $idx_seriacao + strlen("Seriação:"), $idx_turno - ($idx_seriacao + strlen("Seriação:"))));
    }
    if ($idx_turno !== false && $idx_turma !== false) {
      $data['TURNO'] = trim(substr($header_line, $idx_turno + strlen("Turno:"), $idx_turma - ($idx_turno + strlen("Turno:"))));
    }
    if ($idx_turma !== false) {
      $data['TURMA'] = trim(substr($header_line, $idx_turma + strlen("Turma:")));
    }
  }

  return $data;
}

function extractStudentData($line) {
    // Ignore headers and footers
    if (strlen($line) < 20 || strpos($line, 'Nome do Estudante') !== false || strpos($line, 'Página') !== false || strpos($line, 'GOVERNO DO ESTADO') !== false || strpos($line, 'SECRETARIA DE ESTADO') !== false || strpos($line, 'RELAÇÃO DE ALUNOS') !== false) {
        return null;
    }

    $line_regex = "/^(\d+)\s+(\d+)\s+(.+?)\s+(\d{2}\/\d{2}\/\d{4})\s+(\d+)\s+([MF])\s+((?:\(\d{2}\))?\s*\d{4,5}-\d{4})?\s*(\S+)?\s+(Matriculado|Desistente|Transferido|Excluído por|Remanejado|Concluinte|Sem)\s+(\d{2}\/\d{2}\/\d{4})$/";

    if (preg_match($line_regex, trim($line), $matches)) {
        $student_data = [
            'NOME DO ESTUDANTE' => trim($matches[3]),
            'TELEFONE' => trim($matches[7]),
            'SITUAÇÃO' => trim($matches[9]),
            'CGM' => trim($matches[2]),
        ];

        // Basic validation
        if (!is_numeric($student_data['CGM']) || empty($student_data['NOME DO ESTUDANTE'])) {
            return null;
        }

        return $student_data;
    }

    return null;
}

?>
<h1><img src="../images/circ.png" border="0" width="30" height="30" align="top"> <?php echo $loc->getText("Cobrança de Atrasos"); ?></h1>

<div style="display: flex;">
  <div style="flex: 1;">
<form name="cobrancaform" method="POST" action="../circ/cobranca_atrasos.php" enctype="multipart/form-data">
  <table class="primary">
    <tr>
      <th valign="top" nowrap="nowrap" align="left">
        Selecione os arquivos CSV:
      </th>
    </tr>
    <tr>
      <td nowrap="nowrap" class="primary">
        Alunos Manhã:
        <input type="file" name="alunos_manha" size="30">
      </td>
    </tr>
    <tr>
      <td nowrap="nowrap" class="primary">
        Alunos Tarde:
        <input type="file" name="alunos_tarde" size="30">
      </td>
    </tr>
    <tr>
      <th valign="top" nowrap="nowrap" align="left">
        Cursos desejados (separados por vírgula):
      </th>
    </tr>
    <tr>
      <td class="primary">
        <input type="text" name="cursos_desejados" size="50" value="<?php echo isset($_POST['cursos_desejados']) ? H($_POST['cursos_desejados']) : ''; ?>">
      </td>
    </tr>
    <tr>
      <td class="primary">
        <input type="submit" value="Processar" class="button">
      </td>
    </tr>
    <tr>
      <th valign="top" nowrap="nowrap" align="left">
        Ordenar por:
      </th>
    </tr>
    <tr>
      <td class="primary">
        <select name="sort_by">
          <option value="CGM">CGM</option>
          <option value="NOME DO ESTUDANTE">Nome</option>
          <option value="SITUAÇÃO">Situação</option>
          <option value="CURSO">Curso</option>
          <option value="SERIAÇÃO">Série</option>
          <option value="TURMA">Turma</option>
          <option value="TURNO">Turno</option>
        </select>
      </td>
    </tr>
    <tr>
      <th valign="top" nowrap="nowrap" align="left">
        Ordenar membros não encontrados por:
      </th>
    </tr>
    <tr>
      <td class="primary">
        <select name="sort_by_unmatched">
          <option value="member_bcode">Member Barcode</option>
          <option value="name">Name</option>
          <option value="days_late">Days Late</option>
        </select>
      </td>
    </tr>
  </table>
</form>
</div>
<div style="flex: 1; padding-left: 20px;">
  <h3>Passo a passo:</h3>
  <table class="primary">
    <tr>
      <th align="left">Passo</th>
      <th align="left">Instrução</th>
    </tr>
    <tr>
      <td class="primary"><img src="../images/admin.png" width="16" height="16"></td>
      <td class="primary">Faça o "login" no SERE.</td>
    </tr>
    <tr>
      <td class="primary"><img src="../images/reports.png" width="16" height="16"></td>
      <td class="primary">Navegue até "Menu" -> "Relatórios" -> "Matrículas" -> "Alunos por turma".</td>
    </tr>
    <tr>
      <td class="primary"><img src="../images/catalog.png" width="16" height="16"></td>
      <td class="primary">Em "Escolher o tipo de relatório", selecione "Por turno" e formato "XLS".</td>
    </tr>
    <tr>
      <td class="primary"><img src="../images/circ.png" width="16" height="16"></td>
      <td class="primary">Salve os relatórios destacando os períodos. Por exemplo: relatório_manhã ou relatório_tarde.</td>
    </tr>
    <tr>
      <td class="primary"><img src="../images/book.gif" width="16" height="16"></td>
      <td class="primary">Abra os relatórios e, em "Salvar como", salve os arquivos com o formato CSV.</td>
    </tr>
    <tr>
      <td class="primary"><img src="../images/up.png" width="16" height="16"></td>
      <td class="primary">Indique o caminho dos arquivos nos campos indicados a esquerda.</td>
    </tr>
  </table>
</div>
</div>
<hr>

<?php
if (!empty($_FILES) || !empty($_POST)) {
  // Get and process the list of desired courses
  $desired_courses_str = isset($_POST['cursos_desejados']) ? $_POST['cursos_desejados'] : '';
  $desired_courses = array();
  if (!empty($desired_courses_str)) {
      // Convert to uppercase and trim whitespace for each course
      $desired_courses = array_map('trim', explode(',', mb_strtoupper($desired_courses_str, 'UTF-8')));
  }
  // Remove empty entries that might result from trailing commas
  $desired_courses = array_filter($desired_courses);

  $all_students = array();
  $processed_cgms = array(); // Array to track processed CGMs to avoid duplicates

  $process_csv = function($file_tmp_name, $desired_courses, &$all_students, &$processed_cgms) {
      if (($handle = fopen($file_tmp_name, "r")) !== FALSE) {
          $current_course = '';
          $current_seriacao = '';
          $current_turno = '';
          $current_turma = '';

          while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
              // Check for course, seriacao, turno, turma info
              if (isset($data[2])) {
                  if (strpos($data[2], 'Curso:') !== false) {
                      $current_course = trim(str_replace('Curso:', '', $data[2]));
                  }
              }
              if (isset($data[5])) {
                  if (strpos($data[5], 'Seriação:') !== false) {
                      $current_seriacao = trim(str_replace('Seriação:', '', $data[5]));
                  }
              }
              if (isset($data[10])) {
                  if (strpos($data[10], 'Turno:') !== false) {
                      $current_turno = trim(str_replace('Turno:', '', $data[10]));
                  }
              }
              if (isset($data[13])) {
                  if (strpos($data[13], 'Turma:') !== false) {
                      $current_turma = trim(str_replace('Turma:', '', $data[13]));
                  }
              }

              // Check for student data
              if (isset($data[3]) && is_numeric(trim($data[3]))) { // Assuming CGM is in column D
                  $cgm = trim($data[3]);

                  // Prioritize search for members in desired courses
                  if (!empty($desired_courses) && !in_array(mb_strtoupper($current_course, 'UTF-8'), $desired_courses)) {
                      continue; // Skip if desired_courses are set and current_course is not in them
                  }

                  $student_data = [
                      'NOME DO ESTUDANTE' => isset($data[4]) ? trim($data[4]) : '',
                      'TELEFONE' => isset($data[8]) ? trim($data[8]) : '',
                      'SITUAÇÃO' => isset($data[12]) ? trim($data[12]) : '',
                      'CGM' => $cgm,
                      'CURSO' => $current_course,
                      'SERIAÇÃO' => $current_seriacao,
                      'TURNO' => $current_turno,
                      'TURMA' => $current_turma,
                  ];

                  $all_students[] = $student_data;
              }
          }
          fclose($handle);
      }
  };

  if (isset($_FILES['alunos_manha']) && $_FILES['alunos_manha']['error'] == UPLOAD_ERR_OK) {
      $process_csv($_FILES['alunos_manha']['tmp_name'], $desired_courses, $all_students, $processed_cgms);
  }

  if (isset($_FILES['alunos_tarde']) && $_FILES['alunos_tarde']['error'] == UPLOAD_ERR_OK) {
      $process_csv($_FILES['alunos_tarde']['tmp_name'], $desired_courses, $all_students, $processed_cgms);
  }

  if (!empty($all_students)) {
    // Deduplicate and prioritize students
    $unique_students = [];
    foreach ($all_students as $student) {
        $cgm = $student['CGM'];
        $current_course = mb_strtoupper($student['CURSO'], 'UTF-8');

        if (!isset($unique_students[$cgm])) {
            $unique_students[$cgm] = $student;
        } else {
            // If the student already exists, check for priority
            $existing_course = mb_strtoupper($unique_students[$cgm]['CURSO'], 'UTF-8');
            $is_current_priority = in_array($current_course, $desired_courses);
            $is_existing_priority = in_array($existing_course, $desired_courses);

            // If current is priority and existing is not, replace
            if ($is_current_priority && !$is_existing_priority) {
                $unique_students[$cgm] = $student;
            }
            // If both are priority or both are not, keep the first one encountered (or apply other criteria if needed)
            // For now, if both are priority or both are not, we keep the one already there.
        }
    }
    $all_students = array_values($unique_students); // Reset array keys

    require_once('../classes/Query.php');
    $q = new Query();

    // Get overdue data
    $sql = "select c.bibid, c.copyid, m.mbrid, c.barcode_nmbr, "
      . "concat_ws(' ', b.call_nmbr1, b.call_nmbr2, b.call_nmbr3) as callno, "
      . "b.title, b.author, c.status_begin_dt, "
      . "c.due_back_dt, m.barcode_nmbr member_bcode, "
      . "concat(m.last_name, ', ', m.first_name) name, "
      . "floor(to_days(now())-to_days(c.due_back_dt)) days_late "
      . "from biblio b, biblio_copy c, member m "
      . "where b.bibid = c.bibid "
      . "and c.mbrid = m.mbrid "
      . "and c.status_cd = 'out' "
      . "and c.due_back_dt < now()";

    $overdue_results = $q->select($sql);

    $overdue_data = array();
    while ($row = $overdue_results->next()) {
      $overdue_data[] = $row;
    }

    // Merge student data with overdue data
    $final_report = array();
    $unmatched_members = $overdue_data;
    foreach ($all_students as $student) {
      foreach ($overdue_data as $key => $overdue_item) {
        // Assuming CGM from student data matches member_bcode from overdue data
        if ($student['CGM'] == $overdue_item['member_bcode']) {
          $merged_item = array_merge($student, $overdue_item);
          $final_report[] = $merged_item;
          unset($unmatched_members[$key]);
        }
      }
    }

    // Filter the final report by desired courses
    if (!empty($desired_courses)) {
        $final_report = array_filter($final_report, function($item) use ($desired_courses) {
            return in_array(mb_strtoupper($item['CURSO'], 'UTF-8'), $desired_courses);
        });
    }

    // Sort the final report
    $sort_by = isset($_POST['sort_by']) ? $_POST['sort_by'] : 'CGM';
    usort($final_report, function($a, $b) use ($sort_by) {
        return strcoll($a[$sort_by], $b[$sort_by]);
    });

    // Display final report
    if (!empty($final_report)) {
      echo "<h3>Alunos com Livros Atrasados:</h3>";
      echo "<p>Total de alunos encontrados: " . count($final_report) . "</p>";
      echo "<table class='primary' style='border-collapse: collapse;'>";
      echo "<tr><th style='border-right: 1px solid #ccc;'>CGM</th><th style='border-right: 1px solid #ccc;'>Nome</th><th style='border-right: 1px solid #ccc;'>Telefone</th><th style='border-right: 1px solid #ccc;'>Situação</th><th style='border-right: 1px solid #ccc;'>Curso</th><th style='border-right: 1px solid #ccc;'>Série</th><th style='border-right: 1px solid #ccc;'>Turma</th><th style='border-right: 1px solid #ccc;'>Turno</th><th style='border-right: 1px solid #ccc;'>Título do Livro</th><th style='border-right: 1px solid #ccc;'>Autor</th><th>Data de Vencimento</th></tr>";
      foreach ($final_report as $item) {
        echo "<tr style='border-bottom: 1px solid #ccc;'>";
        echo "<td style='border-right: 1px solid #ccc;'>" . H($item['CGM']) . "</td>";
        echo "<td style='border-right: 1px solid #ccc;'>" . H($item['NOME DO ESTUDANTE']) . "</td>";
        echo "<td style='border-right: 1px solid #ccc;'>" . H($item['TELEFONE']) . "</td>";
        echo "<td style='border-right: 1px solid #ccc;'>" . H($item['SITUAÇÃO']) . "</td>";
        echo "<td style='border-right: 1px solid #ccc;'>" . H($item['CURSO']) . "</td>";
        echo "<td style='border-right: 1px solid #ccc;'>" . H($item['SERIAÇÃO']) . "</td>";
        echo "<td style='border-right: 1px solid #ccc;'>" . H($item['TURMA']) . "</td>";
        echo "<td style='border-right: 1px solid #ccc;'>" . H($item['TURNO']) . "</td>";
        echo "<td style='border-right: 1px solid #ccc;'>" . H($item['title']) . "</td>";
        echo "<td style='border-right: 1px solid #ccc;'>" . H($item['author']) . "</td>";
        echo "<td>" . H($item['due_back_dt']) . "</td>";
        echo "</tr>";
      }
      echo "</table>";
    } else {
      echo "<p>Nenhum aluno com livros atrasados encontrado para os cursos selecionados.</p>";
    }
    echo "<hr>";

    // Display unmatched members
    if (!empty($unmatched_members)) {
      echo "<h3>Membros não encontrados:</h3>";
      echo "<p>Total de membros não encontrados: " . count($unmatched_members) . "</p>";

      // Sort the unmatched members
      $sort_by_unmatched = isset($_POST['sort_by_unmatched']) ? $_POST['sort_by_unmatched'] : 'member_bcode';
      usort($unmatched_members, function($a, $b) use ($sort_by_unmatched) {
          if ($sort_by_unmatched == 'days_late') {
              return $a[$sort_by_unmatched] <=> $b[$sort_by_unmatched];
          } else {
              return strcoll($a[$sort_by_unmatched], $b[$sort_by_unmatched]);
          }
      });

      echo "<form method='POST' onsubmit=\"return confirm('Tem certeza que deseja marcar os livros selecionados como perdidos?');\">";
      echo "<input type='submit' name='mark_selected_as_lost' value='Marcar Selecionados como Perdido'>";
      echo "<table class='primary' style='border-collapse: collapse;'>";
      echo "<tr><th><input type='checkbox' onchange=\"checkAll(this)\"></th><th style='border-right: 1px solid #ccc;'>Member Barcode</th><th style='border-right: 1px solid #ccc;'>Name</th><th style='border-right: 1px solid #ccc;'>Title</th><th>Days Late</th></tr>";
      foreach ($unmatched_members as $item) {
        echo "<tr style='border-bottom: 1px solid #ccc;'>";
        echo "<td><input type='checkbox' name='lost_copies[]' value='" . H($item['bibid']) . "," . H($item['copyid']) . "'></td>";
        echo "<td style='border-right: 1px solid #ccc;'>" . H($item['member_bcode']) . "</td>";
        echo "<td style='border-right: 1px solid #ccc;'>" . H($item['name']) . "</td>";
        echo "<td style='border-right: 1px solid #ccc;'>" . H($item['title']) . "</td>";
        echo "<td>" . H($item['days_late']) . "</td>";
        echo "</tr>";
      }
      echo "</table>";
      echo "</form>";
    }
  } else if (isset($_POST['cursos_desejados'])) {
      echo "<p>Nenhum aluno encontrado nos arquivos CSV para os cursos selecionados.</p>";
  }
}

include("../shared/footer.php");
?>