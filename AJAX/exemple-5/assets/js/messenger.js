// Chargement DOM
$(function () 
{
	var $form = $('#message-form');
	var lastId = 0;

	function postMessage()
	{
		// $.ajax({url: '...', method: 'POST, data: $form.serialize()}).done(function(data){});
		$.post('src/postMessage.php', $form.serialize(), function(data)
		// serialize() est une fonction propre à jQuery qui renvoie un objet = {$message: message.val(), ...}
		{
			console.log(data);
		}, 'json');

		return false;
	}

	$form.submit(postMessage);

	function getMessage()
	{
		$.getJSON('src/getMessage.php', { lastId: lastId}, function(data)
		{
			console.log(data);
		});
	}

	getMessage();

});