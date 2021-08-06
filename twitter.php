	
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
  color: #1DA1F2;
  
}
button {
  
 background-color: #1DA1F2; 
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
@session_start();

							include("vt.php");
							$sql = mysql_query("select * from  diger " );
							while($dizi = mysql_fetch_array($sql))
		{
								echo'<a href="'.$dizi["twitter"].'">'.$dizi["twitter"].'</a>';
}								
			?>
			</p></h1>

				<h1><p class="oblique">Twitter</p></h1>
				<input type="text" class="form-control" name="twitter" value="" required>
				<button name="btnduzn" class="button">Düzenle</button>
		</div>
	</div>
</div>
<?php
if(isset($_POST["btnduzn"])){
		include("vt.php");
		$twitter = $_POST["twitter"];
		
		
		$sql = mysql_query("update diger set twitter='$twitter' where id=1");

		echo "Güncelleme Başarılı!";
		echo '<meta http-equiv="refresh" content="0; URL=twitter.php" />';;
}
?>



