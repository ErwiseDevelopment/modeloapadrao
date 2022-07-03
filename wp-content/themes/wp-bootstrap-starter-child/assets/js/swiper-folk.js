/* services */
const swiperServices = new Swiper('.swiper-container-services', {
    pagination: {
        el: '.swiper-pagination-services',
    },
});

/* testemonials */
const swiperTestemonials = new Swiper('.swiper-container-testemonials', {
    navigation: {
        nextEl: '.swiper-button-next-testemonials',
        prevEl: '.swiper-button-prev-testemonials',
    },

    pagination: {
        el: '.swiper-pagination-testemonials',
    },
});