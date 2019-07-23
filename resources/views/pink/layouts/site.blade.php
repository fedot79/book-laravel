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

            <div class="col-md-2 left-menu">
                <p class="left-menu-cat">Categories</p>
                <nav >
                    <li id="all" class="act menu-head" >ALL</li>
                    <li class="all-child menu-head fict ">Fiction & Literature</li>
                    <li class="fict-child"><a class="cat" href="#">Children</a></li>
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
<!-- Footer Start-->
@yield('footer')
<!-- Footer End-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="{{ asset(env('THEME')) }}/slick/slick.min.js"></script>
<script src="{{ asset(env('THEME')) }}/js/main.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>