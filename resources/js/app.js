import './bootstrap';
import '../sass/app.scss';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


var acc = document.getElementsByClassName("accordion");
var acc2 = document.getElementsByClassName("cart-icon");
var i;
var j;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */

    this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}

