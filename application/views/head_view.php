<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
      <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Menken Pharma - <?php echo $title; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <!--Favicon-->
        <link rel="icon" type="image/jpg" href="img/favicon.PNG" />

        <link rel="stylesheet" href="<?php echo base_url() . 'css/components/normalize.min.css'; ?>" />
        <link rel="stylesheet" href="<?php echo base_url() . 'css/components/bootstrap.css'; ?>" />
        <link rel="stylesheet" href="<?php echo base_url() . 'css/pg-grid.css'; ?>" />
        <link rel="stylesheet" href="<?php echo base_url() . 'css/main.css'; ?>" />
        

        <script src="<?php echo base_url(); ?>js/jquery-1.9.1.js"></script>
        
        <?php if ( $this->agent->is_mobile() ) { ?>
        <script src="<?php echo base_url(); ?>js/sidr/jquery.sidr.min.js"></script>
        <!-- Include Sidr bundled CSS theme -->
        <link rel="stylesheet" href="<?php echo base_url() . 'css/jquery.sidr.dark.css'; ?>"/>  
        <?php } ?>

    </head>