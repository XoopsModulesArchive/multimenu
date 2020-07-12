<?php
/**
* XOOPS - PHP Content Management System
* Copyright (c) 2001 - 2006 <http://www.xoops.org/>
*
* Module: multiMenu 1.90
* Licence : GPL
* Authors :
*           - solo (http://www.wolfpackclan.com/wolfactory)
*			- herve (http://www.herve-thouzard.com)
*			- blueteen (http://myxoops.romanais.info)
*			- DuGris (http://www.dugris.info)
*/

include('../xoops_version.php');

        $i=1; $ii=0;

 	$settings_val_array =  array();
                               foreach( $modversion['config'] as $x => $datas ) {
        $settings_val_array[$i++] = 'Defini��es : ' . constant($datas['title']) . '|<ul><li>' . constant($datas['description']) . '</li><li style="font-style:italic;">' . constant($datas['help']) . '</li></ul>|index.php?admin=settings&num='.$ii++;
                               }


  	 $tips_val_array =  array(
								$i++        => 'Sugest�o: Volte! | Quando voc� cria um link externo, atribuir-lhe um alvo "em branco", para que seus visitantes retornam mais facilmente! ',
								$i++        => 'Dica: O modo auto | No modo autom�tico, o "target" definido para aprovar automaticamente se voc� criar um link interno ou externo. ',
								$i++        => 'Dica: direito no alvo! | A meta "blank" abre o link em uma nova p�gina. Utiliz�-lo se quiser que seus visitantes a encontrar mais facilmente o seu caminho. ',
								$i++        => 'Dica: Fique conosco! | A meta "self" abre o link na mesma p�gina. O modo de navega��o ideal para ficar dentro do site. ',
								$i++        => 'Dica: Crie os seus pr�prios modelos! | ... Em seguida, arraste-os no "templates/include/", ponha o m�dulo de dias, e depois ativar o novo modelo nas prefer�ncias do m�dulo. ',
								$i++        => 'Dica: Use a cache! | Especialmente se o seu n�o uso Menus de links din�micos (consultas, links, grupos de acesso), otimizar o tempo de acesso ativando o cache blocos. ',
								$i++        => 'Dica: CSS | As folhas de estilo permitem-lhe personalizar a exibi��o de links e/ou menus. Para mais informa��es visite <a href="http://www.w3.org/Style/CSS/" target="_blank"> W3C </ a>. ',
								$i++        => 'Dica: Ocultar menu | Um menu escondido n�o aparecer� no �ndice de p�ginas do m�dulo. Mas tamb�m � ativa acess�veis e um menu \'on\'.',
								$i++        => 'Dica: Modelos id�nticos | Os modelos dos �ndice p�ginas e blocos s�o id�nticos. Chipote precisa de mais dois lugares para mud�-los.',
								$i++        => 'Dica: Tab imagem | O gerenciador de imagens que voc� pode gerenciar seus links e ilustra��es de seus menus. Padronizar o formato em alguns cliques ...',
								$i++        => 'Dica: Guia modelo | O modelo gerente permite facilmente editar templates, folhas de estilo e scripts menus.',
								$i++        => 'Dica: Aba pedido | O gerente pode gerar pedidos listas dinamicamente a partir de link no site banco de dados. Escolha a tabela que voc� deseja e clique <b> [-][[ BD] Tabela] </ b> para saber mais sobre o assunto. ',
								$i++        => 'Sugest�o: Excluir | Quando elimina um menu, voc� remove todos os links apensa juntamente com ele! ',
								$i++        => 'Dica: Auto-corre��o | Quando voc� inserir um link com o nome de dom�nio do seu site, Multimenu reescrever endere�o automaticamente a ser um link interno. ',
								$i++        => 'Dica: Imagens | Use apenas imagens formato. Jpg,. Jpeg,. Gif ou. Png. Os outros s�o os formatos de imagem inaceit�vel na web. ',
								$i++        => 'Dica: Imagens | Aten��o �s imagens demasiado grandes! V� at� o gerenciador de redimensionar as imagens no formato certo na mosca. ',
								$i++        => 'Sugest�o: Fa�am suas apostas! | Fa�a um tour pelas prefer�ncias do m�dulo. Definir par�metros de acordo com a sua escolha, e l� tocar. ',
								$i++        => 'Dica: Tenha "rob� simp�tico". | Usar textos alternativos (pontas), em seus links e colocar suas pr�prias palavras-chave. ',
								$i++        => 'Dica: Permalink | Um link permanente ser� exibido em qualquer circunst�ncia ... se � apenas dar-lhe permiss�o. ',
								$i++        => 'Sugest�o: Link sobre | Um parente link s� aparece quando o m�dulo indicado no v�nculo � o m�dulo principal da p�gina atual. ',
								$i++        => 'Dica: Permiss�es | Grupos permitem-lhe definir quem tem acesso ao que menu e / ou aquilo conex�o. Ser coerentes na sua escolha! ',
								$i++        => 'Dica: Necessidade extra blocos | De prefer�ncia geral m�dulo, especificar o n�mero exato para voc� e para colocar seu m�dulo dia! ',
								$i++        => 'Dica: Necessidade de clonar o m�dulo | V� ver <a href="index.php?admin=utils"> "utilit�ria" </ a>, e duplicar o seu m�dulo em dois cliques do mouse. ',
								$i++        => 'Dica: Pedido | Para criar uma nova consulta no banco de dados, voc� inalar consultas fornecidas por omiss�o. ',
								$i++        => 'Dica: Fa�a com que o (id). | Seja para consultas, scripts ou folhas de estilo, a tag (id) � referenciado para o menu actual. ',
								$i++        => 'Dica: Clonagem | � poss�vel clonar um m�dulo com todas as suas liga��es com um �nico clique. N�o se esque�a de alterar o t�tulo! ',
								$i++        => 'Dica: A imagem remoto ou local? | Prefira imagens armazenadas no seu servidor. Estes s�o os �nicos sobre os quais voc� tem um controle total! ',
								$i++        => 'Dica: A imagem remota | A imagem remota tamb�m pode ser hospedada em seu site. Mas aten��o � pequena cruz vermelha quando se trata de mudar o nome, mover ou excluir! ',
								$i++        => 'Dica: A imagem local | As imagens s�o locais em seu pr�prio servidor. Voc� tamb�m pode usar a imagem redimenssionner gestor do m�dulo. ',
								$i++        => 'Dica: Fa�a o navega��o! | Experimente a respeitar a "regra dos 3 cliques" que afirma que qualquer informa��o deve ser acess�vel em menos de 3 cliques ',
								$i++        => 'Dica: Fa�a a navega��o! | A lista de itens de prefer�ncia deve conter menos de 7 elementos. Evite menus "muito tempo". ',
								$i++        => 'Dica: Optimize suas imagens! | Foi m�xima deve otimizar o tamanho da imagem, escolha um formato e n�mero de cores t�o pequena quanto poss�vel. Recomenda-se a n�o ultrapassarem 30 a 40 kb por imagem ',
								$i++        => 'Dica: Ao projetar o menu principal! | A qualquer momento visitante deve ser capaz de localizar o site (e encontrar a p�gina inicial). ',
								$i++        => 'Sugest�o: Padronizar o seu menu! | Os elementos de navega��o devem estar localizadas no mesmo lugar em todas as p�ginas, se poss�vel com um uniforme de uma p�gina para outra. ',
								$i++        => 'Dica: Boa t�tulos! | Criar la�os favorecendo o texto, lido para limpar, sem "adivinhar" ou mensagens ocultas, com um padr�o. ',
								$i++        => 'Dica: Mapa do Site! | Fornecer pistas para toda a informa��o dispon�vel na p�gina inicial ',
								$i++        => 'Dica: V� ao essencial! | As liga��es mais importantes devem ser altamente desenvolvidas (Loja para uma loja local, sobre o novo site, etc.) Mas ele n�o exige a p�gina Home � muito mais rica. ',
								$i++        => 'Dica: Evite textos imagem! | O texto em imagens, mesmo que ele permite um melhor controlo da apresenta��o n�o s� � inaceit�vel em termos de tempo, mas tamb�m para os motores de busca. ',
								$i++        => 'Dica: "Mantenha-o simples!" | O sistema de navega��o dever� ser simples e intuitiva. Nem � preciso oferecer todos os links na p�gina inicial. Uma barra de navega��o para as principais posi��es suficiente (que n�o, por�m, de propor uma forma r�pida, por exemplo, no menu drop-down em JavaScript). ',
								$i++        => 'Dica: Dois s�o melhores do que uma! | Multiply alternativas de sistemas de navega��o (Ex: uma barra de menu gr�fico forma, com efeitos "rollovers" simples, uma barra de navega��o texto, etc) Desde que estes sistemas s�o bem visualmente distintas. N�o agrup�-los todos em um lugar e tendo em conta a organizar o itiner�rio da Internet. ',
								$i++        => 'Dica: HELP! | Clique no link "[+][ Ajuda] "para exibir a ajuda on-line nas formas de publica��o. ',
								$i++        => 'Dica: Vire-me! | N�o h� necessidade de volumosos essas dicas? Desabilite <a href="index.php?admin=settings&sub=edit"> m�dulo prefer�ncias </ a>. ',
								$i++        => 'Dica: Fa�a a sua escolha! | Escolha o seu favorito templates e desativar outros <a href="index.php?admin=settings&sub=item"> m�dulo prefer�ncias </ a>. ',
								$i++        => 'Dica: Veja o c�digo | Quando voc� criar ou modificar um modelo, ver o c�digo gerado diretamente por ativadoras <b> Vire sobre o "modelo Editon" </ b> na <a href = "index.php? Admin Configura��es = & sub = �ndice "> prefer�ncias m�dulo </ a>. ',
								$i++        => 'Dica: Tome o caminho certo | Ao criar um menu, voc� pode determinar o diret�rio para armazenar imagens. Verifique se ele est� aberto para escrever! ',
								$i++        => 'Sugest�o: Mudan�a de Endere�o | Quando voc� move um link com uma imagem de uma tela para outra, certifique-se que a nova se��o do menu oferece a imagem. ',
								$i++        => 'Dica: Cada menu repert�rio | Ao criar um novo menu, adicione ao seu pr�prio diret�rio de armazenamento (criado automaticamente pelo m�dulo) para evitar novos conflitos. ',
								$i++        => 'Sugest�o: No menu bloco | Escolha o bloco ir� mostrar o seu menu em <a href="index.php?admin=blocks"> blocos guia </ a> e utiliz�-lo para verificar as configura��es Grupos do m�dulo. " '
                                  );

 	$info_val_array =  array( 
							$i++        => 'Voc� sabia? | Multimenu O original foi uma vers�o melhorada do imenu, desenvolvido por outra belga Linthuin. ',
							$i++        => 'Voc� sabia? | Na vers�o 1, sabe-Multimenu mais de 9 vers�es. A �ltima a ser de 1,9. ',
							$i++        => 'Voc� sabia? | Para a maioria das pessoas que contribuiu para a realiza��o dos m�dulos n�o s�o profissionais desenvolvedores! ',
							$i++        => 'Voc� sabia? | Multimenu foi desenvolvido com o software editor <a href="http://www.contexteditor.org/" target="_blank"> CONTEXTO </ a>. ',
							$i++        => 'Voc� sabia? | Em sua primeira vers�o, est� escrito Multimenu "Multimenu." A M ficou reduzida a min�sculas para facilitar a clonagem do m�dulo. Sobre a tela, ela faz toda a diferen�a! ',
							$i++        => 'Voc� sabia? | O n�mero de horas dedicadas ao desenvolvimento deste m�dulo � incalcul�vel. Desde suas primeiras vers�es, milhares de horas foram gastas ... ',
							$i++        => 'Voc� sabia? | Ao sair do Multimenu 1,8, mais de 600 postos foram publicadas sobre ele nos f�runs e www.frxoops.org www.xoops.org. ',
							$i++        => 'Voc� sabia? | Os desenvolvedores que t�m contribu�do para Multimenu n�o acertar um �nico franco. Isso � open source! ',
							$i++        => 'Voc� sabia? | Multimenu foi desenvolvido para XOOPS 2.x s�. N�o foram semelhantes em outras m�dulo CMS. ',
							$i++        => 'Voc� sabia? | Multimenu desenvolvedores s�o na sua maioria franceses e membros activos da <a href="http://www.frxoops.org" target="_blank"> FRXoops </ a>. ',
							$i++        => 'Sabia? | Lei de Murphy: emp�rica princ�pio afirmando que, se existe a possibilidade de in�pcia de um produto ou m�todo que algu�m ir� atualizar esse erro. Esta lei presidiu � conclus�o deste m�dulo, mas os recursos continuam impenetr�veis Murphy. ;-) " '                                  );

if(!isset($only_data)) {
        $item_val_array = $info_val_array + $settings_val_array + $tips_val_array;
        $tips_count = count($item_val_array);

// Render defines
        $i=1;
 	foreach ($item_val_array as $item_lg=>$item_val) {
                 define(strtoupper('_TI_MULTIMENU_'.$item_lg),$item_val);
	}
}
?>
