const ANCHOIS_PRIX = 200;
const ARAPAIMA_PRIX = 10000;
const AROWANA_PRIX = 10000;
const AYU_PRIX = 900;
const BAR_PRIX = 400;
const BARCOMMUN_PRIX = 400;
const BICHIR_PRIX = 4000;
const BOUVIERE_PRIX = 900;
const BROCHET_PRIX = 1800;
const CALMAR_PRIX = 500;
const CARANGUEGROSSETETE_PRIX = 4500;
const CARASSIN_PRIX = 160; 
const CARDEAU_PRIX = 800;
const CARPE_PRIX = 300;
const CARPEKOI_PRIX = 4000;
const CHEVAINE_PRIX = 160; 
const CHINCHARD_PRIX = 150;
const CLIONE_PRIX = 1000;
const COELACANTHE_PRIX = 15000;
const COMBATTANT_PRIX = 2500;
const CORYPHENE_PRIX = 12000;
const CRABECHINOIS_PRIX = 2000;
const CRAPET_PRIX = 120;
const CYPRINDORE_PRIX = 1300;
const DAIYU_PRIX = 15000;
const DORADE_PRIX = 15000;
const ECREVISSE_PRIX = 200;
const EPERLAN_PRIX = 320;
const ESTURGEON_PRIX = 10000;
const FONDULEBARRE_PRIX = 300;
const GAR_PRIX = 6000;
const GOBIEDEAUDOUCE_PRIX = 400;
const GRANDREQUINBLANC_PRIX = 15000;
const GRENOUILLE_PRIX = 120;
const GUPPY_PRIX = 1300; 
const HIPPOCAMPE_PRIX = 1100;
const LIMANDE_PRIX = 300;
const LOCHEDETANG_PRIX = 300;
const LUNEDEMER_PRIX = 4000;
const MACROPINNA_PRIX = 15000;
const MARLINBLEU_PRIX = 10000;
const MURENE_PRIX = 2000;
const MURENERUBANBLEU_PRIX = 600;
const NAPOLEON_PRIX = 10000;
const NEONBLEU_PRIX = 500;
const OMBLE_PRIX = 3800; 
const PERCHEJAUNE_PRIX = 240;
const PIRANHA_PRIX = 2500;
const POISSONANGE_PRIX = 3000; 
const POISSONARCENCIEL_PRIX = 800;
const POISSONBALLON_PRIX = 5000;
const POISSONCHIRURGIEN_PRIX = 1000;
const POISSONCLOWN_PRIX = 650;
const POISSONDOCTEUR_PRIX = 1500; 
const POISSONLANTERNE_PRIX = 2500;
const POISSONPAPILLON_PRIX = 1000;
const POISSONPORCEPIC_PRIX = 250;
const POISSONROUGE_PRIX = 1300;
const POISSONRUBAN_PRIX = 7200;
const POISSONSCORPION_PRIX = 500;
const RAIE_PRIX = 3000;
const RANCHU_PRIX = 4500;
const REMORARAYE_PRIX = 1500;
const REQUINBALEINE_PRIX = 13000;
const REQUINMARTEAU_PRIX = 8000;
const REQUINSCIE_PRIX = 12000;
const SAUMON_PRIX = 700;
const SAUMONMASOU_PRIX = 1000;
const SAUMONROI_PRIX = 1800;
const SCARUS_PRIX = 5000;
const SILURE_PRIX = 800;
const TETARD_PRIX = 120;
const TETEDESERPENT_PRIX = 5500;
const THON_PRIX = 7000;
const TILAPIA_PRIX = 800;
const TORTUESERPENTINE_PRIX = 5000;
const TORTUETRIONYX_PRIX = 3750;
const TRUITEDOREE_PRIX = 15000;
const VANDOISE_PRIX = 240;
const VIVANEAU_PRIX = 3000;
const BOITE = 0.8;
const POLLUX = 1.5;

