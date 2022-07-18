<?php
include 'connect.php';
?>
<!DOCTYPE html>

<html>

<head>

    <title>LOGIN</title>

    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

	<input type="submit1" value="Home"  id="myButton" onClick="document.location.href='index.php'" style="height:30px; width:40px " />  
     	<form action="insert.php" method="post">

        <h2>LOGIN</h2>

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <label for="username">User Name</label>

        <input type="text" name="uname" placeholder="User Name"><br>

        <label for="password">Password</label>

        <input type="password" name="password" placeholder="Password"><br> 

        <button type="submit">Login</button>
        
        

     </form>


     
       


</body>

</html>
