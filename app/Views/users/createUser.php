<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- php echo base_url("function_name") -->
<body>
   
    <form action="/addUser" method="post">
        <label for="name">Name:</label></br>
        <input type="text" id="name" name="name" ></br>
          <p><?php echo session()->getFlashData("error")?></p>
        <label for="email">Email:</label></br>
        <input type="email" id="email" name="email" required></br>
        <label for="password">Password:</label></br>
        <input type="password" id="password" name="password" required></br>
        <label for="confirmpassword">Confirm Password:</label></br>
        <input type="password" id="confirmpassword" name="confirmpassword" required></br>
        <label for="role" class="form-label">Role</label>
            <select class="form-select-sm" name="role">
              <?php foreach($acess as $aces) {?>
                 <!-- <option value=<php echo $acess['level_id']?>>".$acess['level']."</option>";  -->
                 <option value=<?php echo $aces['level_id']?>><?php echo $aces['role']?></option> 
                 <?php  }  ?>    
        
            </select></br>
        <button type="submit">Register</button>
    </form> 
</body>
</html>