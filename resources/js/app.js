require('./bulma-extensions');


// Bulma NavBar Burger Script
document.addEventListener('DOMContentLoaded', function() {
    // Get all "hamburger" elements
    const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.hamburger'), 0);

    // Check if there are any navbar burgers
    if ($navbarBurgers.length > 0) {

        // Add a click event on each of them
        $navbarBurgers.forEach(function($el) {
            $el.addEventListener('click', function() {

                // Get the target from the "data-target" attribute
                let target = $el.dataset.target;
                let $target = document.getElementById(target);

                // Toggle the class on both the "hamburger" and the "navbar-menu"
                $el.classList.toggle('is-active');
                $target.classList.toggle('is-active');

            });
        });
    }

});
