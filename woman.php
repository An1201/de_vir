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
				<div class="container cont_verh shir">	
				<div class="row">
	 				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
						<div > 	
							<p><a name="top1"></a></p>
						<span class="main-logo">LaLuten</span>
						<p class="phone pull-right">  тел: +7 //-//-// </p>
						</div>

					</div>
				</div>
				</div>

				<div class="shir container">	
				<div class="row menu_left_right">
					<div class="menu col-lg-12 col-md-12 col-sm-12 col-xs-12 ">

					<ul  class="top_menu nav nav-tabs nav-justified">
						  <li ><a href="index.php" class="menu_a">Главная</a></li>
						  <li class="active"><a href="woman.php" class="menu_a">Женская парфюмерия</a></li>
						  <li><a href="men.php" class="menu_a">Мужская парфюмерия</a></li>
						</ul>
					</div>
				</div>
				</div>

				<?php 

					mysql_connect("localhost","ytQzSvg2","");
					mysql_select_db('mybase'); 
					$err = ''; 

					$query='SET NAMES utf8'; 
					$res = mysql_query($query); 

					$quer = mysql_query("SELECT DISTINCT `brand` FROM katalog;");
					
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
							       
										$query = mysql_query ("SELECT id, brand, name, type, gr, shleif, price, img FROM katalog WHERE brand='$nameOfProduct';");
										$myrow_ot = mysql_fetch_array ($query); 

							            echo "<div><br><table ><caption align=center >Бренд: <b>".$nameOfProduct."</b></caption>";
							            $count=0;
										{ do { if ($count==0) echo"<tr>";
													$count++;
													if ($myrow_ot['img'] ) {
														echo " <td><p> <img src=".$myrow_ot['img']." onerror='this.src = \"/images/flakon.png\"'  height=150px width=150px > <b>".$myrow_ot['id']."</b> <br><br> <b>".$myrow_ot['name']."</b> <br><br> ".$myrow_ot['type']." <br> <b>Группа ароматов: </b>".$myrow_ot['gr']."<br><b>Шлейф:</b>".$myrow_ot['shleif']."<br><br><b>Цена: ".$myrow_ot['price']." р </p></td>" ;
											 		} else {
											 			echo " <td><p> <img src='/images/flakon.png' onerror='this.src = \"/images/flakon.png\"' height=150px width=150px > <b>".$myrow_ot['id']."</b> <br><br> <b>".$myrow_ot['name']."</b> <br><br> ".$myrow_ot['type']." <br> <b>Группа ароматов: </b>".$myrow_ot['gr']."<br><b>Шлейф:</b>".$myrow_ot['shleif']."<br><br><b>Цена: ".$myrow_ot['price']." р </p></td>" ;
											 		}
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

						           
						       