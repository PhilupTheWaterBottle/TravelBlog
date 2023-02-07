<?php 
    $path = "../";
    $page = "Food From Puerto Rico";
    $pagename = "PrFood";
    $nav = "Puertorico";
    $img = "../assets/images/PrImgs/prdessert.jpg";
    $imgalt = "Picture of Paletados";
    $imgid = "prfoodsimg";
    include($path.'assets/includes/header.php');
?> 

<div class="content"> 
<!--Second Container which contains Place text and image-->
    <h1 id="foods">Traditional Foods from Puerto Rico</h1>
    <h2 id="food1">Tostones:</h2>
    <div class="Food1">
        <p>Tostones are delicious fried plantains that I’ve had the pleasure of eating since I was a kid. I usually would eat tostones with Mayoketchup which is mayonnaise mixed with ketchup and sometimes onions.</p>
        <img src="../assets/images/PrImgs/tostones.jpg" alt="Tostones"  id="foodsimg2">
     
    </div>
    <h2 id="food2">Tres Leches:</h2>
    <div class="Food2">
        <p>Tres Leches(Three Milks) is a sponge cake that is soaked in milk. Honestly, this is one of my favorite desserts of all time. The soft texture of the cake mixed with the taste of the milk is amazing. </p>
        <img src="../assets/images/PrImgs/tresleches.jpeg" alt="Tresleches" id="foodsimg3">
      
    </div>
    <h2 id="food3">Pina Colada:</h2>
    <div class="Food3">
        <p>Pina Coladas are Puerto Rico’s official drink and they are one of the best beverages accompanying a meal. With and without alcohol this is a drink that can be enjoyed by all regardless of age. I love having a Pina Colada or two whenever I visit Puerto Rico. </p>
        <img src="../assets/images/PrImgs/pinacolada.jpeg" alt="pinacolada" id="foodsimg4">
    </div>
       
    </div>

    <?php 
    include($path.'assets/includes/comments.php'); 
    include($path.'assets/includes/footer.php'); 
    ?> 

</body>
</html>