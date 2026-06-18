<!DOCTYPE html>
<html lang="en">

<!-- ================== HEAD ================== -->
		<?php require_once ("view/sections/admin/head.php"); ?>

<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show">
		<span class="spinner"></span>
	</div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- ================== MENU HAUT ================== -->
		<?php require_once ("view/sections/admin/menuHaut.php"); ?>
		
		
		<!-- ================== MENU GAUCHE ================== -->
		<?php require_once ("view/sections/admin/menuGauche.php"); ?>
		
		
		<!-- ================== BASE CONTENT ================== -->
         <?php require_once ("view/sections/admin/baseContent.php"); ?>
		
		
		<!-- ================== SECTION CONFIG ================== -->
		<?php require_once ("view/sections/admin/config.php"); ?>
		
		
		<!-- ================== SCROLL TO TOP ================== -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->


    <!-- ================== SECTION SCRIPT ================== -->
		<?php require_once ("view/sections/admin/script.php"); ?>
	
	
</body>
</html>