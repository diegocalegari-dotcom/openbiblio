<?php
error_log("DEBUG: run_report.php started. REQUEST: " . print_r($_REQUEST, true)); // ADD THIS
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */

require_once("../shared/common.php");

require_once("../classes/Report.php");

if (isset($_REQUEST['rpt_type'])) {
    list($rpt, $err) = Report::create_e($_REQUEST['rpt_type'], $_REQUEST['rpt_type']);
    if ($err) {
        header('Location: ../reports/index.php?msg=' . U('Erro ao criar relatório: ' . $err->toStr()));
        exit();
    }
    $errs = $rpt->initCgi_el('rpt_');
    if (!empty($errs)) {
        header('Location: ../reports/index.php?msg=' . U('Erro ao inicializar relatório: ' . implode(', ', $errs)));
        exit();
    }
} else if (isset($_REQUEST['rpt_name'])) {
    $rpt = Report::load($_REQUEST['rpt_name']);
    if ($rpt === NULL) {
        header('Location: ../reports/index.php?msg=' . U('Relatório não encontrado.'));
        exit();
    }
} else {
    header('Location: ../reports/index.php');
    exit();
}

 

require_once("../shared/common.php");
require_once("../classes/Table.php");
require_once("../classes/Localize.php");
$loc = new Localize(OBIB_LOCALE, "reports");

$tab = "reports";
$nav = "results";
if (isset($_REQUEST['tab'])) {
    $tab = $_REQUEST['tab'];
}
if (isset($_REQUEST['nav'])) {
    $nav = $_REQUEST['nav'];
}
require_once("../shared/logincheck.php");

if (isset($_REQUEST['rpt___format'])) {
    $format = $_REQUEST['rpt___format'];
} else {
    $format = 'paged';
}

function echolink($page, $text, $newSort = NULL)
{
    global $tab, $nav, $format, $rpt;
    echo '<a href="../reports/run_report.php?rpt_name=' . HURL($rpt->name);
    echo '&amp;rpt___format=' . HURL($format);
    echo '&amp;tab=' . HURL($tab) . '&amp;nav=' . HURL($nav);
    echo '&amp;page=' . HURL($page);
    if ($newSort) {
        echo '&amp;rpt_order_by=' . HURL($newSort);
    }
    echo '">'
        . $text
        . '</a>';
}
function printResultPages(&$loc, $currPage, $pageCount)
{
    if ($pageCount <= 1) {
        return false;
    }
    echo $loc->getText("Result Pages: ");
    if ($currPage > 6) {
        echolink(1, $loc->getText("&laquo;First"));
        echo ' ';
    }
    if ($currPage > 1) {
        echolink($currPage - 1, $loc->getText("&laquo;Prev"));
        echo ' ';
    }
    $start = $currPage - 20;
    $end = $currPage + 20;
    if ($start < 1)
        $start = 1;
    if ($end > $pageCount)
        $end = $pageCount;
    for ($i = $start; $i <= $end; $i++) {
        if ($i == $currPage) {
            echo "<b>" . $i . "</b> ";
        } else {
            echolink($i, $i);
            echo ' ';
        }
    }
    if ($currPage < $pageCount) {
        echolink($currPage + 1, $loc->getText("Next&raquo;"));
        echo ' ';
    }
    if ($currPage < $pageCount - 20) {
        echolink($pageCount, $loc->getText("Last&raquo;"));
        echo ' ';
    }
}


if (isset($_REQUEST['page'])) {
    $page = $_REQUEST['page'];
} else {
    $page = $rpt->curPage();
}

foreach ($rpt->layouts() as $l) {
    if ($l['title']) {
        $title = $l['title'];
    } else {
        $title = $l['name'];
    }
    //Changes PVD(8.0.x)
    (new Nav)->node(
        'results/' . $l['name'],
        $loc->getText($title),
        '../shared/layout.php?rpt=Report&name=' . U($l['name'])
    );
}
//Changes PVD(8.0.x)
(new Nav)->node(
    'results/list',
    $loc->getText("Print list"),
    '../shared/layout.php?rpt=Report&name=list'
);
//Changes PVD(8.0.x)
(new Nav)->node(
    'reportcriteria',
    $loc->getText("Report Criteria"),
    '../reports/report_criteria.php?type=' . U($rpt->type())
);

if ($format == 'csv') {
    include_once('../classes/CsvTable.php');
    $table = new CsvTable;
    header('Content-type: text/csv;header=yes');
    header('Content-disposition: inline; filename="' . $rpt->type() . '.csv"');
    $rpt->table($table);
    exit;
}

include('../shared/header.php');

if (isset($_REQUEST["msg"]) && !empty($_REQUEST["msg"])) {
    echo "<font class=\"error\">" . H($_REQUEST["msg"]) . "</font><br><br>";
}

if ($rpt->count() == 0) {
    echo $loc->getText("No results found.");
    require_once("../shared/footer.php");
    exit();
}

echo '<p>' . $rpt->count() . ' ' . $loc->getText("results found.") . '</p>';
if ($format == 'paged') {
    printResultPages($loc, $page, ceil($rpt->count() / OBIB_ITEMS_PER_PAGE));
}
?>

<table class="resultshead">
    <tr>
        <th>
            <?php echo $loc->getText("Report Results:"); ?>
        </th>
        <td class="resultshead">
            <table class="buttons">
                <tr>
                    <?php
                    # Fill in report actions here
                    ?>
                </tr>
            </table>
        </td>
    </tr>
</table>
<?php
$rpt->pageTable($page);

include('../shared/footer.php');
?>
