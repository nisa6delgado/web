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
<link rel="stylesheet" href="/node_modules/@tailwindcss/aspect-ratio/dist/aspect-ratio.css">
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
						<a class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:text-underline py-2 px-4" href="/portafolio">Portafolio</a>
					</li>
					<li class="mr-3">
						<a class="inline-block py-2 px-4 text-gray-900 font-bold no-underline" href="/charlas">Charlas</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container w-full md:max-w-3xl mx-auto pt-40 pb-40">
		<div class="w-full px-4 md:px-6 text-xl text-gray-800 leading-normal">
			<p class="mb-5">¡Hola!</p>
			<p class="mb-20">En esta sección puedes visualizar algunas charlas en las que comparto mi conocimiento para toda la comunidad de Internet.</p>

			<div class="w-full mb-10">
				<h1 class="text-3xl font-semibold mb-3">DesarrolloWeb.com</h1>

				<div class="aspect-w-16 aspect-h-9">
					<iframe src="https://www.youtube.com/embed/8x12lQBD894" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>

			<div class="w-full mb-10">
				<h1 class="text-3xl font-semibold mb-3">DevTeam504</h1>

				<div class="aspect-w-16 aspect-h-9">
					<iframe src="https://www.youtube.com/embed/S1SssS-rE8Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>

				<div class="mt-5 aspect-w-16 aspect-h-9">
					<iframe src="https://www.youtube.com/embed/Ec9JF_3ze6g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>

			<div class="w-full mb-10">
				<h1 class="text-3xl font-semibold mb-3">MacaoTech</h1>

				<div class="aspect-w-16 aspect-h-9">
					<iframe src="https://www.youtube.com/embed/YC5-5WC1zlw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
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
