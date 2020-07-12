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

 $main_val_array['introduction']  =  array( ''      => 'Este m�dulo pode gerar v�nculo listas ou menus manualmente ou automaticamente.

Aqui est�o os modelos vari�veis dispon�veis para seus modelos personalizados.

2 tipos de vari�veis : <ul>
<li><b>Vari�veis fixos</b>
<i>Essas vari�veis s�o na sua maioria definida por padr�o, ou prefer�ncias do m�dulo.</i>
</li>
<li><b>Vari�veis din�micas </b>
<i>Estas vari�veis s�o definidas pelo conte�do de cada menu, ou p�ginas criadas pelo usu�rio. 
Eles s�o v�lidos para ambas as p�ginas de conte�do de blocos do m�dulo.</i></li>
</ul>' );

 $main_val_array['language_define'] =  array(
                                  '<{$index}>'        => 'Index',
                                  '<{$other}>'        => 'Outro',
                                  '<{$sourcecode}>'   => 'C�digo Fonte '
                                   );


 $main_val_array['fixes_item'] =  array(
                                  '<{$id}>'            => '[MENU] menu ID.|1',
                                  '<{$menu}>'          => '[MENU] menu ID.|1',
                                  '<{$css_link}>'      => '[MENU] URL do menu atual .CSS arquivo (se houver).|http:&#47;&#47;[..]/multimenu_my_menu.css',
                                  '<{$script_link}>'   => '[MENU] URL do menu atual .JS  arquivo (se houver)..|http:&#47;&#47;[..]/multimenu_my_menu.js',
                                  '<{$status}>'        => '[MENU] Status atual menu (0 : Deconectado, 1 : Conectado, 2 : Oculto).|1',
                                  '<{$title}>'         => '[MENU] T�tulo do menu atual.|Usu�rio menu',
                                  '<{$css}>'           => '[MENU] Folha de estilos defini��es de menu atual.|multimenu_1 {color:Red;}',
                                  '<{$description}>'   => '[MENU] Descri��o menu atual texto.|Aqui est� o menu do usu�rio.',

                                  '<{$banner_url}>'    => '[PREF] URL dos m�dulos banners.|http:&#47;&#47;[..]/banner.gif',
                                  '<{$background}>'    => '[PREF] URL dos m�dulos fundo foto.|http:&#47;&#47;[..]/background_image.gif',
                                  '<{$image_width}>'   => '[PREF] Imagens padr�o largura.|160',
                                  '<{$image_height}>'  => '[PREF] Imagens padr�o de altura..|160',
                                  '<{$edit_mode}>'     => '[PREF] Ativar o "Editar" modo (exibi��o de menu atual c�digo fonte na parte inferior da p�gina).|1',
                                  '<{$cols}>'          => '[PREF] N�mero de colunas.|3',
                                  '<{$duration}>'      => '[PREF] Dura��o de uma anima��o em milissegundos.|1000',
                                  '<{$transition}>'    => '[PREF] Transi��o de uma anima��o em milissegundos.|1000',
                                  '<{$item_list}>'     => '[PREF] Mostrar menus dispon�veis.|1',
                                  '<{$item}>'          => '[PREF] Default item nomes usados em p�ginas.|Menus',
                                  '<{$item_display_selectmode}>'   => '[PREF] Modo de exibi��o de todos os modelos dispon�veis.|select.html',

                                  '<{$ii}>'            => 'Total de links no menu atual.|10',
                                  '<{$i}>'             => 'Total de liga��es por coluna (n�mero arredondado).|5',
                                  '<{$i_main}>'        => 'Total principal-links (sem qualquer sublinks) por colunas (n�mero arredondado).|3',
                                  '<{$mode}>'          => 'A p�gina atual do modelo (ou conjunto de configura��es padr�o no m�dulo).|include/multimenu_ul.html',
                                  '<{$module}>'        => 'M�dulo do diret�rio (ie : multimenu)|multimenu',
                                  '<{$banner}>'        => 'M�dulo do banner no c�digo HTML.|&lt;img src="http:&#47;&#47;[..]/banner.gif" /&gt;',
                                  '<{$admin}>'         => 'M�dulo admin links.|',
                                  '<{$data_list}>'     => 'Dados da lista gerada pelo menu atual. Encontre vari�veis lista abaixo.|Array'
                                   );


 $main_val_array['variables_item'] =  array(
                                  '<{item.id}>'          => 'Link ID.|2',
                                  '<{$item.pid}>'        => 'Link m�e ID (link principal).|1',
                                  '<{$item.catid}>'      => 'Atual menu ID.|1',
                                  '<{$item.type}>'       => 'Tipo de link (permanente ou relativa).|permanent',
                                  '<{$item.status}>'     => 'Link status (0 : desconectado ou 1 : conectado).|1',
                                  '<{$item.weight}>'     => 'Link peso.|100',

                                  '<{$item.title}>'      => 'Link t�tulo.|Home',
                                  '<{$item.title|addslashes}>'=>'Protegido link t�tulo (c�digos de javascript).|Home\\\'s',
                                  '<{$item.alt_title}>'  => 'Alternativa baliza (ou dica).|Este website home page',
                                  
                                  '<{$item.image}>'     => 'Url de imagem predefinido. Distantes imagem est� hospedada Priore a foto.|http:&#47;&#47;[..]/image.gif',
                                  '<{$item.image_a}>'   => 'Distante url da imagem.|http:&#47;&#47;[..]/image.gif',
                                  '<{$item.image_b}>'   => 'Hospedado url da imagem.|http:&#47;&#47;[..]/image_b.gif',

                                  '<{$item.query}>'      => 'Atual link consulta (se houver).|news',
                                  '<{$item.target}>'     => 'Link\'s alvo (target = "_blank" ou c�digo popgen se link aponte para uma foto).|_blank',
                                  '<{$item.css}>'        => 'CSS defini��es (sem classe, Nore ID).|color:Red;',
                                  '<{$item.link_status}>'=> 'Link tipo (topo, link or sublink).|link',
                                  '<{$item.num}>'        => 'Link n�mero de ordem.|1',
                                  '<{$item.num_main}>'   => 'Link principal n�mero de ordem.|1'
                                 );

$main_val_array['author word'] =  array( ''      => 'Para ativar o seu modelo personalizado :
 1. Copie o seu modelo personalizado no diret�rio "templates/include/" ;
 2. atualize o m�dulo ;
 3. ativar o modelo personalizado no m�dulo configura��es.' );

?>