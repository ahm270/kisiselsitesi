	
<?php include("header.php"); ?>

<?php include("austMenu.php"); ?>

<?php include("solMenu.php"); ?>
<style>

p.oblique {
  font-style: oblique;
}
h1 {
	margin: 100 -300; 
width:1000px;
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
<h1><p class="oblique">

		<div class="form-row">
		<?php 
			include("vt.php");
			
			$sql = mysql_query("select * from  diger " );
							while($dizi = mysql_fetch_array($sql))
		{
							echo $dizi["hakkimda"];
}								
									
							
				
				?></p></h1>
				
</div>
</div>
</div>