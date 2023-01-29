<?php
	include($path."dbCon.php");
	if ($mysqli)
	{
		if(!empty($_GET['fullname']) && !empty($_GET['inputComment']) && !empty($_GET['inputRating'])){
	
			
			$stmt = $mysqli->prepare("INSERT INTO `CommentSection` (`Name`, `Comment`,`Rating`) VALUES (?, ?, ?)");
			$stmt->bind_param('ssi',$_GET['fullname'], $_GET['inputComment'], $_GET['inputRating']);
			$stmt->execute();
			$stmt->close();
		}	
	}
	$res = $mysqli -> query('SELECT Name, Comment, Rating,Time  FROM CommentSection');
	if($res)
	{
		while($rowHolder = mysqli_fetch_array($res, MYSQLI_ASSOC))
		{
			$records[] = $rowHolder;
		}
	}



?>
<div class="comments"> 
        <form action='<?php echo $pagename?>.php' method="get"> 
        <fieldset> 
        <legend> <h1>Comment Section</h1> </legend>
		
			<?php
				
				foreach($records as $this_row)
				{	$star = "&#11088;";
					if ($this_row['Rating'] == 5)
					{
						$star = "&#11088; &#11088; &#11088; &#11088; &#11088;";
					}
					if ($this_row['Rating'] == 4)
					{
						$star = "&#11088; &#11088; &#11088; &#11088;";
					}

					if ($this_row['Rating'] == 3)
					{
						$star = "&#11088; &#11088; &#11088; ";
					}

					if ($this_row['Rating'] == 2)
					{
						$star = "&#11088; &#11088;";
					}
					echo '<p> <strong>'.$this_row['Name']."&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; Rating:".$star." &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;".$this_row['Time']."</strong> <br>".$this_row['Comment'].'</p>';
				}
			?>
		
        <hr>
        Name: <input type="text" id="name" name="fullname" >
        <div id=shining> </div>
        Rating:<input type="number" id="rate" name ="inputRating" min="1" max="5" value="0" oninput="ratings(this.value)">
        <br>

        <textarea id = "commentBox" name = "inputComment">Leave a Comment!!!</textarea>

        <br>
        <input type="submit" value="Add Comment" onclick="return validate()">
        </fieldset>
    </form>
    </div>