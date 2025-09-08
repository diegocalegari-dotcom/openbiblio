<?php
/*
 * This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */

/**
 * ********************************************************************************
 * Instructions for translators:
 *
 * All gettext key/value pairs are specified as follows:
 * $trans["key"] = "<php translation code to set the $text variable>";
 * Allowing translators the ability to execute php code withint the transFunc string
 * provides the maximum amount of flexibility to format the languange syntax.
 *
 * Formatting rules:
 * - Resulting translation string must be stored in a variable called $text.
 * - Input arguments must be surrounded by % characters (i.e. %pageCount%).
 * - A backslash ('\') needs to be placed before any special php characters
 * (such as $, ", etc.) within the php translation code.
 *
 * Simple Example:
 * $trans["homeWelcome"] = "\$text='Welcome to OpenBiblio';";
 *
 * Example Containing Argument Substitution:
 * $trans["searchResult"] = "\$text='page %page% of %pages%';";
 *
 * Example Containing a PHP If Statment and Argument Substitution:
 * $trans["searchResult"] =
 * "if (%items% == 1) {
 * \$text = '%items% result';
 * } else {
 * \$text = '%items% results';
 * }";
 *
 * *********************************************************************************
 */

# ****************************************************************************
# * Common translation text shared among multiple pages
# ****************************************************************************
$trans["catalogSubmit"] = "\$text = 'Enviar';";
$trans["catalogCancel"] = "\$text = 'Cancelar';";
$trans["catalogRefresh"] = "\$text = 'Atualizar';";
$trans["catalogDelete"] = "\$text = 'Excluir';";
$trans["catalogFootnote"] = "\$text = 'Campos marcados com %symbol% são obrigatórios.';";
$trans["AnswerYes"] = "\$text = 'Sim';";
$trans["AnswerNo"] = "\$text = 'Não';";

# ****************************************************************************
# * Translation text for page index.php
# ****************************************************************************
$trans["indexHdr"] = "\$text = 'Catalogação';";
$trans["indexBarcodeHdr"] = "\$text = 'Pesquisar Bibliografia por Número de Código de Barras';";
$trans["indexBarcodeField"] = "\$text = 'Número do Código de Barras';";
$trans["indexSearchHdr"] = "\$text = 'Pesquisar Bibliografia por Frase de Pesquisa';";
$trans["indexKeyword"] = "\$text = 'Palavra-chave';";
$trans["indexTitle"] = "\$text = 'Título';";
$trans["indexAuthor"] = "\$text = 'Autor';";
$trans["indexSubject"] = "\$text = 'Assunto';";
$trans["indexAll"] = "\$text = 'Todos';";
$trans["indexButton"] = "\$text = 'Pesquisar';";
$trans["indexSearchInvert"] = "\$text='Inverter Seleção';";
$trans["indexSearchColl"] = "\$text='Limitar Pesquisa a Coleções';";
$trans["indexSearchMat"] = "\$text='Limitar Pesquisa a Tipos de Material';";

# ****************************************************************************
# * Translation text for page biblio_fields.php
# ****************************************************************************
$trans["biblioFieldsLabel"] = "\$text = 'Bibliografia';";
$trans["biblioFieldsMaterialTyp"] = "\$text = 'Tipo de Material';";
$trans["biblioFieldsCollection"] = "\$text = 'Coleção';";
$trans["biblioFieldsCallNmbr"] = "\$text = 'Número de Chamada';";
$trans["biblioFieldsUsmarcFields"] = "\$text = 'Campos USMarc';";
$trans["biblioFieldsOpacFlg"] = "\$text = 'Mostrar no OPAC';";
$trans["PictDesc"] = "\$text = 'Os arquivos de imagem devem estar localizados no diretório openbiblio/pictures.';";

# ****************************************************************************
# * Translation text for page biblio_new.php
# ****************************************************************************
$trans["biblioNewFormLabel"] = "\$text = 'Adicionar Novo';";
$trans["biblioNewSuccess"] = "\$text = 'A seguinte nova bibliografia foi criada. Para adicionar uma cópia, selecione \"Nova Cópia\" na navegação à esquerda ou \"Adicionar Nova Cópia\" nas informações da cópia abaixo.';";

