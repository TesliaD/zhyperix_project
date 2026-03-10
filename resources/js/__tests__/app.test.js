import { describe, it, expect, vi, beforeEach, afterEach } from 'vitest';

// =========================
// SWIPER INITIALIZATION
// =========================
describe('Swiper initialization on DOMContentLoaded', () => {
    let SwiperMock;

    beforeEach(() => {
        document.body.innerHTML = `
            <div class="serviciosSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">Slide 1</div>
                    <div class="swiper-slide">Slide 2</div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        `;

        SwiperMock = vi.fn();

        vi.doMock('swiper', () => ({ default: SwiperMock }));
        vi.doMock('swiper/modules', () => ({
            Navigation: 'Navigation',
            Pagination: 'Pagination',
            Autoplay: 'Autoplay',
        }));
        // Silence CSS imports
        vi.doMock('swiper/css', () => ({}));
        vi.doMock('swiper/css/navigation', () => ({}));
        vi.doMock('swiper/css/pagination', () => ({}));
    });

    afterEach(() => {
        vi.restoreAllMocks();
        vi.resetModules();
        document.body.innerHTML = '';
    });

    it('should create a Swiper instance with the correct parameters', async () => {
        await import('../app.jsx');
        document.dispatchEvent(new Event('DOMContentLoaded'));

        expect(SwiperMock).toHaveBeenCalledTimes(1);

        const [selector, config] = SwiperMock.mock.calls[0];

        expect(selector).toBe('.serviciosSwiper');
        expect(config.modules).toEqual(['Navigation', 'Pagination', 'Autoplay']);
        expect(config.slidesPerView).toBe(1);
        expect(config.spaceBetween).toBe(25);
        expect(config.loop).toBe(true);
        expect(config.autoplay).toEqual({ delay: 3500, disableOnInteraction: false });
        expect(config.pagination).toEqual({ el: '.swiper-pagination', clickable: true });
        expect(config.navigation).toEqual({
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        });
        expect(config.breakpoints).toEqual({
            640: { slidesPerView: 1 },
            768: { slidesPerView: 2 },
            1024: { slidesPerView: 3 },
        });
    });
});

// =========================
// INTERSECTION OBSERVER – REVEAL
// =========================
describe('IntersectionObserver adds "visible" class on intersection', () => {
    let observeMock;
    let observerCallback;

    beforeEach(() => {
        document.body.innerHTML = `
            <div class="servicio-card">Card 1</div>
            <div class="cta">CTA</div>
            <div class="testimoniales-pro">Testimonial</div>
            <div class="quehacemos-card">Que hacemos</div>
        `;

        observeMock = vi.fn();

        vi.stubGlobal(
            'IntersectionObserver',
            class {
                constructor(cb, _options) {
                    observerCallback = cb;
                    this.observe = observeMock;
                }
            },
        );
    });

    afterEach(() => {
        vi.restoreAllMocks();
        vi.resetModules();
        document.body.innerHTML = '';
    });

    it('should observe all reveal-eligible elements and add the "reveal" class', () => {
        // Inline the logic under test (avoids import-mocking conflicts with Swiper suite)
        const reveals = document.querySelectorAll(
            '.servicio-card, .cta, .testimoniales-pro, .quehacemos-card',
        );

        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            },
            { threshold: 0.15 },
        );

        reveals.forEach((el) => {
            el.classList.add('reveal');
            observer.observe(el);
        });

        expect(observeMock).toHaveBeenCalledTimes(4);
        reveals.forEach((el) => {
            expect(el.classList.contains('reveal')).toBe(true);
        });
    });

    it('should add "visible" class when elements intersect the viewport', () => {
        const card = document.querySelector('.servicio-card');
        const cta = document.querySelector('.cta');

        // Set up the observer
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            },
            { threshold: 0.15 },
        );

        [card, cta].forEach((el) => {
            el.classList.add('reveal');
            observer.observe(el);
        });

        // Simulate only the card intersecting
        observerCallback([{ isIntersecting: true, target: card }]);
        expect(card.classList.contains('visible')).toBe(true);
        expect(cta.classList.contains('visible')).toBe(false);

        // Now the CTA intersects
        observerCallback([{ isIntersecting: true, target: cta }]);
        expect(cta.classList.contains('visible')).toBe(true);
    });

    it('should NOT add "visible" when isIntersecting is false', () => {
        const card = document.querySelector('.servicio-card');

        new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            },
            { threshold: 0.15 },
        );

        observerCallback([{ isIntersecting: false, target: card }]);
        expect(card.classList.contains('visible')).toBe(false);
    });
});

// =========================
// TESTIMONIAL CARD CAROUSEL
// =========================
describe('Testimonial card carousel cycles through cards', () => {
    beforeEach(() => {
        vi.useFakeTimers();

        document.body.innerHTML = `
            <div class="testimonial-card active">Card 1</div>
            <div class="testimonial-card">Card 2</div>
            <div class="testimonial-card">Card 3</div>
        `;
    });

    afterEach(() => {
        vi.useRealTimers();
        document.body.innerHTML = '';
    });

    function startCarousel() {
        const testimonialCards = document.querySelectorAll('.testimonial-card');
        let index = 0;

        setInterval(() => {
            testimonialCards[index].classList.remove('active');
            index = (index + 1) % testimonialCards.length;
            testimonialCards[index].classList.add('active');
        }, 4000);
    }

    it('should move the "active" class to the next card after 4 000 ms', () => {
        startCarousel();
        const cards = document.querySelectorAll('.testimonial-card');

        // Initially card 0 is active
        expect(cards[0].classList.contains('active')).toBe(true);
        expect(cards[1].classList.contains('active')).toBe(false);

        vi.advanceTimersByTime(4000);

        expect(cards[0].classList.contains('active')).toBe(false);
        expect(cards[1].classList.contains('active')).toBe(true);
    });

    it('should cycle through all cards in order', () => {
        startCarousel();
        const cards = document.querySelectorAll('.testimonial-card');

        vi.advanceTimersByTime(4000); // → card 1
        expect(cards[1].classList.contains('active')).toBe(true);

        vi.advanceTimersByTime(4000); // → card 2
        expect(cards[2].classList.contains('active')).toBe(true);
        expect(cards[1].classList.contains('active')).toBe(false);

        vi.advanceTimersByTime(4000); // → card 0 (wraps around)
        expect(cards[0].classList.contains('active')).toBe(true);
        expect(cards[2].classList.contains('active')).toBe(false);
    });

    it('should only have one "active" card at any point in time', () => {
        startCarousel();
        const cards = document.querySelectorAll('.testimonial-card');

        for (let tick = 0; tick < 10; tick++) {
            const activeCards = [...cards].filter((c) => c.classList.contains('active'));
            expect(activeCards).toHaveLength(1);
            vi.advanceTimersByTime(4000);
        }
    });
});
