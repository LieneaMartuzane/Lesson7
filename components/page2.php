<?php
$query = $conn->prepare('SELECT * FROM user');
$query->execute();

?>
<h1> this is Sparta! Page 2</h1>

<table>
<tr>
<td>ID</td>
<td>Email</td>
<td>First name</td>
<td>Last name</td>
<td>Date registered</td>
</tr>
</table>
<?php
foreach ($query->fetchAll() as $user ) {
    ?>
<tr>
<td> 
<?php echo $uper['id'];?> </td>
<?php echo $uper['email'];?> </td>
<?php echo $uper['name'];?> </td>
<?php echo $uper['lastname'];?> </td>
<?php echo $uper['created_at'];?> </td>


</tr>
    <?php
    
}
?>
