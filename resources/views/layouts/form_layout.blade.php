<!DOCTYPE html5>
<html lang="en">

<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/index_style.css">
    <title>@yield('title')</title>

</head>

<body>
    <header>

        <nav class="nav2 navbar navbar-expand-lg fixed-top  p-2">
            <div class="container-fluid">
                <a class="navbar-brand mb-2" href="#">SAVE LIFE<span class="logo"></span></a>
                <button class="navbar-toggler mr-3" type="button" data-toggle="collapse"
                    data-target="#navbar-togglerDemo02" aria-controls="navbar-togglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line" style="margin-bottom: 0;"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbar-togglerDemo02">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active p-2">
                            <a class="nav-link " href="index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active p-2">
                            <a class="nav-link" href="donerRegs.html">Doner Registration <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active p-2">
                            <a class="nav-link" href="donerReq.html">Doner request <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active p-2">
                            <a class="nav-link " href="learn.html">Learn <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active bor">
                            <a class="nav-link" href="contact.html"> <span class="badge badge-secondary"> Contact
                                </span> <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>


    </header>

  <div class="container">
      @yield('content')
</div>

    <footer id="footer ">
        <div class="mainFooter pt-5 px-5">
            <div class="container-fluid py-3">
                <div class="row ">
                    <div class="col-lg-3 col-md-6 pb-2 pr-5">
                        <div>
                            <h4 class="text-white">About us</h4>
                            <div>
                                <p>I am saveLife Sharing diverse, remarkable, inspiring real-life stories is what the
                                    saveLife
                                    movement is all about. Help spread the word about the important role blood donations
                                    hold in our community.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 pb-2 ">
                        <div>
                            <h4 class="text-white">Opening Hours</h4>
                            <div>
                                <ul class="p-0">
                                    <li> <i class="fas fa-angle-right"> </i> Mon-Thu: 8:00 - 17:00</li>
                                    <li><i class="fas fa-angle-right"> </i> Wed: 8:00 - 19:00</li>
                                    <li><i class="fas fa-angle-right"> </i> Sat: 11:00 - 14:00</li>
                                    <li><i class="fas fa-angle-right"> </i> Tue: 8:00 - 19:00</li>
                                    <li><i class="fas fa-angle-right"> </i> Sun: Closed</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 pb-2">
                        <div>
                            <h4 class="text-white">Pages</h4>
                            <div>
                                <ul class="p-0">
                                    <li> <i class="fas fa-angle-right"></i> <a href="index.html"> Home</a> </li>
                                    <li> <i class="fas fa-angle-right"></i> <a href="donerRegs.html">Doner
                                            Registration</a> </li>
                                    <li> <i class="fas fa-angle-right"></i> <a href="donerReq.html">doner Request </a>
                                    </li>
                                    <li> <i class="fas fa-angle-right"></i> <a href="learn.html">Learn</a> </li>
                                    <li> <i class="fas fa-angle-right"></i> <a href="contact.html">Contact</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 pb-2">
                        <h4 class="text-white">Contact Details</h4>
                        <div>
                            <div> <i class="fas fa-map-marker-alt pr-2"></i> Manchester Road 123-78B, Silictown
                                7854MD, Great Country</div>
                            <div class="pt-3 phone "> <i class="fas fa-phone-alt pr-2"></i> +46 123 456 789</div>
                            <div class="pt-3 phone "> <i class="fas fa-envelope pr-2"></i>hello@saveLife.com</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="footerBottom pt-4 pb-3 px-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 ">
                        <p> Copyright 2020. All rights reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="soialIcon float-right px-5">
                            <a><i class="fab fa-facebook-f i1"></i> </a>
                            <a> <i class="fab fa-google i2"></i></a>
                            <a> <i class="fab fa-linkedin-in i3"></i> </a>
                            <a> <i class="fab fa-twitter i4"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </footer>







    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/index.js"></script>

</body>

</html>