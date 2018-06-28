$form = $('form');

function postNewVehicule() {
	$.post('ajax/saveAjax.php', $form.serialize(),
	function (data)
		// serialize() est une fonction propre à jQuery qui renvoie un objet = {$message: message.val(), ...}
		{
			$('.message').html('<span class="' + data.code + '">' + data.message + '</span>');
		}, 'json');

	return false;
}

$form.submit(postNewVehicule);

