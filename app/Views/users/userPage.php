<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo base_url('/index.css')?>>
    <link rel="stylesheet" href=<?php echo base_url('assets/bootstrap4.css')?>>
   
	<title>Document</title>
</head>
<body>
<nav aria-label="breadcrumb">
        <ul class="breadcrumb">
        <div class="top-bread">
            <li class="breadcrumb-item"><a href="#">Operations</a></li>
           <li class="breadcrumb-item"><a href="/users">Users</a></li>
        </div>
            <li class="breadcrumb-item"><a href="/createUser">+</a></li>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Filter
            </button>
        </ul>
      
    </nav>
    <div class="table-conatiner">
    <table class="table table-striped table-hover">
				<thead>
					<tr>
						
						<th>ID</th>
						<th>Name</th>
						<th>Email</th>
            <th>Role</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
                    <?php 
                    
                        foreach($user as $user){
                    ?>
					<tr>
						<td><?php echo $user['user_id']?></td>
						<td><?php echo $user['name']?></td>
						<td><?php echo $user['email']?></td>
            <td><?php echo  $acess[$user['role']-1]['role']?></td>
						<td>
							<a href="/editUser/<?php echo $user['user_id'];?>" class="edit" data-toggle="modal">Edit</a>
							<a href="/deleteUser/<?php echo $user['user_id'];?>" class="delete" data-toggle="modal">Delete</a>
						</td>
					</tr>
                    <?php }?>
				</tbody>
			</table>
        <div class="d-flex justify-content-center">
          <?php echo $pager -> links(); ?>
        </div>
        </div>


<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
      </div>
      <div class="modal-body">
        <form action="/user">
        <select  name="filter">
            <option value="">Select Role</option>
            <?php foreach($acess as $acess){ ?>
                  <option value=<?php echo isset($acess['level_id'])?$acess['level_id']:''?>><?php echo $acess['role']?></option> 
             <?php } ?>
          </select> 
          <input type="text" placeholder="Search" name="search">
      </div>
      <div class="modal-footer">
        
        <button type="submit" class="btn btn-primary">Filter</button>
      </div>
      </form>
    </div>
  </div>
</div>

<script>
    // const deleteButtons = document.querySelectorAll('.deleteUser');
    // deleteButtons.forEach(delbutton => {
    //     delbutton.addEventListener('click', function() {
    //         const delete_id = delbutton.getAttribute('delete_id');
    //         console.log(delete_id);
    //         if (confirm('Are you sure you want to delete this user?')) {
    //             window.location.href = `/delete/${delete_id}`; 
    //         }
    //     });
    // });



</script>
</body>

   
