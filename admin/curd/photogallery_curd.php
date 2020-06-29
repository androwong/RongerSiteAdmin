<?php 
include('server.php');
	
	
?>
<!DOCTYPE html>
<html>
<head>
	<title> </title>
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
	
	<a href="photogallery_add_edit.php" style="color:#000;" class="dasboard" >Add New Images</a> 
	<a href="page_text.php?ptext=photography" class="dasboard" style="color:#000;">Page Text</a> 

<?php $results = mysqli_query($db, "SELECT * FROM photogallery"); ?>




<table style="color:#000;">
	<thead>
		<tr><th >Sr.No.</th>
			<th style="">Title</th>
			<th style="">Sub Title</th>
            <th style="">Category</th>
			<th style="">Thumbnail</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php $i=0; while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
		    <td><?php $i++; echo $i; ?></td>
			<td><?php echo $row['title']; ?></td>
			<td><?php echo $row['sub_title']; ?></td>
            <td><?php echo $row['category']; ?></td>
			<td><?php echo $row['thumb']; ?></td>
			<td>
				<a href="photogallery_add_edit.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="server.php?page=photogallery&del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>


</body>
</html>