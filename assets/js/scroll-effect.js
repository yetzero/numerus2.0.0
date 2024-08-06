console.log('%c<<< load sroll-effect js >>>', 'background: #cff4fc; color:#055160; padding: 2px 5px;');
/* (function($) {
    "use strict";

    // Verificar si es un dispositivo de escritorio
    function isDesktop() {
        return $(window).width() >= 1024; // Puedes ajustar este valor según tus necesidades
    }
		console.log('cual es width --->',$(window).width())

    // Ejecutar el código solo en dispositivos de escritorio
    if (isDesktop()) {
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            $('.wrapp-picture').css({
                backgroundSize: (100 + scroll/5)  + "%",
                top: -(scroll/10)  + "%",
            });		
            $('#hero').css({
                backgroundSize: (100 + scroll/5) + '%'
            });
            //main-footer
            $('.main-footer').css({
                backgroundSize: ( 2 + scroll/ 100) + '%'
            });  
        });
    }

})(jQuery); */
document.addEventListener('DOMContentLoaded', () => {
"use strict";

// Verificar si es un dispositivo de escritorio
function isDesktop() {
	// Puedes ajustar este valor según tus necesidades
    return window.innerWidth >= 1024; 
}
//console.log('cual es width --->', window.innerWidth + 'px');

// Verificar si existen los elementos en el DOM
function elementosExistentes() {
    return document.querySelector('.wrapp-picture') !== null ||
           document.getElementById('hero') !== null ||
           document.querySelector('.hero-page') !== null ||
					 document.querySelector('.bg-banner-more-control') ||
					 document.querySelector('.main-footer') !== null;
}

// Ejecutar el código solo si al menos uno de los elementos existe en el DOM y en dispositivos de escritorio
if (isDesktop() && elementosExistentes()) {
	//console.log(true, 'Es menor a 1024px, SI aplica efecto scroll')
    window.addEventListener('scroll', function() {
        var scroll = window.scrollY;
        if (document.querySelector('.wrapp-picture')) {
            document.querySelector('.wrapp-picture').style.backgroundSize = (100 + scroll / 5) + "%";
            document.querySelector('.wrapp-picture').style.top = -(scroll / 10) + "%";
        }
        if (document.getElementById('hero')) {
            document.getElementById('hero').style.backgroundSize = (100 + scroll / 5) + '%';
        }
				if (document.querySelector('.hero-page')) {
            document.querySelector('.hero-page').style.backgroundSize = (100 + scroll / 5) + '%';
        } 
    });
} else {
	console.log(false, 'Es mayor a 1024px, NO aplica efecto scroll')
}
});/* document.addEventListener */