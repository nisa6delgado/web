<?php

$errors = [];

if ($_POST['name'] == '' || $_POST['email'] == '' || $_POST['subject'] == '' || $_POST['message'] == '') {
	$errors[] = 'Todos los campos son obligatorios';
}

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	$errors[] = 'El formato del correo electrónico es inválido';
}

if (!empty($errors)) {
	echo '<div class="rounded p-5 w-full bg-red-300 text-red-500">';

	foreach ($errors as $error) {
		echo '<li>' . $error . '</li>';
	}

	echo '</div>';

	exit;
}

$headers = 'From: ' . $_POST['email'];
$headers .= 'Reply-To: ' . $_POST['email'];

mail('nisadelgado@gmail.com', $_POST['subject'], $_POST['message'], $headers);

echo '<div class="rounded p-5 w-full bg-green-300 text-green-500">Mensaje enviado exitosamente</div>';
