	
<?php include("header.php"); ?>

<?php include("austMenu.php"); ?>

<?php include("solMenu.php"); ?>
<div class="container-fluid">
	<div class="row">
	<div class="form-row">
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
							
				
	$sql1 = mysql_query("select 
				h.urun_id, h.urun_adi, k.uruntur_adi,h.uruntur_id, h.içerik, h.resim
			from urunler h inner join uruntur k 
on h.uruntur_id=k.uruntur_id");

		
								echo "<table border='4'>
				<tr>
				<td></td>
				<td></td>
				<td><h1><p class=".'oblique'.">Ürün ID</p></h1></td>
				<td><h1><p class=".'oblique'.">Ürün Adi</p></h1></td>
				<td><h1><p class=".'oblique'.">Ürün Türü</p></h1></td>
				<td><h1><p class=".'oblique'.">İçerik</p></h1></td>
				<td><h1><p class=".'oblique'.">Resim</p></h1></td>
				
				</tr>";
		while($dizi1 = mysql_fetch_array($sql1))
		{
			echo '<tr>
			<td><h1><a href="?urun_id='.$dizi1["urun_id"].'&urun_adi='.$dizi1["urun_adi"].'&uruntur_id='.$dizi1["uruntur_id"].'&içerik='.$dizi1["içerik"].'&resim='.$dizi1["resim"].'">getir</a></p></h1></td>
				<td><h1><p class=oblique><a href="?sil='.$dizi1["urun_id"].'">sil</a></p></h1></td>
				<td><h1><p class=oblique>'.$dizi1["urun_id"].'</p></h1></td>
				<td><h1><p class=oblique>'.$dizi1["urun_adi"].'</p></h1></td>
				<td><h1><p class=oblique>'.$dizi1["uruntur_adi"].'</p></h1></td>
				<td><h1><p class=oblique>'.$dizi1["içerik"].'</p></h1></td>
				<td><h1><p class=oblique><img src="img1/'.$dizi1["resim"].'" width=100 height=100></p></h1></td>
			</tr>';
		}
		echo "</table>";
								
			echo'</p></h1>
			
				
				<input type="hidden" class="form-control" name="urun_id" value="';
				if (isset($_GET["urun_id"])) echo $_GET["urun_id"];
				echo '" >
				<h1><p class="oblique">Ürün Adı</p></h1>
				<input type="text" class="form-control" name="urun_adi" value="';
				if (isset($_GET["urun_adi"])) echo $_GET["urun_adi"];
				echo '" required>
				<h1><p class="oblique">Ürün Türü</p></h1>
				<h1><p class="oblique"><select name="uruntur_id">
		<option value="-1">Seçiniz...</option>';
		
		include("vt.php");
		$sql2 = mysql_query("select * from uruntur" );
		while($dizi2 = mysql_fetch_array($sql2)) {
			
			if($dizi2["uruntur_id"]==$_POST["uruntur_id"])
				echo '<option selected value="'.$dizi2["uruntur_id"]. '">'.$dizi2["uruntur_adi"].'</option>';
			else if($dizi2["uruntur_id"]==$_GET["uruntur_id"])
				echo '<option selected value="'.$dizi2["uruntur_id"]. '">'.$dizi2["uruntur_adi"].'</option>';
			else
				echo '<option value="'.$dizi2["uruntur_id"]. '">'.$dizi2["uruntur_adi"].'</option>';
			echo '</p></h1>';
			
		}			
		echo '</select>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<h1><p class="oblique">İçerik</p></h1>
				<textarea name="içerik" rows="10" class="form-control" cols="100" required>';
				if (isset($_GET["içerik"])) echo $_GET["içerik"];
				echo '</textarea>
				<h1><p class="oblique">Resim</p></h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
				
				if (isset($_GET["resim"])) echo '<img src="img1/'.$_GET["resim"].'" width=100 height=100>';
				if (isset($_GET["resim"])){ echo '<h1><p class="oblique"><input type="file" name="resim" ></p></h1>';
				}
				else {
					
					 echo '<h1><p class="oblique"><input type="file" name="resim" required></p></h1> ';
				};echo'
				<button name="btnekle" class="button">Ekle</button>
				<button name="btnduzn" class="button">Düzenle</button>';
				?>
				
		</div>
	</div>
</div>
<?php
if(isset($_POST["btnekle"])){
		include("vt.php");
		$urun_id = $_POST["urun_id"];
		$urun_adi = $_POST["urun_adi"];
		$uruntur_id = $_POST["uruntur_id"];
		$içerik = $_POST["içerik"];
		$uzanti = array('image/jpeg','image/jpg','image/png','image/x-png','image/gif');
		$dizin = "img1";
		if(in_array(strtolower($_FILES['resim']['type']),$uzanti)){ 
			move_uploaded_file($_FILES['resim']['tmp_name'],"./$dizin/{$_FILES['resim']['name']}");
			mysql_query("SET NAMES utf8");
			mysql_query("SET CHARACTER SET utf8");
			mysql_query("SET COLLATION_CONNECTION = 'utf8_general_ci'");
			$db=$_FILES['resim']['name'];    }
		$sql = mysql_query("insert into urunler (urun_id, urun_adi,uruntur_id,içerik,resim)
							values (0 , '$urun_adi',$uruntur_id, '$içerik', '$db')");
		echo "Kayıt Başarılı!";
		echo '<meta http-equiv="refresh" content="0; URL=urun.php" />';;
}
?>
<?php
	if (isset($_GET["sil"])){
		$sil = $_GET["sil"];
		$urun_id = $_GET["urun_id"];
		
		mysql_query("delete from urunler where urun_id=$sil");
		echo '<meta http-equiv="refresh" content="0; URL=urun.php" />';;
		
	}
?>	
<?php
if(isset($_POST["btnduzn"])){
		include("vt.php");
		$urun_id = $_POST["urun_id"];
		$urun_adi = $_POST["urun_adi"];
		$uruntur_id = $_POST["uruntur_id"];
		$içerik = $_POST["içerik"];
		$uzanti = array('image/jpeg','image/jpg','image/png','image/x-png','image/gif');
		$dizin = "img1";
		if(in_array(strtolower($_FILES['resim']['type']),$uzanti)){ 
			move_uploaded_file($_FILES['resim']['tmp_name'],"./$dizin/{$_FILES['resim']['name']}");
			mysql_query("SET NAMES utf8");
			mysql_query("SET CHARACTER SET utf8");
			mysql_query("SET COLLATION_CONNECTION = 'utf8_general_ci'");
			$db=$_FILES['resim']['name'];    }
			if(empty($db))
		{
		$sql = mysql_query("UPDATE  urunler SET urun_adi='$urun_adi',uruntur_id=$uruntur_id ,içerik='$içerik' where urun_id=$urun_id");
		}
		else
		{
		$sql = mysql_query("UPDATE  urunler SET urun_adi='$urun_adi',uruntur_id=$uruntur_id ,içerik='$içerik',resim='$db' where urun_id=$urun_id");
		}
		echo "Kayıt Başarılı!";
		echo '<meta http-equiv="refresh" content="0; URL=urun.php" />';;
}
?>