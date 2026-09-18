/**
 * GENGGONG BALI BATUAN - Interactive Scripts
 * Vanilla JS - no framework dependencies
 */

document.addEventListener('DOMContentLoaded', () => {
  const $ = (s, ctx = document) => ctx.querySelector(s);
  const $$ = (s, ctx = document) => [...ctx.querySelectorAll(s)];

  /* ---------- Loader ---------- */
  const loader = $('#loader');
  // simulate loading then hide
  setTimeout(() => {
    if (loader) {
      loader.classList.add('hidden');
      document.body.style.overflow = '';
      // trigger hero entrance
      document.querySelectorAll('.hero-entrance').forEach((el, i) => {
        el.style.transitionDelay = `${i * 0.08}s`;
        el.classList.add('visible');
      });
    }
  }, 1400);
  // lock scroll during loader
  if (loader) document.body.style.overflow = 'hidden';

  /* ---------- Navbar scroll effect ---------- */
  const navbar = $('.navbar');
  const onScroll = () => {
    if (!navbar) return;
    if (window.scrollY > 40) navbar.classList.add('scrolled');
    else navbar.classList.remove('scrolled');

    // back to top
    const btt = $('.back-to-top');
    if (btt) {
      if (window.scrollY > 600) btt.classList.add('visible');
      else btt.classList.remove('visible');
    }

    // active nav link
    const sections = $$('section[id]');
    let current = '';
    sections.forEach(sec => {
      const top = sec.offsetTop - 140;
      if (window.scrollY >= top) current = sec.id;
    });
    $$('.nav-links a').forEach(a => {
      a.classList.toggle('active', a.getAttribute('href') === `#${current}`);
    });
  };
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  /* ---------- Mobile menu ---------- */
  const hamburger = $('#hamburger');
  const mobileMenu = $('#mobileMenu');
  const toggleMenu = () => {
    if (!mobileMenu || !hamburger) return;
    const open = mobileMenu.classList.toggle('open');
    hamburger.classList.toggle('active', open);
    hamburger.setAttribute('aria-expanded', open ? 'true' : 'false');
    document.body.style.overflow = open ? 'hidden' : '';
  };
  if (hamburger) hamburger.addEventListener('click', toggleMenu);
  if (mobileMenu) {
    mobileMenu.querySelectorAll('a').forEach(a => a.addEventListener('click', () => {
      mobileMenu.classList.remove('open');
      hamburger?.classList.remove('active');
      hamburger?.setAttribute('aria-expanded','false');
      document.body.style.overflow = '';
    }));
  }

  /* ---------- Smooth scrolling ---------- */
  $$('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
      const href = a.getAttribute('href');
      if (!href || href === '#') return;
      const target = document.querySelector(href);
      if (target) {
        e.preventDefault();
        const offset = target.offsetTop - 72;
        window.scrollTo({ top: offset, behavior: 'smooth' });
      }
    });
  });

  /* ---------- Reveal on scroll ---------- */
  const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        revealObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });
  $$('.reveal, .timeline-item').forEach(el => revealObserver.observe(el));

  /* ---------- Animated counter ---------- */
  const counters = $$('[data-count]');
  const counterObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;
      const el = entry.target;
      const target = parseInt(el.dataset.count, 10);
      const suffix = el.dataset.suffix || '';
      let current = 0;
      const duration = 1400;
      const stepTime = 16;
      const steps = duration / stepTime;
      const increment = target / steps;
      const timer = setInterval(() => {
        current += increment;
        if (current >= target) {
          current = target;
          clearInterval(timer);
        }
        el.textContent = Math.floor(current).toLocaleString('id-ID') + suffix;
      }, stepTime);
      counterObserver.unobserve(el);
    });
  }, { threshold: 0.6 });
  counters.forEach(c => counterObserver.observe(c));

  /* ---------- Lightbox Gallery ---------- */
  const galleryItems = $$('.gallery-item');
  const lightbox = $('#lightbox');
  const lightboxImg = $('#lightboxImg');
  let currentIndex = 0;
  const images = galleryItems.map(item => item.querySelector('img')?.src).filter(Boolean);

  const openLightbox = (idx) => {
    currentIndex = idx;
    if (lightbox && lightboxImg) {
      lightboxImg.src = images[currentIndex];
      lightbox.classList.add('open');
      document.body.style.overflow = 'hidden';
    }
  };
  const closeLightbox = () => {
    if (lightbox) lightbox.classList.remove('open');
    document.body.style.overflow = '';
  };
  const navLightbox = (dir) => {
    currentIndex = (currentIndex + dir + images.length) % images.length;
    if (lightboxImg) lightboxImg.src = images[currentIndex];
  };

  galleryItems.forEach((item, idx) => {
    item.addEventListener('click', () => openLightbox(idx));
  });
  $('#lightboxClose')?.addEventListener('click', closeLightbox);
  $('#lightboxPrev')?.addEventListener('click', () => navLightbox(-1));
  $('#lightboxNext')?.addEventListener('click', () => navLightbox(1));
  lightbox?.addEventListener('click', (e) => {
    if (e.target === lightbox) closeLightbox();
  });
  document.addEventListener('keydown', (e) => {
    if (!lightbox?.classList.contains('open')) return;
    if (e.key === 'Escape') closeLightbox();
    if (e.key === 'ArrowLeft') navLightbox(-1);
    if (e.key === 'ArrowRight') navLightbox(1);
  });

  /* ---------- Artist Modal ---------- */
  const modal = $('#artistModal');
  const modalImg = $('#modalImg');
  const modalName = $('#modalName');
  const modalRole = $('#modalRole');
  const modalDesc = $('#modalDesc');
  const modalOrigin = $('#modalOrigin');

  $$('[data-artist]').forEach(btn => {
    btn.addEventListener('click', () => {
      const card = btn.closest('.artist-card');
      if (!card || !modal) return;
      const img = card.querySelector('img')?.src || '';
      const name = card.dataset.name || card.querySelector('h4')?.textContent || '';
      const role = card.dataset.role || '';
      const origin = card.dataset.origin || '';
      const desc = card.dataset.desc || '';
      if (modalImg) modalImg.src = img;
      if (modalName) modalName.textContent = name;
      if (modalRole) modalRole.textContent = role;
      if (modalOrigin) modalOrigin.textContent = origin;
      if (modalDesc) modalDesc.textContent = desc;
      modal.classList.add('open');
      document.body.style.overflow = 'hidden';
    });
  });
  const closeModal = () => {
    if (modal) modal.classList.remove('open');
    document.body.style.overflow = '';
  };
  $('#modalClose')?.addEventListener('click', closeModal);
  modal?.addEventListener('click', (e) => {
    if (e.target === modal) closeModal();
  });
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && modal?.classList.contains('open')) closeModal();
  });

  /* ---------- Video placeholder ---------- */
  const videoPlaceholder = $('#videoPlaceholder');
  videoPlaceholder?.addEventListener('click', () => {
    // In production replace src with real youtube embed
    videoPlaceholder.innerHTML = `
      <iframe width="100%" height="100%" style="aspect-ratio:16/9; border:0"
        src="https://www.youtube.com/embed/9bZkp7q19f0?autoplay=1&rel=0"
        title="Genggong Bali Batuan" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    `;
  });
  $$('.video-thumb').forEach(thumb => {
    thumb.addEventListener('click', () => {
      const src = thumb.dataset.video || 'https://www.youtube.com/embed/9bZkp7q19f0?autoplay=1';
      if (videoPlaceholder) {
        videoPlaceholder.innerHTML = `<iframe width="100%" height="100%" style="aspect-ratio:16/9; border:0" src="${src}" title="Video" allow="autoplay; encrypted-media" allowfullscreen></iframe>`;
        videoPlaceholder.scrollIntoView({ behavior: 'smooth', block: 'center' });
      }
    });
  });

  /* ---------- Hero Video: mute toggle + autoplay resilience ---------- */
  const heroVideo = $('#heroVideo');
  const muteBtn = $('#heroMuteBtn');
  const muteIcon = $('#heroMuteIcon');
  const muteText = $('#heroMuteText');
  const syncMuteUI = () => {
    if (!heroVideo || !muteIcon || !muteText || !muteBtn) return;
    const muted = heroVideo.muted;
    muteIcon.className = muted ? 'fa-solid fa-volume-xmark' : 'fa-solid fa-volume-high';
    muteText.textContent = muted ? 'Suara Mati' : 'Suara Hidup';
    muteBtn.classList.toggle('is-live', !muted);
  };
  if (heroVideo) {
    // Ensure autoplay works: muted is required; retry play on canplay
    heroVideo.muted = true;
    const tryPlay = () => heroVideo.play().catch(()=>{});
    heroVideo.addEventListener('canplay', tryPlay, { once: true });
    tryPlay();
    syncMuteUI();
  }
  muteBtn?.addEventListener('click', () => {
    if (!heroVideo) return;
    heroVideo.muted = !heroVideo.muted;
    if (!heroVideo.muted) heroVideo.volume = 0.9;
    // if unmuted, ensure playing
    heroVideo.play().catch(()=>{});
    syncMuteUI();
  });
  // Space/Enter not needed - button native

  /* ---------- Parallax effect ---------- */
  const heroVideoWrap = $('.hero-video-wrap');
  const heroBgFallback = $('.hero-bg'); // kept for backwards compat if reused elsewhere
  const parallaxTarget = heroVideoWrap?.querySelector('video') || heroBgFallback || $('.hero-video-wrap');
  let ticking = false;
  window.addEventListener('scroll', () => {
    if (!parallaxTarget || ticking) return;
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
    ticking = true;
    requestAnimationFrame(() => {
      const y = window.scrollY * 0.22;
      parallaxTarget.style.transform = `translateY(${y}px) scale(1.02)`;
      ticking = false;
    });
  }, { passive: true });

  /* ---------- Lazy loading (native + fallback) ---------- */
  if ('loading' in HTMLImageElement.prototype) {
    // native lazy already via loading="lazy"
  } else {
    const lazyImgs = $$('img[loading="lazy"]');
    const imgObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const img = entry.target;
          if (img.dataset.src) img.src = img.dataset.src;
          imgObserver.unobserve(img);
        }
      });
    });
    lazyImgs.forEach(img => imgObserver.observe(img));
  }

  /* ---------- Back to top ---------- */
  $('.back-to-top')?.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });

  /* ---------- Contact form demo ---------- */
  const contactForm = $('#contactForm');
  contactForm?.addEventListener('submit', (e) => {
    e.preventDefault();
    const btn = contactForm.querySelector('button[type="submit"]');
    const original = btn ? btn.innerHTML : '';
    if (btn) {
      btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Mengirim...';
      btn.disabled = true;
    }
    setTimeout(() => {
      if (btn) {
        btn.innerHTML = '<i class="fa-solid fa-check"></i> Terkirim!';
        btn.style.background = '#1a7f37';
      }
      // toast
      showToast('Pesan berhasil dikirim. Terima kasih telah menghubungi kami!');
      setTimeout(() => {
        if (btn) {
          btn.innerHTML = original;
          btn.disabled = false;
          btn.style.background = '';
        }
        contactForm.reset();
      }, 2200);
    }, 1100);
  });

  function showToast(msg){
    let toast = document.createElement('div');
    toast.textContent = msg;
    toast.style.cssText = `
      position:fixed; left:50%; bottom:30px; transform:translateX(-50%) translateY(10px);
      background: #101415; color: #FFF7E8; border:1px solid rgba(212,168,75,0.25);
      padding:12px 18px; border-radius:999px; font-size:13px; z-index:99;
      box-shadow:0 12px 32px rgba(0,0,0,0.4); opacity:0; transition: all 0.4s;
    `;
    document.body.appendChild(toast);
    requestAnimationFrame(()=> { toast.style.opacity='1'; toast.style.transform='translateX(-50%) translateY(0)'; });
    setTimeout(()=> {
      toast.style.opacity='0'; toast.style.transform='translateX(-50%) translateY(10px)';
      setTimeout(()=> toast.remove(), 400);
    }, 3200);
  }

  /* ---------- Newsletter demo ---------- */
  $('#newsletterForm')?.addEventListener('submit', (e)=>{
    e.preventDefault();
    showToast('Terima kasih! Anda akan menerima update terbaru Genggong Batuan.');
    e.target.reset();
  });

  /* ---------- Flip cards - tap to flip on mobile ---------- */
  $$('.flip-card').forEach(card=>{
    card.addEventListener('click', ()=>{
      // only for touch / small screens
      if(window.innerWidth <= 768 || window.matchMedia('(hover: none)').matches){
        // close others
        $$('.flip-card.flipped').forEach(c=>{ if(c!==card) c.classList.remove('flipped') });
        card.classList.toggle('flipped');
      }
    });
  });

});

// expose helper for inline handlers if needed
window.Genggong = window.Genggong || {};
