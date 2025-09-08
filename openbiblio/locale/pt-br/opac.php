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
$trans["opac_Header"]        = "\$text='Catálogo Online de Acesso Público (OPAC)';";
$trans["opac_WelcomeMsg"]    = "\$text='Bem-vindo ao catálogo online de acesso público da nossa biblioteca. Pesquise em nosso catálogo para visualizar informações bibliográficas sobre os acervos que temos em nossa biblioteca.';";
$trans["opac_SearchTitle"]   = "\$text='Pesquisar Bibliografia por Frase de Pesquisa:';";
$trans["opac_Keyword"]       = "\$text='Palavra-chave';";
$trans["opac_Title"]         = "\$text='Título';";
$trans["opac_Author"]        = "\$text='Autor';";
$trans["opac_Subject"]       = "\$text='Assunto';";
$trans["opac_All"]           = "\$text='Todos';";
$trans["opac_Callno"]        = "\$text='Número de Chamada';";
$trans["opac_Search"]        = "\$text='Pesquisar';";
$trans["opac_SearchInvert"]  = "\$text='Inverter Seleção';";
$trans["opac_SearchColl"]    = "\$text='Limitar Pesquisa a Coleções';";
$trans["opac_SearchMat"]     = "\$text='Limitar Pesquisa a Tipos de Material';";

#****************************************************************************
#*  Translation text for page loginform.php
#****************************************************************************
$trans["loginFormTbleHdr"]         = "\$text = 'Login de Membro';";
$trans["MemberID"]        	   = "\$text = 'Número do Cartão';";
$trans["Secret Word"]	           = "\$text = 'Palavra Secreta';";
$trans["loginFormLogin"]           = "\$text = 'Login';";
$trans["loginDeactived"]           = "\$text = 'Login desativado.';";
$trans["PasswordForgotten"]	   = "\$text = 'Senha esquecida?';";

#****************************************************************************
#*  Translation text for page login.php
#****************************************************************************
$trans["MemberID is required."]    = "\$text = 'Número do Cartão é obrigatório.';";
$trans["Password is required."] = "\$text = 'Senha é obrigatória.';";
$trans["Invalid Login!"] = "\$text = 'Dados de Login inválidos!';";

#****************************************************************************
#*  Translation text for page mbr_account.php
#****************************************************************************
$trans["mbrViewBalMsg"]           = "$text='Nota: O membro tem um saldo de conta pendente de %bal%.';";
$trans["mbrViewHead1"]            = "$text='Informações do Membro:';";
$trans["mbrViewName"]             = "$text='Nome:';";
$trans["mbrViewCardNmbr"]         = "$text='Número do Cartão:';";
$trans["mbrViewMbrShipEnd"]       = "$text='pago até:';";
$trans["mbrViewMbrShipNoEnd"]     = "$text='ilimitado/não usado';";
$trans["mbrViewHead4"]            = "$text='Bibliografias Atualmente Emprestadas:';";
$trans["mbrPrintCheckouts"]	  = "$text='imprimir empréstimos';";
$trans["mbrViewOutHdr1"]          = "$text='Emprestado';";
$trans["mbrViewOutHdr2"]          = "$text='Material';";
$trans["mbrViewOutHdr3"]          = "$text='Código de Barras';";
$trans["mbrViewOutHdr4"]          = "$text='Título';";
$trans["mbrViewOutHdr5"]          = "$text='Autor';";
$trans["mbrViewOutHdr6"]          = "$text='Devolução';";
$trans["mbrViewOutHdr7"]          = "$text='Dias de Atraso';";
$trans["mbrViewOutHdr8"]          = "$text='Renovação';";
$trans["mbrViewNoCheckouts"]      = "$text='Nenhuma bibliografia está atualmente emprestada.';";
$trans["Cannot renew item *"]     = "$text='Não é possível renovar o item *';";
$trans["Renew item"]              = "$text='Renovar item';";
$trans["mbrViewOutHdr9"]          = "$text='vez(es)';";
$trans["* You cannot renew, if you are more then 7 days too late"] = "$text='* Você não pode renovar, se estiver mais de 7 dias atrasado';";
$trans["mbrViewHead5"]            = "$text='Fazer Reserva:';";
$trans["mbrViewBarcode"]          = "$text='Número do Código de Barras:';";
$trans["indexSearch"]             = "$text='Pesquisar';";
$trans["mbrViewPlaceHold"]        = "$text='Fazer Reserva';";
$trans["mbrViewHead6"]            = "$text='Bibliografias Atualmente em Reserva:';";
$trans["mbrViewHoldHdr2"]         = "$text='Colocado em Reserva';";
$trans["mbrViewHoldHdr3"]         = "$text='Material';";
$trans["mbrViewHoldHdr4"]         = "$text='Código de Barras';";
$trans["mbrViewHoldHdr5"]         = "$text='Título';";
$trans["mbrViewHoldHdr6"]         = "$text='Autor';";
$trans["mbrViewHoldHdr7"]         = "$text='Status';";
$trans["mbrViewHoldHdr8"]         = "$text='Devolução';";
$trans["mbrViewNoHolds"]          = "$text='Nenhuma bibliografia está atualmente em reserva.';";
$trans["Please send a mail to delete holds"] = "$text='Por favor, envie um e-mail para excluir reservas';";
$trans["eMail"]                   = "$text='E-mail';";
$trans["mbrViewPwd"]              = "$text='Senha:';";
$trans["mbrNoPassword"]           = "$text = '<p style=\"font-weight: bold; color: red;\";>Nenhuma senha definida!</p>';";

#****************************************************************************
#*  Translation text for page mbr_print_checkouts.php
#****************************************************************************
$trans["mbrPrintCheckoutsTitle"]  = "\$text='Empréstimos para %mbrName%';";
$trans["mbrPrintCheckoutsHdr1"]   = "\$text='Data Atual:';";
$trans["mbrPrintCheckoutsHdr2"]   = "\$text='Membro:';";
$trans["mbrPrintCheckoutsHdr3"]   = "\$text='Número do Cartão:';";
$trans["mbrPrintCloseWindow"]     = "\$text='Fechar Janela';";

#****************************************************************************
#*  Translation text for page place_hold.php
#****************************************************************************
$trans["placeHoldErr2"]           = "\$text='O código de barras não existe.';";
$trans["placeHoldErr3"]           = "\$text='Este membro já tem esse item emprestado -- não fazendo reserva.';";
$trans["This item is not checked out or on hold."]           = "\$text='Este item não está emprestado ou em reserva.';";

?>
