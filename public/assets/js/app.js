// header
document.addEventListener("DOMContentLoaded", () => {
    const navbar = document.querySelector(".main-navbar");

    window.addEventListener("scroll", () => {
        navbar.classList.toggle("scrolled", window.scrollY > 50);
    });
});

// end header

// index

const observer = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("show");
            }
        });
    },
    { threshold: 0.15 }
);

document.querySelectorAll(".service-card, .value-box").forEach((el) => {
    observer.observe(el);
});
