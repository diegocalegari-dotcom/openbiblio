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
#*  Translation text shared by various php files under the navbars dir
#****************************************************************************
$trans["login"]                    = "\$text = 'Login';";
$trans["logout"]                   = "\$text = 'Sair';";
$trans["help"]                     = "\$text = 'Ajuda';";
$trans["catalogSearch"]           = "\$text = 'Pesquisa de Bibliografia';";
$trans["staff"]                    = "\$text = 'Equipe: ';";

#****************************************************************************
#*  Translation text for page home.php
#****************************************************************************
$trans["homeHomeLink"]             = "\$text = 'Início';";
$trans["homeLicenseLink"]          = "\$text = 'Licença';";

#****************************************************************************
#*  Translation text for page admin.php
#****************************************************************************
$trans["adminSummary"]             = "\$text = 'Resumo Admin';";
$trans["adminStaff"]               = "\$text = 'Administração de Funcionários';";
$trans["adminMaterialTypes"]       = "\$text = 'Tipos de Material';";
$trans["adminCollections"]         = "\$text = 'Coleções';";
$trans["adminTranslation"]         = "\$text = 'Tradução';";
$trans["Member Types"]             = "\$text = 'Tipos de Membro';";
$trans["Member Fields"]            = "\$text = 'Campos de Membro';";
$trans["Copy Fields"]              = "\$text = 'Campos de Cópia';";
$trans["Checkout Privs"]           = "\$text = 'Privilégios de Empréstimo';";
$trans["adminSettings"]            = "\$text = 'Configurações da Biblioteca';";
$trans["adminMailSettings"]        = "\$text = 'Configurações de E-mail';";
$trans["adminMailMessages"]        = "\$text = 'Mensagens de E-mail';";
$trans["adminThemes"]              = "\$text = 'Temas';";

#****************************************************************************
#*  Translation text for page cataloging.php
#****************************************************************************
$trans["catalogSummary"]           = "\$text = 'Resumo do Catálogo';";
$trans["catalogResults"]           = "\$text = 'Resultados da Pesquisa';";
$trans["catalogBibInfo"]           = "\$text = 'Informações da Bibliografia';";
$trans["catalogBibEdit"]           = "\$text = 'Editar-Básico';";
$trans["catalogBibEditMarc"]       = "\$text = 'Editar-MARC';";
$trans["catalogUploadPicture"]     = "\$text = 'Carregar Imagem';";
$trans["catalogBibMarcNewFld"]     = "\$text = 'Novo Campo MARC';";
$trans["catalogBibMarcNewFldShrt"] = "\$text = 'Novo MARC';";
$trans["catalogBibMarcEditFld"]    = "\$text = 'Editar Campo MARC';";
$trans["catalogCopyNew"]           = "\$text = 'Nova Cópia';";
$trans["catalogCopyEdit"]          = "\$text = 'Editar Cópia';";
$trans["catalogHolds"]             = "\$text = 'Solicitações de Reserva';";
$trans["catalogDelete"]            = "\$text = 'Excluir';";
$trans["catalogBibNewLike"]        = "\$text = 'Novo Semelhante';";
$trans["catalogBibNew"]            = "\$text = 'Nova Bibliografia';";
$trans["Upload Marc Data"]         = "\$text = 'Carregar Dados Marc';";
$trans["History"]                  = "\$text = 'Histórico';";

#****************************************************************************
#*  Translation text for page reports.php
#****************************************************************************
$trans["reportsSummary"]           = "\$text = 'Resumo de Relatórios';";
$trans["reportsReportListLink"]    = "\$text = 'Lista de Relatórios';";
$trans["reportsLabelsLink"]        = "\$text = 'Imprimir Etiquetas';";
$trans["reportsLettersLink"]        = "\$text = 'Imprimir Cartas';";
$trans["Report Results"]           = "\$text = 'Resultados do Relatório';";
$trans["Report List"]              = "\$text = 'Lista de Relatórios';";
$trans["Report Criteria"]          = "\$text = 'Critérios do Relatório';";

#****************************************************************************
#*  Translation text for page opac.php
#****************************************************************************
$trans["catalogResults"]           = "\$text = 'Resultados da Pesquisa';";
$trans["catalogBibInfo"]           = "\$text = 'Informações da Bibliografia';";
$trans["userlogin"]                = "\$text = 'Login do Usuário';";
$trans["memberaccount"]            = "\$text = 'Conta do Membro';";

#****************************************************************************
#*  Translation text for page navbar opac for file mbr_pwd_forget_form.php
#****************************************************************************
$trans["PwdNewSet"]           = "\$text='Redefinir senha';";

#Added

$trans["memberInfo"]               = "\$text = 'Informações do Membro';";
$trans["memberSearch"]             = "\$text = 'Pesquisa de Membro';";
$trans["editInfo"]                 = "\$text = 'Editar perfil';";
$trans["PwdCreate"]                = "\$text = 'Criar Senha.';";
$trans["PwdReset"]                 = "\$text = 'Redefinir Senha';";
$trans["checkoutHistory"]          = "\$text = 'Histórico de Empréstimos';";
$trans["account"]                  = "\$text = 'Conta';";
$trans["checkIn"]                  = "\$text = 'Devolução';";
$trans["memberSearch"]             = "\$text = 'Pesquisa de Membro';";
$trans["newMember"]                = "\$text = 'Novo Membro';";
$trans["Offline Circulation"]      = "\$text = 'Circulação Offline';";
$trans["Cobrança de Atrasos"] = "\$text = 'Cobrança de Atrasos';";
?>
