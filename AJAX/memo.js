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
	data: {}, // Objet { username: 'BOB', password: 764768987' } ou chaîne ("username=Bob&password=875876")
	dataType: 'html', // Ou 'json'
	beforeSend: function()
	{

	},
}).done(function(data)
{
	console.log(data); // Affichage du contenu de la réponse
}).fail(function(xhr, textStatus)
{
	// Erreur
});

$.ajaxSetup({
	url : 'script.php'
});
$.ajax({}).done(...);

$.get(URL, DATA, function (data) {}, DATATYPE); // Requête GET
$.post(URL, DATA, function (data) {}, DATATYPE); // Requête POST
$.getJSON(URL, DATA, function (data) {}); // Requête GET type JSON
$.post(URL, DATA, function (data) {}, 'json'); // Requête POST type JSON

$('form').serialize(); // Retourne les données d'un formulaire sous forme de chaîne encodée pour les URL
