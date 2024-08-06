console.log('%c<<< Start progressbar-counter >>>', 'background: #fff3cd; color: #664d03; padding: 2px 5px;');

 /* document.addEventListener('DOMContentLoaded', () => {
 
const counterElement = document.getElementById('counter');
const progressbarElement = document.getElementById('progressbar'); // "progressbar" en minúsculas

new PureCounter({
  el: counterElement,
  duration: 2, // Duración en milisegundos
  delay: 10, // The delay between each iteration (the default of 10 will produce 100 fps) [miliseconds]
    once: true, // Counting at once or recount when the element in view [boolean]
    pulse: false, // Repeat count for certain time [boolean:false|seconds]
    decimals: 0, // How many decimal places to show. [uint]
    legacy: true, // If this is true it will use the scroll event listener on browsers
    filesizing: false, // This will enable/disable File Size format [boolean]
    currency: false, // This will enable/disable Currency format. Use it for set the symbol too [boolean|char|string]
    formater: "us-US", // Number toLocaleString locale/formater, by default is "en-US" [string|boolean:false]
    separator: false, // This will enable/disable comma separator for thousands. Use it for set the symbol too [boolean|char|string]
 

  onUpdate: function(currentCount) {
    // Actualizar la barra de progreso
    var progress = (currentCount / 500) * 100; // Suponiendo que el contador cuenta hasta 500
    progressbarElement.style.width = progress + '%';
  }
});

  
});  */ 
/* document.addEventListener('DOMContentLoaded', () => { 
 var counterElement = document.getElementById('counter');
  var progressbarElement = document.getElementById('progressbar');
  
  new PureCounter({
    el: counterElement,
    duration: 2, 
		delay: 10,  
    once: true,  
    pulse: false,  
    decimals: 0,  
    legacy: true,  
    filesizing: false, 
    currency: false, 
    formater: "us-US", 
    separator: false,
     
    onUpdate: function(currentCount) {
      // Actualizar la barra de progreso
      var progress = (currentCount / 1000) * 100;
      progressbarElement.style.width = progress + '%';
    }
  });
 });  */
 new PureCounter({
	duration: 2, // The time in seconds for the animation to complete [seconds]
  delay: 10, // The delay between each iteration (the default of 10 will produce 100 fps) [miliseconds]
 });

 document.addEventListener('DOMContentLoaded', function () {
    const progressElement = document.getElementById('progress');
    const counterElement = document.querySelector('.purecounter');

    // Obtiene el valor final del contador
    const finalValue = parseInt(counterElement.getAttribute('data-purecounter-end'));

    // Actualiza la barra de progreso en función del valor del contador
    function updateProgressBar() {
        const currentValue = parseInt(counterElement.textContent);
        const percentage = (currentValue / finalValue) * 100;
        progressElement.style.width = percentage + '%';
    }

    // Llama a la función para actualizar la barra de progreso cada 100ms
    setInterval(updateProgressBar, 100);
});