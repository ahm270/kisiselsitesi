
		    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:;">
			<div class="col-3">
			<style>


p.oblique {
  font-style: oblique;
}
h1 {
  font-size: 2.2em; /* 40px/16=2.5em */
  color: #C0C0C0;
  
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
<?php
			echo'	<a href="index.php"><img src="img/ahm7.png" width=150 height=70></a>
            </div>
			<div class="col-9">
			
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" style="color:#C0C0C0;font-size: 2.2em; /* 40px/16=2.5em */" href="haak.php">Hakkımda</a>
						</li>
					</ul>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<ul class="navbar-nav">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" style="color:#C0C0C0;font-size: 2.2em; /* 40px/16=2.5em */" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Ürünlerim
							</a>
							<div class="dropdown-menu" style="color:#C0C0C0;font-size: 2.2em; /* 40px/16=2.5em */" aria-labelledby="navbarDropdownMenuLink">';
								echo '<a class="dropdown-item" href="uruun.php?uruntur_id=0"">tüm</a>';
								$sql2 = mysql_query("select 
															*
														from uruntur ");	
										while($dizi= mysql_fetch_array($sql2))
								{
									echo '
									<a class="dropdown-item" href="uruun.php?uruntur_id='.$dizi["uruntur_id"].'">'.$dizi["uruntur_adi"].'</a>';
								}
							
							echo'</div>
						</li>
					</ul>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" style="color:#C0C0C0;font-size: 2.2em; /* 40px/16=2.5em */" href="iletisim1.php">İletişim</a>
						</li>
					</ul>
				</div>';
				?>
			</nav>
		</div>