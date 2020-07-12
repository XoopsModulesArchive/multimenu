<?php
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System    		             //
//                    Copyright (c) 2004 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//                   						                                 //
//                  Authors :						                         //
//						- solo (www.wolfpackclan.com)                        //
//                  Multimenu v1.0						                     //
//  ------------------------------------------------------------------------ //

// Common values
 	$com_val_array =  array( 'name'          => 'Multimenu',
  	                         'dsc'           => 'Menu e navega��o que administram m�dulo',
  	                         'clone'         => 'Duplicata',
  	                         'submit'        => 'Enviar',
  	                         'menu'          => 'Menu',
  	                         'link'          => 'Link',
  	                         'query'         => 'Query',
  	                         'block'         => 'Blocos',
  	                         'utils'         => 'Utilidades',
  	                         
  	                         'index'         => 'Index',
  	                         'sitemap'       => 'Sitemap',
  	                         'edit'          => 'Editar',
  	                         'help'          => 'Ajuda',
  	                         'settings'      => 'Configura��es',
  	                         'item'          => 'Item',
  	                         'meta'          => 'Meta',
  	                         'slideshow'     => 'Apresenta��o de slides',
  	                         
  	                         'indexdsc'      => 'M�dulo index p�ginas configura��es (lado de Usu�rio).',
  	                         'editdsc'       => 'M�dulo edi��o p�ginas configura��es (lado de Admin).',
  	                         'helpdsc'       => 'Ajude em m�dulo',
  	                         'settingsdsc'   => 'M�dulo geral lista de configura��es',
  	                         'itemdsc'       => 'M�dulo configura��es de itens.',
  	                         'metadsc'       => 'M�dulo configura��es de meta.',
  	                         'slideshowdsc'  => 'Slide configura��es.',
  	                         
  	                         'index_dsc'     => 'Volte para m�dulo p�gina de index (lado de Usu�rio).',
  	                         'menu_dsc'      => 'Adicione, apague, duplique, edite um menu.',
  	                         'link_dsc'      => 'Adicione, apague, duplique, edite um link.',
  	                         'query_dsc'     => 'Adicione, apague, duplique, edite uma query de banco de dados.',
  	                         'image_dsc'     => 'Adicione, apague, edite uma imagem.',
  	                         'template_dsc'  => 'Personalize template, folha de style e script.',
  	                         'block_dsc'     => 'Monte um bloco.',
  	                         'settings_dsc'  => 'Monte prefer�ncias de m�dulos gerais.',
  	                         'utils_dsc'     => 'M�dulo duplicado.',
                             'help_dsc'      => 'Ajuda sobre o m�dulo.'
                                 );

// Modinfo values
 	$pref_val_array =  array(
 	                          'mode_test'              => 'Valores',
 	                          
 	                          'mode_item_thumb'        => 'Thumb',
 	                          'mode_item_slideshow'    => 'Slide',
 	                          
 	                          'mode_list_image'        => 'Imagens',
 	                          'mode_list_select'       => 'Selecione caixa',
 	                          'mode_list_ul'           => 'N�o Encomendado lista',
 	                          
 	                          'welcome'                => '',
 	                          'metakeywords'           => '',
 	                          'metadescription'        => '',
 	                          
 	                          
 	                          'deactivated'            => 'Desativado',
 	                          'all'                    => 'Todos'
                            );

