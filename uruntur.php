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
  color: white;
  
}
button {
  
 background-color: black; 
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

ob_start();

							include("vt.php");
							
								echo'<a href="'.$dizi["twitter"].'">'.$dizi["twitter"].'</a>';
			echo '<input type="hidden" class="form-control" name="uruntur_id" value="';
				if (isset($_GET["uruntur_id"])) echo $_GET["uruntur_id"];
				echo '" >
				<h1><p class="oblique">Ürün Türü</p></h1>
				<input type="text" class="form-control" name="uruntur_adi" value="';
				if (isset($_GET["uruntur_adi"])) echo $_GET["uruntur_adi"];
				echo '" required>
				<button name="btnekle" class="button">Ekle</button>
				<button name="btnduzn" class="button">Düzenle</button>';	
include("vt.php");
	$sql = mysql_query("select * from  uruntur " );
	
		echo "<table border='4'>
			<tr>
				<td></td>
				<td></td>
				<td><h1><p class=".'oblique'.">Ürün ID</p></h1></td>
				<td><h1><p class=".'oblique'.">Ürün Türü</p></h1></td>
			</tr>";
		while($dizi = mysql_fetch_array($sql))
		{
			echo '<tr>
				<td><h1><a href="?uruntur_id='.$dizi["uruntur_id"].'&uruntur_adi='.$dizi["uruntur_adi"].'">Getir</a></h1></td>
				<td><h1><a href="?sil='.$dizi["uruntur_id"].'">sil</a></h1></td>
				<td><h1><p class=oblique>'.$dizi["uruntur_id"].'</p></h1></td>
				<td><h1><p class=oblique>'.$dizi["uruntur_adi"].'</p></h1></td>
			</tr>';
		}
		echo "</table>";				
			?>
			</p></h1>
				
		</div>
	</div>
</div>
<?php
if(isset($_POST["btnduzn"])){
		include("vt.php");
		$uruntur_id = $_POST["uruntur_id"];
		$uruntur_adi = $_POST["uruntur_adi"];
		
		
		$sql = mysql_query("update uruntur set uruntur_adi='$uruntur_adi' where uruntur_id=$uruntur_id");

		echo "Güncelleme Başarılı!";
		echo '<meta http-equiv="refresh" content="0; URL=uruntur.php" />';;
}
?>

<?php
	if (isset($_GET["sil"])){
		$sil = $_GET["sil"];
		$uruntur_id = $_GET["uruntur_id"];
		
		mysql_query("delete from uruntur where uruntur_id=$sil");
		echo '<meta http-equiv="refresh" content="0; URL=uruntur.php" />';;
		
	}
?>
<?php
if(isset($_POST["btnekle"])){
		include("vt.php");
		$uruntur_id = $_POST["uruntur_id"];
		$uruntur_adi = $_POST["uruntur_adi"];
		$sql = mysql_query("insert into uruntur (uruntur_id, uruntur_adi)
							values (0 , '$uruntur_adi')");
		

		echo "Güncelleme Başarılı!";
		echo '<meta http-equiv="refresh" content="0; URL=uruntur.php" />';;
}
?>
