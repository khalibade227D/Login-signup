
const sidenav = document.getElementById('sidenav');
const mainEl = document.getElementById('main');
const burgerBtn = document.getElementById('burgerBtn');
const closeBtn = document.getElementById('closeBtn');
 
function openNav() {
  sidenav.classList.add('open');
  mainEl.classList.add('shift');
}
 
function closeNav() {
  sidenav.classList.remove('open');
  mainEl.classList.remove('shift');
}
 
burgerBtn.addEventListener('click', () => {
  sidenav.classList.contains('open') ? closeNav() : openNav();
});
 
closeBtn.addEventListener('click', closeNav);
 
document.addEventListener('keydown', (e) => {
  if (e.key === 'Escape') closeNav();
});
 
const sections = document.querySelectorAll('main section');
const navLinks = document.querySelectorAll('.sidenav a');
 
const observer = new IntersectionObserver((entries) => {
  const visibleSections = entries.filter(entry => entry.isIntersecting);
 
  if (visibleSections.length > 0) {
    let closestSection = visibleSections[0];
    let closestTop = Infinity;
 
    visibleSections.forEach(section => {
      const rect = section.target.getBoundingClientRect();
      if (rect.top < closestTop && rect.top >= 0) {
        closestTop = rect.top;
        closestSection = section;
      }
    });
 
    navLinks.forEach(link => link.classList.remove('current'));
    const matchingLink = document.querySelector(`.sidenav a[href="#${closestSection.target.id}"]`);
    if (matchingLink) matchingLink.classList.add('current');
  }
}, {
  rootMargin: '0px 0px -50px 0px',
  threshold: [0, 0.1, 0.2, 0.3, 0.4, 0.5]
});
 
sections.forEach(s => observer.observe(s));
 
navLinks.forEach(link => {
  link.addEventListener('click', function () {
    navLinks.forEach(l => l.classList.remove('current'));
    this.classList.add('current');
    if (window.innerWidth < 640) closeNav();
  });
});
 
window.addEventListener('load', function () {
  if (window.location.hash) {
    const targetId = window.location.hash.substring(1);
    const matchingLink = document.querySelector(`.sidenav a[href="#${targetId}"]`);
    if (matchingLink) {
      navLinks.forEach(l => l.classList.remove('current'));
      matchingLink.classList.add('current');
    }
  }
});
 