// Settings values
 	$sett_val_array =  array( 'banner'                    => 'Banner',
 	                          'bannerdsc'                 => 'Banner url exibida no m�dulo.',
 	                          'bannerhlp'                 => 'Deixar vazios para n�o expor. Formato apenas imagens (.jpg, .gif, etc.).',
 	                          
 	                          'background'                => 'Vis�o de fundo',
 	                          'backgrounddsc'             => 'O url de imagem de fundo mostrada no m�dulo.',
 	                          'backgroundhlp'             => 'Deixar vazios para n�o expor. Formato apenas imagens (.jpg, .gif, etc.).',
 	                          
 	                          'activation'                => 'P�ginas ativas',
 	                          'activationdsc'             => 'Lista de p�gina ativa.',
                              'activationhlp'             => 'Permite determinar quais p�ginas de m�dulos s�o parte ativa em p�blico.',
                              
 	                          'desc'                      => 'Texto de p�gina de �ndice',
 	                          'descdsc'                   => 'Texto mostrado na p�gina de �ndice do m�dulo.',
 	                          'deschlp'                   => 'Suporte dos c�digos hmtl e Xoops (smilies e balises). Deixar vazios para n�o expor.',
 	                          
 	                          'display'                   => 'Mostrar informa��es',
 	                          'displaydsc'                => 'Lista de informa��o mostrada na p�gina de �ndice.',
 	                          'displayhlp'                => 'Sele��o de tipos de informa��es a exibi��o em p�blico p�ginas do m�dulo.',
 	                          'display_thumb'             => 'Vinheta',
 	                          'display_description'       => 'Descri��o',
 	                          'display_admin'             => 'Links admin',
 	                          
 	                          'cols'                      => 'Colunas',
 	                          'colsdsc'                   => 'N�mero de colunas.',
 	                          'colshlp'                   => 'Este valor aplica tanto a exibir dados em forma de quadro no p�blico e administrativo (ex : as imagens).',

 	                          'item_list'                 => 'Lista p�gina',
 	                          'item_listdsc'              => 'Mostrar m�dulo lista da p�gina.',
 	                          'item_listhlp'              => 'Ativa e selecciona a lista de outras p�ginas p�blicas no M�dulo.',
 	                          'display_none'              => '- Nenhum -',
 	                          'display_images'            => 'Thumb',
 	                          'display_select'            => 'Selecionar caixa',
 	                          'display_ul'                => 'lista desordenada',
 	                          
 	                          'perpage'                   =>  'Itens por p�gina',
 	                          'perpagedsc'                => 'N�mero de itens exibidos por p�gina.',
 	                          'perpagehlp'                => 'Determine o n�mero informa��es a par exibir p�ginas do m�dulo (lista de menus, de link, imagens, etc.) em p�blico e administrativo.',

 	                          'thumbmw'                   => 'Thumb tamanho',
 	                          'thumbmwdsc'                => 'Padr�o de altura e largura de imagens de thumb.',
                              'thumbmwhlp'                => '',
                              
 	                          'color'                     => 'Thumb cores',
 	                          'colordsc'                  => 'Cores padr�o usada para gerar thumbs.',
 	                          'colorhlp'                  => '',
 	                          
                              'infobulle'                 => 'Dicas',
 	                          'infobulledsc'              => 'For�a dicas exibi��o em links.',
 	                          'infobullehlp'              => '',
 	                          
 	                          'lenght'                    =>  'Max tamanho t�tulo',
 	                          'lenghtdsc'                 =>  'M�ximo caracter usado em links.',
 	                          'lenghthlp'                 =>  '',
 	                          
 	                          'blocks'                    => 'N�mero de Blocos',
 	                          'blocksdsc'                 => 'N�mero de blocos gerada pelo m�dulo. Se valor alterou-se, atualizar m�dulo de gera��o de blocos requeridos.',
 	                          'blockshlp'                 => '',
 	                          
 	                          'main'                      => '�ndice redireccionamento',
 	                          'maindsc'                   => 'Defina uma reorienta��o sobre os principais �ndices p�gina. <br />
                                                              Pode ser uma URL relativa ou absoluta.',
 	                          'mainhlp'                   => '',
 	                          
 	                          'template'                  => 'Modelo',
 	                          'mode'                      => 'Modelo',
                              'modedsc'                   => 'Modo de exibi��o padr�o.',
                              'modehlp'                   => '',
                              
 	                          'dispsm'                    => 'Exibir Modelo',
 	                          'dispsmdsc'                 => 'Exibir modelos seletor nas p�ginas de item (lado usu�rio).',
 	                          'dispsmdhlp'                => '',
 	                          
 	                          'selectmode'                => 'Ative modelos vis�vel',
 	                          'selectmodedsc'             => 'Selecione ativa modelos para uso no m�dulo (usu�rio e admin).',
                              'selectmodehlp'             => 'Aten��o: todos os modos permanecer�o dispon�veis !Este par�metro apenas define os m�todos dispon�veis na caixa de sele��o de modos dispon�veis lado do utilizador. ',

 	                          'edit_mode'                 => 'Modelo edi��o',
 	                          'edit_modedsc'              => 'Mostrar modelo c�digo nas p�ginas de item (Admin s�!).',
 	                          'edit_modehlp'              => '',

 	                          'item_name'                 => 'Itens nome',
 	                          'item_namedsc'              => 'Substitui��o nome do item.',
 	                          'item_namehlp'              => '',
 	                          
 	                          'metakeyword'               => 'Meta palavras-chave',
 	                          'metakeyworddsc'            => 'Meta palavras-chave usadas no m�dulo.',
 	                          'metakeywordhlp'            => '',
 	                          
 	                          'metadesc'                  => 'Meta Descri��o',
                              'metadescdsc'               => 'Padr�o meta descri��o sobre o m�dulo utilizado (substitu�do pelo menu descri��o se houver).',
 	                          'metadeschlp'               => '',
 	                          
 	                          'dir'                       => 'Image diret�rio',
                              'dirdsc'                    => 'Image m�dulo diret�rio onde as imagens s�o armazenadas.',
                              'dirhlp'                    => '',
                              
                              'tip'                       => 'Dicas',
                              'tipdsc'                    => 'Mostrar dicas e truques em uma caixa (lado Admin).',
                              'tiphlp'                    => '',
                              
 	                          'buttons'                   => 'Admin links',
 	                          'buttonsdsc'                => 'Selecione o modo de exibi��o dos links admin (s� Admin)',
 	                          'buttonshlp'                => '',
                              'image'                     => 'Icones',
 	                          'text'                      => 'Texto',
 	                          'button'                    => 'Bot�o',
                              'select'                    => 'Selecionar caixa',
                              
 	                          'urw'                       => 'URL Reescrever',
 	                          'urwdsc'                    => 'M�dulos Url reescrever as configura��es.
                                                                  Definir n�mero de caracteres usada para gerar endere�os reescrever URW (baseado no menu t�tulo). ',
 	                          'urwhlp'                    => '',
 	                          
 	                          'ss'                        => 'Slide configura��es',
                              'ssdsc'                     => 'Slide defini��es gerais em milisegundos. [Dura��o &#124; Transi��o]',
                              'sshlp'                     => ''
                              
                            );


// Render defines
        $item_val_array = array_merge( $com_val_array,
                                       $pref_val_array,
                                       $sett_val_array );

 	foreach ($item_val_array as $item_lg=>$item_val) {
                 define(strtoupper('_MI_MULTIMENU_'.$item_lg),$item_val);
	}
?>

