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
$trans["circCancel"] = "\$text = 'Cancelar';";
$trans["circDelete"] = "\$text = 'Excluir';";
$trans["circLogout"] = "\$text = 'Sair';";
$trans["circAdd"] = "\$text = 'Adicionar';";
$trans["mbrDupBarcode"] = "\$text = 'Número do código de barras, %barcode%, está atualmente em uso.';";

# ****************************************************************************
# * Translation text for page index.php
# ****************************************************************************
$trans["indexHeading"] = "\$text='Circulação';";
$trans["indexCardHdr"] = "\$text='Pesquisar Membro por Número do Cartão:';";
$trans["indexCard"] = "\$text='Número do Cartão:';";
$trans["indexSearch"] = "\$text='Pesquisar';";
$trans["indexNameHdr"] = "\$text='Pesquisar Membro por Sobrenome:';";
$trans["indexName"] = "\$text='Sobrenome começa com:';";

# ****************************************************************************
# * Translation text for page mbr_new_form.php, mbr_edit_form.php and mbr_fields.php
# ****************************************************************************
$trans["Mailing Address:"] = "\$text='Endereço de Correspondência:';";
$trans["mbrNewForm"] = "\$text='Adicionar Novo';";
$trans["mbrEditForm"] = "\$text='Editar';";
$trans["mbrFldsHeader"] = "\$text='Membro:';";
$trans["mbrFldsCardNmbr"] = "\$text='Número do Cartão:';";
$trans["mbrFldsLastName"] = "\$text='Sobrenome:';";
$trans["mbrFldsFirstName"] = "\$text='Primeiro Nome:';";
$trans["mbrFldsAddr1"] = "\$text='Endereço Linha 1:';";
$trans["mbrFldsAddr2"] = "\$text='Endereço Linha 2:';";
$trans["mbrFldsCity"] = "\$text='Cidade:';";
$trans["mbrFldsStateZip"] = "\$text='Estado, CEP:';";
$trans["mbrFldsHomePhone"] = "\$text='Telefone Residencial:';";
$trans["mbrFldsWorkPhone"] = "\$text='Telefone Comercial:';";
$trans["mbrFldsEmail"] = "\$text='Endereço de E-mail:';";
$trans["mbrFldsClassify"] = "\$text='Classificação:';";
$trans["mbrFldsGrade"] = "\$text='Série Escolar:';";
$trans["mbrFldsTeacher"] = "\$text='Professor(a) Escolar:';";
$trans["mbrFldsMbrShip"] = "\$text='Associação Termina (aaaa-mm-dd):';";
$trans["mbrFldsSubmit"] = "\$text='Enviar';";
$trans["mbrFldsCancel"] = "\$text='Cancelar';";
$trans["mbrsearchResult"] = "\$text='Páginas de Resultado: ';";
$trans["mbrsearchprev"] = "\$text='anterior';";
$trans["mbrsearchnext"] = "\$text='próximo';";
$trans["First"] = "\$text='Primeiro';";
$trans["Last"] = "\$text='Último';";
$trans["mbrsearchNoResults"] = "\$text='Nenhum resultado encontrado.';";
$trans["mbrsearchFoundResults"] = "\$text=' resultados encontrados.';";
$trans["mbrsearchSearchResults"] = "\$text='Resultados da Pesquisa:';";
$trans["mbrsearchCardNumber"] = "\$text='Número do Cartão:';";
$trans["mbrsearchClassification"] = "\$text='Classificação:';";
$trans["mbr_new_form_Reenterpassword"]     = "\$text = 'Repetir senha:';";
$trans["PwdRequirement"]                = "\$text = 'Regras: A senha deve ter entre 8 e 20 caracteres, pelo menos 1 dígito(s), <br />'
        . 'pelo menos 1 letra minúscula(s), pelo menos 1 letra maiúscula(s), pelo menos 1 caractere não alfanumérico(s) (permitido: @_#§%$)';";
$trans["PwdRequirementErr"]  = "\$text = 'A senha deve ter pelo menos 8 caracteres, pelo menos 1 dígito(s), pelo menos 1 letra minúscula(s),'
        . ' pelo menos 1 letra maiúscula(s), pelo menos 1 caractere não alfanumérico(s) (permitido: @_#§%$)';";

