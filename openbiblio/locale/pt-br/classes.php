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
#*  Translation text for class Biblio
#****************************************************************************
$trans["biblioError1"]            = "\$text = 'Número de chamada é obrigatório.';";

#****************************************************************************
#*  Translation text for class BiblioField
#****************************************************************************
$trans["biblioFieldError1"]       = "\$text = 'Campo é obrigatório.';";
$trans["biblioFieldError2"]       = "\$text = 'Tag deve ser numérica.';";

#****************************************************************************
#*  Translation text for class BiblioQuery
#****************************************************************************
$trans["biblioQueryQueryErr1"]    = "\$text = 'Erro ao acessar informações da bibliografia.';";
$trans["biblioQueryQueryErr2"]    = "\$text = 'Erro ao acessar informações do campo da bibliografia.';";
$trans["biblioQueryInsertErr1"]   = "\$text = 'Erro ao inserir novas informações da bibliografia.';";
$trans["biblioQueryInsertErr2"]   = "\$text = 'Erro ao inserir novas informações do campo da bibliografia.';";
$trans["biblioQueryUpdateErr1"]   = "\$text = 'Erro ao atualizar informações da bibliografia.';";
$trans["biblioQueryUpdateErr2"]   = "\$text = 'Erro ao limpar informações do campo da bibliografia para atualização.';";
$trans["biblioQueryDeleteErr"]    = "\$text = 'Erro ao excluir informações da bibliografia.';";

#****************************************************************************
#*  Translation text for class BiblioSearchQuery
#****************************************************************************
$trans["biblioSearchQueryErr1"]   = "\$text = 'Erro ao contar resultados da pesquisa de bibliografia.';";
$trans["biblioSearchQueryErr2"]   = "\$text = 'Erro ao pesquisar informações da bibliografia.';";
$trans["biblioSearchQueryErr3"]   = "\$text = 'Erro ao ler informações da bibliografia.';";

#****************************************************************************
#*  Translation text for class BiblioCopy
#****************************************************************************
$trans["biblioCopyError1"]        = "\$text = 'Número do código de barras é obrigatório.';";
$trans["biblioCopyError2"]        = "\$text = 'Caracteres inválidos no número do código de barras.';";

#****************************************************************************
#*  Translation text for class BiblioCopyQuery
#****************************************************************************
$trans["biblioCopyQueryErr1"]     = "\$text = 'Erro ao verificar código de barras duplicado.';";
$trans["biblioCopyQueryErr2"]     = "\$text = 'Número do código de barras %barcodeNmbr% já está em uso.';";
$trans["biblioCopyQueryErr3"]     = "\$text = 'Erro ao inserir novas informações de cópia da bibliografia.';";
$trans["biblioCopyQueryErr4"]     = "\$text = 'Erro ao acessar informações de cópia da bibliografia.';";
$trans["biblioCopyQueryErr5"]     = "\$text = 'Erro ao atualizar informações de cópia da bibliografia.';";
$trans["biblioCopyQueryErr6"]     = "\$text = 'Erro ao excluir informações da bibliografia.';";
$trans["biblioCopyQueryErr7"]     = "\$text = 'Erro ao acessar informações da bibliografia para obter o código da coleção.';";
$trans["biblioCopyQueryErr8"]     = "\$text = 'Erro ao acessar informações da coleção para verificar os dias de devolução.';";
$trans["biblioCopyQueryErr9"]     = "\$text = 'Ocorreu um erro ao verificar as cópias';";
$trans["biblioCopyQueryErr10"]    = "\$text = 'Ocorreu um erro ao verificar os limites de empréstimo';";
$trans["biblioCopyQueryErr11"]    = "\$text = 'Erro ao buscar o maior copyid.';";

