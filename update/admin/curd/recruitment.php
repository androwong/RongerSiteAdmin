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
	
	<a href="recruitment_add_edit.php" style="color:#000;" class="dasboard" >Add New Recruitment </a> 
	<a href="page_text.php?ptext=recruitment" class="dasboard" style="color:#000;">Page Text</a> 
<?php $results = mysqli_query($db, "SELECT * FROM recruitment"); ?>




<table style="color:#000;">
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
				<a href="recruitment_add_edit.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="server.php?page=recruitment&del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
			<td>
				<a href="#" class="export_btn edit_btn" id="<?php echo $row['id'];?>">Export CSV</a>
			</td>
		</tr>
	<?php } ?>
</table>
<script src="../js/jquery-2.2.4.min.js" type="text/javascript"></script> <!-- jQuery v2.2.4 - necessary for Bootstrap's JavaScript plugins -->
<script src="../js/bootstrap.min.js" type="text/javascript"></script> <!-- Bootstrap v3.3.7 -->
<script src="../js/jquery.easing.min.js" type="text/javascript"></script> <!-- jQuery Easing v1.3 for smooth scrolling between anchors -->
<script src="../js/jquery.countdown.min.js" type="text/javascript"></script> <!-- The Final Countdown v2.2.0 plugin for jQuery -->
<script src="../js/swiper.min.js" type="text/javascript"></script> <!-- Swiper v3.4.2 for image gallery swiper -->
<script src="../js/jquery.magnific-popup.js" type="text/javascript"></script> <!-- Magnific Popup v1.1.0 for lightboxes -->
<script src="../js/waypoints.min.js" type="text/javascript"></script> <!-- jQuery Waypoints v2.0.3 required by Counter-Up -->
<script src="../js/jquery.counterup.min.js" type="text/javascript"></script> <!-- Counter-Up v1.0 for statistics -->
<script src="../js/validator.min.js" type="text/javascript"></script> <!--  Validator.js v0.11.8 Bootstrap plugin that validates the registration form -->
<script src="../js/scripts.js" type="text/javascript"></script> <!-- Custom scripts -->

<script>
	$(document).on( 'click', '.export_btn', function(e) {
		var recruit_id = e.target.id;
		jQuery.ajax({
			url : "curd/export_csv.php", 
			type: 'POST',
			data: { recruit_id },
			success: function(data){

				/*
				* Make CSV downloadable
				*/
				var downloadLink = document.createElement("a");
				var fileData = ['\ufeff'+data];

				var blobObject = new Blob(fileData,{
					type: "text/csv;charset=utf-8;"
				});

				var url = URL.createObjectURL(blobObject);
				downloadLink.href = url;
				downloadLink.download = "recruitment" + recruit_id + ".csv";

				/*
				* Actually download CSV
				*/
				document.body.appendChild(downloadLink);
				downloadLink.click();
				document.body.removeChild(downloadLink);
			}
    	});
		
	})

</script>
</body>
</html>