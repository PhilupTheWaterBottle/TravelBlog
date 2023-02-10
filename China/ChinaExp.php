<?php 
    $path = "../";
    $page = "Experience in China";
    $pagename = "ChinaExp";
    $nav = "China";
    $img = "../assets/images/ChImgs/robot.jpeg";
    $imgalt = "Picture of a robot";
    $imgid = "prfamilyimg";
    include($path.'assets/includes/header.php');
?> 

<div class="content"> 
<!--Second Container which contains Family text and image-->
        <h1 id="family">My Experience and Overall Thoughts on my Visit to China</h1>

        <p id="familytext">China was a very interesting and unique place to visit. I didn’t understand the language or culture unlike Puerto Rico or the Dominican Republic. It was nice getting to learn about China while exploring it. I also was very interested in China’s government due to their government being vastly different from the US. Something that I did find very funny but interesting nonetheless was my interactions with locals. A lot of the locals have never seen anyone with dad’s or my skin color. So a lot of people were staring at us and taking pictures which I found funny. Also apparently the Caribbean isn’t too well known in China with conversations I had with some of the locals and business people during the Canton Fair; they all had thought the Dominican Republic was in Africa.   </p>

        <div class="familyimg">
        <img src="../assets/images/ChImgs/ironman.jpeg" alt="Iron Man vs Captain America Statue"  id="prfamilyimg2">
        </div>
    </div>

    <?php 
    //include($path.'assets/includes/comments.php'); 
    include($path.'assets/includes/footer.php'); 
    ?> 

</body>
</html>