<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to E4afrika </title>
</head>
<body>
    <h4>Welcome to E4afrika shop</h4>
    <hr>
    <a href="/register">Register</a> 
    <a href="/login">Login</a>
    <?php
    
    require_once 'app/core/controllers/home.php';
    require_once 'app/utils/methods.php';

    if(is_authenticate()){


      echo ' Welcome '.$_SESSION['user_info'][0]['username'].'  E4africa <br>';  

      
      echo '<a href="/logout">Deconnexion</a>  <br> <br>';

      echo '<hr><br>';

      require_once 'app/core/controllers/post.php';

      $post = new Post();
      $post->get_all();

    }
    else{
        echo ' Welcome to E4afrika shop <br>'; 
        echo '<a href="/login">Login</a> <br>';
        echo '<a href="/register">Register</a>';

    }
?>
    
</body>
</html>