var url = "http://api.zippopotam.us/FR/" // API pour récupérer un JSON avec les villes
// On récupère le champs cp et ville
var CPInput = document.getElementById('codePostal'); 
var villeInput = document.getElementById('ville');
var xhttp = new XMLHttpRequest();

CPInput.onkeyup = function()
{
	if (CPInput.value.length != 5) 
	{
		return;
	}

	xhttp.open("GET", url + CPInput.value, true);
	xhttp.onreadystatechange = function()
	{
		if (this.readyState == 4 && this.status == 200) 
		{
			if (this.readyState == 4) 
			{
				villeInput.innerHTML = ''; // Reset du select
				villeInput.disabled = false; // Activer le select
				var result = JSON.parse(this.responseText);
				result.places.forEach(function (place) 
				{
					var option = document.createElement("option"); // Nouvelle option pour le select
					option.text = place['place name'];
					option.value = place['place name'];
					villeInput.add(option);
				});
			}
		}
	};
	xhttp.send();
};