var url = "last_articles.json?r=";
var refreshButton = document.getElementById('refresh');
var lastNews = document.getElementById('last-news');
var lastNewsFooter = document.getElementById('last-news-footer');
var articleTemplate = lastNews.querySelector('li.media');
articleTemplate.remove();

var xhttp = new XMLHttpRequest();

refreshButton.onclick = function()
{
	document.getElementById('refresh-icon').classList.add('fa-spin');
	xhttp.open("GET", url); //préparer la requête
	xhttp.onreadystatechange = function()
	{
		if (this.readyState == 4 && this.status == 200) 
		{
			lastNews.innerHTML = ""; // RESET
			var data = JSON.parse(this.responseText); // Transforme la réponse en objet JSON
			lastNewsFooter.innerHTML = data.count +(" articles"); // Affichage du nombre d'articles

			// Affichage des articles
			data.articles.forEach(function(article) 
			{
				var newArticleHTML = articleTemplate.cloneNode(true);
				newArticleHTML.querySelector('img').src = article.img;
				newArticleHTML.querySelector('h5').innerHTML = article.title;
				newArticleHTML.querySelector('p').innerHTML = article.description;
				lastNews.appendChild(newArticleHTML); // On affiche l'article dans la liste
				
			});
			
			document.getElementById('refresh-icon').classList.remove('fa-spin');
		}
	};
	xhttp.send(); // Envoie la requête au serveur
};
