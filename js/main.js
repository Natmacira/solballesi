window.addEventListener('load', function () {

	// Scrolled Page class
	window.addEventListener('scroll', function () {
		if (window.scrollY > 60) {
			document.body.classList.add('page-scrolled');
		} else {
			document.body.classList.remove('page-scrolled');
		}
	});

	const hamburgerButton = document.getElementById('hamburger-menu-toggler');

	if (hamburgerButton) {
		hamburgerButton.addEventListener('click', function () {
			document.body.classList.toggle('hamburger-menu-active');
		});
	}

	const menuItems = document.querySelectorAll('.menu-item');
	const openMenuButtons = document.querySelectorAll('.open-submenu');

	if (menuItems && openMenuButtons) {
		openMenuButtons.forEach(function (openMenuButton) {
			openMenuButton.addEventListener('click', function () {
				const current = this.parentElement;
				menuItems.forEach(function (item) {
					if (current !== item) {
						item.classList.remove('submenu-opened');
					}
				});

				this.parentElement.classList.toggle('submenu-opened');
			})
		});
	}
});
