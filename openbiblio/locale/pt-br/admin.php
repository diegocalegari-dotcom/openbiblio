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
$trans["adminSubmit"]                   = "\$text = 'Submit';";
$trans["adminCancel"]                   = "\$text = 'Cancel';";
$trans["adminDelete"]                   = "\$text = 'Delete';";
$trans["adminUpdate"]                   = "\$text = 'Update';";
$trans["adminFootnote"]                 = "\$text = 'Fields marked with %symbol% are required.';";
$trans["function"]                      = "\$text = 'Function';";
$trans["edit"]                          = "\$text = 'Edit';";

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHdr"]                      = "\$text = 'Admin';";
$trans["indexDesc"]                     = "\$text = 'Use the functions located in the left hand navigation area to manage your library\'s staff and administrative records.';";

#****************************************************************************
#*  Translation text for page collections*.php
#****************************************************************************
$trans["adminCollections_delReturn"]    = "\$text = 'return to collection list';";
$trans["adminCollections_delStart"]     = "\$text = 'Collection, ';";

#****************************************************************************
#*  Translation text for page collections_del.php
#****************************************************************************
$trans["adminCollections_delEnd"]       = "\$text = ', has been deleted.';";

#****************************************************************************
#*  Translation text for page collections_del_confirm.php
#****************************************************************************
$trans["adminCollections_del_confirmText"] = "\$text = 'Are you sure you want to delete collection, ';";

#****************************************************************************
#*  Translation text for page collections_edit.php
#****************************************************************************
$trans["adminCollections_editEnd"]      = "\$text = ', foi atualizada.';";

#****************************************************************************
#*  Translation text for page collections_edit_form.php
#****************************************************************************
$trans["adminCollections_edit_formEditcollection"] = "\$text = 'Editar Coleção:';";
$trans["adminCollections_edit_formDescription"]    = "\$text = 'Descrição:';";
$trans["adminCollections_edit_formDaysdueback"]    = "\$text = 'Dias para Devolução:';";
$trans["adminCollections_edit_formDailyLateFee"]   = "\$text = 'Multa Diária:';";
$trans["adminCollections_edit_formNote"]           = "\$text = '*Nota:';";
$trans["adminCollections_edit_formNoteText"]       = "\$text = 'Definir os dias para devolução como zero torna toda a coleção indisponível para empréstimo.';";

#****************************************************************************
#*  Translation text for page collections_list.php
#****************************************************************************
$trans["adminCollections_listAddNewCollection"]    = "\$text = 'Adicionar Nova Coleção';";
$trans["adminCollections_listCollections"]         = "\$text = 'Coleções:';";
$trans["adminCollections_listFunction"]            = "\$text = 'Função';";
$trans["adminCollections_listDescription"]         = "\$text = 'Descrição';";
$trans["adminCollections_listDaysdueback"]         = "\$text = 'Dias<br>para Devolução';";
$trans["adminCollections_listDailylatefee"]        = "\$text = 'Multa<br>Diária';";
$trans["adminCollections_listBibliographycount"]   = "\$text = 'Contagem<br>de Bibliografia';";
$trans["adminCollections_listEdit"]                = "\$text = 'Editar';";
$trans["adminCollections_listDel"]                 = "\$text = 'excluir';";
$trans["adminCollections_ListNote"]                = "\$text = '*Nota:';";
$trans["adminCollections_ListNoteText"]            = "\$text = 'A função de exclusão está disponível apenas para coleções com contagem de bibliografia zero.<br>Se você deseja excluir uma coleção com contagem de bibliografia maior que zero, primeiro precisará alterar o tipo de material dessas bibliografias para outro tipo de material.';";

#****************************************************************************
#*  Translation text for page collections_new.php
#****************************************************************************
$trans["adminCollections_newAdded"]                = "\$text = ', foi adicionado.';";

#****************************************************************************
#*  Translation text for page collections_new_form.php
#****************************************************************************
$trans["adminCollections_new_formAddnewcollection"] = "\$text = 'Adicionar Nova Coleção:';";
$trans["adminCollections_new_formDescription"]      = "\$text = 'Descrição:';";
$trans["adminCollections_new_formDaysdueback"]      = "\$text = 'Dias para Devolução:';";
$trans["adminCollections_new_formDailylatefee"]     = "\$text = 'Multa Diária:';";
$trans["adminCollections_new_formNote"]             = "\$text = '*Nota:';";
$trans["adminCollections_new_formNoteText"]         = "\$text = 'Definir os dias para devolução como zero torna toda a coleção indisponível para empréstimo.';";