# ****************************************************************************
# * Translation text for page mbr_new.php (and mbr_view.php)
# ****************************************************************************
$trans["mbr_new_form_TypeOfPwdCreation"]        = "\$text = 'Criação de senha por e-mail?&nbsp;';";
$trans["mbr_new_form_TypeOfPwdCreationInfo"]    = "\$text = 'Se você inserir um endereço de e-mail válido, uma mensagem de boas-vindas ' . 'pode ser enviada por e-mail com um link para criar sua própria senha';";
$trans["mbr_new_form_Reenterpassword"]          = "\$text = 'Repetir senha:';";
$trans["mbr_new_form_Password"]                 = "\$text = 'Senha:';";
$trans["errNoPwdForgottenCode"]                 = "\$text = 'Nenhum código de senha pôde ser criado!';";
$trans["mbrNewSuccess"]                         = "\$text='Membro adicionado com sucesso.';";
$trans["mbrNewMailingSuccessful"]               = "\$text='E-mail de boas-vindas com criação de senha enviado com sucesso.';";
$trans["errMailCouldNotBeSent"]                 = "\$text = 'Mensagem não pôde ser enviada.';";
$trans["mbrNoPassword"]                         = "\$text = '<p style=\"font-weight: bold; color: red;\">Nenhuma senha definida!</p>';";

# ****************************************************************************
# * Translation text for page mbr_edit.php
# ****************************************************************************
$trans["mbrEditSuccess"] = "\$text='Membro foi atualizado com sucesso.';";
$trans["mbrRenewSuccess"] = "\$text='Associação foi renovada com sucesso por %length% mês.';";
$trans["All items renewed."] = "\$text='Todos os itens renovados.';";

#****************************************************************************
# * Translation text for page mbr_view.php
# ****************************************************************************
$trans["mbrViewHead1"] = "\$text='Informações do Membro';";
$trans["mbrViewName"] = "\$text='Nome:';";
$trans["mbrViewAddr"] = "\$text='Endereço:';";
$trans["mbrViewCardNmbr"] = "\$text='Número do Cartão:';";
$trans["mbrViewClassify"] = "\$text='Classificação:';";
$trans["mbrViewPhone"] = "\$text='Telefone:';";
$trans["mbrViewPhoneHome"] = "\$text='R:';";
$trans["mbrViewPhoneWork"] = "\$text='C:';";
$trans["mbrViewEmail"] = "\$text='Endereço de E-mail:';";
$trans["mbrViewGrade"] = "\$text='Série Escolar:';";
$trans["mbrViewTeacher"] = "\$text='Professor(a) Escolar:';";
$trans["mbrViewMbrShipEnd"] = "\$text='Associação Termina (aaaa-mm-dd):';";
$trans["mbrViewMbrShipNoEnd"] = "\$text='ilimitado/não usado';";
$trans["mbrViewHead2"] = "\$text='Estatísticas de Empréstimo';";
$trans["mbrViewStatColHdr1"] = "\$text='Material';";
$trans["mbrViewStatColHdr2"] = "\$text='Contagem';";
$trans["mbrViewStatColHdr3"] = "\$text='Limites';";
$trans["mbrViewStatColHdr4"] = "\$text='Empréstimo';";
$trans["mbrViewStatColHdr5"] = "\$text='Renovação';";
$trans["mbrViewHead3"] = "\$text='Verificação de Bibliografia';";
$trans["mbrViewBarcode"] = "\$text='Número do Código de Barras:';";
$trans["mbrViewCheckOut"] = "\$text='Empréstimo';";
$trans["mbrViewHead4"] = "\$text='Bibliografias Atualmente Emprestadas:';";
$trans["mbrViewOutHdr1"] = "\$text='Emprestado';";
$trans["mbrViewOutHdr2"] = "\$text='Material';";
$trans["mbrViewOutHdr3"] = "\$text='Código de Barras';";
$trans["mbrViewOutHdr4"] = "\$text='Título';";
$trans["mbrViewOutHdr5"] = "\$text='Autor';";
$trans["mbrViewOutHdr6"] = "\$text='Devolução';";
$trans["mbrViewOutHdr7"] = "\$text='Dias de Atraso';";
$trans["mbrViewOutHdr8"] = "\$text='Renovação';";
$trans["mbrViewOutHdr9"] = "\$text='vez(es)';";
$trans["mbrViewOutHdr10"] = "\$text='Devolução';";
$trans["To Shelving Cart"] = "\$text='Para Carrinho de Estantes';";
$trans["Renew item"] = "\$text='Renovar item';";
$trans["mbrViewNoCheckouts"] = "\$text='Nenhuma bibliografia está atualmente emprestada.';";
$trans["mbrViewHead5"] = "\$text='Fazer Reserva:';";
$trans["mbrViewHead6"] = "\$text='Bibliografias Atualmente em Reserva:';";
$trans["mbrViewPlaceHold"] = "\$text='Fazer Reserva';";
$trans["mbrViewHoldHdr1"] = "\$text='Função';";
$trans["mbrViewHoldHdr2"] = "\$text='Colocado em Reserva';";
$trans["mbrViewHoldHdr3"] = "\$text='Material';";
$trans["mbrViewHoldHdr4"] = "\$text='Código de Barras';";
$trans["mbrViewHoldHdr5"] = "\$text='Título';";
$trans["mbrViewHoldHdr6"] = "\$text='Autor';";
$trans["mbrViewHoldHdr7"] = "\$text='Status';";
$trans["mbrViewHoldHdr8"] = "\$text='Devolução';";
$trans["mbrViewNoHolds"] = "\$text='Nenhuma bibliografia está atualmente em reserva.';";
$trans["mbrViewBalMsg"] = "\$text='Nota: O membro tem um saldo de conta pendente de %bal%.';";
$trans["mbrViewShipEnd"] = "\$text='Atenção: A associação deste membro expirou!';";
$trans["mbrPrintCheckouts"] = "\$text='imprimir empréstimos';";
$trans["Renew All"] = "\$text='Renovar Tudo';";
$trans["mbrViewDel"] = "\$text='excluir';";
$trans["mbrViewRenew1"] = "\$text='Renovar associação por';";
$trans["mbrViewRenew2"] = "\$text='mês.<br>Desde Hoje ou desde a Data de Pagamento, se for no futuro.';";
$trans["Due Date:"] = "\$text='Data de Vencimento:';";
$trans["Override Due Date"] = "\$text='Substituir Data de Vencimento';";
$trans["Cancel"] = "\$text='Cancelar';";

