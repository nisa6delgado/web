<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="icon" type="image/png" href="img/favicon.png">

<title>Nisa Delgado</title>

<link rel="stylesheet" href="node_modules/@tailwindcss/forms/dist/forms.css">
<link href="node_modules/tailwindcss/dist/tailwind.css" rel="stylesheet">
<link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.css">

</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">
	<nav id="header" class="fixed w-full z-10 top-0">
		<div id="progress" class="h-1 z-20 top-0" style="background:linear-gradient(to right, black var(--scroll), transparent 0);"></div>
		<div class="w-full md:max-w-4xl mx-auto flex flex-wrap items-center justify-between mt-0 py-3">
			<div class="pl-4">
				<a class="text-gray-900 text-base no-underline hover:no-underline font-extrabold text-xl" href="/">
					Nisa Delgado
				</a>
			</div>

			<div class="block lg:hidden pr-4">
				<button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-900 hover:border-green-500 appearance-none focus:outline-none">
					<svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
						<title>Menu</title>
						<path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z">
					</svg>
				</button>
			</div>

			<div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-gray-100 md:bg-transparent z-20" id="nav-content">
				<ul class="list-reset lg:flex justify-end flex-1 items-center">
					<li class="mr-3">
						<a class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:text-underline py-2 px-4" href="/">Inicio</a>
					</li>
					<li class="mr-3">
						<a class="inline-block py-2 px-4 text-gray-900 font-bold no-underline" href="/contacto">Contacto</a>
					</li>
					<li class="mr-3">
						<a class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:text-underline py-2 px-4" href="/portafolio">Portafolio</a>
					</li>
					<li class="mr-3">
						<a class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:text-underline py-2 px-4" href="/charlas">Charlas</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container w-full md:max-w-3xl mx-auto pt-20">
		<div class="w-full px-4 md:px-6 text-xl text-gray-800 leading-normal">
			<p class="mb-5">¡Hola!</p>
			<p class="mb-20">Si necesitas contactarme, deja un mensaje en esta sección y tan pronto como pueda me pondré en contacto contigo.</p>

			<form>
				<div class="w-full grid grid-cols-1">
					<div id="result">
						
					</div>
				</div>

				<div class="w-full grid grid-cols-2 mb-5">
					<div>
						<label for="name">Nombre</label>
					</div>

					<div>
						<input name="name" required type="text" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
					</div>
				</div>

				<div class="w-full grid grid-cols-2 mb-5">
					<div>
						<label for="email">Correo electrónico</label>
					</div>

					<div>
						<input name="email" required type="email" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
					</div>
				</div>

				<div class="w-full grid grid-cols-2 mb-5">
					<div>
						<label for="subject">Asunto</label>
					</div>

					<div>
						<input name="subject" required type="text" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
					</div>
				</div>

				<div class="w-full grid grid-cols-2 mb-5">
					<div>
						<label for="message">Mensaje</label>
					</div>

					<div>
						<textarea name="message" class="block w-full rounded-md px-3 py-2 border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></textarea>
					</div>
				</div>

				<div class="w-full mb-5 text-right">
					<button hx-post="/inc/contacto.php" hx-trigger="click" hx-target="#result" type="button" class="inline-flex items-center p-3 appearance-none bg-black border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-black active:bg-black focus:outline-none focus:border-black focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
						<i class="fas fa-paper-plane mr-2"></i>
						Enviar
					</button>
				</div>
			</form>
		</div>
	</div>

	<footer class="bg-white border-t border-gray-400 shadow text-center p-10">
		<a target="_blank" href="https://twitter.com/nisa6delgado">
            <span class="fa-stack fa-lg">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
            </span>
        </a>

        <a target="_blank" href="https://instagram.com/nisa6delgado">
            <span class="fa-stack fa-lg">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
            </span>
        </a>

        <a target="_blank" href="https://www.youtube.com/channel/UCTgu94owdYN98yBZQnW0ihA">
            <span class="fa-stack fa-lg">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-youtube fa-stack-1x fa-inverse"></i>
            </span>
        </a>

        <a target="_blank" href="https://github.com/nisa6delgado">
            <span class="fa-stack fa-lg">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-github fa-stack-1x fa-inverse"></i>
            </span>
        </a>
	</footer>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://unpkg.com/htmx.org@1.5.0"></script>
	<script src="js/main.js"></script>
</body>
</html>