#****************************************************************************
#*  Translation text for page materials_del.php
#****************************************************************************
$trans["admin_materials_delMaterialType"]           = "\$text = 'Tipo de material, ';";
$trans["admin_materials_delMaterialdeleted"]        = "\$text = ', foi excluído.';";
$trans["admin_materials_Return"]                    = "\$text = 'voltar para a lista de tipos de material';";

#****************************************************************************
#*  Translation text for page materials_del_form.php
#****************************************************************************
$trans["admin_materials_delAreyousure"]             = "\$text = 'Tem certeza de que deseja excluir o tipo de material, ';";

#****************************************************************************
#*  Translation text for page materials_edit_form.php
#****************************************************************************
$trans["admin_materials_delEditmaterialtype"]       = "\$text = 'Editar Tipo de Material:';";
$trans["admin_materials_delDescription"]            = "\$text = 'Descrição:';";
$trans["admin_materials_delunlimited"]              = "\$text = '(digite 0 para ilimitado)';";
$trans["admin_materials_delImagefile"]              = "\$text = 'Arquivo de Imagem:';";
$trans["admin_materials_delNote"]                   = "\$text = '*Nota:';";
$trans["admin_materials_delNoteText"]               = "\$text = 'Os arquivos de imagem devem estar localizados no diretório openbiblio/images.';";

#****************************************************************************
#*  Translation text for page materials_edit.php
#****************************************************************************
$trans["admin_materials_editEnd"]                   = "\$text = ', foi atualizado.';";

#****************************************************************************
#*  Translation text for page materials_list.php
#****************************************************************************
$trans["admin_materials_listAddmaterialtypes"]      = "\$text = 'Adicionar Novo Tipo de Material';";
$trans["admin_materials_listMaterialtypes"]         = "\$text = 'Tipos de Material:';";
$trans["admin_materials_listFunction"]              = "\$text = 'Função';";
$trans["admin_materials_listDescription"]           = "\$text = 'Descrição';";
$trans["admin_materials_listLimits"]                = "\$text = 'Limites';";
$trans["admin_materials_listCheckoutlimit"]         = "\$text = 'Empréstimo';";
$trans["admin_materials_listRenewallimit"]          = "\$text = 'Renovação';";
$trans["admin_materials_listImageFile"]             = "\$text = 'Arquivo<br>de Imagem';";
$trans["admin_materials_listBibcount"]              = "\$text = 'Contagem<br>de Bibliografia';";
$trans["admin_materials_listDel"]                   = "\$text = 'excluir';";
$trans["admin_materials_listNote"]                  = "\$text = '*Nota:';";
$trans["admin_materials_listNoteText"]              = "\$text = 'A função de exclusão está disponível apenas para tipos de material com contagem de bibliografia zero. Se você deseja excluir um tipo de material com contagem de bibliografia maior que zero, primeiro precisará alterar o tipo de material dessas bibliografias para outro tipo de material.';";
$trans["No fields found!"]                          = "\$text = 'Nenhum campo encontrado!';";

#****************************************************************************
#*  Translation text for page materials_new.php
#****************************************************************************
$trans["admin_materials_listNewadded"]              = "\$text = ', foi adicionado.';";

#****************************************************************************
#*  Translation text for page materials_new_form.php
#****************************************************************************
$trans["admin_materials_new_formNoteText"]          = "\$text = 'Os arquivos de imagem devem estar localizados no diretório openbiblio/images.';";

#****************************************************************************
#*  Translation text for page noauth.php
#****************************************************************************
$trans["admin_noauth"]                              = "\$text = 'Você não está autorizado a usar a aba Admin.';";

#****************************************************************************
#*  Translation text for page settings_edit.php
#****************************************************************************

