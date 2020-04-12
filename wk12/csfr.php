<?php

$success=false;

if(isset($_POST['username']) && isset($_POST['password'])){
    if($_POST['username'] == 'host' && $_POST['password'] == 'pass'){
        echo "<h1 style={color:green}>Connection successful</h1>";
        $success=true;
    } else {
        echo "<h1 style={color:red}>Wrong username or password</h1>";
    }
}
if($success==false){

?>

<form method="post">
 <label for="username">Please input your username</label>
 <br/>
 <input type="text" name="username">
 <br/>
<label for="name">Please input your password</label>
<br/>
    <input type="password" name="password">
 <input type="submit">
</form>
<?php } ?>
