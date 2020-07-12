<?php
//  ------------------------------------------------------------------------ 	//
//                XOOPS - PHP Content Management System    				//
//                    Copyright (c) 2004 XOOPS.org                       	//
//                       <http://www.xoops.org/>                              //
//                   										//
//                  Authors :									//
//						- solo (www.wolfpackclan.com)         	//
//                  Multimenu v1.0								//
//  ------------------------------------------------------------------------ 	//

// Common values
 	$com_val_array =  array( 'option'     => 'Op��es',
  	                         'settings'   => 'Defini��es',
  	                         'item'       => 'Item',

  	                         'admin'      => 'Admin',
  	                         'edit'       => 'Editar',
  	                         'clone'      => 'Duplicatar'
                            );

// This block menu values
 	$block_val_array =  array( 'tpl'             => 'Template',
  	                           'tpldsc'          => 'Modo de exibi��o.',
  	                           'ul'              => 'lista desordenada',
  	                           'menu'            => 'XOOPS menu principal',
  	                           'image'           => 'Imagem',
  	                           'extended'        => 'Extens�o',
                                                          
        	                   'display'         => 'Exibir',
        	                   'displaydsc'      => 'Informa��es para exibir',
        	                   'title'           => 'Titulo',
        	                   'logo'            => 'Logo',
                                                          
  	                           'status'          => 'Estatuto',
  	                           'statusdsc'       => 'Exibido p�ginas estatuto.',
  	                           'online'          => 'Conectado',
  	                           'hidden'          => 'Oculto',
  	                           'offline'         => 'Desconectado',
                                                          
  	                           'description'     => 'Descri��o',
  	                           'descriptiondsc'  => 'Descri��o texto a ser exibido no bloco.',
                                                          
  	                           'max'             => 'M�xima',
  	                           'maxdsc'          => 'M�ximo de links para exibir.<br />
                                                     Aviso: esta fun��o desactivar todas sublinks exceto query sublinks !',
                                                          
                                                    
                               'order'           => 'Ordenar por',
                               'orderdsc'        => 'Aviso: mainlinks e sublinks seria misturado.',
                               'weight'          => 'Peso',
  	                           'titleasc'        => 'Ordem alfab�tica',
                               'titledesc'       => 'Inverteu ordem alfab�tica',
                                                                                             
                                                          
  	                           'relative'        => 'Mostre link parentes',
                                                          
  	                           'cols'            => 'Colunas',
  	                           'colsdsc'         => 'N�mero de colunas.',
                                                          
  	                           'maxwidth'        => 'Tamanhos de Thumbs',
  	                           'maxwidthdsc'     => 'Definir o tamanho da foto.<br />
                                                     (W-H).',
                               'pix'             => 'pixels',
                                                          
  	                           'maxtitle'        => 'T�tulo comprimento',
  	                           'maxtitledsc'     => 'Definir m�ximo comprimento do caracteres do t�tulo do link.',
                               'char'            => 'caracteres'
                              );
                                 
// This item values
 	$block_item_array =  array('link'            => 'Links',
 	                           'random'          => 'Aleat�rio',
 	                           'latest'          => '�ltimas',
 	                           'popular'         => 'Populares',
 	                           'slideshow'       => 'Apresenta��o de slides',
 	                           'select'          => 'Menu',
 	                           'selectdsc'       => 'Definir qual menu para exibir.',
 	                           'list'            => 'Menus lista',
 	                           'all'             => '[TODOS]',
 	                           'alt_title'       => 'Aviso-Mouse'
                              );

// Render defines
        $item_val_array = array_merge( $com_val_array,
                                       $block_val_array,
                                       $block_item_array
                                      );

 	foreach ($item_val_array as $item_lg=>$item_val) {
                 define(strtoupper('_MB_MULTIMENU_'.$item_lg),$item_val);
	}
?>