<!DOCTYPE html>
<html lang="en">

<head>
  <title>Gallery</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">
  <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="css/style.css">

<style>
    #im1{
            height:225px;
			width:100%;
			padding:5px;
			margin-top:15px;
        }
		.btn:focus, .btn:active, button:focus, button:active {
            outline: none !important;
            box-shadow: none !important;
        }

        #image-gallery .modal-footer{
            display: block;
        }

        .thumb{
            margin-top: 15px;
            margin-bottom: 15px;
        }

</style>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <div class="py-2 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-8 d-none d-lg-block">
           <a href="contact.php" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> Have a questions?</a> 
            <a href="#" class="small mr-3"><span class="icon-phone2 mr-2"></span>+91 7355568297</a> 
            <a href="mailto:kamlapurisurendra1419@gmail.com" class="small mr-3"><span class="icon-envelope-o mr-2"></span> itsurendra1419@gmail.com</a> 
          </div>
          <div class="col-lg-4 text-right">
            <!--<a href="register.html" class="small mr-3"><span class="icon-unlock-alt"></span> Log In</a>-->
			<a href="feedback.php" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-star"></span>Feedback</a>
            <a href="login.php" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-key"></span> Log In</a>
          </div>
        </div>
      </div>
    </div>
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="index.php" class="d-block">
              <img src="images/logo.jpg" alt="Image" class="img-fluid">
            </a>
          </div>
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li>
                  <a href="index.php" class="nav-link text-left">Home</a>
                </li>
				<li>
                   <a href="about.php" class="nav-link text-left">About Us</a>
                </li>
                <li>
                  <a href="admissions.php" class="nav-link text-left">Admissions</a>
                </li>
                <li>
                  <a href="courses.php" class="nav-link text-left">Courses</a>
                </li>
				<li class="active">
                  <a href="gallery.php" class="nav-link text-left">Gallery</a>
                </li>
				
                <li>
                    <a href="contact.php" class="nav-link text-left">Contact</a>
                  </li>
              </ul>                                                                                                                                                                                                                                                                                          </ul>
            </nav>

          </div>
          <div class="ml-auto">
            <div class="social-wrap">
              <a href="https://www.facebook.com/surendra.kamlapuri.1/" target="_blank"><span class="icon-facebook"></span></a>
              <a href="https://twitter.com/?lang=en" target="_blank"><span class="icon-twitter"></span></a>
              <a href="https://www.instagram.com/smartboy__sk/" target="_blank"><span class="icon-instagram"></span></a>

              <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>
            </div>
          </div>
         
        </div>
      </div>

    </header>

    
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-7">
              <h2 class="mb-0">Gallery</h2>
              <p>Our Campus Gallery</p>
            </div>
          </div>
        </div>
      </div> 
    

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="#">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Gallery</span>
      </div>
    </div>

    


    
    <!--img gallery--->
<div class="jumbotron text-center" style="margin-bottom:0; background-color: #FBFCFF;">
    <div class="container"> 	
        <div class="row">
            <div class="col-sm-12">
                <h1>Our Institute's Gallery</h1>
                <hr class="my-4">
                <div text-align="center">
                    <button class="btn btn-primary active filter-button" data-filter="todo">Gallery</button>
                    <button class="btn btn-primary filter-button" data-filter="retratos">School</button>
                    <button class="btn btn-primary filter-button" data-filter="paisajes">Event</button>
                    <button class="btn btn-primary filter-button" data-filter="disenos">Old</button>

                    <div class="row">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-xs-6 thumb filter retratos">
                                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                                   data-image="images1/h.jpg"
                                   data-target="#image-gallery" id="im1">
                                    <img class="img-thumbnail"
                                         src="images1/h.jpg"
                                         alt="Retratos" id="im1">
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-xs-6 thumb filter retratos">
                                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                                   data-image="images1/n.jpg"
                                   data-target="#image-gallery" id="im1">
                                    <img class="img-thumbnail"
                                         src="images1/n.jpg"
                                         alt="Retratos" id="im1">
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-xs-6 thumb filter retratos">
                                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                                   data-image="images1/d.jpg"
                                   data-target="#image-gallery" id="im1">
                                    <img class="img-thumbnail"
                                         src="images1/d.jpg"
                                         alt="Retratos" id="im1">
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-xs-6 thumb filter paisajes">
                                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                                   data-image="images1/f.jpg"
                                   data-target="#image-gallery" id="im1">
                                    <img class="img-thumbnail"
                                         src="images1/f.jpg"
                                         alt="Paisaje" id="im1">
                                </a>
                            </div>

                            <div class="col-lg-4 col-md-4 col-xs-6 thumb filter paisajes">
                                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                                   data-image="images1/k.jfif"
                                   data-target="#image-gallery" id="im1">
                                    <img class="img-thumbnail"
                                         src="images1/k.jfif"
                                         alt="Paisaje" id="im1">
                                </a>
                            </div>

                            <div class="col-lg-4 col-md-4 col-xs-6 thumb filter paisajes">
                                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                                   data-image="images1/e.jfif"
                                   data-target="#image-gallery" id="im1">
                                    <img class="img-thumbnail"
                                         src="images1/e.jfif"
                                         alt="Paisaje" id="im1">
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-xs-6 thumb filter disenos">
                                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                                   data-image="images1/p.jpg"
                                   data-target="#image-gallery" id="im1">
                                    <img class="img-thumbnail"
                                         src="images1/p.jpg"
                                         alt="Paisaje" id="im1">
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-xs-6 thumb filter disenos">
                                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                                   data-image="images1/p.jpg"
                                   data-target="#image-gallery" id="im1">
                                    <img class="img-thumbnail"
                                         src="images1/p.jpg"
                                         alt="Paisaje" id="im1">
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-xs-6 thumb filter disenos">
                                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                                   data-image="images1/bg5.jpg"
                                   data-target="#image-gallery" id="im1">
                                    <img class="img-thumbnail"
                                         src="images1/bg5.jpg"
                                         alt="Paisaje" id="im1">
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-xs-6 thumb filter disenos">
                                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                                   data-image="images1/f.jpg"
                                   data-target="#image-gallery" id="im1">
                                    <img class="img-thumbnail"
                                         src="images1/f.jpg"
                                         alt="Paisaje" id="im1">
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-xs-6 thumb filter disenos">
                                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                                   data-image="images1/n.jpg"
                                   data-target="#image-gallery" id="im1">
                                    <img class="img-thumbnail"
                                         src="images1/n.jpg"
                                         alt="Paisaje" id="im1">
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-xs-6 thumb filter disenos">
                                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                                   data-image="images1/d.jpg"
                                   data-target="#image-gallery">
                                    <img class="img-thumbnail"
                                         src="images1/d.jpg"
                                         alt="Paisaje" id="im1">
                                </a>
                            </div>
                        </div>

                        <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="image-gallery-title"></h4>
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                                        </button>

                                        <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//video-->


    
