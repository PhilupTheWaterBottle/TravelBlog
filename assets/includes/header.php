<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $page ?> </title>
    <link rel="stylesheet" href="<?php echo $path?>assets/css/style.css">
    <script src="<?php echo $path ?>assets/scripts/script.js"></script>
    <?php 
        $pr = "/PuertoRico/";
        $dr = "/DR/";
        $china = "/China/";
        $navimgpath = "/assets/images/navimage/";
        $navend = ".png";
    ?>
</head>
<body>


<div class="container">
<!--First Container Slideshow images and Navigation-->
        <div class="Slideshow"> <!--Make into a JavaScript Slideshow in part 2-->
            <img src="<?php echo $img;?>" alt="<?php echo $imgalt ?>" id="<?php echo $imgid ?>"> 
        </div>


        <div class="imagecontent">
            <nav class="dropdown"> 
                <li>
                <a href="">
                    <img src="<?php echo $path.$navimgpath.$nav.$navend?>" alt="Navigation Image" id="header"> 
                </a>
                </li>

                <li>
                <a href="<?php echo $path ?>index.php">Home</a>
                </li>
                |
                <ul>
                <li>
                Puerto Rico
                <ul class="submenu">
                <li><a href="<?php echo $path.$pr?>PrFamily.php">Family</a></li>
                <li><a href="<?php echo $path.$pr?>PrPlace.php">Places</a></li>
                <li><a href="<?php echo $path.$pr?>PrFood.php">Foods</a></li>
                </ul>
                </li>
                </ul>
                |
                <ul>
                <li>
                Dominican Republic 
                <ul class="submenu">
                <li><a href="<?php echo $path.$dr?>DrFamily.php">Family</a></li>
                <li><a href="<?php echo $path.$dr?>DrPlace.php">Places</a></li>
                <li><a href="<?php echo $path.$dr?>DrFood.php">Foods</a></li>
                </ul>
                </li>
                </ul>

                |
                <ul>
                <li>
                China
                <ul class="submenu">
                <li><a href="<?php echo $path.$china?>ChinaExp.php">Experience</a></li>
                <li><a href="<?php echo $path.$china?>ChinaPlace.php">Places</a></li>
                <li><a href="<?php echo $path.$china?>ChinaFood.php">Foods</a></li>
                </ul>
                </li>
                </ul>
                |
                <li>
                <a href="https://docs.google.com/document/d/1yKma-G6SXkDK9UJrawDzZN751pieA5E2-W8PAs4qXwA/edit?usp=sharing">Work Cited</a>
                </li>
                |
                <li>
                <a href="https://docs.google.com/document/d/1SEsK8uvY4DLIIZE18owU0b_XFAqYEL9WBw9bfMG1_-o/edit?usp=sharing">Grade Page</a>
                </li>

                <li>
                    <button id ="dark"onclick="darkness()">DarkMode</button>
                </li>
            </nav>

        <nav class="mobile">
        <img src="<?php echo $path.$navimgpath.$nav?>" alt="Navigation Image" id="header"> 
            <a id="Homelink" href="<?php echo $path ?>index.php">Home</a>
            <button id="back" onclick="Back()">Back</button>
            <button id="PrButton" onclick="PR()">Puerto Rico</button>
                <a id="PrMobile" href="<?php echo $path.$pr?>PrFamily.php">Family From PR</a>
                <a id="PrMobile2" href="<?php echo $path.$pr?>PrPlace.php">Places In PR</a>
                <a id="PrMobile3" href="<?php echo $path.$pr?>PrFood.php">Foods From PR</a>
            <button id="DrButton" onclick="DR()">Dominican Republic</button>
                <a id="DrMobile" href="<?php echo $path.$dr?>DrFamily.php">Family From DR</a>
                <a id="DrMobile2" href="<?php echo $path.$dr?>DrPlace.php">Places From DR</a>
                <a id="DrMobile3" href="<?php echo $path.$dr?>DrFood.php">Foods From DR</a>
            <button id="ChinaButton" onclick="Ch()"> China </button>
                <a  id="ChinaMobile" href="<?php echo $path.$china?>ChinaExp.php">Experience</a>
                <a  id="ChinaMobile2" href="<?php echo $path.$china?>ChinaPlace.php">Places</a>
                <a  id="ChinaMobile3" href="<?php echo $path.$china?>ChinaFood.php">Foods</a>
            <a id="Worklink" href="https://docs.google.com/document/d/1yKma-G6SXkDK9UJrawDzZN751pieA5E2-W8PAs4qXwA/edit?usp=sharing">Work Cited</a>
        </nav>
        </div>

        
    
</div>