# ****************************************************************************
# * Translation text for page biblio_edit.php
# ****************************************************************************
$trans["biblioEditSuccess"] = "\$text = 'Bibliografia atualizada com sucesso.';";

# ****************************************************************************
# * Translation text for page biblio_copy_new_form.php and biblio_copy_edit_form.php
# ****************************************************************************
$trans["biblioCopyNewFormLabel"] = "\$text = 'Adicionar Nova Cópia';";
$trans["biblioCopyNewBarcode"] = "\$text = 'Número do Código de Barras';";
$trans["biblioCopyNewDesc"] = "\$text = 'Descrição';";
$trans["biblioCopyNewAuto"] = "\$text = 'Autogerar';";
$trans["biblioCopyNewValidBarco"] = "\$text = 'Validar para impressão';";
$trans["biblioCopyEditFormLabel"] = "\$text = 'Editar Cópia';";
$trans["biblioCopyEditFormStatus"] = "\$text = 'Status';";

# ****************************************************************************
# * Translation text for page biblio_copy_new.php
# ****************************************************************************
$trans["biblioCopyNewSuccess"] = "\$text = 'Cópia criada com sucesso.';";

# ****************************************************************************
# * Translation text for page biblio_copy_edit.php
# ****************************************************************************
$trans["biblioCopyEditSuccess"] = "\$text = 'Cópia atualizada com sucesso.';";

# ****************************************************************************
# * Translation text for page biblio_copy_del_confirm.php
# ****************************************************************************
$trans["biblioCopyDelConfirmErr1"] = "\$text = 'Não foi possível excluir a cópia. Uma cópia deve ser devolvida antes de poder ser excluída.';";
$trans["biblioCopyDelConfirmMsg"] = "\$text = 'Tem certeza de que deseja excluir a cópia com o código de barras %barcodeNmbr%? Isso também excluirá todo o histórico de alteração de status desta cópia.';";

# ****************************************************************************
# * Translation text for page biblio_copy_del.php
# ****************************************************************************
$trans["biblioCopyDelSuccess"] = "\$text = 'Cópia com código de barras %barcode% foi excluída com sucesso.';";

# ****************************************************************************
# * Translation text for page biblio_marc_list.php
# ****************************************************************************
$trans["biblioMarcListMarcSelect"] = "\$text = 'Adicionar Novo Campo MARC';";
$trans["biblioMarcListHdr"] = "\$text = 'Informações do Campo MARC';";
$trans["biblioMarcListTbleCol1"] = "\$text = 'Função';";
$trans["biblioMarcListTbleCol2"] = "\$text = 'Tag';";
$trans["biblioMarcListTbleCol3"] = "\$text = 'Descrição da Tag';";
$trans["biblioMarcListTbleCol4"] = "\$text = 'Ind 1';";
$trans["biblioMarcListTbleCol5"] = "\$text = 'Ind 2';";
$trans["biblioMarcListTbleCol6"] = "\$text = 'Subcampo';";
$trans["biblioMarcListTbleCol7"] = "\$text = 'Descrição do Subcampo';";
$trans["biblioMarcListTbleCol8"] = "\$text = 'Dados do Campo';";
$trans["biblioMarcListNoRows"] = "\$text = 'Nenhum campo MARC encontrado.';";
$trans["biblioMarcListEdit"] = "\$text = 'editar';";
$trans["biblioMarcListDel"] = "\$text = 'excluir';";

# ****************************************************************************
# * Translation text for page usmarc_select.php
# ****************************************************************************
$trans["usmarcSelectHdr"] = "\$text = 'Seletor de Campo MARC';";
$trans["usmarcSelectInst"] = "\$text = 'Selecione um tipo de campo';";
$trans["usmarcSelectNoTags"] = "\$text = 'Nenhuma tag encontrada.';";
$trans["usmarcSelectUse"] = "\$text = 'usar';";
$trans["usmarcCloseWindow"] = "\$text = 'Fechar Janela';";

