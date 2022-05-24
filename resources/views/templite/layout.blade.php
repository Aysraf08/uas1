<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>LAPORAN</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="xhtml/images/favicon.png">
    <link href="xhtml/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="xhtml/vendor/chartist/css/chartist.min.css">
	<!-- Vectormap -->
    <link href="xhtml/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="xhtml/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="xhtml/css/style.css" rel="stylesheet">
	<link href="xhtml/../../cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
	<link href="xhtml/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <!-- Pick date -->
    <link rel="stylesheet" href="xhtml/vendor/pickadate/themes/default.css">
    <link rel="stylesheet" href="xhtml/vendor/pickadate/themes/default.date.css">
    <!-- Material color picker -->
    <link href="xhtml/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
    <!-- Clockpicker -->
    <link href="xhtml/vendor/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
    <!-- Datatable -->
    <link href="xhtml/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">

</head>
<body>
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index-2.html" class="brand-logo">
                <img class="logo-abbr" src="xhtml/images/logo.png" alt="">
                <img class="logo-compact" src="xhtml/images/logo-text.png" alt="">
                <img class="brand-title" src="xhtml/images/logo-text.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

		<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Dashboard
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <img src="xhtml/images/profile/17.jpg" width="20" alt=""/>
									<div class="header-info">
										<span class="text-black">Oda Dink</span>
										<p class="fs-12 mb-0">Super Admin</p>
									</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="app-profile.html" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="email-inbox.html" class="dropdown-item ai-icon">
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a href="page-login.html" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a href="home">Home</a></li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Laporan</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="laporan">Input Data</a></li>
							<li><a href="laporan/data_laporan">Data Laporan</a></li>
						</ul>
                    </li>
                </ul>
				
				<div class="copyright">
					<p><strong>MSF</strong> ©All Right</p>
					<p>by Moch Syaifudin Farsya</p>
				</div>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            @yield('isi')
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/" target="_blank">DexignZone</a> 2020</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
        Support ticket button start
        ***********************************-->

        <!--**********************************
        Support ticket button end
        ***********************************-->


        </div>
        <!--**********************************
        Main wrapper end
        ***********************************-->

        <!--**********************************
        Scripts
        ***********************************-->
        <!-- Required vendors -->
        <script src="xhtml/vendor/global/global.min.js"></script>
        <script src="xhtml/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
        <script src="xhtml/vendor/chart.js/Chart.bundle.min.js"></script>
        <script src="xhtml/js/custom.min.js"></script>
        <script src="xhtml/js/deznav-init.js"></script>
        <script src="xhtml/vendor/owl-carousel/owl.carousel.js"></script>

        
    <script src="xhtml/vendor/moment/moment.min.js"></script>
    <script src="xhtml/vendor/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- asColorPicker -->
    <script src="xhtml/vendor/jquery-asColor/jquery-asColor.min.js"></script>
    <script src="xhtml/vendor/jquery-asGradient/jquery-asGradient.min.js"></script>
    <script src="xhtml/vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js"></script>
        
        <!-- pickdate -->
        <script src="xhtml/vendor/pickadate/picker.js"></script>
        <script src="xhtml/vendor/pickadate/picker.time.js"></script>
        <script src="xhtml/vendor/pickadate/picker.date.js"></script>
        <script src="xhtml/js/plugins-init/pickadate-init.js"></script>
        <!-- clockpicker -->
        <script src="xhtml/vendor/clockpicker/js/bootstrap-clockpicker.min.js"></script>
        <script src="xhtml/js/plugins-init/clock-picker-init.js"></script>
        <!-- Datatable -->
        <script src="xhtml/vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

        <!-- Material color picker -->
        <script src="xhtml/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>    
        <!-- Material color picker init -->
        <script src="xhtml/js/plugins-init/material-date-picker-init.js"></script>
        
        <!-- Jquery Validation -->
        <script src="xhtml/vendor/jquery-validation/jquery.validate.min.js"></script>
        <!-- Form validate init -->
        <script src="xhtml/js/plugins-init/jquery.validate-init.js"></script>
        
        <!-- Chart piety plugin files -->
        <script src="xhtml/vendor/peity/jquery.peity.min.js"></script>
        
        <!-- Dashboard 1 -->
        <script src="xhtml/js/dashboard/dashboard-1.js"></script>

        <script>
        function carouselReview(){
            /*  testimonial one function by = owl.carousel.js */
            jQuery('.testimonial-one').owlCarousel({
                loop:true,
                autoplay:true,
                margin:15,
                nav:false,
                dots: false,
                left:true,
                navText: ['', ''],
                responsive:{
                    0:{
                        items:1
                    },
                    800:{
                        items:2
                    },	
                    991:{
                        items:2
                    },			
                    
                    1200:{
                        items:2
                    },
                    1600:{
                        items:2
                    }
                }
            })		
            jQuery('.testimonial-two').owlCarousel({
                loop:true,
                autoplay:true,
                margin:15,
                nav:false,
                dots: true,
                left:true,
                navText: ['', ''],
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:2
                    },	
                    991:{
                        items:3
                    },			
                    
                    1200:{
                        items:3
                    },
                    1600:{
                        items:4
                    }
                }
            })					
        }
        jQuery(window).on('load',function(){
            setTimeout(function(){
                carouselReview();
            }, 1000); 
        });
        </script>
    </body>
</html>