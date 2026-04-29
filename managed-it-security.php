 <?php include 'includes/header.php'; ?>

 <div id="main-wrapper">
     <div class="site-wrapper-reveal">

         <!-- ===== SAME BANNER ===== -->
         <section class="inner-banner text-center">
             <div class="container content">
                 <h1>Managed IT & Security</h1>
                 <nav aria-label="breadcrumb">
                     <ol class="breadcrumb justify-content-center">
                         <li class="breadcrumb-item"><a href="#">Home</a></li>
                         <li class="breadcrumb-item"><a href="#">Services</a></li>
                         <li class="breadcrumb-item active">Managed IT & Security</li>
                     </ol>
                 </nav>
             </div>
         </section>

         <!-- ===== HERO ===== -->
         <section class="position-relative about section" style="background:#f8fafc;">
             <div class="container ">
                 <div class="row align-items-center">

                     <div class="col-lg-6 ">
                         <div class="pe-lg-4 about-content">
                             <div class="section-subtitle">Managed IT & Security</div>
                             <h2>Enterprise IT Management with <span class="theme-color">Advanced
                                     Security</span> </h2>
                             <p class="mt-3">
                                 We provide end-to-end Managed IT & Security services designed to ensure stability,
                                 scalability, and complete protection of your digital ecosystem.
                             </p>

                             <!-- stats -->
                             <div class="row mt-4">
                                 <div class="col-6 mb-3">
                                     <div class="p-3 bg-white rounded shadow-sm text-center border">
                                         <h4 class="theme-color mb-0">99.9%</h4>
                                         <small class="fw-bold">System Uptime</small>
                                     </div>
                                 </div>

                                 <div class="col-6 mb-3">
                                     <div class="p-3 bg-white rounded shadow-sm text-center border">
                                         <h4 class="theme-color mb-0">24/7</h4>
                                         <small class="fw-bold">Monitoring</small>
                                     </div>
                                 </div>

                                 <div class="col-6 mb-3">
                                     <div class="p-3 bg-white rounded shadow-sm text-center border">
                                         <h4 class="theme-color mb-0">Zero</h4>
                                         <small class="fw-bold">Compromise</small>
                                     </div>
                                 </div>

                                 <div class="col-6 mb-3">
                                     <div class="p-3 bg-white rounded shadow-sm text-center border">
                                         <h4 class="theme-color mb-0">100%</h4>
                                         <small class="fw-bold">Expert Support</small>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="col-lg-6">
                         <div class="position-relative">
                             <img src="assets/images/photo-1550751827-4bd374c3f58b.jpg"
                                 class="img-fluid rounded shadow-lg" alt="">


                         </div>
                     </div>

                 </div>
             </div>
         </section>

         <!-- ===== SERVICES (ENHANCED CARDS) ===== -->
         <section class="section">
             <div class="container">

                 <div class="text-center section-title mb-5 pb-0">
                     <h2>Comprehensive IT & Security Solutions</h2>
                 </div>

                 <div class="row g-4">

                     <?php
                        $services = [
                            [
                                "bi-gear-wide-connected",
                                "Managed IT Operations",
                                "Proactive management of your entire IT environment — servers, networks, endpoints, and cloud — to keep systems stable, performant, and aligned with business needs."
                            ],
                            [
                                "bi-shield-lock-fill",
                                "Security Operations & Threat Management",
                                "24/7 SOC-backed threat detection, incident response, vulnerability management, and multi-layer defence across your infrastructure and applications."
                            ],
                            [
                                "bi-activity",
                                "Monitoring & Observability",
                                "Continuous visibility into system health, performance metrics, logs, and alerts — enabling rapid diagnosis and proactive resolution before issues impact users."
                            ],
                            [
                                "bi-cloud-arrow-up-fill",
                                "Backup, Recovery & Business Continuity",
                                "Automated backup, tested disaster recovery plans, and resilient architectures that minimise downtime and protect critical data from loss or ransomware."
                            ],
                            [
                                "bi-headset",
                                "End-User Support & Service Desk",
                                "Responsive helpdesk and on-site support for your team — covering hardware, software, connectivity, and access management with defined SLAs."
                            ],
                        ];

                        foreach($services as $s){
                    ?>

                     <div class="col-lg-4 col-md-6">
                         <div class="p-4 bg-white rounded shadow-sm h-100 service-card">
                             <div class="mb-3">
                                 <div style="width:48px;height:48px;border-radius:10px;background:rgba(8,106,216,.1);display:flex;align-items:center;justify-content:center;">
                                     <i class="bi <?php echo $s[0]; ?>" style="font-size:22px;color:#086ad8;"></i>
                                 </div>
                             </div>
                             <h5 class="fw-bold"><?php echo $s[1]; ?></h5>
                             <p class="mt-2 text-muted"><?php echo $s[2]; ?></p>
                         </div>
                     </div>

                     <?php } ?>

                 </div>
             </div>
         </section>

         <!-- ===== SECURITY SECTION (IMPROVED VISUAL) ===== -->
         <section class="section about" style="background:#f8fafc; border-bottom:1px solid #dfdfe4;">
             <div class="container">
                 <div class="row align-items-center">

                     <div class="col-lg-6">
                         <img src="assets/images/photo-1563986768609-322da13575f3.jpg"
                             class="img-fluid rounded shadow" alt="">
                     </div>

                     <div class="col-lg-6">
                         <div class="section-subtitle">Trusted Security</div>
                         <h2>Security Built Into <span class="theme-color">Every Layer</span> </h2>
                         <p class="mt-3 text-justify">
                             We integrate advanced security practices across your entire IT ecosystem to ensure
                             continuous protection, risk reduction, and operational resilience at every level. Our
                             proactive approach safeguards applications, infrastructure, and data while maintaining
                             compliance and business continuity.
                         </p>

                         <div class="mt-4">
                             <div class="mb-3"><img width="24" height="24"
                                     src="https://img.icons8.com/hatch/0050aa/checkmark--v1.png" alt="checkmark--v1" />
                                 &nbsp; Real-time Threat Detection</div>
                             <div class="mb-3"><img width="24" height="24"
                                     src="https://img.icons8.com/hatch/0050aa/checkmark--v1.png" alt="checkmark--v1" />
                                 &nbsp; Vulnerability Assessment</div>
                             <div class="mb-3"><img width="24" height="24"
                                     src="https://img.icons8.com/hatch/0050aa/checkmark--v1.png" alt="checkmark--v1" />
                                 &nbsp; Compliance Management</div>
                             <div class="mb-3"><img width="24" height="24"
                                     src="https://img.icons8.com/hatch/0050aa/checkmark--v1.png" alt="checkmark--v1" />
                                 &nbsp; Endpoint & Cloud Security</div>
                         </div>
                     </div>

                 </div>
             </div>
         </section>

     </div>
 </div>

 <?php include 'includes/footer.php'; ?>