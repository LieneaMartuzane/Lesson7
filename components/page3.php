<h1>Page 3</h1>
<form action="post.php"  method ="post">
<?php
if (isset($_GET['error'])){
?>

    <div class="row">
        <div class="col">
        <div class= 'alert alert-dangere'>
        You have filled invlide data
            <label>Email</label><br/>
            <input type="text" name="email">
        </div>
    </div>
<?php
unset($_SESSION['error']);
}
?>
    <div class="row">
        <div class="col">
            <label>Password</label><br/>
            <input type="password" name="password">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label>Retype password</label><br/>
            <input type="password" name="password2">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label>First name</label><br/>
            <input type="text" name="first_name">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label>Last name</label><br/>
            <input type="text" name="last_name">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <input type="submit" value="save">
        </div>
    </div>
</form>