let anchois  = 0;
let arapaima = 0;
let arowana = 0;
let ayu = 0;
let bar = 0;
let barcommun = 0;
let bichir = 0;
let bouviere = 0;
let brochet = 0;
let calmar = 0;
let caranguegrossetete = 0;
let carassin = 0;
let cardeau = 0;
let carpe = 0;
let carpekoi = 0;
let chevaine = 0;
let chinchard = 0;
let clione = 0;
let coelacanthe = 0;
let combattant = 0;
let coryphene = 0;
let crabechinois = 0;
let crapet = 0;
let cyprindore = 0;
let daiyu = 0;
let dorade = 0;
let ecrevisse = 0;
let eperlan = 0;
let esturgeon = 0;
let fondulebarre = 0;
let gar = 0;
let gobiedeaudouce = 0;
let grandrequinblanc = 0;
let grenouille = 0;
let guppy = 0;
let hippocampe = 0;
let limande = 0;
let lochedetang = 0;
let lunedemer = 0;
let macropinna = 0;
let marlinbleu = 0;
let murene = 0;
let murenerubanbleu = 0;
let napoleon= 0;
let neonbleu= 0;
let omble = 0;
let perchejaune = 0;
let piranha = 0;
let poissonange = 0;
let poissonarcenciel = 0;
let poissonballon = 0;
let poissonchirurgien = 0;
let poissonclown = 0;
let poissondocteur = 0;
let poissonlanterne = 0;
let poissonpapillon = 0;
let poissonporcepic = 0;
let poissonrouge = 0;
let poissonruban = 0;
let poissonscorpion = 0;
let raie = 0;
let ranchu = 0;
let remoraraye = 0;
let requinbaleine = 0;
let requinmarteau = 0;
let requinscie = 0;
let saumon = 0;
let saumonmasou = 0;
let saumonroi = 0;
let scarus = 0;
let silure = 0;
let tetard = 0;
let tetedeserpent = 0;
let thon = 0;
let tilapia = 0;
let tortueserpentine = 0;
let tortuetrionyx = 0;
let truitedoree = 0;
let vandoise = 0;
let vivaneau = 0;


			function changementanchois(number){
				anchois = Math.max(0, anchois + number); 
				document.getElementById('numanchois').innerHTML = anchois; 
				totalo();
			}

			function changementarapaima(number){
				arapaima = Math.max(0, arapaima + number); 
				document.getElementById('numarapaima').innerHTML = arapaima;
				totalo();
			}

			function changementarowana(number){
				arowana = Math.max(0, arowana + number); 
				document.getElementById('numarowana').innerHTML = arowana;
				totalo();
			}

			function changementayu(number){
				ayu = Math.max(0, ayu + number); 
				document.getElementById('numayu').innerHTML = ayu;
				totalo();
			}

			function changementbar(number){
				bar = Math.max(0, bar + number);
				document.getElementById('numbar').innerHTML = bar;
				totalo();
			}

			function changementbarcommun(number){
				barcommun = Math.max(0, barcommun + number); 
				document.getElementById('numbarcommun').innerHTML = barcommun; 
				totalo();
			}

			function changementbichir(number){
				bichir = Math.max(0, bichir + number); 
				document.getElementById('numbichir').innerHTML = bichir; 
				totalo();
			}

			function changementbouviere(number){
				bouviere = Math.max(0, bouviere + number); 
				document.getElementById('numbouviere').innerHTML = bouviere; 
				totalo();
			}

			function changementbrochet(number){
				brochet = Math.max(0, brochet + number); 
				document.getElementById('numbrochet').innerHTML = brochet; 
				totalo();
			}

			function changementcalmar(number){
				calmar = Math.max(0, calmar + number);
				document.getElementById('numcalmar').innerHTML = calmar;
				totalo();
			}

			function changementcaranguegrossetete(number){
				caranguegrossetete = Math.max(0, caranguegrossetete + number);
				document.getElementById('numcaranguegrossetete').innerHTML = caranguegrossetete;
				totalo();
			}

			function changementcarassin(number){
				carassin = Math.max(0, carassin + number)
				document.getElementById('numcarassin').innerHTML = carassin;
				totalo();
			}

			function changementcardeau(number){
				cardeau = Math.max(0, cardeau + number); 
				document.getElementById('numcardeau').innerHTML = cardeau; 
				totalo();
			}

			function changementcarpe(number){
				carpe = Math.max(0, carpe + number)
				document.getElementById('numcarpe').innerHTML = carpe;
				totalo();
			}

			function changementcarpekoi(number){
				carpekoi = Math.max(0, carpekoi + number); 
				document.getElementById('numcarpekoi').innerHTML = carpekoi; 
				totalo();
			}

			function changementchevaine(number){
				chevaine = Math.max(0, chevaine + number)
				document.getElementById('numchevaine').innerHTML = chevaine;
				totalo();
			}

			function changementchinchard(number){
				chinchard= Math.max(0, chinchard + number); 
				document.getElementById('numchinchard').innerHTML = chinchard; 
				totalo();
			}

			function changementclione(number){
				clione = Math.max(0, clione + number);
				document.getElementById('numclione').innerHTML = clione;
				totalo();
			}

			function changementcoelacanthe(number){
				coelacanthe = Math.max(0, coelacanthe + number); 
				document.getElementById('numcoelacanthe').innerHTML = coelacanthe; 
				totalo();
			}

			function changementcombattant(number){
				combattant = Math.max(0, combattant + number); 
				document.getElementById('numcombattant').innerHTML = combattant; 
				totalo();
			}

			function changementcoryphene(number){
				coryphene = Math.max(0, coryphene + number);
				document.getElementById('numcoryphene').innerHTML = coryphene;
				totalo();
			}

			function changementcrabechinois(number){
				crabechinois= Math.max(0, crabechinois + number); 
				document.getElementById('numcrabechinois').innerHTML = crabechinois; 
				totalo();
			}

			function changementcrapet(number){
				crapet = Math.max(0, crapet + number);
				document.getElementById('numcrapet').innerHTML = crapet;
				totalo();
			}

			function changementcyprindore(number){
				cyprindore = Math.max(0, cyprindore + number); 
				document.getElementById('numcyprindore').innerHTML = cyprindore; 
				totalo();
			}

			function changementdaiyu(number){
				daiyu = Math.max(0, daiyu + number); 
				document.getElementById('numdaiyu').innerHTML = daiyu; 
				totalo();
			}

			function changementdorade(number){
				dorade= Math.max(0, dorade + number); 
				document.getElementById('numdorade').innerHTML = dorade; 
				totalo();
			}

			function changementecrevisse(number){
				ecrevisse= Math.max(0, ecrevisse + number); 
				document.getElementById('numecrevisse').innerHTML = ecrevisse; 
				totalo();
			}

			function changementeperlan(number){
				eperlan = Math.max(0, eperlan + number); 
				document.getElementById('numeperlan').innerHTML = eperlan; 
				totalo();
			}

			function changementesturgeon(number){
				esturgeon = Math.max(0, esturgeon + number);
				document.getElementById('numesturgeon').innerHTML = esturgeon;
				totalo();
			}

			function changementfondulebarre(number){
				fondulebarre = Math.max(0, fondulebarre + number);
				document.getElementById('numfondulebarre').innerHTML = fondulebarre;
				totalo();
			}

			function changementgar(number){
				gar = Math.max(0, gar + number);
				document.getElementById('numgar').innerHTML = gar; 
				totalo();
			}

			function changementgobiedeaudouce(number){
				gobiedeaudouce= Math.max(0, gobiedeaudouce + number);
				document.getElementById('numgobiedeaudouce').innerHTML = gobiedeaudouce; 
				totalo();
			}

			function changementgrandrequinblanc(number){
				grandrequinblanc= Math.max(0, grandrequinblanc + number);
				document.getElementById('numgrandrequinblanc').innerHTML = grandrequinblanc; 
				totalo();
			}

			function changementgrenouille(number){
				grenouille = Math.max(0, grenouille + number);
				document.getElementById('numgrenouille').innerHTML = grenouille;
				totalo();
			}

			function changementguppy(number){
				guppy = Math.max(0, guppy + number);
				document.getElementById('numguppy').innerHTML = guppy;
				totalo();
			}

			function changementhippocampe(number){
				hippocampe = Math.max(0, hippocampe + number);
				document.getElementById('numhippocampe').innerHTML = hippocampe;
				totalo();
			}

			function changementlimande(number){
				limande = Math.max(0, limande + number);
				document.getElementById('numlimande').innerHTML = limande;
				totalo();
			}

			function changementlochedetang(number){
				lochedetang = Math.max(0, lochedetang + number);
				document.getElementById('numlochedetang').innerHTML = lochedetang;
				totalo();
			}

			function changementlunedemer(number){
				lunedemer= Math.max(0, lunedemer + number); 
				document.getElementById('numlunedemer').innerHTML = lunedemer; 
				totalo();
			}

			function changementmacropinna(number){
				macropinna= Math.max(0, macropinna + number); 
				document.getElementById('nummacropinna').innerHTML = macropinna; 
				totalo();
			}

			function changementmarlinbleu(number){
				marlinbleu= Math.max(0, marlinbleu + number); 
				document.getElementById('nummarlinbleu').innerHTML = marlinbleu; 
				totalo();
			}

			function changementmurene(number){
				murene = Math.max(0, murene + number); 
				document.getElementById('nummurene').innerHTML = murene; 
				totalo();
			}

			function changementmurenerubanbleu(number){
				murenerubanbleu = Math.max(0, murenerubanbleu + number); 
				document.getElementById('nummurenerubanbleu').innerHTML = murenerubanbleu; 
				totalo();
			}

			function changementnapoleon(number){
				napoleon = Math.max(0, napoleon + number); 
				document.getElementById('numnapoleon').innerHTML = napoleon; 
				totalo();
			}

			function changementneonbleu(number){
				neonbleu = Math.max(0, neonbleu + number);
				document.getElementById('numneonbleu').innerHTML = neonbleu;
				totalo();
			}


			function changementomble(number){
				omble = Math.max(0, omble + number);
				document.getElementById('numomble').innerHTML = omble;
				totalo();
			}

			function changementperchejaune(number){
				perchejaune = Math.max(0, perchejaune + number);
				document.getElementById('numperchejaune').innerHTML = perchejaune;
				totalo();
			}

			function changementpiranha(number){
				piranha= Math.max(0, piranha + number); 
				document.getElementById('numpiranha').innerHTML = piranha; 
				totalo();
			}

			function changementpoissonange(number){
				poissonange = Math.max(0, poissonange + number);
				document.getElementById('numpoissonange').innerHTML = poissonange;
				totalo();
			}

			function changementpoissonarcenciel(number){
				poissonarcenciel = Math.max(0, poissonarcenciel + number); 
				document.getElementById('numpoissonarcenciel').innerHTML = poissonarcenciel; 
				totalo();
			}
			
			function changementpoissonballon(number){
				poissonballon = Math.max(0, poissonballon + number); 
				document.getElementById('numpoissonballon').innerHTML = poissonballon; 
				totalo();
			}

			function changementpoissonchirurgien(number){
				poissonchirurgien = Math.max(0, poissonchirurgien + number);
				document.getElementById('numpoissonchirurgien').innerHTML = poissonchirurgien;
				totalo();
			}

			function changementpoissonclown(number){
				poissonclown = Math.max(0, poissonclown + number);
				document.getElementById('numpoissonclown').innerHTML = poissonclown;
				totalo();
			}

			function changementpoissondocteur(number){
				poissondocteur = Math.max(0, poissondocteur + number);
				document.getElementById('numpoissondocteur').innerHTML = poissondocteur;
				totalo();
			}

			function changementpoissonlanterne(number){
				poissonlanterne = Math.max(0, poissonlanterne + number);
				document.getElementById('numpoissonlanterne').innerHTML = poissonlanterne;
				totalo();
			}

			function changementpoissonpapillon(number){
				poissonpapillon = Math.max(0, poissonpapillon + number);
				document.getElementById('numpoissonpapillon').innerHTML = poissonpapillon;
				totalo();
			}

			function changementpoissonporcepic(number){
				poissonporcepic= Math.max(0, poissonporcepic + number); 
				document.getElementById('numpoissonporcepic').innerHTML = poissonporcepic; 
				totalo();
			}
			
			function changementpoissonrouge(number){
				poissonrouge = Math.max(0, poissonrouge + number)
				document.getElementById('numpoissonrouge').innerHTML = poissonrouge;
				totalo();
			}

			function changementpoissonruban(number){
				poissonruban = Math.max(0, poissonruban + number);
				document.getElementById('numpoissonruban').innerHTML = poissonruban;
				totalo();
			}

			function changementpoissonscorpion(number){
				poissonscorpion = Math.max(0, poissonscorpion + number);
				document.getElementById('numpoissonscorpion').innerHTML = poissonscorpion;
				totalo();
			}

			function changementraie(number){
				raie = Math.max(0, raie + number); 
				document.getElementById('numraie').innerHTML = raie; 
				totalo();
			}

			function changementranchu(number){
				ranchu = Math.max(0, ranchu + number); 
				document.getElementById('numranchu').innerHTML = ranchu; 
				totalo();
			}

			function changementremoraraye(number){
				remoraraye = Math.max(0, remoraraye + number); 
				document.getElementById('numremoraraye').innerHTML = remoraraye; 
				totalo();
			}

			function changementrequinbaleine(number){
				requinbaleine = Math.max(0, requinbaleine + number); 
				document.getElementById('numrequinbaleine').innerHTML = requinbaleine; 
				totalo();
			}

			function changementrequinmarteau(number){
				requinmarteau = Math.max(0, requinmarteau + number); 
				document.getElementById('numrequinmarteau').innerHTML = requinmarteau; 
				totalo();
			}

			function changementrequinscie(number){
				requinscie = Math.max(0, requinscie + number); 
				document.getElementById('numrequinscie').innerHTML = requinscie; 
				totalo();
			}

			function changementsaumon(number){
				saumon = Math.max(0, saumon + number); 
				document.getElementById('numsaumon').innerHTML = saumon; 
				totalo();
			}

			function changementsaumonmasou(number){
				saumonmasou = Math.max(0, saumonmasou + number);
				document.getElementById('numsaumonmasou').innerHTML = saumonmasou;
				totalo();
			}

			function changementsaumonroi(number){
				saumonroi = Math.max(0, saumonroi + number); 
				document.getElementById('numsaumonroi').innerHTML = saumonroi; 
				totalo();
			}

			function changementscarus(number){
				scarus = Math.max(0, scarus + number);
				document.getElementById('numscarus').innerHTML = scarus;
				totalo();
			}

			function changementsilure(number){
				silure = Math.max(0, silure + number);
				document.getElementById('numsilure').innerHTML = silure;
				totalo();
			}

			function changementtetard(number){
				tetard = Math.max(0, tetard + number);
				document.getElementById('numtetard').innerHTML = tetard;
				totalo();
			}

			function changementtetedeserpent(number){
				tetedeserpent = Math.max(0, tetedeserpent + number); 
				document.getElementById('numtetedeserpent').innerHTML = tetedeserpent; 
				totalo();
			}

			function changementthon(number){
				thon = Math.max(0, thon + number);
				document.getElementById('numthon').innerHTML = thon;
				totalo();
			}

			function changementtilapia(number){
				tilapia = Math.max(0, tilapia + number); 
				document.getElementById('numtilapia').innerHTML = tilapia; 
				totalo();
			}

			function changementtortueserpentine(number){
				tortueserpentine = Math.max(0, tortueserpentine + number);
				document.getElementById('numtortueserpentine').innerHTML = tortueserpentine;
				totalo();
			}

			function changementtortuetrionyx(number){
				tortuetrionyx = Math.max(0, tortuetrionyx + number); 
				document.getElementById('numtortuetrionyx').innerHTML = tortuetrionyx; 
				totalo();
			}

			function changementtruitedoree(number){
				truitedoree = Math.max(0, truitedoree + number);
				document.getElementById('numtruitedoree').innerHTML = truitedoree;
				totalo();
			}

			function changementvandoise(number){
				vandoise = Math.max(0, vandoise + number); 
				document.getElementById('numvandoise').innerHTML = vandoise; 
				totalo();
			}

			function changementvivaneau(number){
				vivaneau = Math.max(0, vivaneau + number); 
				document.getElementById('numvivaneau').innerHTML = vivaneau; 
				totalo();
			}


			

			function remiseazeroanchois(number){
				anchois = 0 ; 
				document.getElementById('numanchois').innerHTML = anchois;
				document.getElementById('prixanchois').innerHTML = "Boite : " + anchois*(ANCHOIS_PRIX*BOITE) + " clo's" + "<br/>" + "Nook : " + anchois*(ANCHOIS_PRIX) + " clo's" + "<br/>" + "Pollux : " + anchois*(ANCHOIS_PRIX*POLLUX) + " clo's" ;
				totalo();
			}

			function remiseazeroarapaima(number){
				arapaima = 0 ; 
				document.getElementById('numarapaima').innerHTML = arapaima;
				document.getElementById('prixarapaima').innerHTML = "Boite : " + arapaima*(ARAPAIMA_PRIX*BOITE) + " clo's" + "<br/>" + "Nook : " + arapaima*(ARAPAIMA_PRIX) + " clo's" + "<br/>" + "Pollux : " + arapaima*(ARAPAIMA_PRIX*POLLUX) + " clo's" ; 
				totalo();
			}

			function remiseazeroarowana(number){
				arowana = 0 ; 
				document.getElementById('numarowana').innerHTML = arowana; 
				totalo();
			}

			function remiseazeroayu(number){
				ayu = 0 ; 
				document.getElementById('numayu').innerHTML = ayu; 
				totalo();
			}

			function remiseazerobar(number){
				bar = 0 ;
				document.getElementById('numbar').innerHTML = bar;
				totalo();
			}

			function remiseazerobarcommun(number){
				barcommun = 0 ; 
				document.getElementById('numbarcommun').innerHTML = barcommun; 
				totalo();
			}

			function remiseazerobichir(number){
				bichir = 0 ; 
				document.getElementById('numbichir').innerHTML = bichir; 
				totalo();
			}

			function remiseazerobouviere(number){
				bouviere = 0 ; 
				document.getElementById('numbouviere').innerHTML = bouviere; 
				totalo();
			}

			function remiseazerobrochet(number){
				brochet = 0 ; 
				document.getElementById('numbrochet').innerHTML = brochet; 
				totalo();
			}

			function remiseazerocalmar(number){
				calmar = 0 ;
				document.getElementById('numcalmar').innerHTML = calmar;
				totalo();
			}

			function remiseazerocaranguegrossetete(number){
				caranguegrossetete = 0 ;
				document.getElementById('numcaranguegrossetete').innerHTML = caranguegrossetete;
				totalo();
			}

			function remiseazerocarassin(number){
				carassin = 0 
				document.getElementById('numcarassin').innerHTML = carassin;
				totalo();
			}

			function remiseazerocardeau(number){
				cardeau = 0 ; 
				document.getElementById('numcardeau').innerHTML = cardeau; 
				totalo();
			}

			function remiseazerocarpe(number){
				carpe = 0 
				document.getElementById('numcarpe').innerHTML = carpe;
				totalo();
			}

			function remiseazerocarpekoi(number){
				carpekoi = 0 ; 
				document.getElementById('numcarpekoi').innerHTML = carpekoi; 
				totalo();
			}

			function remiseazerochevaine(number){
				chevaine = 0 
				document.getElementById('numchevaine').innerHTML = chevaine;
				totalo();
			}

			function remiseazerochinchard(number){
				chinchard= 0 ; 
				document.getElementById('numchinchard').innerHTML = chinchard; 
				totalo();
			}

			function remiseazeroclione(number){
				clione = 0 ;
				document.getElementById('numclione').innerHTML = clione;
				totalo();
			}

			function remiseazerocoelacanthe(number){
				coelacanthe = 0 ; 
				document.getElementById('numcoelacanthe').innerHTML = coelacanthe; 
				totalo();
			}

			function remiseazerocombattant(number){
				combattant = 0 ; 
				document.getElementById('numcombattant').innerHTML = combattant; 
				totalo();
			}

			function remiseazerocoryphene(number){
				coryphene = 0 ;
				document.getElementById('numcoryphene').innerHTML = coryphene;
				totalo();
			}

			function remiseazerocrabechinois(number){
				crabechinois= 0 ; 
				document.getElementById('numcrabechinois').innerHTML = crabechinois; 
				totalo();
			}

			function remiseazerocrapet(number){
				crapet = 0 ;
				document.getElementById('numcrapet').innerHTML = crapet;
				totalo();
			}

			function remiseazerocyprindore(number){
				cyprindore = 0 ; 
				document.getElementById('numcyprindore').innerHTML = cyprindore; 
				totalo();
			}

			function remiseazerodaiyu(number){
				daiyu = 0 ; 
				document.getElementById('numdaiyu').innerHTML = daiyu; 
				totalo();
			}

			function remiseazerodorade(number){
				dorade= 0 ; 
				document.getElementById('numdorade').innerHTML = dorade; 
				totalo();
			}

			function remiseazeroecrevisse(number){
				ecrevisse= 0 ; 
				document.getElementById('numecrevisse').innerHTML = ecrevisse; 
				totalo();
			}

			function remiseazeroeperlan(number){
				eperlan = 0 ; 
				document.getElementById('numeperlan').innerHTML = eperlan; 
				totalo();
			}

			function remiseazeroesturgeon(number){
				esturgeon = 0 ;
				document.getElementById('numesturgeon').innerHTML = esturgeon;
				totalo();
			}

			function remiseazerofondulebarre(number){
				fondulebarre = 0 ;
				document.getElementById('numfondulebarre').innerHTML = fondulebarre;
				totalo();
			}

			function remiseazerogar(number){
				gar = 0 ;
				document.getElementById('numgar').innerHTML = gar; 
				totalo();
			}

			function remiseazerogobiedeaudouce(number){
				gobiedeaudouce = 0 ;
				document.getElementById('numgobiedeaudouce').innerHTML = gobiedeaudouce; 
				totalo();
			}

			function remiseazerograndrequinblanc(number){
				grandrequinblanc = 0 ;
				document.getElementById('numgrandrequinblanc').innerHTML = grandrequinblanc; 
				totalo();
			}

			function remiseazerogrenouille(number){
				grenouille = 0 ;
				document.getElementById('numgrenouille').innerHTML = grenouille;
				totalo();
			}

			function remiseazeroguppy(number){
				guppy = 0 ;
				document.getElementById('numguppy').innerHTML = guppy;
				totalo();
			}

			function remiseazerohippocampe(number){
				hippocampe = 0 ;
				document.getElementById('numhippocampe').innerHTML = hippocampe;
				totalo();
			}

			function remiseazerolimande(number){
				limande = 0 ;
				document.getElementById('numlimande').innerHTML = limande;
				totalo();
			}

			function remiseazerolochedetang(number){
				lochedetang = 0 ;
				document.getElementById('numlochedetang').innerHTML = lochedetang;
				totalo();
			}

			function remiseazerolunedemer(number){
				lunedemer= 0 ; 
				document.getElementById('numlunedemer').innerHTML = lunedemer; 
				totalo();
			}

			function remiseazeromacropinna(number){
				macropinna= 0 ; 
				document.getElementById('nummacropinna').innerHTML = macropinna; 
				totalo();
			}

			function remiseazeromarlinbleu(number){
				marlinbleu= 0 ; 
				document.getElementById('nummarlinbleu').innerHTML = marlinbleu; 
				totalo();
			}

			function remiseazeromurene(number){
				murene = 0 ; 
				document.getElementById('nummurene').innerHTML = murene; 
				totalo();
			}

			function remiseazeromurenerubanbleu(number){
				murenerubanbleu = 0 ; 
				document.getElementById('nummurenerubanbleu').innerHTML = murenerubanbleu; 
				totalo();
			}

			function remiseazeronapoleon(number){
				napoleon = 0 ; 
				document.getElementById('numnapoleon').innerHTML = napoleon; 
				totalo();
			}

			function remiseazeroneonbleu(number){
				neonbleu = 0 ;
				document.getElementById('numneonbleu').innerHTML = neonbleu;
				totalo();
			}


			function remiseazeroomble(number){
				omble = 0 ;
				document.getElementById('numomble').innerHTML = omble;
				totalo();
			}

			function remiseazeroperchejaune(number){
				perchejaune = 0;
				document.getElementById('numperchejaune').innerHTML = perchejaune;
				totalo();
			}

			function remiseazeropiranha(number){
				piranha = 0; 
				document.getElementById('numpiranha').innerHTML = piranha; 
				totalo();
			}

			function remiseazeropoissonange(number){
				poissonange = 0;
				document.getElementById('numpoissonange').innerHTML = poissonange;
				totalo();
			}

			function remiseazeropoissonarcenciel(number){
				poissonarcenciel = 0; 
				document.getElementById('numpoissonarcenciel').innerHTML = poissonarcenciel; 
				totalo();
			}
			
			function remiseazeropoissonballon(number){
				poissonballon = 0; 
				document.getElementById('numpoissonballon').innerHTML = poissonballon; 
				totalo();
			}

			function remiseazeropoissonchirurgien(number){
				poissonchirurgien = 0;
				document.getElementById('numpoissonchirurgien').innerHTML = poissonchirurgien;
				totalo();
			}

			function remiseazeropoissonclown(number){
				poissonclown = 0;
				document.getElementById('numpoissonclown').innerHTML = poissonclown;
				totalo();
			}

			function remiseazeropoissondocteur(number){
				poissondocteur = 0;
				document.getElementById('numpoissondocteur').innerHTML = poissondocteur;
				totalo();
			}

			function remiseazeropoissonlanterne(number){
				poissonlanterne = 0;
				document.getElementById('numpoissonlanterne').innerHTML = poissonlanterne;
				totalo();
			}

			function remiseazeropoissonpapillon(number){
				poissonpapillon = 0;
				document.getElementById('numpoissonpapillon').innerHTML = poissonpapillon;
				totalo();
			}

			function remiseazeropoissonporcepic(number){
				poissonporcepic= 0; 
				document.getElementById('numpoissonporcepic').innerHTML = poissonporcepic; 
				totalo();
			}
			
			function remiseazeropoissonrouge(number){
				poissonrouge = 0;
				document.getElementById('numpoissonrouge').innerHTML = poissonrouge;
				totalo();
			}

			function remiseazeropoissonruban(number){
				poissonruban = 0;
				document.getElementById('numpoissonruban').innerHTML = poissonruban;
				totalo();
			}

			function remiseazeropoissonscorpion(number){
				poissonscorpion = 0;
				document.getElementById('numpoissonscorpion').innerHTML = poissonscorpion;
				totalo();
			}

			function remiseazeroraie(number){
				raie = 0; 
				document.getElementById('numraie').innerHTML = raie; 
				totalo();
			}

			function remiseazeroranchu(number){
				ranchu = 0; 
				document.getElementById('numranchu').innerHTML = ranchu; 
				totalo();
			}

			function remiseazeroremoraraye(number){
				remoraraye = 0; 
				document.getElementById('numremoraraye').innerHTML = remoraraye; 
				totalo();
			}

			function remiseazerorequinbaleine(number){
				requinbaleine = 0; 
				document.getElementById('numrequinbaleine').innerHTML = requinbaleine; 
				totalo();
			}

			function remiseazerorequinmarteau(number){
				requinmarteau = 0; 
				document.getElementById('numrequinmarteau').innerHTML = requinmarteau; 
				totalo();
			}

			function remiseazerorequinscie(number){
				requinscie = 0; 
				document.getElementById('numrequinscie').innerHTML = requinscie; 
				totalo();
			}

			function remiseazerosaumon(number){
				saumon = 0; 
				document.getElementById('numsaumon').innerHTML = saumon; 
				totalo();
			}

			function remiseazerosaumonmasou(number){
				saumonmasou = 0;
				document.getElementById('numsaumonmasou').innerHTML = saumonmasou;
				totalo();
			}

			function remiseazerosaumonroi(number){
				saumonroi = 0; 
				document.getElementById('numsaumonroi').innerHTML = saumonroi; 
				totalo();
			}

			function remiseazeroscarus(number){
				scarus = 0;
				document.getElementById('numscarus').innerHTML = scarus;
				totalo();
			}

			function remiseazerosilure(number){
				silure = 0;
				document.getElementById('numsilure').innerHTML = silure;
				totalo();
			}

			function remiseazerotetard(number){
				tetard = 0;
				document.getElementById('numtetard').innerHTML = tetard;
				totalo();
			}

			function remiseazerotetedeserpent(number){
				tetedeserpent = 0; 
				document.getElementById('numtetedeserpent').innerHTML = tetedeserpent; 
				totalo();
			}

			function remiseazerothon(number){
				thon = 0;
				document.getElementById('numthon').innerHTML = thon;
				totalo();
			}

			function remiseazerotilapia(number){
				tilapia = 0; 
				document.getElementById('numtilapia').innerHTML = tilapia; 
				totalo();
			}

			function remiseazerotortueserpentine(number){
				tortueserpentine = 0;
				document.getElementById('numtortueserpentine').innerHTML = tortueserpentine;
				totalo();
			}

			function remiseazerotortuetrionyx(number){
				tortuetrionyx = 0; 
				document.getElementById('numtortuetrionyx').innerHTML = tortuetrionyx; 
				totalo();
			}

			function remiseazerotruitedoree(number){
				truitedoree = 0;
				document.getElementById('numtruitedoree').innerHTML = truitedoree;
				totalo();
			}

			function remiseazerovandoise(number){
				vandoise = 0; 
				document.getElementById('numvandoise').innerHTML = vandoise; 
				totalo();
			}

			function remiseazerovivaneau(number){
				vivaneau = 0; 
				document.getElementById('numvivaneau').innerHTML = vivaneau; 
				totalo();
			}

			function totalo(){
				toto = (anchois * ANCHOIS_PRIX) + (arapaima * ARAPAIMA_PRIX) + (arowana * AROWANA_PRIX) + (ayu * AYU_PRIX) + (bar * BAR_PRIX) + (barcommun * BARCOMMUN_PRIX) + (bichir * BICHIR_PRIX) + (bouviere * BOUVIERE_PRIX) + (brochet * BROCHET_PRIX) + (calmar * CALMAR_PRIX) + (caranguegrossetete * CARANGUEGROSSETETE_PRIX) + (carassin * CARASSIN_PRIX) + (cardeau * CARDEAU_PRIX) + (carpe * CARPE_PRIX) + (carpekoi * CARPEKOI_PRIX) + (chevaine * CHEVAINE_PRIX) + (chinchard * CHINCHARD_PRIX) + (clione * CLIONE_PRIX) + (coelacanthe * COELACANTHE_PRIX) + (combattant * COMBATTANT_PRIX) + (coryphene * CORYPHENE_PRIX) + (crabechinois * CRABECHINOIS_PRIX) + (crapet * CRAPET_PRIX) + (cyprindore * CYPRINDORE_PRIX) + (daiyu * DAIYU_PRIX) + (dorade * DORADE_PRIX) + (ecrevisse * ECREVISSE_PRIX) + (eperlan * EPERLAN_PRIX) + (esturgeon * ESTURGEON_PRIX) + (fondulebarre * FONDULEBARRE_PRIX) + (gar * GAR_PRIX) + (gobiedeaudouce * GOBIEDEAUDOUCE_PRIX) + (grandrequinblanc * GRANDREQUINBLANC_PRIX) + (grenouille * GRENOUILLE_PRIX) + (guppy * GUPPY_PRIX) + (hippocampe * HIPPOCAMPE_PRIX) + (limande * LIMANDE_PRIX) + (lochedetang * LOCHEDETANG_PRIX) + (lunedemer * LUNEDEMER_PRIX) + (macropinna * MACROPINNA_PRIX) + (marlinbleu * MARLINBLEU_PRIX) + (murene * MURENE_PRIX) + (murenerubanbleu * MURENERUBANBLEU_PRIX) + (napoleon * NAPOLEON_PRIX) + (neonbleu * NEONBLEU_PRIX) + (omble * OMBLE_PRIX) + (perchejaune * PERCHEJAUNE_PRIX) + (piranha * PIRANHA_PRIX) + (poissonange * POISSONANGE_PRIX) + (poissonarcenciel * POISSONARCENCIEL_PRIX) + (poissonballon * POISSONBALLON_PRIX) + (poissonchirurgien * POISSONCHIRURGIEN_PRIX) + (poissonclown * POISSONCLOWN_PRIX) + (poissondocteur * POISSONDOCTEUR_PRIX) + (poissonlanterne * POISSONLANTERNE_PRIX) + (poissonpapillon * POISSONPAPILLON_PRIX) + (poissonporcepic * POISSONPORCEPIC_PRIX) + (poissonrouge * POISSONROUGE_PRIX) + (poissonruban * POISSONRUBAN_PRIX) + (poissonscorpion * POISSONSCORPION_PRIX) + (raie * RAIE_PRIX) + (ranchu * RANCHU_PRIX) + (remoraraye * REMORARAYE_PRIX) + (requinbaleine * REQUINBALEINE_PRIX) + (requinmarteau * REQUINMARTEAU_PRIX) + (requinscie * REQUINSCIE_PRIX) + (saumon * SAUMON_PRIX) + (saumonmasou * SAUMONMASOU_PRIX) + (saumonroi * SAUMONROI_PRIX) + (scarus * SCARUS_PRIX) + (silure  * SILURE_PRIX) + (tetard * TETARD_PRIX) + (tetedeserpent * TETEDESERPENT_PRIX) + (thon * THON_PRIX) + (tilapia * TILAPIA_PRIX) + (tortueserpentine * TORTUESERPENTINE_PRIX) + (tortuetrionyx * TORTUETRIONYX_PRIX) + (truitedoree * TRUITEDOREE_PRIX) + (vandoise * VANDOISE_PRIX) + (vivaneau * VIVANEAU_PRIX)
				document.getElementById('box').innerHTML = "Total : " + toto*BOITE;
				document.getElementById('nook').innerHTML = "Total : " + toto;
				document.getElementById('Pollux').innerHTML = "Total : " + toto*POLLUX;
			}

			/* Remise à zéro totale*/
			function remiseazerototal(){
				window.location.reload();
			}

