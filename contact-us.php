 <?php include 'includes/header.php'; ?>

 <main class="main">

     <section class="inner-banner text-center">
         <div class="container content">
             <h1>Contact Us</h1>

             <nav aria-label="breadcrumb">
                 <ol class="breadcrumb justify-content-center">
                     <li class="breadcrumb-item"><a href="#">Home</a></li>
                     <!--  <li class="breadcrumb-item"><a href="#">About Us</a></li> -->
                     <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                 </ol>
             </nav>
         </div>
     </section>
     <!-- Contact Section -->
     <section id="contact" class="contact section">

         <!-- Section Title -->
         <div class="container section-title aos-init aos-animate" data-aos="fade-up">
             <h2>Contact</h2>
             <p>Get in touch with our expert team for inquiries, support, project discussions, and personalized
                 solutions
                 tailored to your needs.</p>
         </div><!-- End Section Title -->

         <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

             <div class="row gy-5 align-items-stretch">

                 <div class="col-lg-5 aos-init aos-animate" data-aos="fade-right" data-aos-delay="200">
                     <div class="info-panel">
                         <div class="panel-header">
                             <span class="section-badge">
                                 <i class="bi bi-chat-dots-fill"></i>
                                 Get In Touch
                             </span>
                             <h3>Let's Bring Your Vision to Life</h3>
                             <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                 consequuntur magni dolores.</p>
                         </div>

                         <div class="contact-methods">
                             <div class="method-item">
                                 <div class="method-icon">
                                     <i class="bi bi-envelope-paper-fill"></i>
                                 </div>
                                 <div class="method-details">
                                     <span class="method-label">Email Us</span>
                                     <a href="mailto:info@xpansion.com.au">info@xpansion.com.au</a>
                                 </div>
                             </div>

                             <div class="method-item">
                                 <div class="method-icon">
                                     <i class="bi bi-headset"></i>
                                 </div>
                                 <div class="method-details">
                                     <span class="method-label">Call Us</span>
                                     <a href="tel:+61417122787">+61 417 122 787</a>
                                 </div>
                             </div>

                             <div class="method-item">
                                 <div class="method-icon">
                                     <i class="bi bi-pin-map-fill"></i>
                                 </div>
                                 <div class="method-details">
                                     <span class="method-label">Visit Us</span>
                                     <span>Sussex Street, Sydney, NSW 2000</span>
                                 </div>
                             </div>
                         </div>

                         <div class="stats-strip d-none">
                             <div class="stat-item">
                                 <span class="stat-number">98%</span>
                                 <span class="stat-text">Satisfaction</span>
                             </div>
                             <div class="stat-item">
                                 <span class="stat-number">24/7</span>
                                 <span class="stat-text">Support</span>
                             </div>
                             <div class="stat-item">
                                 <span class="stat-number">3.2k</span>
                                 <span class="stat-text">Projects</span>
                             </div>
                         </div>

                         <div class="social-connect">
                             <span>Follow Us</span>
                             <div class="social-icons">
                                 <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                                 <a href="#" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
                                 <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                                 <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                             </div>
                         </div>
                     </div>
                 </div><!-- End Info Panel -->

                 <div class="col-lg-7 aos-init aos-animate" data-aos="fade-left" data-aos-delay="300">
                     <div class="form-card">
                         <div class="form-card-header">
                             <div class="header-icon">
                                 <i class="bi bi-send-fill"></i>
                             </div>
                             <div class="header-text">
                                 <h4>Send Us a Message</h4>
                                 <p>Fill out the form and our team will respond within 24 hours.</p>
                             </div>
                         </div>

                         <form method="post" action="save_contact.php" id="enquiryForm" class="php-email-form">

                             <!-- FORM LOADER -->
                             <div class="form-loader" id="formLoader">
                                 <div class="loader-box">
                                     <div class="spinner"></div>
                                     <p>Please Wait...</p>
                                 </div>
                             </div>

                             <div class="row g-4">
                                 <div class="col-md-6">
                                     <div class="input-group-custom">
                                         <label>Your Name</label>
                                         <div class="input-wrapper">
                                             <i class="bi bi-person"></i>
                                             <input type="text" id="name" name="name" placeholder="John Doe">
                                         </div>
                                     </div>
                                 </div>

                                 <div class="col-md-6">
                                     <div class="input-group-custom">
                                         <label>Email Address</label>
                                         <div class="input-wrapper">
                                             <i class="bi bi-envelope"></i>
                                             <input type="email" id="email" name="email"
                                                 placeholder="info@xpansion.com.au">
                                         </div>
                                     </div>
                                 </div>

                                 <div class="col-12">
                                     <div class="input-group-custom">
                                         <label>Subject</label>
                                         <div class="input-wrapper">
                                             <i class="bi bi-chat-square-text"></i>
                                             <input type="text" id="subject" name="subject"
                                                 placeholder="How can we help?">
                                         </div>
                                     </div>
                                 </div>

                                 <div class="col-12">
                                     <div class="input-group-custom">
                                         <label>Your Message</label>
                                         <div class="input-wrapper textarea-wrapper">
                                             <i class="bi bi-pencil-square"></i>
                                             <textarea id="message" name="message" rows="5"
                                                 placeholder="Tell us about your project..."></textarea>
                                         </div>
                                     </div>
                                 </div>
                             </div>

                             <div class="form-actions">
                                 <button type="submit" id="submitBtn" class="btn-submit">
                                     <span>Send Message</span>
                                     <i class="bi bi-arrow-right-circle-fill"></i>
                                 </button>
                             </div>
                         </form>
                     </div>
                 </div><!-- End Form Card -->

             </div>

         </div>

     </section><!-- /Contact Section -->


 </main>

 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

 <script>
    const form = document.getElementById('enquiryForm');
    const loader = document.getElementById('formLoader');
    const submitBtn = document.getElementById('submitBtn');
    form.addEventListener('submit', function(e) {
        e.preventDefault();

        let name = document.getElementById('name').value.trim();
        let email = document.getElementById('email').value.trim();
        let subject = document.getElementById('subject').value.trim();
        let message = document.getElementById('message').value.trim();

        // ===== VALIDATION =====
        if (!name || !email || !subject || !message) {
            Swal.fire('Required!', 'Please fill all fields.', 'warning');
            return;
        }

        // Email validation
        let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            Swal.fire('Invalid Email!', 'Enter valid email address.', 'warning');
            return;
        }

        // ===== SHOW LOADER =====
        loader.style.display = "flex";
        submitBtn.disabled = true;
        submitBtn.innerHTML = "Sending...";

        let formData = new FormData(this);

        fetch('save_contact.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(res => {

                loader.style.display = "none";
                submitBtn.disabled = false;
                submitBtn.innerHTML = "Send Message";

                Swal.fire({
                    icon: 'success',
                    title: 'Thank You for Contacting Us!',
                    text: 'We have received your query successfully. Our team will review it and get in touch with you shortly.',
                    confirmButtonText: 'OK'
                });

                form.reset();
            })
            .catch(() => {

                loader.style.display = "none";
                submitBtn.disabled = false;
                submitBtn.innerHTML = "Send Message";

                Swal.fire('Error!', 'Something went wrong.', 'error');
            });
    });
 </script>

 <?php include 'includes/footer.php'; ?>