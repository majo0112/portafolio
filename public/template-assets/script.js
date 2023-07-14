//Animación escritura

const developerElement = document.getElementById('developer');
const profesion = 'A web developer';
const typingSpeed = 90;

// Función para animar la escritura progresiva del texto
function animateTyping(element, text, speed) {
  let i = 0;

  const typingInterval = setInterval(() => {
    element.textContent += text.charAt(i);
    i++;

    if (i === text.length) {
      clearInterval(typingInterval);
    }
  }, speed);
}

// Iniciar la animación de escritura
animateTyping(developerElement, profesion, typingSpeed);


//Animación para deslizar proyectos 

const projectSlider = document.querySelector('.project-slider');
const projects = Array.from(projectSlider.getElementsByClassName('project'));
const leftArrow = document.querySelector('.left-arrow');
const rightArrow = document.querySelector('.right-arrow');
let currentProjectIndex = 0;

leftArrow.addEventListener('click', () => {
  projectSlider.scrollLeft -= projectSlider.offsetWidth;
});

rightArrow.addEventListener('click', () => {
  projectSlider.scrollLeft += projectSlider.offsetWidth;
});



const openFormButton = document.getElementById('open-form-btn');
const contactFormOverlay = document.getElementById('contact-form-overlay');
const closeFormButton = document.getElementById('close-form-btn');

openFormButton.addEventListener('click', () => {
  contactFormOverlay.style.display = 'block';
});

closeFormButton.addEventListener('click', () => {
  contactFormOverlay.style.display = 'none';
});

const contactForm = document.getElementById('contact-form');

contactForm.addEventListener('submit', (e) => {
  e.preventDefault();
  contactFormOverlay.style.display = 'none';
});


