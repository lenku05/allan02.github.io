<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
<meta name="description" content="Free Web tutorials">
<meta name="keywords" content="HTML,CSS,XML,JavaScript">
<meta name="author" content="John Doe">
	<title></title>
	 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>
<body>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">ALLAN ACADEMY</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">HOME</a></li>
      <li><a href="about.php">ABOUT US</a></li>
      <li><a href="#">GALLERY</a></li>
      <li><a href="#">CONTACT US</a></li>
    </ul>
  </div>
</nav>
... 
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="mb.jpg" alt="PRINCIPAL">
    </div>

    <div class="item">
      <img src="amg.jpg" alt="DEPT PRINCIPAL">
    </div>

    <div class="item">
      <img src="suv.jpg" alt="BOM">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 <form action="teach.php" method="POST">
 First Name:<br>
 <input type="First Name" name="fname" placeholder="Enter fname"><br>
 Surname:<br>
 <input type="Surname" name="sname" placeholder="Enter Surname"><br> 
 Students ID:<br>
 <input type="Student ID" name="id" placeholder="Student ID"><br>
 English:<br>
 <input type="number" name="English" placeholder="Input marks here"><br>
 Math:<br>
 <input type="number" name="Math" placeholder="Input marks here"><br>
 Swahili:<br>
 <input type="number" name="Swahili" placeholder="Input marks here"><br>
 Science:<br>
 <input type="number" name="Science" placeholder="Input marks here"><br>
 Computer:<br>
 <input type="number" name="Computer" placeholder="Input marks here"><br>
 <button type="btn btn danger">SUBMIT</button>
 <button type="reset" value="reset">RESET</button>
