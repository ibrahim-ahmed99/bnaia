<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bnaia</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/all.min.css" />
    <link rel="stylesheet" href="./css/aos.css" />
    <link rel="stylesheet" href="./css/style.css" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />
</head>

<body>
    <div class="topnav">
        <div class="row mx-0">
            <div class="col-4 d-none d-md-flex"></div>
            <div class="col-6 col-md-4">
                <div class="language-section">
                    <div class="dropdown d-inline-block">
                        <button class="btn country-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="./img/egy-flag.jpg" alt="تحيا مصر" />
                Egypt
              </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </li>
                        </ul>
                    </div>

                    <span class="language-btn">عربي</span>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="social-links">
                    <a href="">CONTACT US </a>
                    <a href="">ABOUT US</a>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-xl">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" width="80" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

            <div class="collapse navbar-collapse py-4" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link  " aria-current="page" href="home.html">HOME
              </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="professionals.html">FIND PROFESSIONALS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn active" href="service.html">SERVIEC DIRECTORY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="catalogs.html">IDES CATALOGS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="article-blog.html">ARTICLE BLOG</a>
                    </li>
                </ul>

                <form class="d-flex align-items-xl-center flex-xl-row flex-column" role="search">
                    <div class="search-input">
                        <i class="search-icon fa-solid text-white fa-magnifying-glass"></i>
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                    </div>

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link with-icon" href="#">
                                <i class="fa-regular fa-heart icon"></i>WISHLIST
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link with-icon" href="#">
                                <i class="fa-regular fa-user icon"></i>PROFILE
                            </a>
                        </li>
                    </ul>

                    <button class="btn large-btn btn-red" type="submit">
              Start project
            </button>
                </form>
            </div>
        </div>
    </nav>
    <div class="faq">

        <button class="question">
                <h3>SERVICE NAME</h3>
            <h3 class="open">BROWSE ALL CATEGORIES <i class="fa-solid fa-plus"></i></h3>
            <h3 class="close d-none">CLOSE <i class="fa-solid fa-xmark"></i></h3>

            </button>
        <div class="answer result">

            <div class="row">
                <?php for ($i=0; $i <4 ; $i++) { ?>
                    <div class="col-lg-3 col-6">
                        <?php for ($j=0; $j <10 ; $j++) {  ?>
                            <a href="">
                                <h2>Air Conditioning Installation</h2>
                            </a>
                    <?php } ?>
                    </div>
                <?php } ?>


                <div class="col-lg-3 col-6">
                    <h1 class="specially-h"> B</h1>
                    <a href="">
                        <h2>Backsplash Intallation</h2>
                    </a>
                    <a href="">
                        <h2>Backsplash Intallation</h2>
                    </a>
                    <a href="">
                        <h2>Backsplash Intallation</h2>
                    </a>
                    <a href="">
                        <h2>Backsplash Intallation</h2>
                    </a>
                    <a href="">
                        <h2>Backsplash Intallation</h2>
                    </a>
                    <a href="">
                        <h2>Backsplash Intallation</h2>
                    </a>
                    <a href="">
                        <h2>Backsplash Intallation</h2>
                    </a>
                    <a href="">
                        <h2>Backsplash Intallation</h2>
                    </a>
                    <a href="">
                        <h2>Backsplash Intallation</h2>
                    </a>


                </div>
                <div class="col-lg-3 col-6">

                    <a href="">
                        <h2>Backsplash Intallation</h2>
                    </a>
                    <a href="">
                        <h2>Backsplash Intallation</h2>
                    </a>
                    <a href="">
                        <h2>Backsplash Intallation</h2>
                    </a>
                    <a href="">
                        <h2>Backsplash Intallation</h2>
                    </a>
                    <a href="">
                        <h2>Backsplash Intallation</h2>
                    </a>
                    <a href="">
                        <h2>Backsplash Intallation</h2>
                    </a>
                    <a href="">
                        <h2>Backsplash Intallation</h2>
                    </a>
                    <a href="">
                        <h2>Backsplash Intallation</h2>
                    </a>
                    <a href="">
                        <h2>Backsplash Intallation</h2>
                    </a>

                </div>
                <div class="col-lg-3 col-6">

                    <a href="">
                        <h2>Backsplash Intallation</h2>
                    </a>
                    <a href="">
                        <h2>Backsplash Intallation</h2>
                    </a>
                    <a href="">
                        <h2>Backsplash Intallation</h2>
                    </a>
                    <a href="">
                        <h2>Backsplash Intallation</h2>
                    </a>
                    <a href="">
                        <h2>Backsplash Intallation</h2>
                    </a>
                    <a href="">
                        <h2>Backsplash Intallation</h2>
                    </a>
                    <a href="">
                        <h2>Backsplash Intallation</h2>
                    </a>
                    <a href="">
                        <h2>Backsplash Intallation</h2>
                    </a>
                    <a href="">
                        <h2>Backsplash Intallation</h2>
                    </a>

                </div>
                <div class="col-lg-3 col-6">

                    <a href="">
                        <h2>Backsplash Intallation</h2>
                    </a>
                    <a href="">
                        <h2>Backsplash Intallation</h2>
                    </a>
                    <a href="">
                        <h2>Backsplash Intallation</h2>
                    </a>
                    <a href="">
                        <h2>Backsplash Intallation</h2>
                    </a>
                    <a href="">
                        <h2>Backsplash Intallation</h2>
                    </a>
                    <a href="">
                        <h2>Backsplash Intallation</h2>
                    </a>
                    <a href="">
                        <h2>Backsplash Intallation</h2>
                    </a>
                    <a href="">
                        <h2>Backsplash Intallation</h2>
                    </a>
                    <a href="">
                        <h2>Backsplash Intallation</h2>
                    </a>
                </div>

            </div>
        </div>


    </div>
    <div class="Contracting">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="dealer-content">
                        <h1>Floor plans</h1>
                    </div>
                </div>
                <div class="col-6">
                    <p>What looked like a small patch of purple grass, above five feet square, was moving across the sand in their direction. When it came near enough he perceived that it was not grass; there were no blades, but only purple roots. The roots
                        were revolving, for each small plant in the whole patch, like the spokes of a rimless wheel.</p>
                </div>
            </div>
        </div>

    </div>
    <div class="ideas-slider mb-5">
        <div class="professional-card wide">
            <a href=""> <img class="professional-card-img portfolio" src="img/portfolio/Mask Group 1.png" alt="professional-card-img" />
            </a>
            <div class="d-flex justify-content-between align-items-center mt-3">
                <a href="">
                    <h5 class="card-title">PROFESSIONAL NAME</h5>
                </a>
                <a class="like-link" href="javascript:void(0)">
                    <i class="fa-regular fa-heart"></i>
                </a>
                <a class="dislike-link d-none" href="javascript:void(0)">
                    <i class="fa-solid fa-heart " style="color: red;"></i>
                </a>
            </div>
            <p class="card-text">Type Name</p>
            <div>
                <span>4.7</span>
                <div class="rating">
                    <i class="checked fas fa-star icon"></i>
                    <i class="checked fas fa-star icon"></i>
                    <i class="checked fas fa-star icon"></i>
                    <i class="checked fa-regular fa-star-half-stroke icon"></i>
                </div>
            </div>

        </div>
        <div class="professional-card wide">
            <a href=""> <img class="professional-card-img portfolio" src="img/portfolio/Mask Group 2.png" alt="professional-card-img" />
            </a>
            <div class="d-flex justify-content-between align-items-center mt-3">
                <a href="">
                    <h5 class="card-title">PROFESSIONAL NAME</h5>
                </a>
                <a class="like-link" href="javascript:void(0)">
                    <i class="fa-regular fa-heart"></i>
                </a>
                <a class="dislike-link d-none" href="javascript:void(0)">
                    <i class="fa-solid fa-heart " style="color: red;"></i>
                </a>
            </div>
            <p class="card-text">Type Name</p>
            <div>
                <span>4.7</span>
                <div class="rating">
                    <i class="checked fas fa-star icon"></i>
                    <i class="checked fas fa-star icon"></i>
                    <i class="checked fas fa-star icon"></i>
                    <i class="checked fa-regular fa-star-half-stroke icon"></i>
                </div>
            </div>

        </div>
        <div class="professional-card wide">
            <a href=""> <img class="professional-card-img portfolio" src="img/portfolio/Mask Group 3.png" alt="professional-card-img" />
            </a>
            <div class="d-flex justify-content-between align-items-center mt-3">
                <a href="">
                    <h5 class="card-title">PROFESSIONAL NAME</h5>
                </a>
                <a class="like-link" href="javascript:void(0)">
                    <i class="fa-regular fa-heart"></i>
                </a>
                <a class="dislike-link d-none" href="javascript:void(0)">
                    <i class="fa-solid fa-heart " style="color: red;"></i>
                </a>
            </div>
            <p class="card-text">Type Name</p>
            <div>
                <span>4.7</span>
                <div class="rating">
                    <i class="checked fas fa-star icon"></i>
                    <i class="checked fas fa-star icon"></i>
                    <i class="checked fas fa-star icon"></i>
                    <i class="checked fa-regular fa-star-half-stroke icon"></i>
                </div>
            </div>

        </div>
        <div class="professional-card wide">
            <a href=""> <img class="professional-card-img portfolio" src="img/portfolio/Mask Group 4.png" alt="professional-card-img" />
            </a>
            <div class="d-flex justify-content-between align-items-center mt-3">
                <a href="">
                    <h5 class="card-title">PROFESSIONAL NAME</h5>
                </a>
                <a class="like-link" href="javascript:void(0)">
                    <i class="fa-regular fa-heart"></i>
                </a>
                <a class="dislike-link d-none" href="javascript:void(0)">
                    <i class="fa-solid fa-heart " style="color: red;"></i>
                </a>
            </div>
            <p class="card-text">Type Name</p>
            <div>
                <span>4.7</span>
                <div class="rating">
                    <i class="checked fas fa-star icon"></i>
                    <i class="checked fas fa-star icon"></i>
                    <i class="checked fas fa-star icon"></i>
                    <i class="checked fa-regular fa-star-half-stroke icon"></i>
                </div>
            </div>

        </div>
        <div class="professional-card wide">
            <a href=""> <img class="professional-card-img portfolio" src="img/portfolio/Mask Group 1.png" alt="professional-card-img" />
            </a>
            <div class="d-flex justify-content-between align-items-center mt-3">
                <a href="">
                    <h5 class="card-title">PROFESSIONAL NAME</h5>
                </a>
                <a class="like-link" href="javascript:void(0)">
                    <i class="fa-regular fa-heart"></i>
                </a>
                <a class="dislike-link d-none" href="javascript:void(0)">
                    <i class="fa-solid fa-heart " style="color: red;"></i>
                </a>
            </div>
            <p class="card-text">Type Name</p>
            <div>
                <span>4.7</span>
                <div class="rating">
                    <i class="checked fas fa-star icon"></i>
                    <i class="checked fas fa-star icon"></i>
                    <i class="checked fas fa-star icon"></i>
                    <i class="checked fa-regular fa-star-half-stroke icon"></i>
                </div>
            </div>

        </div>
        <div class="professional-card wide">
            <a href=""> <img class="professional-card-img portfolio" src="img/portfolio/Mask Group 2.png" alt="professional-card-img" />
            </a>
            <div class="d-flex justify-content-between align-items-center mt-3">
                <a href="">
                    <h5 class="card-title">PROFESSIONAL NAME</h5>
                </a>
                <a class="like-link" href="javascript:void(0)">
                    <i class="fa-regular fa-heart"></i>
                </a>
                <a class="dislike-link d-none" href="javascript:void(0)">
                    <i class="fa-solid fa-heart " style="color: red;"></i>
                </a>
            </div>
            <p class="card-text">Type Name</p>
            <div>
                <span>4.7</span>
                <div class="rating">
                    <i class="checked fas fa-star icon"></i>
                    <i class="checked fas fa-star icon"></i>
                    <i class="checked fas fa-star icon"></i>
                    <i class="checked fa-regular fa-star-half-stroke icon"></i>
                </div>
            </div>

        </div>
        <div class="professional-card wide">
            <a href=""> <img class="professional-card-img portfolio" src="img/portfolio/Mask Group 3.png" alt="professional-card-img" />
            </a>
            <div class="d-flex justify-content-between align-items-center mt-3">
                <a href="">
                    <h5 class="card-title">PROFESSIONAL NAME</h5>
                </a>
                <a class="like-link" href="javascript:void(0)">
                    <i class="fa-regular fa-heart"></i>
                </a>
                <a class="dislike-link d-none" href="javascript:void(0)">
                    <i class="fa-solid fa-heart " style="color: red;"></i>
                </a>
            </div>
            <p class="card-text">Type Name</p>
            <div>
                <span>4.7</span>
                <div class="rating">
                    <i class="checked fas fa-star icon"></i>
                    <i class="checked fas fa-star icon"></i>
                    <i class="checked fas fa-star icon"></i>
                    <i class="checked fa-regular fa-star-half-stroke icon"></i>
                </div>
            </div>

        </div>
        <div class="professional-card wide">
            <a href=""> <img class="professional-card-img portfolio" src="img/portfolio/Mask Group 4.png" alt="professional-card-img" />
            </a>
            <div class="d-flex justify-content-between align-items-center mt-3">
                <a href="">
                    <h5 class="card-title">PROFESSIONAL NAME</h5>
                </a>
                <a class="like-link" href="javascript:void(0)">
                    <i class="fa-regular fa-heart"></i>
                </a>
                <a class="dislike-link d-none" href="javascript:void(0)">
                    <i class="fa-solid fa-heart " style="color: red;"></i>
                </a>
            </div>
            <p class="card-text">Type Name</p>
            <div>
                <span>4.7</span>
                <div class="rating">
                    <i class="checked fas fa-star icon"></i>
                    <i class="checked fas fa-star icon"></i>
                    <i class="checked fas fa-star icon"></i>
                    <i class="checked fa-regular fa-star-half-stroke icon"></i>
                </div>
            </div>

        </div>
        <div class="professional-card wide">
            <a href=""> <img class="professional-card-img portfolio" src="img/portfolio/Mask Group 1.png" alt="professional-card-img" />
            </a>
            <div class="d-flex justify-content-between align-items-center mt-3">
                <a href="">
                    <h5 class="card-title">PROFESSIONAL NAME</h5>
                </a>
                <a class="like-link" href="javascript:void(0)">
                    <i class="fa-regular fa-heart"></i>
                </a>
                <a class="dislike-link d-none" href="javascript:void(0)">
                    <i class="fa-solid fa-heart " style="color: red;"></i>
                </a>
            </div>
            <p class="card-text">Type Name</p>
            <div>
                <span>4.7</span>
                <div class="rating">
                    <i class="checked fas fa-star icon"></i>
                    <i class="checked fas fa-star icon"></i>
                    <i class="checked fas fa-star icon"></i>
                    <i class="checked fa-regular fa-star-half-stroke icon"></i>
                </div>
            </div>

        </div>
    </div>
    <section class="our-categories  populer">
        <div class="container">
            <div class="heading with-btn mb-3">
                <h1 class="label">RELATED SERVICE

                </h1>
                <a class="btn " href="">View All</a>
            </div>
        </div>

        <div class="container">
            <div class="slider-wrapper">
                <span class="professional-prev-btn">
            <i class="fa-solid fa-chevron-left"></i>
          </span>

                <span class="professional-next-btn">
            <i class="fa-solid fa-chevron-right"></i>
          </span>

                <div class="professional-carousel mb-5">
                    <div class="professional-card">
                        <a href=""> <img class="professional-card-img" src="img/service/Mask Group 1.png" alt="professional-card-img" />
                        </a>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <a href="">
                                <h5 class="card-title">SERVICE NAME</h5>
                            </a>
                            <a class="like-link" href="javascript:void(0)">
                                <i class="fa-regular fa-heart"></i>
                            </a>
                            <a class="dislike-link d-none" href="javascript:void(0)">
                                <i class="fa-solid fa-heart " style="color: red;"></i>
                            </a>
                        </div>
                        <p class="card-text">Type Name</p>
                        <div>
                            <span>4.7</span>
                            <div class="rating">
                                <i class="checked fas fa-star icon"></i>
                                <i class="checked fas fa-star icon"></i>
                                <i class="checked fas fa-star icon"></i>
                                <i class="checked fa-regular fa-star-half-stroke icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="professional-card">
                        <a href=""><img class="professional-card-img" src="img/service/Mask Group 2.png" alt="professional-card-img" /></a>

                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <a href="">
                                <h5 class="card-title">SERVICE NAME</h5>
                            </a>
                            <a class="like-link" href="javascript:void(0)">
                                <i class="fa-regular fa-heart"></i>
                            </a>
                            <a class="dislike-link d-none" href="javascript:void(0)">
                                <i class="fa-solid fa-heart " style="color: red;"></i>
                            </a>
                        </div>
                        <p class="card-text">Type Name</p>
                        <div>
                            <span>4.7</span>
                            <div class="rating">
                                <i class="checked fas fa-star icon"></i>
                                <i class="checked fas fa-star icon"></i>
                                <i class="checked fas fa-star icon"></i>
                                <i class="checked fa-regular fa-star-half-stroke icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="professional-card">
                        <a href=""> <img class="professional-card-img" src="img/service/Mask Group 4.png" alt="professional-card-img" /></a>

                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <a href="">
                                <h5 class="card-title">SERVICE NAME</h5>
                            </a>
                            <a class="like-link" href="javascript:void(0)">
                                <i class="fa-regular fa-heart"></i>
                            </a>
                            <a class="dislike-link d-none" href="javascript:void(0)">
                                <i class="fa-solid fa-heart " style="color: red;"></i>
                            </a>
                        </div>
                        <p class="card-text">Type Name</p>
                        <div>
                            <span>4.7</span>
                            <div class="rating">
                                <i class="checked fas fa-star icon"></i>
                                <i class="checked fas fa-star icon"></i>
                                <i class="checked fas fa-star icon"></i>
                                <i class="checked fa-regular fa-star-half-stroke icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="professional-card">
                        <a href=""> <img class="professional-card-img" src="img/service/Mask Group 8.png" alt="professional-card-img" />
                        </a>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <a href="">
                                <h5 class="card-title">SERVICE NAME</h5>
                            </a>
                            <a class="like-link" href="javascript:void(0)">
                                <i class="fa-regular fa-heart"></i>
                            </a>
                            <a class="dislike-link d-none" href="javascript:void(0)">
                                <i class="fa-solid fa-heart " style="color: red;"></i>
                            </a>
                        </div>
                        <p class="card-text">Type Name</p>
                        <div>
                            <span>4.7</span>
                            <div class="rating">
                                <i class="checked fas fa-star icon"></i>
                                <i class="checked fas fa-star icon"></i>
                                <i class="checked fas fa-star icon"></i>
                                <i class="checked fa-regular fa-star-half-stroke icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="professional-card">
                        <a href=""> <img class="professional-card-img" src="img/service/Mask Group 1.png" alt="professional-card-img" />
                        </a>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <a href="">
                                <h5 class="card-title">SERVICE NAME</h5>
                            </a>
                            <a class="like-link" href="javascript:void(0)">
                                <i class="fa-regular fa-heart"></i>
                            </a>
                            <a class="dislike-link d-none" href="javascript:void(0)">
                                <i class="fa-solid fa-heart " style="color: red;"></i>
                            </a>
                        </div>
                        <p class="card-text">Type Name</p>
                        <div>
                            <span>4.7</span>
                            <div class="rating">
                                <i class="checked fas fa-star icon"></i>
                                <i class="checked fas fa-star icon"></i>
                                <i class="checked fas fa-star icon"></i>
                                <i class="checked fa-regular fa-star-half-stroke icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="professional-card">
                        <a href=""> <img class="professional-card-img" src="img/service/Mask Group 2.png" alt="professional-card-img" />
                        </a>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <a href="">
                                <h5 class="card-title">SERVICE NAME</h5>
                            </a>
                            <a class="like-link" href="javascript:void(0)">
                                <i class="fa-regular fa-heart"></i>
                            </a>
                            <a class="dislike-link d-none" href="javascript:void(0)">
                                <i class="fa-solid fa-heart " style="color: red;"></i>
                            </a>
                        </div>
                        <p class="card-text">Type Name</p>
                        <div>
                            <span>4.7</span>
                            <div class="rating">
                                <i class="checked fas fa-star icon"></i>
                                <i class="checked fas fa-star icon"></i>
                                <i class="checked fas fa-star icon"></i>
                                <i class="checked fa-regular fa-star-half-stroke icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="professional-card">
                        <a href=""> <img class="professional-card-img" src="img/service/Mask Group 4.png" alt="professional-card-img" />
                        </a>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <a href="">
                                <h5 class="card-title">SERVICE NAME</h5>
                            </a>
                            <a class="like-link" href="javascript:void(0)">
                                <i class="fa-regular fa-heart"></i>
                            </a>
                            <a class="dislike-link d-none" href="javascript:void(0)">
                                <i class="fa-solid fa-heart " style="color: red;"></i>
                            </a>
                        </div>
                        <p class="card-text">Type Name</p>
                        <div>
                            <span>4.7</span>
                            <div class="rating">
                                <i class="checked fas fa-star icon"></i>
                                <i class="checked fas fa-star icon"></i>
                                <i class="checked fas fa-star icon"></i>
                                <i class="checked fa-regular fa-star-half-stroke icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="professional-card">
                        <a href=""> <img class="professional-card-img" src="img/service/Mask Group 8.png" alt="professional-card-img" />
                        </a>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <a href="">
                                <h5 class="card-title">SERVICE NAME</h5>
                            </a>
                            <a class="like-link" href="javascript:void(0)">
                                <i class="fa-regular fa-heart"></i>
                            </a>
                            <a class="dislike-link d-none" href="javascript:void(0)">
                                <i class="fa-solid fa-heart " style="color: red;"></i>
                            </a>
                        </div>
                        <p class="card-text">Type Name</p>
                        <div>
                            <span>4.7</span>
                            <div class="rating">
                                <i class="checked fas fa-star icon"></i>
                                <i class="checked fas fa-star icon"></i>
                                <i class="checked fas fa-star icon"></i>
                                <i class="checked fa-regular fa-star-half-stroke icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="professional-card">
                        <a href=""> <img class="professional-card-img" src="img/service/Mask Group 4.png" alt="professional-card-img" />
                        </a>

                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <a href="">
                                <h5 class="card-title">SERVICE NAME</h5>
                            </a>
                            <a class="like-link" href="javascript:void(0)">
                                <i class="fa-regular fa-heart"></i>
                            </a>
                            <a class="dislike-link d-none" href="javascript:void(0)">
                                <i class="fa-solid fa-heart " style="color: red;"></i>
                            </a>
                        </div>
                        <p class="card-text">Type Name</p>
                        <div>
                            <span>4.7</span>
                            <div class="rating">
                                <i class="checked fas fa-star icon"></i>
                                <i class="checked fas fa-star icon"></i>
                                <i class="checked fas fa-star icon"></i>
                                <i class="checked fa-regular fa-star-half-stroke icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="carouselExample" class="carousel slide m-0 p-0">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/proslider/1.png" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
                <img src="./img/proslider/2.png" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
                <img src="./img/proslider/1.png" class="d-block w-100" alt="..." />
            </div>

        </div>
    </section>



    <section class="professional-listed">
        <div class="container">
            <div class="heading with-btn mb-3">
                <h1 class="label">PROFESSIONAL LISTED BY AREA</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="row">
                            <div class="col-2">
                                <a href="">
                                    <h2>NAME</h2>
                                </a>
                            </div>
                            <div class="col-8">
                                <p>Through founder and Creative Director Jonny Johansson’s interest in photography, art, architecture and contemporary culture, an alternative path has been found, turning Acne Studios into a well-respected creator of ready-to-wear,
                                    magazines, furniture, books and exhibitions. The collections are defined by Jonny Johansson’s signature juxtaposing design and attention to detail, with an </p>
                            </div>
                            <div class="col-2">
                                <a href=""> <img class="listed-img" src="img/portfolio/Mask Group 2.png" alt="">
                                </a>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="row">
                            <div class="col-2">
                                <a href="">
                                    <h2>NAME</h2>
                                </a>
                            </div>
                            <div class="col-8">
                                <p>Through founder and Creative Director Jonny Johansson’s interest in photography, art, architecture and contemporary culture, an alternative path has been found, turning Acne Studios into a well-respected creator of ready-to-wear,
                                    magazines, furniture, books and exhibitions. The collections are defined by Jonny Johansson’s signature juxtaposing design and attention to detail, with an </p>
                            </div>
                            <div class="col-2">
                                <a href=""> <img class="listed-img" src="img/portfolio/Mask Group 3.png" alt="">
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="row">
                            <div class="col-2">
                                <a href="">
                                    <h2>NAME</h2>
                                </a>
                            </div>
                            <div class="col-8">
                                <p>Through founder and Creative Director Jonny Johansson’s interest in photography, art, architecture and contemporary culture, an alternative path has been found, turning Acne Studios into a well-respected creator of ready-to-wear,
                                    magazines, furniture, books and exhibitions. The collections are defined by Jonny Johansson’s signature juxtaposing design and attention to detail, with an </p>
                            </div>
                            <div class="col-2">
                                <a href=""> <img class="listed-img" src="img/portfolio/Mask Group 1.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="more">
                <a class="btn lode" href="">LOAD MORE
                    <i class="fa-solid fa-angle-down"></i>
                </a>

            </div>
        </div>
    </section>





    <footer class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-2 mb-3">
                    <h2>Contact Us</h2>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <h5>Contact us</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-0 text-white">hello@bnaia.com</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-0 text-white">(972) 3-5603536</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-0 text-white">Alriyad Street 4 Rehovot 7670204, Saudi Arabia</a
                >
              </li>
            </ul>
          </div>

          <div class="col-6 col-md-2 mb-3">
            <ul class="nav flex-column">
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-white">About us</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-0 text-white">Help</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-0 text-white">Pricing</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-5 offset-md-1 mb-3">
                    <form>
                        <h5>Newsletter</h5>
                        <p>
                            Join Our Mailing List
                            <br /> Receive exclusive offers,News and more
                        </p>
                        <div class="d-flex flex-column flex-sm-row w-100 footer-input">
                            <input id="newsletter1" type="text" class="form-control" placeholder="Your address email*" />
                            <button class="footer-btn" type="button">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                <p>©2022 Real State. All rights reserved.</p>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3">
                        <a class="text-white text-decoration-none" href="#">Cookies</a>
                    </li>
                    <li class="ms-3">
                        <a class="text-white text-decoration-none" href="#">Privacy policy</a
              >
            </li>
          </ul>
        </div>
      </div>
    </footer>
