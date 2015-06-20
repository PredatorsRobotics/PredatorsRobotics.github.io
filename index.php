<?php // $con = mysqli_connect(localhost, $username, $password, predators); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.png">

    <title>GSL Robotics 4665</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">
    <link href="css/post.css" rel="stylesheet">
    <link href="css/calendar.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .table td {
            text-align: center;  
            vertical-align: middle;
        }
    </style>
	<style>
    	body::-webkit-scrollbar {
    	  width:10px;
    	}
    	
    	body::-webkit-scrollbar-thumb {
    	  background: #ffd331 !important;
    	}
    	body::-webkit-scrollbar {
          height: 16px;
          overflow: visible;
          width: 10px;
          background: #212021;
        }
	</style>

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Predators</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#teams">Teams</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#calendar_section">Calendar</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">The Predators is Glencoe-Silver Lake High School’s FIRST Robotics team</div>
                <div class="intro-heading">FRC 4665</div>
                <a href="#teams" class="page-scroll btn btn-xl">About Us</a>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="teams">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Teams</h2>
                    <h3 class="section-subheading text-muted">Our team is divided into four sub-teams.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-3">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-wrench fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Build</h4>
                    <p class="text-muted">If your on our team. Your in Build. Some more than others, but we all have a hand in it.</p>
                </div>
                <div class="col-md-3">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-pencil-square-o fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Design</h4>
                    <p class="text-muted">The Design team determines the stratagy of the robot for the game. They also design the robot on the computer to see if its possible, before manufacturing of the robot begins.</p>
                </div>
                <div class="col-md-3">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Programming</h4>
                    <p class="text-muted">The most awesome team on the team. They are in charge of programming the website, the robot, and quite a bit of wiring as well.</p>
                </div>
                <div class="col-md-3">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-video-camera fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Public Relations</h4>
                    <p class="text-muted">PR is in charge of our public image. Whather it is through videos, or talking to our sponsors. They are our best nerd translaters.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About</h2>
                    <h3 class="section-subheading text-muted">Our Rookie year was 2013, and we’re all amazed at how far we’ve come! Our first year, we didn’t show up to competition with a working robot, and we very nearly didn’t leave competition with a working robot. Since then, we’ve been involved in six competitions over two years, and have built several off-season robots for show as well.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/team13sq.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2012-2013</h4>
                                    <h4 class="subheading">Our Humble Beginnings</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">In 2013, the challenge was Ultimate Ascent, a competition involving throwing plastic Frisbees and climbing a metal-framed pyramid at the center of the field. As this was the rookie year for all except one of our mentors, it was very much a year of learning: our robot started as a climbing robot, but defaulted to defense for the competition.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/team14sq.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2013-2014</h4>
                                    <h4 class="subheading">Aerial Assist</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">In 2014, the challenge was Aerial Assist, in which alliances earned points by passing the yoga-ball-sized game balls across a truss and down the field to score in high or low goals. Our robot was designed as a passing robot after toying with and discarding the idea of a throwing robot. It was able to easily catch, pick up, and pass the game ball; and with the Mecanum wheels we used we were able to outmaneuver most other robots. We finished 39th out of the nearly 200 teams across the state of Minnesota, and were picked to move on to the finals in competition.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/team15sq.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2014-2015</h4>
                                    <h4 class="subheading">Recycle Rush</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">This year's challenge is Recycle Rush. Recycling bins are stacked, garbage cans are retrieved, and pool noodles are thrown in FIRST's latest high school robotics competition. Robot size rules are relaxed, leading to our largest robot yet, and we've introduced our first autonomous programming this year.</p>
                                </div>
                            </div>
                        </li>
                         <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/team15sq.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2015-2016</h4>
                                    <h4 class="subheading">What's Next?</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Here is to our future!</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <section id="calendar_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Calendar</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
                <div id="calendar"></div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Drop us a line and we'll get back to you.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright"><b></b>&copy;<?php echo date("Y"); ?></b> Predators Robotics</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a title="Twitter" href="https://twitter.com/GSLPredators"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a title="Facebook" href="https://www.facebook.com/GSL4665"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a title="Git Hub" href="https://github.com/PredatorsRobotics"><i class="fa fa-github"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <!--<li><a href="#privacyPolicyModal" data-toggle="modal">Privacy Policy</a>
                        </li>
                        <li><a href="#termsOfUse" data-toggle="modal">Terms of Use</a>
                        </li>-->
                        <li><img src="favicon.png" height="40px" /></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="privacyPolicyModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Privacy Policy</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <p>
                                <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.</p>
                            <ul class="list-inline">
                                <li>Date: July 2014</li>
                                <li>Client: Round Icons</li>
                                <li>Category: Graphic Design</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Privacy Policy</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Cal Modal -->
    <div id="fullCalModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span> <span class="sr-only">close</span></button>
                    <h4 id="modalTitle" class="modal-title"></h4>
                </div>
                <div id="modalBody" class="modal-body"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary"><a id="eventUrl" target="_blank">Event Page</a></button>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>
    
    <!-- Calendar JS -->
    <script src="js/calendar.js"></script>

</body>

</html>
