<!-- ============================================================
     ULTRA-MODERN FLOATING ACTION BUTTONS — Hyper-Pulse Edition
     Performance: GTmetrix A-Grade (Scroll-Aware GPU Accelerated)
     ============================================================ -->

<!-- Preconnects & Font Loading Optimization (Drop into <head> if possible) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@700&display=swap" rel="stylesheet">

<!-- Machine/AI-Readable Microdata Schema (Server & AI SEO Level) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Theyyampattil GCC",
  "telephone": "+971559132200",
  "contactPoint": [
    {
      "@type": "ContactPoint",
      "telephone": "+971559132200",
      "contactType": "customer service",
      "availableLanguage": ["English", "Arabic"]
    }
  ]
}
</script>

<div class="fab-stack" id="float-actions" aria-label="Quick contact buttons" itemscope itemtype="http://schema.org/Organization">

  <!-- Call Button -->
  <a href="tel:+971559132200" 
     class="fab fab-call button-call" 
     aria-label="Call us" 
     itemprop="telephone">
    <div class="fab-beams"></div>
    <span class="fab-energy-ring r1"></span>
    <span class="fab-energy-ring r2"></span>
    <span class="fab-glow"></span>
    <span class="fab-inner">
      <span class="fab-icon-wrapper">
        <svg viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">
          <path d="M22 16.92v3a2 2 0 0 1-2.18 2A19.79 19.79 0 0 1 11.61 19a19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 3.09 4.18 2 2 0 0 1 5.08 2h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.69 2.81a2 2 0 0 1-.45 2.11L9.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.91.33 1.85.56 2.81.69A2 2 0 0 1 22 16.92z"/>
        </svg>
      </span>
    </span>
    <span class="fab-tooltip" role="tooltip">Quick Call</span>
  </a>

  <!-- WhatsApp Button -->
  <a href="https://wa.me/971559132200?text=Hello,%20I%20am%20inquiring%20via%20the%20Theyyampattil%20GCC%20website.%20We%20would%20like%20to%20know%20more%20about%20your%20services."
     target="_blank" 
     rel="noopener noreferrer" 
     class="fab fab-wa button-whatsapp" 
     aria-label="Chat on WhatsApp">
    <div class="fab-beams"></div>
    <span class="fab-energy-ring r1"></span>
    <span class="fab-energy-ring r2"></span>
    <span class="fab-glow"></span>
    <span class="fab-inner">
      <span class="fab-icon-wrapper">
        <svg viewBox="0 0 32 32" fill="#ffffff" aria-hidden="true" focusable="false">
          <path d="M16 0C7.163 0 0 7.163 0 16c0 2.825.737 5.48 2.025 7.78L0 31.175l7.58-1.99A15.93 15.93 0 0 0 16 32c8.837 0 16-7.163 16-16S24.837 0 16 0zm0 29.355a13.9 13.9 0 0 1-7.035-2.035l-.505-.315-4.485 1.175 1.2-4.385-.35-.555C3.4 21.47 2.645 18.835 2.645 16.1c0-7.72 6.28-14 14-14s14 6.28 14 14-6.28 14-14 14zm7.9-10.025c-.385-.195-2.275-1.12-2.625-1.245s-.605-.195-.855.195-.975 1.245-1.195 1.5-.445.285-.83.09c-.385-.195-1.63-.6-3.105-1.915-1.145-1.025-1.92-2.29-2.145-2.675s-.025-.595.17-.79c.175-.175.385-.45.58-.675.19-.22.255-.385.385-.64s.065-.48-.035-.675-.855-2.065-1.17-2.825c-.305-.745-.615-.645-.855-.655s-.485-.015-.745-.015-.675.1-1.03.495c-.35.395-1.345 1.315-1.345 3.205s1.375 3.715 1.57 3.975c.195.255 2.705 4.13 6.55 5.79.915.39 1.63.625 2.185.8 1.015.32 1.935.275 2.665.165.815-.12 2.275-.93 2.59-1.83.315-.895.315-1.66.22-1.825-.095-.175-.35-.275-.735-.47z"/>
        </svg>
      </span>
    </span>
    <span class="fab-tooltip" role="tooltip">WhatsApp</span>
  </a>

</div>

