function app() {
	return {
		element: document.documentElement,
		body: document.body,
		navContent: document.getElementById('nav-content'),

		menu: {},
		home: {},
		contact: {},
		portfolio: {},
		talks: {},
		notFound: null,

		init() {
			const lang = navigator.language;

			document.getElementsByName('language')[0].value = lang;

			fetch(`/inc/language.php?language=${lang}`)
                .then(response => response.json())
                .then(data => {
					if (data) {
						this.menu.home = data.menu.home;
						this.menu.contact = data.menu.contact;
						this.menu.portfolio = data.menu.portfolio;
						this.menu.talks = data.menu.talks;

						this.home.me = data.home.me;
						this.home.work = data.home.work;
						this.home.hobby = data.home.hobby;

						this.contact.hello = data.contact.hello;
						this.contact.intro = data.contact.intro;
						this.contact.name = data.contact.name;
						this.contact.email = data.contact.email;
						this.contact.subject = data.contact.subject;
						this.contact.message = data.contact.message;
						this.contact.send = data.contact.send;

						this.portfolio.hello = data.portfolio.hello;
						this.portfolio.intro = data.portfolio.intro;

						this.talks.hello = data.talks.hello;
						this.talks.intro = data.talks.intro;
					}
				});
		},

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
