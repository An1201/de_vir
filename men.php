<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
	<title>laLuten</title>
	<meta name="description" content="каталог" />
	<meta name="keywords" content="парфюм, духи, парфюмерия, купить" />
	
 	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/style.css" >
    <script src="js/respond.min.js"></script>
	
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="js/bootstrap.js"></script>

	
 
	</head>
		<body>
			<div class="all container-fluid">	
				<div class="container cont_verh">	
				<div class="row">
	 				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
						<p><a name="top1"></a></p>
						<div > 
						<span class="main-logo">LaLuten</span>
						<p class="phone pull-right">  тел: +7 //-//-// </p>
						</div>

					</div>
				</div>
				</div>

				<div class="container">	
				<div class="row menu_left_right">
					<div class="menu col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
					<ul  class="top_menu nav nav-tabs nav-justified">
						  <li ><a href="index.php" class="menu_a">Главная</a></li>
						  <li><a href="woman.php" class="menu_a">Женская парфюмерия</a></li>
						  <li class="active"><a href="man.php" class="menu_a">Мужская парфюмерия</a></li>
						</ul>
					</div>
				</div>
				</div>

				<?php 

					mysql_connect("localhost","root","");
					mysql_select_db('mybase'); 
					$err = ''; 

					$query='SET NAMES utf8'; 
					$res = mysql_query($query); 

					$quer = mysql_query("SELECT DISTINCT `brand` FROM katalogman;");
					
			        while ($row = mysql_fetch_assoc($quer))
					$brands[] = $row;

				?>

				<div class="shir container">	
				<div class="row katalogwom">
				<br><p class="sorry">
						Приносим свои извинения, база товаров наполняется, некоторые изображения временно недоступны.
					</p>
					<div class="">
						
							<navy>
								<ul > 
									<?php 
									 foreach ($brands as $brand):{
									    $bbb = $brand['brand'];
									 	echo "<li><a href='#".$bbb."'> ".$bbb." </a></li>";
									 }
						            endforeach;?>
							
								</ul>
					        </navy> 
					<div id="up">
						<navy> 
							<ul > <!-- наверх #top1-->
								<li><a href="#top1">Наверх<img src="images/vverh.png" alt="laLuten"  height=20px width=20px/></a></li>
							</ul>
						</navy>
					</div>
					</div>


					<div class="katalog ">
						<?php 


						    foreach ($brands as $brand):{
													

					            $nameOfProduct=$brand["brand"];

					            echo "<p><a name='".$nameOfProduct."'></a></p>";
					       
								$query = mysql_query ("SELECT id, brand, name, type, gr, shleif, price, img FROM katalogman WHERE brand='$nameOfProduct';");
								$myrow_ot = mysql_fetch_array ($query); 
								
					            echo "<div><br><table ><caption align=center >Бренд: <b>".$nameOfProduct."</b></caption>";
					            $count=0;
								{ do { if ($count==0) echo"<tr>";
											$count++; 	
											echo " <td><p> <img src=".$myrow_ot['img']." onerror='this.src = \"/images/flakon.png\"'  alt='laLuten' height=150px width=150px > <b>".$myrow_ot['id']."</b> <br><br> <b>".$myrow_ot['name']."</b> <br><br> ".$myrow_ot['type']." <br> <b>Группа ароматов: </b>".$myrow_ot['gr']."<br><b>Шлейф:</b>".$myrow_ot['shleif']."<br><br><b>Цена: ".$myrow_ot['price']." р </p></td>" ;
									 		if ($count == 4){ //если 3я фотка 
							       			$count=0; 
											echo "</tr>"; }
								        }while($myrow_ot = mysql_fetch_array ($query)); 
								}echo "</table></div>";

								?>
							<?php }
				            endforeach;?>	

					</div>

				</div>
				</div>

	        </div>
		</body>
	</html>

						           
						       













