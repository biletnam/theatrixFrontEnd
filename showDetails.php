<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/styleSheet1.css">
<meta charset="utf-8">
<title>Theatrix - Show Details</title>
</head>

<body background="images/break6.png">
	<div class = "Holder">
		<div class="Header">
		<center><h1>Theatrix</h1></center>
		<h2>Show Details</h2>
		
		</div>
		
		<div>
			<h3 align>New Show</h3>
			Title: <input name="title" type="text"  id="title" placeholder="Title"><br><br>
			Times: <br></br><select name = "times" size = "4" multiple width = 250px>
				<option value = "07:00">07:00</option>
				<option value = "10:15">10:15</option>
				<option value = "13:30">13:30</option>
				<option value = "16:45">16:45</option>
				<option value = "20:00">20:00</option>
				<option value = "23:15">23:15</option>
			</select>
		</div>		
		<h3>View Shows</h3>
		<div class = "Times">
		
		<?php
			for($x = 0; $x < 5; $x++){
				echo '<table border = 1px>
				<tr><th>Date</th>';
		
				for ($i = 0; $i < 5; $i++){ //using foreach while calling from db. This is just temporary
					echo '<th>Time</th>';
				}
				echo'</tr>';
				
				for ($j = 0; $j < 5; $j++){
					echo'<tr><td>[DATE FROM DB]</td>';
					
					for ($i = 0; $i < 5; $i++){
						echo '<td>[TIME FROM DB - 15:10]</td>';//replace with the time from the db
					}
					echo '</tr>';
				}
				echo '<a href="http://localhost/Theatrix/Show%20Times.php"><p><b>[Show Title]</b></p></a>'; //takes you to the show page for that show
			}
		?>
		
		
		</table>
		</div>
		
		
	</div>	
	
</body>
</html>