#****************************************************************************
#*  Translation text for class BiblioFieldQuery
#****************************************************************************
$trans["biblioFieldQueryErr1"]    = "\$text = 'Erro ao ler um campo de bibliografia.';";
$trans["biblioFieldQueryErr2"]    = "\$text = 'Erro ao ler campos de bibliografia.';";
$trans["biblioFieldQueryInsertErr"] = "\$text = 'Erro ao inserir novo campo de bibliografia.';";
$trans["biblioFieldQueryUpdateErr"] = "\$text = 'Erro ao atualizar campo de bibliografia.';";
$trans["biblioFieldQueryDeleteErr"] = "\$text = 'Erro ao excluir campo de bibliografia.';";

#****************************************************************************
#*  Translation text for class UsmarcBlockDmQuery
#****************************************************************************
$trans["usmarcBlockDmQueryErr1"]  = "\$text = 'Erro ao acessar os dados do bloco marc.';";

#****************************************************************************
#*  Translation text for class UsmarcTagDmQuery
#****************************************************************************
$trans["usmarcTagDmQueryErr1"]    = "\$text = 'Erro ao acessar os dados da tag marc.';";

#****************************************************************************
#*  Translation text for class UsmarcSubfieldDmQuery
#****************************************************************************
$trans["usmarcSubfldDmQueryErr1"] = "\$text = 'Erro ao acessar os dados do subcampo marc.';";

#****************************************************************************
#*  Translation text for class BiblioHoldQuery
#****************************************************************************
$trans["biblioHoldQueryErr1"]     = "\$text = 'Erro ao acessar dados de reserva por ID de bibliografia.';";
$trans["biblioHoldQueryErr2"]     = "\$text = 'Erro ao acessar dados de reserva por ID de membro.';";
$trans["biblioHoldQueryErr3"]     = "\$text = 'Erro ao obter bibid e copyid para fazer reserva.';";
$trans["biblioHoldQueryErr4"]     = "\$text = 'Erro ao inserir dados de reserva.';";
$trans["biblioHoldQueryErr5"]     = "\$text = 'Erro ao excluir dados de reserva.';";
$trans["biblioHoldQueryErr6"]     = "\$text = 'Erro ao obter o primeiro membro em reserva para uma cópia.';";

#****************************************************************************
#*  Translation text for class ReportQuery
#****************************************************************************
$trans["reportQueryErr1"]         = "\$text = 'Erro ao executar relatório.';";

#****************************************************************************
#*  Translation text for class ReportCriteria
#****************************************************************************
$trans["reportCriteriaErr1"]      = "\$text = 'Valor não numérico não é válido com coluna numérica.';";
$trans["reportCriteriaDateTimeErr"] = "\$text = 'Formato de data/hora inválido.';";
$trans["reportCriteriaDateErr"]   = "\$text = 'Formato de data inválido.';";

#****************************************************************************
#*  Translation text for classes Staff, Member and EmailMessages
#****************************************************************************
$trans["LastNameReqErr"]     = "\$text = 'Sobrenome é obrigatório.';";
$trans["UserNameLenErr"]     = "\$text = 'Nome de usuário deve ter pelo menos 4 caracteres.';";
$trans["UserNameCharErr"]    = "\$text = 'Nome de usuário não deve conter espaços.';";
$trans["PwdLenErr"]          = "\$text = 'A senha deve ter entre 8 e 20 caracteres.';";
$trans["UserEmailCharErr"]   = "\$text = 'Endereço de e-mail incorreto.';";
$trans["PwdCharErr"]         = "\$text = 'A senha não deve conter espaços.';";
$trans["PwdMatchErr"]        = "\$text = 'As senhas não coincidem.';";
$trans["PwdRequirementErr"]  = "\$text = 'A senha deve ter pelo menos 1 dígito(s), pelo menos 1 letra minúscula(s),'
        . ' pelo menos 1 letra maiúscula(s), pelo menos 1 caractere não alfanumérico(s) (permitido: @_#§%$)';";
$trans["mailSubjectReqErr"]  = "\$text = 'Assunto é obrigatório.';";