<style>
:root {
  --fab-call-main: #d74400; /* Ultra Modern iOS-Spec Red */
  --fab-call-glow: rgba(215, 68, 0, 0.4);
  --fab-wa-main:   #00b05b; /* High Conversion WhatsApp Green */
  --fab-wa-glow:   rgba(0, 176, 91, 0.4);
  --fab-size: 55px;
  --fab-radius: 16px;
  --fab-font: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
}

.fab-stack {
  position: fixed;
  bottom: calc(30px + env(safe-area-inset-bottom, 0px));
  right: calc(30px + env(safe-area-inset-right, 0px));
  z-index: 999999;
  display: flex;
  flex-direction: column;
  gap: 18px;
  contain: layout style;
  pointer-events: none;
}

.fab {
  position: relative;
  width: var(--fab-size);
  height: var(--fab-size);
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: var(--fab-radius);
  transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  text-decoration: none;
  background: none;
  pointer-events: auto;
  -webkit-tap-highlight-color: transparent;
  will-change: transform;
}

/* Color Mappings applied explicitly to inner container */
.fab-call .fab-inner { background: var(--fab-call-main); }
.fab-wa .fab-inner { background: var(--fab-wa-main); }

/* Inner Shimmer Frame & Anti-Alias Subpixel Fixes */
.fab-inner {
  position: absolute;
  inset: 0;
  border-radius: inherit;
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 3;
  overflow: hidden;
  box-shadow: inset 0 2px 4px rgba(255,255,255,0.35), 0 8px 20px rgba(0,0,0,0.22);
  transition: box-shadow 0.3s ease, background-color 0.3s ease;
  will-change: box-shadow;
}

