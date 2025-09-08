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
#*  Translation text used on multiple pages
#****************************************************************************
$trans["reportsCancel"]            = "\$text = 'Cancelar';";

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHdr"]                 = "\$text = 'Relatórios';";
$trans["indexDesc"]                = "\$text = 'Use a lista de relatórios ou etiquetas localizada na área de navegação à esquerda para produzir relatórios ou etiquetas.';";
$trans["Report Errors"]            = "\$text = 'Erros de Relatório';";

#****************************************************************************
#*  Translation text for page report_list.php
#****************************************************************************
$trans["reportListHdr"]            = "\$text = 'Lista de Relatórios';";
$trans["reportListDesc"]           = "\$text = 'Escolha um dos links a seguir para executar um relatório.';";
$trans["reportListXmlErr"]         = "\$text = 'Ocorreu um erro ao analisar o xml de definição do relatório.';";
$trans["reportListCannotRead"]     = "\$text = 'Não é possível ler o arquivo de etiqueta: %fileName%';";

#****************************************************************************
#*  Translation text for page label_list.php
#****************************************************************************
$trans["labelListHdr"]             = "\$text = 'Lista de Etiquetas';";
$trans["labelListDesc"]            = "\$text = 'Escolha um dos links a seguir para produzir etiquetas em formato pdf.';";
$trans["displayLabelsXmlErr"]      = "\$text = 'Ocorreu um erro ao analisar o xml de definição do relatório. Erro = ';";

#****************************************************************************
#*  Translation text for page letter_list.php
#****************************************************************************
$trans["letterListHdr"]            = "\$text = 'Lista de Cartas';";
$trans["letterListDesc"]           = "\$text = 'Escolha um dos links a seguir para produzir cartas em formato pdf.';";
$trans["displayLettersXmlErr"]      = "\$text = 'Ocorreu um erro ao analisar o xml de definição do relatório. Erro = ';";

#****************************************************************************
#*  Translation text for page report_criteria.php
#****************************************************************************
$trans["reportCriteriaHead1"]      = "\$text = 'Critérios de Pesquisa do Relatório (opcional)';";
$trans["reportCriteriaHead2"]      = "\$text = 'Ordem de Classificação do Relatório (opcional)';";
$trans["reportCriteriaHead3"]      = "\$text = 'Tipo de Saída do Relatório';";
$trans["reportCriteriaCrit1"]      = "\$text = 'Critério 1:';";
$trans["reportCriteriaCrit2"]      = "\$text = 'Critério 2:';";
$trans["reportCriteriaCrit3"]      = "\$text = 'Critério 3:';";
$trans["reportCriteriaCrit4"]      = "\$text = 'Critério 4:';";
$trans["reportCriteriaEQ"]         = "\$text = '=';";
$trans["reportCriteriaNE"]         = "\$text = 'diferente de';";
$trans["reportCriteriaLT"]         = "\$text = '&lt;';";
$trans["reportCriteriaGT"]         = "\$text = '&gt;';";
$trans["reportCriteriaLE"]         = "\$text = '&lt ou =';";
$trans["reportCriteriaGE"]         = "\$text = '&gt ou =';";
$trans["reportCriteriaBT"]         = "\$text = 'entre';";
$trans["reportCriteriaAnd"]        = "\$text = 'e';";
$trans["reportCriteriaRunReport"]  = "\$text = 'Executar Relatório';";
$trans["reportCriteriaSortCrit1"]  = "\$text = 'Classificar 1:';";
$trans["reportCriteriaSortCrit2"]  = "\$text = 'Classificar 2:';";
$trans["reportCriteriaSortCrit3"]  = "\$text = 'Classificar 3:';";
$trans["reportCriteriaAscending"]  = "\$text = 'ascendente';";
$trans["reportCriteriaDescending"] = "\$text = 'descendente';";
$trans["reportCriteriaStartOnLabel"] = "\$text = 'Começar a imprimir na etiqueta:';";
$trans["reportCriteriaOutput"]     = "\$text = 'Tipo de Saída:';";
$trans["reportCriteriaOutputHTML"] = "\$text = 'HTML';";
$trans["reportCriteriaOutputCSV"]  = "\$text = 'CSV';";
$trans["Reverse"]  	   = "\$text = 'Inverter';";
$trans["Report Criteria"]          = "\$text = 'Critérios do Relatório';";

