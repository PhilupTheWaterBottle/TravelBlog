<?php 
    $path = "../";
    $page = "Places in China";
    $pagename = "ChinaPlace";
    $nav = "China";
    $img = "../assets/images/ChImgs/cantonfair.jpeg";
    $imgalt = "Map of Canton Fair";
    $imgid = "prplacesimg";
    include($path.'assets/includes/header.php');
?> 

<div class="content"> 
<!--Second Container which contains Place text and image-->
    <h1 id="places">Places I've been to in China</h1>
    <h2 id="place1">Canton Fair (China Import and Export Fair):</h2>
    <div class="Place1">
        <p id="drplace1">The Canton Fair is a giant tech fair that is hosted in China. I came here with my father and his friend when they were looking to buy a machine for making paper straws. The fair itself was massive and had tons of different types of new technologies. </p>
        <img src="../assets/images/ChImgs/canton.jpg" alt="Canton Fair"  id="drplacesimg2">
        
    </div>
    <h2 id="place2">Comic City Anime Zone:</h2>
    <div class="Place2">
        <p id="drplace2">Comic City is a subway stop that has a bunch of Anime and cartoon merchandise. Everything from Dragon Ball Z to One Piece was on display. If you’re an anime fan I recommend stopping by and shopping here. I ended up buying a Gogeta figure which was very high quality. I want to go back very badly.  </p>
        <img src="../assets/images/ChImgs/comic.jpeg" alt="Comic City" id="drplacesimg3">
    
    </div>
    </div>


    <?php 
    include($path.'assets/includes/comments.php'); 
    include($path.'assets/includes/footer.php'); 
    ?> 

</body>
</html>