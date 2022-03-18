'use strict';

{

  // Hamburger-menu--------------
  const open = document.getElementById('open');
  const overlay = document.querySelector('.overlay');
  const close = document.getElementById('close');

  open.addEventListener('click', () => {
    overlay.classList.add('show');
    open.classList.add('hide');
  });

    close.addEventListener('click', () => {
    overlay.classList.remove('show');
    open.classList.remove('hide');
  });

    overlay.addEventListener('click', () => {
    overlay.classList.remove('show');
    open.classList.remove('hide');
  });

// Wrapper animation-----------

function callback(entries, obs) {
  entries.forEach(entry => {
    if (!entry.isIntersecting) {
      return;
    }

    entry.target.classList.add('appear')
    obs.unobserve(entry.target);
  });
}

const options = {
  threshold: 0.2,
};

const observer = new IntersectionObserver(callback, options);

const targets = document.querySelectorAll('.wrapper, .text');

targets.forEach(target => {
  observer.observe(target);
});
}