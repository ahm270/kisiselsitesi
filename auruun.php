<?php include("header.php"); ?>

<?php include("austMenu.php"); ?>


<?php include("solMenu.php"); ?>
<style>

h3 {
	margin: 100 100; 
width:1000px;

  
}

</style>

<div align="center">
		
		<?php
	include("vt.php");
	$uruntur_id = $_GET["uruntur_id"];
	
	echo'<div class="row">';
	if($uruntur_id == 0)
	{
	$sql = mysql_query("select *from urunler");
	}
	else
	{
	$sql = mysql_query("select *from urunler where uruntur_id = $uruntur_id ");
	}
			while($dizi = mysql_fetch_array($sql))
				{echo'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
	
		echo '<h3>
	<figure>	
	<input type="hidden"  name="urun_id" value="'.$dizi["urun_id"].'">';
	$urun_id = $dizi["urun_id"];
 echo' <a href="aur.php?urun_id='.$urun_id.'"><img src="img1/'.$dizi["resim"].'" width=285 height=200"></a>
  <br />';
  
  echo'<figcaption><p><h1><u><a href="aur.php?urun_id='.$urun_id.'">'.$dizi["urun_adi"].'</a></u></h1></p></figcaption>
</figure></h3>
  
';
		}echo '</div>';?>
		</div>
		
									
							
				
	