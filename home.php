

<!DOCTYPE html>

<html>

<head>
    <title>eShop Home</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="resources/logo2.svg" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css" />

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />

</head>

<body>

    <div class="container-fluid">

        <div class="row">

            <!-- header start-->
            <?php
            require "header.php";
            ?>
            <!-- header end-->

            <hr class="hrbreak1" />

            <!-- logo & search tab start-->
            <div class="col-12 justify-content-center">
                <div class="row mb-3 g-1">
                    <div class="offset-0 offset-lg-1 col-12 col-md-12 col-lg-1 logoimg" style="background-position: center;"></div>
                    <div class="col-8 col-md-8 col-lg-6">
                        <div class="input-group input-group input-sizing  mt-3 mb-3">
                            <input type="text" class="form-control" aria-label="Text input with dropdown button" id="basic_search_txt" />
                            <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" ariaa-expanded="false">
                                Category
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#">Cell Phones & Accessories </a></li>
                                <li><a class="dropdown-item" href="#">Computers & Tablets</a></li>
                                <li><a class="dropdown-item" href="#">Cameras</a></li>
                                <li><a class="dropdown-item" href="#">Camera Drones</a></li>
                                <li><a class="dropdown-item" href="#">Video Game Consoles</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-1 ms-0 col-md-2 gap-1 d-grid">
                        <button class="btn btn-primary mt-3 searchbtn px-0 fs-5 pt-0" onclick="basicSearch();">Search</button>
                        <button class="btn btn-primary mt-3 searchicon ms-1" onclick="basicSearch();"><i class="bi bi-search"></i></button>
                    </div>
                    <div class=" offset-md-0 col-2 col-md-2 mt-4  ms-4 ms-md-0">
                        <a href="#" class="link-secondary link1 smlscrcn">Advanced</a>
                    </div>
                </div>
            </div>
            <!-- logo & search tab end-->

            <hr class="hrbreak1" />

            <!-- slide start-->
            <div class="col-12 d-none d-md-none d-lg-block">
                <div class="row">
                    <div id="carouselExampleCaptions" class="offset-2 col-8 carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="resources/slider images/posterimg.jpg" class="d-block posterimg1">
                                <div class="carousel-caption d-none d-md-block postercaption">
                                    <h5 class="postertitle">Welcome to eShop</h5>
                                    <p class="postertxt">The World's best online store by one click</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="resources/slider images/posterimg2.jpg" class="d-block posterimg1">
                            </div>
                            <div class="carousel-item">
                                <img src="resources/slider images/posterimg3.jpg" class="d-block posterimg1">
                                <div class="carousel-caption d-none d-md-block postercaption1">
                                    <h5 class="postertitle">Be Free...</h5>
                                    <p class="postertxt">Experience the Lowest Delivery Costs With Us</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- slide end-->

            <!-- product title view start-->
            <div class="col-12">
                <a href="#" class="link-dark link2">Cellphones & Accessories</a>&nbsp;&nbsp;
                <a href="#" class="link-dark link3">See All &rarr;</a>
            </div>
            <!-- product title view end-->


            <!-- product view start -->
            <div class="col-12 mb-5">
                <div class="row border border-primary">

                    <div class=" col-12 px-5">
                        <div class="row px-5 justify-content-center ">

                            <div class="card  mt-1 mb-1 col-6 col-lg-2 mx-1 " style="width: 15rem;">
                                <img src="resources/mobile images/vivo_y20.svg" class="card-img-top cardTopImg">
                                <div class="card-body">
                                    <h5 class="card-title">Vivo Y20 <span class="badge bg-info">New</span> </h5>
                                    <span class="card-text text-primary">Rs. 225000.00</span>
                                    <br />
                                    <span class="card-text text-warning">In Stock</span>
                                    <input class="form-control mb-1" type="number" min="1" value="1">
                                    <a href="#" class="btn btn-success  col-12">Buy Now</a>
                                    <a href="#" class="btn btn-danger  mt-1 col-12">Add to Cart</a>
                                </div>
                            </div>

                            <div class="card mt-1 mb-1 col-6 col-lg-2 mx-1" style="width: 15rem;">
                                <img src="resources/mobile images/vivo_y20.svg" class="card-img-top cardTopImg">
                                <div class="card-body">
                                    <h5 class="card-title">Vivo Y20 <span class="badge bg-info">New</span> </h5>
                                    <span class="card-text text-primary">Rs. 225000.00</span>
                                    <br />
                                    <span class="card-text text-warning">In Stock</span>
                                    <input class="form-control mb-1" type="number" min="1" value="1">
                                    <a href="#" class="btn btn-success col-12">Buy Now</a>
                                    <a href="#" class="btn btn-danger mt-1 col-12">Add to Cart</a>
                                </div>
                            </div>


                            <div class="card mt-1 mb-1 col-6 col-lg-2 mx-1" style="width: 15rem;">
                                <img src="resources/mobile images/vivo_y20.svg" class="card-img-top cardTopImg">
                                <div class="card-body">
                                    <h5 class="card-title">Vivo Y20 <span class="badge bg-info">New</span> </h5>
                                    <span class="card-text text-primary">Rs. 225000.00</span>
                                    <br />
                                    <span class="card-text text-warning">In Stock</span>
                                    <input class="form-control mb-1" type="number" min="1" value="1">
                                    <a href="#" class="btn btn-success col-12">Buy Now</a>
                                    <a href="#" class="btn btn-danger mt-1 col-12">Add to Cart</a>
                                </div>
                            </div>

                            <div class="card mt-1 mb-1 col-6 col-lg-2 mx-1" style="width: 15rem;">
                                <img src="resources/mobile images/vivo_y20.svg" class="card-img-top cardTopImg">
                                <div class="card-body">
                                    <h5 class="card-title">Vivo Y20 <span class="badge bg-info">New</span> </h5>
                                    <span class="card-text text-primary">Rs. 225000.00</span>
                                    <br />
                                    <span class="card-text text-warning">In Stock</span>
                                    <input class="form-control mb-1" type="number" min="1" value="1">
                                    <a href="#" class="btn btn-success col-12">Buy Now</a>
                                    <a href="#" class="btn btn-danger mt-1 col-12">Add to Cart</a>
                                </div>
                            </div>

                            <div class="card  mt-1 mb-1 col-6 col-lg-2 mx-1" style="width: 15rem;">
                                <img src="resources/mobile images/vivo_y20.svg" class="card-img-top cardTopImg">
                                <div class="card-body">
                                    <h5 class="card-title">Vivo Y20 <span class="badge bg-info">New</span> </h5>
                                    <span class="card-text text-primary">Rs. 225000.00</span>
                                    <br />
                                    <span class="card-text text-warning">In Stock</span>
                                    <input class="form-control mb-1" type="number" min="1" value="1">
                                    <a href="#" class="btn btn-success col-12">Buy Now</a>
                                    <a href="#" class="btn btn-danger mt-1 col-12">Add to Cart</a>
                                </div>
                            </div>

                            <div class="card  mt-1 mb-1 col-6 col-lg-2 mx-1" style="width: 15rem;">
                                <img src="resources/mobile images/vivo_y20.svg" class="card-img-top cardTopImg">
                                <div class="card-body">
                                    <h5 class="card-title">Vivo Y20 <span class="badge bg-info">New</span> </h5>
                                    <span class="card-text text-primary">Rs. 225000.00</span>
                                    <br />
                                    <span class="card-text text-warning">In Stock</span>
                                    <input class="form-control mb-1" type="number" min="1" value="1">
                                    <a href="#" class="btn btn-success col-12">Buy Now</a>
                                    <a href="#" class="btn btn-danger mt-1 col-12">Add to Cart</a>
                                </div>
                            </div>

                            <div class="card  mt-1 mb-1 col-6 col-lg-2 mx-1 " style="width: 15rem;">
                                <img src="resources/mobile images/vivo_y20.svg" class="card-img-top cardTopImg">
                                <div class="card-body">
                                    <h5 class="card-title">Vivo Y20 <span class="badge bg-info">New</span> </h5>
                                    <span class="card-text text-primary">Rs. 225000.00</span>
                                    <br />
                                    <span class="card-text text-warning">In Stock</span>
                                    <input class="form-control mb-1" type="number" min="1" value="1">
                                    <a href="#" class="btn btn-success  col-12">Buy Now</a>
                                    <a href="#" class="btn btn-danger  mt-1 col-12">Add to Cart</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- product view end-->


        <!-- footer -->
        <?php
        require "footer.php";
        ?>
        <!-- footer -->


    </div>

    </div>



    <script src="script.js"></script>
    <!-- <script src="bootstrap.bundle.js"></script> -->

</body>

</html>