$(document).ready(function() {
	$('body').on('click', ".loadnew", function(event){ 
		var slot = $(this).parent();
		var namesave = slot.attr("id");
		var writein = $(this).siblings(".saving");;
		$.ajax({ type: "POST",   
			url: "loadssaves.php",
			data: {'name' : namesave},
			success : function(risultato) {
				writein.empty();
				writein.append(risultato);
			}
		});
	});
	
	$('body').on('click', ".deletattual", function(event){ 
		var slot = $(this).parent();
		var namesave = slot.attr("id");
		var writein = $(this).siblings(".saving");;
		$.ajax({ type: "POST",   
			url: "cancellsave.php",
			data: {'name' : namesave},
			success : function(risultato) {
				writein.empty();
				writein.append("SALVA PARTIRA");
			}
		});
	});
	
	$('body').on('click', ".saving", function(event){ 
		var slot = $(this).parent();
		var namesave = slot.attr("id");
		$.ajax({ type: "POST",   
			url: "caricasave.php",
			data: {'name' : namesave},
			success : function(risultato) {
				if (risultato != "Nessuna partita salvata"){
					window.location.href = '/index.php';
				} else {
					alert(risultato);
				}
			}
		});
	});
});