<?php 
    $path = "../";
    $page = "Food from China";
    $pagename = "ChinaFood";
    $nav = "China";
    $img = "../assets/images/ChImgs/hotelview.jpg";
    $imgalt = "Picture of my hotel view";
    $imgid = "prfoodsimg";
    include($path.'assets/includes/header.php');
?> 

<div class="content"> 
<!--Second Container which contains Place text and image-->
    <h1 id="foods">Traditional Foods from China</h1>
    <h2 id="food1">Fried Rice:</h2>
    <div class="Food1">
        <p>Fried rice is a classic meal that I’m sure most people have had in the US. However, fried rice from China is even better. I'm not sure why but it is much more delicious. Not only is it easy to make but fried rice is also good alone or accompanied by other dishes.  </p>
        <img src="../assets/images/ChImgs/friedrice.jpeg" alt="Fried Rice"  id="foodsimg2">
     
    </div>
    <h2 id="food2">Peking Duck:</h2>
    <div class="Food2">
        <p>Eating Peking Duck was an interesting experience for me. I had never eaten duck before and it was something I found a bit odd at first. But it was delicious and I wanted to try it again. I remember eating this at the airport and loving it. </p>
        <img src="../assets/images/ChImgs/pekingduck.jpeg" alt="Peking Duck" id="foodsimg3">
      
    </div>
    <h2 id="food3">Soup Dumplings (Xiao Long Bao):</h2>
    <div class="Food3">
        <p>Soup dumplings are amazing to eat. Despite being small they are packed with a lot of flavors inside. Eating them is something interesting to learn yet fun to do. The way you eat soup dumplings is by holding the dumpling using the soup spoon, poking a hole, and then drinking the soup inside. After that, you can eat the dumpling-like you usually would.</p>
        <img src="../assets/images/ChImgs/dumpling.jpeg" alt="Soup Dumpling" id="foodsimg4">
    </div>
    </div>

    <?php 
    //include($path.'assets/includes/comments.php'); 
    include($path.'assets/includes/footer.php'); 
    ?> 

</body>
</html>