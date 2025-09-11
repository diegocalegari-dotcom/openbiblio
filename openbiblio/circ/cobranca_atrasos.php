<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */

require_once("../shared/common.php");
$tab = "circulation";
$nav = "cobranca_atrasos";
$helpPage = "circulation";

require_once("../shared/logincheck.php");
require_once("../shared/header.php");
require_once("../classes/Localize.php");
$loc = new Localize(OBIB_LOCALE, $tab);

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
  // Check for header lines or lines that don't start with a name (often start with numbers or are short)
  if (preg_match('/^\\d/', $line) || strlen($line) < 20 || strpos($line, "SituaçãoTelefoneSexoIdad") !== false) {
    return null;
  }

  $parts = explode("\t", $line);
  if (count($parts) < 4) {
    return null;
  }

  $student_data = array(
    'NOME DO ESTUDANTE' => trim($parts[0]),
    'Data de Nasc.' => '',
    'Idade' => '',
    'Sexo' => '',
    'TELEFONE' => '',
    'SITUAÇÃO' => '',
    'CGM' => '',
    'Data Matricula' => '',
    'RG' => ''
  );

  // Parse Part 2: Birthdate, Age, Sex, Phone
  if (preg_match('/(\d{2}\/\d{2}\/\d{4})\s+(\d+)\s+([MF])(.*)/', trim($parts[1]), $matches2)) {
    $student_data['Data de Nasc.'] = trim($matches2[1]);
    $student_data['Idade'] = trim($matches2[2]);
    $student_data['Sexo'] = trim($matches2[3]);
    $student_data['TELEFONE'] = trim($matches2[4]);
  }

  // Parse Part 3: Status, Row#, CGM - THIS IS THE FIX
  // The regex now correctly captures Status, then Row Number, then CGM
  if (preg_match('/(Matriculado|Desistente|Transferido|Excluído por|Remanejado|Concluinte|Sem)(\d)(\d+)/', trim($parts[2]), $matches3)) {
    $student_data['SITUAÇÃO'] = trim($matches3[1]);
    // $matches3[2] is the row number, we don't need it
    $student_data['CGM'] = trim($matches3[3]); // CGM is now correctly captured as the 3rd group
  }

  // Parse Part 4: Enroll Date, RG
  if (preg_match('/(\d{2}\/\d{2}\/\d{4})(.*)/', trim($parts[3]), $matches4)) {
    $student_data['Data Matricula'] = trim($matches4[1]);
    $student_data['RG'] = trim($matches4[2]);
  }

  // If CGM is still empty, it's not a valid student record for our purposes
  if (empty($student_data['CGM'])) {
      return null;
  }

  return $student_data;
}

?>
<h1><img src="../images/circ.png" border="0" width="30" height="30" align="top"> <?php echo $loc->getText("Cobrança de Atrasos"); ?></h1>

<form name="cobrancaform" method="POST" action="../circ/cobranca_atrasos.php" enctype="multipart/form-data">
  <table class="primary">
    <tr>
      <th valign="top" nowrap="nowrap" align="left">
        Selecione os arquivos PDF:
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
      <td class="primary">
        <input type="submit" value="Processar" class="button">
      </td>
    </tr>
  </table>
</form>

<?php
if (!empty($_FILES)) {
  require_once('../vendor/autoload.php');

  $parser = new \Smalot\PdfParser\Parser();
  $all_students = array();

  if (isset($_FILES['alunos_manha']) && $_FILES['alunos_manha']['error'] == UPLOAD_ERR_OK) {
    $pdf_manha = $parser->parseFile($_FILES['alunos_manha']['tmp_name']);
    $pages_manha = $pdf_manha->getPages();
    foreach ($pages_manha as $page) {
      $header_data = extractHeaderData($page->getText());
      $lines = explode("
", $page->getText());
      foreach ($lines as $line) {
        $student_data = extractStudentData($line);
        if ($student_data) {
          $student_data = array_merge($student_data, $header_data);
          $all_students[] = $student_data;
        }
      }
    }
  }

  if (isset($_FILES['alunos_tarde']) && $_FILES['alunos_tarde']['error'] == UPLOAD_ERR_OK) {
    $pdf_tarde = $parser->parseFile($_FILES['alunos_tarde']['tmp_name']);
    $pages_tarde = $pdf_tarde->getPages();
    foreach ($pages_tarde as $page) {
      $header_data = extractHeaderData($page->getText());
      $lines = explode("\n", $page->getText());
      foreach ($lines as $line) {
        $student_data = extractStudentData($line);
        if ($student_data) {
          $student_data = array_merge($student_data, $header_data);
          $all_students[] = $student_data;
        }
      }
    }
  }

  // This block is now outside the if (!empty($all_students))
  if (!empty($all_students)) {
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
    foreach ($all_students as $student) {
      foreach ($overdue_data as $overdue_item) {
        // Assuming CGM from student data matches member_bcode from overdue data
        if ($student['CGM'] == $overdue_item['member_bcode']) {
          $merged_item = array_merge($student, $overdue_item);
          $final_report[] = $merged_item;
        }
      }
    }

    // Display final report
    if (!empty($final_report)) {
      echo "<h3>Alunos com Livros Atrasados:</h3>";
      echo "<table class='primary'>";
      echo "<tr><th>CGM</th><th>Nome</th><th>Telefone</th><th>Situação</th><th>Curso</th><th>Série</th><th>Turma</th><th>Turno</th><th>Título do Livro</th><th>Autor</th><th>Data de Vencimento</th></tr>";
      foreach ($final_report as $item) {
        echo "<tr>";
        echo "<td>" . H($item['CGM']) . "</td>";
        echo "<td>" . H($item['NOME DO ESTUDANTE']) . "</td>";
        echo "<td>" . H($item['TELEFONE']) . "</td>";
        echo "<td>" . H($item['SITUAÇÃO']) . "</td>";
        echo "<td>" . H($item['CURSO']) . "</td>";
        echo "<td>" . H($item['SERIAÇÃO']) . "</td>";
        echo "<td>" . H($item['TURMA']) . "</td>";
        echo "<td>" . H($item['TURNO']) . "</td>";
        echo "<td>" . H($item['title']) . "</td>";
        echo "<td>" . H($item['author']) . "</td>";
        echo "<td>" . H($item['due_back_dt']) . "</td>";
        echo "</tr>";
      }
      echo "</table>";
    } else {
      echo "<p>Nenhum aluno com livros atrasados encontrado.</p>";
    }
  }
}

include("../shared/footer.php");
?>