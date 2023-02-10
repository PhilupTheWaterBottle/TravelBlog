<?php 
    $path = "../";
    $page = "Family in Dominican Republic";
    $pagename = "DrFamily";
    $nav = "DR";
    $img = "../assets/images/DrImgs/dadandsis.JPG";
    $imgalt = "Picture of my dad, sister, and I";
    $imgid = "prfamilyimg";
    include($path.'assets/includes/header.php');
?> 

<div class="content"> 
<!--Second Container which contains Family text and image-->
        <h1 id="family">Family in Dominican Republic</h1>

        <p id="familytext">My father’s side of the family is from Santo Domingo. Santo Domingo is the capital of the Dominican Republic. My family is very unique and crazy. You never really know what they will do next which is what I love about them. I do feel kind of guilty though since the Dominican Republic is a poor country and every time I go over I’m reminded of my privilege of being an American. Poverty in the US is like being rich in the Dominican Republic and it makes me sad to see the poverty there. I’m exaggerating a little bit on the severity of things but it is a reality.  </p>

        <div class="familyimg">
        <img src="../assets/images/DrImgs/drfamily.JPG" alt="My family at a beach"  id="prfamilyimg2">
        </div>
    </div>

    <?php 
    //include($path.'assets/includes/comments.php'); 
    include($path.'assets/includes/footer.php'); 
    ?> 

</body>
</html>