# ****************************************************************************
# * Translation text for page checkout.php
# ****************************************************************************
$trans["checkoutBalErr"] = "\$text='O membro deve pagar o saldo da conta pendente antes de fazer o empréstimo.';";
$trans["checkoutEndErr"] = "\$text='O membro deve renovar a associação antes de fazer o empréstimo.';";
$trans["checkoutErr1"] = "\$text='O número do código de barras deve ser alfanumérico.';";
$trans["checkoutErr2"] = "\$text='Nenhuma bibliografia foi encontrada com esse número de código de barras.';";
$trans["checkoutErr3"] = "\$text='A bibliografia com o número de código de barras %barcode% já está emprestada.';";
$trans["checkoutErr4"] = "\$text='A bibliografia com o número de código de barras %barcode% não está disponível para empréstimo.';";
$trans["checkoutErr5"] = "\$text='A bibliografia com o número de código de barras %barcode% está atualmente em reserva para outro membro.';";
$trans["checkoutErr6"] = "\$text='O membro atingiu o limite de empréstimo para o tipo de material da bibliografia especificada.';";
$trans["checkoutErr7"] = "\$text='A bibliografia com o número de código de barras %barcode% atingiu o limite de renovação do membro.';";
$trans["checkoutErr8"] = "\$text='A bibliografia com o número de código de barras %barcode% não pode ser renovada, pois já está atrasada.';";

# ****************************************************************************
# * Translation text for page shelving_cart.php
# ****************************************************************************
$trans["shelvingCartErr1"] = "\$text='O número do código de barras deve ser alfanumérico.';";
$trans["shelvingCartErr2"] = "\$text='Nenhuma bibliografia foi encontrada com esse número de código de barras.';";
$trans["shelvingCartTrans"] = "\$text='Multa por atraso (código de barras=%barcode%)';";