</body>
<script src="./js/jquery-3.2.1.min.js"></script>
<script src="./js/slick.min.js"></script>
<script src="./js/all.min.js"></script>
<script src="./js/bootstrap.bundle.min.js"></script>
<script src="./js/aos.js"></script>

<script>
    var acc = document.getElementsByClassName("question");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var answer = this.nextElementSibling;
            if (answer.style.display === "block") {
                answer.style.display = "none";
            } else {
                answer.style.display = "block";
            }
        });
    }
</script>
<script>
    $(document).ready(function() {
        $('.like-link').click(function() {
            $(this).parent().find('.dislike-link').removeClass('d-none');
            $(this).addClass('d-none');
        });
        $('.dislike-link').click(function() {
            $(this).parent().find('.like-link').removeClass('d-none');
            $(this).addClass('d-none');
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('.open').click(function() {
            $(this).parent().find('.close').removeClass('d-none');
            $(this).addClass('d-none');
        });
        $('.close').click(function() {
            $(this).parent().find('.open').removeClass('d-none');
            $(this).addClass('d-none');
        });
    });
</script>

<script>
    $(document).ready(function() {
        AOS.init();

        $(".professional-carousel").slick({
            prevArrow: $(".professional-prev-btn"),
            nextArrow: $(".professional-next-btn"),
            slidesToShow: 1,
            mobileFirst: true,
            centerMode: false,
            responsive: [{
                breakpoint: 600,
                settings: {
                    centerMode: true,
                    slidesToShow: 1,
                },
            }, {
                breakpoint: 900,
                settings: {
                    centerMode: true,
                    slidesToShow: 2,
                },
            }, {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                },
            }, ],
        });

        $(".ideas-slider").slick({
            arrows: false,
            mobileFirst: true,
            centerMode: true,
            slidesToShow: 1,
            responsive: [{
                breakpoint: 600,
                settings: {
                    centerMode: true,
                    slidesToShow: 2,
                },
            }, {
                breakpoint: 900,
                settings: {
                    centerMode: true,
                    slidesToShow: 3,
                },
            }, {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                },
            }, ],
        });
    });
</script>

</html>
