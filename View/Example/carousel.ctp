<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide">
  <div class="carousel-inner">
    <div class="item active">
      <?php echo $this->Html->image('Admin.examples/slide-01.jpg');?>
      <div class="container">
        <div class="carousel-caption">
          <h1>Example headline.</h1>
          <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          <a class="btn btn-large btn-primary" href="#">Sign up today</a>
        </div>
      </div>
    </div>
    <div class="item">
      <?php echo $this->Html->image('Admin.examples/slide-02.jpg');?>
      <div class="container">
        <div class="carousel-caption">
          <h1>Another example headline.</h1>
          <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          <a class="btn btn-large btn-primary" href="#">Learn more</a>
        </div>
      </div>
    </div>
    <div class="item">
      <?php echo $this->Html->image('Admin.examples/slide-03.jpg');?>
      <div class="container">
        <div class="carousel-caption">
          <h1>One more for good measure.</h1>
          <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          <a class="btn btn-large btn-primary" href="#">Browse gallery</a>
        </div>
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div><!-- /.carousel -->



<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

  <!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="span4">
      <img class="img-circle" data-src="holder.js/140x140">
      <h2>Heading</h2>
      <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
      <p><a class="btn" href="#">View details &raquo;</a></p>
    </div><!-- /.span4 -->
    <div class="span4">
      <img class="img-circle" data-src="holder.js/140x140">
      <h2>Heading</h2>
      <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
      <p><a class="btn" href="#">View details &raquo;</a></p>
    </div><!-- /.span4 -->
    <div class="span4">
      <img class="img-circle" data-src="holder.js/140x140">
      <h2>Heading</h2>
      <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
      <p><a class="btn" href="#">View details &raquo;</a></p>
    </div><!-- /.span4 -->
  </div><!-- /.row -->


  <!-- START THE FEATURETTES -->

  <hr class="featurette-divider">

  <div class="featurette">
    <?php echo $this->Html->image('Admin.examples/browser-icon-chrome.png',array('class'=>'featurette-image pull-right'));?>
    <h2 class="featurette-heading">First featurette headling. <span class="muted">It'll blow your mind.</span></h2>
    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
  </div>

  <hr class="featurette-divider">

  <div class="featurette">
    <?php echo $this->Html->image('Admin.examples/browser-icon-firefox.png',array('class'=>'featurette-image pull-left'));?>
    <h2 class="featurette-heading">Oh yeah, it's that good. <span class="muted">See for yourself.</span></h2>
    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
  </div>

  <hr class="featurette-divider">

  <div class="featurette">
    <?php echo $this->Html->image('Admin.examples/browser-icon-safari.png',array('class'=>'featurette-image pull-right'));?>
    <h2 class="featurette-heading">And lastly, this one. <span class="muted">Checkmate.</span></h2>
    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
  </div>

  <hr class="featurette-divider">

  <!-- /END THE FEATURETTES -->