#****************************************************************************
#*  Translation text for page settings_edit_form.php
#****************************************************************************
$trans["admin_settingsUpdated"]                     = "\$text = 'Dados foram atualizados.';";
$trans["admin_settingsEditsettings"]                = "\$text = 'Editar Configurações da Biblioteca:';";
$trans["admin_settingsLibName"]                     = "\$text = 'Nome da Biblioteca:';";
$trans["admin_settingsLibimageurl"]                 = "\$text = 'URL da Imagem da Biblioteca:';";
$trans["admin_settingsOnlyshowimginheader"]         = "\$text = 'Mostrar Apenas Imagem no Cabeçalho:';";
$trans["admin_settingsLibhours"]                    = "\$text = 'Horário da Biblioteca:';";
$trans["admin_settingsLibphone"]                    = "\$text = 'Telefone da Biblioteca:';";
$trans["admin_settingsLibURL"]                      = "\$text = 'URL da Biblioteca:';";
$trans["admin_settingsOPACURL"]                     = "\$text = 'URL do OPAC:';";
$trans["admin_settingsSessionTimeout"]              = "\$text = 'Tempo Limite da Sessão:';";
$trans["admin_settingsMinutes"]                     = "\$text = 'minutos';";
$trans["admin_settingsSearchResults"]               = "\$text = 'Resultados da Pesquisa:';";
$trans["admin_settingsItemsperpage"]                = "\$text = 'itens por página';";
$trans["admin_settingsPurgebibhistory"]             = "\$text = 'Limpar Histórico da Bibliografia Após:';";
$trans["admin_settingsmonths"]                      = "\$text = 'meses';";
$trans["admin_settingsBlockCheckouts"]              = "\$text = 'Bloquear Empréstimos Quando Multas Devidas:';";
$trans["Max. hold length:"]                         = "\$text = 'Duração máxima da reserva:';";
$trans["days"]                                      = "\$text = 'dias';";
$trans["admin_settingsLocale"]                      = "\$text = 'Localidade:';";
$trans["admin_settingsHTMLChar"]                    = "\$text = 'Charset HTML:';";
$trans["admin_settingsHTMLTagLangAttr"]             = "\$text = 'Atributo Lang da Tag HTML:';";
$trans["If the month value for purging history is higher than zero, values in statistics reports shift over time.<br>Data from statistics reports should be saved outside OpenBiblio for future reference."]                 = "\$text = 'Se o valor do mês para purgar o histórico for maior que zero, os valores nos relatórios de estatísticas mudam ao longo do tempo.<br>Os dados dos relatórios de estatísticas devem ser salvos fora do OpenBiblio para referência futura.';";
$trans["admin_settingsLoginAttemps"]                = "\$text = 'Bloqueio após n tentativas de login falhas:';";
$trans["admin_settingsPwdTimeout"]                  = "\$text = 'Tempo de bloqueio para tentativas de login falhas repetidas (min):';";
$trans["admin_settingsMbrAccountOnline"]               = "\$text = 'Acesso online para usuários';";
$trans["admin_settingsMbrAccountOnline_explication"]   = "\$text = 'Ao marcar a caixa, todos os usuários da biblioteca podem acessar sua própria conta da biblioteca. Isso requer que uma senha seja definida.<br />' . 'Se a caixa não estiver marcada, os usuários podem continuar a pesquisar na biblioteca, mas não terão acesso à sua própria conta, por exemplo, para renovar ou pré-encomendar mídias.';";
$trans["admin_mailService_explication"]             = "\$text = 'A função mail() do php é a configuração padrão para envio de e-mails. ' 
        . 'Se desejar, você pode selecionar PHPMailer após a atualização em admin --> Configurações de E-mail e fazer as configurações necessárias.';";

#****************************************************************************
#*  Translation text for all staff pages
#****************************************************************************
$trans["adminStaff_Staffmember"]                    = "\$text = 'Membro da equipe,';";
$trans["adminStaff_Return"]                         = "\$text = 'voltar para a lista de funcionários';";
$trans["adminStaff_Yes"]                            = "\$text = 'Sim';";
$trans["adminStaff_No"]                             = "\$text = 'Não';";


#****************************************************************************
#*  Translation text for page staff_del.php
#****************************************************************************
$trans["adminStaff_delDeleted"]                     = "\$text = ', foi excluído.';";

#****************************************************************************
#*  Translation text for page staff_delete_confirm.php
#****************************************************************************
$trans["adminStaff_del_confirmConfirmText"]         = "\$text = 'Tem certeza de que deseja excluir o membro da equipe, ';";

#****************************************************************************
#*  Translation text for page staff_edit.php
#****************************************************************************
$trans["adminStaff_editUpdated"]                    = "\$text = ', foi atualizado.';";

