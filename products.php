<?php include 'includes/header.php'; ?>

<style>
/* ── Products summary page ── */
.psum-hero {
    background: linear-gradient(135deg, #0B2D5E 0%, #185FA5 100%);
    padding: 4rem 0 3.5rem; text-align: center; color: #fff; position: relative; overflow: hidden;
}
.psum-hero::before {
    content: ''; position: absolute; inset: 0;
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23ffffff' fill-opacity='0.04'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/svg%3E");
}
.psum-hero-inner { position: relative; z-index: 1; }
.psum-eyebrow {
    display: inline-flex; align-items: center; gap: 6px;
    background: rgba(255,255,255,.12); border: 1px solid rgba(255,255,255,.2);
    color: #fff; font-size: 11px; font-weight: 600; letter-spacing: .1em;
    text-transform: uppercase; padding: 5px 16px; border-radius: 100px; margin-bottom: 1.25rem;
}
.psum-hero h1 {
    font-size: clamp(28px, 4vw, 44px); font-weight: 700; line-height: 1.15;
    margin-bottom: .75rem; letter-spacing: -.02em;
}
.psum-hero h1 span { color: #0EA5B0; }
.psum-hero p { font-size: 16px; color: rgba(255,255,255,.75); max-width: 500px; margin: 0 auto 2.5rem; }

.psum-stats {
    display: inline-flex; background: rgba(255,255,255,.1);
    border: 1px solid rgba(255,255,255,.2); border-radius: 12px; overflow: hidden;
}
.psum-stat { padding: .8rem 1.8rem; border-right: 1px solid rgba(255,255,255,.15); text-align: center; }
.psum-stat:last-child { border-right: none; }
.psum-stat strong { display: block; font-size: 20px; font-weight: 700; color: #fff; }
.psum-stat span { font-size: 11px; color: rgba(255,255,255,.6); }

/* Filter */
.psum-filter {
    background: #fff; border-bottom: 1px solid #E5E7EB;
    padding: 1rem 0; position: sticky; top: 72px; z-index: 10;
    box-shadow: 0 2px 8px rgba(0,0,0,.05);
}
.psum-filter-row { display: flex; align-items: center; justify-content: center; gap: 8px; flex-wrap: wrap; }
.psum-fbtn {
    font-size: 13px; font-weight: 500; padding: 7px 18px;
    border-radius: 100px; border: 1.5px solid #E5E7EB;
    background: #fff; color: #4B5563; cursor: pointer; transition: all .18s;
}
.psum-fbtn:hover { border-color: #185FA5; color: #185FA5; }
.psum-fbtn.active { background: #0B2D5E; color: #fff; border-color: #0B2D5E; }

/* Grid */
.psum-section { padding: 3rem 0 4rem; background: #F8FAFC; }
.psum-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(330px, 1fr));
    gap: 20px;
}

/* Card */
.pcard {
    background: #fff; border-radius: 14px; border: 1px solid #E5E7EB;
    display: flex; flex-direction: column;
    text-decoration: none; color: inherit;
    transition: box-shadow .22s, transform .22s;
    overflow: hidden;
}
.pcard:hover { box-shadow: 0 10px 36px rgba(11,45,94,.11); transform: translateY(-3px); color: inherit; }
.pcard.pcard-hidden { display: none; }

/* Coloured left stripe */
.pcard-stripe { height: 5px; width: 100%; }

.pcard-body { padding: 1.3rem 1.4rem; flex: 1; display: flex; flex-direction: column; gap: 10px; }

/* Header row: icon + name + badge */
.pcard-head { display: flex; align-items: center; gap: 12px; }
.pcard-icon {
    width: 44px; height: 44px; border-radius: 11px; flex-shrink: 0;
    display: flex; align-items: center; justify-content: center; font-size: 20px;
}
.pcard-info { flex: 1; }
.pcard-name { font-size: 17px; font-weight: 700; color: #0B2D5E; line-height: 1.1; }
.pcard-sub  { font-size: 12px; color: #9CA3AF; margin-top: 1px; }
.pcard-badge {
    font-size: 10px; font-weight: 700; letter-spacing: .07em; text-transform: uppercase;
    padding: 3px 10px; border-radius: 100px;
}

/* Description */
.pcard-desc { font-size: 13.5px; color: #4B5563; line-height: 1.6; }

/* Features — compact row */
.pcard-feats { display: flex; flex-wrap: wrap; gap: 5px; }
.pcard-feat {
    font-size: 11.5px; color: #374151;
    background: #F3F4F6; border: 1px solid #E5E7EB;
    padding: 3px 9px; border-radius: 5px;
}

/* Action row */
.pcard-actions {
    display: flex; gap: 8px; align-items: center; flex-wrap: wrap;
    padding: 11px 1.4rem 1.2rem;
    border-top: 1px solid #F3F4F6;
}
.pcard-learn {
    font-size: 13px; font-weight: 600; color: #fff;
    padding: 8px 18px; border-radius: 8px;
    display: inline-flex; align-items: center; gap: 6px;
    text-decoration: none; transition: opacity .2s; flex: 1; justify-content: center;
}
.pcard-learn:hover { opacity: .85; color: #fff; }
.pcard-dl {
    font-size: 12.5px; font-weight: 500; color: #4B5563;
    padding: 8px 14px; border-radius: 8px;
    display: inline-flex; align-items: center; gap: 5px;
    text-decoration: none; border: 1.5px solid #E5E7EB;
    background: #fff; transition: all .18s; white-space: nowrap;
}
.pcard-dl:hover { background: #F3F4F6; border-color: #CBD5E1; color: #1a1a2e; }

/* Colour themes */
.pc-blue  .pcard-stripe { background: linear-gradient(90deg,#185FA5,#378ADD); }
.pc-blue  .pcard-icon   { background:#E6F1FB; color:#185FA5; }
.pc-blue  .pcard-badge  { background:#E6F1FB; color:#185FA5; }
.pc-blue  .pcard-learn  { background:#185FA5; }

.pc-green .pcard-stripe { background: linear-gradient(90deg,#3B6D11,#639922); }
.pc-green .pcard-icon   { background:#EAF3DE; color:#3B6D11; }
.pc-green .pcard-badge  { background:#EAF3DE; color:#3B6D11; }
.pc-green .pcard-learn  { background:#3B6D11; }

.pc-amber .pcard-stripe { background: linear-gradient(90deg,#854F0B,#BA7517); }
.pc-amber .pcard-icon   { background:#FAEEDA; color:#854F0B; }
.pc-amber .pcard-badge  { background:#FAEEDA; color:#854F0B; }
.pc-amber .pcard-learn  { background:#854F0B; }

.pc-pink  .pcard-stripe { background: linear-gradient(90deg,#993556,#D4537E); }
.pc-pink  .pcard-icon   { background:#FBEAF0; color:#993556; }
.pc-pink  .pcard-badge  { background:#FBEAF0; color:#993556; }
.pc-pink  .pcard-learn  { background:#993556; }

.pc-purple .pcard-stripe { background: linear-gradient(90deg,#534AB7,#7F77DD); }
.pc-purple .pcard-icon   { background:#EEEDFE; color:#534AB7; }
.pc-purple .pcard-badge  { background:#EEEDFE; color:#534AB7; }
.pc-purple .pcard-learn  { background:#534AB7; }

.pc-teal  .pcard-stripe { background: linear-gradient(90deg,#0F6E56,#1D9E75); }
.pc-teal  .pcard-icon   { background:#E1F5EE; color:#0F6E56; }
.pc-teal  .pcard-badge  { background:#E1F5EE; color:#0F6E56; }
.pc-teal  .pcard-learn  { background:#0F6E56; }

.pc-navy  .pcard-stripe { background: linear-gradient(90deg,#0B2D5E,#185FA5); }
.pc-navy  .pcard-icon   { background:#E6F1FB; color:#0B2D5E; }
.pc-navy  .pcard-badge  { background:#E6F1FB; color:#0B2D5E; }
.pc-navy  .pcard-learn  { background:#0B2D5E; }

/* CTA banner */
.psum-cta {
    background: linear-gradient(135deg,#0B2D5E,#185FA5); border-radius: 18px;
    padding: 3rem 2.5rem; display: flex; align-items: center;
    justify-content: space-between; gap: 2rem; flex-wrap: wrap; margin-bottom: 3rem;
}
.psum-cta h3 { font-size: 22px; font-weight: 700; color: #fff; margin-bottom: 6px; }
.psum-cta p  { font-size: 14px; color: rgba(255,255,255,.7); max-width: 420px; line-height: 1.6; }
.psum-cta-btns { display: flex; gap: 10px; flex-wrap: wrap; }
.psum-cta-btns a {
    font-size: 14px; font-weight: 600; padding: 12px 24px;
    border-radius: 9px; text-decoration: none; display: inline-flex;
    align-items: center; gap: 7px; transition: opacity .2s;
}
.psum-cta-btns a:hover { opacity: .85; }
.psum-cta-btns .btn-s { background: #0EA5B0; color: #fff; }
.psum-cta-btns .btn-g { background: rgba(255,255,255,.12); color: #fff; border: 1.5px solid rgba(255,255,255,.25); }

@media (max-width: 768px) {
    .psum-stats { flex-direction: column; width: 100%; max-width: 260px; }
    .psum-stat  { border-right: none; border-bottom: 1px solid rgba(255,255,255,.15); }
    .psum-stat:last-child { border-bottom: none; }
    .psum-grid  { grid-template-columns: 1fr; }
    .psum-cta   { padding: 2rem 1.25rem; }
    .psum-filter { top: 60px; }
    .pcard-learn { flex: unset; }
}
</style>

<main class="main">

    <!-- Hero -->
    <section class="psum-hero">
        <div class="container psum-hero-inner" data-aos="fade-up">
            <div class="psum-eyebrow"><i class="bi bi-grid-3x3-gap-fill"></i> Product Suite</div>
            <h1>Purpose-built software for<br><span>every part of your business</span></h1>
            <p>Seven platforms, one partner. Download a data sheet for any product to explore full feature details.</p>
            <div class="psum-stats">
                <div class="psum-stat"><strong>7</strong><span>Products</span></div>
                <div class="psum-stat"><strong>APAC+</strong><span>Coverage</span></div>
                <div class="psum-stat"><strong>Cloud</strong><span>& On-premise</span></div>
                <div class="psum-stat"><strong>API</strong><span>First</span></div>
            </div>
        </div>
    </section>

    <!-- Filter -->
    <div class="psum-filter">
        <div class="container">
            <div class="psum-filter-row">
                <button class="psum-fbtn active" onclick="psFilter('all',this)">All</button>
                <button class="psum-fbtn" onclick="psFilter('finance',this)"><i class="bi bi-receipt-cutoff"></i> Finance</button>
                <button class="psum-fbtn" onclick="psFilter('operations',this)"><i class="bi bi-gear"></i> Operations</button>
                <button class="psum-fbtn" onclick="psFilter('hospitality',this)"><i class="bi bi-shop"></i> Hospitality</button>
                <button class="psum-fbtn" onclick="psFilter('people',this)"><i class="bi bi-people"></i> People</button>
            </div>
        </div>
    </div>

    <!-- Grid -->
    <section class="psum-section">
        <div class="container">
            <div class="psum-grid" id="psGrid">

                <?php
                $products = [
                    [
                        'color'    => 'pc-blue',
                        'cat'      => 'finance',
                        'icon'     => 'bi-receipt-cutoff',
                        'name'     => 'XIMS',
                        'fullname' => 'Invoice Management System',
                        'badge'    => 'Finance',
                        'desc'     => 'End-to-end invoice lifecycle — quotes, approvals, payments, and automated reminders in one platform.',
                        'feats'    => ['Quotes & Approvals','GST / VAT Compliant','Payment Tracking','Auto Reminders','Audit Trail'],
                        'link'     => 'xims-invoice-management-system.php',
                        'pdf'      => 'assets/datasheets/xims-datasheet.pdf',
                    ],
                    [
                        'color'    => 'pc-green',
                        'cat'      => 'operations',
                        'icon'     => 'bi-person-check-fill',
                        'name'     => 'XT-VMS',
                        'fullname' => 'Visitor Management System',
                        'badge'    => 'Operations',
                        'desc'     => 'Paperless visitor check-ins with QR pre-registration, instant host alerts, watchlist screening, and multi-site support.',
                        'feats'    => ['QR Pre-registration','Host Notifications','Watchlist Screening','Badge Printing','Multi-location'],
                        'link'     => 'xt-vms-visitor-management-system.php',
                        'pdf'      => 'assets/datasheets/xt-vms-datasheet.pdf',
                    ],
                    [
                        'color'    => 'pc-amber',
                        'cat'      => 'hospitality',
                        'icon'     => 'bi-truck',
                        'name'     => 'Foodways',
                        'fullname' => 'Food Distribution Platform',
                        'badge'    => 'Hospitality',
                        'desc'     => 'B2B food supply platform connecting suppliers, distributors and buyers with streamlined ordering and logistics.',
                        'feats'    => ['Supplier Management','Order Processing','Invoice & Payments','Delivery Tracking','Analytics'],
                        'link'     => 'foodways.php',
                        'pdf'      => 'assets/datasheets/foodways-datasheet.pdf',
                    ],
                    [
                        'color'    => 'pc-pink',
                        'cat'      => 'hospitality',
                        'icon'     => 'bi-scissors',
                        'name'     => 'Salon Management',
                        'fullname' => 'Salon & Spa Management System',
                        'badge'    => 'Hospitality',
                        'desc'     => '24/7 online booking, stylist scheduling, POS, loyalty programmes, and revenue analytics for salons and spas.',
                        'feats'    => ['Online Booking','Stylist Scheduling','Membership Plans','SMS Reminders','Revenue Reports'],
                        'link'     => 'salon-management-system.php',
                        'pdf'      => 'assets/datasheets/salon-datasheet.pdf',
                    ],
                    [
                        'color'    => 'pc-purple',
                        'cat'      => 'operations',
                        'icon'     => 'bi-calendar-event-fill',
                        'name'     => 'xEvent',
                        'fullname' => 'Event Management Platform',
                        'badge'    => 'Operations',
                        'desc'     => 'End-to-end event management — registration, ticketing, QR check-in, and post-event analytics.',
                        'feats'    => ['Online Registration','Ticketing & Payments','QR Check-in','Speaker Management','Live Dashboards'],
                        'link'     => 'xevent.php',
                        'pdf'      => 'assets/datasheets/xevent-datasheet.pdf',
                    ],
                    [
                        'color'    => 'pc-teal',
                        'cat'      => 'people',
                        'icon'     => 'bi-people-fill',
                        'name'     => 'xHRMS',
                        'fullname' => 'Human Resource Management System',
                        'badge'    => 'People',
                        'desc'     => 'Full-spectrum HR — recruitment, onboarding, payroll, leave, performance reviews, and compliance in one place.',
                        'feats'    => ['Payroll Automation','Leave Management','Performance Reviews','Compliance Tracking','Self-Service Portal'],
                        'link'     => 'human-resource-management-system.php',
                        'pdf'      => 'assets/datasheets/xhrms-datasheet.pdf',
                    ],
                    [
                        'color'    => 'pc-navy',
                        'cat'      => 'operations',
                        'icon'     => 'bi-trophy-fill',
                        'name'     => 'Sports Academy',
                        'fullname' => 'Academy Management System',
                        'badge'    => 'Operations',
                        'desc'     => 'Athlete enrolments, batch scheduling, coach assignments, fee collection, and performance tracking for academies.',
                        'feats'    => ['Athlete Enrolment','Batch Scheduling','Fee Collection','Performance Tracking','Coach Portal'],
                        'link'     => 'sports-academy-management-system.php',
                        'pdf'      => 'assets/datasheets/sports-academy-datasheet.pdf',
                    ],
                ];

                foreach ($products as $i => $p):
                    $delay = $i * 50;
                    $pdfExists = file_exists($p['pdf']);
                ?>
                <div class="pcard <?= $p['color'] ?>" data-cat="<?= $p['cat'] ?>" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
                    <div class="pcard-stripe"></div>
                    <div class="pcard-body">
                        <div class="pcard-head">
                            <div class="pcard-icon"><i class="bi <?= $p['icon'] ?>"></i></div>
                            <div class="pcard-info">
                                <div class="pcard-name"><?= $p['name'] ?></div>
                                <div class="pcard-sub"><?= $p['fullname'] ?></div>
                            </div>
                            <span class="pcard-badge"><?= $p['badge'] ?></span>
                        </div>
                        <p class="pcard-desc"><?= $p['desc'] ?></p>
                        <div class="pcard-feats">
                            <?php foreach ($p['feats'] as $f): ?>
                            <span class="pcard-feat"><?= $f ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="pcard-actions">
                        <a href="<?= $p['link'] ?>" class="pcard-learn">
                            Learn More <i class="bi bi-arrow-right"></i>
                        </a>
                        <?php if ($pdfExists): ?>
                        <a href="<?= $p['pdf'] ?>" class="pcard-dl" download>
                            <i class="bi bi-download"></i> Data Sheet
                        </a>
                        <?php else: ?>
                        <a href="contact-us.php?req=datasheet&product=<?= urlencode($p['name']) ?>" class="pcard-dl" title="Request data sheet">
                            <i class="bi bi-file-earmark-pdf"></i> Request Sheet
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endforeach; ?>

            </div><!-- /psum-grid -->

            <!-- CTA -->
            <div class="psum-cta mt-5" data-aos="fade-up">
                <div>
                    <h3>Need all data sheets in one pack?</h3>
                    <p>Request our full product portfolio brochure or speak with a solutions consultant to find the right fit for your organisation.</p>
                </div>
                <div class="psum-cta-btns">
                    <a href="contact-us.php" class="btn-s"><i class="bi bi-envelope"></i> Request Brochure</a>
                    <a href="contact-us.php" class="btn-g">Talk to Sales</a>
                </div>
            </div>

        </div>
    </section>

</main>

<script>
function psFilter(cat, btn) {
    document.querySelectorAll('.psum-fbtn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    document.querySelectorAll('#psGrid .pcard').forEach(c => {
        c.classList.toggle('pcard-hidden', cat !== 'all' && c.dataset.cat !== cat);
    });
}
</script>

<?php include 'includes/footer.php'; ?>
