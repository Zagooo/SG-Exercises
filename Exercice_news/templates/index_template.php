<?php
    
    $con = mysqli_connect('127.0.0.1','root','','sg-news-db');
    if($con ==false){
      echo "Wrong way ";
      echo mysqli_connect_error();
      exit();
    }

    $res = mysqli_query($con, "SELECT * FROM news");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
    <title>News</title>

    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <h1>Новини</h1>
      </div>
    </div>

    <div class="container">
      <div class="row">
            <?php
            
              while( ($rec = mysqli_fetch_assoc($res)) )
              {
                echo '<div class="news">';
                echo '<h2>';
                echo $rec['title'];
                echo '</h2>';
                echo '<h3>';
                echo $rec['title'] . '<br>';
                echo $rec['description'] . '<br>';
                echo $rec['link'] . '<br>';
                echo $rec['pub_date'];
                echo '</h3>';
                echo '</div>';
              }
            ?>
      </div>
      
  </body>
</html>
