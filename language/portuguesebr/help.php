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

 	$help_val_array =  array( 
'menuopth'        => '<h3>Op��es de menus</h3>
         Aqui est�o alguns complement�rio op��es sobre os menus.<ul>
         <li><b>Manual do tradicional imagem :</b> Determinar o repert�rio em que ser�o armazenadas as imagens du menu.</li>
         <li><b>Template :</b> Determinar o estilo do menu (modelo) que ser�o aplicados por falha deste menu.</li>
         <li><b>Grupos :</b> Determinar quais grupos dos usu�rios t�m acesso a este menu.</li>
         </ul>
         ',
         
'menucssh'        => '<h3>Estilo de menus</h3>
         Voc� pode atribuir um estilo espec�ficas de cada menu.
         A informa��o indicada ser� reflectido em uma folha que aparecem no estilo o c�digo fonte da p�gina. 
		 Por esse motivo dever� escrever a sua defini��o de um estilo folha normal. 
		 A etiqueta {Id} especificar�o exatamente em que categoria ou Id, as altera��es s�o aplic�veis e permitir assim n�o interferir com outro menu.

         <b><u>Exemplo</u> :</b>
         <div style="border:1px Inset Black; padding:12px; margin:12px; width:360px; background:LightGrey;">#multimenu_{id} { 
   border: 2px Outset Red;
            }
#multimenu_{id} a { 
   color:Red;
   }
#multimenu_{id} a:hover { 
   color:Green;
   }</div>

         Nota que o estilo ser�o aplicados �s liga��es de todos os menu.
         
         As defini��es prioridade sobre qualquer defini��o declarado anteriormente (tema do local, o m�dulo de estilo folha ou do modelo no curso,...)
         ',

'linkopth'        => '<h3>Op��es de liga��es</h3>
         Aqui est�o algumas op��es sobre as links.<ul>
         <li><b>Texto alternativo :</b> Acrescentar texto descritivo que venha completar os dados relativos � liga��o. Nota que este aspecto � importante para uma melhor referenciante de sua p�ginas, assim como acessibilidade de pessoas n�o vistoso.</li>
         <li><b>Pergunta :</b> Determina o que perguntar (Para gerar automaticamente uma lista de ligac�es) Atribuir a essa liga��o. 3 Casos de figura :
         <ol><li><b>O principal link com url</b> : Mostra o principal link com todas as liga��es do pedido de sub-link.</li>
         <li><b>O principal link sem url</b> : Mascarar o principal link e apresenta todas as liga��es do pedido de oprincipal link.</li>
         <li><b>Link secund�rio com url</b> : Apresenta o link principal e todas as liga��es do pedido de liga��o secund�ria.</li>
         <li><b>Link secund�rio sem url</b> : Mascarar o link principal e apresenta todos os links dos pedido de liga��o secund�ria.</li></ol></li>
         <li><b>Menus :</b> selecionar qual menu ser� afetado o link.
         Aten��o, Mudar uma sub-link do menu necessita reatribuir o link principal !
         Aten��o, Se uma imagem � atribu�do um link e o manual de armazenagem n�o � o mesmo para o novo menu, atribuir uma nova imagem.</li>
         <li><b>Tipo :</b> 2 tipos de links possivel :<ol>
         <li><b>permanente </b> : o link mostra como permanentemente.</li>
         <li><b>relative</b> : o link n�o vai mostrar que se endere�o do link principal corresponde ao m�dulo em curso.</li></ol></li>
         <li><b>Alvo :</b> 3 Tipos de alvo :<ol>
         <li><b>Auto</b> : O m�dulo detectar se a melhor configura��o segundo endere�o (URL) utilizados.</li>
         <li><b>Self</b> : O link ter� in�cio na mesma p�gina. Ideal para os links apontando para p�ginas <u>internas</u> do site.</li>
         <li><b>Blank</b> : O link ser� aberto em uma nova p�gina. Ideal para os links a p�ginas  <u>externas</u> do site.</li></ol></li>
         <li><b>Groupes :</b> Determine quais grupos utilizadores ter�o acesso ao link.</li>
         </ul>
         ',
         
