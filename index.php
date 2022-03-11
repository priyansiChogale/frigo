<?php session_start();
 define('CSSPATH', 'Static/CSS/'); //define css path
 $cssItem = 'style.css'; //css item to display ?>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo (CSSPATH . "$cssItem"); ?>" type="text/css" />

    <title>Frigo</title>
</head>

<div>

    <header>
        <div class="container-fluid pb-3">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#">
                    <i class="mx-3"></i>Frigo</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-right text-light"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="mr-auto"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="Index.php">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about-section">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact-section">Contact Us</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#">LOGIN</a>
                        </li> -->
                        <li class="nav-item">
                            <div class="modal fade" id="exampleModalToggle" data-bs-backdrop="static" aria-hidden="true"
                                aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalToggleLabel">Login</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Login to use the product
                                        </div>
                                    <form action="validation.php" method="POST">
                                        <div class="mb-3 row">
                                            <label for="Username" class="col-sm-2 col-form-label ml-3">Username</label>
                                            <div class="col-sm-7">
                                                <input name="user" type="text" class="form-control" id="Username" required
                                                    >
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="inputPassword"
                                                class="col-sm-2 col-form-label ml-3">Password</label>
                                            <div class="col-sm-7">
                                                <input name="pwd" type="password" class="form-control" id="inputPassword" required>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-secondary">Login</button>
                                            <button class="btn btn-primary" data-bs-target="#exampleModalToggle2"
                                                data-bs-toggle="modal">New User</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="modal modal-dialog-scrollable" fade" id="exampleModalToggle2" data-bs-backdrop="static"
                                aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalToggleLabel2">Register</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Register yourself if you are a new user
                                        </div>
                                        <form action="registration.php" method="POST" id="RegForm">
                                        <div class="form-group">
                                            <label for="Username" class="form-label ml-3">Username</label>
                                            <input name="user" type="text" class="form-control ml-3 col-sm-5 col-form-label"
                                                id="Username" placeholder="Username" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="Email" class="form-label ml-3">Email address</label>
                                            <input name="email" type="email" class="form-control ml-3 col-sm-5 col-form-label"
                                                id="Email" placeholder="name@example.com" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="Password" class="form-label ml-3">Password</label>
                                            <input name="pwd" type="password" class="ml-3 col-sm-5 col-form-label form-control"
                                                id="Password" rows="3" placeholder="********" required></input>
                                        </div>
                                        <div class="mb-3">
                                            <label for="ConPassword" class="form-label ml-3">Confirm Password</label>
                                            <input name="cpwd" type="password" class="ml-3 col-sm-5 col-form-label form-control"
                                                id="ConPassword" rows="3" placeholder="********"></input>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-secondary">Register</button>
                                            <button class="btn btn-primary" data-bs-target="#exampleModalToggle"
                                                data-bs-toggle="modal">Already Registered</button>
                                        </div>
</form>
                                    </div>
                                </div>
                            </div>
                            <a class="btn" data-bs-toggle="modal" href="#exampleModalToggle"
                                role="button" style="font-size: 1.2rem; border: 2px solid white; color: white;">Log In / Register</a>
                        </li>
                    </ul>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Understood</button>
                            </div>
                        </div>
                    </div>
                </div>


            </nav>
            <div class="container px-3" >
            <?php
            if(isset($_SESSION['status'])){ 
                echo $_SESSION['status'];
                unset($_SESSION['status']);
            }
        ?>
    </div>
            
    </header>

    <!-- <div class="container success-alert" >
        
    </div> -->

    <div class="bg-frigo">
        <div class="container pb-5">
            <img class="frigo-bg-img" src='data:image/png;base64,<?php echo base64_encode(file_get_contents("Static/image/frigo-bg.png")); ?>'>
        </div>

    </div>

    <div class="about" id="about-section">
        <div class="container my-5">
            <div class="row featurette d-flex justify-content-center align-items-center">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Purpose - <span class="text-muted">Today’s wastage is tomorrow’s
                            shortage
                        </span>
                    </h2>
                    <p class="lead">For many people in the world, food waste has become a habit: buying more food than
                        we need at markets, letting fruits and vegetables spoil in the fridge. We at Frigo aim to solve
                        this problem.
                    </p>
                </div>
                <div class="col-md-5">
                    <img class="img-fluid" src='data:image/png;base64,<?php echo base64_encode(file_get_contents("Static/image/info1.png")); ?>'>
                </div>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="container my-5">
            <div class="row featurette d-flex justify-content-center align-items-center">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Frigo - <span class="text-muted">What we provide!</span>
                    </h2>
                    <p class="lead">Keep track of what is in your fridge with expiry dates and get help with recipes
                        that can be prepared using the items in the fridge.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img class="img-fluid" src='data:image/png;base64,<?php echo base64_encode(file_get_contents("Static/image/info2.png")); ?>'>
                </div>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="container my-5">
            <div class="row featurette d-flex justify-content-center align-items-center">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Experience! <span class="text-muted"> The Joy of
                            Giving</span></h2>
                    <p class="lead">You can get your monthly wastage reports using our very own unique feature.
                        Every month we will provide food to unpriviliged section of our society through your help.
                        In the form of incentives, if your monthy wastage score comes out to be null, we provide food in
                        your name.
                    </p>
                </div>
                <div class="col-md-5">
                <img class="img-fluid" src='data:image/png;base64,<?php echo base64_encode(file_get_contents("Static/image/info3.png")); ?>'>

                </div>
            </div>
        </div>
    </div>

    <footer id="contact-section">
        <div class="container-fluid p-0">
            <div class="row text-left">
                <div class="col-md-5 col-sm-5">
                    <h4 class="text-light">Contact Us</h4>
                    <p class="text-muted">Phone: +91 12345 67891</p>
                    <p class="text-muted">Email id: queries@frigo.com
                    </p>
                </div>
                <div class="col-md-5 col-sm-12">
                    <h4 class="text-light">New Offers!</h4>
                    <p class="text-muted">Stay Updated</p>
                    <form class="form-inline">
                        <div class="col pl-0">
                            <div class="input-group pr-5">
                                <input type="text" class="form-control bg-dark text-white"
                                    id="inlineFormInputGroupUsername2" placeholder="Email">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <button>
                                            <i class="fas fa-arrow-right"></i>
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-2 col-sm-12">
                    <h4 class="text-light">Follow Us</h4>
                    <p class="text-muted">Let us be social</p>
                    <div class="column text-light">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    </body>