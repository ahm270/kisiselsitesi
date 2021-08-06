	
<?php include("header.php"); ?>

<?php include("austMenu.php"); ?>

<?php include("solMenu.php"); ?>
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
  color: white;
  
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

<div class="container-fluid">
	<div class="row">
	
		<form enctype="multipart/form-data" action="" method="POST">
		<div class="form-row">
		<?php 
			include("vt.php");
			
			$sql = mysql_query("select * from  diger " );
							while($dizi = mysql_fetch_array($sql))
		{
								
								echo'<td><img src="img/'.$dizi["arkaplan"].'" width=700 height=500></td>';
}								
									
							
				
				?>
				<h1><p class="oblique">Arkaplan Değiştirmeyi için ..</p></h1>
<h1><p class="oblique"><input type="file" name="resim" required></p></h1>
	<button name="btnekle" class="button">Resmi Değiştir</button>
</div>
	</div>
</div>
<?php
if(isset($_POST["btnekle"])){
		include("vt.php");
		$uzanti = array('image/jpeg','image/jpg','image/png','image/x-png','image/gif');
		$dizin = "img";
		if(in_array(strtolower($_FILES['resim']['type']),$uzanti)){ 
			move_uploaded_file($_FILES['resim']['tmp_name'],"./$dizin/{$_FILES['resim']['name']}");
			mysql_query("SET NAMES utf8");
			mysql_query("SET CHARACTER SET utf8");
			mysql_query("SET COLLATION_CONNECTION = 'utf8_general_ci'");
			$db=$_FILES['resim']['name'];    }
		
		
		$sql = mysql_query("update diger set arkaplan='$db' where id=1");

		echo "Güncelleme Başarılı!";
		
		echo '<meta http-equiv="refresh" content="0; URL=arka.php" />';;
}
?>