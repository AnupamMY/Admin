<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo base_url('/index.css')?>>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
<nav aria-label="breadcrumb">
        <ul class="breadcrumb">
        <div class="top-bread">
            <li class="breadcrumb-item"><a href="#">Operations</a></li>
           <li class="breadcrumb-item"><a href="/users">Users</a></li>
        </div>
            <li class="breadcrumb-item"><a href="/camp">+</a></li>
        </ul>
    </nav>
    <div class="table-conatiner">
    <table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Camp Name</th>
						<th>Description</th>
                        <th>Client</th>
						<th>Role</th>
                        <th>Actions</th>
					</tr>
				</thead>
				<tbody>
                    <?php 
                    
                        foreach($data as $user){
                    ?>
					<tr>
						
						<td><?php echo $user["camp_name"]?></td>
						<td><?php echo $user["camp_description"]?></td>
                        <td><?php echo $user["client"]?></td>
						<td><?php echo $user['role']?></td>
                        <td>
							<a href="/editCamp/<?php echo $user['camp_id'];?>" class="edit" data-toggle="modal">Edit</a>
							<a href="#" delete_id="<?php echo $user['camp_id'];?>" class="delete" data-toggle="modal">Delete</a>
						</td>
					</tr>
                    <?php }?>
				</tbody>
			</table>
        </div>
<script>
    let del = document.querySelectorAll(".delete");
    del.forEach(function(del){
        del.addEventListener("click",function(){
            let del_id = del.getAttribute("delete_id");
            console.log(del_id);
            let del_url = "/deleteCamp/"+del_id;
            if(confirm("Are you sure you want to delete this camp?")){
            location.href = del_url;
            }
        })
    })
</script>   
</body>
</html>