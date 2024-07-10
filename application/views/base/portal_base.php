<!DOCTYPE html>
<!--
Template Name: Surogou
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
	<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
	<head>
		<title><?php echo $titulo_tab; ?></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link href="<?php echo base_url('recursos-portal/layout/styles/layout.css'); ?>" rel="stylesheet" type="text/css" media="all">
		<link rel="shortcut icon" href="<?php echo base_url('recursos-portal/images/logo/logo_tab.png'); ?>" type="image/png"/>
	</head>
	<body id="top">
		<!-- ################################################################################################ -->
		<!-- ########## TOP BAR ############################################################################# -->
		<!-- ################################################################################################ -->
		<div class="wrapper row0">
			<div id="topbar" class="hoc clear">
				<div class="fl_left">
					<ul class="nospace">
						<li><a href="<?php echo base_url('principal/'.$this->paginas->PAGINA_INICIO); ?>"><i class="fas fa-home fa-lg"></i></a></li>
						<li><a href="<?php echo base_url('principal/'.$this->paginas->PAGINA_LOGIN); ?>">Login</a></li>
					</ul>
				</div>
				<div class="fl_right">
					<ul class="nospace">
						<li><i class="fas fa-envelope rgtspace-5"></i> tustennis@hotmail.com</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- ################################################################################################ -->
		<!-- ########## HEADER ############################################################################## -->
		<!-- ################################################################################################ -->
		<div class="wrapper row1">
			<header id="header" class="hoc clear">
				<!-- ########## LOGOTIPE #################################################################### -->
				<div id="logo" class="one_half first">
					<h1 class="logoname">
						<a href="<?php echo base_url('principal/'.$this->paginas->PAGINA_INICIO); ?>">
							<img class="img-fluid" src="<?php echo base_url('recursos-portal/images/logo/logo_header.png'); ?>">
						</a>
					</h1>
				</div>
				<!-- ########## INFORMATION ################################################################# -->
				<div class="one_half">
					<ul class="nospace clear">
						<li class="one_half first">
							<div class="block clear"><i class="fas fa-phone"></i> <span><strong class="block"> Llámanos:</strong>  246 216 1581 </span> </div>
						</li>
						<li class="one_half">
							<div class="block clear"><i class="far fa-clock"></i> <span><strong class="block"> Lunes a Domingo:</strong> 08.00am - 20.00pm</span> </div>
						</li>
					</ul>
				</div>
			</header>
			<!-- ************************************************************************************************ -->
			<!-- ************* NAVEGACION *********************************************************************** -->

	        <?php echo $menu_portal; ?>

			<!-- ************* FIN NAVEGACION ******************************************************************* -->
			<!-- ************************************************************************************************ -->
		</div>
		<!-- ################################################################################################ -->
		<!-- ######### BANNER AND BREADCRUMB ################################################################ -->
		<!-- ################################################################################################ -->
		<div class="wrapper bgded overlay" style="background-image:url('<?php echo $imagen_banner; ?>');">
			<div id="breadcrumb" class="hoc clear">
				<!-- ################################################################################################ -->
				<h6 class="heading"><?php echo $titulo_seccion; ?></h6>
				<ul>
					<li><a href="<?php echo base_url('portal/inicio'); ?>">Home</a></li>
					<?php
						foreach ($navegacion as $key => $value) {
							echo '<li><a '.($value != "" ? 'href="'.$value.'"' : "").'>'.$key.'</a></li>';
						}//end foreach
					?>
				</ul>
				<!-- ################################################################################################ -->
			</div>
		</div>

		<!-- ************************************************************************************************ -->
		<!-- ************* CONTENIDO ************************************************************************ -->

        <?php echo $contenido; ?>

		<!-- ************* FIN CONTENIDO ******************************************************************** -->
		<!-- ************************************************************************************************ -->

		<!-- ################################################################################################ -->
		<!-- ########## FOOTER ############################################################################## -->
		<!-- ################################################################################################ -->
		<div class="wrapper row4">
		  <footer id="footer" class="hoc clear">
			<div class="one_third first">
				<h1 class="logoname"><img class="img-fluid" src="<?php echo base_url('recursos-portal/images/logo/logo_header.png');?>"></h1>
				<p class="btmspace-30">
					Tus Tennis Inc. es una empresa actual para ofrecer calzado deportivo y casual a precios accesibles.
				</p>
				<ul class="faico clear">
					<li><a class="faicon-dribble" href="#"><i class="fab fa-dribbble"></i></a></li>
					<li><a class="faicon-facebook" href="#"><i class="fab fa-facebook"></i></a></li>
					<li><a class="faicon-google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
					<li><a class="faicon-linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
					<li><a class="faicon-twitter" href="#"><i class="fab fa-twitter"></i></a></li>
					<li><a class="faicon-vk" href="#"><i class="fab fa-vk"></i></a></li>
				</ul>
			</div>
			<div class="one_third">
				<h6 class="heading">Secciones relevantes</h6>
				<ul class="nospace linklist">
					<li><a href="<?php echo base_url('principal/'.$this->paginas->PAGINA_OFERTAS); ?>">Ofertas</a></li>
					<li><a href="<?php echo base_url('principal/'.$this->paginas->PAGINA_TENNIS_DAMA); ?>">Tennis Dama</a></li>
					<li><a href="<?php echo base_url('principal/'.$this->paginas->PAGINA_TENNIS_CABALLERO); ?>">Tennis Caballero</a></li>
				</ul>
			</div>
			<div class="one_third">
				<center>
					<h6 class="heading">El Tennis de la semana</h6>
					<p class="nospace btmspace-15">
						Adidas Superstar
					</p>
					<img class="img-fluid" src="<?php echo base_url('recursos-portal/images/productos/t1.jpg');?>" style="width:200px;">
				</center>
			</div>
		  </footer>
		</div>
		<!-- ################################################################################################ -->
		<!-- ########## COPYRIGHT ########################################################################### -->
		<!-- ################################################################################################ -->
		<div class="wrapper row5">
		  <div id="copyright" class="hoc clear">
				<p class="fl_left">Copyright &copy; 2021 - Todos los derechos reservados - <a href="#">Tus Tennis Inc.</a></p>
				<p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
		  </div>
		</div>
		<!-- ################################################################################################ -->
		<!-- ########## SCRIPTS ############################################################################# -->
		<!-- ################################################################################################ -->
		<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
		<!-- JAVASCRIPTS -->
		<script src="<?php echo base_url('recursos-portal/layout/scripts/jquery.min.js'); ?>"></script>
		<script src="<?php echo base_url('recursos-portal/layout/scripts/jquery.backtotop.js'); ?>"></script>
		<script src="<?php echo base_url('recursos-portal/layout/scripts/jquery.mobilemenu.js'); ?>"></script>
	</body>
</html>
