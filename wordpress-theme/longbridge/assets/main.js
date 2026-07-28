(function () {
  /* theme toggle */
  var root = document.documentElement;
  var toggle = document.getElementById('themeToggle');
  toggle.addEventListener('click', function () {
    var current = root.getAttribute('data-theme');
    if (!current) {
      current = matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
    }
    root.setAttribute('data-theme', current === 'dark' ? 'light' : 'dark');
  });

  /* sticky header border */
  var header = document.getElementById('header');
  var onScroll = function () { header.classList.toggle('scrolled', window.scrollY > 8); };
  onScroll();
  window.addEventListener('scroll', onScroll, { passive: true });

  /* scroll reveal */
  var reveals = document.querySelectorAll('.reveal');
  if ('IntersectionObserver' in window) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (e, i) {
        if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
    reveals.forEach(function (el) { io.observe(el); });
  } else {
    reveals.forEach(function (el) { el.classList.add('in'); });
  }

  /* form (mock — no backend) */
  var form = document.getElementById('applyForm');
  var success = document.getElementById('formSuccess');
  form.addEventListener('submit', function (e) {
    e.preventDefault();
    if (!form.checkValidity()) { form.reportValidity(); return; }
    form.style.display = 'none';
    success.classList.add('show');
    success.scrollIntoView({ behavior: 'smooth', block: 'center' });
  });
})();
