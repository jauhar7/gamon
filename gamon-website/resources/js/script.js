document.addEventListener('DOMContentLoaded', () => {
  // 1. Sticky Navbar Effect
  const navbar = document.getElementById('navbar');
  
  const handleScroll = () => {
    if (window.scrollY > 50) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  };
  
  window.addEventListener('scroll', handleScroll, { passive: true });
  // Call once on load
  handleScroll();

  // 2. Scroll Reveal Animation using Intersection Observer
  const observerOptions = {
    root: null,
    rootMargin: '0px',
    threshold: 0.15
  };

  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        // Optional: Stop observing once revealed if you only want it to happen once
        // observer.unobserve(entry.target);
      }
    });
  }, observerOptions);

  const animateElements = document.querySelectorAll('.scroll-animate');
  animateElements.forEach(el => observer.observe(el));

  // 3. Testimonial Slider
  function createSlider(trackSelector, dotsSelector, delay) {
    const track = document.querySelector(trackSelector);
    const dotsContainer = document.querySelector(dotsSelector);
    if (!track) return;

    const slides = track.children;
    const count = slides.length;
    let index = 0;
    let timer = null;

    if (dotsContainer) {
      dotsContainer.innerHTML = '';
      for (let i = 0; i < count; i++) {
        const dot = document.createElement('span');
        if (i === 0) dot.classList.add('active');
        dot.addEventListener('click', () => {
          goTo(i);
          restart();
        });
        dotsContainer.appendChild(dot);
      }
    }

    function updateDots() {
      if (!dotsContainer) return;
      [...dotsContainer.children].forEach((d, i) => {
        d.classList.toggle('active', i === index);
      });
    }

    function goTo(i) {
      index = i;
      track.style.transform = `translateX(-${index * 100}%)`;
      updateDots();
    }

    function next() {
      index = (index + 1) % count;
      goTo(index);
    }

    function start() {
      timer = setInterval(next, delay);
    }

    function restart() {
      clearInterval(timer);
      start();
    }

    start();

    const wrapper = track.parentElement;
    wrapper.addEventListener('mouseenter', () => clearInterval(timer));
    wrapper.addEventListener('mouseleave', start);
  }

  createSlider('#testiTrack', '#testiDots', 4000);

  // 4. FAQ Accordion
  const accordionItems = document.querySelectorAll('.accordion-item');
  
  accordionItems.forEach(item => {
    const header = item.querySelector('.accordion-header');
    
    header.addEventListener('click', () => {
      const isActive = item.classList.contains('active');
      
      // Close all accordions first (optional, for auto-collapse behavior)
      accordionItems.forEach(acc => acc.classList.remove('active'));
      
      // Toggle current
      if (!isActive) {
        item.classList.add('active');
      }
    });
  });
});
