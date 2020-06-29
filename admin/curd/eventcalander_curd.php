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
	
	<a href="eventcalender_add_edit.php" class="dasboard" style="color:#000;">Add New Events</a> 
	<a href="month_cover.php" class="dasboard" style="color:#000;">Month Covers</a> 
	<a href="page_text.php?ptext=event_calendar" class="dasboard" style="color:#000;">Page Text</a> 

<?php $results = mysqli_query($db, "SELECT * FROM tbl_events"); ?>

<table style="color:#000;">
	<thead>
		<tr><th >Sr.No.</th>
			<th style="">Title</th>
			<th style="">Description</th>
            <th style="">Start Date</th>
			<th style="">End Date</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php $i=0; while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
		    <td><?php $i++; echo $i; ?></td>
			<td><?php echo $row['title']; ?></td>
			<td><?php echo $row['description']; ?></td>
            <td><?php echo $row['start']; ?></td>
			<td><?php echo $row['end']; ?></td>
			<td>
				<a href="eventcalender_add_edit.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="server.php?page=event_calendar&del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>


</body>
</html>