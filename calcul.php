<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8" />
		<title>calcul</title>
		<link rel="stylesheet" href="css_Daymo.css" />
		<!--<link rel="stylesheet" href="style.css" />-->
		<script src="poisson.js"></script>
	</head>
	<body>
		
		<form action="calcul.js">
			<div id="conteneur">
				<div class="boite">
					<h3>Anchois</h3>
						Prix boite : 160 clo's<br/>
						Prix Nook : 200 clo's<br/>
						Prix Pollux : 300 clo's
						
						<p>
							<img src="./Images/Anchois.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementanchois(-1)" />
							<span id="numanchois">0</span>
							<input type="button" name="audessus" value="+" onclick="changementanchois(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazeroanchois()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Arapaïma</h3>
						Prix boite : 8 000 clo's<br/>
						Prix Nook : 10 000 clo's<br/>
						Prix Pollux : 15 000 clo's
						<p>
							<img src="./Images/Arapaima.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementarapaima(-1)" />
							<span id="numarapaima">0</span>
							<input type="button" name="audessus" value="+" onclick="changementarapaima(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazeroarapaima()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Arowana</h3>
						Prix boite : 8 000 clo's<br/>
						Prix Nook : 10 000 clo's<br/>
						Prix Pollux : 15 000 clo's
						<p>
							<img src="./Images/Arowana.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementarowana(-1)" />
							<span id="numarowana">0</span>
							<input type="button" name="audessus" value="+" onclick="changementarowana(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazeroarowana()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Ayu</h3>
						Prix boite : 720 clo's<br/>
						Prix Nook : 900 clo's<br/>
						Prix Pollux : 1 350 clo's
						<p>
								<img src="./Images/Ayu.png"/><br/>
								<input type="button" name="endessous" value="-" onclick="changementayu(-1)" />
								<span id="numayu">0</span>
								<input type="button" name="audessus" value="+" onclick="changementayu(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazeroayu()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Bar</h3>
						Prix boite : 320 clo's<br/>
						Prix Nook : 400 clo's<br/>
						Prix Pollux : 600 clo's
						<p>
							<img src="Images/Bar.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementbar(-1)" />
							<span id="numbar">0</span>
							<input type="button" name="audessus" value="+" onclick="changementbar(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazerobar()"/>
						</p>
				</div>
				
				<div class="boite">
					<h3>Bar commun</h3>
						Prix boite : 320 clo's<br/>
						Prix Nook : 400 clo's<br/>
						Prix Pollux : 600 clo's
						<p>
								<img src="./Images/Barcommun.png"/><br/>
								<input type="button" name="endessous" value="-" onclick="changementbarcommun(-1)" />
								<span id="numbarcommun">0</span>
								<input type="button" name="audessus" value="+" onclick="changementbarcommun(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazerobarcommun()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Bichir</h3>
						Prix boite : 3 200 clo's<br/>
						Prix Nook : 4 000 clo's<br/>
						Prix Pollux : 6 000 clo's
						<p>
								<img src="./Images/Bichir.png"/><br/>
								<input type="button" name="endessous" value="-" onclick="changementbichir(-1)" />
								<span id="numbichir">0</span>
								<input type="button" name="audessus" value="+" onclick="changementbichir(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazerobichir()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Bouvière</h3>
						Prix boite : 720 clo's<br/>
						Prix Nook : 900 clo's<br/>
						Prix Pollux : 1 350 clo's
						<p>
								<img src="./Images/Bouviere.png"/><br/>
								<input type="button" name="endessous" value="-" onclick="changementbouviere(-1)" />
								<span id="numbouviere">0</span>
								<input type="button" name="audessus" value="+" onclick="changementbouviere(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazerobouviere()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Brochet</h3>
						Prix boite : 1 440 clo's<br/>
						Prix Nook : 1 800 clo's<br/>
						Prix Pollux : 2 700 clo's
						<p>
								<img src="./Images/Brochet.png"/><br/>
								<input type="button" name="endessous" value="-" onclick="changementbrochet(-1)" />
								<span id="numbrochet">0</span>
								<input type="button" name="audessus" value="+" onclick="changementbrochet(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazerobrochet()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Calmar</h3>
						Prix boite : 400 clo's<br/>
						Prix Nook : 500 clo's<br/>
						Prix Pollux : 750 clo's
						<p>
							<img src="./Images/Calmar.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementcalmar(-1)" />
							<span id="numcalmar">0</span>
							<input type="button" name="audessus" value="+" onclick="changementcalmar(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazerocalmar()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Carangue grosse tête</h3>
						Prix boite : 3 600 clo's<br/>
						Prix Nook : 4 500 clo's<br/>
						Prix Pollux : 6 750 clo's
						<p>
							<img src="./Images/Caranguegrossetete.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementcaranguegrossetete(-1)" />
							<span id="numcaranguegrossetete">0</span>
							<input type="button" name="audessus" value="+" onclick="changementcaranguegrossetete(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazerocaranguegrossetete()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Carassin</h3>
						Prix boite : 128 clo's<br/>
						Prix Nook : 160 clo's<br/>
						Prix Pollux : 240 clo's
						<p>
							<img src="./Images/Carassin.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementcarassin(-1)" />
							<span id="numcarassin">0</span>
							<input type="button" name="audessus" value="+" onclick="changementcarassin(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazerocarassin()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Cardeau</h3>
						Prix boite : 640 clo's<br/>
						Prix Nook : 800 clo's<br/>
						Prix Pollux : 1 200 clo's
						<p>
								<img src="./Images/Cardeau.png"/><br/>
								<input type="button" name="endessous" value="-" onclick="changementcardeau(-1)" />
								<span id="numcardeau">0</span>
								<input type="button" name="audessus" value="+" onclick="changementcardeau(+1)" />
						</p>
						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazerocardeau()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Carpe</h3>
						Prix boite : 240 clo's<br/>
						Prix Nook : 300 clo's<br/>
						Prix Pollux : 450 clo's
						<p>
							<img src="./Images/Carpe.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementcarpe(-1)" />
							<span id="numcarpe">0</span>
							<input type="button" name="audessus" value="+" onclick="changementcarpe(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazerocarpe()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Carpekoi</h3>
						Prix boite : 3 200 clo's<br/>
						Prix Nook : 4 000 clo's<br/>
						Prix Pollux : 6 000 clo's
						<p>
								<img src="./Images/CarpeKoi.png"/><br/>
								<input type="button" name="endessous" value="-" onclick="changementcarpekoi(-1)" />
								<span id="numcarpekoi">0</span>
								<input type="button" name="audessus" value="+" onclick="changementcarpekoi(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazerocarpekoi()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Chevaine</h3>
						Prix boite : 128 clo's<br/>
						Prix Nook : 160 clo's<br/>
						Prix Pollux : 240 clo's
						<p>
							<img src="./Images/Chevaine.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementchevaine(-1)" />
							<span id="numchevaine">0</span>
							<input type="button" name="audessus" value="+" onclick="changementchevaine(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazerochevaine()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Chinchard</h3>
						Prix boite : 120 clo's<br/>
						Prix Nook : 150 clo's<br/>
						Prix Pollux : 225 clo's
						<p>
								<img src="./Images/Chinchard.png"/><br/>
								<input type="button" name="endessous" value="-" onclick="changementchinchard(-1)" />
								<span id="numchinchard">0</span>
								<input type="button" name="audessus" value="+" onclick="changementchinchard(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazerochinchard()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Clione</h3>
						Prix boite : 800 clo's<br/>
						Prix Nook : 1 000 clo's<br/>
						Prix Pollux : 1 500 clo's
						<p>
							<img src="./Images/Clione.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementclione(-1)" />
							<span id="numclione">0</span>
							<input type="button" name="audessus" value="+" onclick="changementclione(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazeroclione()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Coelacanthe</h3>
						Prix boite : 12 000 clo's<br/>
						Prix Nook : 15 000 clo's<br/>
						Prix Pollux : 22 500 clo's
						<p>
								<img src="./Images/Coelacanthe.png"/><br/>
								<input type="button" name="endessous" value="-" onclick="changementcoelacanthe(-1)" />
								<span id="numcoelacanthe">0</span>
								<input type="button" name="audessus" value="+" onclick="changementcoelacanthe(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazerocoelacanthe()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Combattant</h3>
						Prix boite : 2 000 clo's<br/>
						Prix Nook : 2 500 clo's<br/>
						Prix Pollux : 3 750 clo's
						<p>
								<img src="./Images/Combattant.png"/><br/>
								<input type="button" name="endessous" value="-" onclick="changementcombattant(-1)" />
								<span id="numcombattant">0</span>
								<input type="button" name="audessus" value="+" onclick="changementcombattant(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazerocombattant()"/>
						</p>
				</div>
				
				<div class="boite">
					<h3>Coryphène</h3>
						Prix boite : 9 600 clo's<br/>
						Prix Nook : 12 000 clo's<br/>
						Prix Pollux : 18 000 clo's
						<p>
							<img src="./Images/Coryphene.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementcoryphene(-1)" />
							<span id="numcoryphene">0</span>
							<input type="button" name="audessus" value="+" onclick="changementcoryphene(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazerocoryphene()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Crabe chinois</h3>
						Prix boite : 1 600 clo's<br/>
						Prix Nook : 2 000 clo's<br/>
						Prix Pollux : 3 000 clo's
						<p>
								<img src="./Images/Crabechinois.png"/><br/>
								<input type="button" name="endessous" value="-" onclick="changementcrabechinois(-1)" />
								<span id="numcrabechinois">0</span>
								<input type="button" name="audessus" value="+" onclick="changementcrabechinois(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazerocrabechinois()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Crapet</h3>
						Prix boite : 96 clo's<br/>
						Prix Nook : 120 clo's<br/>
						Prix Pollux : 180 clo's
						<p>
							<img src="./Images/Crapet.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementcrapet(-1)" />
							<span id="numcrapet">0</span>
							<input type="button" name="audessus" value="+" onclick="changementcrapet(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazerocrapet()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Cyprin doré</h3>
						Prix boite : 1 040 clo's<br/>
						Prix Nook : 1 300 clo's<br/>
						Prix Pollux : 1 950 clo's
						<p>
							<img src="./Images/Cyprindore.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementcyprindore(-1)" />
							<span id="numcyprindore">0</span>
							<input type="button" name="audessus" value="+" onclick="changementcyprindore(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazerocyprindore()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Dai yu</h3>
						Prix boite : 12 000 clo's<br/>
						Prix Nook : 15 000 clo's<br/>
						Prix Pollux : 22 500 clo's
						<p>
							<img src="./Images/Daiyu.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementdaiyu(-1)" />
							<span id="numdaiyu">0</span>
							<input type="button" name="audessus" value="+" onclick="changementdaiyu(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazerodaiyu()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Dorade</h3>
						Prix boite : 12 000 clo's<br/>
						Prix Nook : 15 000 clo's<br/>
						Prix Pollux : 22 500 clo's
						<p>
							<img src="./Images/Dorade.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementdorade(-1)" />
							<span id="numdorade">0</span>
							<input type="button" name="audessus" value="+" onclick="changementdorade(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazerodorade()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Ecrevisse</h3>
						Prix boite : 160 clo's<br/>
						Prix Nook : 200 clo's<br/>
						Prix Pollux : 300 clo's
						<p>
							<img src="./Images/Ecrevisse.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementecrevisse(-1)" />
							<span id="numecrevisse">0</span>
							<input type="button" name="audessus" value="+" onclick="changementecrevisse(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazeroecrevisse()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Eperlan</h3>
						Prix boite : 256 clo's<br/>
						Prix Nook : 320 clo's<br/>
						Prix Pollux : 480 clo's
						<p>
							<img src="./Images/Eperlan.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementeperlan(-1)" />
							<span id="numeperlan">0</span>
							<input type="button" name="audessus" value="+" onclick="changementeperlan(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazeroeperlan()"/>
						</p>
				</div>
				
				<div class="boite">
					<h3>Esturgeon</h3>
						Prix boite : 8 000 clo's<br/>
						Prix Nook : 10 000 clo's<br/>
						Prix Pollux : 15 000 clo's
						<p>
							<img src="./Images/Esturgeon.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementesturgeon(-1)" />
							<span id="numesturgeon">0</span>
							<input type="button" name="audessus" value="+" onclick="changementesturgeon(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazeroesturgeon()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Fondule barré</h3>
						Prix boite : 240 clo's<br/>
						Prix Nook : 300 clo's<br/>
						Prix Pollux : 450 clo's
						<p>
							<img src="./Images/Fondulebarre.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementfondulebarre(-1)" />
							<span id="numfondulebarre">0</span>
							<input type="button" name="audessus" value="+" onclick="changementfondulebarre(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazerofondulebarre()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Gar</h3>
						Prix boite : 4 800 clo's<br/>
						Prix Nook : 6 000 clo's<br/>
						Prix Pollux : 9 000 clo's
						<p>
							<img src="./Images/Gar.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementgar(-1)" />
							<span id="numgar">0</span>
							<input type="button" name="audessus" value="+" onclick="changementgar(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazerogar()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Gobie d'eau douce</h3>
						Prix boite : 320 clo's<br/>
						Prix Nook : 400 clo's<br/>
						Prix Pollux : 600 clo's
						<p>
								<img src="./Images/Gobiedeaudouce.png"/><br/>
								<input type="button" name="endessous" value="-" onclick="changementgobiedeaudouce(-1)" />
								<span id="numgobiedeaudouce">0</span>
								<input type="button" name="audessus" value="+" onclick="changementgobiedeaudouce(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazerogobiedeaudouce()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Grand requin blanc</h3>
						Prix boite : 12 000 clo's<br/>
						Prix Nook : 15 000 clo's<br/>
						Prix Pollux : 22 500 clo's
						<p>
								<img src="./Images/Grandrequinblanc.png"/><br/>
								<input type="button" name="endessous" value="-" onclick="changementgrandrequinblanc(-1)" />
								<span id="numgrandrequinblanc">0</span>
								<input type="button" name="audessus" value="+" onclick="changementgrandrequinblanc(+1)" />
						</p>
						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazerograndrequinblanc()"/>
						</p>
				</div>
				
				<div class="boite">
					<h3>Grenouille</h3>
						Prix boite : 96 clo's<br/>
						Prix Nook : 120 clo's<br/>
						Prix Pollux : 180 clo's
						<p>
							<img src="./Images/Grenouille.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementgrenouille(-1)" />
							<span id="numgrenouille">0</span>
							<input type="button" name="audessus" value="+" onclick="changementgrenouille(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazerogrenouille()"/>
						</p>
				</div>
			
				<div class="boite">
					<h3>Guppy</h3>
						Prix boite : 1 040 clo's<br/>
						Prix Nook : 1 300 clo's<br/>
						Prix Pollux : 1 950 clo's
						<p>
							<img src="./Images/Guppy.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementguppy(-1)" />
							<span id="numguppy">0</span>
							<input type="button" name="audessus" value="+" onclick="changementguppy(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazeroguppy()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Hippocampe</h3>
						Prix boite : 880 clo's<br/>
						Prix Nook : 1100 clo's<br/>
						Prix Pollux : 1650 clo's
						<p>
							<img src="./Images/Hippocampe.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementhippocampe(-1)" />
							<span id="numhippocampe">0</span>
							<input type="button" name="audessus" value="+" onclick="changementhippocampe(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazerohippocampe()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Limande</h3>
						Prix boite : 240 clo's<br/>
						Prix Nook : 300 clo's<br/>
						Prix Pollux : 450 clo's
						<p>
							<img src="./Images/Limande.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementlimande(-1)" />
							<span id="numlimande">0</span>
							<input type="button" name="audessus" value="+" onclick="changementlimande(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazerolimande()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Loche d'étang</h3>
						Prix boite : 240 clo's<br/>
						Prix Nook : 300 clo's<br/>
						Prix Pollux : 450 clo's
						<p>
							<img src="./Images/Lochedetang.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementlochedetang(-1)" />
							<span id="numlochedetang">0</span>
							<input type="button" name="audessus" value="+" onclick="changementlochedetang(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazerolochedetang()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Lune de mer</h3>
						Prix boite : 3 200 clo's<br/>
						Prix Nook : 4 000 clo's<br/>
						Prix Pollux : 6 000 clo's
						<p>
							<img src="./Images/Lunedemer.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementlunedemer(-1)" />
							<span id="numlunedemer">0</span>
							<input type="button" name="audessus" value="+" onclick="changementlunedemer(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazerolunedemer()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Macropinna</h3>
						Prix boite : 12 000 clo's<br/>
						Prix Nook : 15 000 clo's<br/>
						Prix Pollux : 22 500 clo's
						<p>
							<img src="./Images/Macropinna.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementmacropinna(-1)" />
							<span id="nummacropinna">0</span>
							<input type="button" name="audessus" value="+" onclick="changementmacropinna(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazeromacropinna()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Murène</h3>
						Prix boite : 1 600 clo's<br/>
						Prix Nook : 2 000 clo's<br/>
						Prix Pollux : 3 000 clo's
						<p>
							<img src="./Images/Murene.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementmurene(-1)" />
							<span id="nummurene">0</span>
							<input type="button" name="audessus" value="+" onclick="changementmurene(+1)" /><br/>
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazeromurene()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Murène ruban bleu</h3>
						Prix boite : 480 clo's<br/>
						Prix Nook : 600 clo's<br/>
						Prix Pollux : 900 clo's
						<p>
								<img src="./Images/Murenerubanbleu.png"/><br/>
								<input type="button" name="endessous" value="-" onclick="changementmurenerubanbleu(-1)" />
								<span id="nummurenerubanbleu">0</span>
								<input type="button" name="audessus" value="+" onclick="changementmurenerubanbleu(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazeromurenerubanbleu()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Napoleon</h3>
						Prix boite : 8 000 clo's<br/>
						Prix Nook : 10 000 clo's<br/>
						Prix Pollux : 15 000 clo's
						<p>
								<img src="./Images/Napoleon.png"/><br/>
								<input type="button" name="endessous" value="-" onclick="changementnapoleon(-1)" />
								<span id="numnapoleon">0</span>
								<input type="button" name="audessus" value="+" onclick="changementnapoleon(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazeronapoleon()"/>
						</p>
				</div>
				
				<div class="boite">
					<h3>Néon bleu</h3>
						Prix boite : 400 clo's<br/>
						Prix Nook : 500 clo's<br/>
						Prix Pollux : 750 clo's
						<p>
							<img src="./Images/Neonbleu.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementneonbleu(-1)" />
							<span id="numneonbleu">0</span>
							<input type="button" name="audessus" value="+" onclick="changementneonbleu(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazeroneonbleu()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Omble</h3>
						Prix boite : 3 040 clo's<br/>
						Prix Nook : 3 800 clo's<br/>
						Prix Pollux : 5 700 clo's
						<p>
							<img src="./Images/Omble.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementomble(-1)" />
							<span id="numomble">0</span>
							<input type="button" name="audessus" value="+" onclick="changementomble(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazeroomble()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Perche jaune</h3>
						Prix boite : 192 clo's<br/>
						Prix Nook : 240 clo's<br/>
						Prix Pollux : 360 clo's
						<p>
							<img src="./Images/Perchejaune.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementperchejaune(-1)" />
							<span id="numperchejaune">0</span>
							<input type="button" name="audessus" value="+" onclick="changementperchejaune(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazeroperchejaune()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Piranha</h3>
						Prix boite : 2 000 clo's<br/>
						Prix Nook : 2 500 clo's<br/>
						Prix Pollux : 3 750 clo's
						<p>
								<img src="./Images/Piranha.png"/><br/>
								<input type="button" name="endessous" value="-" onclick="changementpiranha(-1)" />
								<span id="numpiranha">0</span>
								<input type="button" name="audessus" value="+" onclick="changementpiranha(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazeropiranha()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Poisson ange</h3>
						Prix boite : 2 400 clo's<br/>
						Prix Nook : 3 000 clo's<br/>
						Prix Pollux : 4 500 clo's
						<p>
							<img src="./Images/Poissonange.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementpoissonange(-1)" />
							<span id="numpoissonange">0</span>
							<input type="button" name="audessus" value="+" onclick="changementpoissonange(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazeropoissonange()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Poisson arc-en-ciel</h3>
						Prix boite : 640 clo's<br/>
						Prix Nook : 800 clo's<br/>
						Prix Pollux : 1 200 clo's
						<p>
							<img src="./Images/Poissonarcenciel.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementpoissonarcenciel(-1)" />
							<span id="numpoissonarcenciel">0</span>
							<input type="button" name="audessus" value="+" onclick="changementpoissonarcenciel(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazeropoissonarcenciel()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Poisson ballon</h3>
						Prix boite : 4 000 clo's<br/>
						Prix Nook : 5 000clo's<br/>
						Prix Pollux : 7 500 clo's
						<p>
							<img src="./Images/Poissonballon.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementpoissonballon(-1)" />
							<span id="numpoissonballon">0</span>
							<input type="button" name="audessus" value="+" onclick="changementpoissonballon(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazeropoissonballon()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Poisson chirurgien</h3>
						Prix boite : 800 clo's<br/>
						Prix Nook : 1 000 clo's<br/>
						Prix Pollux : 1 500 clo's
						<p>
							<img src="./Images/Poissonchirurgien.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementpoissonchirurgien(-1)" />
							<span id="numpoissonchirurgien">0</span>
							<input type="button" name="audessus" value="+" onclick="changementpoissonchirurgien(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazeropoissonchirurgien()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Poisson clown</h3>
						Prix boite : 520 clo's<br/>
						Prix Nook : 650 clo's<br/>
						Prix Pollux : 975 clo's
						<p>
							<img src="./Images/Poissonclown.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementpoissonclown(-1)" />
							<span id="numpoissonclown">0</span>
							<input type="button" name="audessus" value="+" onclick="changementpoissonclown(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazeropoissonclown()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Poisson docteur</h3>
						Prix boite : 1 200 clo's<br/>
						Prix Nook : 1 500 clo's<br/>
						Prix Pollux : 2 250 clo's
						<p>
							<img src="./Images/Poissondocteur.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementpoissondocteur(-1)" />
							<span id="numpoissondocteur">0</span>
							<input type="button" name="audessus" value="+" onclick="changementpoissondocteur(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazeropoissondocteur()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Poisson lanterne</h3>
						Prix boite : 2 000 clo's<br/>
						Prix Nook : 2 500 clo's<br/>
						Prix Pollux : 3 750 clo's
						<p>
							<img src="./Images/Poissonlanterne.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementpoissonlanterne(-1)" />
							<span id="numpoissonlanterne">0</span>
							<input type="button" name="audessus" value="+" onclick="changementpoissonlanterne(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazeropoissonlanterne()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Poisson papillon</h3>
						Prix boite : 800 clo's<br/>
						Prix Nook : 1 000 clo's<br/>
						Prix Pollux : 1 500 clo's
						<p>
							<img src="./Images/Poissonpapillon.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementpoissonpapillon(-1)" />
							<span id="numpoissonpapillon">0</span>
							<input type="button" name="audessus" value="+" onclick="changementpoissonpapillon(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazeropoissonpapillon()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Poisson porc-épic</h3>
						Prix boite : 200 clo's<br/>
						Prix Nook : 250 clo's<br/>
						Prix Pollux : 375 clo's
						<p>
							<img src="./Images/Poissonporcepic.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementpoissonporcepic(-1)" />
							<span id="numpoissonporcepic">0</span>
							<input type="button" name="audessus" value="+" onclick="changementpoissonporcepic(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazeropoissonporcepic()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Poisson rouge</h3>
						Prix boite : 1 040 clo's<br/>
						Prix Nook : 1 300 clo's<br/>
						Prix Pollux : 1 950 clo's
						<p>
							<img src="./Images/Poissonrouge.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementpoissonrouge(-1)" />
							<span id="numpoissonrouge">0</span>
							<input type="button" name="audessus" value="+" onclick="changementpoissonrouge(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazeropoissonrouge()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Poisson ruban</h3>
						Prix boite : 5 760 clo's<br/>
						Prix Nook : 7 200 clo's<br/>
						Prix Pollux : 10 800 clo's
						<p>
							<img src="./Images/Poissonruban.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementpoissonruban(-1)" />
							<span id="numpoissonruban">0</span>
							<input type="button" name="audessus" value="+" onclick="changementpoissonruban(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazeropoissonruban()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Poisson scorpion</h3>
						Prix boite : 400 clo's<br/>
						Prix Nook : 500 clo's<br/>
						Prix Pollux : 750 clo's
						<p>
							<img src="./Images/Poissonscorpion.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementpoissonscorpion(-1)" />
							<span id="numpoissonscorpion">0</span>
							<input type="button" name="audessus" value="+" onclick="changementpoissonscorpion(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazeropoissonscorpion()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Raie</h3>
						Prix boite : 2 400 clo's<br/>
						Prix Nook : 3 000 clo's<br/>
						Prix Pollux : 4 500 clo's
						<p>
							<img src="./Images/Raie.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementraie(-1)" />
							<span id="numraie">0</span>
							<input type="button" name="audessus" value="+" onclick="changementraie(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazeroraie()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Ranchu</h3>
						Prix boite : 3 600 clo's<br/>
						Prix Nook : 4 500 clo's<br/>
						Prix Pollux : 6 750 clo's
						<p>
							<img src="./Images/Ranchu.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementranchu(-1)" />
							<span id="numranchu">0</span>
							<input type="button" name="audessus" value="+" onclick="changementranchu(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazeroranchu()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Rémora rayé</h3>
						Prix boite : 1 200 clo's<br/>
						Prix Nook : 1 500 clo's<br/>
						Prix Pollux : 2 250 clo's
						<p>
							<img src="./Images/Remoraraye.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementremoraraye(-1)" />
							<span id="numremoraraye">0</span>
							<input type="button" name="audessus" value="+" onclick="changementremoraraye(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazeroremoraraye()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Requin baleine</h3>
						Prix boite : 10 400 clo's<br/>
						Prix Nook : 13 000 clo's<br/>
						Prix Pollux : 19 500 clo's
						<p>
							<img src="./Images/Requinbaleine.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementrequinbaleine(-1)" />
							<span id="numrequinbaleine">0</span>
							<input type="button" name="audessus" value="+" onclick="changementrequinbaleine(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazerorequinbaleine()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Requin marteau</h3>
						Prix boite : 6 400 clo's<br/>
						Prix Nook : 8 000 clo's<br/>
						Prix Pollux : 12 000 clo's
						<p>
							<img src="./Images/Requinmarteau.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementrequinmarteau(-1)" />
							<span id="numrequinmarteau">0</span>
							<input type="button" name="audessus" value="+" onclick="changementrequinmarteau(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazerorequinmarteau()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Requin scie</h3>
						Prix boite : 9 600 clo's<br/>
						Prix Nook : 12 000 clo's<br/>
						Prix Pollux : 18 000 clo's
						<p>
								<img src="./Images/Requinscie.png"/><br/>
								<input type="button" name="endessous" value="-" onclick="changementrequinscie(-1)" />
								<span id="numrequinscie">0</span>
								<input type="button" name="audessus" value="+" onclick="changementrequinscie(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazerorequinscie()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Saumon</h3>
						Prix boite : 560 clo's<br/>
						Prix Nook : 700 clo's<br/>
						Prix Pollux : 1 050 clo's
						<p>
							<img src="./Images/Saumon.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementsaumon(-1)" />
							<span id="numsaumon">0</span>
							<input type="button" name="audessus" value="+" onclick="changementsaumon(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazerosaumon()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Saumon masou</h3>
						Prix boite : 800 clo's<br/>
						Prix Nook : 1 000 clo's<br/>
						Prix Pollux : 1 500 clo's
						<p>
							<img src="./Images/Saumonmasou.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementsaumonmasou(-1)" />
							<span id="numsaumonmasou">0</span>
							<input type="button" name="audessus" value="+" onclick="changementsaumonmasou(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazerosaumonmasou()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Saumon roi</h3>
						Prix boite : 1 440 clo's<br/>
						Prix Nook : 1 800 clo's<br/>
						Prix Pollux : 2 700 clo's
						<p>
							<img src="./Images/Saumonroi.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementsaumonroi(-1)" />
							<span id="numsaumonroi">0</span>
							<input type="button" name="audessus" value="+" onclick="changementsaumonroi(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazerosaumonroi()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Scarus</h3>
						Prix boite : 4 000 clo's<br/>
						Prix Nook : 5 000 clo's<br/>
						Prix Pollux : 7 500 clo's
						<p>
							<img src="./Images/Scarus.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementscarus(-1)" />
							<span id="numscarus">0</span>
							<input type="button" name="audessus" value="+" onclick="changementscarus(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazeroscarus()"/>
						</p>
				</div>
			
				<div class="boite">
					<h3>Silure</h3>
						Prix boite : 640 clo's<br/>
						Prix Nook : 800 clo's<br/>
						Prix Pollux : 1 200 clo's
						<p>
							<img src="./Images/Silure.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementsilure(-1)" />
							<span id="numsilure">0</span>
							<input type="button" name="audessus" value="+" onclick="changementsilure(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazerosilure()"/>
						</p>
				</div>
				
				<div class="boite">
					<h3>Têtard</h3>
						Prix boite : 96 clo's<br/>
						Prix Nook : 120 clo's<br/>
						Prix Pollux : 180 clo's
						<p>
							<img src="./Images/Tetard.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementtetard(-1)" />
							<span id="numtetard">0</span>
							<input type="button" name="audessus" value="+" onclick="changementtetard(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazerotetard()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Tête de serpent</h3>
						Prix boite : 4 400 clo's<br/>
						Prix Nook : 5 500 clo's<br/>
						Prix Pollux : 8 250 clo's
						<p>
							<img src="./Images/Tetedeserpent.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementtetedeserpent(-1)" />
							<span id="numtetedeserpent">0</span>
							<input type="button" name="audessus" value="+" onclick="changementtetedeserpent(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazerotetedeserpent()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Thon</h3>
						Prix boite : 5 600 clo's<br/>
						Prix Nook : 7 000 clo's<br/>
						Prix Pollux : 10 500 clo's
						<p>
							<img src="./Images/Thon.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementthon(-1)" />
							<span id="numthon">0</span>
							<input type="button" name="audessus" value="+" onclick="changementthon(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazerothon()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Tilapia</h3>
						Prix boite : 640 clo's<br/>
						Prix Nook : 800 clo's<br/>
						Prix Pollux : 1 200 clo's
						<p>
								<img src="./Images/Tilapia.png"/><br/>
								<input type="button" name="endessous" value="-" onclick="changementtilapia(-1)" />
								<span id="numtilapia">0</span>
								<input type="button" name="audessus" value="+" onclick="changementtilapia(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazerotilapia()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Tortue serpentine</h3>
						Prix boite : 4 000 clo's<br/>
						Prix Nook : 5 000 clo's<br/>
						Prix Pollux : 7 500 clo's
						<p>
							<img src="./Images/Tortueserpentine.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementtortueserpentine(-1)" />
							<span id="numtortueserpentine">0</span>
							<input type="button" name="audessus" value="+" onclick="changementtortueserpentine(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazerotortueserpentine()"/>
						</p>					
				</div>

				<div class="boite">
					<h3>Tortue trionyx</h3>
						Prix boite : 3 000 clo's<br/>
						Prix Nook : 3 750 clo's<br/>
						Prix Pollux : 5 625 clo's
						<p>
							<img src="./Images/Tortuetrionyx.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementtortuetrionyx(-1)" />
							<span id="numtortuetrionyx">0</span>
							<input type="button" name="audessus" value="+" onclick="changementtortuetrionyx(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazerotortuetrionyx()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Truite dorée</h3>
						Prix boite : 12 000 clo's<br/>
						Prix Nook : 15 000 clo's<br/>
						Prix Pollux : 22 500 clo's
						<p>
							<img src="./Images/Truitedoree.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementtruitedoree(-1)" />
							<span id="numtruitedoree">0</span>
							<input type="button" name="audessus" value="+" onclick="changementtruitedoree(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazerotruitedoree()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Vandoise</h3>
						Prix boite : 192 clo's<br/>
						Prix Nook : 240 clo's<br/>
						Prix Pollux : 360 clo's
						<p>
							<img src="./Images/Vandoise.png"/><br/>
							<input type="button" name="endessous" value="-" onclick="changementvandoise(-1)" />
							<span id="numvandoise">0</span>
							<input type="button" name="audessus" value="+" onclick="changementvandoise(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazerovandoise()"/>
						</p>
				</div>

				<div class="boite">
					<h3>Vivaneau</h3>
						Prix boite : 2 400 clo's<br/>
						Prix Nook : 3 000 clo's<br/>
						Prix Pollux : 4 500 clo's
						<p>
								<img src="./Images/Vivaneau.png"/><br/>
								<input type="button" name="endessous" value="-" onclick="changementvivaneau(-1)" />
								<span id="numvivaneau">0</span>
								<input type="button" name="audessus" value="+" onclick="changementvivaneau(+1)" />
						</p>

						<p>
							<input type="button" name="zero" value="reset" onclick="remiseazerovivaneau()"/>
						</p>
				</div>
			</div>
		</form>

		<nav>
			<p>Dans la boite nook : 
				<span id="box">Total : </span>
				<input type="button" name="zero" value="reset" onclick="remiseazerototal()"/></div>
			</p>

			<p>Chez nook : 
				<span id="nook">Total : </span>
				<input type="button" name="zero" value="reset" onclick="remiseazerototal()"/></div>
			</p>

			<p>Chez Pollux : 
				<span id="Pollux">Total : </span>
				<input type="button" name="zero" value="reset" onclick="remiseazerototal()"/></div>
			</p>

		</nav>

		<footer>
			<p>En construction</p>
		</footer>

	<div id="sfcxx42ruzar5tx8p4q3qj8u2y9splhdelr"></div>
		<script type="text/javascript" src="https://counter11.stat.ovh/private/counter.js?c=xx42ruzar5tx8p4q3qj8u2y9splhdelr&down=async" async></script>
		<br/>
		<noscript>
			<a href="https://www.compteurdevisite.com" title="widget compteur de visites gratuit">
				<img src="https://counter11.stat.ovh/private/compteurdevisite.php?c=xx42ruzar5tx8p4q3qj8u2y9splhdelr" border="0" title="widget compteur de visites gratuit" alt="widget compteur de visites gratuit">
			</a>
		</noscript>
	</div>


	</body>
</html>
