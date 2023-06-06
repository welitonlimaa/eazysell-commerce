import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const ham = document.getElementById('ham-svg');
const x = document.getElementById('x-svg');
const navLinks = document.getElementById('nav-links');

ham.addEventListener('click', () => {
  ham.classList.add('hidden');
  x.classList.remove('hidden');
  navLinks.classList.remove('hidden');
});

x.addEventListener('click', () => {
  ham.classList.remove('hidden');
  x.classList.add('hidden');
  navLinks.classList.add('hidden');
});

const slidesContainer = document.getElementById('slides-container');
const slide = document.querySelector('.slide');
const prevButton = document.getElementById('slide-arrow-prev');
const nextButton = document.getElementById('slide-arrow-next');

nextButton.addEventListener('click', () => {
  const slideWidth = slide.clientWidth;
  slidesContainer.scrollLeft += slideWidth;
});

prevButton.addEventListener('click', () => {
  const slideWidth = slide.clientWidth;
  slidesContainer.scrollLeft -= slideWidth;
});