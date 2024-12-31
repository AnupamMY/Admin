<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/updateCamp/<?php echo $editdata['camp_id']; ?>" method="post">
        <label for="name">Campaign Name:</label>
        <input type="text" id="name" name="name" value=<?php echo $editdata['camp_name']?>
         required>
        <label for="email">Description:</label>
        <input type="text" id="email" name="description" value=<?php echo $editdata['camp_description']?> required>
        <label for="email">Client:</label>
        <input type="text" id="email" name="client" value=<?php echo $editdata['client']?> required>
        <label for="role" class="form-label">Role</label>
            <select class="form-select-sm" name="role">
                <?php foreach($acess as $acess)
                { ?>
                 <option value=<?php echo $acess['role']?>><?php echo $acess['role']?></option> 
                <?php } ?> 
                </select>
        <button type="submit">Register</button>
    </form>
</body>
</html>