const list = {
	Abeillenaine: 200, 
	Acridacinerea: 200, 
	Agrias: 3000, 
	Anaxnapolitain: 230, 
	Araignee: 600, 
	Attacusatlas: 3000, 
	Bernardlhermite: 1000, 
	Bousier: 2500, 
	Bupreste: 2400, 
	Capricornedesagrumes: 350, 
	Catacanthus: 1000, 
	Cetoinedoree: 200, 
	Chrysiridiarhipheus: 2500, 
	Cicindele: 1500, 
	Cigalecercope: 250, 
	Cigalecicadelle: 400, 
	Cigalegeante: 500, 
	Cigalehigurashi: 550, 
	Cigalehyalessa: 300, 
	Citrin: 160, 
	Cloporte: 250, 
	Coccinelle: 200, 
	Cordulegastre: 4500, 
	Criquet: 400, 
	Criquetpelerin: 600, 
	Demoiselle: 500, 
	Dytique: 800, 
	Escargot: 250, 
	Fourmi: 80, 
	Geotrupidae: 300, 
	Grandpapillonpourpre: 3000, 
	Grandplaneur: 1000, 
	Graphiumsarpedon: 300, 
	Grillondespres: 130, 
	Grillondumidi: 430, 
	Guepe: 2500, 
	Ligie: 200, 
	Lucanecerfvolant: 10000,
	Lucanecoprisirise: 6000, 
	Lucanecyclommatus: 8000, 
	Lucanegirafe: 12000, 
	Lucaneinclinatus: 2000, 
	Lucanelamprima: 12000, 
	Lucanemiyama: 1000, 
	Luciole: 300, 
	Machaon: 240, 
	Manteorchidee: 2400, 
	Mantereligieuse: 430, 
	Millepattes: 300, 
	Monarque: 140, 
	Mormolyce: 450, 
	Morphobleu: 4000, 
	Mouche: 60, 
	Moustique: 130, 
	Muedecigale: 10, 
	Papiliobianor: 2500, 
	Papillondenuit: 130, 
	Patineur: 130, 
	Phasme: 600, 
	Phyllie: 600, 
	Pieridedelarave: 160, 
	Psyche: 600, 
	Puce: 70, 
	Punaise: 120, 
	Punaisedeaugeante: 2000, 
	Rosaliabatesi: 3000, 
	Sauterelle: 160, 
	Scarabee: 10000, 
	Scarabeeatlas: 8000, 
	Scarabeebleu: 800, 
	Scarabeeelephant: 8000, 
	Scarabeegoliath: 8000, 
	Scarabeehercule: 12000, 
	Scarabeekabuto: 1350, 
	Scorpion: 8000, Sympetrum: 180, 
	Tarentule: 8000, 
	Taupegrillon: 500, 
	Troidesalexandrae: 4000, 
	Troidesbrookiana: 2500
};

const amounts = {};

Object.keys(list).forEach(key => amounts[key] = 0);

window.addEventListener('DOMContentLoaded', function() {
	let html = Object.keys(list).map(insecte => {
		return `<p>` +
					`${insecte}: ${list[insecte]} Nook<br/>` +
					`<input type="button" name="endessous" value="-" onclick="change('${insecte}', -1)" />` +
					`<span id="amount-${insecte}">0</span>` +
					`<input type="button" name="audessus" value="+" onclick="change('${insecte}', +1)" />` +
				`</p>`;
	}).join('');

	document.getElementById('test').innerHTML = html;
});

function change(insecte, delta) {
	amounts[insecte] = Math.max(0, amounts[insecte] + delta);
	document.getElementById(`amount-${insecte}`).innerHTML = amounts[insecte];

	const total = Object.keys(list).map(key => amounts[key] * list[key]).reduce((acc, current) => acc + current, 0);
	console.log(total);
	document.getElementById('nook').innerHTML = total;
}

