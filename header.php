<html>
<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="stil/stil.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>
<?php 

							include("vt.php");
							$sql = mysql_query("select * from  diger " );
							while($dizi = mysql_fetch_array($sql))
		{
							
			
echo '<body style="background:url(img/'.$dizi["arkaplan"].') ;background-repeat:no-repeat;background-size:100% 100%">';
}	
	?>