#****************************************************************************
#*  Translation text for page staff_edit_form.php
#****************************************************************************
$trans["adminStaff_edit_formHeader"]                = "\$text = 'Editar Informações do Membro da Equipe:';";
$trans["adminStaff_edit_formLastname"]              = "\$text = 'Sobrenome:';";
$trans["adminStaff_edit_formFirstname"]             = "\$text = 'Primeiro Nome:';";
$trans["adminStaff_edit_formLogin"]                 = "\$text = 'Nome de Usuário para Login:';";
$trans["adminStaff_edit_email"]                     = "\$text = 'E-mail:';";
$trans["adminStaff_edit_formAuth"]                  = "\$text = 'Autorização:';";
$trans["adminStaff_edit_formCirc"]                  = "\$text = 'Circulação';";
$trans["adminStaff_edit_formUpdatemember"]          = "\$text = 'Atualizar Membro';";
$trans["adminStaff_edit_formCatalog"]               = "\$text = 'Catalogação';";
$trans["adminStaff_edit_formAdmin"]                 = "\$text = 'Administração';";
$trans["adminStaff_edit_formReports"]               = "\$text = 'Relatórios';";
$trans["adminStaff_edit_formSuspended"]             = "\$text = 'Suspenso:';";

#****************************************************************************
#*  Translation text for page staff_list.php
#****************************************************************************
$trans["adminStaff_list_formHeader"]                = "\$text = 'Adicionar Novo Membro da Equipe';";
$trans["adminStaff_list_Columnheader"]              = "\$text = ' Membros da Equipe:';";
$trans["adminStaff_list_Function"]                  = "\$text = 'Função';";
$trans["adminStaff_list_Pwd"]                       = "\$text = 'senha';";
$trans["adminStaff_list_Del"]                       = "\$text = 'excluir';";

#****************************************************************************
#*  Translation text for page staff_new.php
#****************************************************************************
$trans["adminStaff_new_Added"]                      = "\$text = ', foi adicionado.';";
$trans["errNoPwdForgottenCode"]                     = "\$text = 'Nenhum código de senha pôde ser criado!';";
$trans["staffNewMailingSuccessful"]                 = "\$text='E-mail de boas-vindas com criação de senha enviado com sucesso.';";
$trans["errMailCouldNotBeSent"]                     = "\$text = 'Mensagem não pôde ser enviada.';";

#****************************************************************************
#*  Translation text for page staff_new_form.php
#****************************************************************************
$trans["adminStaff_new_form_Header"]                = "\$text = 'Adicionar Novo Membro da Equipe:';";
$trans["admin_new_form_TypeOfPwdCreation"]          = "\$text = 'Criação de senha por e-mail?&nbsp;';";
$trans["admin_new_form_TypeOfPwdCreationInfo"]      = "\$text = 'Se você inserir um endereço de e-mail válido, uma mensagem de boas-vindas ' 
                                                        . 'pode ser enviada por e-mail com um link para criar sua própria senha';";
$trans["adminStaff_new_form_Password"]              = "\$text = 'Senha:';";
$trans["adminStaff_new_form_Reenterpassword"]       = "\$text = 'Redigitar Senha:';";
$trans["adminStaffPwdRequirement"]                  = "\$text = 'Regras: A senha deve ter entre 8 e 20 caracteres, pelo menos 1 dígito(s), <br />'
        . 'pelo menos 1 letra minúscula(s), pelo menos 1 letra maiúscula(s), pelo menos 1 caractere não alfanumérico(s) (permitido: @_#?%$)';";

#****************************************************************************
#*  Translation text for page staff_pwd_reset.php
#****************************************************************************
$trans["adminStaff_pwd_reset_Passwordreset"]        = "\$text = 'A senha foi redefinida.';";

#****************************************************************************
#*  Translation text for page staff_pwd_reset_form.php
#****************************************************************************
$trans["adminStaff_pwd_reset_form_Resetheader"]     = "\$text = 'Redefinir Senha do Membro da Equipe:';";

#****************************************************************************
#*  Translation text for theme pages
#****************************************************************************
$trans["adminTheme_Return"]                         = "\$text = 'voltar para a lista de temas';";
$trans["adminTheme_Theme"]                          = "\$text = 'Tema, ';";

#****************************************************************************
#*  Translation text for page theme_del.php
#****************************************************************************
$trans["adminTheme_Deleted"]                        = "\$text = ', foi excluído.';";
#****************************************************************************
#*  Translation text for page theme_del_confirm.php
#****************************************************************************
$trans["adminTheme_Deleteconfirm"]                  = "\$text = 'Tem certeza de que deseja excluir o tema, ';";
#****************************************************************************
#*  Translation text for page theme_edit.php
#****************************************************************************
$trans["adminTheme_Updated"]                        = "\$text = ', foi atualizado.';";

