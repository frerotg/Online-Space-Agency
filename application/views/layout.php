<!DOCTYPE html>
<head>
    <meta charset="UTF-8">

    <title>Online Space Agency</title>

    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="stylesheet" href="<?=base_url(); ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url(); ?>css/bootstrap-responsive.min.css"> -->
    <link rel="stylesheet" href="<?=base_url(); ?>css/jquery.css">
    <link rel="stylesheet" href="<?=base_url(); ?>css/style.css">
    <link rel="stylesheet" href="<?=base_url(); ?>css/jquery.qtip.min.css">
</head>
<body>
	<div id="container-all">
		<header>
			<div class="top-bar">
				<?php $this->load->view('template/topbar/user_interface_topbar','', FALSE); ?>
			</div>
			<nav>
				<?= $header ?>
			</nav>
		</header>
		<div class="content">
			<?= $content ?>
		</div>
		<footer>
			<?= $footer ?>
		</footer>
	</div>
</body>
<script src="<?=base_url(); ?>js/jquery.js"></script>
<script src="<?=base_url(); ?>js/jquery-ui.js"></script>
<script src="<?=base_url(); ?>js/bootstrap.min.js"></script>
<?php
if(isset($script)):
    echo ($script);
endif; 
?>
</html>