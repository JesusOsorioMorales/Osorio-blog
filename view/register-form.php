<?php
require_once(__DIR__ . "/../model/config.php");
?>

<h1>Register</h>

<form method="post" action="<?php echo $path . "controller/create-user.php"; ?>">
    <div>
        <label for="email">Email</label>
        <imput type="text" name="email" />
    </div>
    
    <div>
        <label for="username">Username: </label>
        <input type="text" name="username" />
    </div>
    
    <div>        
        <label for="password">Password: </label>
        <imput type="password" name="password"/>
    </div>
    
    <div>
        <button type="submit">Submit</button>
    </div>
    
    <form>