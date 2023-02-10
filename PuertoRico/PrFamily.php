<?php 
    $path = "../";
    $page = "Puerto Rico Family";
    $pagename = "PrFamily";
    $nav = "Puertorico";
    $img = "../assets/images/PrImgs/Prfamilyimg.jpg";
    $imgalt = "Picture of my brother at Puerto Rican beach";
    $imgid = "prfamilyimg";
    include($path.'assets/includes/header.php');
?> 

<div class="content"> 
<!--Second Container which contains Family text and image-->
        <h1 id="family">Family in Puerto Rico</h1>

        <p id="familytext">A majority of my mother’s family lives in Puerto Rico. Mainly however my grandparents, aunt, and 3 cousins live in Puerto Rico. My family lives in Camuy and this is usually where I stay when I visit. Camuy is a very small area of Puerto Rico surrounded by many forests and wildlife. Where my family lives there’s many mountains and farms. Most of the roads are on the sides of mountains and hills, making for an interesting drive. Puerto Rico is much different from living in America. The community around where my family lives and in the country in general is very tight knit and strong.  </p>

        <div class="familyimg">
        <img src="../assets/images/PrImgs/prfamilyimg2.JPG" alt="My family at a bowling ally"  id="prfamilyimg2">
        </div>
    </div>

    <?php 
    //include($path.'assets/includes/comments.php'); 
    include($path.'assets/includes/footer.php'); 
    ?> 

    </body>
</html>