# ****************************************************************************
# * Translation text for page biblio_marc_new_form.php
# ****************************************************************************
$trans["biblioMarcNewFormHdr"] = "\$text = 'Adicionar Novo Campo Marc';";
$trans["biblioMarcNewFormTag"] = "\$text = 'Tag';";
$trans["biblioMarcNewFormSubfld"] = "\$text = 'Subcampo';";
$trans["biblioMarcNewFormData"] = "\$text = 'Dados do Campo';";
$trans["biblioMarcNewFormInd1"] = "\$text = 'Indicador 1';";
$trans["biblioMarcNewFormInd2"] = "\$text = 'Indicador 2';";
$trans["biblioMarcNewFormSelect"] = "\$text = 'Selecionar';";

# *********************************0*******************************************
# * Translation text for page biblio_marc_new.php
# ****************************************************************************
$trans["biblioMarcNewSuccess"] = "\$text = 'Campo Marc adicionado com sucesso.';";

# ****************************************************************************
# * Translation text for page biblio_marc_edit_form.php
# ****************************************************************************
$trans["biblioMarcEditFormHdr"] = "\$text = 'Editar Campo Marc';";

# ****************************************************************************
# * Translation text for page biblio_marc_edit.php
# ****************************************************************************
$trans["biblioMarcEditSuccess"] = "\$text = 'Campo Marc atualizado com sucesso.';";

# ****************************************************************************
# * Translation text for page biblio_marc_del_confirm.php
# ****************************************************************************
$trans["biblioMarcDelConfirmMsg"] = "\$text = 'Tem certeza de que deseja excluir o campo com a tag %tag% e o subcampo %subfieldCd%?';";

# ****************************************************************************
# * Translation text for page biblio_marc_del.php
# ****************************************************************************
$trans["biblioMarcDelSuccess"] = "\$text = 'Campo Marc excluído com sucesso.';";

# ****************************************************************************
# * Translation text for page biblio_del_confirm.php
# ****************************************************************************
$trans["biblioDelConfirmWarn"] = "\$text = 'Esta bibliografia tem %copyCount% cópia(s) e %holdCount% solicitação(ões) de reserva. Por favor, exclua essas cópias e/ou solicitações de reserva antes de excluir esta bibliografia.';";
$trans["biblioDelConfirmReturn"] = "\$text = 'voltar para as informações da bibliografia';";
$trans["biblioDelConfirmMsg"] = "\$text = 'Tem certeza de que deseja excluir a bibliografia com o título %title%?';";

# ****************************************************************************
# * Translation text for page biblio_del_confirm.php
# ****************************************************************************
$trans["biblioDelMsg"] = "\$text = 'Bibliografia, %title%, foi excluída.';";
$trans["biblioDelReturn"] = "\$text = 'voltar para a pesquisa de bibliografia';";

# ****************************************************************************
# * Translation text for page biblio_hold_list.php
# ****************************************************************************
$trans["biblioHoldListHead"] = "\$text = 'Solicitações de Reserva de Bibliografia:';";
$trans["biblioHoldListNoHolds"] = "\$text = 'Nenhuma cópia de bibliografia está atualmente em reserva.';";
$trans["biblioHoldListHdr1"] = "\$text = 'Função';";
$trans["biblioHoldListHdr2"] = "\$text = 'Cópia';";
$trans["biblioHoldListHdr3"] = "\$text = 'Colocado em Reserva';";
$trans["biblioHoldListHdr4"] = "\$text = 'Membro';";
$trans["biblioHoldListHdr5"] = "\$text = 'Status';";
$trans["biblioHoldListHdr6"] = "\$text = 'Devolução';";
$trans["biblioHoldListdel"] = "\$text = 'Excluir';";

# ****************************************************************************
# * Translation text for page noauth.php
# ****************************************************************************
$trans["NotAuth"] = "\$text = 'Você não está autorizado a usar a aba Catalogação';";