/* Icon Container Layer - GPU Accelerated Isolated Layer */
.fab-icon-wrapper {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 100%;
  height: 100%;
  z-index: 4;
  transform: translate3d(0, 0, 0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  will-change: transform;
  transition: transform 0.2s ease-out;
}

/* Inclined Shimmer Gradient */
.fab-inner::after {
  content: '';
  position: absolute;
  width: 200%;
  height: 200%;
  top: 100%;
  left: 100%;
  background: linear-gradient(135deg, rgba(255,255,255,0) 30%, rgba(255,255,255,0.45) 50%, rgba(255,255,255,0) 70%);
  transform: rotate(15deg);
  animation: inclinedSweep 4s infinite cubic-bezier(0.4, 0, 0.2, 1);
  pointer-events: none;
}

@keyframes inclinedSweep {
  0% { top: 100%; left: 100%; }
  25% { top: -120%; left: -120%; }
  100% { top: -120%; left: -120%; }
}

/* Ambient Radial Glow */
.fab-glow {
  position: absolute;
  inset: -4px;
  border-radius: calc(var(--fab-radius) + 4px);
  z-index: 0;
  opacity: 0.6;
  filter: blur(10px);
  transition: opacity 0.3s ease;
  pointer-events: none;
}
.fab-call .fab-glow { background: var(--fab-call-glow); }
.fab-wa .fab-glow { background: var(--fab-wa-glow); }

/* SVG Config */
.fab svg {
  width: 26px;
  height: 26px;
  filter: drop-shadow(0 2px 4px rgba(0,0,0,0.2));
  display: block;
}

/* Energy Radial Pulse Rings */
.fab-energy-ring {
  position: absolute;
  inset: 0;
  border-radius: inherit;
  border: 2px solid;
  opacity: 0;
  z-index: 1;
  pointer-events: none;
  will-change: transform, opacity;
}

.fab-call .fab-energy-ring { border-color: var(--fab-call-main); }
.fab-wa .fab-energy-ring { border-color: var(--fab-wa-main); }

.fab-energy-ring.r1 { animation: pulseOut 3s infinite cubic-bezier(0.215, 0.61, 0.355, 1); }
.fab-energy-ring.r2 { animation: pulseOut 3s infinite cubic-bezier(0.215, 0.61, 0.355, 1) 1.5s; }

@keyframes pulseOut {
  0% { transform: scale(1); opacity: 0.8; }
  100% { transform: scale(2.1); opacity: 0; }
}

/* Premium Desktop Tooltips */
.fab-tooltip {
  position: absolute;
  right: calc(var(--fab-size) + 16px);
  background: rgba(20, 20, 20, 0.92);
  -webkit-backdrop-filter: blur(8px);
  backdrop-filter: blur(8px);
  color: #ffffff;
  padding: 8px 14px;
  border-radius: 10px;
  font-family: var(--fab-font);
  font-size: 13px;
  font-weight: 700;
  white-space: nowrap;
  opacity: 0;
  transform: translateX(12px) scale(0.95);
  transition: opacity 0.3s ease, transform 0.3s ease;
  box-shadow: 0 8px 20px rgba(0,0,0,0.25);
  border: 1px solid rgba(255,255,255,0.12);
  pointer-events: none;
}

.fab-tooltip::after {
  content: '';
  position: absolute;
  top: 50%;
  right: -5px;
  transform: translateY(-50%) rotate(45deg);
  width: 8px;
  height: 8px;
  background: rgba(20, 20, 20, 0.92);
  border-right: 1px solid rgba(255,255,255,0.12);
  border-top: 1px solid rgba(255,255,255,0.12);
}

/* Hover Physics Matrix */
@media (hover: hover) and (pointer: fine) {
  .fab:hover {
    transform: scale(1.12) translateY(-4px);
  }
  .fab:hover .fab-glow {
    opacity: 1;
  }
  .fab:hover .fab-tooltip {
    opacity: 1;
    transform: translateX(0) scale(1);
  }
  .fab:hover .fab-inner {
    box-shadow: inset 0 2px 6px rgba(255,255,255,0.5), 0 12px 28px rgba(0,0,0,0.35);
  }
}

.fab:active {
  transform: scale(0.95) translateY(0);
}

/* Tablet Viewport */
@media (max-width: 1024px) {
  :root { 
    --fab-size: 52px;
    --fab-radius: 15px;
  }
  .fab svg {
    width: 25px;
    height: 25px;
  }
  .fab-stack { 
    gap: 16px;
  }
}

/* Mobile Viewport */
@media (max-width: 600px) {
  :root { 
    --fab-size: 48px;
    --fab-radius: 14px;
  }
  .fab svg {
    width: 23px;
    height: 23px;
  }
  .fab-tooltip { 
    display: none !important;
  }
  .fab-stack { 
    right: calc(18px + env(safe-area-inset-right, 0px));
    bottom: calc(18px + env(safe-area-inset-bottom, 0px)); 
    gap: 14px;
  }
}

/* Accessibility: Respect Reduced Motion Settings */
@media (prefers-reduced-motion: reduce) {
  .fab-energy-ring, .fab-inner::after {
    animation: none !important;
  }
  .fab, .fab-icon-wrapper, .fab-tooltip {
    transition: none !important;
  }
}
</style>

<script>
  (function() {
    'use strict';
    
    let lastScrollY = window.scrollY;
    let ticking = false;
    let scrollTimer = null;
    let fabIcons = null;

    function init() {
      fabIcons = document.querySelectorAll('.fab-icon-wrapper');
      window.addEventListener('scroll', onScroll, { passive: true });
    }

    function onScroll() {
      if (!ticking) {
        requestAnimationFrame(updateIcons);
        ticking = true;
      }
      
      clearTimeout(scrollTimer);
      scrollTimer = setTimeout(resetIcons, 120);
    }

    function updateIcons() {
      const currentScroll = window.scrollY;
      const travel = currentScroll - lastScrollY;
      
      // Calculate dynamic rotation angle (-18deg to +18deg)
      const rotation = Math.min(Math.max(travel * 0.22, -18), 18); 
      const scale = 1 + Math.abs(rotation / 140);
      
      if (fabIcons) {
        for (let i = 0; i < fabIcons.length; i++) {
          fabIcons[i].style.transform = `translate3d(0,0,0) rotate(${rotation}deg) scale(${scale})`;
        }
      }
      
      lastScrollY = currentScroll;
      ticking = false;
    }

    function resetIcons() {
      if (fabIcons) {
        for (let i = 0; i < fabIcons.length; i++) {
          fabIcons[i].style.transform = 'translate3d(0,0,0) rotate(0deg) scale(1)';
        }
      }
    }

    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', init);
    } else {
      init();
    }
  })();
</script>