<?php
// session_start();
// require_once "php/connection.php";
// if (isset($_SESSION["username"])) {
    // $username = $_SESSION["username"];

    // $query = "select user_role from users where username = \"$username\" or email = \"$username\"";
    // $result = mysqli_query($conn, $query);
    // if ($result and $row = mysqli_fetch_array($result)) {
    //     if ($row["user_role"] === "customer") {

            ?>

            <!DOCTYPE html>
            <html lang="en">
            <head>
            <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
          crossorigin="anonymous">
    <link href="fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components"
          type="text/css"/>

            </head>
            <body>
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand/logo -->
   
    <!-- Links -->
    <ul class="navbar-nav">


  <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="about_us.php">About Us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="dashboard.php">Dashboard</a>
        </li>
        

        <li class="nav-item">
            <a class="nav-link" href="contact_us.php">Contact Us</a>
        </li>
    </ul>
</nav>
            <!--Navbar-->
            <!-- <nav class="navbar navbar-expand-lg navbar-light position-fixed w-100" style="z-index: 10;">
                <div style="width: 200px;text-align: center">
                    <img src="Images/logo1.png" alt="" height="40">
                </div>
                <button class="navbar-toggler ml-auto" style="background: white" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <form class="form-inline">
                        <div class="input-group">
                            <input type="text" class="form-control navsearch" aria-label="Search"
                                   aria-describedby="basic-addon1" oninput="getMatchingCamps(this);">
                            <div class="input-group-append">
                                <button class="btn btn-secondary" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="change-password.php">Change Password</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="php/logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav> -->
            <!--Navbar Ends-->

            <!--Header banner-->
            <section>
                <header>
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="../assets/img/blog/shoes2.jpg" alt="First slide" height="500">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="../assets/img/blog/shoes1.jpg" alt="Second slide" height="500">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"
                           style="position: absolute; top: 20px">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                           data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </header>
            </section>
            <!--Header Ends-->

            <!--Top  Category-->
            <section class="mb-4" style="margin-top: 30px">
                <div class="container">
                    <h4 class="text-uppercase ml-3 font-weight-bold mb-4">Shoes Categories</h4>
                </div>
                <div class="row container" style="margin: auto" id="camps-div">


                    <?php
                    // $query1 = "select * from camps";
                    // $result1 = mysqli_query($conn, $query1);
                    // if ($result1) {
                    //     while ($row1 = mysqli_fetch_array($result1)) {
                            ?>
                            <div class="col-md-4 mb-3">
                                <div class="card" style="padding: 15px">
                                    <h4 class="card-title categorytitle"><?/*=$row1["category"]*/?></h4>
                                    <div class="card-img mb-auto"><img class="" src="../assets/img/blog/shoes3.jpg" alt=""
                                                                       style="width: 100%" height="350"></div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <h6 class="font-weight-bold">Shoe Price: </h6>
                                            </div>
                                            <div class="col-lg-5">
                                                <h6>$<?/*=$row1["price"]*/?></h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <h6 class="font-weight-bold">Available at: </h6>
                                            </div>
                                            <div class="col-lg-5">
                                                <h6><?/*=$row1["start_date"]*/?></h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <h6 class="font-weight-bold">Shop Timings: </h6>
                                            </div>
                                            <div class="col-lg-5">
                                                <h6><?/*=$row1["timings"]*/?></h6>
                                            </div>
                                        </div>
                                        <a href="php/join-camp.php?camp_id=<?=$row1["id"]?>"><div class="btn btn-primary font-weight-bold">Get Shoe</div></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card" style="padding: 15px">
                                    <h4 class="card-title categorytitle"><?/*=$row1["category"]*/?></h4>
                                    <div class="card-img mb-auto"><img class="" src="../assets/img/blog/shoes5.jpg" alt=""
                                                                       style="width: 100%" height="350"></div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <h6 class="font-weight-bold">Price: 500$ </h6>
                                            </div>
                                            <div class="col-lg-5">
                                                <h6>$<?/*=$row1["price"]*/?></h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <h6 class="font-weight-bold">Avaialble at: 26 Feb </h6>
                                            </div>
                                            <div class="col-lg-5">
                                                <h6><?/*=$row1["start_date"]*/?></h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <h6 class="font-weight-bold">Shop Timings: Online</h6>
                                            </div>
                                            <div class="col-lg-5">
                                                <h6><?/*=$row1["timings"]*/?></h6>
                                            </div>
                                        </div>
                                        <a href="php/join-camp.php?camp_id=<?=$row1["id"]?>"><div class="btn btn-primary font-weight-bold">Get Shoe</div></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card" style="padding: 15px">
                                    <h4 class="card-title categorytitle"><?/*=$row1["category"]*/?></h4>
                                    <div class="card-img mb-auto"><img class="" src="../assets/img/blog/shoes4.jpg" alt=""
                                                                       style="width: 100%" height="350"></div>
                                         <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <h6 class="font-weight-bold">Price: 500$ </h6>
                                            </div>
                                            <div class="col-lg-5">
                                                <h6>$<?/*=$row1["price"]*/?></h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <h6 class="font-weight-bold">Avaialble at: 26 Feb </h6>
                                            </div>
                                            <div class="col-lg-5">
                                                <h6><?/*=$row1["start_date"]*/?></h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <h6 class="font-weight-bold">Shop Timings: Online</h6>
                                            </div>
                                            <div class="col-lg-5">
                                                <h6><?/*=$row1["timings"]*/?></h6>
                                            </div>
                                        </div>
                                        <a href="php/join-camp.php?camp_id=<?=$row1["id"]?>"><div class="btn btn-primary font-weight-bold">Get Shoe</div></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card" style="padding: 15px">
                                    <h4 class="card-title categorytitle"><?/*=$row1["category"]*/?></h4>
                                    <div class="card-img mb-auto"><img class="" src="../assets/img/blog/shoes7.jpg" alt=""
                                                                       style="width: 100%" height="350"></div>
                                         <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <h6 class="font-weight-bold">Price: 500$ </h6>
                                            </div>
                                            <div class="col-lg-5">
                                                <h6>$<?/*=$row1["price"]*/?></h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <h6 class="font-weight-bold">Avaialble at: 26 Feb </h6>
                                            </div>
                                            <div class="col-lg-5">
                                                <h6><?/*=$row1["start_date"]*/?></h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <h6 class="font-weight-bold">Shop Timings: Online</h6>
                                            </div>
                                            <div class="col-lg-5">
                                                <h6><?/*=$row1["timings"]*/?></h6>
                                            </div>
                                        </div>
                                        <a href="php/join-camp.php?camp_id=<?=$row1["id"]?>"><div class="btn btn-primary font-weight-bold">Get Shoe</div></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card" style="padding: 15px">
                                    <h4 class="card-title categorytitle"><?/*=$row1["category"]*/?></h4>
                                    <div class="card-img mb-auto"><img class="" src="../assets/img/blog/shoes8.jpg" alt=""
                                                                       style="width: 100%" height="350"></div>
                                         <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <h6 class="font-weight-bold">Price: 500$ </h6>
                                            </div>
                                            <div class="col-lg-5">
                                                <h6>$<?/*=$row1["price"]*/?></h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <h6 class="font-weight-bold">Avaialble at: 26 Feb </h6>
                                            </div>
                                            <div class="col-lg-5">
                                                <h6><?/*=$row1["start_date"]*/?></h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <h6 class="font-weight-bold">Shop Timings: Online</h6>
                                            </div>
                                            <div class="col-lg-5">
                                                <h6><?/*=$row1["timings"]*/?></h6>
                                            </div>
                                        </div>
                                        <a href="php/join-camp.php?camp_id=<?=$row1["id"]?>"><div class="btn btn-primary font-weight-bold">Get Shoe</div></a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        // }
                    // }
                    ?>
                </div>
            </section>

            <!--Top Category Ends-->

            <!--Footer-->
            <!-- <section class="bg-dark text-white text-center p-4">
                <footer>
                    <div>
                        <h6>All Rights Reserved, camp.com</h6>
                    </div>
                </footer>
            </section> -->
            <!--Footer Ends-->


            <script src="js/script.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
                    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
                    crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
                    integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
                    crossorigin="anonymous"></script>

            </body>
            </html>
            <?php
            // if(isset($_GET["camp_joined"])){
                ?>
                <!-- <script>
                    let url = window.location.href;
                    let parser = new URL(url);
                    let category = parser.searchParams.get("camp_joined");


                    alert("Request sent for \""+category+"\" Camp.");
                </script> -->
<?php
            // }


        // }
        //  else {
        //     header("Location: admin.php");
        // }
    // }
// } else {
//     header("Location: index.php");
// }

?>