#****************************************************************************
#*  Translation text for class Member
#****************************************************************************
$trans["memberBarcodeReqErr"]     = "\$text = 'Número do cartão é obrigatório.';";
$trans["memberBarcodeCharErr"]    = "\$text = 'Caracteres inválidos no número do cartão.';";
$trans["memberLastNameReqErr"]    = "\$text = 'Sobrenome é obrigatório.';";
$trans["memberFirstNameReqErr"]   = "\$text = 'Primeiro nome é obrigatório.';";

#****************************************************************************
#*  Translation text for class LabelFormat and LetterFormat
#****************************************************************************
$trans["labelFormatFontErr"]      = "\$text = 'Tipo de fonte inválido especificado no xml de definição de etiqueta. Tipos de fonte válidos são Courier, Helvetica e Times-Roman.';";
$trans["labelFormatFontSizeErr"]  = "\$text = 'Tamanho de fonte inválido especificado no xml de definição de etiqueta. O tamanho da fonte deve ser numérico.';";
$trans["labelFormatFontSizeErr2"] = "\$text = 'Tamanho de fonte inválido especificado no xml de definição de etiqueta. O tamanho da fonte deve ser maior que zero.';";
$trans["labelFormatLMarginErr"]   = "\$text = 'Margem esquerda inválida especificada no xml de definição de etiqueta. A margem esquerda deve ser numérica.';";
$trans["labelFormatLMarginErr2"]  = "\$text = 'Margem esquerda inválida especificada no xml de definição de etiqueta. A margem esquerda deve ser maior que zero.';";
$trans["labelFormatRMarginErr"]   = "\$text = 'Margem direita inválida especificada no xml de definição de etiqueta. A margem direita deve ser numérica.';";
$trans["labelFormatRMarginErr2"]  = "\$text = 'Margem direita inválida especificada no xml de definição de etiqueta. A margem direita deve ser maior que zero.';";
$trans["labelFormatTMarginErr"]   = "\$text = 'Margem superior inválida especificada no xml de definição de etiqueta. A margem superior deve ser numérica.';";
$trans["labelFormatTMarginErr2"]  = "\$text = 'Margem superior inválida especificada no xml de definição de etiqueta. A margem superior deve ser maior que zero.';";
$trans["labelFormatBMarginErr"]   = "\$text = 'Margem inferior inválida especificada no xml de definição de etiqueta. A margem inferior deve ser numérica.';";
$trans["labelFormatBMarginErr2"]  = "\$text = 'Margem inferior inválida especificada no xml de definição de etiqueta. A margem inferior deve ser maior que zero.';";
$trans["labelFormatColErr"]       = "\$text = 'Colunas inválidas especificadas no xml de definição de etiqueta. As colunas devem ser numéricas.';";
$trans["labelFormatColErr2"]      = "\$text = 'Colunas inválidas especificadas no xml de definição de etiqueta. As colunas devem ser maiores que zero.';";
$trans["labelFormatWidthErr"]     = "\$text = 'Largura inválida especificada no xml de definição de etiqueta. A largura deve ser numérica.';";
$trans["labelFormatWidthErr2"]    = "\$text = 'Largura inválida especificada no xml de definição de etiqueta. A largura deve ser maior que zero.';";
$trans["labelFormatHeightErr"]    = "\$text = 'Altura inválida especificada no xml de definição de etiqueta. A altura deve ser numérica.';";
$trans["labelFormatHeightErr2"]   = "\$text = 'Altura inválida especificada no xml de definição de etiqueta. A altura deve ser maior que zero.';";
$trans["labelFormatNoLabelsErr"]  = "\$text = 'Linhas de etiqueta inválidas especificadas no xml de definição de etiqueta.';";

#****************************************************************************
#*  Translation text for class BiblioStatusHistQuery
#****************************************************************************
$trans["biblioStatusHistQueryErr1"] = "\$text = 'Erro ao obter histórico de status da bibliografia por ID da bibliografia.';";
$trans["biblioStatusHistQueryErr2"] = "\$text = 'Erro ao obter histórico de status da bibliografia por ID do membro';";
$trans["biblioStatusHistQueryErr3"] = "\$text = 'Erro ao inserir histórico de status da bibliografia';";
$trans["biblioStatusHistQueryErr4"] = "\$text = 'Erro ao excluir histórico de status da bibliografia por ID da cópia';";
$trans["biblioStatusHistQueryErr5"] = "\$text = 'Erro ao excluir histórico de status da bibliografia por ID do membro';";

