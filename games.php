<?php 
    include "config.php";

   
$query = "SELECT  game.GameID, game.GameTitle, game.DeveloperID, game.Genre, game.PublicationYear, 
publisher.PublisherID,publisher.Name FROM game 
INNER JOIN developer ON game.DeveloperID = developer.DeveloperID INNER JOIN
publisher ON game.PublisherID = publisher.PublisherID ";
$result = mysqli_query($conn, $query);

   
?>
   <?php

include 'head.php'; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Library Management System</title>
</head>
<body>

  <div class="container mt-5">
    <h1 class="text-center">Upcoming Games</h1>
    <?php
     if(mysqli_num_rows($result) > 0){
        echo '<table class="table mt-5">';
        echo '    <thead class="bg-primary">';
        echo '        <th scope="col">GameID</th>';
        echo '        <th scope="col">GameTitle</th>';
        echo '        <th scope="col">Genre</th>';
        echo '        <th scope="col">PublicationYear</th>';
        echo '        <th scope="col">PublisherID</th>';
        echo '        <th scope="col">Publisher</th>';
        echo '   </thead>';
        echo '   <tbody>';

        while($row = mysqli_fetch_assoc($result)){
        
        echo '<tr>';        
        echo '  <td>'.$row['GameID'] .'</td>';
        echo ' <td>'. $row['GameTitle'].'</td>';
        echo '  <td>'.$row['Genre'] .'</td>';
        echo '  <td>'.$row['PublicationYear'] .'</td>';
        echo '  <td>'.$row['PublisherID'] .'</td>';
        echo '  <td>'.$row['Name'] .'</td>';
      
        }

        echo '</table>';
    } else{
        echo "No Games found.";
    }

    mysqli_close($conn);

    ?>
  </div>
  
<?php

include 'foot.php'; 

?> 
</body>
</html>