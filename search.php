<?php

$connection = mysqli_connect('localhost', 'root', '', 'ajax');

$search = $_POST['xxx'];

if (!empty($search)) {
  $query = "SELECT * FROM cars WHERE cars LIKE '$search%' ";
  $search_query = mysqli_query($connection, $query);
  if (!$search_query){
    die('QUERY FAILED'. mysqli_error($connection));
  }
  while($row = mysqli_fetch_array($search_query)){
    $brand = $row['cars'];
   ?>
    <ul class="list-unstyled">
  <?php
      echo "<li>{$brand} in stock</li>"
    ?>
    </ul>
  <?php
  }
}



 ?>
