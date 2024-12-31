<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- php echo base_url("function_name") -->
<body>
   
    <form action="/addCamp" method="post">
        <label for="name">Campaign Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Description:</label>
        <input type="text" id="email" name="description" required>
        <label for="client">Client:</label>
        <input type="text" id="password" name="client" required>
        
        <label for="role" class="form-label">SuperVisior</label>
            <select class="form-select-sm" name="role">
                <?php foreach($value as $acess) {?>
                <option value=<?php echo $acess['role']?>><?php echo $acess['role']?></option> 
                 <?php  }  ?>
            </select>
        <button type="submit">Register</button>
    </form> 
</body>
</html>