var url = "last_articles.html?r=";
var refreshButton = document.getElementById('refresh');
var lastNews = document.getElementById('last-news');
var xhttp = new XMLHttpRequest();

refreshButton.onclick = function()
{
	document.getElementById('refresh-icon').classList.add('fa-spin');
	xhttp.open("GET", url); //préparer la requête
	xhttp.onreadystatechange = function()
	{
		if (this.readyState == 4 && this.status == 200) 
		{
			lastNews.innerHTML = this.responseText;
			document.getElementById('refresh-icon').classList.remove('fa-spin');
		}
	};
	xhttp.send(); // Envoie le requête au serveur
};