# ****************************************************************************
# * Translation text for page checkin_form.php
# ****************************************************************************
$trans["checkinFormHdr1"] = "\$text='Devolução de Bibliografia:';";
$trans["checkinFormBarcode"] = "\$text='Número do Código de Barras:';";
$trans["checkinFormShelveButton"] = "\$text='Adicionar ao Carrinho de Estantes';";
$trans["checkinFormCheckinLink1"] = "\$text='Devolver itens selecionados';";
$trans["checkinFormCheckinLink2"] = "\$text='Devolver todos os itens';";
$trans["checkinFormHdr2"] = "\$text='Lista Atual do Carrinho de Estantes:';";
$trans["checkinFormColHdr1"] = "\$text='Data da Digitalização';";
$trans["checkinFormColHdr2"] = "\$text='Código de Barras';";
$trans["checkinFormColHdr3"] = "\$text='Título';";
$trans["checkinFormColHdr4"] = "\$text='Autor';";
$trans["checkinFormEmptyCart"] = "\$text='Nenhuma bibliografia está atualmente no status de carrinho de estantes.';";
$trans["Checked in %barcode% for "] = "\$text='Devolvido %barcode% para ';";
$trans["Checked in %barcode%."] = "\$text='Devolvido %barcode%.';";
$trans["checkinEndErr"] = "\$text='A associação expirou. O membro deve estender a associação ou pagar um valor extra por %monthlate% mês.';";

# ****************************************************************************
# * Translation text for page checkin.php
# ****************************************************************************
$trans["checkinErr1"] = "\$text='Nenhum item foi selecionado.';";

# ****************************************************************************
# * Translation text for page hold_message.php
# ****************************************************************************
$trans["holdMessageHdr"] = "\$text='Bibliografia Colocada em Reserva!';";
$trans["holdMessageMsg1"] = "\$text='A bibliografia com o número de código de barras %barcode% que você está tentando devolver tem uma ou mais solicitações de reserva. <b>Por favor, arquive esta bibliografia com seus itens reservados em vez de colocá-la em seu carrinho de estantes.</b> O código de status para esta bibliografia foi definido como reserva.';";
$trans["holdMessageMsg2"] = "\$text='Voltar para a devolução da bibliografia.';";

# ****************************************************************************
# * Translation text for page place_hold.php
# ****************************************************************************
$trans["placeHoldErr1"] = "\$text='O número do código de barras deve ser numérico.';";
$trans["placeHoldErr2"] = "\$text='O código de barras não existe.';";
$trans["placeHoldErr3"] = "\$text='Este membro já tem esse item emprestado -- não fazendo reserva.';";
$trans["This item is not checked out or on hold."] = "\$text='Este item não está emprestado ou em reserva.';";

# ****************************************************************************
# * Translation text for page mbr_del_confirm.php
# ****************************************************************************
$trans["mbrDelConfirmWarn"] = "\$text = 'Membro, %name%, tem %checkoutCount% empréstimo(s) e %holdCount% solicitação(ões) de reserva. Todos os materiais emprestados devem ser devolvidos e todas as solicitações de reserva excluídas antes de excluir este membro.';";
$trans["mbrDelConfirmReturn"] = "\$text = 'voltar para as informações do membro';";
$trans["mbrDelConfirmMsg"] = "\$text = 'Tem certeza de que deseja excluir o membro, %name%? Isso também excluirá todo o histórico de empréstimos deste membro.';";

# ****************************************************************************
# * Translation text for page mbr_del.php
# ****************************************************************************
$trans["mbrDelSuccess"] = "\$text='Membro, %name%, foi excluído.';";
$trans["mbrDelReturn"] = "\$text='voltar para a Pesquisa de Membros';";

# ****************************************************************************
# * Translation text for page mbr_history.php
# ****************************************************************************
$trans["mbrHistoryHead1"] = "\$text='Histórico de Empréstimos do Membro:';";
$trans["mbrHistoryNoHist"] = "\$text='Nenhum histórico encontrado.';";
$trans["mbrHistoryHdr1"] = "\$text='Código de Barras';";
$trans["mbrHistoryHdr2"] = "\$text='Título';";
$trans["mbrHistoryHdr3"] = "\$text='Autor';";
$trans["mbrHistoryHdr4"] = "\$text='Novo Status';";
$trans["mbrHistoryHdr5"] = "\$text='Data de Alteração de Status';";
$trans["mbrHistoryHdr6"] = "\$text='Data de Devolução';";

