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
#*  Common translation text shared among multiple pages
#****************************************************************************
$trans["sharedSubmit"]             = "\$text = 'Enviar';";
$trans["sharedCancel"]             = "\$text = 'Cancelar';";
$trans["sharedDelete"]             = "\$text = 'Excluir';";

#****************************************************************************
#*  Translation text for page biblio_view.php
#****************************************************************************
$trans["biblioViewTble1Hdr"]       = "\$text = 'Informações da Bibliografia';";
$trans["biblioViewMaterialType"]   = "\$text = 'Tipo de Material';";
$trans["biblioViewCollection"]     = "\$text = 'Coleção';";
$trans["biblioViewPictureHeader"]  = "\$text = 'Imagem da Bibliografia';";
$trans["biblioViewCallNmbr"]       = "\$text = 'Número de Chamada';";
$trans["biblioViewTble2Hdr"]       = "\$text = 'Informações da Cópia da Bibliografia';";
$trans["biblioViewTble2Col1"]      = "\$text = 'Código de Barras #';";
$trans["biblioViewTble2Col2"]      = "\$text = 'Descrição';";
$trans["biblioViewTble2Col3"]      = "\$text = 'Status';";
$trans["biblioViewTble2Col4"]      = "\$text = 'Data do Status';";
$trans["biblioViewTble2Col5"]      = "\$text = 'Devolução';";
$trans["biblioViewTble2ColFunc"]   = "\$text = 'Função';";
$trans["biblioViewTble2Coldel"]    = "\$text = 'excluir';";
$trans["biblioViewTble2Coledit"]   = "\$text = 'editar';";
$trans["biblioViewTble3Hdr"]       = "\$text = 'Informações Bibliográficas Adicionais';";
$trans["biblioViewNoAddInfo"]      = "\$text = 'Nenhuma informação bibliográfica adicional disponível.';";
$trans["biblioViewNoCopies"]       = "\$text = 'Nenhuma cópia foi criada.';";
$trans["biblioViewOpacFlg"]        = "\$text = 'Mostrar no OPAC';";
$trans["biblioViewNewCopy"]        = "\$text = 'Adicionar Nova Cópia';";
$trans["biblioViewNeweCopy"]       = "\$text = 'Adicionar Nova Cópia Eletrônica';";
$trans["biblioViewYes"]            = "\$text = 'sim';";
$trans["biblioViewNo"]             = "\$text = 'não';";

#****************************************************************************
#*  Translation text for page biblio_search.php
#****************************************************************************
$trans["biblioSearchNoResults"]    = "\$text = 'Nenhum resultado encontrado.';";
$trans["biblioSearchResults"]      = "\$text = 'Resultados da Pesquisa';";
$trans["biblioSearchResultPages"]  = "\$text = 'Páginas de Resultado';";
$trans["biblioSearchPrev"]         = "\$text = 'anterior';";
$trans["biblioSearchNext"]         = "\$text = 'próximo';";
$trans["First"]                    = "\$text = 'Primeiro';";
$trans["Last"]                     = "\$text = 'Último';";
$trans["biblioSearchResultTxt"]    = "if (%items% == 1) {
                                        \$text = '%items% resultado encontrado.';
                                      } else {
                                        \$text = '%items% resultados encontrados';
                                      }";
$trans["biblioSearchauthor"]       = "\$text = ' ordenado por autor';";
$trans["biblioSearchtitle"]        = "\$text = ' ordenado por título';";
$trans["biblioSearchSortByAuthor"] = "\$text = 'ordenar por autor';";
$trans["biblioSearchSortByTitle"]  = "\$text = 'ordenar por título';";
$trans["biblioSearchTitle"]        = "\$text = 'Título';";
$trans["biblioSearchTitleRemainder"] = "\$text = 'Restante do Título';";
$trans["biblioSearchAuthor"]       = "\$text = 'Autor';";
$trans["biblioSearchMaterial"]     = "\$text = 'Material';";
$trans["biblioSearchCollection"]   = "\$text = 'Coleção';";
$trans["biblioSearchCall"]         = "\$text = 'Número de Chamada';";
$trans["biblioSearchCopyBCode"]    = "\$text = 'Código de Barras da Cópia';";
$trans["biblioSearchCopyStatus"]   = "\$text = 'Status';";
$trans["biblioSearchNoCopies"]     = "\$text = 'Nenhuma cópia disponível.';";
$trans["biblioSearchHold"]         = "\$text = 'reserva';";
$trans["biblioSearchOutIn"]        = "\$text = 'emprestar/devolver';";
$trans["biblioSearchDetail"]       = "\$text = 'Mostrar informações detalhadas da Bibliografia';";
$trans["biblioSearchBCode2Chk"]    = "\$text = 'Código de Barras para Formulário de Empréstimo ou Devolução';";
$trans["biblioSearchBCode2Hold"]   = "\$text = 'Código de Barras para Formulário de Reserva';";

