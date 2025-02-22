<?php
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $database = "sensor_db";

  $conn = mysqli_connect($hostname,$username,$password,$database);

  if(!$conn)
  {
    die("Connection failed: " . mysqli_error());
  }

  echo("Database connectection is OK<br>");
  
  if(isset($_POST["temperature"]) && isset($_POST["humidity"])){
        
      $t = $_POST["temperature"];
      $h = $_POST["humidity"];

      $sql = "INSERT INTO dht11(temperature,humidity) VALUES(".$t.",".$h.")";

      if(mysqli_query($conn,$sql)){
        echo("\nNew record inserted successfully");
      }
      else
      {
        echo"Error" .$sql. "<br>" . mysqli_error($conn);
      }
  }
?>