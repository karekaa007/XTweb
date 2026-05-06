<?php include 'includes/header.php'; ?>

<style>
/* ── Products page redesign ── */
.pp-hero {
    background: linear-gradient(135deg, #0B2D5E 0%, #185FA5 100%);
    padding: 5rem 0 4rem;
    text-align: center;
    color: #fff;
    position: relative;
    overflow: hidden;
}
.pp-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.04'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}
.pp-hero-inner { position: relative; z-index: 1; }
.pp-hero-pill {
    display: inline-flex; align-items: center; gap: 6px;
    background: rgba(255,255,255,.12); border: 1px solid rgba(255,255,255,.2);
    color: #fff; font-size: 11px; font-weight: 600; letter-spacing: .1em;
    text-transform: uppercase; padding: 5px 16px; border-radius: 100px; margin-bottom: 1.5rem;
}
.pp-hero h1 {
    font-size: clamp(30px, 5vw, 52px); font-weight: 700;
    line-height: 1.1; margin-bottom: 1rem; letter-spacing: -.02em;
}
.pp-hero h1 span { color: #0EA5B0; }
.pp-hero p {
    font-size: 17px; color: rgba(255,255,255,.8);
    max-width: 520px; margin: 0 auto 3rem; line-height: 1.65;
}
.pp-stats {
    display: inline-flex; gap: 0;
    background: rgba(255,255,255,.1); border: 1px solid rgba(255,255,255,.2);
    border-radius: 14px; overflow: hidden; backdrop-filter: blur(8px);
}
.pp-stat {
    padding: 1rem 2rem; border-right: 1px solid rgba(255,255,255,.15); text-align: center;
}
.pp-stat:last-child { border-right: none; }
.pp-stat-val { display: block; font-size: 22px; font-weight: 700; color: #fff; }
.pp-stat-lbl { font-size: 11px; color: rgba(255,255,255,.6); margin-top: 2px; }

/* Filter */
.pp-filter {
    padding: 2.5rem 0 1rem;
    border-bottom: 1px solid #E5E7EB;
    background: #fff;
    position: sticky;
    top: 72px;
    z-index: 10;
    box-shadow: 0 2px 8px rgba(0,0,0,.06);
}
.pp-filter-inner { display: flex; align-items: center; gap: 8px; flex-wrap: wrap; justify-content: center; }
.pp-filter-btn {
    font-size: 13px; font-weight: 500; padding: 8px 20px;
    border-radius: 100px; border: 1.5px solid #E5E7EB;
    background: #fff; color: #4B5563; cursor: pointer; transition: all .2s;
}
.pp-filter-btn:hover { border-color: #185FA5; color: #185FA5; background: #EEF4FF; }
.pp-filter-btn.active { background: #0B2D5E; color: #fff; border-color: #0B2D5E; }

/* Grid */
.pp-grid-section { padding: 3rem 0 4rem; background: #F8FAFC; }
.pp-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
    gap: 24px;
}

/* Card */
.pp-card {
    background: #fff; border-radius: 16px;
    border: 1px solid #E5E7EB; overflow: hidden;
    display: flex; flex-direction: column;
    text-decoration: none; color: inherit;
    transition: box-shadow .25s, transform .25s;
}
.pp-card:hover { box-shadow: 0 12px 40px rgba(11,45,94,.12); transform: translateY(-4px); color: inherit; }
.pp-card.pp-hidden { display: none; }

/* Card image */
.pp-card-img {
    height: 210px; width: 100%; overflow: hidden;
    position: relative; background: #f1f5f9;
}
.pp-card-img img {
    width: 100%; height: 100%; object-fit: cover;
    transition: transform .4s;
}
.pp-card:hover .pp-card-img img { transform: scale(1.04); }
.pp-card-img-overlay {
    position: absolute; inset: 0;
    background: linear-gradient(to bottom, transparent 40%, rgba(11,45,94,.55) 100%);
}
.pp-card-cat-pill {
    position: absolute; top: 14px; left: 14px;
    font-size: 10px; font-weight: 700; letter-spacing: .08em; text-transform: uppercase;
    padding: 4px 12px; border-radius: 100px; backdrop-filter: blur(6px);
}

/* Card body */
.pp-card-body { padding: 1.4rem 1.5rem; flex: 1; display: flex; flex-direction: column; gap: 12px; }

.pp-card-top { display: flex; align-items: center; gap: 12px; }
.pp-card-icon {
    width: 44px; height: 44px; border-radius: 11px;
    display: flex; align-items: center; justify-content: center;
    font-size: 20px; flex-shrink: 0;
}
.pp-card-title { flex: 1; }
.pp-card-name { font-size: 18px; font-weight: 700; color: #0B2D5E; line-height: 1.1; }
.pp-card-fullname { font-size: 12px; color: #9CA3AF; margin-top: 2px; }

.pp-card-tagline {
    font-size: 13.5px; color: #4B5563; line-height: 1.6;
    padding: 10px 12px; background: #F8FAFC;
    border-left: 3px solid currentColor; border-radius: 0 6px 6px 0;
    font-style: italic;
}

.pp-card-feats { display: flex; flex-wrap: wrap; gap: 6px; }
.pp-card-feat {
    font-size: 12px; color: #374151;
    background: #F3F4F6; border: 1px solid #E5E7EB;
    padding: 4px 10px; border-radius: 6px;
    display: flex; align-items: center; gap: 5px;
}
.pp-card-feat i { font-size: 10px; }

/* Card footer */
.pp-card-footer {
    display: flex; align-items: center; justify-content: space-between;
    padding: 12px 1.5rem;
    border-top: 1px solid #F3F4F6;
}
.pp-card-audience { font-size: 11.5px; color: #9CA3AF; }
.pp-card-cta {
    font-size: 13px; font-weight: 600; color: #fff;
    padding: 7px 16px; border-radius: 8px;
    display: inline-flex; align-items: center; gap: 6px;
    transition: opacity .2s;
}
.pp-card:hover .pp-card-cta { opacity: .85; }

/* Colour themes */
/* Finance – Blue */
.pp-blue .pp-card-cat-pill  { background: rgba(24,95,165,.85); color: #fff; }
.pp-blue .pp-card-icon      { background: #E6F1FB; color: #185FA5; }
.pp-blue .pp-card-tagline   { border-color: #185FA5; color: #185FA5; }
.pp-blue .pp-card-cta       { background: #185FA5; }

/* Operations – Green */
.pp-green .pp-card-cat-pill { background: rgba(59,109,17,.8); color: #fff; }
.pp-green .pp-card-icon     { background: #EAF3DE; color: #3B6D11; }
.pp-green .pp-card-tagline  { border-color: #3B6D11; color: #3B6D11; }
.pp-green .pp-card-cta      { background: #3B6D11; }

/* Hospitality (Foodways) – Amber */
.pp-amber .pp-card-cat-pill { background: rgba(133,79,11,.8); color: #fff; }
.pp-amber .pp-card-icon     { background: #FAEEDA; color: #854F0B; }
.pp-amber .pp-card-tagline  { border-color: #854F0B; color: #854F0B; }
.pp-amber .pp-card-cta      { background: #854F0B; }

/* Hospitality (Salon) – Pink */
.pp-pink .pp-card-cat-pill  { background: rgba(153,53,86,.8); color: #fff; }
.pp-pink .pp-card-icon      { background: #FBEAF0; color: #993556; }
.pp-pink .pp-card-tagline   { border-color: #993556; color: #993556; }
.pp-pink .pp-card-cta       { background: #993556; }

/* Operations (xEvent) – Purple */
.pp-purple .pp-card-cat-pill { background: rgba(83,74,183,.8); color: #fff; }
.pp-purple .pp-card-icon    { background: #EEEDFE; color: #534AB7; }
.pp-purple .pp-card-tagline { border-color: #534AB7; color: #534AB7; }
.pp-purple .pp-card-cta     { background: #534AB7; }

/* People – Teal */
.pp-teal .pp-card-cat-pill  { background: rgba(15,110,86,.8); color: #fff; }
.pp-teal .pp-card-icon      { background: #E1F5EE; color: #0F6E56; }
.pp-teal .pp-card-tagline   { border-color: #0F6E56; color: #0F6E56; }
.pp-teal .pp-card-cta       { background: #0F6E56; }

/* Operations (Sports) – Navy */
.pp-navy .pp-card-cat-pill  { background: rgba(11,45,94,.8); color: #fff; }
.pp-navy .pp-card-icon      { background: #E6F1FB; color: #0B2D5E; }
.pp-navy .pp-card-tagline   { border-color: #0B2D5E; color: #0B2D5E; }
.pp-navy .pp-card-cta       { background: #0B2D5E; }

/* CTA banner */
.pp-cta {
    background: linear-gradient(135deg, #0B2D5E, #185FA5);
    border-radius: 20px; padding: 3.5rem;
    display: flex; align-items: center; justify-content: space-between;
    gap: 2rem; flex-wrap: wrap; margin-bottom: 3rem;
}
.pp-cta h3 { font-size: 24px; font-weight: 700; color: #fff; margin-bottom: 8px; }
.pp-cta p  { font-size: 15px; color: rgba(255,255,255,.7); max-width: 480px; line-height: 1.6; }
.pp-cta-btns { display: flex; gap: 12px; flex-wrap: wrap; }
.pp-cta-btns .btn-solid {
    background: #0EA5B0; color: #fff; font-size: 14px; font-weight: 600;
    padding: 13px 28px; border-radius: 10px; text-decoration: none;
    display: inline-flex; align-items: center; gap: 8px; transition: background .2s;
}
.pp-cta-btns .btn-solid:hover { background: #0c8f99; color: #fff; }
.pp-cta-btns .btn-outline {
    background: transparent; color: #fff; font-size: 14px; font-weight: 500;
    padding: 13px 28px; border-radius: 10px; text-decoration: none;
    border: 1.5px solid rgba(255,255,255,.3); transition: background .2s;
}
.pp-cta-btns .btn-outline:hover { background: rgba(255,255,255,.1); color: #fff; }

@media (max-width: 768px) {
    .pp-stats { flex-direction: column; width: 100%; max-width: 280px; }
    .pp-stat   { border-right: none; border-bottom: 1px solid rgba(255,255,255,.15); }
    .pp-stat:last-child { border-bottom: none; }
    .pp-grid   { grid-template-columns: 1fr; }
    .pp-cta    { padding: 2rem 1.5rem; }
    .pp-filter { top: 60px; padding: 1rem 0 .75rem; }
}
</style>

<main class="main">

    <!-- Hero -->
    <section class="pp-hero">
        <div class="container pp-hero-inner" data-aos="fade-up">
            <div class="pp-hero-pill"><i class="bi bi-grid-3x3-gap-fill"></i> Product Suite</div>
            <h1>Software built for<br><span>every dimension</span> of your business</h1>
            <p>Seven purpose-built platforms — from finance and HR to hospitality and events — designed to simplify operations and drive measurable outcomes.</p>
            <div class="pp-stats">
                <div class="pp-stat"><span class="pp-stat-val">7</span><span class="pp-stat-lbl">Products</span></div>
                <div class="pp-stat"><span class="pp-stat-val">APAC+</span><span class="pp-stat-lbl">Coverage</span></div>
                <div class="pp-stat"><span class="pp-stat-val">Cloud</span><span class="pp-stat-lbl">& On-premise</span></div>
                <div class="pp-stat"><span class="pp-stat-val">API</span><span class="pp-stat-lbl">First architecture</span></div>
            </div>
        </div>
    </section>

    <!-- Filter bar -->
    <div class="pp-filter">
        <div class="container">
            <div class="pp-filter-inner">
                <button class="pp-filter-btn active" onclick="ppFilter('all',this)">All Products</button>
                <button class="pp-filter-btn" onclick="ppFilter('finance',this)"><i class="bi bi-receipt-cutoff"></i> Finance</button>
                <button class="pp-filter-btn" onclick="ppFilter('operations',this)"><i class="bi bi-gear"></i> Operations</button>
                <button class="pp-filter-btn" onclick="ppFilter('hospitality',this)"><i class="bi bi-shop"></i> Hospitality</button>
                <button class="pp-filter-btn" onclick="ppFilter('people',this)"><i class="bi bi-people"></i> People</button>
            </div>
        </div>
    </div>

    <!-- Products grid -->
    <section class="pp-grid-section">
        <div class="container">
            <div class="pp-grid" id="ppGrid">

                <!-- XIMS -->
                <a class="pp-card pp-blue" data-cat="finance" href="xims-invoice-management-system.php" data-aos="fade-up" data-aos-delay="0">
                    <div class="pp-card-img">
                        <img src="assets2/images/xims-invoice-management-system/xims-1.jpg" alt="XIMS">
                        <div class="pp-card-img-overlay"></div>
                        <span class="pp-card-cat-pill"><i class="bi bi-receipt-cutoff"></i> Finance</span>
                    </div>
                    <div class="pp-card-body">
                        <div class="pp-card-top">
                            <div class="pp-card-icon"><i class="bi bi-receipt-cutoff"></i></div>
                            <div class="pp-card-title">
                                <div class="pp-card-name">XIMS</div>
                                <div class="pp-card-fullname">Invoice Management System</div>
                            </div>
                        </div>
                        <p class="pp-card-tagline">"Cut invoice processing time from days to hours."</p>
                        <div class="pp-card-feats">
                            <span class="pp-card-feat"><i class="bi bi-check-circle-fill"></i> Quotes & Approvals</span>
                            <span class="pp-card-feat"><i class="bi bi-check-circle-fill"></i> GST / VAT Compliant</span>
                            <span class="pp-card-feat"><i class="bi bi-check-circle-fill"></i> Payment Tracking</span>
                            <span class="pp-card-feat"><i class="bi bi-check-circle-fill"></i> Auto Reminders</span>
                        </div>
                    </div>
                    <div class="pp-card-footer">
                        <span class="pp-card-audience"><i class="bi bi-people"></i> Finance & Accounting</span>
                        <span class="pp-card-cta">Explore <i class="bi bi-arrow-right"></i></span>
                    </div>
                </a>

                <!-- XT-VMS -->
                <a class="pp-card pp-green" data-cat="operations" href="xt-vms-visitor-management-system.php" data-aos="fade-up" data-aos-delay="50">
                    <div class="pp-card-img" style="background:#f05a5b;">
                        <img src="assets2/images/xt-vms-visitor-management-system/services-7.jpeg" alt="XT-VMS" style="object-fit:contain;">
                        <div class="pp-card-img-overlay"></div>
                        <span class="pp-card-cat-pill"><i class="bi bi-person-check"></i> Operations</span>
                    </div>
                    <div class="pp-card-body">
                        <div class="pp-card-top">
                            <div class="pp-card-icon"><i class="bi bi-person-check-fill"></i></div>
                            <div class="pp-card-title">
                                <div class="pp-card-name">XT-VMS</div>
                                <div class="pp-card-fullname">Visitor Management System</div>
                            </div>
                        </div>
                        <p class="pp-card-tagline">"Replace paper registers with a smart, secure digital system."</p>
                        <div class="pp-card-feats">
                            <span class="pp-card-feat"><i class="bi bi-check-circle-fill"></i> QR Pre-registration</span>
                            <span class="pp-card-feat"><i class="bi bi-check-circle-fill"></i> Instant Host Alerts</span>
                            <span class="pp-card-feat"><i class="bi bi-check-circle-fill"></i> Watchlist Screening</span>
                            <span class="pp-card-feat"><i class="bi bi-check-circle-fill"></i> Multi-location</span>
                        </div>
                    </div>
                    <div class="pp-card-footer">
                        <span class="pp-card-audience"><i class="bi bi-building"></i> Corporate Offices</span>
                        <span class="pp-card-cta">Explore <i class="bi bi-arrow-right"></i></span>
                    </div>
                </a>

                <!-- Foodways -->
                <a class="pp-card pp-amber" data-cat="hospitality" href="foodways.php" data-aos="fade-up" data-aos-delay="100">
                    <div class="pp-card-img">
                        <img src="assets2/images/Foodways/Foodways Medium.jpeg" alt="Foodways">
                        <div class="pp-card-img-overlay"></div>
                        <span class="pp-card-cat-pill"><i class="bi bi-truck"></i> Hospitality</span>
                    </div>
                    <div class="pp-card-body">
                        <div class="pp-card-top">
                            <div class="pp-card-icon"><i class="bi bi-truck"></i></div>
                            <div class="pp-card-title">
                                <div class="pp-card-name">Foodways</div>
                                <div class="pp-card-fullname">Food Distribution Platform</div>
                            </div>
                        </div>
                        <p class="pp-card-tagline">"Smart Supply. Fresh Future."</p>
                        <div class="pp-card-feats">
                            <span class="pp-card-feat"><i class="bi bi-check-circle-fill"></i> Supplier Management</span>
                            <span class="pp-card-feat"><i class="bi bi-check-circle-fill"></i> Order Processing</span>
                            <span class="pp-card-feat"><i class="bi bi-check-circle-fill"></i> Invoice & Payments</span>
                            <span class="pp-card-feat"><i class="bi bi-check-circle-fill"></i> Delivery Tracking</span>
                        </div>
                    </div>
                    <div class="pp-card-footer">
                        <span class="pp-card-audience"><i class="bi bi-shop"></i> F&B Distributors</span>
                        <span class="pp-card-cta">Explore <i class="bi bi-arrow-right"></i></span>
                    </div>
                </a>

                <!-- Salon -->
                <a class="pp-card pp-pink" data-cat="hospitality" href="salon-management-system.php" data-aos="fade-up" data-aos-delay="150">
                    <div class="pp-card-img">
                        <img src="assets2/images/salon-management-system/1.png" alt="Salon Management">
                        <div class="pp-card-img-overlay"></div>
                        <span class="pp-card-cat-pill"><i class="bi bi-scissors"></i> Hospitality</span>
                    </div>
                    <div class="pp-card-body">
                        <div class="pp-card-top">
                            <div class="pp-card-icon"><i class="bi bi-scissors"></i></div>
                            <div class="pp-card-title">
                                <div class="pp-card-name">Salon Management</div>
                                <div class="pp-card-fullname">Salon & Spa Management System</div>
                            </div>
                        </div>
                        <p class="pp-card-tagline">"Fill your appointment calendar on autopilot."</p>
                        <div class="pp-card-feats">
                            <span class="pp-card-feat"><i class="bi bi-check-circle-fill"></i> 24/7 Online Booking</span>
                            <span class="pp-card-feat"><i class="bi bi-check-circle-fill"></i> Stylist Scheduling</span>
                            <span class="pp-card-feat"><i class="bi bi-check-circle-fill"></i> Loyalty Programmes</span>
                            <span class="pp-card-feat"><i class="bi bi-check-circle-fill"></i> Revenue Analytics</span>
                        </div>
                    </div>
                    <div class="pp-card-footer">
                        <span class="pp-card-audience"><i class="bi bi-heart"></i> Salons & Wellness</span>
                        <span class="pp-card-cta">Explore <i class="bi bi-arrow-right"></i></span>
                    </div>
                </a>

                <!-- xEvent -->
                <a class="pp-card pp-purple" data-cat="operations" href="xevent.php" data-aos="fade-up" data-aos-delay="200">
                    <div class="pp-card-img">
                        <img src="assets2/images/xevent/services-12.jpg" alt="xEvent">
                        <div class="pp-card-img-overlay"></div>
                        <span class="pp-card-cat-pill"><i class="bi bi-calendar-event"></i> Operations</span>
                    </div>
                    <div class="pp-card-body">
                        <div class="pp-card-top">
                            <div class="pp-card-icon"><i class="bi bi-calendar-event-fill"></i></div>
                            <div class="pp-card-title">
                                <div class="pp-card-name">xEvent</div>
                                <div class="pp-card-fullname">Event Management Platform</div>
                            </div>
                        </div>
                        <p class="pp-card-tagline">"Manage thousands of attendees without the spreadsheet chaos."</p>
                        <div class="pp-card-feats">
                            <span class="pp-card-feat"><i class="bi bi-check-circle-fill"></i> Online Registration</span>
                            <span class="pp-card-feat"><i class="bi bi-check-circle-fill"></i> QR Check-in</span>
                            <span class="pp-card-feat"><i class="bi bi-check-circle-fill"></i> Ticketing & Payments</span>
                            <span class="pp-card-feat"><i class="bi bi-check-circle-fill"></i> Live Dashboards</span>
                        </div>
                    </div>
                    <div class="pp-card-footer">
                        <span class="pp-card-audience"><i class="bi bi-mic"></i> Event Organisers</span>
                        <span class="pp-card-cta">Explore <i class="bi bi-arrow-right"></i></span>
                    </div>
                </a>

                <!-- xHRMS -->
                <a class="pp-card pp-teal" data-cat="people" href="human-resource-management-system.php" data-aos="fade-up" data-aos-delay="250">
                    <div class="pp-card-img">
                        <img src="assets2/images/human-resource-management-system/xhrms-1.jpg" alt="xHRMS">
                        <div class="pp-card-img-overlay"></div>
                        <span class="pp-card-cat-pill"><i class="bi bi-people"></i> People</span>
                    </div>
                    <div class="pp-card-body">
                        <div class="pp-card-top">
                            <div class="pp-card-icon"><i class="bi bi-people-fill"></i></div>
                            <div class="pp-card-title">
                                <div class="pp-card-name">xHRMS</div>
                                <div class="pp-card-fullname">Human Resource Management System</div>
                            </div>
                        </div>
                        <p class="pp-card-tagline">"Give your HR team time back — automate the routine."</p>
                        <div class="pp-card-feats">
                            <span class="pp-card-feat"><i class="bi bi-check-circle-fill"></i> Payroll Automation</span>
                            <span class="pp-card-feat"><i class="bi bi-check-circle-fill"></i> Leave Management</span>
                            <span class="pp-card-feat"><i class="bi bi-check-circle-fill"></i> Performance Reviews</span>
                            <span class="pp-card-feat"><i class="bi bi-check-circle-fill"></i> Employee Self-Service</span>
                        </div>
                    </div>
                    <div class="pp-card-footer">
                        <span class="pp-card-audience"><i class="bi bi-briefcase"></i> HR Departments</span>
                        <span class="pp-card-cta">Explore <i class="bi bi-arrow-right"></i></span>
                    </div>
                </a>

                <!-- Sports Academy -->
                <a class="pp-card pp-navy" data-cat="operations" href="sports-academy-management-system.php" data-aos="fade-up" data-aos-delay="300">
                    <div class="pp-card-img">
                        <img src="assets2/images/sports-academy-management-system/risingstarscricket-1.jpg" alt="Sports Academy">
                        <div class="pp-card-img-overlay"></div>
                        <span class="pp-card-cat-pill"><i class="bi bi-trophy"></i> Operations</span>
                    </div>
                    <div class="pp-card-body">
                        <div class="pp-card-top">
                            <div class="pp-card-icon"><i class="bi bi-trophy-fill"></i></div>
                            <div class="pp-card-title">
                                <div class="pp-card-name">Sports Academy</div>
                                <div class="pp-card-fullname">Academy Management System</div>
                            </div>
                        </div>
                        <p class="pp-card-tagline">"Give coaches more court time, less admin time."</p>
                        <div class="pp-card-feats">
                            <span class="pp-card-feat"><i class="bi bi-check-circle-fill"></i> Athlete Enrolment</span>
                            <span class="pp-card-feat"><i class="bi bi-check-circle-fill"></i> Batch Scheduling</span>
                            <span class="pp-card-feat"><i class="bi bi-check-circle-fill"></i> Fee Collection</span>
                            <span class="pp-card-feat"><i class="bi bi-check-circle-fill"></i> Performance Tracking</span>
                        </div>
                    </div>
                    <div class="pp-card-footer">
                        <span class="pp-card-audience"><i class="bi bi-award"></i> Academies & Clubs</span>
                        <span class="pp-card-cta">Explore <i class="bi bi-arrow-right"></i></span>
                    </div>
                </a>

            </div><!-- /pp-grid -->

            <!-- CTA -->
            <div class="pp-cta mt-5" data-aos="fade-up">
                <div>
                    <h3>Not sure which product fits your needs?</h3>
                    <p>Our solutions consultants will map your business requirements to the right platform — or design a custom combination that works for your operations.</p>
                </div>
                <div class="pp-cta-btns">
                    <a href="contact-us.php" class="btn-solid">Book a Demo <i class="bi bi-arrow-right"></i></a>
                    <a href="contact-us.php" class="btn-outline">Talk to Sales</a>
                </div>
            </div>

        </div>
    </section>

</main>

<script>
function ppFilter(cat, btn) {
    document.querySelectorAll('.pp-filter-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    document.querySelectorAll('#ppGrid .pp-card').forEach(c => {
        c.classList.toggle('pp-hidden', cat !== 'all' && c.dataset.cat !== cat);
    });
}
</script>

<?php include 'includes/footer.php'; ?>