#****************************************************************************
#*  Translation text for class MemberAccountTransaction
#****************************************************************************
$trans["memberAccountTransError1"]  = "\$text = 'Valor é obrigatório.';";
$trans["memberAccountTransError2"]  = "\$text = 'Valor deve ser numérico.';";
$trans["memberAccountTransError3"]  = "\$text = 'Descrição é obrigatória.';";
$trans["Amount must be greater than zero."]  = "\$text = 'O valor deve ser maior que zero.';";

#****************************************************************************
#*  Translation text for class MemberAccountQuery
#****************************************************************************
$trans["memberAccountQueryErr1"]    = "\$text = 'Erro ao acessar informações da conta do membro.';";
$trans["memberAccountQueryErr2"]    = "\$text = 'Erro ao inserir informações da conta do membro.';";
$trans["memberAccountQueryErr3"]    = "\$text = 'Erro ao excluir informações da conta do membro.';";

#****************************************************************************
#*  Translation text for class CircQuery
#****************************************************************************
$trans["Can't understand date: %err%"]                            = "\$text = 'Não foi possível entender a data: %err%';";
$trans["Won't do checkouts for future dates."]                    = "\$text = 'Não será possível fazer empréstimos para datas futuras.';";
$trans["Bad member barcode: %bcode%"]                             = "\$text = 'Código de barras de membro inválido: %bcode%';";
$trans["Member owes fines: checkout not allowed"]                 = "\$text = 'Membro deve multas: empréstimo não permitido';";
$trans["Member must renew membership before checking out."]       = "\$text = 'O membro deve renovar a associação antes de fazer o empréstimo.';";
$trans["Bad copy barcode: %bcode%"]                               = "\$text = 'Código de barras de cópia inválido: %bcode%';";
$trans["Item %bcode% has reached its renewal limit."]             = "\$text = 'O item %bcode% atingiu seu limite de renovação.';";
$trans["Item %bcode% is a presentation copy."]                    = "\$text = 'O item %bcode% é uma cópia de referência e não pode ser emprestado.';";
$trans["Item %bcode% is late and cannot be renewed."]             = "\$text = 'O item %bcode% está atrasado e não pode ser renovado.';";
$trans["Item %bcode% is on hold."]                                = "\$text = 'O item %bcode% está em reserva.';";
$trans["Item %bcode% is already checked out to another member."]  = "\$text = 'O item %bcode% já está emprestado para outro membro.';";
$trans["Item %bcode% isn't out and cannot be renewed."]  	   = "\$text = 'O item %bcode% não está emprestado e não pode ser renovado.';";
$trans["Member has reached checkout limit for this collection."]  = "\$text = 'O membro atingiu o limite de empréstimo para esta coleção.';";
$trans["Checkouts are disallowed for this collection."]           = "\$text = 'Empréstimos não são permitidos para esta coleção.';";
$trans["Item is on hold for another member."]                     = "\$text = 'O item está em reserva para outro membro.';";
$trans["!!!Note : due date is after the end of the membership"] = "\$text = '!!!Nota: a data de vencimento é posterior ao fim da associação';";
$trans["Can't change status to an earlier date on item %bcode%."] = "\$text = 'Não é possível alterar o status para uma data anterior no item %bcode%.';";
$trans["Can't change status more than once per second on item %bcode%."]  = "\$text = 'Não é possível alterar o status mais de uma vez por segundo no item %bcode%.';";
$trans["Won't do checkins for future dates."]                     = "\$text = 'Não será possível fazer devoluções para datas futuras.';";
$trans["Late fee (barcode=%barcode%)"]                            = "\$text = 'Multa por atraso (código de barras=%barcode%)';";


$trans[""]  = "\$text = '';";

?>