#****************************************************************************
#*  Translation text for page theme_edit_form.php
#****************************************************************************
$trans["adminTheme_Preview"]                        = "\$text = 'Visualizar Alterações do Tema';";

#****************************************************************************
#*  Translation text for page theme_list.php
#****************************************************************************
$trans["adminTheme_Changetheme"]                    = "\$text = 'Alterar Tema em Uso:';";
$trans["adminTheme_Choosetheme"]                    = "\$text = 'Escolher um Novo Tema:';";
$trans["adminTheme_Addnew"]                         = "\$text = 'Adicionar Novo Tema';";
$trans["adminTheme_themes"]                         = "\$text = 'Temas:';";
$trans["adminTheme_function"]                       = "\$text = 'Função';";
$trans["adminTheme_Themename"]                      = "\$text = 'Nome do Tema';";
$trans["adminTheme_Usage"]                          = "\$text = 'Uso';";
$trans["adminTheme_Copy"]                           = "\$text = 'copiar';";
$trans["adminTheme_Del"]                            = "\$text = 'excluir';";
$trans["adminTheme_Inuse"]                          = "\$text = 'em uso';";
$trans["adminTheme_Note"]                           = "\$text = '*Nota:';";
$trans["adminTheme_Notetext"]                       = "\$text = 'A função de exclusão não está disponível para o tema que está atualmente em uso.';";

#****************************************************************************
#*  Translation text for page theme_list.php
#****************************************************************************
$trans["adminTheme_Theme2"]                         = "\$text = 'Tema:';";
$trans["adminTheme_Tablebordercolor"]               = "\$text = 'Cor da Borda da Tabela:';";
$trans["adminTheme_Errorcolor"]                     = "\$text = 'Cor do Erro:';";
$trans["adminTheme_Tableborderwidth"]               = "\$text = 'Largura da Borda da Tabela:';";
$trans["adminTheme_Tablecellpadding"]               = "\$text = 'Preenchimento da Célula da Tabela:';";
$trans["adminTheme_Title"]                          = "\$text = 'Título';";
$trans["adminTheme_Mainbody"]                       = "\$text = 'Corpo Principal';";
$trans["adminTheme_Navigation"]                     = "\$text = 'Navegação';";
$trans["adminTheme_Tabs"]                           = "\$text = 'Abas';";
$trans["adminTheme_Backgroundcolor"]                = "\$text = 'Cor de Fundo:';";
$trans["adminTheme_Fontface"]                       = "\$text = 'Fonte:';";
$trans["adminTheme_Fontsize"]                       = "\$text = 'Tamanho da Fonte:';";
$trans["adminTheme_Bold"]                           = "\$text = 'negrito';";
$trans["adminTheme_Fontcolor"]                      = "\$text = 'Cor da Fonte:';";
$trans["adminTheme_Linkcolor"]                      = "\$text = 'Cor do Link:';";
$trans["adminTheme_Align"]                          = "\$text = 'Alinhar:';";
$trans["adminTheme_Right"]                          = "\$text = 'Direita';";
$trans["adminTheme_Left"]                           = "\$text = 'Esquerda';";
$trans["adminTheme_Center"]                         = "\$text = 'Centro';";

$trans["adminTheme_HeaderWording"]                  = "\$text = 'Editar';";

#****************************************************************************
#*  Translation text for page theme_new.php
#****************************************************************************
$trans["adminTheme_new_Added"]                      = "\$text = ', foi adicionado.';";

#****************************************************************************
#*  Translation text for page theme_new_form.php
#****************************************************************************