# ****************************************************************************
# * Translation text for page upload_usmarc.php and upload_usmarc_form.php
# ****************************************************************************
$trans["MarcUploadTest"] = "\$text = 'Carregar Teste';";
$trans["MarcUploadTestTrue"] = "\$text = 'Verdadeiro';";
$trans["MarcUploadTestFalse"] = "\$text = 'Falso';";
$trans["MarcUploadTestFileUpload"] = "\$text = 'Arquivo de Entrada USMarc';";
$trans["MarcUploadRecordsUploaded"] = "\$text = 'Registros Carregados';";
$trans["MarcUploadMarcRecord"] = "\$text = 'Registro MARC';";
$trans["MarcUploadTag"] = "\$text = 'Tag';";
$trans["MarcUploadSubfield"] = "\$text = 'Sub';";
$trans["MarcUploadData"] = "\$text = 'Dados';";
$trans["MarcUploadRawData"] = "\$text = 'Dados Brutos:';";
$trans["UploadFile"] = "\$text = 'Carregar Arquivo';";

# ****************************************************************************
# * Translation text for page usmarc_select.php
# ****************************************************************************
$trans["PoweredByOB"] = "\$text = 'Desenvolvido por OpenBiblio';";
$trans["Copyright"] = "\$text = 'Copyright &copy; 2002-2005';";
$trans["underthe"] = "\$text = 'sob a';";
$trans["GNU"] = "\$text = 'Licença Pública Geral GNU';";

$trans["catalogResults"] = "\$text = 'Resultados da Pesquisa';";

# ****************************************************************************
# * Translation text for page biblio_history.php
# ****************************************************************************
$trans["Bibliography Checkout History:"] = "\$text = 'Histórico de Empréstimos da Bibliografia:';";
$trans["Date"] = "\$text = 'Data';";
$trans["Barcode"] = "\$text = 'Código de Barras';";
$trans["New Status"] = "\$text = 'Novo Status';";
$trans["Member"] = "\$text = 'Membro';";
$trans["Due Date"] = "\$text = 'Data de Vencimento';";
$trans["No history was found."] = "\$text = 'Nenhum histórico encontrado.';";

# ****************************************************************************
# * Translation text for page upload_usmarc.php
# ****************************************************************************
$trans["File doesn't exist"] = "\$text='O arquivo especificado está vazio ou não existe!';";

#****************************************************************************
#*  Translation text for pages upload_pciture*.php
#****************************************************************************
$trans["PictureUploadFileUpload"]         = "\$text = 'Arquivo de imagem (jpg, gif, png; máx. 500kb)\n';";
$trans["PicUploadSize500"]                = "\$text = 'Por favor, não carregue um arquivo maior que 500kB.\n';";
$trans["PicUploadExifType"]               = "\$text = 'Este arquivo não possui informações exif corretas, apenas jpg, gif e png são permitidos!\n';";
$trans["PicUploadNoExif"]                 = "\$text = 'Aparentemente a extensão exif para PHP não está instalada, não é possível verificar a imagem!\n';";
$trans["PicUploadNoDir"]                  = "\$text = 'O diretório \'pictures\' no diretório openbiblio não pode ser encontrado ou as permissões estão faltando!\n';";
$trans["PicUploadPictureUploaded"]        = "\$text = 'O arquivo é válido e foi carregado com sucesso.\n';";
$trans["PicUploadInfoMedium"]             = "\$text = 'Para as informações da mídia';";
$trans["PicUploadAttack"]                 = "\$text = 'O arquivo não pôde ser carregado porque ocorreu um erro!\n';";
$trans["PicUploadNoValidPicture"]         = "\$text = 'O arquivo não contém uma imagem válida!\n';";
$trans["PicUploadNoFile"]                 = "\$text = 'Nenhum arquivo foi especificado!\n';";
$trans["PicUploadNoTmp"]                  = "\$text = 'Algo deu errado com o upload! O valor \'upload_max_filesize\' no PHP é muito baixo?\n';";

?>