<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/updateUser/<?php echo $editdata['user_id']; ?>" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value=<?php echo $editdata['name']?>
         required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value=<?php echo $editdata['email']?> required>
        <label for="role" class="form-label">Role</label>
            <select class="form-select-sm" name="role">
                <?php foreach($acess as $acess)
                { ?>
                  <option value=<?php echo $acess['level_id']?>><?php echo $acess['role']?></option>
                <?php } ?> 
                </select>
        <button type="submit">Register</button>
    </form>
</body>
</html>