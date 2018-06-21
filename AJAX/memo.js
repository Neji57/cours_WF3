// -- Appel ajax en js natif -- 
var xhr = new XMLHttpRequest;
xhr.open(METHOD, URL, ASYNC); // Prépare la requête
xhr.send();
xhr.onreadystatechange = function()
{
	this.status; // Statut de la réponse serveur, 200 = OK
	this.readyState; // Etat de la requête 4 = requête finie, le serveur à répondu
	this.responseText; // Contenu de la réponse
	JSON.parse(STRING); // Transforme une string en objet JS
	JSON.stringify(OBJECT); // Transforme un objet en chaîne JSON
}
xhr.send();

// -- Appel ajax en jQuery --
$.ajax({
	url : '', //Lien vers le script à appeler
	method: 'POST', // Ou 'GET'
	data: {}, // Objet ou chaîne
});