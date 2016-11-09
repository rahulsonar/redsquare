<table width="600px" border="1">
	<tr>
		<td>ID</td>
		<td>First Name</td>
		<td>Last Name</td>
		<td>Email</td>
		<td></td>
	</tr>
	
<?php
foreach($users as $user)
{
	?>
	<tr>
		<td><?php echo $user->id; ?></td>
		<td><?php echo $user->firstname; ?></td>
		<td>Last Name</td>
		<td>Email</td>
		<td><a href="index.php?r=admin/users/edit/<?php echo $user->id; ?>">Edit</a></td>
	</tr>
	<?php
}
?>
</table>