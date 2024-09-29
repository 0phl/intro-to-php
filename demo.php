<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
</head>
<body>
    <h2>Registration Form</h2>
    
    
    <?php if (isset($_GET["Success"])) { ?>
    <p style="background-color: green; color: white; padding: 10px;"><?php echo $_GET["Success"]; ?></p>
    <?php } ?>

    
    <?php
    if (isset($_GET["error"])) {
    ?>
    <p style="background-color: red; color: white; padding: 10px;"><?php echo $_GET["error"]; ?></p>
    <?php
    }
    ?>

    <form action="output.php" method="POST">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" ><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" ><br><br>
        
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" ><br><br>
        
        <label for="confirm_password">Confirm Password:</label><br>
        <input type="password" id="confirm_password" name="confirm_password" ><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
