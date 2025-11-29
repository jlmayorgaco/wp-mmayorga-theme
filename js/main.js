document.addEventListener('DOMContentLoaded', function () {
    // -------- Hero video: mostrarlo cuando esté listo ----------
    const heroVideo = document.querySelector('[data-mm-hero-video]');
    const heroPoster = document.querySelector('.mm-hero-poster');

    if (heroVideo && heroPoster) {
        const showVideo = () => {
            heroVideo.style.opacity = '1';
            heroPoster.style.opacity = '0';
        };

        // Intentar reproducir (algunos navegadores bloquean autoplay)
        heroVideo.play().then(showVideo).catch(() => {
            // Si no puede auto–reproducir, dejamos la imagen
        });

        heroVideo.addEventListener('canplay', showVideo, { once: true });
    }

    // -------- Parallax sencillo en Y ---------------------------
    const parallaxEls = document.querySelectorAll('[data-parallax="y"]');

    if (parallaxEls.length) {
        const onScroll = () => {
            const scrollY = window.scrollY || window.pageYOffset;
            parallaxEls.forEach(el => {
                const speed = parseFloat(el.getAttribute('data-parallax-speed')) || 0.2;
                el.style.transform = `translateY(${scrollY * speed * -1}px)`;
            });
        };

        window.addEventListener('scroll', onScroll, { passive: true });
        onScroll();
    }
});



document.addEventListener('DOMContentLoaded', () => {
  // ============================
  // 1) HERO VIDEO FADE-IN
  // ============================
  const heroVideo = document.querySelector('[data-mm-hero-video]');

  if (heroVideo) {
    const mediaWrapper = heroVideo.closest('.mm-hero-media');

    const activateVideo = () => {
      if (!mediaWrapper) return;

      // Marca que el video está listo → activa el CSS de fade
      mediaWrapper.classList.add('mm-hero-media--video-ready');

      // Asegura que arranca desde el inicio y entra en loop
      try {
        heroVideo.currentTime = 0;
      } catch (e) {
        // some browsers pueden quejarse, no pasa nada
      }

      const playPromise = heroVideo.play();
      if (playPromise && typeof playPromise.then === 'function') {
        playPromise.catch(() => {
          // Si el navegador bloquea autoplay, simplemente dejamos el poster
        });
      }
    };

    // Cuando el video está listo para reproducirse fluido
    heroVideo.addEventListener('canplaythrough', () => {
      activateVideo();
    }, { once: true });

    // Fallback: si ya está listo (por cache)
    if (heroVideo.readyState >= 3) {
      activateVideo();
    }
  }

  // ============================
  // 2) PARALLAX VERTICAL SIMPLE
  // ============================
  const parallaxSections = document.querySelectorAll('[data-parallax="y"]');

  if (parallaxSections.length) {
    let lastY = window.scrollY;
    let ticking = false;

    const updateParallax = () => {
      parallaxSections.forEach((el) => {
        const speed = parseFloat(el.dataset.parallaxSpeed || '0.2');
        const offset = lastY * speed * -1; // mueve en sentido contrario al scroll
        el.style.transform = `translate3d(0, ${offset}px, 0)`;
      });
      ticking = false;
    };

    window.addEventListener('scroll', () => {
      lastY = window.scrollY || window.pageYOffset;
      if (!ticking) {
        window.requestAnimationFrame(updateParallax);
        ticking = true;
      }
    });

    // Primera actualización
    updateParallax();
  }
});
