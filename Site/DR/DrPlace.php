<?php 
    $path = "../";
    $page = "Places in Dominican Republic";
    $pagename = "DrPlace";
    $nav = "DR";
    $img = "../assets/images/DrImgs/hyattzivamap.jpeg";
    $imgalt = "Map of HyattZiva";
    $imgid = "prplacesimg";
    include($path.'assets/includes/header.php');
?> 

<div class="content"> 
<!--Second Container which contains Place text and image-->
    <h1 id="places">Places I've been to in Dominican Republic</h1>
    <h2 id="place1">Hyatt Ziva Cap Cana:</h2>
    <div class="Place1">
        <p id="drplace1">Hyatt Ziva at Cap Cana was an amazing experience. Hyatt Ziva is an all-included family resort. With a wide variety of activities for all ages like infinity pools, live shows, and snorkeling. There is also Hyatt Zilara which is the Adult hotel next to Ziva. I had a lot of fun at the hotel’s water park and in the hotel in general. The location is very beautiful and unforgettable. </p>
        <img src="../assets/images/DrImgs/hyattziva.JPG" alt="Hyatt Ziva"  id="drplacesimg2">
        
    </div>
    <h2 id="place2">Fricolandia:</h2>
    <div class="Place2">
        <p id="drplace2">Fricolandia is single handedly one of the best places for nature lovers. The food coupled with the view was very nice, especially within a big group of people. I went here with my father and my ex-girlfriend’s family and we all had a good time enjoying the view while eating very delicious food.  </p>
        <img src="../assets/images/DrImgs/fricolandia.JPG" alt="My dad on the Fricolandia Swings" id="drplacesimg3">
    
    </div>
    <h2 id="place3">Scape Park:</h2>
    <div class="Place3">
        <p id="drplace3">Scape Park is an interesting mix between an adventure park and a history lesson. With many different attractions like ziplining, cave swimming, buggies, and much more. The cultural route is definitely a must for those who want to learn more about the history of the Dominican Republic and the island of Hispaniola as a whole. The route goes over the history of the Taino people, Spanish colonization, and the introduction of African slaves into society.</p>
        <img src="../assets/images/DrImgs/scape.jpg" alt="Group picture before Buggy ride at Scape Park" id="drplacesimg4">
    </div>
    </div>

    <?php 
    include($path.'assets/includes/comments.php'); 
    include($path.'assets/includes/footer.php'); 
    ?> 

</body>
</html>