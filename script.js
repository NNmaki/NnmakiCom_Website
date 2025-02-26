function toggleMenu() {
    const sidebar = document.getElementById("sidebar");
    const burgerMenu = document.querySelector(".burger-menu");

    const isOpen = sidebar.classList.contains("open");

    // Vaihdetaan luokka
    sidebar.classList.toggle("open");

    // Päivitetään aria-expanded attribuutti
    burgerMenu.setAttribute("aria-expanded", !isOpen);
}


// function toggleMenu() {
//     const sidebar = document.getElementById("sidebar");
//     if (sidebar.classList.contains("open")) {
//         sidebar.classList.remove("open");
//     } else {
//         sidebar.classList.add("open");
//     }
// }


// Image Carousel
document.addEventListener("DOMContentLoaded", function () {
    // Hae carousel-elementit
    const carousels = document.querySelectorAll(".carousel");

    carousels.forEach((carousel) => {
        const images = carousel.querySelectorAll(".carousel-images img");
        const prevBtn = carousel.querySelector(".prevBtn");
        const nextBtn = carousel.querySelector(".nextBtn");
        let currentIndex = 0;

        function showImage(index) {
            images.forEach((img, i) => {
                img.classList.toggle("active", i === index);
            });
        }

        prevBtn.addEventListener("click", function () {
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            showImage(currentIndex);
        });

        nextBtn.addEventListener("click", function () {
            currentIndex = (currentIndex + 1) % images.length;
            showImage(currentIndex);
        });

        showImage(currentIndex);
    });
});


// //Backup vanhacarouselli
// document.addEventListener("DOMContentLoaded", function () {
//     const images = document.querySelectorAll(".carousel-images img");
//     let currentIndex = 0;

//     document.getElementById("nextBtn").addEventListener("click", function () {
//         images[currentIndex].classList.remove("active");
//         currentIndex = (currentIndex + 1) % images.length;
//         images[currentIndex].classList.add("active");
//     });

//     document.getElementById("prevBtn").addEventListener("click", function () {
//         images[currentIndex].classList.remove("active");
//         currentIndex = (currentIndex - 1 + images.length) % images.length;
//         images[currentIndex].classList.add("active");
//     });
// });