# ****************************************************************************
# * Translation text for page mbr_account.php
# ****************************************************************************
$trans["mbrAccountLabel"] = "\$text='Adicionar uma Transação:';";
$trans["mbrAccountTransTyp"] = "\$text='Tipo de Transação:';";
$trans["mbrAccountAmount"] = "\$text='Valor:';";
$trans["mbrAccountDesc"] = "\$text='Descrição:';";
$trans["mbrAccountHead1"] = "\$text='Transações da Conta do Membro:';";
$trans["mbrAccountNoTrans"] = "\$text='Nenhuma transação encontrada.';";
$trans["mbrAccountOpenBal"] = "\$text='Saldo Inicial';";
$trans["mbrAccountDel"] = "\$text='excluir';";
$trans["mbrAccountHdr1"] = "\$text='Função';";
$trans["mbrAccountHdr2"] = "\$text='Data';";
$trans["mbrAccountHdr3"] = "\$text='Tipo de Transação';";
$trans["mbrAccountHdr4"] = "\$text='Descrição';";
$trans["mbrAccountHdr5"] = "\$text='Valor';";
$trans["mbrAccountHdr6"] = "\$text='Saldo';";

# ****************************************************************************
# * Translation text for page mbr_transaction.php
# ****************************************************************************
$trans["mbrTransactionSuccess"] = "\$text='Transação concluída com sucesso.';";

# ****************************************************************************
# * Translation text for page mbr_transaction_del_confirm.php
# ****************************************************************************
$trans["mbrTransDelConfirmMsg"] = "\$text='Tem certeza de que deseja excluir esta transação?';";

# ****************************************************************************
# * Translation text for page mbr_transaction_del.php
# ****************************************************************************
$trans["mbrTransactionDelSuccess"] = "\$text='Transação excluída com sucesso.';";

# ****************************************************************************
# * Translation text for page mbr_print_checkouts.php
# ****************************************************************************
$trans["mbrPrintCheckoutsTitle"] = "\$text='Empréstimos para %mbrName%';";
$trans["mbrPrintCheckoutsHdr1"] = "\$text='Data Atual:';";
$trans["mbrPrintCheckoutsHdr2"] = "\$text='Membro:';";
$trans["mbrPrintCheckoutsHdr3"] = "\$text='Número do Cartão:';";
$trans["mbrPrintCheckoutsHdr4"] = "\$text='Classificação:';";
$trans["mbrPrintCloseWindow"] = "\$text='Fechar Janela';";

# ****************************************************************************
# * Translation text for page noauth.php
# ****************************************************************************
$trans["NotAuth"] = "\$text = 'Você não está autorizado a usar esta função na aba Circulação.';";

# ****************************************************************************
# * Translation text for page offline.php
# ****************************************************************************
$trans["Upload Offline Circulation"] = "\$text='Carregar Circulação Offline';";
$trans["Upload"] = "\$text='Carregar';";
$trans["Date:"] = "\$text='Data:';";
$trans["Command File:"] = "\$text='Arquivo de Comando:';";
$trans["Bad upload file: Expected a command code, but didn't get one"] = "\$text='Arquivo de upload inválido: Esperava um código de comando, mas não recebeu um';";
$trans["Couldn't check out %item% to %member%: %error%"] = "\$text='Não foi possível emprestar %item% para %member%: %error%';";
$trans["Couldn't check in %item%: %error%"] = "\$text='Não foi possível devolver %item%: %error%';";
$trans["Unrecognized command code: %cmd%"] = "\$text='Código de comando não reconhecido: %cmd%';";
$trans["Command Sheet"] = "\$text='Folha de Comando';";
$trans["Actions which did not produce an error have completed. Think carefully before uploading the same file again, or some circulations may be recorded twice."] = "\$text='Ações que não produziram erro foram concluídas. Pense cuidadosamente antes de carregar o mesmo arquivo novamente, ou algumas circulações podem ser registradas duas vezes.';";
$trans["Errors"] = "\$text='Erros';";
$trans["Offline Upload Successful."] = "\$text='Upload Offline Concluído com Sucesso.';";
$trans["Couldn't read file: "] = "\$text='Não foi possível ler o arquivo: ';";

?>