var parti = {  
        Grillook  : "<div>Il grillo parlante o la voce della coscienza. Nonostante\
		sia un personaggio positivo rappresenta anche la pedagogia sterile\
		per questo Pinocchio, simbolo di libertà e dell'infanzia,\
		rifiuta sempre i suoi insegnamenti.</div>" ,
		Fataok : "<div>Quando appare è una bambina \"morta\".\
		Soltanto con Le avventure di Pinocchio, cioè dopo l'incontro di Pinocchio con gli assasini\
		diviene adulta e figura materna. Sarà la versione Dsiney, però, a renderla angelica, mentre\
		l'originale è un personaggio più ambiguo.</div>",
		Mangiafuocook : "<div>A differenza dell'immaginario comune nato da opere derivate dall'originale\
		Mangiafuoco non antagonista, è tanto burbero quanto generoso e indulgente. Come molti\
		personaggi di Collodi non è nè negativo nè positivo.</div>",
		gattovolpeok : "<div>Il gatto cieco e la volpe zoppa sono personaggi iconici tanto\
		da essere simbolo degli imbroglioni. Il brano più famoso dell'album Burattino senza Fili di Bennato\
		\"Il gatto e la volpe\" racconta il primo incontra tra i furfanti e Pinocchio.\
		Da una parte sono frutto della visione negativa del mondo che si può ritrovare in Collodi\
		dall'altra parte la loro fine è un contrappasso vero e proprio, rappresentando una sorta di giustizia.</div>",
		Lucignolook : "<div>Lucignolo è la cattiva influenza per eccellenza. Introduce Pinocchio al Paese dei Balocchi.\
		Essendo il \"cattivo ragazzo\"\
		è una sorta di esempio negativo e opposto al Pinocchio finale. Tuttavia la sua fine è una delle più\
		tragiche e commoventi.</div>",
		Pescecaneok : "<div>Spesso ricordato come una balena a causa del film Disney,\
		in realtà nell'opera originale appare prima di inghiottire Pinocchio.\
		Assume il ruolo di\"mostro marino\" riprendendo figure mitologiche e favolesche.</div>",
		Negativo1: "<div>Il primo finale in cui Pinocchio ritorna ad essere un burattino di legno senza vita.\
		In questo caso la perdita di vitalità è il pegno da pagare per le cattive influenze. Pegno che \
		all'interno dell'opera originale è sempre presente e con un grado di gravità non molto diverso da quello\
		descritto qui.</div>",
		Negativo2: "<div>Finale in cui Pinocchio torna ad essere un burattino dopo aver perso tutto\
		a causa delle sue scelte. Tuttavia questo finale è possibile solo perché Pinocchio decide di abbandonare\
		la sua tipica speranza e coraggio.</div>",
		Mortequercia: "<div>Questo finale è un po' particolare perché originalmente Collodi pensò di concludere qui la storia di Pinocchio\
		Per questo, questo finale è stato separato dalla linearità della storia principale.\
		Si tratta un punto centrale nella storia perché ciò che segue è un Pinocchio un po' diverso da quello narrato\
		fino a quel momento e funge da punto di svolta della storia che diviene da favola a romanzo di formazione.</div>",
		Positivo1: "<div>Finale in cui Pinocchio si adegua a ciò che ci si aspetta da lui.\
		Tuttavia non si trasforma in bambino vero, questo perché si riprende la visione\
		iniziale di Collodi: soltanto nella versione estesa \"Le avventure di PInocchio\" il burattino si trasforma\
		questa trasformazione tuttavia non è del tutto positiva perché tende all'omologazione e ad abbandonare anche\
		gli aspetti positivi dell'infanzia.</div>",
		Positivo2: "<div>Questo finale riprende quello originale, l'unica differenza è l'influenza di Lucignolo.\
		Più volte, infatti, nell'originale Pinocchio ha la possibiilità di diventare un bravo bambino, ma vi è sempre\
		un ultimo ostacolo; in questo caso Lucignolo.</div>",
		Neutro : "<div> Molto simile al finale originale, tuttavia qui Pinocchio dimostra un ultima nota di\
		compassione e umanità, nonostante questo lo porti comunque a trasformarsi in bambino dimostra\
		una certa ingenuità e attaccamento alla fatina.</div>",
		Finalevero: "<div>Si tratta del finale di \"Le avventure di Pinocchio\". Può essere considerato\
		il finale ufficiale, nonostante non è il primo pensato dall'autore. Pinocchio finalmente fa la sua\
		metamorfosi finale da burattino a bambino vero, abbandona il mondo dell'infanzia per adattarsi\
		a quello che vuole la società.</div>"
}


$(document).ready(function() {
	$('.stampok').hover( function(){
		var name = $(this).attr("id");
		$(this).after(parti[name]);
		}, function(){
		var based = $(this).siblings( "div" );
		based.remove(); } );
});