<!--comman-->
    <div class="site-section ftco-subscribe-1" style="background-image: url('images/bg_1.jpg')">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7">
            <h2>Subscribe to us!</h2>
            <p>For Any Query</p>
          </div>
          <div class="col-lg-5">
            <form action="" class="d-flex">
              <input type="text" class="rounded form-control mr-2 py-3" placeholder="Enter your email">
              <button class="btn btn-primary rounded py-3 px-4" type="submit">Send</button>
            </form>
          </div>
        </div>
      </div>
    </div> 


    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <p class="mb-4"><img src="images/logo.png" alt="Image" class="img-fluid"></p>
            <p>The Institute focuses on inculcating the best in its student by providing an enviorment in which the students 
			discover and realize their potential with a view to empowering them to be responsible citizens and leders of the 
			nations and the global society of tomorrow.</p>  
        
          </div>
          <div class="col-lg-3">
            <h3 class="footer-heading"><span>Quick Links</span></h3>
            <ul class="list-unstyled">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="feedback.php">Feedback</a></li>
            </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Useful Links</span></h3>
              <ul class="list-unstyled">
                  <li><a href="admissions.php">Admission Enquery</a></li>
                  <li><a href="admissions.php">Admission Guidenence</a></li>
                  <li><a href="admissions.php">Fees Details</a></li>
                  <li><a href="admissions.php">Registration</a></li>
                  <li><a href="feedback.php">Give Feedback</a></li>
                  <li><a href="login.php">Login</a></li>
              </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Contact Us</span></h3>
              <ul class="list-unstyled">
                  <li class="l1" ><span class="icon-map"></span>     Mahanagar Lucknow</li>
                <li class="l1" ><span class="icon-phone"></span>    +91 7355568297</li>
                <li class="l1" ><span class="icon-userid"></span>     itsurendra1419@gmail.com</li>
              </ul>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="copyright">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> Institute Management Developed & Designed By <a href="index,php" target="_blank" >Academics Team</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    

  </div>
  <!-- .site-wrap -->


  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>




  <script src="js/main.js"></script>
<script>
    let modalId = $('#image-gallery');

    $(document)
        .ready(function () {

            loadGallery(true, 'a.thumbnail');

            //This function disables buttons when needed
            function disableButtons(counter_max, counter_current) {
                $('#show-previous-image, #show-next-image')
                    .show();
                if (counter_max === counter_current) {
                    $('#show-next-image')
                        .hide();
                } else if (counter_current === 1) {
                    $('#show-previous-image')
                        .hide();
                }
            }

            /**
             *
             * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
             * @param setClickAttr  Sets the attribute for the click handler.
             */

            function loadGallery(setIDs, setClickAttr) {
                let current_image,
                    selector,
                    counter = 0;

                $('#show-next-image, #show-previous-image')
                    .click(function () {
                        if ($(this)
                            .attr('id') === 'show-previous-image') {
                            current_image--;
                        } else {
                            current_image++;
                        }

                        selector = $('[data-image-id="' + current_image + '"]');
                        updateGallery(selector);
                    });

                function updateGallery(selector) {
                    let $sel = selector;
                    current_image = $sel.data('image-id');
                    $('#image-gallery-title')
                        .text($sel.data('title'));
                    $('#image-gallery-image')
                        .attr('src', $sel.data('image'));
                    disableButtons(counter, $sel.data('image-id'));
                }

                if (setIDs == true) {
                    $('[data-image-id]')
                        .each(function () {
                            counter++;
                            $(this)
                                .attr('data-image-id', counter);
                        });
                }
                $(setClickAttr)
                    .on('click', function () {
                        updateGallery($(this));
                    });
            }
        });

    // build key actions
    $(document)
        .keydown(function (e) {
            switch (e.which) {
                case 37: // left
                    if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
                        $('#show-previous-image')
                            .click();
                    }
                    break;

                case 39: // right
                    if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
                        $('#show-next-image')
                            .click();
                    }
                    break;

                default:
                    return; // exit this handler for other keys
            }
            e.preventDefault(); // prevent the default action (scroll / move caret)
        });

    //Filter Button

    $(document).ready(function(){

        $(".filter-button").click(function(){
            var value = $(this).attr('data-filter');

            if(value == "todo")
            {
                //$('.filter').removeClass('hidden');
                $('.filter').show('1000');
            }
            else
            {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                $(".filter").not('.'+value).hide('3000');
                $('.filter').filter('.'+value).show('3000');

            }
        });

    });

</script>

</body>

</html>