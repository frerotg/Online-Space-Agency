<!DOCTYPE html>
<head>
    <meta charset="UTF-8">

    <title>Online Space Agency</title>

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="http://twitter.github.com/bootstrap/1.4.0/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url(); ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?=base_url(); ?>css/jquery.css">
    <link rel="stylesheet" href="<?=base_url(); ?>css/style.css">
</head>
<body>
    <div class="topbar">
        <div class="fill">
            <div class="container">
                <?php
                if(!$this->session->userdata('is_connect')){
                    $this->load->view('template/topbar/main_topbar','', FALSE);
                }
                else{
                    $this->load->view('template/topbar/user_interface_topbar','', FALSE);
                }
                ?>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top:60px;">
        <div class="hero-unit">
            <?= $header ?>
        </div>
        <?= $content ?>
        <footer>
            <?= $footer ?>
        </footer>
    </div>
</body>
<script src="<?=base_url(); ?>js/jquery.js"></script>
<script src="<?=base_url(); ?>js/jquery-ui.js"></script>
<?php
if(isset($script)):
    echo ($script);
endif; 
?>
</html>