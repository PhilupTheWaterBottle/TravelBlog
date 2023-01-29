<?php 
    $path = "../";
    $page = "Places in Puerto Rico";
    $pagename = "PrPlace";
    $nav = "Puertorico";
    $img = "../assets/images/PrImgs/camuymap.jpeg";
    $imgalt = "Map of Camuy";
    $imgid = "prplacesimg";
    include($path.'assets/includes/header.php');
?> 

<div class="content"> 
<!--Second Container which contains Place text and image-->
    <h1 id="places">Places I've been to in Puerto Rico</h1>
    <h2 id="place1">Rio Camuy Cave Park:</h2>
    <div class="Place1">
        <p>The Rio Camuy Cave Park is a long network of interconnected network of caves and underground waterways. These caves were created by Rio Camuy (River Camuy) which is one of the largest underground rivers in the world. I found the Camuy caves to be extremely beautiful and a fun place to explore. I recommend going if you’re a fan of nature. They open pretty early at 8:30 am which is the time I went a few years ago. Learning about the history of the caves and seeing the natural rock formations and everything inside was breathtaking.</p>
        <img src="../assets/images/PrImgs/prcaves.jpeg" alt="Rio Camuy Cave Park"  id="prplacesimg2">
        
    </div>
    <h2 id="place2">Plaza de Recreo Luis Muñoz Marín:</h2>
    <div class="Place2">
        <p>This location is very special to me I’ve gone to this Plaza many times with my family before. It’s routine for my family and me to visit here whenever I go over to Puerto Rico. There’s many festivals and events that are held here. The Plaza was created in honor of Luis Muñoz Marín the first Puerto Rican Governor. He is very important in Puerto Rican political history. </p>
        <img src="../assets/images/PrImgs/prplaza.jpg" alt="Plaza De Recreo Luis Munoz Marin" id="prplacesimg3">
    
    </div>
    <h2 id="place3">ToroVerde Orocovis:</h2>
    <div class="Place3">
        <p>ToroVerde(Green Bull) is one of the largest Adventure parks in the Caribbean overlooking the beautiful mountains of Orocovis. I personally found Toroverde to be very exciting and beautiful at the same time. It was scary at first zip lining between really high mountains with no safety net or safe fall waiting beneath you. However, the ziplines are very safe and the workers are very nice and reassuring.</p>
        <img src="../assets/images/PrImgs/ToroVerde.JPG" alt="Me at ToroVerde" id="prplacesimg4">
    </div>    
    </div>


    <?php 
    include($path.'assets/includes/comments.php'); 
    include($path.'assets/includes/footer.php'); 
    ?> 

</body>
</html>