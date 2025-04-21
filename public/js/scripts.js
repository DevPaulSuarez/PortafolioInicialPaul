/*!
* Start Bootstrap - Freelancer v7.0.5 (https://startbootstrap.com/theme/freelancer)
* Copyright 2013-2021 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-freelancer/blob/master/LICENSE)
*/
//
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink')
        } else {
            navbarCollapsible.classList.add('navbar-shrink')
        }

    };

    // Shrink the navbar 
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            offset: 72,
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });
    
    // Interacción con los íconos de la línea de tiempo
    const timelineItems = document.querySelectorAll('.timeline-item');
    const descriptionText = document.getElementById('description-text');

    timelineItems.forEach(item => {
        item.addEventListener('click', function () {
            // Restablecer el estilo de todos los iconos
            timelineItems.forEach(i => {
                const icon = i.querySelector('.timeline-icon');
                if (icon) icon.classList.remove('selected');
            });

            const icon = this.querySelector('.timeline-icon');
            if (icon) icon.classList.add('selected');

            // Obtener y mostrar la descripción si existe
            const description = item.getAttribute('data-description');
            if (description) {
                const formattedDescription = description.replace(/\n/g, '<br>');
                descriptionText.innerHTML = formattedDescription;
            } else {
                descriptionText.innerHTML = ''; // Limpiar si no hay descripción
            }
        });
    });

    // Interacción con los toggles de años
    const yearToggles = document.querySelectorAll('.year-toggle');

    yearToggles.forEach(toggle => {
        toggle.addEventListener('click', function () {
            const year = this.dataset.year;
            const container = document.getElementById('experiencias-' + year);

            if (container) {
                container.classList.toggle('d-none');

                // Ocultar experiencias de otros años
                document.querySelectorAll('.year-experiences').forEach(other => {
                    if (other !== container) {
                        other.classList.add('d-none');
                    }
                });
            }
        });
    });
});
