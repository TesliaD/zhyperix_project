import Swiper from 'swiper';
import { Navigation, Pagination, Autoplay } from 'swiper/modules';

import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

// Esperar a que el DOM esté listo
document.addEventListener('DOMContentLoaded', () => {

    // =========================
    // MENU HAMBURGUESA
    // =========================
    const toggle = document.getElementById('menuToggle');
    const nav = document.getElementById('navMenu');

    if (toggle && nav) {
        toggle.addEventListener('click', () => {
            nav.classList.toggle('activo');
        });
    }

    // =========================
    // REVEAL ANIMATION
    // =========================
    const reveals = document.querySelectorAll(
        '.servicio-card, .cta, .testimoniales-pro, .quehacemos-card'
    );

    if (reveals.length > 0) {

        const observer = new IntersectionObserver(entries => {

            entries.forEach(entry => {

                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }

            });

        }, { threshold: 0.15 });

        reveals.forEach(el => {
            el.classList.add('reveal');
            observer.observe(el);
        });

    }

    // =========================
    // SWIPER SERVICIOS
    // =========================
    const swiperEl = document.querySelector('.serviciosSwiper');

    if (swiperEl) {

        new Swiper('.serviciosSwiper', {

            modules: [Navigation, Pagination, Autoplay],

            slidesPerView: 1,
            spaceBetween: 25,
            loop: true,

            autoplay: {
                delay: 3500,
                disableOnInteraction: false
            },

            pagination: {
                el: '.swiper-pagination',
                clickable: true
            },

            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            },

            breakpoints: {

                640: {
                    slidesPerView: 1
                },

                768: {
                    slidesPerView: 2
                },

                1024: {
                    slidesPerView: 3
                }

            }

        });

    }

    // =========================
    // CARRUSEL TESTIMONIALES
    // =========================
    const testimonialCards = document.querySelectorAll('.testimonial-card');

    if (testimonialCards.length > 0) {

        let index = 0;

        setInterval(() => {

            testimonialCards[index].classList.remove('active');

            index = (index + 1) % testimonialCards.length;

            testimonialCards[index].classList.add('active');

        }, 4000);

    }

});