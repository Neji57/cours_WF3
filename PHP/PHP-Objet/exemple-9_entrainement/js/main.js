$form = $('form');

function postMessage() {
	// $.ajax({url: '...', method: 'POST, data: $form.serialize()}).done(function(data){});
	$.post('Maison/enregistrerAjax.php', $form.serialize(),
	function (data)
		// serialize() est une fonction propre à jQuery qui renvoie un objet = {$message: message.val(), ...}
		{
			$('.message').html('<span class="' + data.code + '">' + data.message + '</span>');
		}, 'json');

	return false;
}

$form.submit(postMessage);
