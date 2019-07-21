<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="{{ asset(env('THEME')) }}/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset(env('THEME')) }}/slick/slick-theme.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset(env('THEME')) }}/css/style.css">

</head>
<body>
<header>
    <div class="hdr-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-right">
                    <nav >
                        <li class="d-inline"><a href="">Sign in </a></li>
                        <li class="d-inline"><a href="">My Account</a></li>
                        <li class="d-inline"><a href="">Order Status</a></li>
                        <li class="d-inline"><a href="">Help</a></li>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="hdr-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-2 col-xl-2 text-left"><a href="index.html"><img src="img/logo.png" alt=""></a></div>
                <div class="col-sm-6 col-md-6  col-xl-6  text-center hdr-search">
                    <div class="input-group ">
                        <input type="text" class="form-control search" id="ft-search" placeholder="" aria-label="" aria-describedby="basic-addon1">
                        <div class="input-group-append">
                            <button class="btn btn-success" type="button" id="btn-search"><img src="img/search-icon.png" alt=""> Search</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-12  col-lg-12 col-xl-4 basket">
                    <div class="left">
                        <img src="img/hdr-basket.png" alt="">  &nbsp;Your cart <span>(2 items)</span><br>
                        <p class="price">$125.0 </p>
                        <button type="button" class="btn btn-dark">Checkout</button>
                    </div>
                    <div class=" right">
                        <img class="hdr-line" src="img/hdr-line.png" alt="">
                        <img class="star" src="img/star-icon.png" alt="">
                        <span class="badge badge-success ">20</span>
                        <p class="right-text">Wish list</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Menu Start-->
        @yield('menu')
    <!-- Header Menu End-->
</header>
<main>
    <div class="container">
        <div class="row">
            <!-- Slider Start-->
            @yield('slider')
            <!-- Slider End-->
            <div class="col-md-3   text-center deal">
                <span class="deal-head">Deal of the Month</span>
                <span class="deal-text">The Human Face of Big Data</span>
                <img class="deal-book" src="img/deal-book.png" alt="">
                <img class="deal-postament" src="img/deal-postament.png" alt=""><br>
                <span class="deal-disc">Save 45% Today</span><br>
                <span class="deal-price">$27.50</span><br>
                <button type="button" class="btn btn-success deal-btn">Buy now</button>

            </div>
            <div class="col-md-2 left-menu">
                <p class="left-menu-cat">Categories</p>
                <nav >
                    <li id="all" class="act menu-head" >ALL</li>
                    <li class="all-child menu-head fict ">Fiction & Literature</li>
                    <li class="fict-child"><a class="cat" href="category_page.html">Children</a></li>
                    <li class="fict-child "><a class="cat"  href="category_page.html">Science Fiction</a></li>
                    <li class="fict-child"><a href="category_page.html">Fantasy</a></li>
                    <li class="fict-child"><a  href="category_page.html">Mystery</a></li>
                    <li class="fict-child"><a href="category_page.html">Romance</a></li>
                    <li class="fict-child"><a href="category_page.html">Horror</a></li>
                    <li class="fict-child"><a href="category_page.html">Poetry</a></li>
                    <li class="fict-child"><a href="category_page.html">Literature</a></li>
                    <li class="fict-child"><a href="category_page.html">Crime</a></li>
                    <li class="all-child menu-head non ">Non - Fiction</li>
                    <li class="non-child"><a href="category_page.html">Comic</a></li>
                    <li class="non-child"><a href="category_page.html">Cook</a></li>
                    <li class="non-child"><a href="category_page.html">Psyhology</a></li>
                    <li class="non-child"><a href="category_page.html">Medical</a></li>
                    <li class="non-child"><a href="category_page.html">Art</a></li>
                    <li class="non-child"><a href="category_page.html">Photography</a></li>
                    <li class="non-child"><a href="category_page.html">Law</a></li>
                    <li class="non-child"><a href="category_page.html">History</a></li>
                    <li class="non-child"><a href="category_page.html">Business</a></li>
                    <li class="non-child"><a href="category_page.html">Computer</a></li>
                    <li class="all-child menu-head other ">Other</li>
                    <li class="other-child"><a href="category_page.html">Baby</a></li>
                    <li class="other-child"><a href="category_page.html">Sex</a></li>
                    <li class="other-child"><a href="category_page.html">Travel</a></li>
                    <li class="other-child"><a href="category_page.html">Science</a></li>
                    <li class="other-child"><a href="category_page.html">Sports</a></li>
                </nav>
            </div>
            <div class="col-md-10 tabs">
                <ul class="nav nav-tabs ">
                    <li class="nav-item ">
                        <button class="nav-link active tabs-head active-tab" id="bs" >Best Sellers</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link active tabs-head " id="na" >New Arrivals</button>
                    </li>
                    <li class="nav-item ">
                        <button class="nav-link active tabs-head" id="ub" >Used Books</button>
                    </li>
                    <li class="nav-item ">
                        <button class="nav-link active tabs-head" id="so" >Special Offers</button>
                    </li>
                </ul>
                <!-- Books Start-->
                @yield('content')
                <!-- Books End-->
            </div>

        </div>
    </div>
