<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="icon" type="image/png" href="/img/favicon.png">

<title>Nisa Delgado</title>

<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="/node_modules/@tailwindcss/forms/dist/forms.css">
<link rel="stylesheet" href="/node_modules/@fortawesome/fontawesome-free/css/all.css">

</head>

<body x-data="app" @scroll.window="scroll" class="bg-gray-100 font-sans leading-normal tracking-normal">
	<nav id="header" class="fixed w-full z-10 top-0">
		<div id="progress" class="h-1 z-20 top-0" style="background:linear-gradient(to right, black var(--scroll), transparent 0);"></div>
		<div class="w-full md:max-w-4xl mx-auto flex flex-wrap items-center justify-between mt-0 py-3">
			<div class="pl-4">
				<a class="text-gray-900 text-base no-underline hover:no-underline font-extrabold text-xl" href="/">
					Nisa Delgado
				</a>
			</div>

			<div class="block lg:hidden pr-4">
				<button @click="toggle" id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-900 hover:border-green-500 appearance-none focus:outline-none">
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
						<a class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:text-underline py-2 px-4" href="/contacto">Contacto</a>
					</li>
					<li class="mr-3">
						<a class="inline-block py-2 px-4 text-gray-900 font-bold no-underline" href="/portafolio">Portafolio</a>
					</li>
					<li class="mr-3">
						<a class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:text-underline py-2 px-4" href="/charlas">Charlas</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container w-full md:max-w-3xl mx-auto pt-40 pb-40">
		<div class="w-full px-4 md:px-6 text-xl text-gray-800 leading-normal">
			<p class="mb-5">¡Hola!</p>
			<p class="mb-20">Aquí puedes ver algunos de los proyectos que he realizado anteriormente, haciendo click en la imagen, podrás ir al proyecto en cuestión.</p>

			<div class="w-full mb-10">
				<h1 class="text-3xl font-semibold mb-3">Base PHP</h1>

				<a href="https://github.com/nisa6delgado/base" target="_blank">
					<img src="/img/base.jpg">
				</a>
			</div>
			
			<div class="w-full mb-10">
				<h1 class="text-3xl font-semibold mb-3">City Night</h1>

				<a href="https://citynight.app" target="_blank">
					<img src="/img/city-night.png">
				</a>
			</div>

			<div class="w-full mb-10">
				<h1 class="text-3xl font-semibold mb-3">Criszoe</h1>

				<a href="https://ganaderiacriszoe.com.es" target="_blank">
					<img src="/img/criszoe.jpg">
				</a>
			</div>

			<div class="w-full mb-10">
				<h1 class="text-3xl font-semibold mb-3">CRM Schools and Students</h1>

				<a href="https://github.com/Kevinrosmusic/crm-schools-students" target="_blank">
					<img src="/img/crm-schools-students.jpg">
				</a>
			</div>

			<div class="w-full mb-10">
				<h1 class="text-3xl font-semibold mb-3">DigitaliPSY</h1>

				<a href="https://app.digitalipsy.com" target="_blank">
					<img src="/img/digitalipsy.png">
				</a>
			</div>

			<div class="w-full mb-10">
				<h1 class="text-3xl font-semibold mb-3">Empréstimos Rápidos</h1>

				<a href="https://emprestimosrapidos.com.br" target="_blank">
					<img src="/img/emprestimos-rapidos.png">
				</a>
			</div>

			<div class="w-full mb-10">
				<h1 class="text-3xl font-semibold mb-3">Estudio Oral</h1>

				<a href="https://app.clinicaestudiooral.com/admin" target="_blank">
					<img src="/img/estudio-oral.jpg">
				</a>
			</div>

			<div class="w-full mb-10">
				<h1 class="text-3xl font-semibold mb-3">Sports TV Rights</h1>

				<a href="https://api-v3.sportstvrights.com" target="_blank">
					<img src="/img/sports-tv-rights.png">
				</a>
			</div>

			<div class="w-full mb-10">
				<h1 class="text-3xl font-semibold mb-3">Tareas</h1>

				<a href="https://tareas.nisadelgado.com" target="_blank">
					<img src="/img/tareas.jpg">
				</a>
			</div>

			<div class="w-full mb-10">
				<h1 class="text-3xl font-semibold mb-3">Todeus</h1>

				<a href="https://app.todeus.com" target="_blank">
					<img src="/img/todeus.png">
				</a>
			</div>
		</div>
	</div>

	<footer class="bg-white border-t border-gray-400 shadow text-center p-10">
		<a target="_blank" href="https://twitter.com/nisa6delgado">
            <span class="fa-stack fa-lg">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-x-twitter fa-stack-1x fa-inverse"></i>
            </span>
        </a>

        <a target="_blank" href="https://wa.me/584246402701">
            <span class="fa-stack fa-lg">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-whatsapp fa-stack-1x fa-inverse"></i>
            </span>
        </a>

        <a target="_blank" href="https://instagram.com/nisa6delgado">
            <span class="fa-stack fa-lg">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
            </span>
        </a>

        <a target="_blank" href="https://youtube.com/channel/UCTgu94owdYN98yBZQnW0ihA">
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

        <a target="_blank" href="https://www.linkedin.com/in/nisa-delgado">
            <span class="fa-stack fa-lg">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-linkedin fa-stack-1x fa-inverse"></i>
            </span>
        </a>

        <a target="_blank" href="https://www.facebook.com/nisa6delgado">
            <span class="fa-stack fa-lg">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-facebook fa-stack-1x fa-inverse"></i>
            </span>
        </a>
	</footer>
	
	<script src="/node_modules/alpinejs/dist/cdn.js" defer></script>
	<script src="/js/main.js"></script>

	<script async src="https://www.googletagmanager.com/gtag/js?id=G-TC9NKTE66N"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}

		gtag('js', new Date());
		gtag('config', 'G-TC9NKTE66N');
	</script>
</body>
</html>