#****************************************************************************
#*  Translation text for page theme_preview.php
#****************************************************************************
$trans["adminTheme_preview_Themepreview"]           = "\$text = 'Pré-visualização do Tema';";
$trans["adminTheme_preview_Librarytitle"]           = "\$text = 'Título da Biblioteca';";
$trans["adminTheme_preview_CloseWindow"]            = "\$text = 'Fechar Janela';";
$trans["adminTheme_preview_Home"]                   = "\$text = 'Início';";
$trans["adminTheme_preview_Circulation"]            = "\$text = 'Circulação';";
$trans["adminTheme_preview_Cataloging"]             = "\$text = 'Catalogação';";
$trans["adminTheme_preview_Admin"]                  = "\$text = 'Administração';";
$trans["adminTheme_preview_Samplelink"]             = "\$text = 'Link de Exemplo';";
$trans["adminTheme_preview_Thisstart"]              = "\$text = 'Esta é uma pré-visualização do ';";
$trans["adminTheme_preview_Thisend"]                = "\$text = 'tema.';";
$trans["adminTheme_preview_Samplelist"]             = "\$text = 'Lista de Exemplo:';";
$trans["adminTheme_preview_Tableheading"]           = "\$text = 'Título da Tabela';";
$trans["adminTheme_preview_Sampledatarow1"]         = "\$text = 'Linha de dados de exemplo 1';";
$trans["adminTheme_preview_Sampledatarow2"]         = "\$text = 'Linha de dados de exemplo 2';";
$trans["adminTheme_preview_Sampledatarow3"]         = "\$text = 'Linha de dados de exemplo 3';";
$trans["adminTheme_preview_Samplelink"]             = "\$text = 'link de exemplo';";
$trans["adminTheme_preview_Sampleerror"]            = "\$text = 'erro de exemplo';";
$trans["adminTheme_preview_Sampleinput"]            = "\$text = 'Entrada de Exemplo';";
$trans["adminTheme_preview_Samplebutton"]           = "\$text = 'Botão de Exemplo';";
$trans["adminTheme_preview_Poweredby"]              = "\$text = 'Desenvolvido por OpenBiblio';";
$trans["adminTheme_preview_Copyright"]              = "\$text = 'Copyright &copy; 2002-2005 Dave Stevens';";
$trans["adminTheme_preview_underthe"]               = "\$text = 'sob a';";
$trans["adminTheme_preview_GNU"]                    = "\$text = 'Licença Pública Geral GNU';";

#****************************************************************************
#*  Translation text for page theme_use.php
#****************************************************************************

#****************************************************************************
#*  Translation text for Checkout Privs
#****************************************************************************
$trans["Privileges updated"]                        = "\$text = 'Privilégios atualizados';";
$trans["Edit Checkout Privileges"]                  = "\$text = 'Editar Privilégios de Empréstimo';";
$trans["Material Type:"]                            = "\$text = 'Tipo de Material:';";
$trans["Member Classification:"]                    = "\$text = 'Classificação de Membro:';";
$trans["Checkout Limit:"]                           = "\$text = 'Limite de Empréstimo:';";
$trans["Renewal Limit:"]                            = "\$text = 'Limite de Renovação:';";
$trans["Checkout Privileges"]                       = "\$text = 'Privilégios de Empréstimo';";
$trans["Material Type"]                             = "\$text = 'Tipo de Material';";
$trans["Member Classification"]                     = "\$text = 'Classificação de Membro';";
$trans["Checkout Limit"]                            = "\$text = 'Limite de Empréstimo';";
$trans["Renewal Limit"]                             = "\$text = 'Limite de Renovação';";

#****************************************************************************
#*  Translation text for Copy Fields 
#****************************************************************************

$trans["Copy field, %desc%, has been deleted."]     = "\$text = 'Campo de cópia, %desc%, foi excluído.';";
$trans["return to copy field list"]                 = "\$text = 'voltar para a lista de campos de cópia';";
$trans["return to copy fields list"]                = "\$text = 'voltar para a lista de campos de cópia';";
$trans["Are you sure you want to delete field '%desc%'?"] = "\$text = 'Tem certeza de que deseja excluir o campo \'%desc%\'?';";
$trans["Copy field, %desc%, has been updated."]     = "\$text = 'Campo de cópia, %desc%, foi atualizado.';";
$trans["Edit Copy Field"]                           = "\$text = 'Editar Campo de Cópia';";
$trans["Code:"]                                     = "\$text = 'Código:';";
$trans["Description:"]                              = "\$text = 'Descrição:';";
$trans["Add new custom field"]                      = "\$text = 'Adicionar novo campo personalizado';";
$trans["Custom Copy Fields"]                        = "\$text = 'Campos de Cópia Personalizados';";
$trans["Code"]                                      = "\$text = 'Código';";
$trans["Description"]                               = "\$text = 'Descrição';";
$trans["del"]                                       = "\$text = 'excluir';";
$trans["Copy field, %desc%, has been added."]       = "\$text = 'Campo de cópia, %desc%, foi adicionado.';";
$trans["Add custom copy field"]                     = "\$text = 'Adicionar campo de cópia personalizado';";

