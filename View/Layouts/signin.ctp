<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title_for_layout; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <?php echo $this->Html->css('Admin.bootstrap.css');?>
    <?php echo $this->Html->css('Admin.bootstrap-responsive.css');?>
    <?php echo $this->Html->css('Admin.todc-bootstrap.css');?>
    <style type="text/css">
      body { padding-top: 40px; padding-bottom: 40px; }
      a { color: #15c; text-decoration: none; }
      a:hover { color: #15c; text-decoration: underline; }
      form,
      label,
      input[type=text],
      input[type=checkbox],
      input[type=password] {
        margin: 0;
      }

      .signin {
        width: 335px;
        margin: 0 auto;
      }
      .signin-box {
        padding: 20px 25px 15px;
        background: #f1f1f1;
        border: 1px solid #e5e5e5;
      }
      .signin-box h2 {
        font-size: 16px;
        font-weight: normal;
        line-height: 17px;
        height: 16px;
        margin: 0 0 19px;
      }

      .signin-box input[type=checkbox] {
        vertical-align: bottom;
      }
      .signin-box input[type=text],
      .signin-box input[type=password] {
        width: 100%;
        font-size: 15px;
        color: black;
        line-height: normal;
        height: 32px;
        margin: 0 0 20px;
        box-sizing: border-box;
      }
      .signin-box input[type=submit] {
        margin: 0 20px 15px 0;
      }

      .signin-box label {
        color: #222;
        margin: 0 0 5px;
        display: block;
        font-weight: bold;
        font-size: 13px;
      }

      .signin-box label.remember {
        display: inline-block;
        vertical-align: top;
        margin: 9px 0 0;
        line-height: 1;
        font-size: 13px;
      }

      .signin-box .remember-label {
        font-weight: normal;
        color: #666;
        line-height: 0;
        padding: 0 0 0 5px;
      }

      .signin-box ul {
        list-style: none;
        line-height: 17px;
        margin: 0;
        padding: 0;
      }
    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <?php echo $this->Html->script('Admin.html5shiv.js');?>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo Router::url(array('plugin' => 'admin', 'controller' => 'admin', 'action' => 'index'));?>/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo Router::url(array('plugin' => 'admin', 'controller' => 'admin', 'action' => 'index'));?>/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo Router::url(array('plugin' => 'admin', 'controller' => 'admin', 'action' => 'index'));?>/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo Router::url(array('plugin' => 'admin', 'controller' => 'admin', 'action' => 'index'));?>/ico/apple-touch-icon-57-precomposed.png">
     <link rel="shortcut icon" href="<?php echo Router::url(array('plugin' => 'admin', 'controller' => 'admin', 'action' => 'index'));?>/ico/favicon.png">
  </head>

  <body>

    <div class="container">

    <?php echo $this->Session->flash(); ?>
    <?php echo $content_for_layout; ?>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php echo $this->Html->script('Admin.jquery.js');?>
    <?php echo $this->Html->script('Admin.bootstrap-transition.js');?>
    <?php echo $this->Html->script('Admin.bootstrap-alert.js');?>
    <?php echo $this->Html->script('Admin.bootstrap-modal.js');?>
    <?php echo $this->Html->script('Admin.bootstrap-dropdown.js');?>
    <?php echo $this->Html->script('Admin.bootstrap-scrollspy.js');?>
    <?php echo $this->Html->script('Admin.bootstrap-tab.js');?>
    <?php echo $this->Html->script('Admin.bootstrap-tooltip.js');?>
    <?php echo $this->Html->script('Admin.bootstrap-popover.js');?>
    <?php echo $this->Html->script('Admin.bootstrap-button.js');?>
    <?php echo $this->Html->script('Admin.bootstrap-collapse.js');?>
    <?php echo $this->Html->script('Admin.bootstrap-carousel.js');?>
    <?php echo $this->Html->script('Admin.bootstrap-typeahead.js');?>

  </body>
</html>