#****************************************************************************
#*  Translation text for page loginform.php
#****************************************************************************
$trans["loginFormTbleHdr"]         = "\$text = 'Login de Funcionário';";
$trans["loginFormUsername"]        = "\$text = 'Nome de Usuário';";
$trans["loginFormPassword"]        = "\$text = 'Senha';";
$trans["loginFormLogin"]           = "\$text = 'Login';";
$trans["PasswordForgotten"]        = "\$text = 'Senha esquecida?';";

#****************************************************************************
#*  Translation text for page login.php
#****************************************************************************
$trans["loginUserNameReqErr"]      = "\$text = 'Nome de usuário é obrigatório ou incorreto.';";
$trans["loginPwdReqErr"]           = "\$text = 'Senha é obrigatória.';";
$trans["loginPwdInvErr"]           = "\$text = 'Login inválido.';";

#****************************************************************************
#*  Translation text for page hold_del_confirm.php
#****************************************************************************
$trans["holdDelConfirmMsg"]        = "\$text = 'Tem certeza de que deseja excluir esta solicitação de reserva?';";

#****************************************************************************
#*  Translation text for page hold_del.php
#****************************************************************************
$trans["holdDelSuccess"]           = "\$text='Solicitação de reserva excluída com sucesso.';";

#****************************************************************************
#*  Translation text for page help_header.php
#****************************************************************************
$trans["helpHeaderTitle"]          = "\$text='Ajuda do OpenBiblio';";
$trans["helpHeaderCloseWin"]       = "\$text='Fechar Janela';";
$trans["helpHeaderContents"]       = "\$text='Conteúdo';";
$trans["helpHeaderPrint"]          = "\$text='Imprimir';";

$trans["catalogResults"]           = "\$text='Resultados da Pesquisa';";
$trans["Revise Page"]              = "\$text='Revisar Página';";
$trans["wiki updates to this page"] = "\$text='atualizações wiki para esta página';";


#****************************************************************************
#*  Translation text for page header.php and header_opac.php
#****************************************************************************
$trans["headerTodaysDate"]         = "\$text='data de hoje:';";
$trans["headerDateFormat"]         = "\$text='d M, Y';";
$trans["headerLibraryHours"]       = "\$text='horário da biblioteca:';";
$trans["headerLibraryPhone"]       = "\$text='telefone da biblioteca:';";
$trans["headerHome"]               = "\$text='Início';";
$trans["headerCirculation"]        = "\$text='Circulação';";
$trans["headerCataloging"]         = "\$text='Catalogação';";
$trans["headerAdmin"]              = "\$text='Administração';";
$trans["headerReports"]            = "\$text='Relatórios';";

#****************************************************************************
#*  Translation text for page footer.php
#****************************************************************************
$trans["footerLibraryHome"]        = "\$text='Página Inicial da Biblioteca';";
$trans["footerOPAC"]               = "\$text='OPAC';";
$trans["footerHelp"]               = "\$text='Ajuda';";
$trans["footerPoweredBy"]          = "\$text='Desenvolvido por OpenBiblio versão';";
$trans["footerDatabaseVersion"]    = "\$text='versão do banco de dados';";
$trans["footerCopyright"]          = "\$text='Direitos Autorais';";
$trans["footerUnderThe"]           = "\$text='sob a';";
$trans["footerGPL"]                = "\$text='Licença Pública Geral GNU';";

