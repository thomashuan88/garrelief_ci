<!DOCTYPE html>
<html>
    <head>
        <title>Gar Relief - <?php echo $title; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url(); ?>css/main.css" rel="stylesheet" media="screen">
        <?php echo $style; ?>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div class="container containshadow">
            <div class="headbackgrd">
                <div class="slogan">
                    <h1>Gar Relief</h1>
                    <span>GRASSROOTS DEVELOPMENT PROJECTS<br/>THAT STRENGTHEN COMMUNITIES ON THE TIBETAN PLATEAU</span>
                </div>
            </div>
            <?php echo $menu; ?>
            <?php echo $content; ?>
        </div>
        <script src="<?php echo base_url(); ?>js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
        <?php echo $script; ?>
    </body>
</html>