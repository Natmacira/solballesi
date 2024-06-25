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

// para el smooth de las anclas teniendo los links en el menú de wp

document.addEventListener('DOMContentLoaded', function() {
    const menuLinks = document.querySelectorAll('a[href*="#"]');

    menuLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            const href = this.getAttribute('href');
            const url = new URL(href, window.location.href);
            
            if (url.pathname === window.location.pathname) {
                event.preventDefault();
                const targetId = url.hash.substring(1);
                const targetElement = document.getElementById(targetId);
                
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });
});

