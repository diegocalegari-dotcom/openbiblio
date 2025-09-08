<?php
require_once('../classes/Lay.php');

class Layout_abnt_layout
{
    function render($rpt)
    {
        $lay = new Lay('letter', 'portrait');
        $lay->container('Columns', array(
            'margin-left' => '1in',
            'margin-right' => '1in',
            'margin-top' => '1in',
            'margin-bottom' => '1in',
        )
        );
        $lay->pushFont('Times-Roman', 12);
        $lay->container('TextLine', array('width' => '6.5in'));
        $lay->text("TESTE: Layout ABNT está funcionando!");
        $lay->close();
        $lay->popFont();
        $lay->close();
        $lay->close();
    }
}
?>