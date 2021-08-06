<?php include("header.php"); ?>

<?php include("austMenu.php"); ?>

<?php include("solMenu.php"); ?>
	<style>
p.oblique {
  font-style: oblique;
}
h1 {
	margin: 100 100; 
width:1000px;
  font-size: 2.9em; /* 40px/16=2.5em */
  color: white;
  
}
h2 {
  font-size: 2.2em; /* 40px/16=2.5em */
  color: #FFFFF0;
  
}
</style>
	
		<?php
	include("vt.php");
	$urun_id = $_GET["urun_id"];
	echo'<div class="row">';
	$sql = mysql_query("select 
				 *
			from urunler where urun_id = $urun_id ");
			while($dizi = mysql_fetch_array($sql))
				{
		echo '
		<div class="col-12">
		
		 <div align="center">
		 <div class="">
			<h1><p class="oblique">'.$dizi["urun_adi"].'</p></h1>
			</div>
			<img src="img1/'.$dizi["resim"].'" width="900" height="50" class="img-fluid" alt="Responsive image">
			<div class="">
			<h2><p class="oblique">'.$dizi["içerik"].'</p></h2>
			</div>
			</div>
			</div>';}
			echo'</div>';