#****************************************************************************
#*  Translation text for page run_report.php
#****************************************************************************
$trans["runReportReturnLink1"]     = "\$text = 'critérios de seleção de relatório';";
$trans["runReportReturnLink2"]     = "\$text = 'lista de relatórios';";
$trans["runReportTotal"]           = "\$text = 'Total de Linhas:';";
$trans["Result Pages: "]           = "\$text = 'Páginas de Resultado: ';";
$trans["&laquo;Prev"]              = "\$text = '&laquo;Anterior';";
$trans["Next&raquo;"]              = "\$text = 'Próximo&raquo;';";
$trans["&laquo;First"]             = "\$text = '&laquo;Primeiro';";
$trans["Last&raquo;"]              = "\$text = 'Último&raquo;';";
$trans["No results found."]        = "\$text = 'Nenhum resultado encontrado.';";
$trans["Report Results:"]          = "\$text = 'Resultados do Relatório:';";
$trans["results found."]           = "\$text = 'resultados encontrados.';";
$trans["Print list"]               = "\$text = 'Imprimir lista';";

#****************************************************************************
#*  Translation text for page display_labels.php
#****************************************************************************
$trans["displayLabelsStartOnLblErr"] = "\$text = 'O campo deve ser numérico.';";
$trans["displayLabelsXmlErr"]      = "\$text = 'Ocorreu um erro ao analisar o xml de definição do relatório. Erro = ';";
$trans["displayLabelsCannotRead"]  = "\$text = 'Não é possível ler o arquivo de etiqueta: %fileName%';";

