 <?php session_start(); 

define('CSSPATH', 'Static/CSS/'); //define css path
$cssItem = 'style.css';

if(!isset($_SESSION['username'])){
    header('location:loginReg.php');
}

include 'conn.php';
$tablename = $_SESSION['username'];

//$s = "select * from $tablename order by pexpiry WHERE pexpiry <= CURDATE()";
$s = "select * from $tablename WHERE pexpiry > CURDATE() order by pexpiry";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

$s2 = "select * from $tablename WHERE pexpiry <= CURDATE() order by pexpiry";
$result2 = mysqli_query($con, $s2);
$num2 = mysqli_num_rows($result2);

?> 

<html>

<head>
    <title>Add Products</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo (CSSPATH . "$cssItem"); ?>" type="text/css" />
</head>

<body>

    <div class="productBody">
    <!--  -->
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
                        <li class="nav-item">
                            <a class="nav-link" href="addProducts.php" style="font-size: 1.2rem;">Inventory</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="btn" href="index.php" role="button"
                                style="font-size: 1.2rem; border: 2px solid white; color: white;">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <div class="container">
        <?php
                    if(isset($_SESSION['status'])){
                        echo $_SESSION['status'];
                    unset($_SESSION['status']);
            }
        ?>
    </div>

    <div class="body-container">
        <div class="wrapper">
            <div class="container">
            <h3 align="center" class="mb-3">Try to have null Junk Score every month</h3>
                <?php
                if($num2 > 0){?>
                   
                <table class="table todoList">
                    <thead>
                        <!-- class="thead-dark">-->
                        <tr class="table-dark">
                            <th scope="col">Expired Product Name</th>
                            <th scope="col">Expiry Date</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = mysqli_fetch_assoc($result2)){ ?>



                        <tr class="table-secondary">
                            <td>
                                <?php echo $row['pname']; ?>
                            </td>
                            <td>
                                <?php echo $row['pexpiry']; ?>
                            </td>
                            <!--<td><a href="delete.php?pid=<?php echo $row['pid'];?>&tablename=<?php echo $_SESSION['username'];?>">Delete</a></td> -->
                        </tr>



                        <!--<div class="row">
                                            <!--<div class="col"><?php //echo $row['pid']; ?></div>-->
                        <!--  <div class="col"></div>
                                            <div class="col"></div>
                                            <!-- <div class="col"><a href="edit.php?id=<?php echo $row['pid']; ?>">Edit</a></div> -->
                        <!-- <div class="col">
                                            </div> -->

                        <?php
                    }
                }
                ?>
                    </tbody>
                </table>
            
                
                        <form class="form-inline" method="post" action="generate_pdf.php?tablename=<?php echo $_SESSION['username'];?>">
                        <button type="submit" id="pdf" name="generate_pdf" class="btn" style="font-size: 1.2rem; border: 2px solid black; margin-left: 42%" align="center"><i class="fa fa-pdf"" aria-hidden="true"></i>
                            Generate PDF</button>
                        </form>
        
            

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
</div>

    <!--JS for form-->
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

</html>