#****************************************************************************
#*  Translation text for Member Classify 
#****************************************************************************

$trans["Classification type, %desc%, has been deleted."] = "\$text = 'Tipo de classificação, %desc%, foi excluído.';";
$trans["return to member classification list"]           = "\$text = 'voltar para a lista de classificação de membros';";
$trans["Are you sure you want to delete classification '%desc%'?"] = "\$text = 'Tem certeza de que deseja excluir a classificação \'%desc%\'?';";
$trans["Classification type, %desc%, has been updated."] = "\$text = 'Tipo de classificação, %desc%, foi atualizado.';";
$trans["Edit Classification Type"]                       = "\$text = 'Editar Tipo de Classificação';";
$trans["Max. Fines:"]                                    = "\$text = 'Multas Máximas:';";
$trans["Add new member classification"]                  = "\$text = 'Adicionar nova classificação de membro';";
$trans["Member Classifications List"]                    = "\$text = 'Lista de Classificações de Membros';";
$trans["Max. Fines"]                                     = "\$text = 'Multas Máximas';";
$trans["Members"]                                        = "\$text = 'Membros';";
$trans["*Note:"]                                         = "\$text = '*Nota:';";
$trans["The delete function is only available on classifications that have a member count of zero.  If you wish to delete a classification with a member count greater than zero you will first need to change those members to another classification."]     = "\$text = 'A função de exclusão está disponível apenas para classificações com contagem de membros zero. Se você deseja excluir uma classificação com contagem de membros maior que zero, primeiro precisará alterar esses membros para outra classificação.';";
$trans["Classification type, %desc%, has been added."]   = "\$text = 'Tipo de classificação, %desc%, foi adicionado.';";
$trans["Add new classification type"]                    = "\$text = 'Adicionar novo tipo de classificação';";

#****************************************************************************
#*  Translation text for Member Fields
#****************************************************************************

$trans["Member field, %desc%, has been deleted."]       = "\$text = 'Campo de membro, %desc%, foi excluído.';";
$trans["return to member field list"]                   = "\$text = 'voltar para a lista de campos de membro';";
$trans["return to member fields list"]                  = "\$text = 'voltar para a lista de campos de membro';";
$trans["Member field, %desc%, has been updated."]       = "\$text = 'Campo de membro, %desc%, foi atualizado.';";
$trans["Edit Member Field"]                             = "\$text = 'Editar Campo de Membro';";
$trans["Custom Member Fields"]                          = "\$text = 'Campos de Membro Personalizados';";
$trans["Member field, %desc%, has been added."]         = "\$text = 'Campo de membro, %desc%, foi adicionado.';";
$trans["Add custom member field"]                       = "\$text = 'Adicionar campo de membro personalizado';";

#****************************************************************************
#*  Translation text for install/maintenance.php
#****************************************************************************

$trans["MaintenanceMode"]                               = "\$text = 'Modo de Manutenção';";
$trans["MaintenanceExplication"]                        = "\$text = 'Seu OpenBiblio está atualmente em modo de manutenção.\nPlease aguarde a manutenção. Se demorar mais, entre em contato com os responsáveis.';";

#****************************************************************************
#*  Translation text for install/index.php, upgradeSettings.php
#****************************************************************************

$trans["DBConnection"]                                  = "\$text = 'Conexão com o banco de dados está boa.';";
$trans["NoActionRequired"]                              = "\$text = 'Nenhuma ação é necessária';";
$trans["OpenbiblioUpToDate"]                            = "\$text = 'Sua instalação do OpenBiblio está atualizada';";
$trans["startUsingOpenBiblio"]                          = "\$text = 'começar a usar o OpenBiblio';";
$trans["UpdateDatabaseInfo"]                            = "\$text = 'Parece que precisamos atualizar a versão do banco de dados '
                                                            . '%oldDBversion% para a versão %newDBversion%.';";
