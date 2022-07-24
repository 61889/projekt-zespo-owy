<?php
session_start();

if(!isset($_SESSION['zalogowany'])) //dodajemy tam gdzie ma wstęp tylko zalogowany 
{
	header('Location: index.php');
	exit();
}
?>
<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="./css/style.css" />
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Edu+SA+Beginner&family=Nunito:ital,wght@1,200&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,200&family=Titillium+Web:wght@200&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@300&display=swap"
			rel="stylesheet"
		/>
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@300&display=swap"
			rel="stylesheet"
		/>
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,200&display=swap"
			rel="stylesheet"
		/>
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,200&family=Roboto+Condensed:wght@300&display=swap"
			rel="stylesheet"
		/>
		<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Edu+SA+Beginner&family=Edu+TAS+Beginner:wght@500&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Edu+SA+Beginner&family=Edu+TAS+Beginner:wght@500&family=Nanum+Gothic&display=swap" rel="stylesheet">
		<title>Gun Smith</title>
	</head>
	<body>
	<?php  
	  require_once "polaczenie.php";
	  $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	  if ($polaczenie->connect_errno!=0)
		{
			echo "Blad polaczenia z baza!".$polaczenie->connect_errno;
		}
		else
		{
			$sql0 = "SELECT * FROM bronie where id=1";
			$sql1 = "SELECT * FROM bronie where id=2";
			$sql2 = "SELECT * FROM bronie where id=3";
			$sql3 = "SELECT * FROM bronie where id=4";
			if ($rez = @$polaczenie->query($sql0))
			{
				$bron_1 = $rez->fetch_assoc();
				$bron_1['nazwa'];
				$bron_1['rpm'];
				$bron_1['speed'];
				$bron_1['time'];
				$bron_1['recoil'];
				$bron_1['recoil_2'];
				$bron_1['recoil_3'];
				$bron_1['m_1'];
				$bron_1['m_2'];
				$bron_1['m_3'];
				$bron_1['s_1'];
				$bron_1['s_2'];
				$bron_1['s_3'];
			}
			if ($rez = @$polaczenie->query($sql1))
			{
				$bron_2 = $rez->fetch_assoc();
				$bron_2['nazwa'];
				$bron_2['rpm'];
				$bron_2['speed'];
				$bron_2['time'];
				$bron_2['recoil'];
				$bron_2['recoil_2'];
				$bron_2['recoil_3'];
				$bron_2['m_1'];
				$bron_2['m_2'];
				$bron_2['m_3'];
				$bron_2['s_1'];
				$bron_2['s_2'];
				$bron_2['s_3'];
			}
			if ($rez = @$polaczenie->query($sql2))
			{
				$bron_3 = $rez->fetch_assoc();
				$bron_3['nazwa'];
				$bron_3['rpm'];
				$bron_3['speed'];
				$bron_3['time'];
				$bron_3['recoil'];
				$bron_3['recoil_2'];
				$bron_3['recoil_3'];
				$bron_3['m_1'];
				$bron_3['m_2'];
				$bron_3['m_3'];
				$bron_3['s_1'];
				$bron_3['s_2'];
				$bron_3['s_3'];
			}
			if ($rez = @$polaczenie->query($sql3))
			{
				$bron_4 = $rez->fetch_assoc();
				$bron_4['nazwa'];
				$bron_4['rpm'];
				$bron_4['speed'];
				$bron_4['time'];
				$bron_4['recoil'];
				$bron_4['recoil_2'];
				$bron_4['recoil_3'];
				$bron_4['m_1'];
				$bron_4['m_2'];
				$bron_4['m_3'];
				$bron_4['s_1'];
				$bron_4['s_2'];
				$bron_4['s_3'];
			}
		}
	?>
		<section class="header">
			<div class="logo">
				<img src="./img/logo.png" alt="Logo" class="logo_image" />
				<span class="writing_logo"><a href="index.php"> Gun Smith </a> </span>
			</div>
			<div class="menu">
				<span class="button_menu"><a href="index.php">Strona Główna </a></span>
				<span class="button_menu"><a href="wyloguj.php">Wyloguj się</a></span>
				<span class="button_menu">Pomoc</span>
			</div>
		</section>
		<section class="content_first">
			<div class="bg"></div>
			<div class="login_panel logged">
			        <div class="welcome">
						<?php
						echo "Witaj ".$_SESSION['user']."!";
						?>
			        </div>
					<div class="instruction">
						<p class="color"> Instrukcja </p>
						<p class="text"> 
							Wybierz dwie bronie z dostępnych i kliknij przycisk - PORÓWNAJ - znajduje się on pod wszystkimi broniami.
							Po przejściu dalej otrzymasz przy porównywanych broniach pogrubione wartości, które są bardziej korzystne.
						</p>
					</div>
			</div>
		</section>
		<section class="content_second">
		<form action="porownanie.php" method="post">
			<div class="weapons">
				<div class="smg">
					<h2>SMG</h2>
					<div class="first-row">
					<div class="first">
							<span class="name_weapon">
								<?php
								echo $bron_1['nazwa'];
								?>
							</span>
							<img src="./img/PP-29.png" alt="Broń PP-29" class="image_weapon" />
							<span class="rpm">
							<?php
								echo $bron_1['rpm'];
								?>
								rpm
							</span>
							<span class="damage_text">Obrażenia</span>
							<img src="./img/pp.png" alt="Broń PP-29" class="damage" />
							<img src="./img/speed.png" alt="Broń PP-29" class="speed" />
							<span class="damage_text">
								Szybkość pocisku
								<?php
								echo $bron_1['speed'];
								?>
								 m/s
							</span>
							<img src="./img/reload.png" alt="Broń PP-29" class="reload" />
							<span class="time">Czas przeładowania</span>
							<span class="time">
							<?php
								echo $bron_1['time'];
								?>s
							</span>
							<span class="recoil">Odrzut podczas stania</span>
							<span class="recoil_text">
							<?php
								echo $bron_1['recoil'];
								?>°
							</span>
							<span class="recoil_text"><?php
								echo $bron_1['recoil_2'];
								?>° -
								 <?php
								echo $bron_1['recoil_3'];
								?>°</span>
							<div class="both">
								<div class="movingd">
									<img src="./img/moving.png" alt="Ruch" class="moving" />
									<span class="moving_txt">
										<?php
										echo $bron_1['m_1'];
										?>°
										<?php
										echo $bron_1['m_2'];
										?>°
										<?php
										echo $bron_1['m_3'];
										?>°
								</span>
								</div>
								<div class="standingd">
								<img src="./img/standing.png" alt="Stanie" class="standing" />
								<span class="standing_txt">
								<?php
										echo $bron_1['s_1'];
										?>°
										<?php
										echo $bron_1['s_2'];
										?>°
										<?php
										echo $bron_1['s_3'];
										?>°
								</span>
							</div>
							</div>
							<p><input type="checkbox" name="weapon_1" value="weapon_1" class="check"/></p>
						</div>
						<div class="first">
							<span class="name_weapon">
								<?php
								echo $bron_2['nazwa'];
								?>
							</span>
							<img src="./img/PBX-45.png" alt="Broń PP-29" class="image_weapon" />
							<span class="rpm">
							<?php
								echo $bron_2['rpm'];
								?>
								rpm
							</span>
							<span class="damage_text">Obrażenia</span>
							<img src="./img/pbx.png" alt="Broń PP-29" class="damage" />
							<img src="./img/speed.png" alt="Broń PP-29" class="speed" />
							<span class="damage_text">
								Szybkość pocisku
								<?php
								echo $bron_2['speed'];
								?>
								 m/s
							</span>
							<img src="./img/reload.png" alt="Broń PP-29" class="reload" />
							<span class="time">Czas przeładowania</span>
							<span class="time">
							<?php
								echo $bron_2['time'];
								?>s
							</span>
							<span class="recoil">Odrzut podczas stania</span>
							<span class="recoil_text">
							<?php
								echo $bron_2['recoil'];
								?>°
							</span>
							<span class="recoil_text"><?php
								echo $bron_2['recoil_2'];
								?>° -
								 <?php
								echo $bron_2['recoil_3'];
								?>°</span>
							<div class="both">
								<div class="movingd">
									<img src="./img/moving.png" alt="Ruch" class="moving" />
									<span class="moving_txt">
										<?php
										echo $bron_2['m_1'];
										?>°
										<?php
										echo $bron_2['m_2'];
										?>°
										<?php
										echo $bron_2['m_3'];
										?>°
								</span>
								</div>
								<div class="standingd">
								<img src="./img/standing.png" alt="Stanie" class="standing" />
								<span class="standing_txt">
								<?php
										echo $bron_2['s_1'];
										?>°
										<?php
										echo $bron_2['s_2'];
										?>°
										<?php
										echo $bron_2['s_3'];
										?>°
								</span>
							</div>
							</div>
							<p><input type="checkbox" name="weapon_2" value="weapon_2" class="check"/></p>
						</div>

				</div>
				<div class="second-row">
				<div class="first">
							<span class="name_weapon">
								<?php
								echo $bron_3['nazwa'];
								?>
							</span>
							<img src="./img/MP9.png" alt="Broń PP-29" class="image_weapon" />
							<span class="rpm">
							<?php
								echo $bron_3['rpm'];
								?>
								rpm
							</span>
							<span class="damage_text">Obrażenia</span>
							<img src="./img/mp.png" alt="Broń PP-29" class="damage" />
							<img src="./img/speed.png" alt="Broń PP-29" class="speed" />
							<span class="damage_text">
								Szybkość pocisku
								<?php
								echo $bron_3['speed'];
								?>
								 m/s
							</span>
							<img src="./img/reload.png" alt="Broń PP-29" class="reload" />
							<span class="time">Czas przeładowania</span>
							<span class="time">
							<?php
								echo $bron_3['time'];
								?>s
							</span>
							<span class="recoil">Odrzut podczas stania</span>
							<span class="recoil_text">
							<?php
								echo $bron_3['recoil'];
								?>°
							</span>
							<span class="recoil_text"><?php
								echo $bron_3['recoil_2'];
								?>° -
								 <?php
								echo $bron_3['recoil_3'];
								?>°</span>
							<div class="both">
								<div class="movingd">
									<img src="./img/moving.png" alt="Ruch" class="moving" />
									<span class="moving_txt">
										<?php
										echo $bron_3['m_1'];
										?>°
										<?php
										echo $bron_3['m_2'];
										?>°
										<?php
										echo $bron_3['m_3'];
										?>°
								</span>
								</div>
								<div class="standingd">
								<img src="./img/standing.png" alt="Stanie" class="standing" />
								<span class="standing_txt">
								<?php
										echo $bron_3['s_1'];
										?>°
										<?php
										echo $bron_3['s_2'];
										?>°
										<?php
										echo $bron_3['s_3'];
										?>°
								</span>
							</div>
							</div>
							<p><input type="checkbox" name="weapon_3" value="weapon_3" class="check"/></p>
						</div>
						<div class="first">
							<span class="name_weapon">
								<?php
								echo $bron_4['nazwa'];
								?>
							</span>
							<img src="./img/K30.png" alt="Broń PP-29" class="image_weapon" />
							<span class="rpm">
							<?php
								echo $bron_4['rpm'];
								?>
								rpm
							</span>
							<span class="damage_text">Obrażenia</span>
							<img src="./img/k.png" alt="Broń PP-29" class="damage" />
							<img src="./img/speed.png" alt="Broń PP-29" class="speed" />
							<span class="damage_text">
								Szybkość pocisku
								<?php
								echo $bron_4['speed'];
								?>
								 m/s
							</span>
							<img src="./img/reload.png" alt="Broń PP-29" class="reload" />
							<span class="time">Czas przeładowania</span>
							<span class="time">
							<?php
								echo $bron_4['time'];
								?>s
							</span>
							<span class="recoil">Odrzut podczas stania</span>
							<span class="recoil_text">
							<?php
								echo $bron_4['recoil'];
								?>°
							</span>
							<span class="recoil_text"><?php
								echo $bron_4['recoil_2'];
								?>° -
								 <?php
								echo $bron_4['recoil_3'];
								?>°</span>
							<div class="both">
								<div class="movingd">
									<img src="./img/moving.png" alt="Ruch" class="moving" />
									<span class="moving_txt">
										<?php
										echo $bron_4['m_1'];
										?>°
										<?php
										echo $bron_4['m_2'];
										?>°
										<?php
										echo $bron_4['m_3'];
										?>°
								</span>
								</div>
								<div class="standingd">
								<img src="./img/standing.png" alt="Stanie" class="standing" />
								<span class="standing_txt">
								<?php
										echo $bron_1['s_1'];
										?>°
										<?php
										echo $bron_1['s_2'];
										?>°
										<?php
										echo $bron_1['s_3'];
										?>°
								</span>
							</div>
							</div>
							<p><input type="checkbox" name="weapon_4" value="weapon_4" class="check"/></p>
						</div>
					</div>
				</div>
					</div>
			</div>
			<p><input type="submit" name="submit" value="Porównaj" class="b_compare" href="porownanie.php"/></p>
			</form> 
		</section>
		<footer>
			<span class="copyright">©2022 Michał Krudysz (61890) & Maksymilian Dziadosz (61889)</span>
		</footer>
	</body>
</html>
