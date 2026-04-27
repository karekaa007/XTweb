<?php include 'includes/header.php'; ?>

<main class="main">

    <section class="inner-banner text-center">
        <div class="container content">
            <p class="section-subtitle">Our Solutions</p>
            <h1>Product Portfolio</h1>
            <p>Comprehensive software solutions designed to transform your business operations.</p>
        </div>
    </section>

    <section class="products-page section pt-0">
        <div class="container">
            <div class="page-overview products-overview" data-aos="fade-up" data-aos-duration="1000">
                <div class="overview-copy">
                    <span class="section-subtitle">Product Suite</span>
                    <h2>Choose the operating system for your next workflow.</h2>
                    <p>Explore ready-to-deploy platforms for visitor access, invoicing, HR, events, salon operations and food supply chains. Each product is built for practical adoption, secure operations and measurable efficiency gains.</p>
                </div>
                <div class="overview-stats">
                    <div class="overview-stat">
                        <strong>7</strong>
                        <span>solution tracks</span>
                    </div>
                    <div class="overview-stat">
                        <strong>Cloud</strong>
                        <span>deployment ready</span>
                    </div>
                    <div class="overview-stat">
                        <strong>API</strong>
                        <span>integration options</span>
                    </div>
                </div>
            </div>

            <div class="product-showcase-header">
                <span class="section-subtitle">Explore Products</span>
                <h2>Start with the workflow you need to fix.</h2>
            </div>

            <div class="product-showcase-grid" aria-label="Product portfolio">
                <a href="#xtvms" class="product-showcase-card featured">
                    <div class="product-showcase-image">
                        <img src="assets2/images/portfolio-1.jpg" alt="XT-VMS visitor management dashboard">
                    </div>
                    <div class="product-showcase-content">
                        <span class="product-category">Visitor Operations</span>
                        <h3>XT-VMS</h3>
                        <p>Digitise visitor check-ins, host alerts, compliance logs and site visibility.</p>
                        <div class="product-chip-row">
                            <span>Paperless check-in</span>
                            <span>Multi-site</span>
                            <span>Analytics</span>
                        </div>
                    </div>
                </a>
                <a href="#xims" class="product-showcase-card">
                    <div class="product-showcase-image">
                        <img src="assets2/images/portfolio-2.jpg" alt="XIMS invoice management interface">
                    </div>
                    <div class="product-showcase-content">
                        <span class="product-category">Finance</span>
                        <h3>XIMS</h3>
                        <p>Manage quotes, invoices, clients, leads and payment visibility in one platform.</p>
                        <div class="product-chip-row">
                            <span>Quotes</span>
                            <span>Invoices</span>
                            <span>CRM</span>
                        </div>
                    </div>
                </a>
                <a href="#xevent" class="product-showcase-card">
                    <div class="product-showcase-image">
                        <img src="assets2/images/portfolio-3.jpg" alt="xEvent event management platform">
                    </div>
                    <div class="product-showcase-content">
                        <span class="product-category">Events</span>
                        <h3>xEvent</h3>
                        <p>Publish events, manage RSVPs, send notifications and measure engagement.</p>
                        <div class="product-chip-row">
                            <span>RSVPs</span>
                            <span>Publishing</span>
                            <span>Reports</span>
                        </div>
                    </div>
                </a>
                <a href="#xhrms" class="product-showcase-card">
                    <div class="product-showcase-image">
                        <img src="assets2/images/human-resource-management-system/xhrms-1.jpg" alt="xHRMS human resource management dashboard">
                    </div>
                    <div class="product-showcase-content">
                        <span class="product-category">People Operations</span>
                        <h3>xHRMS</h3>
                        <p>Centralise employee records, attendance, leave workflows and HR reporting.</p>
                        <div class="product-chip-row">
                            <span>Attendance</span>
                            <span>Leave</span>
                            <span>Payroll-ready</span>
                        </div>
                    </div>
                </a>
                <a href="#salon" class="product-showcase-card">
                    <div class="product-showcase-image">
                        <img src="assets2/images/portfolio-5.jpg" alt="Salon management system interface">
                    </div>
                    <div class="product-showcase-content">
                        <span class="product-category">Retail Services</span>
                        <h3>Salon MS</h3>
                        <p>Run appointments, staff schedules, client records and service payments smoothly.</p>
                        <div class="product-chip-row">
                            <span>Bookings</span>
                            <span>Clients</span>
                            <span>Payments</span>
                        </div>
                    </div>
                </a>
                <a href="#foodways" class="product-showcase-card">
                    <div class="product-showcase-image">
                        <img src="assets2/images/Foodways/foodway-1.jpg" alt="Foodways B2B supply chain marketplace">
                    </div>
                    <div class="product-showcase-content">
                        <span class="product-category">F&B Supply Chain</span>
                        <h3>Foodways</h3>
                        <p>Connect suppliers and HORECA buyers with digital ordering and fulfilment tracking.</p>
                        <div class="product-chip-row">
                            <span>Marketplace</span>
                            <span>Ordering</span>
                            <span>Delivery</span>
                        </div>
                    </div>
                </a>
                <a href="#sports" class="product-showcase-card">
                    <div class="product-showcase-image">
                        <img src="assets2/images/sports-academy-management-system/services-11.jpg" alt="Sports Academy Management System">
                    </div>
                    <div class="product-showcase-content">
                        <span class="product-category">Sports & Education</span>
                        <h3>Sports Academy MS</h3>
                        <p>Manage enrolments, scheduling, billing, coaching and parent communications in one platform.</p>
                        <div class="product-chip-row">
                            <span>Enrolments</span>
                            <span>Scheduling</span>
                            <span>Billing</span>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Tab Navigation -->
            <div class="product-tabs">
                <div class="nav nav-tabs justify-content-center mb-5" id="productTabs" role="tablist">
                    <button class="nav-link active" id="xtvms-tab" data-bs-toggle="tab" data-bs-target="#xtvms" type="button" role="tab"><i class="bi bi-person-badge"></i> XT-VMS</button>
                    <button class="nav-link" id="xims-tab" data-bs-toggle="tab" data-bs-target="#xims" type="button" role="tab"><i class="bi bi-receipt"></i> XIMS</button>
                    <button class="nav-link" id="xevent-tab" data-bs-toggle="tab" data-bs-target="#xevent" type="button" role="tab"><i class="bi bi-calendar-event"></i> xEvent</button>
                    <button class="nav-link" id="xhrms-tab" data-bs-toggle="tab" data-bs-target="#xhrms" type="button" role="tab"><i class="bi bi-people"></i> xHRMS</button>
                    <button class="nav-link" id="salon-tab" data-bs-toggle="tab" data-bs-target="#salon" type="button" role="tab"><i class="bi bi-shop"></i> Salon MS</button>
                    <button class="nav-link" id="foodways-tab" data-bs-toggle="tab" data-bs-target="#foodways" type="button" role="tab"><i class="bi bi-basket"></i> Foodways</button>
                    <button class="nav-link" id="sports-tab" data-bs-toggle="tab" data-bs-target="#sports" type="button" role="tab"><i class="bi bi-trophy"></i> Sports Academy MS</button>
                </div>
            </div>

            <!-- Tab Content -->
            <div class="tab-content" id="productTabsContent">
                <!-- XT-VMS Tab -->
                <div class="tab-pane fade show active" id="xtvms" role="tabpanel">
                    <div class="row g-5">
                        <div class="col-lg-8">
                            <div class="product-detail-content">
                                <p class="eyebrow">Operations</p>
                                <h2 class="product-title">XT-VMS</h2>
                                <p class="tagline">Paperless · Cloud-based · Real-time analytics</p>
                                <h3 class="problem-statement">Paper-based visitor sign-in creates security gaps, administrative delays and zero visibility over who is on site at any moment.</h3>
                                <p class="product-description">XT-VMS replaces paper registers with a fully digital cloud-hosted visitor experience. Front-desk teams get pre-registration workflows, instant host notifications and real-time check-in analytics — improving site security and reducing lobby wait times.</p>

                                <h4>Key features</h4>
                                <div class="features-grid">
                                    <div class="feature-item">
                                        <strong>Digital check-in</strong>
                                        <p>Kiosk-based check-in with instant badge printing on arrival</p>
                                    </div>
                                    <div class="feature-item">
                                        <strong>Instant host alerts</strong>
                                        <p>SMS or email notification to hosts the moment a visitor checks in or out</p>
                                    </div>
                                    <div class="feature-item">
                                        <strong>Mobile number verification</strong>
                                        <p>Mandatory mobile verification step to strengthen on-site security</p>
                                    </div>
                                    <div class="feature-item">
                                        <strong>Staff directory import</strong>
                                        <p>Upload staff data via CSV or sync directly with Active Directory</p>
                                    </div>
                                    <div class="feature-item">
                                        <strong>Emergency alert broadcast</strong>
                                        <p>Send SMS or email alerts to individuals, groups, or all people on premises in one click</p>
                                    </div>
                                    <div class="feature-item">
                                        <strong>Existing system integration</strong>
                                        <p>Log visitor details, duration, and purpose into existing security systems</p>
                                    </div>
                                    <div class="feature-item">
                                        <strong>Analytics dashboard</strong>
                                        <p>Real-time and historical visitor flow reporting</p>
                                    </div>
                                    <div class="feature-item">
                                        <strong>Customisable workflows</strong>
                                        <p>Configurable check-in flows, fields, and templates to match site requirements</p>
                                    </div>
                                </div>

                                <h4>Best suited for</h4>
                                <div class="ideal-for">
                                    <span class="badge">Corporate offices</span>
                                    <span class="badge">Healthcare facilities</span>
                                    <span class="badge">Government buildings</span>
                                    <span class="badge">Education campuses</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="product-sidebar">
                                <div class="product-info-card">
                                    <div class="info-item">
                                        <strong>Deployment:</strong> Cloud-hosted
                                    </div>
                                    <div class="info-item">
                                        <strong>Availability:</strong> Free trial — no credit card required
                                    </div>
                                    <div class="info-item">
                                        <strong>Integration:</strong> Outlook / Google Calendar for host invites; existing access control systems
                                    </div>
                                    <div class="info-item">
                                        <strong>Platform:</strong> Web (admin) · iPad kiosk (visitor check-in) · Mobile (host notifications)
                                    </div>
                                </div>

                                <div class="cta-buttons">
                                    <a href="contact-us.php" class="btn btn-primary">Start free trial</a>
                                    <a href="contact-us.php" class="btn btn-outline-primary">Request a demo</a>
                                </div>

                                <div class="stats-section">
                                    <div class="stat-item">
                                        <div class="stat-number">100%</div>
                                        <div class="stat-label">paperless</div>
                                    </div>
                                    <div class="stat-item">
                                        <div class="stat-number">Real-time</div>
                                        <div class="stat-label">visibility</div>
                                    </div>
                                    <div class="stat-item">
                                        <div class="stat-number">Multi-site</div>
                                        <div class="stat-label">ready</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- XIMS Tab -->
                <div class="tab-pane fade" id="xims" role="tabpanel">
                    <div class="row g-5">
                        <div class="col-lg-8">
                            <div class="product-detail-content">
                                <p class="eyebrow">Finance</p>
                                <h2 class="product-title">XIMS</h2>
                                <p class="tagline">Quotes · Approvals · Invoices · Payments · Reminders</p>
                                <h3 class="problem-statement">Businesses managing invoicing across spreadsheets and email lose track of outstanding payments, miss follow-ups and have no clear view of their revenue pipeline.</h3>
                                <p class="product-description">XIMS is a comprehensive invoicing and client management platform — one place to manage quotations, client approvals, invoices, payments and reminders. Built for businesses of all sizes with no accounting background required.</p>

                                <h4>Key features</h4>
                                <div class="features-grid">
                                    <div class="feature-item">
                                        <strong>Quotation builder</strong>
                                        <p>Create and send professional quotes using elegant, selectable templates</p>
                                    </div>
                                    <div class="feature-item">
                                        <strong>Email quote approval</strong>
                                        <p>Clients approve quotations directly by email — no login required</p>
                                    </div>
                                    <div class="feature-item">
                                        <strong>Quote-to-invoice conversion</strong>
                                        <p>Approved quotes convert to invoices automatically with one click</p>
                                    </div>
                                    <div class="feature-item">
                                        <strong>Invoice tracking</strong>
                                        <p>Monitor payment status, due dates and overdue balances at a glance</p>
                                    </div>
                                    <div class="feature-item">
                                        <strong>Auto reminders</strong>
                                        <p>Automated follow-ups for outstanding invoices — no manual chasing</p>
                                    </div>
                                    <div class="feature-item">
                                        <strong>Payment recording</strong>
                                        <p>Log payments against invoices with running balance and history</p>
                                    </div>
                                    <div class="feature-item">
                                        <strong>Client CRM</strong>
                                        <p>Centralised client profiles with full transaction history</p>
                                    </div>
                                    <div class="feature-item">
                                        <strong>Customisable dashboard</strong>
                                        <p>Configure your view with revenue summaries and outstanding balances</p>
                                    </div>
                                </div>

                                <h4>Best suited for</h4>
                                <div class="ideal-for">
                                    <span class="badge">SMEs</span>
                                    <span class="badge">Freelancers</span>
                                    <span class="badge">Professional services firms</span>
                                    <span class="badge">Agencies</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="product-sidebar">
                                <div class="product-info-card">
                                    <div class="info-item">
                                        <strong>Deployment:</strong> Cloud-hosted
                                    </div>
                                    <div class="info-item">
                                        <strong>Availability:</strong> Free instance — get started immediately
                                    </div>
                                    <div class="info-item">
                                        <strong>Integration:</strong> Email (document delivery); export to PDF and Excel
                                    </div>
                                    <div class="info-item">
                                        <strong>Platform:</strong> Web
                                    </div>
                                </div>

                                <div class="cta-buttons">
                                    <a href="contact-us.php" class="btn btn-primary">Get free instance</a>
                                    <a href="contact-us.php" class="btn btn-outline-primary">Request a demo</a>
                                </div>

                                <div class="stats-section">
                                    <div class="stat-item">
                                        <div class="stat-number">One platform</div>
                                        <div class="stat-label">for entire revenue pipeline</div>
                                    </div>
                                    <div class="stat-item">
                                        <div class="stat-number">No accounting</div>
                                        <div class="stat-label">background needed</div>
                                    </div>
                                    <div class="stat-item">
                                        <div class="stat-number">Free</div>
                                        <div class="stat-label">to start</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- xEvent Tab -->
                <div class="tab-pane fade" id="xevent" role="tabpanel">
                    <div class="row g-5">
                        <div class="col-lg-8">
                            <div class="product-detail-content">
                                <p class="eyebrow">Events</p>
                                <h2 class="product-title">xEvent</h2>
                                <p class="tagline">Plan · Publish · Inform · Community</p>
                                <h3 class="problem-statement">Organisations promoting events across email and social channels have no single place to publish, inform attendees and keep their community up to date.</h3>
                                <p class="product-description">xEvent is a web-based event planning and publishing platform. Create events, publish them to your community and keep attendees informed with relevant updates — all from one dashboard. Suitable for community programmes, corporate events and recurring series.</p>

                                <h4>Key features</h4>
                                <div class="features-grid">
                                    <div class="feature-item">
                                        <strong>Event creation</strong>
                                        <p>Create detailed event pages with scheduling, location and descriptions</p>
                                    </div>
                                    <div class="feature-item">
                                        <strong>Community publishing</strong>
                                        <p>Publish events to your community or subscriber base with one click</p>
                                    </div>
                                    <div class="feature-item">
                                        <strong>Attendee information</strong>
                                        <p>Provide relevant event details and updates to registered attendees</p>
                                    </div>
                                    <div class="feature-item">
                                        <strong>Event notifications</strong>
                                        <p>Keep your community informed with event reminders and updates</p>
                                    </div>
                                    <div class="feature-item">
                                        <strong>Event catalogue</strong>
                                        <p>Maintain a browsable directory of upcoming and past community events</p>
                                    </div>
                                    <div class="feature-item">
                                        <strong>Multi-event management</strong>
                                        <p>Manage multiple events and series from a single dashboard</p>
                                    </div>
                                    <div class="feature-item">
                                        <strong>Event page customisation</strong>
                                        <p>Tailor event pages with images, schedules and custom information</p>
                                    </div>
                                    <div class="feature-item">
                                        <strong>Web-based platform</strong>
                                        <p>No app install required — fully accessible via browser on any device</p>
                                    </div>
                                </div>

                                <h4>Best suited for</h4>
                                <div class="ideal-for">
                                    <span class="badge">Event managers</span>
                                    <span class="badge">Community organisations</span>
                                    <span class="badge">Corporate communications teams</span>
                                    <span class="badge">Educational institutions</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="product-sidebar">
                                <div class="product-info-card">
                                    <div class="info-item">
                                        <strong>Deployment:</strong> Cloud-hosted
                                    </div>
                                    <div class="info-item">
                                        <strong>Availability:</strong> Free trial
                                    </div>
                                    <div class="info-item">
                                        <strong>Integration:</strong> Email distribution; social media publishing; calendar export (iCal / Google)
                                    </div>
                                    <div class="info-item">
                                        <strong>Platform:</strong> Web
                                    </div>
                                </div>

                                <div class="cta-buttons">
                                    <a href="contact-us.php" class="btn btn-primary">Start free trial</a>
                                    <a href="contact-us.php" class="btn btn-outline-primary">Request a demo</a>
                                </div>

                                <div class="stats-section">
                                    <div class="stat-item">
                                        <div class="stat-number">Single dashboard</div>
                                        <div class="stat-label">for all events</div>
                                    </div>
                                    <div class="stat-item">
                                        <div class="stat-number">Targeted community</div>
                                        <div class="stat-label">notifications</div>
                                    </div>
                                    <div class="stat-item">
                                        <div class="stat-number">Full RSVP</div>
                                        <div class="stat-label">tracking</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- xHRMS Tab -->
                <div class="tab-pane fade" id="xhrms" role="tabpanel">
                    <div class="row g-5">
                        <div class="col-lg-8">
                            <div class="product-detail-content">
                                <p class="eyebrow">HR & Workforce</p>
                                <h2 class="product-title">xHRMS</h2>
                                <p class="tagline">Employee data · Payroll · Benefits · Performance</p>
                                <h3 class="problem-statement">Organisations managing HR across disconnected spreadsheets, emails and manual processes can't maintain accurate employee records, process payroll efficiently or track performance consistently.</h3>
                                <p class="product-description">xHRMS is a full human resource management system designed to streamline and automate core HR operations — from employee data and payroll processing to benefits administration and performance evaluations. It gives HR teams the tools to increase efficiency and make better-informed decisions.</p>

                                <h4>Key features</h4>
                                <div class="features-grid">
                                    <div class="feature-item">
                                        <strong>Employee data management</strong>
                                        <p>Centralised staff records including contracts, documents and history</p>
                                    </div>
                                    <div class="feature-item">
                                        <strong>Payroll processing</strong>
                                        <p>Automate pay run calculations with tax, deductions and compliance exports</p>
                                    </div>
                                    <div class="feature-item">
                                        <strong>Benefits administration</strong>
                                        <p>Manage and track employee entitlements, allowances and benefits</p>
                                    </div>
                                    <div class="feature-item">
                                        <strong>Performance evaluations</strong>
                                        <p>Set goals, conduct reviews and track performance over time</p>
                                    </div>
                                    <div class="feature-item">
                                        <strong>Leave management</strong>
                                        <p>Apply, approve and track leave balances with full audit trail</p>
                                    </div>
                                    <div class="feature-item">
                                        <strong>Attendance tracking</strong>
                                        <p>Monitor attendance patterns and flag irregularities</p>
                                    </div>
                                    <div class="feature-item">
                                        <strong>Role-based access</strong>
                                        <p>Separate views and permissions for employees, managers and HR admin</p>
                                    </div>
                                    <div class="feature-item">
                                        <strong>HR reporting</strong>
                                        <p>Workforce analytics and summaries to support decision-making</p>
                                    </div>
                                </div>

                                <h4>Best suited for</h4>
                                <div class="ideal-for">
                                    <span class="badge">SMEs</span>
                                    <span class="badge">Multi-site organisations</span>
                                    <span class="badge">Growing teams</span>
                                    <span class="badge">HR departments</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="product-sidebar">
                                <div class="product-info-card">
                                    <div class="info-item">
                                        <strong>Deployment:</strong> Cloud-hosted
                                    </div>
                                    <div class="info-item">
                                        <strong>Availability:</strong> Free trial
                                    </div>
                                    <div class="info-item">
                                        <strong>Integration:</strong> Payroll processors (export-ready); accounting platforms via CSV
                                    </div>
                                    <div class="info-item">
                                        <strong>Platform:</strong> Web · Mobile (leave and attendance)
                                    </div>
                                </div>

                                <div class="cta-buttons">
                                    <a href="contact-us.php" class="btn btn-primary">Start free trial</a>
                                    <a href="contact-us.php" class="btn btn-outline-primary">Request a demo</a>
                                </div>

                                <div class="stats-section">
                                    <div class="stat-item">
                                        <div class="stat-number">Full HR</div>
                                        <div class="stat-label">lifecycle in one platform</div>
                                    </div>
                                    <div class="stat-item">
                                        <div class="stat-number">Automated</div>
                                        <div class="stat-label">payroll processing</div>
                                    </div>
                                    <div class="stat-item">
                                        <div class="stat-number">Informed</div>
                                        <div class="stat-label">HR decisions</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Salon MS Tab -->
                <div class="tab-pane fade" id="salon" role="tabpanel">
                    <div class="row g-5">
                        <div class="col-lg-8">
                            <div class="product-detail-content">
                                <p class="eyebrow">Hospitality</p>
                                <h2 class="product-title">Salon Management System</h2>
                                <p class="tagline">Appointments · POS · Staff · Clients · Reports</p>
                                <h3 class="problem-statement">Salon and spa owners managing bookings through phone calls and paper diaries lose revenue to no-shows, can't track client history and have no visibility over daily business performance.</h3>
                                <p class="product-description">Xpansion Salon Management System handles the full day-to-day operation of a hair salon, nail bar, spa or similar business — appointment scheduling, point of sale, client profiles, employee management and business reporting in one place.</p>

                                <h4>Key features</h4>
                                <div class="features-grid">
                                    <div class="feature-item">
                                        <strong>Appointment scheduling</strong>
                                        <p>Online and in-person booking with calendar view</p>
                                    </div>
                                    <div class="feature-item">
                                        <strong>Point of sale</strong>
                                        <p>Process payments for services and retail products at checkout</p>
                                    </div>
                                    <div class="feature-item">
                                        <strong>Client profiles</strong>
                                        <p>Full client history including services, products and preferences</p>
                                    </div>
                                    <div class="feature-item">
                                        <strong>Staff management</strong>
                                        <p>Rosters, commission tracking and individual performance</p>
                                    </div>
                                    <div class="feature-item">
                                        <strong>Inventory management</strong>
                                        <p>Track retail stock levels with low-stock alerts</p>
                                    </div>
                                    <div class="feature-item">
                                        <strong>Automated reminders</strong>
                                        <p>SMS or email appointment reminders to reduce no-shows</p>
                                    </div>
                                    <div class="feature-item">
                                        <strong>Business reporting</strong>
                                        <p>Daily takings, service breakdowns and staff performance</p>
                                    </div>
                                    <div class="feature-item">
                                        <strong>Loyalty programme</strong>
                                        <p>Points and rewards to encourage repeat visits</p>
                                    </div>
                                </div>

                                <h4>Best suited for</h4>
                                <div class="ideal-for">
                                    <span class="badge">Hair salons</span>
                                    <span class="badge">Nail bars</span>
                                    <span class="badge">Spas</span>
                                    <span class="badge">Beauty clinics</span>
                                    <span class="badge">Barbershops</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="product-sidebar">
                                <div class="product-info-card">
                                    <div class="info-item">
                                        <strong>Deployment:</strong> Cloud-hosted
                                    </div>
                                    <div class="info-item">
                                        <strong>Availability:</strong> Free trial
                                    </div>
                                    <div class="info-item">
                                        <strong>Integration:</strong> Payment terminals (card processing); SMS gateway for reminders
                                    </div>
                                    <div class="info-item">
                                        <strong>Platform:</strong> Web · Tablet (POS and front desk)
                                    </div>
                                </div>

                                <div class="cta-buttons">
                                    <a href="contact-us.php" class="btn btn-primary">Start free trial</a>
                                    <a href="contact-us.php" class="btn btn-outline-primary">Request a demo</a>
                                </div>

                                <div class="stats-section">
                                    <div class="stat-item">
                                        <div class="stat-number">Reduced no-shows</div>
                                        <div class="stat-label">via automated reminders</div>
                                    </div>
                                    <div class="stat-item">
                                        <div class="stat-number">Full client</div>
                                        <div class="stat-label">history</div>
                                    </div>
                                    <div class="stat-item">
                                        <div class="stat-number">Daily performance</div>
                                        <div class="stat-label">visibility</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Foodways Tab -->
                <div class="tab-pane fade" id="foodways" role="tabpanel">
                    <div class="row g-5">
                        <div class="col-lg-8">
                            <div class="product-detail-content">
                                <p class="eyebrow">F&B Supply Chain</p>
                                <h2 class="product-title">Foodways</h2>
                                <p class="tagline">Suppliers · HORECA Buyers · B2B Marketplace · Mobile</p>
                                <h3 class="problem-statement">Food suppliers and commercial buyers in the hospitality sector rely on phone calls, WhatsApp and manual order sheets — creating errors, delays and zero supply chain visibility for both sides.</h3>
                                <p class="product-description">Foodways is a B2B marketplace connecting food and beverage suppliers directly with commercial buyers across hotels, restaurants, catering and events (HORECA). Suppliers list their catalogues, buyers browse and order digitally, and both sides track fulfilment in real time — eliminating manual procurement entirely.</p>

                                <h4>Key features</h4>
                                <div class="features-grid">
                                    <div class="feature-item">
                                        <strong>Supplier catalogue</strong>
                                        <p>Digital product listings with pricing, MOQ and availability</p>
                                    </div>
                                    <div class="feature-item">
                                        <strong>Buyer portal</strong>
                                        <p>Browse, compare and order from multiple suppliers in one place</p>
                                    </div>
                                    <div class="feature-item">
                                        <strong>Order management</strong>
                                        <p>End-to-end order tracking from placement to delivery confirmation</p>
                                    </div>
                                    <div class="feature-item">
                                        <strong>Delivery tracking</strong>
                                        <p>Real-time status updates for buyers and suppliers</p>
                                    </div>
                                    <div class="feature-item">
                                        <strong>Invoice automation</strong>
                                        <p>Auto-generated invoices on order confirmation</p>
                                    </div>
                                    <div class="feature-item">
                                        <strong>Multi-supplier ordering</strong>
                                        <p>Single basket across multiple suppliers with split fulfilment</p>
                                    </div>
                                    <div class="feature-item">
                                        <strong>Mobile app</strong>
                                        <p>Full functionality on iOS and Android for on-the-go ordering</p>
                                    </div>
                                    <div class="feature-item">
                                        <strong>Analytics</strong>
                                        <p>Order history, spend analysis and supplier performance reporting</p>
                                    </div>
                                </div>

                                <h4>Best suited for</h4>
                                <div class="ideal-for">
                                    <span class="badge">Hotels</span>
                                    <span class="badge">Restaurants</span>
                                    <span class="badge">Catering companies</span>
                                    <span class="badge">Event caterers</span>
                                    <span class="badge">Food & beverage suppliers</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="product-sidebar">
                                <div class="product-info-card">
                                    <div class="info-item">
                                        <strong>Deployment:</strong> Cloud-hosted
                                    </div>
                                    <div class="info-item">
                                        <strong>Availability:</strong> Free trial for buyers · Supplier onboarding via Xpansion team
                                    </div>
                                    <div class="info-item">
                                        <strong>Integration:</strong> Existing ERP and inventory systems via API; accounting platforms
                                    </div>
                                    <div class="info-item">
                                        <strong>Platform:</strong> Web · iOS · Android
                                    </div>
                                </div>

                                <div class="cta-buttons">
                                    <a href="contact-us.php" class="btn btn-primary">Start free trial</a>
                                    <a href="contact-us.php" class="btn btn-outline-primary">Request a demo</a>
                                </div>

                                <div class="stats-section">
                                    <div class="stat-item">
                                        <div class="stat-number">B2B marketplace</div>
                                        <div class="stat-label">for HORECA</div>
                                    </div>
                                    <div class="stat-item">
                                        <div class="stat-number">Eliminates manual</div>
                                        <div class="stat-label">procurement</div>
                                    </div>
                                    <div class="stat-item">
                                        <div class="stat-number">Full order-to-delivery</div>
                                        <div class="stat-label">tracking</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sports Academy MS Tab -->
                <div class="tab-pane fade" id="sports" role="tabpanel">
                    <div class="row g-5">
                        <div class="col-lg-8">
                            <div class="product-detail-content">
                                <p class="eyebrow">Sports & Education</p>
                                <h2 class="product-title">Sports Academy Management System</h2>
                                <p class="tagline">Enrolments · Scheduling · Billing · Performance · Communication</p>
                                <h3 class="problem-statement">Sports academies managing registrations, training schedules and payments manually spend more time on administration than on coaching — and have no way to track athlete progress or keep parents informed.</h3>
                                <p class="product-description">Xpansion Sports Academy Management System is a purpose-built platform for sports academies to manage their day-to-day operations more efficiently. From student enrolment and session scheduling to billing, parent communication and performance tracking — everything runs from one system.</p>

                                <h4>Key features</h4>
                                <div class="features-grid">
                                    <div class="feature-item">
                                        <strong>Student enrolment</strong>
                                        <p>Online registration and enrolment management for new and returning students</p>
                                    </div>
                                    <div class="feature-item">
                                        <strong>Session scheduling</strong>
                                        <p>Plan and manage training sessions, fixtures and academy calendar</p>
                                    </div>
                                    <div class="feature-item">
                                        <strong>Billing & payments</strong>
                                        <p>Generate fees, process payments and track outstanding balances</p>
                                    </div>
                                    <div class="feature-item">
                                        <strong>Performance tracking</strong>
                                        <p>Record and monitor individual athlete development and progress over time</p>
                                    </div>
                                    <div class="feature-item">
                                        <strong>Parent communication</strong>
                                        <p>Send updates, schedules and announcements directly to parents and students</p>
                                    </div>
                                    <div class="feature-item">
                                        <strong>Coach management</strong>
                                        <p>Assign coaches to sessions and track coaching activity and workload</p>
                                    </div>
                                    <div class="feature-item">
                                        <strong>Attendance tracking</strong>
                                        <p>Record session attendance to monitor student engagement and commitment</p>
                                    </div>
                                    <div class="feature-item">
                                        <strong>Reporting</strong>
                                        <p>Academy performance reports covering enrolments, revenue and student progress</p>
                                    </div>
                                </div>

                                <h4>Best suited for</h4>
                                <div class="ideal-for">
                                    <span class="badge">Cricket academies</span>
                                    <span class="badge">Football clubs</span>
                                    <span class="badge">Multi-sport centres</span>
                                    <span class="badge">School sports programmes</span>
                                    <span class="badge">Martial arts schools</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="product-sidebar">
                                <div class="product-info-card">
                                    <div class="info-item">
                                        <strong>Deployment:</strong> Cloud-hosted
                                    </div>
                                    <div class="info-item">
                                        <strong>Availability:</strong> Free trial
                                    </div>
                                    <div class="info-item">
                                        <strong>Integration:</strong> Payment gateways; email and SMS for parent communication
                                    </div>
                                    <div class="info-item">
                                        <strong>Platform:</strong> Web · Mobile
                                    </div>
                                </div>

                                <div class="cta-buttons">
                                    <a href="contact-us.php" class="btn btn-primary">Start free trial</a>
                                    <a href="contact-us.php" class="btn btn-outline-primary">Request a demo</a>
                                </div>

                                <div class="stats-section">
                                    <div class="stat-item">
                                        <div class="stat-number">Less admin</div>
                                        <div class="stat-label">more coaching time</div>
                                    </div>
                                    <div class="stat-item">
                                        <div class="stat-number">Full student</div>
                                        <div class="stat-label">progress tracking</div>
                                    </div>
                                    <div class="stat-item">
                                        <div class="stat-number">Parent comms</div>
                                        <div class="stat-label">built in</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product-comparison" data-aos="fade-up" data-aos-duration="1000">
                <div class="product-comparison-heading">
                    <span class="section-subtitle">Compare Fit</span>
                    <h2>Match each product to the job it does best.</h2>
                </div>
                <div class="product-comparison-table">
                    <div class="comparison-row comparison-head">
                        <span>Product</span>
                        <span>Best for</span>
                        <span>Key outcome</span>
                        <span>Action</span>
                    </div>
                    <div class="comparison-row">
                        <span><strong>XT-VMS</strong></span>
                        <span>Corporate, government and campus visitor access</span>
                        <span>Real-time site visibility and paperless compliance</span>
                        <a href="#xtvms">View details</a>
                    </div>
                    <div class="comparison-row">
                        <span><strong>XIMS</strong></span>
                        <span>SMEs, agencies and service businesses</span>
                        <span>Cleaner quote-to-payment workflow</span>
                        <a href="#xims">View details</a>
                    </div>
                    <div class="comparison-row">
                        <span><strong>xEvent</strong></span>
                        <span>Community, corporate and education events</span>
                        <span>Centralised publishing, RSVP and attendee updates</span>
                        <a href="#xevent">View details</a>
                    </div>
                    <div class="comparison-row">
                        <span><strong>xHRMS</strong></span>
                        <span>Multi-site teams and HR operations</span>
                        <span>Employee data, attendance and leave in one place</span>
                        <a href="#xhrms">View details</a>
                    </div>
                    <div class="comparison-row">
                        <span><strong>Salon MS</strong></span>
                        <span>Salons, clinics and appointment-led services</span>
                        <span>Better bookings, client records and staff planning</span>
                        <a href="#salon">View details</a>
                    </div>
                    <div class="comparison-row">
                        <span><strong>Foodways</strong></span>
                        <span>Food suppliers and HORECA buyers</span>
                        <span>Digital ordering with fulfilment visibility</span>
                        <a href="#foodways">View details</a>
                    </div>
                    <div class="comparison-row">
                        <span><strong>Sports Academy MS</strong></span>
                        <span>Sports academies, clubs and school programmes</span>
                        <span>Streamlined enrolments, scheduling and billing</span>
                        <a href="#sports">View details</a>
                    </div>
                </div>
            </div>

            <div class="portfolio page-bottom-cta">
                <div class="cta-section" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="cta-content">
                        <span class="cta-label"><i class="bi bi-lightning-charge-fill"></i> Product Fit</span>
                        <h3>Need help choosing the right platform?</h3>
                        <p>Tell us about your workflow and we will map the best product, deployment path and integration plan.</p>
                        <div class="cta-buttons">
                            <a href="contact-us.php" class="btn-cta-primary">Discuss Project <i class="bi bi-arrow-right"></i></a>
                            <a href="case-studies.php" class="btn-cta-secondary"><i class="bi bi-journal-text"></i> View Case Studies</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const tabNav = document.getElementById('productTabs');

    function activateTab(tabId) {
        const btn = tabNav.querySelector(`[data-bs-target="#${tabId}"]`);
        if (btn) bootstrap.Tab.getOrCreateInstance(btn).show();
    }

    // Restore tab from URL hash on page load
    const hash = window.location.hash.replace('#', '');
    if (hash && document.getElementById(hash)) activateTab(hash);

    // Keep URL hash in sync when Bootstrap changes tabs
    tabNav.addEventListener('shown.bs.tab', function (e) {
        const id = e.target.getAttribute('data-bs-target').replace('#', '');
        history.replaceState(null, null, '#' + id);
    });

    // Showcase cards and comparison table links
    document.querySelectorAll('.product-showcase-card, .product-comparison-table a').forEach(function (el) {
        el.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').replace('#', '');
            if (!targetId) return;
            activateTab(targetId);
            history.replaceState(null, null, '#' + targetId);
            tabNav.scrollIntoView({ behavior: 'smooth', block: 'start' });
        });
    });
});
</script>

<?php include 'includes/footer.php'; ?>
