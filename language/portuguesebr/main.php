<?php
/**
* XOOPS - PHP Content Management System
* Copyright (c) 2001 - 2008 <http://www.xoops.org/>
*
* Module: multiMenu 2.x
* Licence : GPL
* Authors :
*           - solo (http://www.wolfpackclan.com/wolfactory)
*/

// Common values
$main_val_array =  array(    'index'        => 'Index',
  	                         'admin'        => 'Admin',
  	                         'admins'       => 'Admin',
  	                         'sitemap'      => 'Sitemap',
  	                         'n'            => 'N�',
  	                         'image'        => 'Imagem',
  	                         'title'        => 'Titulo',
  	                         'close'        => 'Fechar',
  	                         'item'         => 'Item',
  	                         'description'  => 'Descri��o',
  	                         'source_code'  => 'C�digo Fonte',
  	                         'edit'         => 'Editar',
  	                         'clone'        => 'Duplicar',
  	                         'alt_title'    => 'Aviso-Mouse',
  	                         'other'        => 'Outro ',
  	                         'menu'         => 'Menus',
  	                         'images'       => 'Imagens',
  	                         'templates'    => 'Modelos',
  	                         'blocks'       => 'Blocos',
  	                         'settings'     => 'Defini��es',
  	                         'utils'        => 'Utilit�rios',
  	                         'delete'       => 'Excluir',
  	                         'query'        => 'Query',
  	                         'link'         => 'Link',
  	                         'block'        => 'Bloco',
  	                         'template'     => 'Modelo',
  	                         'help'         => 'Ajuda',
  	                         'notactive'    => 'Esta p�gina n�o est� activa.'
                        );
                                 
// Settings values
$sett_val_array =  array( 
						  'thumb'                  => 'Thumb cor',
						  'button'                 => 'Admin links',
						  'meta'                   => 'Meta',
						  'num'                    => 'N�mero',
						  'name'                   => 'Itens nome',
						  'slideshow'              => 'Apresenta��o de slides',
						  'max_size'               => 'Tamanho m�ximo',
						  'keywords'               => 'Palavras-chave',
						  'count'                  => 'N�mero',
						  'title_lenght'           => 'T�tulo do comprimento m�ximo',
						  'display_selectmode'     => 'Mostrar modelos dispon�veis',
						  'banner'                 => 'Banner',
						  'background'             => 'Imagem de fundo',
						  'activation'             => 'Active p�ginas',
						  'desc'                   => 'P�gina �ndice texto',
						  'display'                => 'Informa��es exibida',
						  'cols'                   => 'Colunas',
						  'list'                   => 'P�ginas lista',
						  'perpage'                => 'Itens por p�gina',
						  'thumbmw'                => 'Thumbs tamanhos',
						  'thumb_color'            => 'Thumbs cor',
						  'infobulle'              => 'Ferramenta de dicas',
						  'lenght'                 => 'M�ximo tamanho do t�tulo',
						  'imagemw'                => 'M�ximo tamanho de thumb',
						  'main'                   => 'Home page',
						  'template'               => 'Modelo',
						  'mode'                   => 'Modelo',
						  'dispsm'                 => 'Mostrar modelos dispon�veis',
						  'edit_mode'              => 'Modo de edi��o',
						  'selectmode'             => 'Modelos dispon�veis',
						  'item_name'              => 'Itens nome',
						  'metakeyword'            => 'Meta palavras-chave',
						  'metadesc'               => 'Meta Descri��o',
						  'dir'                    => 'Arquivo padr�o diret�rio',
						  'tip'                    => 'Dicas',
						  'buttons'                => 'Admin links',
						  'urw'                    => 'URL Reescrever',
						  'ss'                     => 'Apresenta��o de slides'
						);


                                 
// Render defines

        $item_val_array = array_merge( $main_val_array,
                                       $sett_val_array );

 	foreach ($item_val_array as $item_lg=>$item_val) {
                 define(strtoupper('_MULTIMENU_'.$item_lg),$item_val);
	}

?>