/*window.addEventListener('DOMContentLoaded', function() {
	document.getElementById('afficherpoisson').addEventListener('click', function() {
		document.getElementById('poisson').style.display = 'block';
	});
});*/


window.addEventListener('DOMContentLoaded', function() {
	document.getElementById('afficheraccueil').addEventListener('click', function() {
		document.getElementById('accueil').style.display = 'block';
		document.getElementById('poisson').style.display = 'none';
		document.getElementById('insecte').style.display = 'none';
		document.getElementById('autre').style.display = 'none';

	});
});

window.addEventListener('DOMContentLoaded', function() {
	document.getElementById('afficherpoisson').addEventListener('click', function() {
		document.getElementById('accueil').style.display = 'none';
		document.getElementById('poisson').style.display = 'block';
		document.getElementById('insecte').style.display = 'none';
		document.getElementById('autre').style.display = 'none';

	});
});

window.addEventListener('DOMContentLoaded', function() {
	document.getElementById('afficherinsecte').addEventListener('click', function() {
		document.getElementById('accueil').style.display = 'none';
		document.getElementById('poisson').style.display = 'none';
		document.getElementById('insecte').style.display = 'block';
		document.getElementById('autre').style.display = 'none';

	});
});

window.addEventListener('DOMContentLoaded', function() {
	document.getElementById('afficherautre').addEventListener('click', function() {
		document.getElementById('accueil').style.display = 'none';
		document.getElementById('poisson').style.display = 'none';
		document.getElementById('insecte').style.display = 'none';
		document.getElementById('autre').style.display = 'block';

	});
});