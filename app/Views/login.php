<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="register">
    <form action="<?php echo base_url('validateUser'); ?>" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required> 
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>  
        <button type="submit">Login</button>
        <p> Does'nt have an account?<a href="#"> Register here</a></p>
    </form>
</div>

</body>
</html>