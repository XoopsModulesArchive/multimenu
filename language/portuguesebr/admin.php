<?php
/**
* XOOPS - PHP Content Management System
* Copyright (c) 2001 - 2006 <http://www.xoops.org/>
*
* Module: multiMenu 2.x
* Licence : GPL
* Authors :
*           - solo (http://www.wolfpackclan.com/wolfactory)
*/
// 2.x
                                                          
// Common values                                                          
$main_val_array =  array(                                                           
// commons                                                          
                'IMAGE'        => 'Imagem',
                'ID'           => 'N�',
                'TITLE'        => 'Titulo',
                'ADMIN'        => 'Admin',
                'WEIGHT'       => 'Peso',
                'ONLINE'       => 'Conectado',
                'OFFLINE'      => 'Desconectado',
                'HIDDEN'       => 'Ocultar',
                'HIDE'         => 'Oculto',
                'OPTIONS'      => 'Opc�es',
                'UPDATE'       => 'Atualizar',
                'NODATA'       => 'N�o h� dados para exibir !',
                'SITEMAP'      => 'Sitemap',
                'DESC'         => 'Descri��o',
                'OFF'          => 'Desligado',
                'ON'           => 'Ligado',
                                                          
                'HELP'         => 'Ajuda',
                'INDEX'        => 'Index',
                'INDEXDSC'     => 'M�dulo principal �ndice',
                'CREDIT'       => '%s � uma cria��o original de %s.',
                'QUERIES'      => 'Consultas',
                'MENU'         => 'Menus',
                'LINK'         => 'Links',
                'URL'          => 'Url',
                'QUERY'        => 'Consulta',
                'BLOCKS'       => 'Blocos',
                'IMAGES'       => 'Imagens',
                'SETTINGS'     => 'Configura��es',
                'UTILS'        => 'Utilit�rios',
                'STATUS'       => 'Situa��o',
                'EDIT'         => 'Editar',
                'CLONE'        => 'Duplicata',
                'CANCEL'       => 'Cancelar',
                'SUBMIT'       => 'Enviar',
                'DELETE'       => 'Excluir',
                'OTHER'        => 'Outras:',
                'CSS'          => 'Folha Estilo',
                                                          
// Admin tab menus                                                          
                'MENUDSC'      => '1. Criar e administrar menus',
                'LINKDSC'      => '2. Criar e administrar links',
                'QUERYDSC'     => '3. Criar e administrar base de dados de consultas',
                'IMAGESDSC'    => '4. Administrar imagens',
                'TEMPLATESDSC' => '5. Administrar templates, CSS and script datas',
                'BLOCKSDSC'    => '6. Administrar blocos e as permiss�es do grupo',
                'SETTINGSDSC'  => '7. Administrar m�dulo configura��es gerais',
                'UTILSDSC'     => '8. Utilidades de m�dulos',
                'HELPDSC'      => '9. Ajuda no uso de m�dulo',
                                                          
// SQL operations                                                          
                'INSERTED'     => 'Dados inseridos corretamente.',
                'UPDATED'      => 'Dados atualizados corretamente.',
                'CONFIRM'      => 'Voc� est� seguro que quer apagar:',
                'DELETED'      => 'Dados apagados corretamente!',
                'SUREDELETE'   => 'Voc� est� seguro que quer apagar este link?',
                'NOTUPDATED'   => 'Imposs�vel atualizar banco de dados!',
                                                          
                                                          
// Images                                                          
                'RESIZE'       => 'Redimensione',
                'UPLOAD'       => 'Carregar',
                'NEWIMAGE'     => 'Carregar uma nova imagem',
                'SERVER_CONF'  => 'servidor configura��o infos',
                'XOOPS_VERSION'=> 'XOOPS vers�o',
                'GRAPH_GD_LIB_VERSION' => 'GDLibrairie',
                                                          
                'GIF_SUPPORT'  => 'GIF suportado',
                'JPEG_SUPPORT' => 'JPG suportado',
                'PNG_SUPPORT'  => 'PNG suportado',
                                                          
                'NORMAL'       => 'Normal',
                'ROUNDED'      => 'Cantos arredondados',
                'BW'           => 'Negro & Branco',
                'SHADOW'       => 'Sombra',
                'GRAD'         => 'Gradiente',
                'INFO'         => 'Texto',
                'CHECK_ALL'    => 'Selecione tudo',
                                                          
                'THUMBGEN'     => 'Gerador de Thumb',
                'TEXT'         => 'Texto',
                'WIDTH'        => 'Largura',
                'HEIGHT'       => 'Altura',
                'BCKCOLOR'     => 'Cor de fundo',
                'DIR'          => 'Diret�rio',
                'UPLOADED'     => 'Arquivo corretamente carregado!',
                'NOTUPLOADED'  => 'Um erro ocorreu enquanto o arquivo carregado!',
                'NOT_CREATED'  => 'Diret�rio de arquivo n�o existe!',
                                                          
// Templates                                                          
                'TPL'          => 'Template',
                'SCRIPT'       => 'Script',
                'TEMPLATES'    => 'Templates',
                'TEMPLATE'     => 'Template',
                                                          
// Queries                                                          
                'NEW_QUERY'    => 'Criar um nova query no banco de dados',
                'EDIT_QUERY'   => 'Editar query',
                'TABLE'        => '[BD] Tabela',
                'QID'          => '[BD] ID campo',
                'QSUBJECT'     => '[BD] Submeta campo',
                'QDESCRIPTION' => '[BD] Alt campo',
                'QIMAGE'       => '[BD] Image campo',
                'QIMAGEURL'    => 'Image diret�rio',
                'QURL'         => 'Link URL<br />
                                   <font style="font-weight:normal;">{id} : ID valor</font>',
                                   
                                   
                'QWHERE'       => '[BD] Condi��es<br />
                                   <font style="font-weight:normal;">{date} : tempo atual</font>',
                'QORDER'       => '[BD] Dados mostra ordem',
                'QLIMIT'       => 'N�mero m�ximo de links para exibi��o',
                'TROUBLE'      => 'Erro',
                'NEXT'         => 'Proximo...',
                'TABLE_CHECK'  => 'Confira tabela',
                'FIELD'        => 'Campo',
                'NULL'         => 'Nulo',
                'KEY'          => 'Chave',
                'DEFAULT'      => 'Padr�o',
                'EXTRA'        => 'Extra',
                'N'            => 'N�',
                'CLOSE'        => 'Fechar',
                                                          
 // Menus                                                          
                'NEW_MENU'     => 'Criar menu',
                'EDIT_MENU'    => 'Editar menu',
                'ALT_TITLE'    => 'T�tulo alternativo',
                'IMAGEDIR'     => 'Imagem arquivo de diret�rio',
// Links                                                          
                'NEW_LINK'     => 'Criar link',
                'EDIT_LINK'    => 'Editar link',
                'TYPE'         => 'Tipo',
                'WAITING'      => 'Esperando...',
                'INFOS'        => 'Infos',
                'INFOBULLE'    => 'Aviso-Mouse',
                'IMAGEURL'     => 'Imagem distante',
                                                          
                'LINKIN'       => 'P�gina locais',
                'LINKOUT'      => 'P�gina distante',
                'PERMANENT'    => 'Permanente',
                'RELATIVE'     => 'Relativo',
                'LINK_PERM'    => 'Permanente',
                'LINK_REL'     => 'Relativo',
                'LINK_IN'      => 'Local',
                'LINK_OUT'     => 'Distante',
                                                          
                'TOP'          => 'Topo',
                'BOTTOM'       => 'Fundo',
                                                          
                'TARG_AUTO'    => 'Auto (detectar melhor configura��o alvo)',
                '_SELF'        => 'Self (abrir na mesma janela)',
                '_BLANK'       => 'Blank (abrir em uma nova janela)',
                                                          
                'SELF'         => 'Abrir na mesma janela',
                'BLANK'        => 'Abrir em uma nova janela',
                                                          
                'LINKTO'       => 'Link para:',
                'NONE'         => 'Nenhum',
                                                          
// Help                                                          

                'MENUCSSH'     => 'Ajuda nos menus - folha de estilo',
                'LINKCSSH'     => 'Ajuda nos links - folha de estilo',
                'SAMPLE'       => 'Exemplo',
                'ARTICLE'      => 'Artigo',
                                                          
                'MAIN'         => 'Principal',
                'MAINDSC'      => 'Informa��es gerais sobre este m�dulo.',
                'SMARTY'       => 'Smarty vari�veis',
                'SMARTYDSC'    => 'Smarty vari�veis liste',
                'HELPS'        => 'Ajuda',
                'HELPSDSC'     => 'Ajuda sobre a utiliza��o deste m�dulo',
                'TIPSDSC'      => 'Dicas e truques sobre este m�dulo.',
                'INTRODUCTION' => 'Intro',
                'KNOW'         => 'Voc� sabia?',
                'TIPS'         => 'Dicas',
                                                          
                'DEVELOPPERS'  => 'Programadores',
                'INFORMATIONS' => 'Informa��es',
                'DISCLAIMER'   => 'Aviso',
                'AUTHOR_WORD'  => 'Autor do texto',
                'VERSION_HISTORY' => 'Vers�o hist�rica',
                'LANGUAGE_DEFINE' => 'Definir l�nguagem ',
                'FIXES_ITEM'     => 'Vari�veis gerais',
                'VARIABLES_ITEM' => 'Vari�veis de link',
                                                          
// Utils                                                          
                'CLONEDSC'       => 'Utilidade de clone de m�dulo',
                'CLONE_NAME'     => 'Nome de clone<br /><i>
                                     <ul>
										 <li>N�o mais de 16 caracters</li>
										 <li>Nenhum caracters especial</li>
										 <li>Nome de m�dulo j� existente</li>
										 <li>Letras mai�sculas e espa�os aceitos</li>
									 </ul></i>
									 Exemplo : \'Mon M�dulo 01\'. ',
                'CLEAR'          => 'Apagar',
                                                          
                'NEW'            => 'Novo',
                'SUBMENU'        => 'Tipo',
                                                          
                'TARGET'         => 'Destino',
                'GROUPS'         => 'Grupos',
                'OPERATION'      => 'Opera��o',
                                                          
                'clonetrouble'   => 'O Clone foi criado no arquivo de "cache" (veja raiz de website).<br />
                                   Mova o Clone do "cache" para o diret�rio do "m�dulo" com seu cliente de FTP.<br />
                                   Mude atributos do Clone para 644.<br />
                                   <br />
                                   Depois instale seu clone similar em qualquer outro m�dulo.',
                 'module_exists' => 'Erro: Este m�dulo j� existe! Mudar o nome do clone.',
                 'cloned'        => 'M�dulo clonado com sucesso!',
                 'notcloned'     => 'Erro: Clone configura��es est�o erradas!',
                                                          
                 'import'        => 'Importa��o SQL',
                 'importdsc'     => 'Importar dados SQL diretamente no databade!',
                 'db_datas'      => 'Dados SQL',
                 'imported'      => 'Dados importados com sucesso!',
                 'notimported'   => 'Dados recusada!'
                 );
                                                          
// Render defines                                                          
                                                          
 	foreach ( $main_val_array as $item_lg=>$item_val ) {
                 define(strtoupper('_MD_MULTIMENU_'.$item_lg),$item_val);
	}
	                                                          
	                                                          
                                                          
?>
