<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php 
    $baseUrl = Yii::app()->baseUrl; 
	Yii::app()->getClientScript()
		->registerCssFile($baseUrl.'/css/bootstrap.cerulean.min.css')
		->registerCoreScript('jquery')
		->registerScriptFile($baseUrl.'/js/bootstrap.js',CClientScript::POS_END);
	?>
    <link rel="icon" type="image/png" href="<?=$baseUrl ?>/images/favicon.png" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body>
<div class="container">    <?php
$this->widget('bootstrap.widgets.BsNavbar', array(
    'collapse' => true,
    'brandLabel' => BsHtml::icon(BsHtml::GLYPHICON_FIRE).BsHtml::bold(' Modelo de Evaluación').BsHtml::small(' Qualitatcorp'),
    'brandUrl' => Yii::app()->homeUrl,
    'items' => array(
        array(
            'class' => 'bootstrap.widgets.BsNav',
            'type' => 'navbar',
            'activateParents' => true,
            'items' => array(
                array(
                    'label' => 'Evaluación',
                    'items' => array(
                        BsHtml::menuHeader(BsHtml::italics('Evaluación')),
                        array(
                            'label' => 'Administar Evaluación',
                            'url' => array(
                                'evaluacion/admin'
                            ),
                        ),
                        array(
                            'label' => 'Crear preguntas',
                            'url' => array(
                                'evaluacion/create'
                            ),
                        ),
                        // BsHtml::menuHeader(BsHtml::italics('Modulos')),
                        // array(
                        //     'label' => 'Administar Modulos',
                        //     'url' => array(
                        //         'evaluacion/adminMOD'
                        //     ),
                        // ),
                        // array(
                        //     'label' => 'Crear Modulos',
                        //     'url' => array(
                        //         'evaluacion/createMOD'
                        //     ),
                        // ),
                        BsHtml::menuHeader(BsHtml::italics('Evaluación Trabajador')),
                        array(
                            'label' => 'Evaluar Trabajador',
                            'url' => array(
                                'evaluacion/evaluation'
                            ),
                        ),
                        array(
                            'label' => 'Resultados Trabajadores',
                            'url' => array(
                                'evaluacion/adminTRA'
                            ),
                        ),
                        BsHtml::menuHeader(BsHtml::italics('Preguntas')),
                        array(
                            'label' => 'Administar preguntas',
                            'url' => array(
                                'evaluacion/adminPRE'
                            ),
                        ),
                        array(
                            'label' => 'Crear preguntas',
                            'url' => array(
                                'evaluacion/createPRE'
                            ),
                        ),
                        BsHtml::menuHeader(BsHtml::italics('Perfil Tecnico')),
                        array(
                            'label' => 'Administar Perfil Tecnico',
                            'url' => array(
                                'evaluacion/adminPT'
                            ),
                        ),
                        array(
                            'label' => 'Crear Perfil Tecnico',
                            'url' => array(
                                'evaluacion/createPT'
                            ),
                        ),
                    )
                ),
                array(
                    'label' => 'Administración',
                    'items' => array(
                        BsHtml::menuHeader(BsHtml::italics('Usuarios')),
                        array(
                            'label' => 'Administar Usuarios',
                            'url' => array(
                                'usuario/admin'
                            ),
                        ),
                        array(
                            'label' => 'Crear Usuario',
                            'url' => array(
                                'usuario/create'
                            ),
                        ),
                        BsHtml::menuHeader(BsHtml::italics('Empresas')),
                        array(
                            'label' => 'Administar Empresas',
                            'url' => array(
                                'empresa/admin'
                            ),
                        ),
                        array(
                            'label' => 'Crear Empresa',
                            'url' => array(
                                'empresa/create'
                            ),
                        ),
                        BsHtml::menuHeader(BsHtml::italics('Trabajadores')),
                        array(
                            'label' => 'Administar Trabajadores',
                            'url' => array(
                                'trabajador/admin'
                            ),
                        ),
                        array(
                            'label' => 'Crear Trabajador',
                            'url' => array(
                                'trabajador/create'
                            ),
                        ),
                    )
                ),
                // array(
                //     'label' => 'Evaluación',
                //     'items' => array(
                //         BsHtml::menuHeader(BsHtml::italics('Evaluación'), array(
                //             // 'class' => 'text-center',
                //             // 'style' => 'color:#99cc32;font-size:32px;'
                //         )),
                //         array(
                //             'label' => 'Administrar evaluaciones',
                //             'url' => array(
                //                 'evaluacion/admin'
                //             )
                //         ),
                //         array(
                //             'label' => 'Crear evaluación',
                //             'url' => array(
                //                 'evaluacion/create'
                //             )
                //         ),
                //         BsHtml::menuDivider(),
                //         BsHtml::menuHeader(BsHtml::italics('Área Operativa')),
                //         array(
                //             'label' => 'Administrar área Operativa',
                //             'url' => array(
                //                 'empresa/areaoperativa'
                //             )
                //         ),
                //         array(
                //             'label' => 'Crear área operativa',
                //             'url' => array(
                //                 'empresa/createAO'
                //             )
                //         ),
                //         BsHtml::menuDivider(),
                //         BsHtml::menuHeader(BsHtml::italics('Tipo de Empresa')),
                //         array(
                //             'label' => 'Tipo Empresa',
                //             'url' => array(
                //                 'empresa/tipoempresa'
                //             )
                //         ),
                //         array(
                //             'label' => 'Crear Empresa',
                //             'url' => array(
                //                 'empresa/createTE'
                //             )
                //         ),

                //     )
                // ),
            )
        ),
        array(
            'class' => 'bootstrap.widgets.BsNav',
            'type' => 'navbar',
            'activateParents' => true,
            'items' => array(
                // array(
                //     'label' => 'About',
                //     'url' => array(
                //         '/site/page',
                //         'view' => 'about'
                //     )
                // ),
                // array(
                //     'label' => 'Contact',
                //     'url' => array(
                //         '/site/contact'
                //     )
                // ),
                array(
                    'label' => 'Login',
                    'url' => array(
                        '/site/login'
                    ),
                    'pull' => BsHtml::NAVBAR_NAV_PULL_RIGHT,
                    'visible' => Yii::app()->user->isGuest
                ),
                array(
                    'label' => 'Logout (' . Yii::app()->user->name . ')',
                    'pull' => BsHtml::NAVBAR_NAV_PULL_RIGHT,
                    'url' => array(
                        '/site/logout'
                    ),
                    'visible' => !Yii::app()->user->isGuest
                )
            ),
            'htmlOptions' => array(
                'pull' => BsHtml::NAVBAR_NAV_PULL_RIGHT
            )
        )
        
    )
));
?>
		 <?php 

		// breadcrumbs
			$this->widget('bootstrap.widgets.BsBreadCrumb', array(
				'links' => $this->breadcrumbs,
				// will change the container to ul
				'tagName' => 'ul',
				// will generate the clickable breadcrumb links
				'activeLinkTemplate' => '<li><a href="{url}">{label}</a></li>',
				// will generate the current page url : <li>News</li>
				'inactiveLinkTemplate' => '<li>{label}</li>',
				// will generate your homeurl item : <li><a href="/dr/dr/public_html/">Home</a></li>
				'homeLink' => BsHtml::openTag('li') . BsHtml::icon(BsHtml::GLYPHICON_HOME) . BsHtml::closeTag('li')
			));
	?>
<div class="content">
	<?php echo $content ?>
</div>
</div>

</body>
</html>