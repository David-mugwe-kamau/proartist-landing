/**
 * ProArtist Africa - Main JavaScript
 * 
 * @package ProArtist
 */

(function() {
    'use strict';

    // Lightweight page-view tracking (once per page per tab session).
    // Sends anonymous page view events to Supabase for admin analytics.
    (function trackPageView() {
        var SUPABASE_URL = 'https://qckpjmoajhskxrfcsvpa.supabase.co';
        var SUPABASE_ANON_KEY = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InFja3BqbW9hamhza3hyZmNzdnBhIiwicm9sZSI6ImFub24iLCJpYXQiOjE3NzQzNTAzOTcsImV4cCI6MjA4OTkyNjM5N30.vIS_AWNXn1ezKND9ARMJHNOTcuDR_-7PQ6Qedas_46c';
        if (!window.fetch || !window.sessionStorage) return;
        try {
            var pagePath = window.location.pathname || '/';
            var pageKey = 'pa_view_logged::' + pagePath;
            if (sessionStorage.getItem(pageKey) === '1') return;
            sessionStorage.setItem(pageKey, '1');
            fetch(SUPABASE_URL + '/rest/v1/page_views', {
                method: 'POST',
                headers: {
                    'apikey': SUPABASE_ANON_KEY,
                    'Authorization': 'Bearer ' + SUPABASE_ANON_KEY,
                    'Content-Type': 'application/json',
                    'Prefer': 'return=minimal'
                },
                body: JSON.stringify({
                    page_path: pagePath,
                    page_url: window.location.href || null,
                    referrer: document.referrer || null
                })
            }).then(function(res) {
                // If insert fails, allow retry on next page load.
                if (!res || !res.ok) {
                    try { sessionStorage.removeItem(pageKey); } catch (e2) {}
                }
            }).catch(function() {
                try { sessionStorage.removeItem(pageKey); } catch (e3) {}
            });
        } catch (e) {}
    })();
    
    // Mobile Menu Toggle
    const menuToggle = document.querySelector('.menu-toggle');
    const primaryMenu = document.querySelector('.primary-menu');
    
    if (menuToggle && primaryMenu) {
        menuToggle.addEventListener('click', function() {
            primaryMenu.classList.toggle('active');
            menuToggle.classList.toggle('active');
            menuToggle.setAttribute('aria-expanded', 
                primaryMenu.classList.contains('active') ? 'true' : 'false'
            );
        });
    }
    
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href !== '#' && href.length > 1) {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    });
    
    // Form validation
    const contactForms = document.querySelectorAll('.contact-form');
    contactForms.forEach(form => {
        form.addEventListener('submit', function(e) {
            const requiredFields = form.querySelectorAll('[required]');
            let isValid = true;
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.style.borderColor = '#f25757';
                } else {
                    field.style.borderColor = '';
                }
            });
            
            if (!isValid) {
                e.preventDefault();
                alert('Please fill in all required fields.');
            }
        });
    });
    
    // Fade in animations on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);
    
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const heroRevealObserver = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting && document.body.classList.contains('page-ready')) {
                entry.target.classList.add('content-revealed');
            }
        });
    }, observerOptions);

    document.querySelectorAll('.stat-card, .brand-card, .section').forEach(el => {
        if (prefersReducedMotion) {
            el.style.opacity = '1';
            el.style.transform = 'none';
        } else {
            el.style.opacity = '0';
            el.style.transform = 'translateY(24px)';
            el.style.transition = 'opacity 0.5s cubic-bezier(0.4, 0, 0.2, 1), transform 0.5s cubic-bezier(0.4, 0, 0.2, 1)';
            observer.observe(el);
        }
    });

    document.querySelectorAll('.hero-section:not(.home-slide)').forEach(el => {
        if (!prefersReducedMotion) heroRevealObserver.observe(el);
        else el.classList.add('content-revealed');
    });

    requestAnimationFrame(function() {
        requestAnimationFrame(function() {
            document.body.classList.add('page-ready');
            document.querySelectorAll('.hero-section:not(.home-slide)').forEach(el => {
                const rect = el.getBoundingClientRect();
                if (rect.top < window.innerHeight && rect.bottom > 0) {
                    el.classList.add('content-revealed');
                }
            });
        });
    });

    // Home page carousel: horizontal slide + 3D + fade, auto-advance 6s, swipe to control
    if (document.documentElement.classList.contains('home-slides-root')) {
        const track = document.querySelector('.home-carousel-track');
        const slides = document.querySelectorAll('.home-carousel .home-slide');
        const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        if (track && slides.length >= 2) {
            let currentIndex = 0;
            const SLIDE_INTERVAL = 9000;
            let autoTimer = null;
            requestAnimationFrame(function() {
                requestAnimationFrame(function() {
                    slides[0].classList.add('active');
                });
            });

            function goToSlide(index) {
                currentIndex = Math.max(0, Math.min(index, slides.length - 1));
                track.style.transform = 'translate3d(-' + (currentIndex * 100) + '%, 0, 0)';
                slides.forEach(function(s, i) { s.classList.toggle('active', i === currentIndex); });
            }

            function nextSlide() {
                goToSlide((currentIndex + 1) % slides.length);
            }

            function startAutoAdvance() {
                if (reducedMotion) return;
                clearInterval(autoTimer);
                autoTimer = setInterval(nextSlide, SLIDE_INTERVAL);
            }

            function pauseAndResume() {
                clearInterval(autoTimer);
                autoTimer = null;
                setTimeout(startAutoAdvance, SLIDE_INTERVAL);
            }

            if (!reducedMotion) startAutoAdvance();

            // Swipe: touch
            let touchStartX = 0, touchStartY = 0;
            let ignoreSwipe = false;
            track.addEventListener('touchstart', function(e) {
                touchStartX = e.touches[0].clientX;
                touchStartY = e.touches[0].clientY;
                // If the user starts the gesture inside the footer area, do not switch home slides.
                // This prevents the footer from being affected by the carousel translate transform.
                const footer = document.querySelector('.site-footer');
                if (footer && footer.getBoundingClientRect) {
                    const rect = footer.getBoundingClientRect();
                    ignoreSwipe = (
                        touchStartX >= rect.left &&
                        touchStartX <= rect.right &&
                        touchStartY >= rect.top &&
                        touchStartY <= rect.bottom
                    );
                } else {
                    ignoreSwipe = false;
                }
            }, { passive: true });
            track.addEventListener('touchend', function(e) {
                if (ignoreSwipe) return;
                const dx = e.changedTouches[0].clientX - touchStartX;
                const dy = e.changedTouches[0].clientY - touchStartY;
                if (Math.abs(dx) > Math.abs(dy) * 1.5 && Math.abs(dx) > 50) {
                    pauseAndResume();
                    if (dx > 0) goToSlide(currentIndex - 1);
                    else goToSlide(currentIndex + 1);
                }
            });

            // Swipe: mouse (desktop drag)
            let mouseDown = false, mouseStartX = 0;
            track.addEventListener('mousedown', function(e) {
                mouseDown = true;
                mouseStartX = e.clientX;
            });
            document.addEventListener('mouseup', function(e) {
                if (!mouseDown) return;
                mouseDown = false;
                const dx = e.clientX - mouseStartX;
                if (Math.abs(dx) > 50) {
                    pauseAndResume();
                    if (dx > 0) goToSlide(currentIndex - 1);
                    else goToSlide(currentIndex + 1);
                }
            });
        }
    }

    // Jobs & Brands: image carousels - horizontal slide + swipe on mobile
    const jobsCarousels = document.querySelectorAll('.jobs-image-carousel-track');
    const jobsReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    jobsCarousels.forEach(function(track) {
        var slides = track.querySelectorAll('.jobs-image-carousel-slide');
        if (slides.length < 2) return;
        var idx = 0;
        var autoTimer = null;
        var SLIDE_INTERVAL = 3000;

        function goToSlide(index) {
            idx = Math.max(0, Math.min(index, slides.length - 1));
            track.style.transform = 'translate3d(-' + (idx * 100) + '%, 0, 0)';
        }

        function nextSlide() {
            goToSlide((idx + 1) % slides.length);
        }

        function startAutoAdvance() {
            if (jobsReducedMotion) return;
            clearInterval(autoTimer);
            autoTimer = setInterval(nextSlide, SLIDE_INTERVAL);
        }

        function pauseAndResume() {
            clearInterval(autoTimer);
            autoTimer = null;
            setTimeout(startAutoAdvance, SLIDE_INTERVAL);
        }

        if (!jobsReducedMotion) startAutoAdvance();

        // Swipe: touch
        var touchStartX = 0, touchStartY = 0;
        track.addEventListener('touchstart', function(e) {
            touchStartX = e.touches[0].clientX;
            touchStartY = e.touches[0].clientY;
        }, { passive: true });
        track.addEventListener('touchend', function(e) {
            var dx = e.changedTouches[0].clientX - touchStartX;
            var dy = e.changedTouches[0].clientY - touchStartY;
            if (Math.abs(dx) > Math.abs(dy) && Math.abs(dx) > 50) {
                pauseAndResume();
                if (dx > 0) goToSlide(idx - 1);
                else goToSlide(idx + 1);
            }
        });

        // Swipe: mouse (desktop drag)
        var mouseDown = false, mouseStartX = 0;
        track.addEventListener('mousedown', function(e) {
            mouseDown = true;
            mouseStartX = e.clientX;
        });
        document.addEventListener('mouseup', function(e) {
            if (!mouseDown) return;
            mouseDown = false;
            var dx = e.clientX - mouseStartX;
            if (Math.abs(dx) > 50) {
                pauseAndResume();
                if (dx > 0) goToSlide(idx - 1);
                else goToSlide(idx + 1);
            }
        });
    });

    // Current page indicator: highlight nav link (Investors, Brands, About, Jobs, Blog) - for static previews when WP doesn't add current-menu-item
    const navMenu = document.querySelector('.primary-menu');
    if (navMenu && !document.querySelector('.primary-menu .current-menu-item')) {
        const path = window.location.pathname;
        const pathParts = path.split('/').filter(Boolean);
        const pageName = (pathParts.pop() || '').replace(/\.(html|php)$/, '');
        navMenu.querySelectorAll('a').forEach(function(a) {
            const linkHref = (a.getAttribute('href') || '').replace(/^https?:\/\/[^\/]+/, '');
            const linkParts = linkHref.split('/').filter(Boolean);
            const linkPage = (linkParts.pop() || '').replace(/\.(html|php)$/, '').split('?')[0];
            if (linkPage && (pageName === linkPage || path.indexOf(linkPage) >= 0)) {
                a.parentNode.classList.add('current-menu-item');
            }
        });
    }

    // Global settings loader (from site_content: settings)
    (function applyGlobalSettings() {
        if (typeof window.supabase === 'undefined') return;
        var SUPABASE_URL = 'https://qckpjmoajhskxrfcsvpa.supabase.co';
        var SUPABASE_ANON_KEY = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InFja3BqbW9hamhza3hyZmNzdnBhIiwicm9sZSI6ImFub24iLCJpYXQiOjE3NzQzNTAzOTcsImV4cCI6MjA4OTkyNjM5N30.vIS_AWNXn1ezKND9ARMJHNOTcuDR_-7PQ6Qedas_46c';
        var client = window.supabase.createClient(SUPABASE_URL, SUPABASE_ANON_KEY);
        client
            .from('site_content')
            .select('title,subtitle,button_primary,button_secondary')
            .eq('section_key', 'settings')
            .maybeSingle()
            .then(function(res) {
                var data = res && res.data ? res.data : null;
                if (!data) return;

                var siteTitle = data.title ? String(data.title).trim() : '';
                var contactEmail = data.button_primary ? String(data.button_primary).trim() : '';
                var settingsObj = null;
                var instagramUrl = '';
                var phoneRaw = '';
                try {
                    settingsObj = data.button_secondary ? JSON.parse(String(data.button_secondary)) : null;
                } catch (e0) {
                    settingsObj = null;
                }
                if (settingsObj && typeof settingsObj === 'object') {
                    instagramUrl = settingsObj.instagram_url ? String(settingsObj.instagram_url).trim() : '';
                    phoneRaw = settingsObj.phone ? String(settingsObj.phone).trim() : '';
                } else {
                    instagramUrl = data.button_secondary ? String(data.button_secondary).trim() : '';
                }
                if (!phoneRaw && data.subtitle) {
                    // Backward compatibility for older saved phone values.
                    var maybePhone = String(data.subtitle).trim();
                    if (/^\+?[\d\s\-()]{7,}$/.test(maybePhone)) phoneRaw = maybePhone;
                }
                var phoneDigits = phoneRaw ? phoneRaw.replace(/[^\d]/g, '') : '';

                if (siteTitle) {
                    if (document.title.indexOf(' - ') >= 0) {
                        var parts = document.title.split(' - ');
                        document.title = siteTitle + ' - ' + parts.slice(1).join(' - ');
                    } else {
                        document.title = siteTitle;
                    }
                }

                if (contactEmail) {
                    document.querySelectorAll('a[href^="mailto:"]').forEach(function(a) {
                        a.href = 'mailto:' + contactEmail;
                        a.textContent = contactEmail;
                    });
                }

                if (phoneRaw) {
                    document.querySelectorAll('a[href^="tel:"]').forEach(function(a) {
                        a.href = 'tel:' + phoneRaw;
                        a.textContent = phoneRaw;
                    });
                }

                if (phoneDigits) {
                    document.querySelectorAll('a[href*="wa.me/"]').forEach(function(a) {
                        a.href = 'https://wa.me/' + phoneDigits;
                    });
                }

                if (instagramUrl) {
                    document.querySelectorAll('a[href*="instagram.com"]').forEach(function(a) {
                        a.href = instagramUrl;
                    });
                }
            })
            .catch(function() {});
    })();

})();

