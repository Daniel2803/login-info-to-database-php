
    
<?php 

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
        
    $connection = mysqli_connect('localhost','root','','demoweb');
    
    $query = "INSERT INTO loginuser(username, password) VALUES('{$username}', '{$password}')";
    
    $create_query = mysqli_query($connection, $query);
    


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
 <div class="container">
  <div class="col-xs-6">
   <form action="login.php" method="post">
       <label for="name">Enter Username:</label>
       <input type="text" class="form-control" name="username">
       <label for="name">Enter Password:</label>
       <input type="password" class="form-control" name="password">
       <input type="submit" name="submit">
       
   </form>
   </div>
   </div>

    
</body>
</html>