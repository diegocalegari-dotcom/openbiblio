<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 
/**********************************************************************************
 *   Instructions for translators:
 *
 *   All gettext key/value pairs are specified as follows:
 *     $trans["key"] = "<php translation code to set the $text variable>";
 *   Allowing translators the ability to execute php code withint the transFunc string
 *   provides the maximum amount of flexibility to format the languange syntax.
 *
 *   Formatting rules:
 *   - Resulting translation string must be stored in a variable called $text.
 *   - Input arguments must be surrounded by % characters (i.e. %pageCount%).
 *   - A backslash ('\') needs to be placed before any special php characters 
 *     (such as $, ", etc.) within the php translation code.
 *
 *   Simple Example:
 *     $trans["homeWelcome"]       = "\$text='Welcome to OpenBiblio';";
 *
 *   Example Containing Argument Substitution:
 *     $trans["searchResult"]      = "\$text='page %page% of %pages%';";
 *
 *   Example Containing a PHP If Statment and Argument Substitution:
 *     $trans["searchResult"]      = 
 *       "if (%items% == 1) {
 *         \$text = '%items% result';
 *       } else {
 *         \$text = '%items% results';
 *       }";
 *
 **********************************************************************************
 */


#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHeading"]       = "\$text='Bem-vindo ao OpenBiblio';";
$trans["indexIntro"]         = "\$text='Use as abas de navegação na parte superior de cada página para acessar as seguintes seções de administração da biblioteca.';";
$trans["indexTab"]           = "\$text='Aba';";
$trans["indexDesc"]          = "\$text='Descrição';";
$trans["indexCirc"]          = "\$text='Circulação';";
$trans["indexCircDesc1"]     = "\$text='Use esta aba para gerenciar os registros de seus membros.';";
$trans["indexCircDesc2"]     = "\$text='Administração de membros (novo, pesquisar, editar, excluir)';";
$trans["indexCircDesc3"]     = "\$text='Empréstimo de bibliografia de membros, reservas, conta e histórico';";
$trans["indexCircDesc4"]     = "\$text='Devolução de bibliografia e lista de carrinho de estantes';";
//$trans["indexCircDesc5"]     = "\$text='Member late fee payment';";
$trans["indexCat"]           = "\$text='Catalogação';";
$trans["indexCatDesc1"]      = "\$text='Use esta aba para gerenciar seus registros de bibliografia.';";
$trans["indexCatDesc2"]      = "\$text='Administração de bibliografia (novo, pesquisar, editar, excluir)';";
//$trans["indexCatDesc3"]      = "\$text='Import bibliography from USMarc record';";
$trans["indexAdmin"]         = "\$text='Administração';";
$trans["indexAdminDesc1"]    = "\$text='Use esta aba para gerenciar registros de funcionários e administrativos.';";
$trans["indexAdminDesc2"]    = "\$text='Administração de funcionários (novo, editar, senha, excluir)';";
$trans["indexAdminDesc3"]    = "\$text='Configurações gerais da biblioteca';";
$trans["indexAdminDesc5"]    = "\$text='Lista de tipos de material da biblioteca';";
$trans["indexAdminDesc4"]    = "\$text='Lista de coleções da biblioteca';";
$trans["indexAdminDesc6"]    = "\$text='Editor de tema da biblioteca';";
$trans["indexReports"]       = "\$text='Relatórios';";
$trans["indexReportsDesc1"]  = "\$text='Use esta aba para executar relatórios sobre os dados da sua biblioteca.';";
$trans["indexReportsDesc2"]  = "\$text='Relatório.';";
$trans["indexReportsDesc3"]  = "\$text='Etiquetas.';";

?>