<?php include 'inc/header.php'; ?>

<div class="container w-full md:max-w-3xl mx-auto pt-40 pb-40">
	<div class="w-full px-4 md:px-6 text-xl text-gray-800 leading-normal">
		<img class="mx-auto w-6/12 rounded-full" src="/img/perfil.jpg">

		<p class="pt-20 text-justify" x-text="home.me ?? $el.textContent">Mi nombre es Nisa Delgado. Nací, crecí y vivo en Maracaibo, Venezuela. Tengo 32 años. Soy Técnico Superior Universitario en Informática graduado en el Instituto Universitario de Tecnología Readic UNIR en diciembre de 2015.</p>

		<p class="pt-6 text-justify" x-text="home.work ?? $el.textContent">Desarrollo aplicaciones web con PHP y Laravel, para el frontend utilizo Tailwind o Bootstrap con Alpine o Vue, todo eso sobre bases de datos relacionales como MySQL, PostgreSQL, etc. También he desarrollado aplicaciones móviles con React Native.</p>

		<p class="pt-6 text-justify" x-text="home.hobby ?? $el.textContent">Cuando no estoy programando, estoy rodando en mi motocicleta o moviendo piezas en un tablero de ajedrez.</p>
	</div>
</div>

<?php include 'inc/footer.php'; ?>