<?php /*




									mysql_connect("localhost","root","");
									mysql_select_db('mybase'); 
									$err = ''; 

									$query='SET NAMES utf8'; 
									$res = mysql_query($query); 

						            $b='Antonio Banderas';
									$ot = mysql_query ("SELECT id, brand, name, type, gr, shleif, price, img FROM katalogman WHERE brand='$b';");
									$myrow_ot = mysql_fetch_array ($ot); 

						            echo "<br><table ><caption align=center >Бренд: <b> Antonio Banderas</b></caption>";
						            $count=0;
									{ do { if ($count==0) echo"<tr>";
												$count++; 	
												echo " <td><p><img src=".$myrow_ot['img']." height=150px width=150px><b>".$myrow_ot['id']."</b> <br><br> <b>".$myrow_ot['name']."</b> <br><br> ".$myrow_ot['type']." <br> <b>Группа ароматов: </b>".$myrow_ot['gr']."<br><b>Шлейф:</b>".$myrow_ot['shleif']."<br><br><b>Цена: ".$myrow_ot['price']." р </p></td>" ;
										 		if ($count == 4){ //если 3я фотка 
								       			$count=0; 
												echo "</tr>"; }
									        }while($myrow_ot = mysql_fetch_array ($ot)); 
									}echo "</table>";
						?>

						   <p><a name="Armand"></a></p>    <!-- ссылка на бренд -->
						<?php
						         $b='Armand Basi';
									$ot = mysql_query ("SELECT id, brand, name, type, gr, shleif, price, img FROM katalogman WHERE brand='$b';");
									$myrow_ot = mysql_fetch_array ($ot); 

						            echo "<br><table ><caption align=center bgcolor=green >Бренд: <b> Armand Basi</b></caption>";
						            $count=0;
						            
									{
												do { if ($count==0) echo"<tr>";
												$count++; 	
												echo " <td><p> <img src=".$myrow_ot['img']." height=150px width=150px> <b>".$myrow_ot['id']."</b> <br><br> <b>".$myrow_ot['name']."</b> <br><br> ".$myrow_ot['type']." <br> <b>Группа ароматов: </b>".$myrow_ot['gr']."<br><b>Шлейф:</b>".$myrow_ot['shleif']."<br><br><b>Цена: ".$myrow_ot['price']." р</p></td>" ;
										 		if ($count == 4){ //если 3я фотка 
								       			$count=0; 
												echo "</tr>"; }
									        }while($myrow_ot = mysql_fetch_array ($ot)); 
									}echo "</table>";
								?>

								  <p><a name="Azzaro"></a></p>    <!-- ссылка на бренд -->
						<?php
						         $b='Azzaro';
									$ot = mysql_query ("SELECT id, brand, name, type, gr, shleif, price, img FROM katalogman WHERE brand='$b';");
									$myrow_ot = mysql_fetch_array ($ot); 

						            echo "<br><table ><caption align=center bgcolor=green >Бренд: <b> Azzaro</b></caption>";
						            $count=0;
						            
									{
												do { if ($count==0) echo"<tr>";
												$count++; 	
												echo " <td><p> <img src=".$myrow_ot['img']." height=150px width=150px> <b>".$myrow_ot['id']."</b> <br><br> <b>".$myrow_ot['name']."</b> <br><br> ".$myrow_ot['type']." <br> <b>Группа ароматов: </b>".$myrow_ot['gr']."<br><b>Шлейф:</b>".$myrow_ot['shleif']."<br><br><b>Цена: ".$myrow_ot['price']." р</p></td>" ;
										 		if ($count == 4){ //если 3я фотка 
								       			$count=0; 
												echo "</tr>"; }
									        }while($myrow_ot = mysql_fetch_array ($ot)); 
									}echo "</table>";
								?>


							  <p><a name="Burberry"></a></p>    <!-- ссылка на бренд -->
						<?php
						         $b='Burberry';
									$ot = mysql_query ("SELECT id, brand, name, type, gr, shleif, price, img FROM katalogman WHERE brand='$b';");
									$myrow_ot = mysql_fetch_array ($ot); 

						            echo "<br><table ><caption align=center bgcolor=green >Бренд: <b>Burberry</b></caption>";
						            $count=0;
						            
									{
												do { if ($count==0) echo"<tr>";
												$count++; 	
												echo " <td><p> <img src=".$myrow_ot['img']." height=150px width=150px> <b>".$myrow_ot['id']."</b> <br><br> <b>".$myrow_ot['name']."</b> <br><br> ".$myrow_ot['type']." <br> <b>Группа ароматов: </b>".$myrow_ot['gr']."<br><b>Шлейф:</b>".$myrow_ot['shleif']."<br><br><b>Цена: ".$myrow_ot['price']." р</p></td>" ;
										 		if ($count == 4){ //если 3я фотка 
								       			$count=0; 
												echo "</tr>"; }
									        }while($myrow_ot = mysql_fetch_array ($ot)); 
									}echo "</table>";
								?>

								  <p><a name="Bvlgari"></a></p>    <!-- ссылка на бренд -->
						<?php
						         $b='Bvlgari';
									$ot = mysql_query ("SELECT id, brand, name, type, gr, shleif, price, img FROM katalogman WHERE brand='$b';");
									$myrow_ot = mysql_fetch_array ($ot); 

						            echo "<br><table ><caption align=center bgcolor=green >Бренд: <b>Bvlgari</b></caption>";
						            $count=0;
						            
									{
												do { if ($count==0) echo"<tr>";
												$count++; 	
												echo " <td><p> <img src=".$myrow_ot['img']." height=150px width=150px> <b>".$myrow_ot['id']."</b> <br><br> <b>".$myrow_ot['name']."</b> <br><br> ".$myrow_ot['type']." <br> <b>Группа ароматов: </b>".$myrow_ot['gr']."<br><b>Шлейф:</b>".$myrow_ot['shleif']."<br><br><b>Цена: ".$myrow_ot['price']." р</p></td>" ;
										 		if ($count == 4){ //если 3я фотка 
								       			$count=0; 
												echo "</tr>"; }
									        }while($myrow_ot = mysql_fetch_array ($ot)); 
									}echo "</table>";
								?>
								<p><a name="Bruno"></a></p>    <!-- ссылка на бренд -->
								<?php
						         $b='Bruno Banani';
									$ot = mysql_query ("SELECT id, brand, name, type, gr, shleif, price, img FROM katalogman WHERE brand='$b';");
									$myrow_ot = mysql_fetch_array ($ot); 

						            echo "<br><table ><caption align=center bgcolor=green >Бренд: <b>Bruno Banani</b></caption>";
						            $count=0;
						            
									{
												do { if ($count==0) echo"<tr>";
												$count++; 	
												echo " <td><p> <img src=".$myrow_ot['img']." height=150px width=150px> <b>".$myrow_ot['id']."</b> <br><br> <b>".$myrow_ot['name']."</b> <br><br> ".$myrow_ot['type']." <br> <b>Группа ароматов: </b>".$myrow_ot['gr']."<br><b>Шлейф:</b>".$myrow_ot['shleif']."<br><br><b>Цена: ".$myrow_ot['price']." р</p></td>" ;
										 		if ($count == 4){ //если 3я фотка 
								       			$count=0; 
												echo "</tr>"; }
									        }while($myrow_ot = mysql_fetch_array ($ot)); 
									}echo "</table>";
								?>

								<p><a name="Cacharel"></a></p>    <!-- ссылка на бренд -->
								<?php
						         $b='Cacharel';
									$ot = mysql_query ("SELECT id, brand, name, type, gr, shleif, price, img FROM katalogman WHERE brand='$b';");
									$myrow_ot = mysql_fetch_array ($ot); 

						            echo "<br><table ><caption align=center bgcolor=green >Бренд: <b>Cacharel</b></caption>";
						            $count=0;
						            
									{
												do { if ($count==0) echo"<tr>";
												$count++; 	
												echo " <td><p> <img src=".$myrow_ot['img']." height=150px width=150px> <b>".$myrow_ot['id']."</b> <br><br> <b>".$myrow_ot['name']."</b> <br><br> ".$myrow_ot['type']." <br> <b>Группа ароматов: </b>".$myrow_ot['gr']."<br><b>Шлейф:</b>".$myrow_ot['shleif']."<br><br><b>Цена: ".$myrow_ot['price']." р</p></td>" ;
										 		if ($count == 4){ //если 3я фотка 
								       			$count=0; 
												echo "</tr>"; }
									        }while($myrow_ot = mysql_fetch_array ($ot)); 
									}echo "</table>";
								?>

								<p><a name="Calvin"></a></p>    <!-- ссылка на бренд -->
								<?php
						         $b='Calvin Klein';
									$ot = mysql_query ("SELECT id, brand, name, type, gr, shleif, price, img FROM katalogman WHERE brand='$b';");
									$myrow_ot = mysql_fetch_array ($ot); 

						            echo "<br><table ><caption align=center bgcolor=green >Бренд: <b>Calvin Klein</b></caption>";
						            $count=0;
						            
									{
												do { if ($count==0) echo"<tr>";
												$count++; 	
												echo " <td><p> <img src=".$myrow_ot['img']." height=150px width=150px> <b>".$myrow_ot['id']."</b> <br><br> <b>".$myrow_ot['name']."</b> <br><br> ".$myrow_ot['type']." <br> <b>Группа ароматов: </b>".$myrow_ot['gr']."<br><b>Шлейф:</b>".$myrow_ot['shleif']."<br><br><b>Цена: ".$myrow_ot['price']." р</p></td>" ;
										 		if ($count == 4){ //если 3я фотка 
								       			$count=0; 
												echo "</tr>"; }
									        }while($myrow_ot = mysql_fetch_array ($ot)); 
									}echo "</table>";
								?>

								<p><a name="Carolina"></a></p>    <!-- ссылка на бренд -->
								<?php
						         $b='Carolina Herrera';
									$ot = mysql_query ("SELECT id, brand, name, type, gr, shleif, price, img FROM katalogman WHERE brand='$b';");
									$myrow_ot = mysql_fetch_array ($ot); 

						            echo "<br><table ><caption align=center bgcolor=green >Бренд: <b>Carolina Herrera</b></caption>";
						            $count=0;
						            
									{
												do { if ($count==0) echo"<tr>";
												$count++; 	
												echo " <td><p> <img src=".$myrow_ot['img']." height=150px width=150px> <b>".$myrow_ot['id']."</b> <br><br> <b>".$myrow_ot['name']."</b> <br><br> ".$myrow_ot['type']." <br> <b>Группа ароматов: </b>".$myrow_ot['gr']."<br><b>Шлейф:</b>".$myrow_ot['shleif']."<br><br><b>Цена: ".$myrow_ot['price']." р</p></td>" ;
										 		if ($count == 4){ //если 3я фотка 
								       			$count=0; 
												echo "</tr>"; }
									        }while($myrow_ot = mysql_fetch_array ($ot)); 
									}echo "</table>";
								?>

								<p><a name="Cerruti"></a></p>    <!-- ссылка на бренд -->
								<?php
						         $b='Cerruti';
									$ot = mysql_query ("SELECT id, brand, name, type, gr, shleif, price, img FROM katalogman WHERE brand='$b';");
									$myrow_ot = mysql_fetch_array ($ot); 

						            echo "<br><table ><caption align=center bgcolor=green >Бренд: <b>Cerruti</b></caption>";
						            $count=0;
						            
									{
												do { if ($count==0) echo"<tr>";
												$count++; 	
												echo " <td><p> <img src=".$myrow_ot['img']." height=150px width=150px> <b>".$myrow_ot['id']."</b> <br><br> <b>".$myrow_ot['name']."</b> <br><br> ".$myrow_ot['type']." <br> <b>Группа ароматов: </b>".$myrow_ot['gr']."<br><b>Шлейф:</b>".$myrow_ot['shleif']."<br><br><b>Цена: ".$myrow_ot['price']." р</p></td>" ;
										 		if ($count == 4){ //если 3я фотка 
								       			$count=0; 
												echo "</tr>"; }
									        }while($myrow_ot = mysql_fetch_array ($ot)); 
									}echo "</table>";
								?>


								<p><a name="Chanel"></a></p>    <!-- ссылка на бренд -->
								<?php
						         $b='Chanel';
									$ot = mysql_query ("SELECT id, brand, name, type, gr, shleif, price, img FROM katalogman WHERE brand='$b';");
									$myrow_ot = mysql_fetch_array ($ot); 

						            echo "<br><table ><caption align=center bgcolor=green >Бренд: <b>Chanel</b></caption>";
						            $count=0;
						            
									{
												do { if ($count==0) echo"<tr>";
												$count++; 	
												echo " <td><p> <img src=".$myrow_ot['img']." height=150px width=150px> <b>".$myrow_ot['id']."</b> <br><br> <b>".$myrow_ot['name']."</b> <br><br> ".$myrow_ot['type']." <br> <b>Группа ароматов: </b>".$myrow_ot['gr']."<br><b>Шлейф:</b>".$myrow_ot['shleif']."<br><br><b>Цена: ".$myrow_ot['price']." р</p></td>" ;
										 		if ($count == 4){ //если 3я фотка 
								       			$count=0; 
												echo "</tr>"; }
									        }while($myrow_ot = mysql_fetch_array ($ot)); 
									}echo "</table>";
								?>

									<p><a name="Dior"></a></p>    <!-- ссылка на бренд -->
								<?php
						         $b='Christian Dior';
									$ot = mysql_query ("SELECT id, brand, name, type, gr, shleif, price, img FROM katalogman WHERE brand='$b';");
									$myrow_ot = mysql_fetch_array ($ot); 

						            echo "<br><table ><caption align=center bgcolor=green >Бренд: <b>Christian Dior</b></caption>";
						            $count=0;
						            
									{
												do { if ($count==0) echo"<tr>";
												$count++; 	
												echo " <td><p> <img src=".$myrow_ot['img']." height=150px width=150px> <b>".$myrow_ot['id']."</b> <br><br> <b>".$myrow_ot['name']."</b> <br><br> ".$myrow_ot['type']." <br> <b>Группа ароматов: </b>".$myrow_ot['gr']."<br><b>Шлейф:</b>".$myrow_ot['shleif']."<br><br><b>Цена: ".$myrow_ot['price']." р</p></td>" ;
										 		if ($count == 4){ //если 3я фотка 
								       			$count=0; 
												echo "</tr>"; }
									        }while($myrow_ot = mysql_fetch_array ($ot)); 
									}echo "</table>";
								?>

									<p><a name="Clinique"></a></p>    <!-- ссылка на бренд -->
								<?php
						         $b='Clinique';
									$ot = mysql_query ("SELECT id, brand, name, type, gr, shleif, price, img FROM katalogman WHERE brand='$b';");
									$myrow_ot = mysql_fetch_array ($ot); 

						            echo "<br><table ><caption align=center bgcolor=green >Бренд: <b>Clinique</b></caption>";
						            $count=0;
						            
									{
												do { if ($count==0) echo"<tr>";
												$count++; 	
												echo " <td><p> <img src=".$myrow_ot['img']." height=150px width=150px> <b>".$myrow_ot['id']."</b> <br><br> <b>".$myrow_ot['name']."</b> <br><br> ".$myrow_ot['type']." <br> <b>Группа ароматов: </b>".$myrow_ot['gr']."<br><b>Шлейф:</b>".$myrow_ot['shleif']."<br><br><b>Цена: ".$myrow_ot['price']." р</p></td>" ;
										 		if ($count == 4){ //если 3я фотка 
								       			$count=0; 
												echo "</tr>"; }
									        }while($myrow_ot = mysql_fetch_array ($ot)); 
									}echo "</table>";
								?>
								
									<p><a name="Davidoff"></a></p>    <!-- ссылка на бренд -->
								<?php
						         $b='Davidoff';
									$ot = mysql_query ("SELECT id, brand, name, type, gr, shleif, price, img FROM katalogman WHERE brand='$b';");
									$myrow_ot = mysql_fetch_array ($ot); 

						            echo "<br><table ><caption align=center bgcolor=green >Бренд: <b>Davidoff</b></caption>";
						            $count=0;
						            
									{
												do { if ($count==0) echo"<tr>";
												$count++; 	
												echo " <td><p> <img src=".$myrow_ot['img']." height=150px width=150px> <b>".$myrow_ot['id']."</b> <br><br> <b>".$myrow_ot['name']."</b> <br><br> ".$myrow_ot['type']." <br> <b>Группа ароматов: </b>".$myrow_ot['gr']."<br><b>Шлейф:</b>".$myrow_ot['shleif']."<br><br><b>Цена: ".$myrow_ot['price']." р</p></td>" ;
										 		if ($count == 4){ //если 3я фотка 
								       			$count=0; 
												echo "</tr>"; }
									        }while($myrow_ot = mysql_fetch_array ($ot)); 
									}echo "</table>";
								?>

									<p><a name="Gabbana"></a></p>    <!-- ссылка на бренд -->
								<?php
						         $b='Dolce & Gabbana';
									$ot = mysql_query ("SELECT id, brand, name, type, gr, shleif, price, img FROM katalogman WHERE brand='$b';");
									$myrow_ot = mysql_fetch_array ($ot); 

						            echo "<br><table ><caption align=center bgcolor=green >Бренд: <b>Dolce & Gabbana</b></caption>";
						            $count=0;
						            
									{
												do { if ($count==0) echo"<tr>";
												$count++; 	
												echo " <td><p> <img src=".$myrow_ot['img']." height=150px width=150px> <b>".$myrow_ot['id']."</b> <br><br> <b>".$myrow_ot['name']."</b> <br><br> ".$myrow_ot['type']." <br> <b>Группа ароматов: </b>".$myrow_ot['gr']."<br><b>Шлейф:</b>".$myrow_ot['shleif']."<br><br><b>Цена: ".$myrow_ot['price']." р</p></td>" ;
										 		if ($count == 4){ //если 3я фотка 
								       			$count=0; 
												echo "</tr>"; }
									        }while($myrow_ot = mysql_fetch_array ($ot)); 
									}echo "</table>";
								?> 


							<p><a name="Donna"></a></p>    <!-- ссылка на бренд -->
								<?php
						         $b='Donna Karan';
									$ot = mysql_query ("SELECT id, brand, name, type, gr, shleif, price, img FROM katalogman WHERE brand='$b';");
									$myrow_ot = mysql_fetch_array ($ot); 

						            echo "<br><table ><caption align=center bgcolor=green >Бренд: <b>Donna Karan</b></caption>";
						            $count=0;
						            
									{
												do { if ($count==0) echo"<tr>";
												$count++; 	
												echo " <td><p> <img src=".$myrow_ot['img']." height=150px width=150px> <b>".$myrow_ot['id']."</b> <br><br> <b>".$myrow_ot['name']."</b> <br><br> ".$myrow_ot['type']." <br> <b>Группа ароматов: </b>".$myrow_ot['gr']."<br><b>Шлейф:</b>".$myrow_ot['shleif']."<br><br><b>Цена: ".$myrow_ot['price']." р</p></td>" ;
										 		if ($count == 4){ //если 3я фотка 
								       			$count=0; 
												echo "</tr>"; }
									        }while($myrow_ot = mysql_fetch_array ($ot)); 
									}echo "</table>";
								?>

								<p><a name="Dsquared2"></a></p>    <!-- ссылка на бренд -->
								<?php
						         $b='Dsquared2';
									$ot = mysql_query ("SELECT id, brand, name, type, gr, shleif, price, img FROM katalogman WHERE brand='$b';");
									$myrow_ot = mysql_fetch_array ($ot); 

						            echo "<br><table ><caption align=center bgcolor=green >Бренд: <b>Dsquared2</b></caption>";
						            $count=0;
						            
									{
												do { if ($count==0) echo"<tr>";
												$count++; 	
												echo " <td><p> <img src=".$myrow_ot['img']." height=150px width=150px> <b>".$myrow_ot['id']."</b> <br><br> <b>".$myrow_ot['name']."</b> <br><br> ".$myrow_ot['type']." <br> <b>Группа ароматов: </b>".$myrow_ot['gr']."<br><b>Шлейф:</b>".$myrow_ot['shleif']."<br><br><b>Цена: ".$myrow_ot['price']." р</p></td>" ;
										 		if ($count == 4){ //если 3я фотка 
								       			$count=0; 
												echo "</tr>"; }
									        }while($myrow_ot = mysql_fetch_array ($ot)); 
									}echo "</table>";
								?>

								<p><a name="Escada"></a></p>    <!-- ссылка на бренд -->
								<?php
						         $b='Escada';
									$ot = mysql_query ("SELECT id, brand, name, type, gr, shleif, price, img FROM katalogman WHERE brand='$b';");
									$myrow_ot = mysql_fetch_array ($ot); 

						            echo "<br><table ><caption align=center bgcolor=green >Бренд: <b>Escada</b></caption>";
						            $count=0;
						            
									{
												do { if ($count==0) echo"<tr>";
												$count++; 	
												echo " <td><p> <img src=".$myrow_ot['img']." height=150px width=150px> <b>".$myrow_ot['id']."</b> <br><br> <b>".$myrow_ot['name']."</b> <br><br> ".$myrow_ot['type']." <br> <b>Группа ароматов: </b>".$myrow_ot['gr']."<br><b>Шлейф:</b>".$myrow_ot['shleif']."<br><br><b>Цена: ".$myrow_ot['price']." р</p></td>" ;
										 		if ($count == 4){ //если 3я фотка 
								       			$count=0; 
												echo "</tr>"; }
									        }while($myrow_ot = mysql_fetch_array ($ot)); 
									}echo "</table>";
								?> 
								<p><a name="Fendi"></a></p>    <!-- ссылка на бренд -->
								<?php
						         $b='Fendi';
									$ot = mysql_query ("SELECT id, brand, name, type, gr, shleif, price, img FROM katalogman WHERE brand='$b';");
									$myrow_ot = mysql_fetch_array ($ot); 

						            echo "<br><table ><caption align=center bgcolor=green >Бренд: <b>Fendi</b></caption>";
						            $count=0;
						            
									{
												do { if ($count==0) echo"<tr>";
												$count++; 	
												echo " <td><p> <img src=".$myrow_ot['img']." height=150px width=150px> <b>".$myrow_ot['id']."</b> <br><br> <b>".$myrow_ot['name']."</b> <br><br> ".$myrow_ot['type']." <br> <b>Группа ароматов: </b>".$myrow_ot['gr']."<br><b>Шлейф:</b>".$myrow_ot['shleif']."<br><br><b>Цена: ".$myrow_ot['price']." р</p></td>" ;
										 		if ($count == 4){ //если 3я фотка 
								       			$count=0; 
												echo "</tr>"; }
									        }while($myrow_ot = mysql_fetch_array ($ot)); 
									}echo "</table>";
								?>  

								<p><a name="Gianfranco"></a></p>    <!-- ссылка на бренд -->
								<?php
						         $b='Gianfranco Ferre';
									$ot = mysql_query ("SELECT id, brand, name, type, gr, shleif, price, img FROM katalogman WHERE brand='$b';");
									$myrow_ot = mysql_fetch_array ($ot); 

						            echo "<br><table ><caption align=center bgcolor=green >Бренд: <b>Gianfranco Ferre</b></caption>";
						            $count=0;
						            
									{
												do { if ($count==0) echo"<tr>";
												$count++; 	
												echo " <td><p> <img src=".$myrow_ot['img']." height=150px width=150px> <b>".$myrow_ot['id']."</b> <br><br> <b>".$myrow_ot['name']."</b> <br><br> ".$myrow_ot['type']." <br> <b>Группа ароматов: </b>".$myrow_ot['gr']."<br><b>Шлейф:</b>".$myrow_ot['shleif']."<br><br><b>Цена: ".$myrow_ot['price']." р</p></td>" ;
										 		if ($count == 4){ //если 3я фотка 
								       			$count=0; 
												echo "</tr>"; }
									        }while($myrow_ot = mysql_fetch_array ($ot)); 
									}echo "</table>";
								?> 

								<p><a name="Giorgio"></a></p>    <!-- ссылка на бренд -->
								<?php
						         $b='Giorgio Armani';
									$ot = mysql_query ("SELECT id, brand, name, type, gr, shleif, price, img FROM katalogman WHERE brand='$b';");
									$myrow_ot = mysql_fetch_array ($ot); 

						            echo "<br><table ><caption align=center bgcolor=green >Бренд: <b>Giorgio Armani</b></caption>";
						            $count=0;
						            
									{
												do { if ($count==0) echo"<tr>";
												$count++; 	
												echo " <td><p> <img src=".$myrow_ot['img']." height=150px width=150px> <b>".$myrow_ot['id']."</b> <br><br> <b>".$myrow_ot['name']."</b> <br><br> ".$myrow_ot['type']." <br> <b>Группа ароматов: </b>".$myrow_ot['gr']."<br><b>Шлейф:</b>".$myrow_ot['shleif']."<br><br><b>Цена: ".$myrow_ot['price']." р</p></td>" ;
										 		if ($count == 4){ //если 3я фотка 
								       			$count=0; 
												echo "</tr>"; }
									        }while($myrow_ot = mysql_fetch_array ($ot)); 
									}echo "</table>";
								?>




					</div>

				</div>
				</div>

	        </div>
		</body>
	</html> 
	*/ ?>