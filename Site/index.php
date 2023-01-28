<?php 
    $path = "./";
    $page = "Home";
    $pagename = "index";
    $nav = "altHome";
    $img = "./assets/images/aboutme.jpeg";
    $imgalt = "Picture of Nyc";
    $imgid = "aboutmejpg";
    include($path.'assets/includes/header.php');
?> 

<div class="content"> 
<!--Second Container which contains About me text and image-->
        <h1 id="about">About Me</h1>

        <p id="abouttext">In my 19 years, I have traveled to many places in the world. I have traveled to Puerto Rico, Dominican Republic, and many other locations. I enjoy traveling and learning about new cultures. Through my travels I have met many different people and have come across many different lifestyles. These lifestyles bring on different perspectives on life that have stuck with me till now. In the future I will continue to travel and learn more about the world. This travel blog has some of my favorite locations I have gone to. I will talk about some of the things I did there and some of the places I visited there. I will also discuss some of the countries I would love to go to in the future and the places I want to visit there.</p>

        <img src="assets/images/aboutme2.jpg" alt="My dad and I in Hong Kong"  id="aboutimg">
    </div>
        
    
    <?php 
    include($path.'assets/includes/comments.php'); 
    include($path.'assets/includes/footer.php'); 
    ?> 

</body>
</html>