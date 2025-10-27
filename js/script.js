"use strict";

function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }
function ownKeys(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); enumerableOnly && (symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; })), keys.push.apply(keys, symbols); } return keys; }
function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = null != arguments[i] ? arguments[i] : {}; i % 2 ? ownKeys(Object(source), !0).forEach(function (key) { _defineProperty(target, key, source[key]); }) : Object.getOwnPropertyDescriptors ? Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)) : ownKeys(Object(source)).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } return target; }
function _defineProperty(obj, key, value) { key = _toPropertyKey(key); if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }
function _toPropertyKey(arg) { var key = _toPrimitive(arg, "string"); return _typeof(key) === "symbol" ? key : String(key); }
function _toPrimitive(input, hint) { if (_typeof(input) !== "object" || input === null) return input; var prim = input[Symbol.toPrimitive]; if (prim !== undefined) { var res = prim.call(input, hint || "default"); if (_typeof(res) !== "object") return res; throw new TypeError("@@toPrimitive must return a primitive value."); } return (hint === "string" ? String : Number)(input); }
jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる
  /* ===== js ファイルの先頭に貼る ===== */
  window.lockBody = function () {
    var y = window.scrollY || document.documentElement.scrollTop || 0;
    document.documentElement.classList.add('u-lock');
    document.body.classList.add('u-lock');
    document.body.dataset.scrollY = y;
    Object.assign(document.body.style, {
      position: 'fixed',
      top: "-".concat(y, "px"),
      left: 0,
      right: 0,
      width: '100%'
    });
  };
  window.unlockBody = function () {
    var y = +(document.body.dataset.scrollY || 0);
    document.documentElement.classList.remove('u-lock');
    document.body.classList.remove('u-lock');
    Object.assign(document.body.style, {
      position: '',
      top: '',
      left: '',
      right: '',
      width: ''
    });
    window.scrollTo(0, y);
  };
  $(function () {
    var $btn = $('.js-hamburger');
    var $drawer = $('.js-drawer');
    $btn.off('.drawer');
    $drawer.off('.drawer');
    $(window).off('.drawer');
    $btn.on('click.drawer', function (e) {
      e.preventDefault();
      e.stopImmediatePropagation();
      var open = !$btn.hasClass('is-open');
      $btn.toggleClass('is-open', open);
      if (open) {
        $drawer.stop(true, true).fadeIn(200, function () {
          return lockBody();
        });
      } else {
        $drawer.stop(true, true).fadeOut(200, function () {
          return unlockBody();
        });
      }
    });
    $drawer.on('click.drawer', 'a[href]', function () {
      $drawer.stop(true, true).fadeOut(200, function () {
        return unlockBody();
      });
      $btn.removeClass('is-open');
    });
    $(window).on('resize.drawer', function () {
      if (window.matchMedia('(min-width: 768px)').matches && $btn.hasClass('is-open')) {
        $drawer.stop(true, true).hide();
        unlockBody();
        $btn.removeClass('is-open');
      }
    });
  });
  function edgeSafeOptions(loopedSlidesHint) {
    return _objectSpread(_objectSpread({
      slidesPerView: 'auto',
      spaceBetween: 20,
      loop: true,
      loopedSlidesLimit: false
    }, loopedSlidesHint ? {
      loopedSlides: loopedSlidesHint
    } : {}), {}, {
      autoplay: {
        delay: 1,
        disableOnInteraction: false,
        pauseOnMouseEnter: false,
        stopOnLastSlide: false
      },
      speed: 8000,
      resistance: false,
      resistanceRatio: 0,
      touchReleaseOnEdges: true,
      edgeSwipeDetection: true,
      edgeSwipeThreshold: 30,
      threshold: 4,
      allowTouchMove: true,
      freeMode: false,
      breakpoints: {
        0: {
          spaceBetween: 12
        },
        640: {
          spaceBetween: 16
        },
        1024: {
          spaceBetween: 20
        }
      },
      on: {
        init: function init(s) {
          s.update();
          s.autoplay.start();
        },
        imagesReady: function imagesReady(s) {
          s.update();
          s.autoplay.start();
        },
        resize: function resize(s) {
          s.update();
          s.autoplay.start();
        },
        reachEnd: function reachEnd(s) {
          s.slideToLoop(0, 0, false);
          s.autoplay.start();
        },
        reachBeginning: function reachBeginning(s) {
          s.slideToLoop(s.slides.length - 1, 0, false);
          s.autoplay.start();
        }
      }
    });
  }
  var fv_swiper = null;
  var services_swiper = null;

  var fvEl = document.querySelector('.js-fv-slider');
  if (fvEl) {
    fv_swiper = new Swiper(fvEl, edgeSafeOptions());
  }

  var servicesEl = document.querySelector('.js-services-slider');
  if (servicesEl) {
    services_swiper = new Swiper(servicesEl, edgeSafeOptions(5));
  }

  document.addEventListener('visibilitychange', function () {
    if (document.visibilityState !== 'visible') return;
    if (fv_swiper) {
      fv_swiper.update();
      if (fv_swiper.autoplay) fv_swiper.autoplay.start();
    }
    if (services_swiper) {
      services_swiper.update();
      if (services_swiper.autoplay) services_swiper.autoplay.start();
    }
  });

  // フェードインのアニメーション
  var $targets = $('.js-fadeIn');
  var hasInview = !!($.event && $.event.special && $.event.special.inview);
  if (hasInview) {
    $targets.on('inview', function (e, inView) {
      if (inView) {
        $(this).addClass('is-show').off('inview');
      }
    });
    setTimeout(function () {
      $(window).trigger('scroll');
    }, 0);
  }
  if ('IntersectionObserver' in window) {
    var io = new IntersectionObserver(function (entries, obs) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          $(entry.target).addClass('is-show');
          obs.unobserve(entry.target);
        }
      });
    }, {
      root: null,
      threshold: 0.1
    });
    $targets.each(function () {
      io.observe(this);
    });
  }

  //コンタクトフォーム関連
  (function () {
    function bind(form) {
      if (!form || form.__wpcf7LockBound) return;
      form.__wpcf7LockBound = true;

      const submit = form.querySelector('button[type="submit"], input[type="submit"]');
      if (!submit) return;

      const agree = form.querySelector('input[type="checkbox"][name="checkbox[]"]');

      const isReady = () => {
        let ok = (typeof form.checkValidity === 'function') ? form.checkValidity() : true;
        if (agree) ok = ok && !!agree.checked;
        return ok;
      };

      const enforce = () => { submit.disabled = !isReady(); };

      submit.disabled = true;
      enforce();

      const later = () => setTimeout(enforce, 0);
      form.addEventListener('input', later, true);
      form.addEventListener('change', later, true);
      form.addEventListener('keyup', later, true);
      agree && agree.addEventListener('change', later, false);

      form.addEventListener('submit', (e) => {
        enforce();
        if (submit.disabled) e.preventDefault();
      }, true);
    }

    document.querySelectorAll('.wpcf7 form').forEach(bind);
    document.addEventListener('wpcf7load', (e) => {
      const f = e.target && e.target.matches && e.target.matches('form') ? e.target : null;
      if (f) bind(f);
    });
  })();

  document.addEventListener('wpcf7mailsent', function () {
    var url = (typeof window.__THANKS_URL__ === 'string' && window.__THANKS_URL__)
      ? window.__THANKS_URL__
      : '/thanks/';
    window.location.href = url;
  }, false);
});
