<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title_for_layout; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS -->
    <?php echo $this->Html->css('Admin.bootstrap.css');?>
    <style type="text/css">

      /* Sticky footer styles
      -------------------------------------------------- */

      html,
      body {
        height: 100%;
        /* The html and body elements cannot have any padding or margin. */
      }

      /* Wrapper for page content to push down footer */
      #wrap {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        /* Negative indent footer by it's height */
        margin: 0 auto -60px;
      }

      /* Set the fixed height of the footer here */
      #push,
      #footer {
        height: 60px;
      }
      #footer {
        background-color: #f5f5f5;
      }

      /* Lastly, apply responsive CSS fixes as necessary */
      @media (max-width: 767px) {
        #footer {
          margin-left: -20px;
          margin-right: -20px;
          padding-left: 20px;
          padding-right: 20px;
        }
      }



      /* Custom page CSS
      -------------------------------------------------- */
      /* Not required for template or sticky footer method. */

      #wrap > .container {
        padding-top: 60px;
      }
      .container .credit {
        margin: 20px 0;
      }

      code {
        font-size: 80%;
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


    <!-- Part 1: Wrap all page content here -->
    <div id="wrap">

      <!-- Fixed navbar -->
      <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <?php echo $this->Html->link($site_name,'/admin',array('class'=>'brand'));?>
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="nav-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </div>
      </div>

      <!-- Begin page content -->
      <div class="container">
      <?php echo $this->Session->flash(); ?>
      <?php echo $content_for_layout; ?>
      </div>

      <div id="push"></div>
    </div>

    <div id="footer">
      <div class="container">
        <p class="muted credit">Example courtesy <a href="http://martinbean.co.uk">Martin Bean</a> and <a href="http://ryanfait.com/sticky-footer/">Ryan Fait</a>.</p>
      </div>
    </div>



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
