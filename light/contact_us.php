<!doctype html>
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

    <style>

        .container-fluid {
            padding: 60px 50px;
        }
        .bg-grey {
            background-color: #f6f6f6;
        }

        .thumbnail img {
            width: 100%;
            height: 100%;
            margin-bottom: 10px;
        }

        .carousel-indicators li {
            border-color: #f4511e;
        }

        .item h4 {
            font-size: 19px;
            line-height: 1.375em;
            font-weight: 400;
            font-style: italic;
            margin: 70px 0;
        }
        .item span {
            font-style: normal;
        }


        .panel-footer h3 {
            font-size: 32px;
        }
        .panel-footer h4 {
            color: #aaa;
            font-size: 14px;
        }

        }
    </style>

    <title>Document</title>
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

<div class="container-fluid bg-grey">

    <div class="row">
        <div class="col-sm-5" style="margin-top: 5%">
            <p style="font-weight: bold ; font-size: large">Contact us and we'll get back to you within 24 hours.</p>
            <p><span class="glyphicon glyphicon-map-marker" style="font-weight: bold">Address:</span> Hallway road, manchester, UK</p>
            <p><span class="glyphicon glyphicon-phone"  style="font-weight: bold">Call Us:</span> 0123456789 </p>
            <p><span class="glyphicon glyphicon-envelope" style="font-weight: bold">Email:</span> abcd@a.ac.uk</p>
        </div>
        <div class="col-sm-7" style="">
            <div class="row">
                <img src="../assets/img/blog/shoes1.jpg" width="100%">
            </div>
        </div>

        </div>

    <h2 class="text-center" style="margin-top: 5%">CONTACT</h2>
    <form >
    <div class="col-sm-7" style="margin-left: 20%">
        <div class="row">
            <div class="col-sm-6 form-group">
                <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
            </div>
            <div class="col-sm-6 form-group">
                <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
            </div>
        </div>
        <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
        <div class="row">
            <div class="col-sm-12 form-group">
                <button class="btn btn-default pull-right" type="submit">Send</button>
            </div>
        </div>
    </div>
    </form>
</div>
</body>
</html>
