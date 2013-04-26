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
    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 40px;
      }

      /* Custom container */
      .container-narrow {
        margin: 0 auto;
        max-width: 700px;
      }
      .container-narrow > hr {
        margin: 30px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 60px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 72px;
        line-height: 1;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }
    </style>
    <?php echo $this->Html->css('Admin.bootstrap-responsive.css');?>
    <?php echo $this->Html->css('Admin.todc-bootstrap.css');?>

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

    <div class="container-narrow">

      <div class="masthead">
        <ul class="nav nav-pills pull-right">
          <li class="active"><?php echo $this->Html->link('Home','/admin');?></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
        <h3 class="muted"><?php echo $site_name;?></h3>
      </div>

      <hr>

    <?php echo $this->Session->flash(); ?>
    <?php echo $content_for_layout; ?>

      <div class="footer">
        <p>&copy; Company 2013</p>
      </div>

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
