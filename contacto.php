<?php include 'inc/header.php'; ?>

<div class="container w-full md:max-w-3xl mx-auto pt-40 pb-40">
	<div class="w-full px-4 md:px-6 text-xl text-gray-800 leading-normal">
		<p class="mb-5">¡Hola!</p>
		<p class="mb-20">Si necesitas contactarme, deja un mensaje en esta sección y tan pronto como pueda me pondré en contacto contigo.</p>

		<form>
			<div class="w-full grid grid-cols-1 mb-5">
				<div id="result">
					
				</div>
			</div>

			<div class="w-full grid grid-cols-2 mb-5">
				<div>
					<label for="name">Nombre</label>
				</div>

				<div>
					<input name="name" required type="text" class="block border w-full p-1">
				</div>
			</div>

			<div class="w-full grid grid-cols-2 mb-5">
				<div>
					<label for="email">Correo electrónico</label>
				</div>

				<div>
					<input name="email" required type="email" class="block border w-full p-1">
				</div>
			</div>

			<div class="w-full grid grid-cols-2 mb-5">
				<div>
					<label for="subject">Asunto</label>
				</div>

				<div>
					<input name="subject" required type="text" class="block border w-full p-1">
				</div>
			</div>

			<div class="w-full grid grid-cols-2 mb-5">
				<div>
					<label for="message">Mensaje</label>
				</div>

				<div>
					<textarea name="message" class="block border w-full p-1"></textarea>
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

<?php include 'inc/footer.php'; ?>