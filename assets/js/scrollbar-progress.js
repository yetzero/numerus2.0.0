/* window.onscroll = function() {myFunction()};

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
} */

/* const progressBar = document.getElementById('progress-bar');
const section = document.getElementById('colegios');
if (progressBar) {
	console.log(true, 'Si existe el progressBar');
	window.addEventListener('scroll', function() {
     var section = document.getElementById('colegios');
    var progressBar = document.getElementById('progress-bar');  
    var totalHeight = section.clientHeight - window.innerHeight;
		console.log('Response1:', totalHeight)
    var progress = (window.scrollY / totalHeight) * 100;
		console.log('Response2:', progress)
    progressBar.style.width = progress + '%';
});
} else {
	console.log(false , 'No existe el progressBar');
} */
/* window.addEventListener('scroll', function() {
    var section = document.getElementById('colegios');
    var progressBar = document.getElementById('progress-bar');
    var totalHeight = section.clientHeight - window.innerHeight;
    var progress = (window.scrollY / totalHeight) * 100;
    progressBar.style.width = progress + '%';
}); */
/* window.addEventListener('scroll', function() {
    var section = document.getElementById('colegios');
    var progressBar = document.getElementById('progress-bar');
    var totalHeight = section.clientHeight - window.innerHeight;
    var progress = (window.scrollY / totalHeight) * 100;
    progressBar.style.width = progress + '%';
}); */

/* const sectionForBar = document.getElementById('colegios');
const progressBar = document.getElementById('progress-bar');

if (sectionForBar) { 
	console.log(true, 'Si existe el progressBar');

	document.addEventListener('scroll', () => {
      //window.scrollY > 100 ? selectHeader.classList.add('sticked') : selectHeader.classList.remove('sticked');
		var totalHeight = sectionForBar.clientHeight - window.innerHeight;
    var progress = (window.scrollY / totalHeight) * 100;
		progressBar.style.width = progress + '%';
	});



} else {
	console.log(false , 'No existe el progressBar');
} */

/* document.addEventListener("DOMContentLoaded", function() {
  const progressBar = document.getElementById("progressBar");
  let progress = 0;

  const updateProgressBar = () => {
    progress += 1;
    progressBar.style.width = `${progress}%`;
    if (progress < 100) {
      requestAnimationFrame(updateProgressBar);
    }
  };

  // Llama a la función para iniciar la animación de la barra de progreso.
  updateProgressBar();
}); */

window.addEventListener('scroll', function() {
    // Calcula la altura total de la página
    var windowHeight = window.innerHeight;
    var documentHeight = document.body.clientHeight;
    var scrollTop = window.pageYOffset || (document.documentElement || document.body.parentNode || document.body).scrollTop;

    // Verifica si el usuario ha llegado a la tercera sección
    var section3 = document.getElementById('colegios');
    var section3Top = section3.offsetTop;
    var section3Height = section3.offsetHeight;

    if (scrollTop >= section3Top - windowHeight && scrollTop <= section3Top + section3Height) {
      // Calcula el progreso y actualiza la barra de progreso
      var progress = (scrollTop - (section3Top - windowHeight)) / (section3Height - windowHeight) * 100;
      document.getElementById('progressBar').style.width = progress + '%';
    }
  });

