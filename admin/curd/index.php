<?php 
include('server.php');
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM audio WHERE id=$id");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$title = $n['title'];
                        $model = $n['model'];
			$audio = $n['audio'];
			$thumb = $n['thumb'];
		}

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title> audio CReate, Update, Delete PHP MySQL </title>
	<link rel="stylesheet" type="text/css" href="curd/style.css">
</head>
<body>
	<?php if (isset($_SESSION['message'])): ?>
		<div class="msg">
			<?php 
				echo $_SESSION['message']; 
				unset($_SESSION['message']);
			?>
		</div>
	<?php endif ?>

<?php $results = mysqli_query($db, "SELECT * FROM recruitment"); ?>




<table>
	<thead>
		<tr><th >Sr.No.</th>
			<th style="">Name</th>
            <th style="">Age</th>
			<th style="">Email</th>
			<th style="">City</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php $i=0; while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
		    <td><?php $i++; echo $i; ?></td>
			<td><?php echo $row['firstname'].' '.$row['lastname']; ?></td>
            <td><?php echo $row['age']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['city']; ?></td>
			<td>
				<a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>


</body>
</html>