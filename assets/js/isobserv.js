const options = {
  root: null,
  rootMargin: '-30% 0px',
  threshold: 0
};

const obs = new IntersectionObserver(showIntersect, options);

const fadeIns = document.querySelectorAll('.js-animation');
fadeIns.forEach(fadein => obs.observe(fadein));


function showIntersect(changes,observer) {
  changes.forEach(change => {
      if (change.isIntersecting) {
          change.target.classList.add('is-animated');
          observer.unobserve(change.target);
      } else {
          change.target.classList.remove('is-animated');
      }
  });
}