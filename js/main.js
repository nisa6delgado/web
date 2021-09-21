function app() {
	return {
		element: document.documentElement,
		body: document.body,
		navContent: document.getElementById('nav-content'),

		scroll () {
			scroll = (this.element['scrollTop'] || this.body['scrollTop']) / ((this.element['scrollHeight'] || this.body['scrollHeight']) - this.element.clientHeight) * 100;
			progress.style.setProperty('--scroll', scroll + '%');

			position = window.scrollY;

			if (position > 10) {
				header.classList.add("bg-white");
				header.classList.add("shadow");
				this.navContent.classList.remove("bg-gray-100");
				this.navContent.classList.add("bg-white");
			} else {
				header.classList.remove("bg-white");
				header.classList.remove("shadow");
				this.navContent.classList.remove("bg-white");
				this.navContent.classList.add("bg-gray-100");
			}
		},

		toggle () {
			this.navContent.classList.toggle('hidden');
		}
	}
}