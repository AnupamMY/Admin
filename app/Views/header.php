<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo base_url('/index.css')?>>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <link href=<?php echo base_url('assets/bootstrap.css')?> rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src=<?php echo base_url('assets/js/bootstrap.js')?> integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="main">
        <nav class="navbar">
            <div class="logo">
                <h3>SlashRTC</h3>
                <p>ADMIN</p>
            </div>
            <div class="list-nav">
                <ul>
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Live</a></li>
                    <li><a href="#">Reports</a></li>
                    <li><a href="#">Conversations</a></li>
                    <li><a href="#">Contacts</a></li>
                    
                    <li class="menu-products">
                       <a href="#">Operations</a>
                        <ul class="dropdown-products">
                            <li><a href="/user">Users</a></li>
                            <li><a href="/campPage">Campaigns</a></li>
                            <li><a href="<?php echo base_url('/Chat/Chat')?>">Bots</a></li>
                         </ul>
                       </li>    
                    </li>
                 
                    <li><a href="#">Advanced Settings</a></li>
                </ul>
            </div>    
</nav>
</div>
    
