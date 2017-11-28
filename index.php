<?php 
  $data= file_get_contents('https://www.codeschool.com/users/Sghaier.json');
  $json_data=json_decode($data, true);
  // var_dump($json_data['courses']['completed']);
 $courses=$json_data['courses']['completed'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>
    <?php 
    echo $json_data['user']['username']; 
    ?>'s Badges
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="#" rel="stylesheet">
  </head>
  <body>
    <?php
    
      foreach ($courses as $course) {
        echo '<div>';
        echo '<img src="'. $course["badge"].'">';
        echo '<a href="'. $course['url'].'">'.$course['title'].'</a>';
        echo '</div>';
        
      }
    
    ?>
  </body>
</html>