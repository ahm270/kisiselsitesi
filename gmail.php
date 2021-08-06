	
<?php include("header.php"); ?>

<?php include("austMenu.php"); ?>

<?php include("solMenu.php"); ?>

<div class="container-fluid">
	<div class="row">
	
		<form enctype="multipart/form-data" action="" method="POST">
		<div class="form-row">
		<style>
form { 
margin: 100 -250; 
width:500px;
}

p.oblique {
  font-style: oblique;
}
h1 {
  font-size: 2.2em; /* 40px/16=2.5em */
  color: #B23121;
  
}
button {
  
 background-color: #B23121; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
<h1><p class="oblique">
<?php 

							include("vt.php");
							$sql = mysql_query("select * from  diger " );
							while($dizi = mysql_fetch_array($sql))
		{
								echo $dizi["gmail"];
}								
			?>
			</p></h1>
				<h1><p class="oblique">Gmail</p></h1>
				<input type="text" class="form-control" name="gmail" value="" required>
				
				<button name="btnduzn" class="button">Düzenle</button>
		</div>
	</div>
</div>
<?php
if(isset($_POST["btnduzn"])){
		include("vt.php");
		$gmail = $_POST["gmail"];
		
		
		$sql = mysql_query("update diger set gmail='$gmail' where id=1");

		echo "Güncelleme Başarılı!";
		
		echo '<meta http-equiv="refresh" content="0; URL=gmail.php" />';;
}
?>