</form> 
  <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" class="modal fade">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close">×</button>
            <h4 id="Login" class="modal-title">Customer login</h4>
          </div>
          <div class="modal-body">
            <form action="customer-orders.html" method="post">
              <div class="form-group">
                <input id="email_modal" type="text" placeholder="email" class="form-control">
              </div>
              <div class="form-group">
                <input id="password_modal" type="password" placeholder="password" class="form-control">
              </div>
              <p class="text-center">
                <button type="button" class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
              </p>
            </form>
            <p class="text-center text-muted">Not registered yet?</p>
            <p class="text-center text-muted"><a href="#"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
          </div>
        </div>
      </div>
    </div>
    <!-- *** LOGIN MODAL END ***-->
    <div class="jumbotron main-jumbotron">
      <div class="container">
        <div class="content">
          <h1>This is Multi</h1>
          <p class="margin-bottom">Bootstrap Multipurpose Template by <a href="https://bootstrapious.com">Bootstrapious.com</a></p>
          <p><a class="btn btn-white">Learn more</a></p>
        </div>
      </div>
    </div>
    <section>
      <div class="container">
        <h2> Mauris placerat eleifend leo.</h2>
        <p class="lead">Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat.</p>
        <p>Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi.</p>
        <p><a class="btn btn-ghost">Read more</a></p>
      </div>
    </section>
    <section class="background-gray-lightest">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <div class="post">
              <div class="image"><a href="text.html"><img src="img/blog1.jpg" alt="" class="img-responsive"></a></div>
              <h3><a href="text.html">Rit eget tincidunt condimentum</a></h3>
              <p class="post__intro">ellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
              <p class="read-more"><a href="text.html" class="btn btn-ghost">Continue reading     </a></p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="post">
              <div class="image"><a href="text.html"><img src="img/blog2.jpg" alt="" class="img-responsive"></a></div>
              <h3><a href="text.html">Tempor sit amet</a></h3>
              <p class="post__intro"> Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi.</p>
              <p class="read-more"><a href="text.html" class="btn btn-ghost">Continue reading     </a></p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="post">
              <div class="image"><a href="text.html"><img src="img/blog3.jpg" alt="" class="img-responsive"></a></div>
              <h3><a href="text.html">Vestibulum erat wisi</a></h3>
              <p class="post__intro">ellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
              <p class="read-more"><a href="text.html" class="btn btn-ghost">Continue reading     </a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--   *** INTEGRATIONS ***-->
    <section>
      <div class="container clearfix">
        <div class="row services">
          <div class="col-md-12">
            <h2 class="h1">Integrations</h2>
            <div class="row">
              <div class="col-sm-4">
                <div class="box box-services">
                  <div class="icon"><i class="pe-7s-alarm"></i></div>
                  <h4 class="heading">Webdesign</h4>
                  <p>Fifth abundantly made Give sixth hath. Cattle creature i be don't them.</p>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="box box-services">
                  <div class="icon"><i class="pe-7s-cloud"></i></div>
                  <h4 class="heading">Print</h4>
                  <p>Advantage old had otherwise sincerity dependent additions. It in adapted natural.</p>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="box box-services">
                  <div class="icon"><i class="pe-7s-coffee"></i></div>
                  <h4 class="heading">SEO and SEM</h4>
                  <p>Am terminated it excellence invitation projection as. She graceful shy. </p>
                </div>
              </div>
            </div>
            <h2 class="h1">Tools</h2>
            <div class="row">
              <div class="col-sm-4">
                <div class="box box-services">
                  <div class="icon"><i class="pe-7s-monitor"></i></div>
                  <h4 class="heading">Consulting</h4>
                  <p>Fifth abundantly made Give sixth hath. Cattle creature i be don't them.</p>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="box box-services">
                  <div class="icon"><i class="pe-7s-signal"></i></div>
                  <h4 class="heading">Email Marketing</h4>
                  <p>Advantage old had otherwise sincerity dependent additions. It in adapted natural.</p>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="box box-services">
                  <div class="icon"><i class="pe-7s-id"></i></div>
                  <h4 class="heading">UX &amp; UI</h4>
                  <p>Am terminated it excellence invitation projection as. She graceful shy. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--   *** INTEGRATIONS END ***-->
    <!-- portfolio-->
    <section id="portfolio" class="background-gray-lightest">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="heading">Portfolio</h1>
            <p class="lead">You can make also a portfolio or image gallery.</p>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row no-space">
          <div class="col-sm-4 col-xs-6">
            <div class="box"><a href="img/portfolio-1.jpg" title="" data-lightbox="portfolio" data-title="Portfolio image 1"><img src="img/portfolio-1.jpg" alt="" class="img-responsive"></a></div>
          </div>
          <div class="col-sm-4 col-xs-6">
            <div class="box"><a href="img/portfolio-7.jpg" title="" data-lightbox="portfolio" data-title="Portfolio image 7"><img src="img/portfolio-7.jpg" alt="" class="img-responsive"></a></div>
          </div>
          <div class="col-sm-4 col-xs-6">
            <div class="box"><a href="img/portfolio-3.jpg" title="" data-lightbox="portfolio" data-title="Portfolio image 3"><img src="img/portfolio-3.jpg" alt="" class="img-responsive"></a></div>
          </div>
          <div class="col-sm-4 col-xs-6">
            <div class="box"><a href="img/portfolio-5.jpg" title="" data-lightbox="portfolio" data-title="Portfolio image 5"><img src="img/portfolio-5.jpg" alt="" class="img-responsive"></a></div>
          </div>
          <div class="col-sm-4 col-xs-6">
            <div class="box"><a href="img/portfolio-4.jpg" title="" data-lightbox="portfolio" data-title="Portfolio image 4"><img src="img/portfolio-4.jpg" alt="" class="img-responsive"></a></div>
          </div>
          <div class="col-sm-4 col-xs-6">
            <div class="box"><a href="img/portfolio-6.jpg" title="" data-lightbox="portfolio" data-title="Portfolio image 6"><img src="img/portfolio-6.jpg" alt="" class="img-responsive"></a></div>
          </div>
          <div class="col-sm-4 col-xs-6">
            <div class="box"><a href="img/portfolio-2.jpg" title="" data-lightbox="portfolio" data-title="Portfolio image 2"><img src="img/portfolio-2.jpg" alt="" class="img-responsive"></a></div>
          </div>
          <div class="col-sm-4 col-xs-6">
            <div class="box"><a href="img/portfolio-8.jpg" title="" data-lightbox="portfolio" data-title="Portfolio image 8"><img src="img/portfolio-8.jpg" alt="" class="img-responsive"></a></div>
          </div>
          <div class="col-sm-4 col-xs-6">
            <div class="box"><a href="img/portfolio-9.jpg" title="" data-lightbox="portfolio" data-title="Portfolio image 9"><img src="img/portfolio-9.jpg" alt="" class="img-responsive"></a></div>
          </div>
        </div>
      </div>
    </section>
    <footer class="footer">
      <div class="footer__block">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-sm-12">
              <h4 class="heading">About Multi</h4>
              <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus magna. Cras in mi at felis aliquet congue.  Vivamus magna. Cras in mi at felis aliquet congue.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. </p>
            </div>
            <div class="col-md-4 col-sm-12">
              <h4 class="heading">Our offices</h4>
              <h5>London</h5>
              <p> Donec eleifend<br />libero at sagittis<br />mollis + 44 2556 789 8799</p>
              <h5>Paris</h5>
              <p> Donec eleifend<br />libero at sagittis<br />mollis + 41 2556 789 8799</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 col-sm-6">
              <h4 class="heading">Popular Categories</h4>
              <ul>
                <li><a href="category.html">Graphic design</a></li>
                <li><a href="category.html">Web design</a></li>
                <li><a href="category.html">Support</a></li>
                <li><a href="category.html">Accounting</a></li>
              </ul>
            </div>
            <div class="col-md-4 col-sm-6">
              <h4 class="heading">Let's be Friends</h4>
              <p class="social social--big"><a href="#" data-animate-hover="pulse" class="external facebook"><i class="fa fa-facebook"></i></a><a href="#" data-animate-hover="pulse" class="external gplus"><i class="fa fa-google-plus"></i></a><a href="#" data-animate-hover="pulse" class="external twitter"><i class="fa fa-twitter"></i></a><a href="#" data-animate-hover="pulse" class="email"><i class="fa fa-envelope"></i></a></p>
            </div>
            <div class="col-md-4 col-sm-12">
              <h4 class="heading">News and Updates</h4>
              <p>Sign up to get weekly portion of fresh jobs and news from us.</p>
              <form class="footer__newsletter">
                <div class="input-group">
                  <input type="text" placeholder="Enter your email address" class="form-control"><span class="input-group-btn">
                    <button type="button" class="btn btn-default"><i class="fa fa-send"></i></button></span>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="footer__copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <p>&copy;2016 Best company</p>
            </div>
            <div class="col-md-6">
              <p class="credit">Template by <a href="https://bootstrapious.com/free-templates" class="external">Bootstrapious.com</a></p>
              <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
            </div>
          </div>
        </div>
      </div>
    </footer>
    <button type="button" data-toggle="collapse" data-target="#style-switch" id="style-switch-button" class="btn btn-primary btn-sm hidden-xs hidden-sm"><i class="fa fa-cog fa-2x"></i></button>
    <div id="style-switch" class="collapse">
      <h4 class="text-uppercase">Select theme colour</h4>
      <form class="margin-bottom">
        <select name="colour" id="colour" class="form-control">
          <option value="">select colour variant</option>
          <option value="default">blue</option>
          <option value="pink">pink</option>
          <option value="green">green</option>
          <option value="red">red</option>
          <option value="sea">sea</option>
          <option value="violet">violet</option>
        </select>
      </form>
      <p><img src="img/template-mac.png" alt="" class="img-responsive"></p>
      <p class="text-muted text-small">Stylesheet switching is done via JavaScript and can cause a blink while page loads. This will not happen in your production code.</p>
    </div>
    <!-- Javascript files-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"> </script>
    <script src="js/lightbox.min.js"></script>
    <script src="js/front.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <!---->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>

</body>
</html>