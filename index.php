<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe Louie</title>
    <link rel="icon" href="Images/cafe-louie-logo.png" type="image/icon type">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>

<?php if (isset($_SESSION['msg'])): ?>
    
      
    <div class="msg">
        <?php 
           
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        ?>
    </div>
<?php endif ?>


    <header id=header-bar-top class="  " style="  width: 100%;z-index: 3;">
        <div class="row text-white align-items-center text-center mx-auto ">
            <div class="col-1 col-sm-1 col-md-2 col-lg-2">
                <img class="logo-image" src="Images/cafe-louie-logo.png" alt="">
            </div>
            <div class="col-6 col-sm-9 col-md-4 col-lg-3 p-4  align-items-center text-center ">
                <h2 class="logo-text" >Cafe Louie</h2>
            </div>
            <div class="col-5 col-sm-2 col-md-6 col-lg-7 my-auto">
                <nav class="navbar navbar-expand-lg pr-0 pl-0 navbar-light  " style="text-decoration: none;">
                    <button class="navbar-toggler ml-auto  my-auto mr-2 " type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon "></span> 
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto ">
                            <li class="nav-item pl-3  ">
                                <button class="btn" style=" background-color: rgba(3, 3, 3, 0.7); border-color:white;"><a class="nav-link pr-0 pl-0 text-white" style="font-weight: 630; font-size: 1.2em;" href="index.html">Home</a></button>
                            </li>
                            <li class="nav-item pl-3  ">
                                <button class="btn" style=" background-color: rgba(3, 3, 3, 0.7); border-color:white;"><a class="nav-link pr-0 pl-0  text-white" style="font-weight: 630; font-size: 1.2em;" href="#About-us">About</a></button>
                            </li>
                            <li class="nav-item pl-3 ">
                                <button class="btn" style=" background-color: rgba(3, 3, 3, 0.7); border-color:white;"><a class="nav-link pr-0 pl-0 text-white" style="font-weight: 600; font-size: 1.2em;" href="#Menu">Menu</button></a>
                            </li>
                            <!--<li class="nav-item pl-3 ">
                          <button style="background-color: rgba(3, 3, 3, 0.7); border-color:white;"><a class="nav-link text-white " style="font-weight: 600; font-size: 1.2em;" href="#">Specials</button></a>
                        </li>//-->
                            <li class="nav-item pl-3 ">
                                <button class="btn" style="background-color: rgba(3, 3, 3, 0.7); border-color:white;"><a class="nav-link pr-0 pl-0 text-white" style="font-weight: 600; font-size: 1.2em;" href="#Gallery">Gallery</button></a>
                            </li>
                            <li class="nav-item pl-3 ">
                                <button class="btn text-center" style="background-color: rgba(3, 3, 3, 0.7); border-color:white;"><a class="nav-link pr-0 pl-0 text-white text-center" style="font-weight: 600; font-size: 1.2em;" href="#Contact-us">Contact</button></a>
                            </li>
                        </ul>
                    </div>
                </nav>

            </div>
        </div>
    </header>
     <!-- carousel start -->
    <section class=" align-items-center text-center " id="Home-section" style="z-index: 2;">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-12 pr-0 pl-0">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="Images/coffee-drinking.jpg" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Cappiccino</h5>
                                    <p>Enjoy the taste</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/coffee-cup.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/Machine-coffee.jpg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
     <!-- carousel ends -->
    <!-- About us starts -->
    <section id="About-us">
        <div class="container-fluid">
            <h2 class="text-center pt-5" style="font-family: Arial, Helvetica, sans-serif;">About Us</h2>
            <div class="row">
                <div class="col-12">
                    <p class="text-justify pl-2 pr-2">Cafe Louie opened in 2017 at A-M Road, Bypass junction, kothamangalam. We strive to provide the best experience to our guests. Cafe Louie is where people meet people, make conversations, and have a whole lot of fun over steaming cups of great coffee. In 2019, Cafe Louie expanded as a cafe and restaurant which offers a different cafe and restaurant items. We took franchise from CCD(Cafe Coffee Day), Baskin Robbins and Meriiboy. Our brotherhood in the restaurant is Zaawiah. Now cafe Louie is becoming the taste of the city. We are now ready to give franchise.</p>
                    <br>
                    <!-- <p class="text-justify">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                        using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web
                        sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)</p> -->

                </div>
            </div>
        </div>
    </section>
     <!-- about us ends -->
    <section>
        <div class="container-fluid p-4">
            <!-- menu -->
            <div class="agileits-services  py-5" id="Menu">
                <div class="container py-md-5">
                    <h3 class="w3ls-title  text-capitalize text-center"> Cafe Louie Menu</h3>
                    <!-- <h4 class="w3l-sub pt-3 pb-5 text-center">finely crafted beverages</h4> -->
                    <div class="row py-md-5">
                        <div class="menu-body order-md-1 order-2">
                            <!-- Section starts: Appetizers -->
                            <div class="menu-section">
                                <h3 class="menu-section-title">Frappuccinos & Coffees</h3>
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="row border-dot no-gutters">
                                        <div class="col-8 menu-item-name">
                                            <h6>Choco Mocha</h6>
                                        </div>
                                        <div class="col-4 menu-item-price text-right">
                                            <h6>Rs 130</h6>
                                        </div>
                                    </div>
                                    <div class="menu-item-description">
                                        <!-- <p>Lorem ipsum, dolor sit amet, consectetuer, adipiscing elit, sed diam nonummy.</p> -->
                                    </div>
                                </div>
                                <!-- Item ends -->
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="row border-dot no-gutters">
                                        <div class="col-8 menu-item-name">
                                            <h6>Death by Chocolate</h6>
                                        </div>
                                        <div class="col-4 menu-item-price text-right">
                                            <h6>Rs 110</h6>
                                        </div>
                                    </div>
                                    <div class="menu-item-description">
                                        <!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p> -->
                                    </div>
                                </div>
                                <!-- Item ends -->
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="row border-dot no-gutters">
                                        <div class="col-8 menu-item-name">
                                            <h6>Flutter Nutter</h6>
                                        </div>
                                        <div class="col-4 menu-item-price text-right">
                                            <h6>Rs 140</h6>
                                        </div>
                                    </div>
                                    <div class="menu-item-description">
                                        <!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p> -->
                                    </div>
                                </div>
                                <!-- Item ends -->
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="row border-dot no-gutters">
                                        <div class="col-8 menu-item-name">
                                            <h6>Cappuccino</h6>
                                        </div>
                                        <div class="col-4 menu-item-price text-right">
                                            <h6>Rs 40</h6>
                                        </div>
                                    </div>
                                    <div class="menu-item-description">
                                        <!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p> -->
                                    </div>
                                </div>
                                <!-- Item ends -->
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="row border-dot no-gutters">
                                        <div class="col-8 menu-item-name">
                                            <h6>Cold Coffee</h6>
                                        </div>
                                        <div class="col-4 menu-item-price text-right">
                                            <h6>Rs 60</h6>
                                        </div>
                                    </div>
                                    <div class="menu-item-description">
                                        <!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p> -->
                                    </div>
                                </div>
                                <!-- Item ends -->
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="row border-dot no-gutters">
                                        <div class="col-8 menu-item-name">
                                            <h6>Latte</h6>
                                        </div>
                                        <div class="col-4 menu-item-price text-right">
                                            <h6>Rs 20</h6>
                                        </div>
                                    </div>
                                    <div class="menu-item-description">
                                        <!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p> -->
                                    </div>
                                </div>
                                <!-- Item ends -->
                            </div>
                            <!-- Section ends: Appetizers -->
                            <div class="menu-bg1"></div>

                            <!-- Section starts: Appetizers -->
                            <div class="menu-section">
                                <h3 class="menu-section-title">Ice Cream Scoops & Shakes</h3>
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="row border-dot no-gutters">
                                        <div class="col-8 menu-item-name">
                                            <h6>Brownie Mood(2 piece cake)</h6>
                                        </div>
                                        <div class="col-4 menu-item-price text-right">
                                            <h6>Rs 80</h6>
                                        </div>
                                    </div>
                                    <div class="menu-item-description">
                                        <!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p> -->
                                    </div>
                                </div>
                                <!-- Item ends -->
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="row border-dot no-gutters">
                                        <div class="col-8 menu-item-name">
                                            <h6>Fruit Salad with Ice Cream</h6>
                                        </div>
                                        <div class="col-4 menu-item-price text-right">
                                            <h6>Rs 80</h6>
                                        </div>
                                    </div>
                                    <div class="menu-item-description">
                                        <!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p> -->
                                    </div>
                                </div>
                                <!-- Item ends -->
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="row border-dot no-gutters">
                                        <div class="col-8 menu-item-name">
                                            <h6>Butterscotch</h6>
                                        </div>
                                        <div class="col-4 menu-item-price text-right">
                                            <h6>Rs 50</h6>
                                        </div>
                                    </div>
                                    <div class="menu-item-description">
                                        <!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p> -->
                                    </div>
                                </div>
                                <!-- Item ends -->
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="row border-dot no-gutters">
                                        <div class="col-8 menu-item-name">
                                            <h6>Chocolate Brownie Shake </h6>
                                        </div>
                                        <div class="col-4 menu-item-price text-right">
                                            <h6>Rs 120</h6>
                                        </div>
                                    </div>
                                    <div class="menu-item-description">
                                        <!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p> -->
                                    </div>
                                </div>
                                <!-- Item ends -->
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="row border-dot no-gutters">
                                        <div class="col-8 menu-item-name">
                                            <h6>Laila Majnu Shake(Dates&Nuts)</h6>
                                        </div>
                                        <div class="col-4 menu-item-price text-right">
                                            <h6>Rs 110</h6>
                                        </div>
                                    </div>
                                    <div class="menu-item-description">
                                        <!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p> -->
                                    </div>
                                </div>
                                <!-- Item ends -->
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="row border-dot no-gutters">
                                        <div class="col-8 menu-item-name">
                                            <h6>Nutella Milk Shake</h6>
                                        </div>
                                        <div class="col-4 menu-item-price text-right">
                                            <h6>Rs 100</h6>
                                        </div>
                                    </div>
                                    <div class="menu-item-description">
                                        <!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p> -->
                                    </div>
                                </div>
                                <!-- Item ends -->
                            </div>
                            <div class="menu-bg2"></div>

                            <!-- Section ends: Appetizers -->
                        </div>
                        <div class="menu-body order-md-2 order-1">
                            <div class="menu-bg3"></div>
                            <!-- Section starts: Drinks -->
                            <div class="menu-section">
                                <h3 class="menu-section-title">Snacks</h3>
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="row border-dot no-gutters">
                                        <div class="col-8 menu-item-name">
                                            <h6>Black Forest</h6>
                                        </div>
                                        <div class="col-4 menu-item-price text-right">
                                            <h6>Rs 50</h6>
                                        </div>
                                    </div>
                                    <div class="menu-item-description">
                                        <!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p> -->
                                    </div>
                                </div>
                                <!-- Item ends -->
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="row border-dot no-gutters">
                                        <div class="col-8 menu-item-name">
                                            <h6>Chicken Sandwich</h6>
                                        </div>
                                        <div class="col-4 menu-item-price text-right">
                                            <h6>Rs 33</h6>
                                        </div>
                                    </div>
                                    <div class="menu-item-description">
                                        <!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p> -->
                                    </div>
                                </div>
                                <!-- Item ends -->
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="row border-dot no-gutters">
                                        <div class="col-8 menu-item-name">
                                            <h6>Chicken Roll</h6>
                                        </div>
                                        <div class="col-4 menu-item-price text-right">
                                            <h6>Rs 20</h6>
                                        </div>
                                    </div>
                                    <div class="menu-item-description">
                                        <!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p> -->
                                    </div>
                                </div>
                                <!-- Item ends -->
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="row border-dot no-gutters">
                                        <div class="col-8 menu-item-name">
                                            <h6>Cheesy Chicken Burger</h6>
                                        </div>
                                        <div class="col-4 menu-item-price text-right">
                                            <h6>Rs 120</h6>
                                        </div>
                                    </div>
                                    <div class="menu-item-description">
                                        <!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p> -->
                                    </div>
                                </div>
                                <!-- Item ends -->
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="row border-dot no-gutters">
                                        <div class="col-8 menu-item-name">
                                            <h6>Beef Burger</h6>
                                        </div>
                                        <div class="col-4 menu-item-price text-right">
                                            <h6>Rs 150</h6>
                                        </div>
                                    </div>
                                    <div class="menu-item-description">
                                        <!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p> -->
                                    </div>
                                </div>
                                <!-- Item ends -->
                                <h3 class="menu-section-title">Starters</h3>
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="row border-dot no-gutters">
                                        <div class="col-8 menu-item-name">
                                            <h6>Cheesy Fries</h6>
                                        </div>
                                        <div class="col-4 menu-item-price text-right">
                                            <h6>Rs 120</h6>
                                        </div>
                                    </div>
                                    <div class="menu-item-description">
                                        <!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p> -->
                                    </div>
                                </div>
                                <!-- Item ends -->
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="row border-dot no-gutters">
                                        <div class="col-8 menu-item-name">
                                            <h6>French Fries</h6>
                                        </div>
                                        <div class="col-4 menu-item-price text-right">
                                            <h6>Rs 80</h6>
                                        </div>
                                    </div>
                                    <div class="menu-item-description">
                                        <!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p> -->
                                    </div>
                                </div>
                                <!-- Item ends -->
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="row border-dot no-gutters">
                                        <div class="col-8 menu-item-name">
                                            <h6>Chicken Nuggets</h6>
                                        </div>
                                        <div class="col-4 menu-item-price text-right">
                                            <h6>Rs 120</h6>
                                        </div>
                                    </div>
                                    <div class="menu-item-description">
                                        <!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p> -->
                                    </div>
                                </div>
                                <!-- Item ends -->
                            </div>
                            <!-- Section ends: Drinks -->
                            <div class="menu-bg4"></div>

                            <!-- Section starts: Drinks -->
                            <div class="menu-section">
                                <h3 class="menu-section-title">Al-Faham</h3>
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="row border-dot no-gutters">
                                        <div class="col-8 menu-item-name">
                                            <h6>Normal</h6>
                                        </div>
                                        <div class="col-4 menu-item-price text-right">
                                            <h6>Rs 100</h6>
                                        </div>
                                    </div>
                                    <div class="menu-item-description">
                                        <!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p> -->
                                    </div>
                                </div>
                                <!-- Item ends -->
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="row border-dot no-gutters">
                                        <div class="col-8 menu-item-name">
                                            <h6>Kanthari</h6>
                                        </div>
                                        <div class="col-4 menu-item-price text-right">
                                            <h6>Rs 140</h6>
                                        </div>
                                    </div>
                                    <div class="menu-item-description">
                                        <!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p> -->
                                    </div>
                                </div>
                                <!-- Item ends -->
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="row border-dot no-gutters">
                                        <div class="col-8 menu-item-name">
                                            <h6>Full(Kanthari) </h6>
                                        </div>
                                        <div class="col-4 menu-item-price text-right">
                                            <h6>Rs 550</h6>
                                        </div>
                                    </div>
                                    <div class="menu-item-description">
                                        <!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p> -->
                                    </div>
                                </div>
                                <!-- Item ends -->
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="row border-dot no-gutters">
                                        <div class="col-8 menu-item-name">
                                            <h6>Full(Normal)</h6>
                                        </div>
                                        <div class="col-4 menu-item-price text-right">
                                            <h6>Rs 390</h6>
                                        </div>
                                    </div>
                                    <div class="menu-item-description">
                                        <!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p> -->
                                    </div>
                                </div>
                                <!-- Item ends -->
                                <h3 class="menu-section-title">Al-Faham-Mandhi</h3>
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="row border-dot no-gutters">
                                        <div class="col-8 menu-item-name">
                                            <h6>Kandhari Al-Faham Mandhi + Juice Jug</h6>
                                        </div>
                                        <div class="col-4 menu-item-price text-right">
                                            <h6>Rs 849</h6>
                                        </div>
                                    </div>
                                    <div class="menu-item-description">
                                        <!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p> -->
                                    </div>
                                </div>
                                <!-- Item ends -->
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="row border-dot no-gutters">
                                        <div class="col-8 menu-item-name">
                                            <h6>Peri Peri Al-Faham Mandhi(4 Portion) + Juice Jug</h6>
                                        </div>
                                        <div class="col-4 menu-item-price text-right">
                                            <h6>Rs 699</h6>
                                        </div>
                                    </div>
                                    <div class="menu-item-description">
                                        <!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p> -->
                                    </div>
                                </div>
                                <!-- Item ends -->
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="row border-dot no-gutters">
                                        <div class="col-8 menu-item-name">
                                            <h6>Peri Peri Al-Faham Mandhi</h6>
                                        </div>
                                        <div class="col-4 menu-item-price text-right">
                                            <h6>Rs 169</h6>
                                        </div>
                                    </div>
                                    <div class="menu-item-description">
                                        <!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p> -->
                                    </div>
                                </div>
                                <!-- Item ends -->
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="row border-dot no-gutters">
                                        <div class="col-8 menu-item-name">
                                            <h6>Kandhari Al-Faham Mandhi</h6>
                                        </div>
                                        <div class="col-4 menu-item-price text-right">
                                            <h6>Rs 199</h6>
                                        </div>
                                    </div>
                                    <div class="menu-item-description">
                                        <!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p> -->
                                    </div>
                                </div>
                                <!-- Item ends -->
                            </div>
                            <!-- Section ends: Drinks -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- //menu end -->

        </div>

    </section>

    <!-- //Gallery -->
    <section id="Gallery">
        <div class="container-fluid">
            <h3 class="text-center w3ls-title  text-capitalize text-center">Gallery</h3>
            <!--<div class="row">-->
            <!--<div class="col-md-12 ">-->
            <div id="mdb-lightbox-ui">
                <div class="mdb-lightbox">
                    <div class="row p-4">
                        <div class="col-md-4">
                            <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(145).jpg" data-size="1600x1067">
                                <img alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(145).jpg" class="img-fluid">
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(150).jpg" data-size="1600x1067">
                                <img alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(150).jpg" class="img-fluid" />
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(152).jpg" data-size="1600x1067">
                                <img alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(152).jpg" class="img-fluid" />
                            </a>
                        </div>
                    </div>
                    <div class="row p-4">

                        <div class="col-md-4">
                            <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(42).jpg" data-size="1600x1067">
                                <img alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(42).jpg" class="img-fluid" />
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(151).jpg" data-size="1600x1067">
                                <img alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(151).jpg" class="img-fluid" />
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(40).jpg" data-size="1600x1067">
                                <img alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(40).jpg" class="img-fluid" />
                            </a>
                        </div>
                    </div>
                    <div class="row p-4">

                        <div class="col-md-4">
                            <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(148).jpg" data-size="1600x1067">
                                <img alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(148).jpg" class="img-fluid" />
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(147).jpg" data-size="1600x1067">
                                <img alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(147).jpg" class="img-fluid" />
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(149).jpg" data-size="1600x1067">
                                <img alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(149).jpg" class="img-fluid" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--</div>-->
        </div>
    </section>
    <!-- //Gallery end -->
    <section id="Contact-us">
        <div class="container-fluid " style="background: gainsboro;">
            <h3 class="text-center w3ls-title  text-capitalize text-center p-3">Contact Us</h3>
            <div class="row">
                <div class="col-12 col-md-4"></div>
                <div class="col-12 col-md-4 p-4 bg-dark text-white ">
                    <!-- contact form grid -->
                    <div class="contact-top1">
                        <form action="process.php" method="POST" name="form" class=" f-color " >
                            <div class="form-group ">
                                <label for="contactusername">Name</label>
                                <input type="text " name="name" class="form-control " placeholder="Enter Your Name" id="contactusername " required>
                            </div>
                            <div class="form-group ">
                                <label for="contactemail ">Email</label>
                                <input type="email " name="email" class="form-control " placeholder="Enter Your Email" id="contactemail " required>
                            </div>
                            <div class="form-group ">
                                <label for="contactcomment ">Your Message</label>
                                <textarea name="msg" class="form-control " placeholder="Enter Your Message Here" rows="5 " id="contactcomment " required></textarea>
                            </div>
                            <input type="submit" name="submit" value="Send" class="btn btn-block bg-light mt-4 py-3 text-uppercase font-weight-bold">
                            
                            <!-- <button type="submit " name="submit " class="btn btn-block bg-light mt-4 py-3 text-uppercase font-weight-bold ">Submit</button> -->
                        </form>
                        <span id="sucessMessage">  </span>
                    </div>
                    <!--  //contact form grid ends here -->

                </div>
                <div class="col-12 col-md-4 "></div>
            </div>

        </div>
    </section>
    <section class="details-bg pt-3 mt-5 " style="background: mistyrose ">
        <div class="contact-main mx-auto py-5 ">
            <div class="row contact-left no-gutters ">
                <div class="col-md-6 align-self-center text-center p-md-0 p-3 ">
                    <h5 class="pb-3 text-capitalize ">opening time</h5>
                    <img src="Images/clock.jpg " class="img-fluid rounded-circle " alt=" " />
                </div>
                <div class="col-md-6 bg-list ">
                    <ul class="list-group list-group-flush ">
                        <li class="list-group-item border-0 ">Monday - Friday</li>
                        <li class="list-group-item border-0 font-weight-bold ">09:00 AM-11:00 PM</li>
                        <li class="list-group-item border-0 ">Saturday- Sunday</li>
                        <li class="list-group-item border-0 font-weight-bold ">10:00 AM-08:00 PM</li>
                    </ul>
                </div>
            </div>
            <div class="row contact-right no-gutters ">
                <div class="col-md-6 bg-add ">
                    <address class="p-3 ">
						<p class="c-txt ">Aluva - Munnar Road, Bypass junction, Kothamangalam , Kerala 686691.</p>
						<p>
							+91 7012532638</p>
						<p>
							<p>
								<a href="mailto:cafelouiekothamangalam@gmail.com " class="text-dark ">cafelouiekothamangalam@gmail.com</a>
							</p>
					</address>
                </div>
                <div class="col-md-6 align-self-center text-center p-md-0 p-3 ">
                    <h5 class="pb-3 text-capitalize ">Reservation</h5>
                    <!-- <img src="images/f2.jpg " class="img-fluid rounded-circle " alt=" " /> -->
                </div>
            </div>
        </div>
        <!-- //contact details container -->
    </section>
    <footer class="bg-dark ">
        <div class="container bg-dark text-white ">
            <div class="row ">
                <div class="col-12 text-center pt-4 ">
                    <h5 class="copyrights " style="text-decoration: none; font-family: Arial, Helvetica, sans-serif; font-size: 10px; ">Copyrights Cafe Louie</h5>
                </div>
            </div>
            <div class="row ">
                <div class="col-12 text-center p-3 ">
                    <a href="https://www.facebook.com/Cafe-Louie-121379841910389/"><img src="Images/facebook_logos_PNG19754.png " style="width: 3em;height: 3em; " alt=" "></a>
                    <a href="https://www.instagram.com/cafe_louie/?hl=en"><img src="Images/instagram_PNG.png " style="width: 2em;height: 2em; " alt=" "></a>

                </div>
            </div>
            <div class="row ">
                <div class="col-12 text-center  ">
                    <img src="Images/Baskin.png " style="width: 7em;height: 2em; margin-left: 2em;   " alt=" ">
                    <img src="Images/ccd.png" style="width: 3em;height: 5em; margin-left: 2em;  " alt="">
                    <img src="Images/meriiboy-logo.png" style="width: 8em;height: 4em;margin-left: 2em; " alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <h5 class="mt-3" style="font-family: Arial, Helvetica, sans-serif;">Brotherhood</h5>
                </div>
            </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="Images/zaawiah logo.PNG" style="width: 5em;height: 2em; margin-bottom: 2em; margin-top: 1em; " alt="">

                    </div>
                </div>
        </div>
    </footer>







    <script src="style.js "></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js " integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js " integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js " integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6 " crossorigin="anonymous "></script>
</body>

</html>