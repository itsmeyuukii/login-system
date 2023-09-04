<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="signup-check.php" method="post">
        <h2> SIGN UP</h2>

        <?php  if (isset($_GET['error'])){ ?>
            <p class="error"><?php echo $_GET['error']; ?> </p>
        <?php } ?>
        <?php  if (isset($_GET['success'])){ ?>
            <p class="success"><?php echo $_GET['success']; ?> </p>
        <?php } ?>

        <label for="">Name</label>
        <?php  if (isset($_GET['name'])){ ?>
                <input type="text"
                        name="name"
                        placeholder="Enter name"
                        value ="<?php echo $_GET['name']; ?>"><br>
        <?php }else { ?>
                <input type="text"
                        name="name"
                        placeholder="Enter name"><br>
        <?php }?>


        <label for="">User Name</label>
        <?php  if (isset($_GET['uname'])){ ?>
                <input type="text"
                        name="uname"
                        placeholder="Enter Username"
                        value ="<?php echo $_GET['uname']; ?>"><br>
        <?php }else { ?>
                <input type="text"
                        name="uname"
                        placeholder="Enter Username"><br>
        <?php }?>

        <label for="">Password</label>
        <?php  if (isset($_GET['password'])){ ?>
                <input type="password"
                        name="password"
                        placeholder="Enter Password"
                        value ="<?php echo $_GET['password']; ?>"><br>
        <?php }else { ?>
                <input type="password"
                        name="password"
                        placeholder="Enter Password"><br>
        <?php }?>

        <label for="">Confirm Password</label>
        <?php  if (isset($_GET['re_password'])){ ?>
                <input type="password"
                        name="re_password"
                        placeholder="Confirm Password"
                        value ="<?php echo $_GET['re_password']; ?>"><br>
        <?php }else { ?>
                <input type="password"
                        name="re_password"
                        placeholder="Confirm Password"><br>
        <?php }?>

        <button type = "submit"> Sign Up</button>
        <a href="index.php" class = "ca">Already have an account?</a>
    </form>
    
</body>
</html>