'linkcssh'        => '<h3>Estilo de links</h3>
         Voc� pode atribuir um estilo espec�fico para cada link. 
          As informa��es dadas aqui ser� refletido em <i>style=""</i> 
          Voc� deve escrever sua defini��o como em uma folha de estilo, e n�o indicam classe ou id.

         <b><u>Exemplo</u> :</b>
         <div style="border:1px Inset Black; padding:12px; margin:12px; width:360px; background:LightGrey;">color:Red; font-weight:bold; border: 1px plain Red;</div>
         
         Note que o estilo ser� aplicado a liga��o no admin lista de links para ajud�-lo a apresentar os resultados. 
         
          As defini��es dadas para cada liga��o ser� elevado em qualquer defini��o anteriormente declarados (tema do site ou de estilo m�dulo atual menu ,...) 
          Se o estilo n�o, certifique-se que o modelo menu ativou inclui com o seguinte c�digo <input style="border:1px Inset Black; background:LightGrey;" value=\'<{if $item.css}>style="<{$item.css}>"<{/if}>\' size="45" /> na defini��o da rela��o.
         
         <b><u>Exemplo</u> :</b>
         <textarea style="border:1px Inset Black; padding:12px; margin:12px; width:360px; background:LightGrey;"><a href="<{$item.link}>" <{if $item.css}>style="<{$item.css}>"<{/if}> > <{$item.title}> </a></textarea>
         ',
         
'query'        => '<h3>Consultas</h3>
         Voc� pode criar uma lista de links de dados armazenados no banco de dados, a partir de qualquer m�dulo. 
         
          Depois que selecionados na tabela, voc� pode visualizar o conte�do, abrindo o painel <b> "[+][[BD] Tabela] "</b>. 
          A tabela mostra a composi��o da tabela selecionada. 
          Para ajud�-lo na configura��es de sua mesa far� uma colorida sele��o de dados que lhe interessam:
         <ul>
         <li style="color:Red;"><b>Em vermelho :</b> ID-chave</li>
         <li style="color:Green;"><b>Em verde :</b> indiv�duos (campos para gerar os t�tulos dos links)</li>
         <li style="color:Blue;"><b>Em azul :</b> o conte�do (campos para gerar alternativas tags)</li>
         <li style="color:Orange;"><b>Em laraja :</b> imagens (campos para gerar imagens miniatura ou links)</li>
         </ul>Uma vez analisado o quadro assim, voc� pode criar a consulta que ir� gerar uma lista de relacionamento que voc� deseja. 2 etapas:
         <ul>
         <li><b><u>Etapa 1</u> : O essencial</b>
         <ol>
         <li><b>T�tulo :</b> indicar um t�tulo significativo. Desta forma, voc� ir� encontrar facilmente a aplica��o que pretende gerar seus links.</li>
         <li><b>[BD] Tabela :</b> Nome da tabela selecionada.</li>
         <li><b>[BD] Identifica��o do campo :</b> Campo de identifica��o. Esta vari�vel ser� na operadores do link.</li>
         <li><b>[BD] Campo t�pico :</b> Campo contendo o nome ou t�tulo do link.</li>
         <li><b>Endere�o do links :</b> URL utilizado para a gera��o de links. 
          Para encontrar a URL correta, selecionar e copiar a URL de uma p�gina do m�dulo em causa. Substitua o id da tag url <b>{id}</b>. </li>
         </ol>
         </li><li><b><u>Etapa 2</u> : op��es</b>
         <ol>
         <li><b>[BD] Alternando campo :</b> Campo contendo informa��es como alternativa para exibir texto.</li>
         <li><b>[BD] Image campo :</b> Campo contendo a imagem para criar um link para este link. S� se o m�dulo oferece uma imagem para cada entrada.</li>
         <li><b>Diret�rio armazenamento imagens. :</b> Usada somente se o <b>[BD] Image campo </b> foi preenchido. Digite o endere�o da imagem m�dulo de armazenamento (se necess�rio). .</li>
         <li><b>[BD] Condi��es :</b> Corresponde a cl�usula <b>WHERE</b> uma consulta.
          As liga��es de qualquer tipo de condi��o ligada a um campo na tabela selecionada. 
          V�rias condi��es podem ser separados por <b>AND</b> e/ou <b>OR</b>. 
          A tag <b>{data}</b> e <b>{uid}</b> pode ser utilizado para inserir a din�mica dos valores a data ou o usu�rio atual. 
         (Exemplo : to_userid={uid} AND read_msg=0)</li>
         <li><b>[BD] Ordem exibi��o de dados:</b> Corresponde a cl�usula <b>ORDER BY</b>uma consulta. 
         Utilizado para especificar a ordem pela qual pretende visualizar a lista de links. 
         Indicar um ou mais campos da tabela selecionada Acompanhamento <b>ASC</b> ou <b>DESC</b> e separadas por uma v�rgula.
         (Exemplo : from_userid ASC, msg_time DESC ).</li>
         <li><b>O n�mero m�ximo de links a apresentar:</b> Digite o n�mero m�ximo de links para mostrar a essa consulta.</li>
         </ol>
         </li>
         </ul>
         ',

