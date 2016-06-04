  <!doctype html>
  <html>
  <head>
  <meta charset="UTF-8">
  <title>Insert</title>
  </head>
  
  <body>
  <?php
  $con=mysqli_connect("www.secretvoice1.com","secretvo_11","c12345");
      mysqli_select_db($con, "secretvo_11");
      if(!$con){
      die('Could not connect: ' .mysql_error());
      }
      
      $gn = $_POST["firstname"];
      $fn = $_POST["lastname"];
      $re = $_POST["relationship"];
      $marriage = $_POST["marriage"];
      $gen = $_POST["generation"];
      $person = $_POST["person_id"];
      $sql = "INSERT INTO family (family_name, given_name, generation,relation_id,marriage_id)
  VALUES ('".$fn."','".$gn."','".$gen."','".$re."','".$marriage."')";
  if ($con->query($sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
      ?>
  </body>
  </html>