#****************************************************************************
#*  Translation text for page noauth.php
#****************************************************************************
$trans["noauthMsg"]                = "\$text = 'Você não está autorizado a usar a aba Relatórios.';";
$trans["Report Errors"]            = "\$text = 'Erros de Relatório';";
#****************************************************************************
#*  Report TitlesReport Criteria
#****************************************************************************
$trans["reportHolds"]              = "\$text = 'Solicitações de Reserva Contendo Informações de Contato do Membro';";
$trans["reportCheckouts"]          = "\$text = 'Listagem de Empréstimos da Bibliografia';";
$trans["Over Due Letters"]         = "\$text = 'Cartas de Atraso';";
$trans["reportLabels"]             = "\$text = 'Consulta de Impressão de Etiquetas (usada por etiquetas)';";
$trans["popularBiblios"]           = "\$text = 'Bibliografias Mais Populares';";
$trans["overdueList"]              = "\$text = 'Lista de Membros Atrasados';";
$trans["balanceDueList"]           = "\$text = 'Lista de Membros com Saldo Devedor';";
$trans["Acquisition"]              = "\$text = 'Aquisição';";
$trans["Duplicate Titles"]         = "\$text = 'Títulos Duplicados';";
$trans["Periodic Checkout Count"]  = "\$text = 'Contagem Periódica de Empréstimos';";
$trans["Copy Search"]              = "\$text = 'Pesquisa de Cópia';";
$trans["Inventory List"]           = "\$text = 'Lista de Inventário';";
$trans["Biblio List"]              = "\$text = 'Lista de Bibliografias';";
$trans["Return"]    	           = "\$text = 'Retornar';";
$trans["Search for Number of Players"] = "\$text = 'Pesquisar por Número de Jogadores';";
$trans["Search for Age of Players"]    = "\$text = 'Pesquisar por Idade dos Jogadores';";
$trans["Search for Playtime"]      = "\$text = 'Pesquisar por Tempo de Jogo';";
$trans["Search for Game"]          = "\$text = 'Pesquisar por Jogo';";
$trans["Item Checkout History"]    = "\$text = 'Histórico de Empréstimos de Item';";
$trans["Member Search"]            = "\$text = 'Pesquisa de Membro';";
$trans["Most Popular Authors"]     = "\$text = 'Autores Mais Populares';";
$trans["Labels"]                   = "\$text = 'Etiquetas';";
$trans["Call Num."]                = "\$text = 'Número de Chamada.';";
$trans["Barcode"]                  = "\$text = 'Código de Barras';";
$trans["Title"]                    = "\$text = 'Título';";
$trans["Number"]                   = "\$text = 'Número';";
$trans["Age"]                      = "\$text = 'Idade';";
$trans["max. Time"]                = "\$text = 'Tempo máx.';";
$trans["time"]                     = "\$text = 'tempo';";
$trans["maxPlayer"]                = "\$text = 'Jogador máx.';";
$trans["minPlayer"]                = "\$text = 'Jogador mín.';";
$trans["maxAge"]                   = "\$text = 'Idade máx.';";
$trans["minAge"]                   = "\$text = 'Idade mín.';";
$trans["Author"]                   = "\$text = 'Autor';";
$trans["Publisher"]                = "\$text = 'Editora';";
$trans["Description"]              = "\$text = 'Descrição';";
$trans["Quantity"]                 = "\$text = 'Quantidade';";
$trans["Member"]                   = "\$text = 'Membro';";
$trans["Checkout"]                 = "\$text = 'Empréstimo';";
$trans["Due"]                      = "\$text = 'Vencimento';";
$trans["Balance"]                  = "\$text = 'Saldo';";
$trans["Member Barcode"]           = "\$text = 'Código de Barras do Membro';";
$trans["Status Begin"]             = "\$text = 'Início do Status';";
$trans["Hold Begin"]               = "\$text = 'Início da Reserva';";
$trans["Acq. Date"]                = "\$text = 'Data de Aquisição';";
$trans["Collection"]               = "\$text = 'Coleção';";
$trans["Material"]                 = "\$text = 'Material';";
$trans["After (Date or yesterday)"] = "\$text = 'Depois (Data ou ontem)';";
$trans["Before"]                   = "\$text = 'Antes';";
$trans["Minimum balance"]          = "\$text = 'Saldo mínimo';";
$trans["Remainder of title"]       = "\$text = 'Restante do título';";
$trans["Record created on"]        = "\$text = 'Registro criado em';";
$trans["Duplicate Criteria"]       = "\$text = 'Critérios Duplicados';";
$trans["Title, Title Remainder, Author"] = "\$text = 'Título, Restante do Título, Autor';";
$trans["Title, Author"]            = "\$text = 'Título, Autor';";
$trans["Title, Title Remainder, Date Created"] = "\$text = 'Título, Restante do Título, Data de Criação';";
$trans["Author, Title, Title Remainder, Date Created"] = "\$text = 'Autor, Título, Restante do Título, Data de Criação';";
$trans["Title Remainder"]          = "\$text = 'Restante do Título';";
$trans["Date Created"]             = "\$text = 'Data de Criação';";
$trans["Cycle"]                    = "\$text = 'Ciclo';";
$trans["# Checkouts"]              = "\$text = '# Empréstimos';";
$trans["Time Span"]                = "\$text = 'Período de Tempo';";
$trans["Week"]                     = "\$text = 'Semana';";
$trans["Month"]                    = "\$text = 'Mês';";
$trans["Quarter"]                  = "\$text = 'Trimestre';";
$trans["Due before"]               = "\$text = 'Vencimento antes de';";
$trans["Out since"]                = "\$text = 'Emprestado desde';";
$trans["Barcode Starts With"]      = "\$text = 'Código de Barras Começa Com';";
$trans["List of Barcodes (spaced)"] = "\$text = 'Lista de Códigos de Barras (espaçados)';";
$trans["Newer than (Date or today)"] = "\$text = 'Mais recente que (Data ou hoje)';";
$trans["Validity date (Date)"]     = "\$text = 'Data de validade (Data)';";
$trans["Ablaufdatum"]              = "\$text = 'Data de expiração';";
$trans["Email"]                    = "\$text = 'E-mail';";
$trans["Placed before"]            = "\$text = 'Colocado antes de';";
$trans["Placed since"]             = "\$text = 'Colocado desde';";
$trans["Call Number"]              = "\$text = 'Número de Chamada';";
$trans["Cards"]                    = "\$text = 'Cartões';";
$trans["ID Cards, self-laminating"] = "\$text = 'Cartões de Identificação, autolamináveis';";
$trans["Name"]                     = "\$text = 'Nome';";
$trans["Create Date"]              = "\$text = 'Data de Criação';";
$trans["Date of Return"]           = "\$text = 'Data de Devolução';";
$trans["Name Contains"]            = "\$text = 'Nome Contém';";
$trans["Address or Phone or Email Contains"] = "\$text = 'Endereço ou Telefone ou E-mail Contém';";
$trans["Newer than (Date or today)"] = "\$text = 'Mais recente que (Data ou hoje)';";
$trans["Overdue Letters"]          = "\$text = 'Cartas de Atraso';";
$trans["As of"]                    = "\$text = 'A partir de';";
$trans["# Checkouts, Author"]      = "\$text = '# Empréstimos, Autor';";
$trans["Most Checkouts, Author"]   = "\$text = 'Mais Empréstimos, Autor';";
$trans["Group By"]                 = "\$text = 'Agrupar Por';";
$trans["Bibliography"]             = "\$text = 'Bibliografia';";
$trans["Bibliography Copy"]        = "\$text = 'Cópia da Bibliografia';";
$trans["# Checkouts, Author, Title"] = "\$text = '# Empréstimos, Autor, Título';";
$trans["Most Checkouts, Author, Title"] = "\$text = 'Mais Empréstimos, Autor, Título';";
$trans["HTML (page-by-page)"]      = "\$text = 'HTML (página por página)';";
$trans["Format"]                   = "\$text = 'Formato';";
$trans["HTML (one big page)"]      = "\$text = 'HTML (uma página grande)';";
$trans["CSV"]                      = "\$text = 'CSV';";
$trans["Sort By"]                  = "\$text = 'Ordenar Por';";
$trans["Cataloging"]               = "\$text = 'Catalogação';";
$trans["Circulation"]              = "\$text = 'Circulação';";
$trans["Statistics"]               = "\$text = 'Estatísticas';";

