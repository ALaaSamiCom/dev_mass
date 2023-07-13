  AOS.init();



      /******* scroll hedar in index and  About company*************/
        window.onscroll = function () { scrollFunction() };
        window.onload = function () { scrollFunction() };
        function scrollFunction() {
            if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                document.querySelector("header #socrll-sec").classList.add("socrll-header");

            } else {
                document.querySelector("header #socrll-sec").classList.remove("socrll-header");

            }
        }



                var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1.1,
            spaceBetween: 10,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                992: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
            },
        });

        var swiper = new Swiper(".swiper-saying", {
            slidesPerView: 1,
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-next",
                prevEl: ".swiper-prev",
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                992: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
            },
        });
