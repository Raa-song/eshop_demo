<!DOCTYPE html>
<?php
session_start();
?>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>

    <div class="col-12">
        <div class="row mt-1 mt-lg-2 pt-1">
            <div class="offset-lg-1 col-12 col-lg-4 align-self-start align-content-center">
                
                    <?php
                    if (isset($_SESSION["u"])) {
                        $user = $_SESSION["u"]["fname"];
                        
                    ?>
                        <span class="text-start label1"><b>Welcome</b> <?php echo $user ; ?></span>|
                        <span class="text-start label2">Help and Contact</span>|
                        <span class="text-start label2" onclick="signout();">Sign Out</span>
                    <?php
                    } else {
                    ?>
                        <span class="text-start label1"><b>Welcome</b></span>|
                        <a href="index.php">Hi! Sign in or Register</a>|
                                       <!-- /*text-start aligns the text to the start of the div*/  -->
                        <span class="text-start label2">Help and Contact</span>|
                    <?php
                    }
                    ?>
            </div>

            <div class="col-12 col-lg-4 col-md-4 offset-lg-3 align-self-end " >
                <div class="row mt-3 mt-lg-1 mb-1 px-lg-5 g-0 " style="text-align: center;">
                    <div class="col-1 col-md-2 offset-lg-3 col-lg-1 mt-0 mt-lg-0">
                        <span class="text-start label2" onclick="goToAddProduct();">Sell</span>
                    </div>
                    <div class="col-2 col-md-6 col-lg-6 p-0 myshop dropdown">
                        <button class="btn btn-outline-info dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            My eShop
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Wishlist</a></li>
                            <li><a class="dropdown-item" href="#">Purchase History</a></li>
                            <li><a class="dropdown-item" href="#">Message</a></li>
                            <li><a class="dropdown-item" href="#">Saved</a></li>
                            <li><a class="dropdown-item" href="sellerproductview.php">My Product</a></li>
                            <li><a class="dropdown-item" href="userprofile.php">My Profile</a></li>
                            <li><a class="dropdown-item" href="#">My Sellings</a></li>
                        </ul>
                    </div>
                    <div class="offset-1 offset-lg-0 col-1 col-md-3 col-lg-1  g-0 mt-0 mt-lg-0 carticon"></div>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
    <script src="bootstrap.bundle.js"></script>
</body>

</html>