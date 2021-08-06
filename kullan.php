	
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

ob_start();

							include("vt.php");
							$sql = mysql_query("select * from   kullanici " );
		{
								echo "<table border='4'>
				<tr>
				<td></td>
				<td></td>
				<td><h1><p class=".'oblique'.">Kullanıcı ID</p></h1></td>
				<td><h1><p class=".'oblique'.">Kullanıcı Adi</p></h1></td>
				<td><h1><p class=".'oblique'.">Şifre</p></h1></td>
				
				</tr>";
		while($dizi = mysql_fetch_array($sql))
		{
			echo '<tr>
			<td><h1><a href="?Kullanici_ID='.$dizi["Kullanici_ID"].'&Kullanici_Adı='.$dizi["Kullanici_Adı"].'">getir</a></p></h1></td>
				<td><h1><p class=oblique><a href="?sil='.$dizi["Kullanici_ID"].'">sil</a></p></h1></td>
				<td><h1><p class=oblique>'.$dizi["Kullanici_ID"].'</p></h1></td>
				<td><h1><p class=oblique>'.$dizi["Kullanici_Adı"].'</p></h1></td>
				<td><h1><p class=oblique>'.$dizi["Sifre"].'</p></h1></td>
			</tr>';
		}
		echo "</table>";
}								
			echo'</p></h1>
			
				
				<input type="hidden" class="form-control" name="Kullanici_ID" value="';
				if (isset($_GET["Kullanici_ID"])) echo $_GET["Kullanici_ID"];
				echo '" >
				<h1><p class="oblique">Kullanıcı Adı</p></h1>
				<input type="text" class="form-control" name="Kullanici_Adı" value="';
				if (isset($_GET["Kullanici_Adı"])) echo $_GET["Kullanici_Adı"];
				echo '" required>
				<h1><p class="oblique">Şifre</p></h1>
				<input type="password" class="form-control" name="Sifre" value="" required>
				<button name="btnekle" class="button">Ekle</button>
				<button name="btnduzn" class="button">Düzenle</button>';
				?>
		</div>
	</div>
</div>
<?php
if(isset($_POST["btnekle"])){
		include("vt.php");
		$Kullanici_ID = $_POST["Kullanici_ID"];
		$Kullanici_Adı = $_POST["Kullanici_Adı"];
		$Sifre = $_POST["Sifre"];
		
		$sql = mysql_query("insert into kullanici (Kullanici_ID, Kullanici_Adı,Sifre)
							values (0 , '$Kullanici_Adı','$Sifre')");
		
		echo "Kayıt Başarılı!";
		
		echo '<meta http-equiv="refresh" content="0; URL=kullan.php" />';;
}
?>
<?php
	if (isset($_GET["sil"])){
		$sil = $_GET["sil"];
		
		mysql_query("delete from kullanici where Kullanici_ID=$sil");
		mysql_query("delete from kullanici where Kullanici_Adı=$sil");
		mysql_query("delete from kullanici where Sifre=$sil");
		echo '<meta http-equiv="refresh" content="0; URL=kullan.php" />';;
	}
?>	
<?php
if(isset($_POST["btnduzn"])){
		include("vt.php");
		$Kullanici_ID = $_POST["Kullanici_ID"];
		$Kullanici_Adı = $_POST["Kullanici_Adı"];
		$Sifre = $_POST["Sifre"];
		
		
		$sql = mysql_query("update kullanici set Kullanici_Adı='$Kullanici_Adı',Sifre='$Sifre' where Kullanici_ID=$Kullanici_ID");

		echo "Güncelleme Başarılı!";
		echo '<meta http-equiv="refresh" content="0; URL=kullan.php" />';;
}
?>



