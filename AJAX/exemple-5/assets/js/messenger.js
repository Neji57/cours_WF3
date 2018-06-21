// Chargement DOM
$(function () 
{
	var $form = $('#message-form');
	var lastId = 0;
	var $messageMe = $('#mesages .me');
	var $messageNotMe = $('#$messages .not-me');

	function showMessages(data)
	{
		$.each(data.messages, function(index, value)
		{
			$message = (data.user.id == value.user.id? $messageMe.clone(): $messageNotMe.clone());
			$message.find('.avatar img').attr('src', 'images/' + value.avatar);
			$message.find('.content').html(value.content);
			$message.find('.infos').html(value.username + '-' + value.date);
			$message.removeClass('d-none');
			$('#messages').append($message);
		});
	}

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
			showMessages(data);
		});
	}

	getMessage();

});