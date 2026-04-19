<footer id="footer" class="footer light-background">

    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-3 col-md-6 footer-info">
                <a href="index" class="logo d-flex align-items-center mb-4">
                    <span class="sitename"><img src="assets2/images/logo.png" alt="logo" class="footer-logo"></span>
                </a>
                <p>Xpansion Technologies is a Sydney based organization providing IT and IT enabled services to wide
                    range of
                    clients from different industry verticals such as Manufacturing, Telecom, Real Estate, Core
                    Engineering,
                    Healthcare, and Education among others. </p>

                <div class="social-links d-flex mt-4">
                    <a href="https://www.facebook.com/xpansiontech/" aria-label="Facebook" target="_blank"><i
                            class="bi bi-facebook"></i></a>
                    <a href="https://x.com/XpansionTech" aria-label="Twitter" target="_blank"><i
                            class="bi bi-twitter-x"></i></a>
                    <a href="https://www.linkedin.com/company/xpansiontechnologies" aria-label="linkedin"
                        target="_blank"><i class="bi bi-linkedin"></i></a>
                    <a href="https://www.instagram.com/xpansiontechnologies/" aria-label="Instagram" target="_blank"><i
                            class="bi bi-instagram"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Services</h4>
                <ul>
                    <li><a href="digital-engineering-applications">Digital Engineering & Applications</a>
                    </li>

                    <li><a href="managed-it-security">Managed IT & Security</a>
                    </li>
                    <li><a href="ai-intelligent-automation">AI & Intelligent Automation</a></li>
                    <li><a href="data-business">Data & Business Intelligence</a></li>
                    <li><a href="cloud-services">Cloud Services</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Products</h4>
                <ul>
                    <li><a href="xims-invoice-management-system">XIMS- Invoice Management System</a></li>
                    <li><a href="xt-vms-visitor-management-system">XT-VMS- Visitor Management System </a></li>
                    <li><a href="foodways">Foodways </a></li>
                    <li><a href="salon-management-system">Salon Management System </a></li>
                    <li><a href="xevent">xEvent </a></li>
                    <li><a href="human-resource-management-system">XHRMS- Human Resource Management System </a>
                    </li>
                    <li><a href="sports-academy-management-system"> Sports Academy Management System </a></li>
                </ul>
            </div>



            <div class="col-lg-3 col-md-6">
                <div class="footer-newsletter">
                    <h4>Stay Updated</h4>
                    <p>Subscribe to our newsletter for exclusive offers, new arrivals, and fashion tips.</p>
                    <form id="newsletterForm" action="insert_newsletter.php" method="POST">

                        <div class="position-relative">
                            <input type="email" name="email" id="newsletterEmail" placeholder="Enter your email address"
                                required>

                            <button type="submit" class="btn-subscribe">
                                <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>

                        <div class="loading" style="display:none;">Subscribing...</div>
                        <div class="error-message fw-bold" style="color:red;margin-top:10px; font-size:13px; "></div>
                        <div class="sent-message fw-bold" style="color:green;margin-top:10px; font-size:13px;"></div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container footer-bottom">
        <div class="row gy-3">
            <div class="col-md-6 order-2 order-md-1">
                <div class="copyright">
                    <p>© <span>Copyright 2026</span> <strong class="sitename">Xpansion Technologies</strong>. All Rights
                        Reserved.</p>
                </div>

            </div>
            <div class="col-md-6 order-1 order-md-2">
                <div class="legal-links">
                    <a href="#">Terms of Service</a>
                    <a href="#">Privacy Policy</a>
                    <a href="#">Cookies</a>
                </div>
            </div>
        </div>
    </div>

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short" style="position: relative; top: auto; left: auto;"></i></a>

<!-- Preloader -->


<!-- Vendor JS Files -->
<script src="assets2\js\bootstrap.bundle.min.js"></script>
<script src="assets2\js\aos.js"></script>
<script src="assets2\js\glightbox.min.js"></script>
<script src="assets2\js\imagesloaded.pkgd.min.js"></script>
<script src="assets2\js\isotope.pkgd.min.js"></script>
<!-- <script src="assets2\js\purecounter_vanilla.js"></script> -->
<script src="assets2\js\swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- Main JS File -->
<script src="assets/js/main.js"></script>
<script>
const text = " SECURE, SCALABLE, SMART – IT SOLUTIONS FOR THE FUTURE.";
const speed = 100; // milliseconds per character
let i = 0;

function typeWriter() {
    if (i < text.length) {
        document.getElementById("text").innerHTML += text.charAt(i);
        i++;
        setTimeout(typeWriter, speed);
    } else {
        // Restart typing after a small delay
        setTimeout(() => {
            document.getElementById("text").innerHTML = "";
            i = 0;
            typeWriter();
        }, 1500);
    }
}

window.onload = typeWriter;
</script>

<script>
document.addEventListener("DOMContentLoaded", function() {

    const swiper = new Swiper(".testimonials-carousel", {
        loop: true,
        speed: 700,

        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },

        slidesPerView: 1,
        spaceBetween: 24,

        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },

        breakpoints: {
            768: {
                slidesPerView: 2,
            },
        },

        grabCursor: true, // mouse drag enable
        simulateTouch: true, // desktop mouse swipe
    });

});
</script>
<script>
AOS.init();
</script>


<!-- Modernizer JS -->
<script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>


<script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>

<!-- Bootstrap JS -->
<script src="assets/js/vendor/bootstrap.min.js"></script>


<script src="assets/js/plugins/plugins.min.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {

    // Desktop menu select karo
    const desktopMenu = document.querySelector("#main-desktop-menu");

    // Mobile nav container select karo
    const mobileNav = document.querySelector(".offcanvas-navigation");

    if (desktopMenu && mobileNav) {

        // Desktop UL clone karo
        const clonedMenu = desktopMenu.cloneNode(true);

        // Mobile nav me add karo
        mobileNav.appendChild(clonedMenu);
    }

});
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {

    new Swiper(".portfolio-slider", {
        loop: true,
        speed: 700,

        autoplay: {
            delay: 4500,
            disableOnInteraction: false,
        },

        slidesPerView: 1,
        spaceBetween: 20,

        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        grabCursor: true,
        simulateTouch: true,

    });

});
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {

    const form = document.getElementById("newsletterForm");

    form.addEventListener("submit", function(e) {
        e.preventDefault();

        const loading = form.querySelector(".loading");
        const errorBox = form.querySelector(".error-message");
        const successBox = form.querySelector(".sent-message");

        // reset messages
        errorBox.innerHTML = "";
        successBox.innerHTML = "";

        loading.style.display = "block";

        fetch(form.action, {
                method: "POST",
                body: new FormData(form)
            })
            .then(response => response.json())
            .then(data => {

                loading.style.display = "none";

                if (data.success) {
                    successBox.innerHTML = data.message;
                    form.reset();
                } else {
                    errorBox.innerHTML = data.message;
                }
            })
            .catch(() => {
                loading.style.display = "none";
                errorBox.innerHTML = "Something went wrong. Please try again.";
            });
    });

});
</script>

</body>

</html>