</main>
<footer>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-left footer-top-unit">
                    <p>Biography & True Stories</p>
                    <nav class="nav flex-column text-left">
                        <a class="nav-link " href="#!">General</a>
                        <a class="nav-link" href="#!">Diaries, Letters & Journals</a>
                        <a class="nav-link" href="#!">Memoirs</a>
                        <a class="nav-link " href="#!">True Stories</a>
                        <a class="nav-link" href="#!">Generic Exams</a>
                        <a class="nav-link" href="#!">GK Titles</a>
                        <a class="nav-link " href="#!">Medical Entrance</a>
                        <a class="nav-link" href="#!">Other Entrance Exams</a>
                        <a class="nav-link" href="#!">PG Entrance Examinations</a>
                        <a class="nav-link" href="#!">Self-help Titles</a>
                        <a class="nav-link" href="#!">Sociology</a>
                    </nav>
                </div>
                <div class="col-md-3 footer-top-unit">
                    <p>Professional & Reference </p>
                    <nav class="nav flex-column text-left">
                        <a class="nav-link " href="#!">Academic and Reference</a>
                        <a class="nav-link" href="#!">Business Trade</a>
                        <a class="nav-link" href="#!">Engineering and Computer Science</a>
                        <a class="nav-link " href="#!">Humanities, Social Sciences and Languages</a>
                        <a class="nav-link" href="#!">Introduction to Computers</a>
                        <a class="nav-link" href="#!">Science and Maths</a>
                        <a class="nav-link " href="#!">Trade Business</a>
                        <a class="nav-link" href="#!">English Language & Literature</a>
                        <a class="nav-link" href="#!">English Language Teaching</a>
                        <a class="nav-link" href="#!">Environment Awareness</a>
                        <a class="nav-link" href="#!">Environment Protection</a>
                    </nav>
                </div>
                <div class="col-md-3 footer-top-unit">
                    <p>Earth Sciences </p>
                    <nav class="nav flex-column text-left">
                        <a class="nav-link " href="#!">Earth Sciences</a>
                        <a class="nav-link" href="#!">Geography</a>
                        <a class="nav-link" href="#!">The Environment</a>
                        <a class="nav-link " href="#!">Regional & Area Planning</a>
                        <a class="nav-link" href="#!">Fantasy</a>
                        <a class="nav-link" href="#!">Gay</a>
                        <a class="nav-link " href="#!">Humorous</a>
                        <a class="nav-link" href="#!">Interactive</a>
                        <a class="nav-link" href="#!">Legal</a>
                        <a class="nav-link" href="#!">Lesbian</a>
                        <a class="nav-link" href="#!">Men'S Adventure</a>
                        <a class="nav-link" href="#!">Movie Or Television Tie-In</a>
                    </nav>
                </div>
                <div class="col-md-3 footer-top-unit">
                    <p>Mathematics</p>
                    <nav class="nav flex-column text-left">
                        <a class="nav-link " href="#!">Algebra</a>
                        <a class="nav-link" href="#!">Differential Equations</a>
                        <a class="nav-link" href="#!">Discrete Mathematics</a>
                        <a class="nav-link " href="#!">Fourier Analysis</a>
                        <a class="nav-link" href="#!">Numerical Analysis</a>
                        <a class="nav-link" href="#!">Probability</a>
                        <a class="nav-link " href="#!">Statistical Methods/data Analysis</a>
                        <a class="nav-link" href="#!">Stochastic And Random Processes</a>
                        <a class="nav-link" href="#!">Topology</a>
                        <a class="nav-link" href="#!">Statistics</a>
                        <a class="nav-link" href="#!">Mathematics</a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p> We accept all major Credit Card/Debit Card/Internet Banking </p>
                    <img src="img/mcard.png" alt="">
                    <img src="img/amexpr.png" alt="">
                    <img src="img/visa.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center"><p> Conditions of Use Privacy Notice © 2012-2013, Booksonline, Inc</p></div>
            </div>
        </div>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="{{ asset(env('THEME')) }}/slick/slick.min.js"></script>
<script src="{{ asset(env('THEME')) }}/js/main.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
