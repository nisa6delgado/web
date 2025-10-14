<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="icon" type="image/png" href="/img/favicon.png">

<title>Nisa Delgado</title>

<script src="https://cdn.tailwindcss.com"></script>

<link rel="stylesheet" href="/node_modules/@fortawesome/fontawesome-free/css/all.css">
<link rel="stylesheet" href="/node_modules/@tailwindcss/aspect-ratio/dist/aspect-ratio.css">
<link rel="stylesheet" href="/node_modules/@tailwindcss/forms/dist/forms.css">

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
						<a class="inline-block py-2 px-4 text-gray-900 font-bold no-underline" href="/">Inicio</a>
					</li>

					<li class="mr-3">
						<a class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:text-underline py-2 px-4" href="/contacto">Contacto</a>
					</li>

					<li class="mr-3">
						<a class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:text-underline py-2 px-4" href="/portafolio">Portafolio</a>
					</li>

					<li class="mr-3">
						<a class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:text-underline py-2 px-4" href="/charlas">Charlas</a>
					</li>

					<li class="mr-3">
						<a class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:text-underline py-2 px-4" href="/files/cv.pdf">CV</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>