$trans["BackupDatabase"]                                = "\$text = 'AVISO - Faça backup do seu banco de dados antes de atualizar.';";        
$trans["MaintenanceAccess"]                             = "\$text = 'Acesso para o administrador atualizar o OpenBiblio';";
$trans["UpgradeKey"]                                    = "\$text = 'Chave de atualização';";
$trans["UpgradeSuspended"]                              = "\$text = 'Se a chave de atualização for inserida incorretamente com muita frequência, outras ações serão bloqueadas.\nPara iniciar uma nova tentativa, é recomendável encerrar a sessão e fechar o navegador.';";
$trans["admin_MailSender_explication"]                  = "\$text = 'O endereço de e-mail armazenado aqui é usado como remetente para os e-mails' 
                                                            . 'para as mensagens recém-criadas “Senha esquecida” e “Senha para novos membros da biblioteca”.<br />'
                                                            . 'Alterações no endereço de e-mail ou nas respectivas mensagens ou o uso de diferentes endereços de e-mail para as respectivas ' 
                                                            . 'mensagens podem ser feitas em “Admin” --> “Mensagens de e-mail”.';";

$trans["OpenBiblioUpgrade"]                             = "\$text = 'Atualização do OpenBiblio';";
$trans["UpdateOpenBiblioTables"]                        = "\$text = 'Atualizando tabelas do OpenBiblio, por favor, aguarde...';";
$trans["UpgradeFailed"]                                 = "\$text = 'Atualização falhou!';";
$trans["UpdateSuccesfully"]                             = "\$text = 'Tabelas do OpenBiblio foram atualizadas com sucesso!';";

#****************************************************************************
#*  Translation text for page email_settings_edit_form.php 
#****************************************************************************
$trans["admin_mailSettingsUpdated"]                     = "\$text = 'Dados foram atualizados.';";
$trans["admin_mailSettingsEditsettings"]                = "\$text = 'Editar configurações de e-mail:';";
$trans["admin_PwdForgottenTitle"]                       = "\$text = 'Configurações para a função de senha esquecida';";
$trans["admin_PwdForgottenSettings"]                    = "\$text = 'Função de senha esquecida:';";
$trans["admin_PwdForgottenNone"]                        = "\$text = 'desativar';";
$trans["admin_PwdForgottenOr"]                          = "\$text = 'Inserir e-mail ou número do código de barras';";
$trans["admin_PwdForgottenAnd"]                         = "\$text = 'Inserir e-mail e número do código de barras';";
$trans["admin_PwdForgottenCodeDuration"]                = "\$text = 'Validade do código de senha esquecida:';";
$trans["admin_Duration"]                                = "\$text = 'hora(s)';";
$trans["admin_mailSettingTitle"]                        = "\$text = 'Configurações para envio de e-mails';";
$trans["admin_mailProcess"]                             = "\$text = 'Tipo de processo para envio de e-mail:';";
$trans["admin_mailHost"]                                = "\$text = 'Servidor de E-mail:';";
$trans["admin_mailUser"]                                = "\$text = 'Nome de usuário de E-mail:';";
$trans["admin_mailPwd"]                                 = "\$text = 'Senha de E-mail:';";
$trans["admin_mailSmtpSecure"]                          = "\$text = 'Criptografia de E-mail:';";


#****************************************************************************
#*  Translation text for page email_messages_list.php 
#****************************************************************************
$trans["password_forgotten_message"]                    = "\$text = 'Mensagem de senha esquecida';";
$trans["welcome_message"]                               = "\$text = 'Mensagem de boas-vindas com link para definir senha';";
$trans["admin_mailMessage"]                             = "\$text = 'Mensagens';";

#****************************************************************************
#*  Translation text for page email_messages_edit_form.php 
#***********************text*****************************************************
$trans["admin_mailMessage_edit"]                 = "\$text = 'Editar %message%:';";
$trans["admin_mailHtml"]                         = "\$text = 'E-mail em formato HTML ou texto simples:';";
$trans["admin_mailFromMail"]                     = "\$text = 'Endereço de e-mail do remetente:';";
$trans["admin_mailFromName"]                     = "\$text = 'Nome do remetente:';";
$trans["admin_mailSubject"]                      = "\$text = 'Assunto:';";
$trans["admin_mailBodyHtml"]                     = "\$text = 'Texto do e-mail em formato HTML';";
$trans["admin_mailBodyPlain"]                    = "\$text = 'Texto do e-mail em formato simples';";
$trans["admin_mailBodyInfo"]                     = "\$text = 'As seguintes variáveis podem ser usadas nos textos de e-mail em formato HTML/texto:<br />'
                                                            . '%LastName% = sobrenome, %FirstName% = primeiro nome, %PwdForgottenCodeDuration% = ' 
                                                            . 'duração do código de senha esquecida, %url_pwdcode% = URL para a página para definir ' 
                                                            . 'a nova senha';";

?>