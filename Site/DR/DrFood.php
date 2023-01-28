<?php 
    $path = "../";
    $page = "Food From Dominican Republic";
    $pagename = "DrFood";
    $nav = "DR";
    $img = "../assets/images/DrImgs/drfoodimg.jpg";
    $imgalt = "Picture of Rainbow";
    $imgid = "prfoodsimg";
    include($path.'assets/includes/header.php');
?> 

<div class="content"> 
<!--Second Container which contains Place text and image-->
    <h1 id="foods">Traditional Foods from the Dominican Republic</h1>
    <h2 id="food1">Flan:</h2>
    <div class="Food1">
        <p>Flan is a Dominican custard that is a very famous dessert. Flan is something that you definitely need to try out if you haven’t had it. The soft texture mixed with the sweet taste is too good to miss out on. </p>
        <img src="../assets/images/DrImgs/flan.jpeg" alt="Flan"  id="foodsimg2">
     
    </div>
    <h2 id="food2">Pernil:</h2>
    <div class="Food2">
        <p>Pernil is one of my favorite things to eat over the holidays. Every Christmas and Thanksgiving my family and I eat pernil con arroz blanco (pernil with white rice.) Pernil has a very special place in my heart and I recommend it to anyone who wants to expand their tastes. </p>
        <img src="../assets/images/DrImgs/pernil.jpeg" alt="Pernil" id="foodsimg3">
      
    </div>
    <h2 id="food3">Queso Frito:</h2>
    <div class="Food3">
        <p>Queso Frito isn’t really like a dish or anything, it's just fried cheese. But it’s still too good not to mention. It’s made by frying Tropical Queso Blanco (White cheese) until it's golden brown. And trust me it might not sound like a lot but the taste is amazing.</p>
        <img src="../assets/images/DrImgs/quesofrito.jpeg" alt="Queso Frito" id="foodsimg4">
    </div>
    </div>

    <?php 
    include($path.'assets/includes/comments.php'); 
    include($path.'assets/includes/footer.php'); 
    ?> 

</body>
</html>