#**************************************************************************************
#*  Translation text for page 
#   - circ/
#   - opac/
#   -- mbr_pwd_reset_form.php
#   -- mbr_pwd_newset.php
#   -- mbr_pwd_newset_form.php
#   - admin/staff_pwd_newset_form.php
#**************************************************************************************
$trans["mbr_pwd_create_form_Resetheader"]   = "\$text = 'Criar senha de membro:';";
$trans["mbr_pwd_reset_form_Resetheader"]    = "\$text = 'Redefinir senha de membro:';";
$trans["staff_pwd_reset_form_Resetheader"]  = "\$text = 'Redefinir senha de funcionário:';";
$trans["new_form_Password"]                 = "\$text = 'Senha:';";
$trans["PwdRequirement"]                    = "\$text = '<p style=\"color: #1a62ac;\">Regras: A senha deve ter entre 8 e 20 caracteres, pelo menos 1 dígito(s), <br />'        . 'pelo menos 1 letra minúscula(s), pelo menos 1 letra maiúscula(s), pelo menos 1 caractere não alfanumérico(s) (permitido: @_#§%$)</p>';";
$trans["new_form_Reenterpassword"]          = "\$text = 'Repetir senha:';";

#****************************************************************************
#*  Translation text for page circ/ and opac/mbr_pwd_reset.php
#****************************************************************************
$trans["mbr_return"]                       = "\$text = 'Voltar ao perfil do membro';";
$trans["PwdResetSuccessfully"]             = "\$text='Senha alterada com sucesso.';";

#****************************************************************************
#*  Translation text for page circ/ and shared/timeout.php
#****************************************************************************
$trans["PwdTimeout"]                       = "\$text = 'Sua conta está bloqueada por %time% minutos devido a muitas entradas incorretas';";

#****************************************************************************
#*  Translation text for page shared/supsended.php
#****************************************************************************
$trans["staffSuspended"]                   = "\$text = 'Sua conta foi desativada.';";

#****************************************************************************
#*  Translation text for files in folders opac and shared
#   mbr_pwd_forget_form.php, mbr_pwd_forget.php and mbr_pwd_newset_form.php
#   staff_pwd_forget_form.php, staff_pwd_forget.php and staff_pwd_newset.php
#****************************************************************************
$trans["PwdForgottenSettingNone"]          = "\$text = 'Função de senha esquecida está desativada.';";
$trans["PwdForgotten"]                     = "\$text = 'Solicitar uma nova senha:';";
$trans["PwdForgottenInfo"]                 = "\$text = 'Para redefinir sua senha, por favor, insira seu nome de usuário ' 
                                                        . 'ou seu endereço de e-mail. Se você for encontrado no banco de dados, ' 
                                                        . 'uma mensagem será enviada para o seu endereço de e-mail.';";
$trans["email"]                            = "\$text = 'E-mail:';";
$trans["barcodeNmbr"]                      = "\$text = 'Número do Código de Barras:';";
$trans["or"]                               = "\$text = 'ou';";
$trans["and"]                              = "\$text = 'e';";
$trans["NewPassword"]                      = "\$text = 'Nova Senha';";
$trans["errEmailMissing"]                  = "\$text = 'Por favor, insira um endereço de e-mail!';";
$trans["errbarcodeNmbrMissing"]            = "\$text = 'Por favor, insira o número de usuário!';";
$trans["errNoUserFound"]                   = "\$text = 'Nenhum usuário encontrado!';";
$trans["errNoPwdForgottenCode"]            = "\$text = 'Nenhum código de senha esquecida pôde ser criado!';";
$trans["errTooManyUserFound"]              = "\$text = 'Muitos usuários encontrados com o mesmo e-mail. ' 
                                                        . 'Por favor, use o campo de entrada para o seu nome de usuário!';";
$trans["errMailCouldNotBeSent"]            = "\$text = 'Mensagem não pôde ser enviada.';";
$trans["SendMailForPwdForgottenCode"]      = "\$text = 'Se você inseriu o nome de usuário ou o endereço de e-mail único ' 
                                                    . 'corretamente, um e-mail automático será enviado para você.';";
$trans["TooManyAttempts"]                  = "\$text = 'Muitas tentativas!';";
$trans["errExpiredPwdForgottenCode"]       = "\$text = 'Infelizmente seu código expirou.';";
$trans["errInvalidPwdForgottenURL"]        = "\$text = 'Certifique-se de que você tem o link exato na URL!';";

?>