#****************************************************************************
#*  Label Titles
#****************************************************************************
$trans["labelsMulti"]              = "\$text = 'Exemplo de Múltiplas Etiquetas';";
$trans["labelsSimple"]             = "\$text = 'Exemplo de Etiqueta Simples';";

#****************************************************************************
#*  Column Text
#****************************************************************************
$trans["biblio.bibid"]             = "\$text = 'ID da Bibliografia';";
$trans["biblio.create_dt"]         = "\$text = 'Data de Adição';";
$trans["biblio.last_change_dt"]    = "\$text = 'Última Alteração';";
$trans["biblio.material_cd"]       = "\$text = 'Código do Material';";
$trans["biblio.collection_cd"]     = "\$text = 'Coleção';";
$trans["biblio.call_nmbr1"]        = "\$text = 'Chamada 1';";
$trans["biblio.call_nmbr2"]        = "\$text = 'Chamada 2';";
$trans["biblio.call_nmbr3"]        = "\$text = 'Chamada 3';";
$trans["biblio.title_remainder"]   = "\$text = 'Restante do Título';";
$trans["biblio.responsibility_stmt"] = "\$text = 'Declaração de Responsabilidade';";
$trans["biblio.opac_flg"]          = "\$text = 'Flag OPAC';";

$trans["biblio_copy.barcode_nmbr"] = "\$text = 'Código de Barras';";
$trans["biblio.title"]             = "\$text = 'Título';";
$trans["biblio.author"]            = "\$text = 'Autor';";
$trans["biblio_copy.status_begin_dt"]   = "\$text = 'Data de Início do Status';";
$trans["biblio_copy.due_back_dt"]       = "\$text = 'Data de Devolução';";
$trans["member.mbrid"]             = "\$text = 'ID do Membro';";
$trans["member.barcode_nmbr"]      = "\$text = 'Código de Barras do Membro';";
$trans["member.last_name"]         = "\$text = 'Sobrenome';";
$trans["member.first_name"]        = "\$text = 'Primeiro Nome';";
$trans["member.address"]           = "\$text = 'Endereço';";
$trans["biblio_hold.hold_begin_dt"] = "\$text = 'Data de Início da Reserva';";
$trans["member.home_phone"]        = "\$text = 'Telefone Residencial';";
$trans["member.work_phone"]        = "\$text = 'Telefone Comercial';";
$trans["member.email"]             = "\$text = 'E-mail';";
$trans["biblio_status_dm.description"] = "\$text = 'Status';";
$trans["settings.library_name"]    = "\$text = 'Nome da Biblioteca';";
$trans["settings.library_hours"]   = "\$text = 'Horário da Biblioteca';";
$trans["settings.library_phone"]   = "\$text = 'Telefone da Biblioteca';";
$trans["days_late"]                = "\$text = 'Dias de Atraso';";
$trans["title"]                    = "\$text = 'Título';";
$trans["author"]                   = "\$text = 'Autor';";
$trans["due_back_dt"]              = "\$text = 'Devolução';";
$trans["checkoutCount"]            = "\$text = 'Contagem de Empréstimos';";

$trans["Member List : Grade, Teacher"] = "\$text = 'Lista de Membros: Série, Professor';";
$trans["Over Due Member List : Grade, Teacher"] = "\$text = 'Lista de Membros Atrasados: Série, Professor';";

?>