'image'        => '<h3>Gerenciar Imagem</h3>
         Aqui voc� pode gerenciar as images/vignettes/logos  usados para decorar a sua lista de links. 
          Cada menu pode ter a sua pr�pria lista de imagens na sua pr�pria se��o. 

          Alguns recursos permitem a voc� padronizar a apar�ncia de vinhetas <u>embora preservando a imagem original </u>! 
          Cada imagem � guardada alterada antes de ser capaz de restaurar as suas propriedades (tamanho, cor, tamanho) de origem.
         
         <b>Descri��es de op��es dispon�vel :</b>
         <ol>
         <li><b>Generador Thumbnail:</b> Selecione o tipo de altera��es que deseja fazer o seu miniaturas.
         <table width="100%"><tr>
         <td align="center"><img src="../images/sample/flag_normal.jpg" />
         Normal</td><td align="center"><img src="../images/sample/flag_rounded.jpg" />
         Borda arredondada</td><td align="center"><img src="../images/sample/flag_b-w.jpg" />
         Preto e branco</td><td align="center"><img src="../images/sample/flag_shadow.jpg" />
         Sombreado</td><td align="center"><img src="../images/sample/flag_deg.jpg" />
         Degrade</td><td align="center"><img src="../images/sample/flag_text.jpg" />
         Texto</td></tr></table>
         </li>
         <li><b>Texto :</b> Texto para exibir o modo de  <b>texto</b>.</li>
         <li><b>Largura :</b> Largura absoluta da imagem. Opcional.</li>
         <li><b>Altura :</b> Altura absoluta da imagem. Opcional.</li>
         <li><b>Cor de fundo:</b> Cor de fundo para criar a miniatura modo <b>borda arredondamento</b>, <b>Sombreado</b> e <b>Degrade</b>.</li></ol>
         ',

'css'        => '<h3>Folha de estilo ligada ao modelo</h3>
         Voc� pode atribuir uma folha de estilo modelo para cada menu. 
          Estas folhas de estilo pode ser: <ul>
         <li>pr�-existentes e ligadas ao modelo.</li>
         <li>inexistente e criada por voc�. Ele ser� automaticamente ligada ao modelo e editados e atribu�dos a todos os menus que ir� utiliz�-lo.</li></ul>

         Tal como as folhas de estilo menus, a tag {id} vai distinguir automaticamente uma caracter�stica relacionada com um menu espec�fico.
         Exemplo :<div style="border:1px Inset Black; padding:12px; margin:12px; width:360px; background:LightGrey;">/* Sub links */
          #dropmenudiv_{id} {
            position:absolute;
            margin-left:10px;
            margin-top:-1px;
            border: 1px outset black;
            }
            </div>
         ',

'script'        => '<h3>Script Java</h3>
          Alguns modelos menu utilize um java script. 
          Algumas vezes, dependem de script par�metros passados em vari�veis. 
          Voc� pode editar esse script ou Vari�veis nesta janela.
         ',

'tpl'        => '<h3>Templates de menu</h3>
         Os templates menu � o c�digo html e Smarty usado para gerar menus. 
          Os modelos dispon�veis s�o os propostos no gerenciador de templates XOOPS. 
          Apenas modelos criados usando um conjunto de modelos personalizados est�o dispon�veis. 
          Se a janela de edi��o aparece desactivado, � que ela n�o pode ser mudado para um dos seguintes motivos:
         <ul><li>n�o existe um conjunto de modelos personalizados ;</li>
         <li>Definir modelo personalizado n�o foi atualizado.</li></ul>
         '
                                  );



//        $item_val_array = $info_val_array + $tips_val_array;
//        $tips_count = count($item_val_array);

// Render defines
 	foreach ($help_val_array as $item_lg=>$item_val) {
                 define(strtoupper('_HLP_MULTIMENU_'.$item_lg),$item_val);
	}
?>