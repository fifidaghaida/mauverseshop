<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Mauverse Shop - Orders</title>
        <!-- Favicon-->
        <link href="image/logom.svg" rel="shorcut icon">
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/itemset1.css" rel="stylesheet" />
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">    

    </head>
        <body>
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container px-4 px-lg-5">
                    <img src="image/logo.svg" alt="logo" class="logoimage" width="250px" height="75px">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="home.php">Home</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Artist</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#!">BTS</a></li>
                                    <li><a class="dropdown-item" href="#!">TXT</a></li>
                                    <li><a class="dropdown-item" href="#!">Enhypen</a></li>
                                    <li><hr class="dropdown-divider" /></li>
                                    <li><a class="dropdown-item" href="#!">More Artist</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Setting</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="user.php">Account</a></li>
                                    <li><hr class="dropdown-divider" /></li>
                                    <li><a class="dropdown-item" href="#!">About us</a></li>
                                    <li><a class="dropdown-item" href="#!">Help</a></li>
                                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <button class="btn btn-outline-dark" type="submit">
                                <i class="bi-cart-fill me-1"></i>
                                Cart
                                <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
        <body>
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Mauverse Shop</h1>
                    <p class="lead fw-normal text-white-50 mb-0">The global merchandise shop for fans around the world.</p>
                </div>
            </div>
        </header>
        <!-- Product section-->
        <div class="container">
        <form action="action_seminar.php" method="POST">
        <div class="container3"> 
            <div class="section-title">Shipping Addresses</div>                
            <div class="mb-3">
                 <label for="nrp" class="form-label">Address: </label>
                 <div class="col-sm-6">
                    <input type="text" name="product" id="product" class="form-control">
                </div>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Country/Region: : </label>
                <div class="col-sm-6">
                    <input type="text" name="qty" id="qty" class="form-control">
                </div>
            </div>
            <div class="mb-3">
                <label for="judul" class="form-label">City : </label>
                <div class="col-sm-6">
                    <input type="text" name="address" id="address" class="form-control">
                </div>
            </div>
            <div class="mb-3">
                <label for="judul" class="form-label">State, Province, or Region: </label>
                <div class="col-sm-6">
                    <input type="text" name="address" id="address" class="form-control">
                </div>
            </div>
            <div class="mb-3">
                <label for="judul" class="form-label">Postal Code: </label>
                <div class="col-sm-6">
                    <input type="text" name="address" id="address" class="form-control">
                </div>
            </div>
            <div class="mb-3">
                <label for="judul" class="form-label">Phone Number: </label>
                <div class="col-sm-6">
                    <input type="text" name="address" id="address" class="form-control">
                </div>
            </div>
            </div>
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                <div class="text-left"><a class="btn btn-outline-dark mt-auto" href="#">BUY</a></div>
            </div>
        </form>
    </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
