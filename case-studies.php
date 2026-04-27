<?php include 'includes/header.php'; ?>

<main class="main">

    <section class="inner-banner text-center">
        <div class="container content">
            <p class="section-subtitle">Case Studies</p>
            <h1>Client Success Stories</h1>
            <p>Explore our detailed case studies showcasing successful implementations across industries.</p>
        </div>
    </section>

    <section class="case-studies-page section pt-0">
        <div class="container">
            <div class="page-overview case-overview" data-aos="fade-up" data-aos-duration="1000">
                <div class="overview-copy">
                    <span class="section-subtitle">Outcome Library</span>
                    <h2>Evidence-led stories for complex digital work.</h2>
                    <p>Explore concise delivery stories shaped around the business challenge, the intervention, measurable outcomes and the capabilities applied. Start with a featured engagement or use the library to compare related challenges.</p>
                    <div class="case-overview-actions">
                        <a href="#caseStudyTabs" class="btn btn-primary">Browse library</a>
                        <a href="contact-us.php" class="btn btn-outline-primary">Discuss Project</a>
                    </div>
                </div>
                <div class="overview-stats">
                    <div class="overview-stat">
                        <strong>32</strong>
                        <span>engagement references</span>
                    </div>
                    <div class="overview-stat">
                        <strong>12+</strong>
                        <span>industries covered</span>
                    </div>
                    <div class="overview-stat">
                        <strong>12</strong>
                        <span>detailed studies available</span>
                    </div>
                </div>
            </div>

            <div class="case-feature-grid" data-aos="fade-up" data-aos-duration="1000">
                <button class="case-feature-card active" type="button" data-case-target="cs07">
                    <span class="case-feature-media">
                        <img src="assets/images/anpr.jpg" alt="City-wide ANPR platform">
                    </span>
                    <span class="case-feature-content">
                        <span class="case-feature-ref">CS 07</span>
                        <span class="case-feature-industry">Public safety</span>
                        <strong>City-wide ANPR platform</strong>
                        <span>98%+ accuracy · &lt;3s alert time</span>
                    </span>
                </button>
                <button class="case-feature-card" type="button" data-case-target="cs08">
                    <span class="case-feature-media">
                        <img src="assets/images/case-study.png" alt="24/7 managed SOC operations">
                    </span>
                    <span class="case-feature-content">
                        <span class="case-feature-ref">CS 08</span>
                        <span class="case-feature-industry">Security operations</span>
                        <strong>24/7 managed SOC operations</strong>
                        <span>&lt;15 min MTTD · 85% alert reduction</span>
                    </span>
                </button>
                <a class="case-feature-card case-feature-contact" href="contact-us.php">
                    <span class="case-feature-content">
                        <span class="case-feature-ref">NEXT</span>
                        <span class="case-feature-industry">Your challenge</span>
                        <strong>Turn your operating problem into a measurable delivery plan.</strong>
                        <span>Book a discovery session</span>
                    </span>
                </a>
            </div>

            <div class="row g-4 case-workbench">
                <!-- Left Sidebar - Case Study Tabs -->
                <div class="col-lg-3 col-md-4 case-library-col">
                    <div class="case-study-panel-title">
                        <span>Case Library</span>
                        <strong>Find a relevant engagement</strong>
                    </div>
                    <div class="case-study-filter">
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-search"></i></span>
                            <input type="search" id="caseStudySearch" class="form-control" placeholder="Search reference, industry or title">
                        </div>
                    </div>
                    <div class="case-study-tabs">
                        <div class="nav flex-column nav-pills" id="caseStudyTabs" role="tablist">
                            <button class="nav-link" id="cs01-tab" data-bs-toggle="tab" data-bs-target="#cs01" type="button" role="tab">
                                <span class="case-ref">CS 01</span>
                                <span class="case-title">Corporate office automation</span>
                            </button>
                            <button class="nav-link" id="cs03-tab" data-bs-toggle="tab" data-bs-target="#cs03" type="button" role="tab">
                                <span class="case-ref">CS 03</span>
                                <span class="case-title">Government operations digitization</span>
                            </button>
                            <button class="nav-link" id="cs04-tab" data-bs-toggle="tab" data-bs-target="#cs04" type="button" role="tab">
                                <span class="case-ref">CS 04</span>
                                <span class="case-title">Managed SOC with SIEM</span>
                            </button>
                            <button class="nav-link" id="cs05-tab" data-bs-toggle="tab" data-bs-target="#cs05" type="button" role="tab">
                                <span class="case-ref">CS 05</span>
                                <span class="case-title">Retail POS integration</span>
                            </button>
                            <button class="nav-link" id="cs06-tab" data-bs-toggle="tab" data-bs-target="#cs06" type="button" role="tab">
                                <span class="case-ref">CS 06</span>
                                <span class="case-title">Educational facility security</span>
                            </button>
                            <button class="nav-link active" id="cs07-tab" data-bs-toggle="tab" data-bs-target="#cs07" type="button" role="tab">
                                <span class="case-ref">CS 07</span>
                                <span class="case-title">City-wide ANPR platform</span>
                            </button>
                            <button class="nav-link" id="cs08-tab" data-bs-toggle="tab" data-bs-target="#cs08" type="button" role="tab">
                                <span class="case-ref">CS 08</span>
                                <span class="case-title">24/7 SOC operations</span>
                            </button>
                            <button class="nav-link" id="cs09-tab" data-bs-toggle="tab" data-bs-target="#cs09" type="button" role="tab">
                                <span class="case-ref">CS 09</span>
                                <span class="case-title">Unified OSS/BSS platform</span>
                            </button>
                            <button class="nav-link" id="cs10-tab" data-bs-toggle="tab" data-bs-target="#cs10" type="button" role="tab">
                                <span class="case-ref">CS 10</span>
                                <span class="case-title">Salon management system</span>
                            </button>
                            <button class="nav-link" id="cs11-tab" data-bs-toggle="tab" data-bs-target="#cs11" type="button" role="tab">
                                <span class="case-ref">CS 11</span>
                                <span class="case-title">Time tracking & job costing</span>
                            </button>
                            <button class="nav-link" id="cs12-tab" data-bs-toggle="tab" data-bs-target="#cs12" type="button" role="tab">
                                <span class="case-ref">CS 12</span>
                                <span class="case-title">Sports academy platform</span>
                            </button>
                            <button class="nav-link" id="cs13-tab" data-bs-toggle="tab" data-bs-target="#cs13" type="button" role="tab">
                                <span class="case-ref">CS 13</span>
                                <span class="case-title">Digital visitor management</span>
                            </button>
                            <button class="nav-link" id="cs14-tab" data-bs-toggle="tab" data-bs-target="#cs14" type="button" role="tab">
                                <span class="case-ref">CS 14</span>
                                <span class="case-title">Invoice management platform</span>
                            </button>
                            <button class="nav-link" id="cs15-tab" data-bs-toggle="tab" data-bs-target="#cs15" type="button" role="tab">
                                <span class="case-ref">CS 15</span>
                                <span class="case-title">Healthcare visitor tracking</span>
                            </button>
                            <button class="nav-link" id="cs16-tab" data-bs-toggle="tab" data-bs-target="#cs16" type="button" role="tab">
                                <span class="case-ref">CS 16</span>
                                <span class="case-title">Community event publishing</span>
                            </button>
                            <button class="nav-link" id="cs17-tab" data-bs-toggle="tab" data-bs-target="#cs17" type="button" role="tab">
                                <span class="case-ref">CS 17</span>
                                <span class="case-title">Event management platform</span>
                            </button>
                            <button class="nav-link" id="cs18-tab" data-bs-toggle="tab" data-bs-target="#cs18" type="button" role="tab">
                                <span class="case-ref">CS 18</span>
                                <span class="case-title">Multi-supplier marketplace</span>
                            </button>
                            <button class="nav-link" id="cs19-tab" data-bs-toggle="tab" data-bs-target="#cs19" type="button" role="tab">
                                <span class="case-ref">CS 19</span>
                                <span class="case-title">Multi-site HRMS deployment</span>
                            </button>
                            <button class="nav-link" id="cs20-tab" data-bs-toggle="tab" data-bs-target="#cs20" type="button" role="tab">
                                <span class="case-ref">CS 20</span>
                                <span class="case-title">API-first integration layer</span>
                            </button>
                            <button class="nav-link" id="cs21-tab" data-bs-toggle="tab" data-bs-target="#cs21" type="button" role="tab">
                                <span class="case-ref">CS 21</span>
                                <span class="case-title">HORECA supply chain platform</span>
                            </button>
                            <button class="nav-link" id="cs22-tab" data-bs-toggle="tab" data-bs-target="#cs22" type="button" role="tab">
                                <span class="case-ref">CS 22</span>
                                <span class="case-title">Smart city surveillance</span>
                            </button>
                            <button class="nav-link" id="cs23-tab" data-bs-toggle="tab" data-bs-target="#cs23" type="button" role="tab">
                                <span class="case-ref">CS 23</span>
                                <span class="case-title">Bellfield College — education digital platform</span>
                            </button>
                            <button class="nav-link" id="cs24-tab" data-bs-toggle="tab" data-bs-target="#cs24" type="button" role="tab">
                                <span class="case-ref">CS 24</span>
                                <span class="case-title">Joyce — managed IT services</span>
                            </button>
                            <button class="nav-link" id="cs25-tab" data-bs-toggle="tab" data-bs-target="#cs25" type="button" role="tab">
                                <span class="case-ref">CS 25</span>
                                <span class="case-title">iConnect Visa — migration services platform</span>
                            </button>
                            <button class="nav-link" id="cs26-tab" data-bs-toggle="tab" data-bs-target="#cs26" type="button" role="tab">
                                <span class="case-ref">CS 26</span>
                                <span class="case-title">Pentacare — NDIS healthcare web presence</span>
                            </button>
                            <button class="nav-link" id="cs27-tab" data-bs-toggle="tab" data-bs-target="#cs27" type="button" role="tab">
                                <span class="case-ref">CS 27</span>
                                <span class="case-title">AZ Homes — real estate buyer's agent platform</span>
                            </button>
                            <button class="nav-link" id="cs28-tab" data-bs-toggle="tab" data-bs-target="#cs28" type="button" role="tab">
                                <span class="case-ref">CS 28</span>
                                <span class="case-title">Multiplex Renovations — property digital platform</span>
                            </button>
                            <button class="nav-link" id="cs29-tab" data-bs-toggle="tab" data-bs-target="#cs29" type="button" role="tab">
                                <span class="case-ref">CS 29</span>
                                <span class="case-title">SAFFA — film festival digital platform</span>
                            </button>
                            <button class="nav-link" id="cs30-tab" data-bs-toggle="tab" data-bs-target="#cs30" type="button" role="tab">
                                <span class="case-ref">CS 30</span>
                                <span class="case-title">Bellfield FC — sports club digital presence</span>
                            </button>
                            <button class="nav-link" id="cs31-tab" data-bs-toggle="tab" data-bs-target="#cs31" type="button" role="tab">
                                <span class="case-ref">CS 31</span>
                                <span class="case-title">NDISHero — NDIS provider platform</span>
                            </button>
                            <button class="nav-link" id="cs32-tab" data-bs-toggle="tab" data-bs-target="#cs32" type="button" role="tab">
                                <span class="case-ref">CS 32</span>
                                <span class="case-title">AGF — global community digital platform</span>
                            </button>
                        </div>
                        <div class="case-study-empty" id="caseStudyEmpty">No matching case studies found.</div>
                    </div>
                </div>

                <!-- Right Content - Case Study Details -->
                <div class="col-lg-9 col-md-8 case-detail-col">
                    <div class="case-study-content">
                        <div class="tab-content" id="caseStudyTabsContent">
                            <!-- CS 07 -->
                            <div class="tab-pane fade show active" id="cs07" role="tabpanel">
                                <div class="case-study-detail">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="case-studies.php">Case studies</a></li>
                                            <li class="breadcrumb-item active">CS 07</li>
                                        </ol>
                                    </nav>

                                    <div class="case-header">
                                        <div class="case-badges">
                                            <span class="badge industry-badge">Public safety</span>
                                            <span class="badge tier-badge">Mission-critical</span>
                                            <span class="case-reference">CS 07</span>
                                        </div>
                                        <h1 class="case-title">City with no way to detect stolen or dangerous vehicles in real time</h1>
                                        <p class="case-subtitle">City-wide ANPR platform with live police DB integration and command dashboard.</p>

                                        <div class="kpi-grid">
                                            <div class="kpi-item">
                                                <div class="kpi-value">98%+</div>
                                                <div class="kpi-label">accuracy</div>
                                            </div>
                                            <div class="kpi-item">
                                                <div class="kpi-value">&lt;3s</div>
                                                <div class="kpi-label">alert time</div>
                                            </div>
                                            <div class="kpi-item">
                                                <div class="kpi-value">500+</div>
                                                <div class="kpi-label">vehicles tracked daily</div>
                                            </div>
                                            <div class="kpi-item">
                                                <div class="kpi-value">24/7</div>
                                                <div class="kpi-label">monitoring</div>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="case-body">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <section class="case-section">
                                                    <h2>The problem</h2>
                                                    <blockquote class="problem-quote">
                                                        <p>The city lacked any automated system to detect stolen or dangerous vehicles in real time. Police relied on manual reports and citizen calls, often arriving too late to prevent crimes or accidents. There was no integration between traffic cameras and police databases, creating significant gaps in public safety monitoring.</p>
                                                    </blockquote>
                                                    <ul class="problem-list">
                                                        <li>No automated license plate recognition across the city</li>
                                                        <li>Manual cross-referencing with stolen vehicle databases</li>
                                                        <li>Limited camera coverage and integration</li>
                                                        <li>Delayed response times to vehicle-related incidents</li>
                                                    </ul>
                                                </section>

                                                <section class="case-section">
                                                    <h2>What we did</h2>
                                                    <h3>City-wide ANPR platform with live police DB integration and command dashboard.</h3>
                                                    <p>Implemented a comprehensive ANPR system covering major roads and intersections, with real-time integration to police databases for stolen and wanted vehicles.</p>
                                                    <ul class="solution-list">
                                                        <li>Deployed 200+ ANPR cameras across city infrastructure</li>
                                                        <li>Built real-time integration with national police databases</li>
                                                        <li>Created command center dashboard for instant alerts</li>
                                                        <li>Implemented automated incident response workflows</li>
                                                        <li>Added computer vision for vehicle type and color recognition</li>
                                                    </ul>
                                                </section>

                                                <section class="case-section">
                                                    <h2>Results</h2>
                                                    <h3>Measured outcomes</h3>
                                                    <p>The ANPR system has dramatically improved the city's ability to detect and respond to vehicle-related threats, significantly enhancing public safety.</p>
                                                    <div class="outcomes-grid">
                                                        <div class="outcome-item">
                                                            <div class="outcome-value">98%+</div>
                                                            <div class="outcome-label">detection accuracy</div>
                                                        </div>
                                                        <div class="outcome-item">
                                                            <div class="outcome-value">&lt;3 seconds</div>
                                                            <div class="outcome-label">average alert time</div>
                                                        </div>
                                                        <div class="outcome-item">
                                                            <div class="outcome-value">500+</div>
                                                            <div class="outcome-label">vehicles tracked daily</div>
                                                        </div>
                                                        <div class="outcome-item">
                                                            <div class="outcome-value">85%</div>
                                                            <div class="outcome-label">reduction in vehicle crimes</div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="case-sidebar">
                                                    <div class="engagement-card">
                                                        <h4>Engagement details</h4>
                                                        <div class="engagement-item">
                                                            <strong>Industry:</strong> Public safety
                                                        </div>
                                                        <div class="engagement-item">
                                                            <strong>Tier:</strong> Mission-critical
                                                        </div>
                                                        <div class="engagement-item">
                                                            <strong>Geography:</strong> Urban municipality
                                                        </div>
                                                        <div class="engagement-item">
                                                            <strong>Delivery model:</strong> Turnkey implementation
                                                        </div>
                                                        <div class="engagement-item">
                                                            <strong>Ongoing:</strong> Managed service
                                                        </div>
                                                    </div>

                                                    <div class="capabilities-section">
                                                        <h4>Capabilities applied</h4>
                                                        <div class="capability-tags">
                                                            <span class="tag">ANPR</span>
                                                            <span class="tag">Computer vision</span>
                                                            <span class="tag">Real-time integration</span>
                                                            <span class="tag">Smart city</span>
                                                            <span class="tag">Command center</span>
                                                        </div>
                                                    </div>

                                                    <div class="cta-sidebar">
                                                        <h4>Facing a similar challenge?</h4>
                                                        <p>Many cities struggle with vehicle-related public safety issues. Our ANPR and smart city solutions can help.</p>
                                                        <a href="contact-us.php" class="btn btn-primary">Book a discovery session</a>
                                                        <a href="contact-us.php" class="btn btn-outline-primary">Request capabilities briefing</a>
                                                    </div>

                                                    <div class="related-cases">
                                                        <h4>Related case studies</h4>
                                                        <div class="related-item">
                                                            <span class="related-ref">CS 22</span>
                                                            <span class="related-title">Smart city surveillance platform</span>
                                                            <span class="related-industry">Public safety</span>
                                                        </div>
                                                        <div class="related-item">
                                                            <span class="related-ref">CS 04</span>
                                                            <span class="related-title">Managed SOC with SIEM</span>
                                                            <span class="related-industry">Security</span>
                                                        </div>
                                                        <div class="related-item">
                                                            <span class="related-ref">CS 06</span>
                                                            <span class="related-title">Educational facility security</span>
                                                            <span class="related-industry">Education</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- CS 08 -->
                            <div class="tab-pane fade" id="cs08" role="tabpanel">
                                <div class="case-study-detail">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="case-studies.php">Case studies</a></li>
                                            <li class="breadcrumb-item active">CS 08</li>
                                        </ol>
                                    </nav>

                                    <div class="case-header">
                                        <div class="case-badges">
                                            <span class="badge industry-badge">Security</span>
                                            <span class="badge tier-badge">Mission-critical</span>
                                            <span class="case-reference">CS 08</span>
                                        </div>
                                        <h1 class="case-title">Manufacturing company with fragmented security monitoring across 15 sites</h1>
                                        <p class="case-subtitle">24/7 SOC operations with SIEM and playbook-driven incident response.</p>

                                        <div class="kpi-grid">
                                            <div class="kpi-item">
                                                <div class="kpi-value">15</div>
                                                <div class="kpi-label">sites monitored</div>
                                            </div>
                                            <div class="kpi-item">
                                                <div class="kpi-value">&lt;5 min</div>
                                                <div class="kpi-label">response time</div>
                                            </div>
                                            <div class="kpi-item">
                                                <div class="kpi-value">99.9%</div>
                                                <div class="kpi-label">uptime</div>
                                            </div>
                                            <div class="kpi-item">
                                                <div class="kpi-value">24/7</div>
                                                <div class="kpi-label">coverage</div>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="case-body">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <section class="case-section">
                                                    <h2>The problem</h2>
                                                    <blockquote class="problem-quote">
                                                        <p>The manufacturing company operated across 15 sites with no centralized security monitoring. Each location had different security systems and monitoring approaches, creating significant blind spots and inconsistent response times. Manual log reviews and disparate alert systems made it impossible to maintain comprehensive security oversight.</p>
                                                    </blockquote>
                                                    <ul class="problem-list">
                                                        <li>Fragmented security monitoring across multiple sites</li>
                                                        <li>No centralized SIEM or incident response platform</li>
                                                        <li>Inconsistent security policies and procedures</li>
                                                        <li>Limited 24/7 monitoring capabilities</li>
                                                    </ul>
                                                </section>

                                                <section class="case-section">
                                                    <h2>What we did</h2>
                                                    <h3>24/7 SOC operations with SIEM and playbook-driven incident response.</h3>
                                                    <p>Established a comprehensive Security Operations Center with unified monitoring, automated incident response, and standardized security procedures across all 15 manufacturing sites.</p>
                                                    <ul class="solution-list">
                                                        <li>Deployed enterprise SIEM platform with multi-site integration</li>
                                                        <li>Established 24/7 SOC with certified security analysts</li>
                                                        <li>Created automated incident response playbooks</li>
                                                        <li>Implemented unified security policies and procedures</li>
                                                        <li>Built real-time dashboards for executive visibility</li>
                                                    </ul>
                                                </section>

                                                <section class="case-section">
                                                    <h2>Results</h2>
                                                    <h3>Measured outcomes</h3>
                                                    <p>The SOC implementation has transformed the company's security posture, providing comprehensive monitoring and rapid incident response across all sites.</p>
                                                    <div class="outcomes-grid">
                                                        <div class="outcome-item">
                                                            <div class="outcome-value">15 sites</div>
                                                            <div class="outcome-label">unified monitoring</div>
                                                        </div>
                                                        <div class="outcome-item">
                                                            <div class="outcome-value">&lt;5 min</div>
                                                            <div class="outcome-label">average response time</div>
                                                        </div>
                                                        <div class="outcome-item">
                                                            <div class="outcome-value">99.9%</div>
                                                            <div class="outcome-label">system uptime</div>
                                                        </div>
                                                        <div class="outcome-item">
                                                            <div class="outcome-value">85%</div>
                                                            <div class="outcome-label">reduction in security incidents</div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="case-sidebar">
                                                    <div class="engagement-card">
                                                        <h4>Engagement details</h4>
                                                        <div class="engagement-item">
                                                            <strong>Industry:</strong> Manufacturing
                                                        </div>
                                                        <div class="engagement-item">
                                                            <strong>Tier:</strong> Mission-critical
                                                        </div>
                                                        <div class="engagement-item">
                                                            <strong>Geography:</strong> Multi-site national
                                                        </div>
                                                        <div class="engagement-item">
                                                            <strong>Delivery model:</strong> Managed service
                                                        </div>
                                                        <div class="engagement-item">
                                                            <strong>Ongoing:</strong> 24/7 SOC operations
                                                        </div>
                                                    </div>

                                                    <div class="capabilities-section">
                                                        <h4>Capabilities applied</h4>
                                                        <div class="capability-tags">
                                                            <span class="tag">SIEM</span>
                                                            <span class="tag">SOC operations</span>
                                                            <span class="tag">Incident response</span>
                                                            <span class="tag">Multi-site monitoring</span>
                                                            <span class="tag">Security automation</span>
                                                        </div>
                                                    </div>

                                                    <div class="cta-sidebar">
                                                        <h4>Facing a similar challenge?</h4>
                                                        <p>Multi-site organizations often struggle with fragmented security monitoring. Our SOC and SIEM solutions provide unified protection.</p>
                                                        <a href="contact-us.php" class="btn btn-primary">Book a discovery session</a>
                                                        <a href="contact-us.php" class="btn btn-outline-primary">Request capabilities briefing</a>
                                                    </div>

                                                    <div class="related-cases">
                                                        <h4>Related case studies</h4>
                                                        <div class="related-item">
                                                            <span class="related-ref">CS 04</span>
                                                            <span class="related-title">Managed SOC with SIEM</span>
                                                            <span class="related-industry">Security</span>
                                                        </div>
                                                        <div class="related-item">
                                                            <span class="related-ref">CS 22</span>
                                                            <span class="related-title">Smart city surveillance</span>
                                                            <span class="related-industry">Public safety</span>
                                                        </div>
                                                        <div class="related-item">
                                                            <span class="related-ref">CS 06</span>
                                                            <span class="related-title">Educational facility security</span>
                                                            <span class="related-industry">Education</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- CS 23 — Bellfield College -->
                            <div class="tab-pane fade" id="cs23" role="tabpanel">
                                <div class="case-study-detail">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="case-studies.php">Case studies</a></li>
                                            <li class="breadcrumb-item active">CS 23</li>
                                        </ol>
                                    </nav>
                                    <div class="case-header">
                                        <div class="case-badges">
                                            <span class="badge industry-badge">Education</span>
                                            <span class="badge tier-badge">Full-stack delivery</span>
                                            <span class="case-reference">CS 23</span>
                                        </div>
                                        <h1 class="case-title">Primary and high school lacking a scalable digital platform for students, parents, and staff</h1>
                                        <p class="case-subtitle">Custom Laravel CMS, HTML5 responsive website, and React.js applications for Bellfield College.</p>
                                        <div class="kpi-grid">
                                            <div class="kpi-item"><div class="kpi-value">1</div><div class="kpi-label">unified CMS platform</div></div>
                                            <div class="kpi-item"><div class="kpi-value">100%</div><div class="kpi-label">mobile responsive</div></div>
                                            <div class="kpi-item"><div class="kpi-value">React</div><div class="kpi-label">dynamic apps</div></div>
                                            <div class="kpi-item"><div class="kpi-value">E2E</div><div class="kpi-label">hosting &amp; domain</div></div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="case-body">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <section class="case-section">
                                                    <h2>The problem</h2>
                                                    <blockquote class="problem-quote">
                                                        <p>Bellfield College had an outdated web presence that was difficult for staff to update, didn't reflect the school's brand, and failed to serve as an effective communication channel for students and parents. The institution needed a modern, scalable platform that could grow with their programmes.</p>
                                                    </blockquote>
                                                    <ul class="problem-list">
                                                        <li>No content management capability for non-technical staff</li>
                                                        <li>Static pages not optimised for mobile devices</li>
                                                        <li>No dynamic applications for student or parent engagement</li>
                                                        <li>Inconsistent branding across digital and print materials</li>
                                                    </ul>
                                                </section>
                                                <section class="case-section">
                                                    <h2>What we did</h2>
                                                    <h3>End-to-end digital transformation for a K–12 educational institution.</h3>
                                                    <p>Xpansion delivered a comprehensive web and digital solution built on a custom Laravel CMS, providing Bellfield College with full editorial control and a future-proof architecture.</p>
                                                    <ul class="solution-list">
                                                        <li>Built a custom CMS with Laravel for scalable, secure content management</li>
                                                        <li>Developed a fully responsive HTML5 website with modern CSS and PHP</li>
                                                        <li>Integrated React.js dynamic web applications for enhanced user experience</li>
                                                        <li>Managed end-to-end hosting, domain registration, and ongoing maintenance</li>
                                                        <li>Designed bespoke artwork and branding to reinforce institutional identity</li>
                                                    </ul>
                                                </section>
                                                <section class="case-section">
                                                    <h2>Results</h2>
                                                    <div class="outcomes-grid">
                                                        <div class="outcome-item"><div class="outcome-value">Scalable CMS</div><div class="outcome-label">staff self-service updates</div></div>
                                                        <div class="outcome-item"><div class="outcome-value">Responsive</div><div class="outcome-label">across all devices</div></div>
                                                        <div class="outcome-item"><div class="outcome-value">React apps</div><div class="outcome-label">dynamic content delivery</div></div>
                                                        <div class="outcome-item"><div class="outcome-value">Unified brand</div><div class="outcome-label">digital &amp; print</div></div>
                                                    </div>
                                                </section>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="case-sidebar">
                                                    <div class="engagement-card">
                                                        <h4>Engagement details</h4>
                                                        <div class="engagement-item"><strong>Client:</strong> Bellfield College</div>
                                                        <div class="engagement-item"><strong>Industry:</strong> Education</div>
                                                        <div class="engagement-item"><strong>Geography:</strong> Sydney, NSW</div>
                                                        <div class="engagement-item"><strong>Delivery:</strong> Full-stack web development</div>
                                                        <div class="engagement-item"><strong>Ongoing:</strong> Hosting &amp; maintenance</div>
                                                    </div>
                                                    <div class="capabilities-section">
                                                        <h4>Capabilities applied</h4>
                                                        <div class="capability-tags">
                                                            <span class="tag">Laravel CMS</span>
                                                            <span class="tag">HTML5 / PHP</span>
                                                            <span class="tag">React.js</span>
                                                            <span class="tag">Web hosting</span>
                                                            <span class="tag">Brand design</span>
                                                        </div>
                                                    </div>
                                                    <div class="cta-sidebar">
                                                        <h4>Need a digital platform for your institution?</h4>
                                                        <p>We build scalable, content-managed websites for education, government, and community organisations.</p>
                                                        <a href="contact-us.php" class="btn btn-primary">Book a discovery session</a>
                                                        <a href="contact-us.php" class="btn btn-outline-primary">Request capabilities briefing</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- CS 24 — Joyce Managed IT -->
                            <div class="tab-pane fade" id="cs24" role="tabpanel">
                                <div class="case-study-detail">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="case-studies.php">Case studies</a></li>
                                            <li class="breadcrumb-item active">CS 24</li>
                                        </ol>
                                    </nav>
                                    <div class="case-header">
                                        <div class="case-badges">
                                            <span class="badge industry-badge">Manufacturing</span>
                                            <span class="badge tier-badge">Managed services</span>
                                            <span class="case-reference">CS 24</span>
                                        </div>
                                        <h1 class="case-title">Multi-office manufacturing company with fragmented, unmanaged IT infrastructure across Sydney</h1>
                                        <p class="case-subtitle">End-to-end managed IT services including 24/7 monitoring, cloud infrastructure, and helpdesk for Joyce offices.</p>
                                        <div class="kpi-grid">
                                            <div class="kpi-item"><div class="kpi-value">24/7</div><div class="kpi-label">network monitoring</div></div>
                                            <div class="kpi-item"><div class="kpi-value">Cloud</div><div class="kpi-label">infrastructure managed</div></div>
                                            <div class="kpi-item"><div class="kpi-value">E2E</div><div class="kpi-label">helpdesk support</div></div>
                                            <div class="kpi-item"><div class="kpi-value">100%</div><div class="kpi-label">focus on core business</div></div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="case-body">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <section class="case-section">
                                                    <h2>The problem</h2>
                                                    <blockquote class="problem-quote">
                                                        <p>Joyce's Sydney offices were operating with no dedicated IT management function. Network issues caused downtime, software licences were untracked, and end users had no consistent helpdesk support — pulling senior staff away from core operations to resolve ad-hoc IT problems.</p>
                                                    </blockquote>
                                                    <ul class="problem-list">
                                                        <li>No proactive network monitoring or alerting</li>
                                                        <li>Cloud infrastructure unmanaged and underoptimised</li>
                                                        <li>End users lacking consistent helpdesk and desktop support</li>
                                                        <li>Software licences untracked, creating compliance risk</li>
                                                        <li>No IT strategy or technology roadmap in place</li>
                                                    </ul>
                                                </section>
                                                <section class="case-section">
                                                    <h2>What we did</h2>
                                                    <h3>Comprehensive managed IT services tailored to Joyce's multi-office operations.</h3>
                                                    <p>Xpansion delivered end-to-end IT management across all Joyce Sydney offices, covering monitoring, cloud, helpdesk, and strategic consulting — allowing the business to focus entirely on its operations.</p>
                                                    <ul class="solution-list">
                                                        <li>Deployed 24/7 network monitoring and proactive support</li>
                                                        <li>Took over cloud infrastructure management and optimisation</li>
                                                        <li>Established a dedicated helpdesk and end-user support function</li>
                                                        <li>Delivered IT strategy, consulting, and technology roadmap</li>
                                                        <li>Managed desktop applications, business applications, and email/intranet</li>
                                                        <li>Implemented software licence management and regular system maintenance</li>
                                                    </ul>
                                                </section>
                                                <section class="case-section">
                                                    <h2>Results</h2>
                                                    <div class="outcomes-grid">
                                                        <div class="outcome-item"><div class="outcome-value">24/7</div><div class="outcome-label">proactive monitoring</div></div>
                                                        <div class="outcome-item"><div class="outcome-value">Zero</div><div class="outcome-label">licence compliance gaps</div></div>
                                                        <div class="outcome-item"><div class="outcome-value">Reduced</div><div class="outcome-label">IT-related downtime</div></div>
                                                        <div class="outcome-item"><div class="outcome-value">Full</div><div class="outcome-label">IT strategy delivered</div></div>
                                                    </div>
                                                </section>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="case-sidebar">
                                                    <div class="engagement-card">
                                                        <h4>Engagement details</h4>
                                                        <div class="engagement-item"><strong>Client:</strong> Joyce</div>
                                                        <div class="engagement-item"><strong>Industry:</strong> Manufacturing</div>
                                                        <div class="engagement-item"><strong>Geography:</strong> Sydney, NSW (multi-office)</div>
                                                        <div class="engagement-item"><strong>Delivery:</strong> Managed IT services</div>
                                                        <div class="engagement-item"><strong>Ongoing:</strong> 24/7 managed support</div>
                                                    </div>
                                                    <div class="capabilities-section">
                                                        <h4>Capabilities applied</h4>
                                                        <div class="capability-tags">
                                                            <span class="tag">Managed IT</span>
                                                            <span class="tag">24/7 monitoring</span>
                                                            <span class="tag">Cloud management</span>
                                                            <span class="tag">Helpdesk</span>
                                                            <span class="tag">IT strategy</span>
                                                            <span class="tag">Licence management</span>
                                                        </div>
                                                    </div>
                                                    <div class="cta-sidebar">
                                                        <h4>Need managed IT for your business?</h4>
                                                        <p>We take full ownership of your IT environment so your team can focus on what matters.</p>
                                                        <a href="contact-us.php" class="btn btn-primary">Book a discovery session</a>
                                                        <a href="contact-us.php" class="btn btn-outline-primary">Request capabilities briefing</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- CS 25 — iConnect Visa -->
                            <div class="tab-pane fade" id="cs25" role="tabpanel">
                                <div class="case-study-detail">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="case-studies.php">Case studies</a></li>
                                            <li class="breadcrumb-item active">CS 25</li>
                                        </ol>
                                    </nav>
                                    <div class="case-header">
                                        <div class="case-badges">
                                            <span class="badge industry-badge">Migration &amp; Legal</span>
                                            <span class="badge tier-badge">Web development</span>
                                            <span class="case-reference">CS 25</span>
                                        </div>
                                        <h1 class="case-title">Visa migration consultancy with no digital channel to reach prospective students and professionals</h1>
                                        <p class="case-subtitle">Professional website for iConnect Visa Migration Experts to support student and professional visa inquiries.</p>
                                        <div class="kpi-grid">
                                            <div class="kpi-item"><div class="kpi-value">HTML5</div><div class="kpi-label">modern stack</div></div>
                                            <div class="kpi-item"><div class="kpi-value">SEO</div><div class="kpi-label">search optimised</div></div>
                                            <div class="kpi-item"><div class="kpi-value">Mobile</div><div class="kpi-label">responsive design</div></div>
                                            <div class="kpi-item"><div class="kpi-value">Lead</div><div class="kpi-label">generation ready</div></div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="case-body">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <section class="case-section">
                                                    <h2>The problem</h2>
                                                    <blockquote class="problem-quote">
                                                        <p>iConnect Visa Migration Experts had no digital presence to support their consultancy services. Prospective students and professionals seeking Australian visas had no online channel to find, evaluate, or contact the firm — limiting growth and professional credibility.</p>
                                                    </blockquote>
                                                    <ul class="problem-list">
                                                        <li>No website or digital presence for client acquisition</li>
                                                        <li>Unable to articulate services and expertise online</li>
                                                        <li>No SEO visibility in a competitive migration market</li>
                                                        <li>Reliant entirely on word-of-mouth referrals</li>
                                                    </ul>
                                                </section>
                                                <section class="case-section">
                                                    <h2>What we did</h2>
                                                    <h3>Purpose-built professional website for a specialist visa migration consultancy.</h3>
                                                    <ul class="solution-list">
                                                        <li>Designed and developed a professional HTML5/PHP website</li>
                                                        <li>Created clear service pages for educational and professional visa categories</li>
                                                        <li>Implemented SEO foundations for Australian migration search terms</li>
                                                        <li>Delivered hosting, domain management, and ongoing maintenance</li>
                                                        <li>Designed logo and brand identity materials</li>
                                                    </ul>
                                                </section>
                                                <section class="case-section">
                                                    <h2>Results</h2>
                                                    <div class="outcomes-grid">
                                                        <div class="outcome-item"><div class="outcome-value">Live</div><div class="outcome-label">professional web presence</div></div>
                                                        <div class="outcome-item"><div class="outcome-value">SEO</div><div class="outcome-label">visibility established</div></div>
                                                        <div class="outcome-item"><div class="outcome-value">Brand</div><div class="outcome-label">identity delivered</div></div>
                                                        <div class="outcome-item"><div class="outcome-value">Hosted</div><div class="outcome-label">and maintained</div></div>
                                                    </div>
                                                </section>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="case-sidebar">
                                                    <div class="engagement-card">
                                                        <h4>Engagement details</h4>
                                                        <div class="engagement-item"><strong>Client:</strong> iConnect Visa Migration Experts</div>
                                                        <div class="engagement-item"><strong>Industry:</strong> Migration &amp; Legal Services</div>
                                                        <div class="engagement-item"><strong>Geography:</strong> Australia</div>
                                                        <div class="engagement-item"><strong>Delivery:</strong> Web design &amp; development</div>
                                                        <div class="engagement-item"><strong>Ongoing:</strong> Hosting &amp; maintenance</div>
                                                    </div>
                                                    <div class="capabilities-section">
                                                        <h4>Capabilities applied</h4>
                                                        <div class="capability-tags">
                                                            <span class="tag">HTML5 / PHP</span>
                                                            <span class="tag">Web design</span>
                                                            <span class="tag">SEO</span>
                                                            <span class="tag">Logo design</span>
                                                            <span class="tag">Web hosting</span>
                                                        </div>
                                                    </div>
                                                    <div class="cta-sidebar">
                                                        <h4>Need a professional digital presence?</h4>
                                                        <p>We build credible, lead-generating websites for professional services firms.</p>
                                                        <a href="contact-us.php" class="btn btn-primary">Book a discovery session</a>
                                                        <a href="contact-us.php" class="btn btn-outline-primary">Request capabilities briefing</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- CS 26 — Pentacare -->
                            <div class="tab-pane fade" id="cs26" role="tabpanel">
                                <div class="case-study-detail">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="case-studies.php">Case studies</a></li>
                                            <li class="breadcrumb-item active">CS 26</li>
                                        </ol>
                                    </nav>
                                    <div class="case-header">
                                        <div class="case-badges">
                                            <span class="badge industry-badge">Healthcare / NDIS</span>
                                            <span class="badge tier-badge">Web development</span>
                                            <span class="case-reference">CS 26</span>
                                        </div>
                                        <h1 class="case-title">NDIS provider without a digital platform to connect participants with support services</h1>
                                        <p class="case-subtitle">Accessible, informative website for Pentacare — an NDIS provider committed to participant choice and control.</p>
                                        <div class="kpi-grid">
                                            <div class="kpi-item"><div class="kpi-value">NDIS</div><div class="kpi-label">compliant messaging</div></div>
                                            <div class="kpi-item"><div class="kpi-value">SEO</div><div class="kpi-label">optimised</div></div>
                                            <div class="kpi-item"><div class="kpi-value">Brand</div><div class="kpi-label">identity designed</div></div>
                                            <div class="kpi-item"><div class="kpi-value">Hosted</div><div class="kpi-label">and maintained</div></div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="case-body">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <section class="case-section">
                                                    <h2>The problem</h2>
                                                    <blockquote class="problem-quote">
                                                        <p>Pentacare was committed to providing safe, accessible services for people with special needs — but without a professional online presence, participants and their guardians had no way to discover or evaluate their services. The lack of a digital channel was limiting reach and participant enrolment.</p>
                                                    </blockquote>
                                                    <ul class="problem-list">
                                                        <li>No website for participants or guardians to find services</li>
                                                        <li>Unable to communicate rights, responsibilities, and service scope online</li>
                                                        <li>No SEO visibility for NDIS-related search terms</li>
                                                        <li>Inconsistent brand identity across materials</li>
                                                    </ul>
                                                </section>
                                                <section class="case-section">
                                                    <h2>What we did</h2>
                                                    <h3>Accessible, participant-focused website for an NDIS disability services provider.</h3>
                                                    <ul class="solution-list">
                                                        <li>Designed and developed a clear, accessible website aligned with NDIS principles</li>
                                                        <li>Created service pages communicating participant rights and support offerings</li>
                                                        <li>Implemented SEO for NDIS and disability services search terms</li>
                                                        <li>Designed logo, brochure, and newsletter templates for brand consistency</li>
                                                        <li>Managed domain registration, hosting, and ongoing maintenance</li>
                                                    </ul>
                                                </section>
                                                <section class="case-section">
                                                    <h2>Results</h2>
                                                    <div class="outcomes-grid">
                                                        <div class="outcome-item"><div class="outcome-value">Accessible</div><div class="outcome-label">online presence live</div></div>
                                                        <div class="outcome-item"><div class="outcome-value">SEO</div><div class="outcome-label">NDIS search visibility</div></div>
                                                        <div class="outcome-item"><div class="outcome-value">Unified</div><div class="outcome-label">brand across all materials</div></div>
                                                        <div class="outcome-item"><div class="outcome-value">Hosted</div><div class="outcome-label">with ongoing support</div></div>
                                                    </div>
                                                </section>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="case-sidebar">
                                                    <div class="engagement-card">
                                                        <h4>Engagement details</h4>
                                                        <div class="engagement-item"><strong>Client:</strong> Pentacare</div>
                                                        <div class="engagement-item"><strong>Industry:</strong> Healthcare / NDIS</div>
                                                        <div class="engagement-item"><strong>Geography:</strong> Sydney, NSW</div>
                                                        <div class="engagement-item"><strong>Delivery:</strong> Web design, SEO, branding</div>
                                                        <div class="engagement-item"><strong>Ongoing:</strong> Hosting &amp; maintenance</div>
                                                    </div>
                                                    <div class="capabilities-section">
                                                        <h4>Capabilities applied</h4>
                                                        <div class="capability-tags">
                                                            <span class="tag">Web design</span>
                                                            <span class="tag">HTML5 / PHP</span>
                                                            <span class="tag">SEO</span>
                                                            <span class="tag">Logo &amp; branding</span>
                                                            <span class="tag">Web hosting</span>
                                                        </div>
                                                    </div>
                                                    <div class="cta-sidebar">
                                                        <h4>Healthcare or NDIS provider?</h4>
                                                        <p>We build accessible, compliant digital platforms for healthcare and disability services organisations.</p>
                                                        <a href="contact-us.php" class="btn btn-primary">Book a discovery session</a>
                                                        <a href="contact-us.php" class="btn btn-outline-primary">Request capabilities briefing</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- CS 27 — AZ Homes -->
                            <div class="tab-pane fade" id="cs27" role="tabpanel">
                                <div class="case-study-detail">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="case-studies.php">Case studies</a></li>
                                            <li class="breadcrumb-item active">CS 27</li>
                                        </ol>
                                    </nav>
                                    <div class="case-header">
                                        <div class="case-badges">
                                            <span class="badge industry-badge">Real Estate</span>
                                            <span class="badge tier-badge">Web development</span>
                                            <span class="case-reference">CS 27</span>
                                        </div>
                                        <h1 class="case-title">Buyer's agent without digital presence to differentiate from traditional real estate agents</h1>
                                        <p class="case-subtitle">Professional website for AZ Homes — a specialist buyer's agent serving first home buyers, families, and investors.</p>
                                        <div class="kpi-grid">
                                            <div class="kpi-item"><div class="kpi-value">HTML5</div><div class="kpi-label">modern stack</div></div>
                                            <div class="kpi-item"><div class="kpi-value">SEO</div><div class="kpi-label">search optimised</div></div>
                                            <div class="kpi-item"><div class="kpi-value">Brand</div><div class="kpi-label">identity designed</div></div>
                                            <div class="kpi-item"><div class="kpi-value">Lead</div><div class="kpi-label">generation enabled</div></div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="case-body">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <section class="case-section">
                                                    <h2>The problem</h2>
                                                    <blockquote class="problem-quote">
                                                        <p>AZ Homes needed to clearly differentiate their buyer's agent proposition from traditional real estate agents. Without a professional website, prospective buyers had no way to understand the value of independent representation — or find and trust the firm online.</p>
                                                    </blockquote>
                                                    <ul class="problem-list">
                                                        <li>No digital presence to articulate the buyer's agent value proposition</li>
                                                        <li>Unable to reach first home buyers, families, and investors online</li>
                                                        <li>No SEO presence in a competitive property search market</li>
                                                        <li>Lacked professional branding to build buyer confidence</li>
                                                    </ul>
                                                </section>
                                                <section class="case-section">
                                                    <h2>What we did</h2>
                                                    <h3>Credibility-focused professional website for a specialist property buyer's agent.</h3>
                                                    <ul class="solution-list">
                                                        <li>Designed and developed an HTML5/PHP professional website</li>
                                                        <li>Structured content to explain buyer's agent vs. traditional agent differences</li>
                                                        <li>Implemented SEO for property and real estate search terms</li>
                                                        <li>Designed logo, brochure, and brand collateral</li>
                                                        <li>Managed domain registration, hosting, and maintenance</li>
                                                    </ul>
                                                </section>
                                                <section class="case-section">
                                                    <h2>Results</h2>
                                                    <div class="outcomes-grid">
                                                        <div class="outcome-item"><div class="outcome-value">Live</div><div class="outcome-label">professional web presence</div></div>
                                                        <div class="outcome-item"><div class="outcome-value">SEO</div><div class="outcome-label">property search visibility</div></div>
                                                        <div class="outcome-item"><div class="outcome-value">Brand</div><div class="outcome-label">collateral delivered</div></div>
                                                        <div class="outcome-item"><div class="outcome-value">Lead</div><div class="outcome-label">generation channel established</div></div>
                                                    </div>
                                                </section>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="case-sidebar">
                                                    <div class="engagement-card">
                                                        <h4>Engagement details</h4>
                                                        <div class="engagement-item"><strong>Client:</strong> AZ Homes</div>
                                                        <div class="engagement-item"><strong>Industry:</strong> Real Estate</div>
                                                        <div class="engagement-item"><strong>Geography:</strong> Sydney, NSW</div>
                                                        <div class="engagement-item"><strong>Delivery:</strong> Web design &amp; branding</div>
                                                        <div class="engagement-item"><strong>Ongoing:</strong> Hosting &amp; maintenance</div>
                                                    </div>
                                                    <div class="capabilities-section">
                                                        <h4>Capabilities applied</h4>
                                                        <div class="capability-tags">
                                                            <span class="tag">HTML5 / PHP</span>
                                                            <span class="tag">Web design</span>
                                                            <span class="tag">SEO</span>
                                                            <span class="tag">Logo &amp; branding</span>
                                                            <span class="tag">Web hosting</span>
                                                        </div>
                                                    </div>
                                                    <div class="cta-sidebar">
                                                        <h4>Property or real estate business?</h4>
                                                        <p>We build professional, lead-generating digital platforms for the property sector.</p>
                                                        <a href="contact-us.php" class="btn btn-primary">Book a discovery session</a>
                                                        <a href="contact-us.php" class="btn btn-outline-primary">Request capabilities briefing</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- CS 28 — Multiplex Renovations -->
                            <div class="tab-pane fade" id="cs28" role="tabpanel">
                                <div class="case-study-detail">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="case-studies.php">Case studies</a></li>
                                            <li class="breadcrumb-item active">CS 28</li>
                                        </ol>
                                    </nav>
                                    <div class="case-header">
                                        <div class="case-badges">
                                            <span class="badge industry-badge">Construction</span>
                                            <span class="badge tier-badge">Web development</span>
                                            <span class="case-reference">CS 28</span>
                                        </div>
                                        <h1 class="case-title">Property renovation company unable to showcase work or attract new clients online</h1>
                                        <p class="case-subtitle">Full-service digital platform for Multiplex Renovations — specialists in transforming multiplex and residential properties.</p>
                                        <div class="kpi-grid">
                                            <div class="kpi-item"><div class="kpi-value">HTML5</div><div class="kpi-label">modern stack</div></div>
                                            <div class="kpi-item"><div class="kpi-value">Portfolio</div><div class="kpi-label">showcase enabled</div></div>
                                            <div class="kpi-item"><div class="kpi-value">SEO</div><div class="kpi-label">search optimised</div></div>
                                            <div class="kpi-item"><div class="kpi-value">Lead</div><div class="kpi-label">generation ready</div></div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="case-body">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <section class="case-section">
                                                    <h2>The problem</h2>
                                                    <blockquote class="problem-quote">
                                                        <p>Multiplex Renovations had no digital presence to showcase their transformation projects to property owners, developers, and managers. Without an online portfolio, the business was invisible to prospective clients searching for renovation specialists.</p>
                                                    </blockquote>
                                                    <ul class="problem-list">
                                                        <li>No website to showcase completed renovation projects</li>
                                                        <li>Unable to reach property owners and developers online</li>
                                                        <li>No SEO presence in the construction/renovation market</li>
                                                        <li>Reliant on referrals with no digital lead pipeline</li>
                                                    </ul>
                                                </section>
                                                <section class="case-section">
                                                    <h2>What we did</h2>
                                                    <h3>Portfolio-driven website with lead generation for a property renovation specialist.</h3>
                                                    <ul class="solution-list">
                                                        <li>Designed and developed an HTML5/PHP website with project showcase capability</li>
                                                        <li>Built custom database for project portfolio management</li>
                                                        <li>Implemented SEO for renovation and property transformation terms</li>
                                                        <li>Designed branding and marketing collateral</li>
                                                        <li>Managed domain, hosting, and ongoing maintenance</li>
                                                    </ul>
                                                </section>
                                                <section class="case-section">
                                                    <h2>Results</h2>
                                                    <div class="outcomes-grid">
                                                        <div class="outcome-item"><div class="outcome-value">Live</div><div class="outcome-label">portfolio showcase online</div></div>
                                                        <div class="outcome-item"><div class="outcome-value">SEO</div><div class="outcome-label">renovation visibility</div></div>
                                                        <div class="outcome-item"><div class="outcome-value">CRM</div><div class="outcome-label">lead database active</div></div>
                                                        <div class="outcome-item"><div class="outcome-value">Brand</div><div class="outcome-label">collateral delivered</div></div>
                                                    </div>
                                                </section>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="case-sidebar">
                                                    <div class="engagement-card">
                                                        <h4>Engagement details</h4>
                                                        <div class="engagement-item"><strong>Client:</strong> Multiplex Renovations</div>
                                                        <div class="engagement-item"><strong>Industry:</strong> Construction / Property</div>
                                                        <div class="engagement-item"><strong>Geography:</strong> Sydney, NSW</div>
                                                        <div class="engagement-item"><strong>Delivery:</strong> Web design &amp; development</div>
                                                        <div class="engagement-item"><strong>Ongoing:</strong> Hosting &amp; maintenance</div>
                                                    </div>
                                                    <div class="capabilities-section">
                                                        <h4>Capabilities applied</h4>
                                                        <div class="capability-tags">
                                                            <span class="tag">HTML5 / PHP</span>
                                                            <span class="tag">Custom database</span>
                                                            <span class="tag">Web design</span>
                                                            <span class="tag">SEO</span>
                                                            <span class="tag">Web hosting</span>
                                                        </div>
                                                    </div>
                                                    <div class="cta-sidebar">
                                                        <h4>Construction or trades business?</h4>
                                                        <p>We build portfolio-led, lead-generating websites for construction and property businesses.</p>
                                                        <a href="contact-us.php" class="btn btn-primary">Book a discovery session</a>
                                                        <a href="contact-us.php" class="btn btn-outline-primary">Request capabilities briefing</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- CS 29 — SAFFA -->
                            <div class="tab-pane fade" id="cs29" role="tabpanel">
                                <div class="case-study-detail">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="case-studies.php">Case studies</a></li>
                                            <li class="breadcrumb-item active">CS 29</li>
                                        </ol>
                                    </nav>
                                    <div class="case-header">
                                        <div class="case-badges">
                                            <span class="badge industry-badge">Arts &amp; Culture</span>
                                            <span class="badge tier-badge">Web development</span>
                                            <span class="case-reference">CS 29</span>
                                        </div>
                                        <h1 class="case-title">New film festival launching across NSW with no digital infrastructure to reach audiences</h1>
                                        <p class="case-subtitle">Digital platform for the South Asian Film Festival of Australia (SAFFA) to connect film lovers across Australia and South Asia.</p>
                                        <div class="kpi-grid">
                                            <div class="kpi-item"><div class="kpi-value">NSW</div><div class="kpi-label">statewide reach</div></div>
                                            <div class="kpi-item"><div class="kpi-value">2023</div><div class="kpi-label">launch delivered</div></div>
                                            <div class="kpi-item"><div class="kpi-value">Multi</div><div class="kpi-label">screen &amp; venue support</div></div>
                                            <div class="kpi-item"><div class="kpi-value">SEO</div><div class="kpi-label">search optimised</div></div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="case-body">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <section class="case-section">
                                                    <h2>The problem</h2>
                                                    <blockquote class="problem-quote">
                                                        <p>SAFFA was launching a first-of-its-kind South Asian film festival across Sydney and NSW in January 2023. With no existing digital platform, they needed an online presence that could promote the festival, list films, manage audience communication, and build the brand before opening day.</p>
                                                    </blockquote>
                                                    <ul class="problem-list">
                                                        <li>No website to announce and promote the festival</li>
                                                        <li>No channel to reach South Asian diaspora and Australian film audiences</li>
                                                        <li>Unable to list programme, venues, or ticketing information</li>
                                                        <li>Brand identity and collateral needed from scratch</li>
                                                    </ul>
                                                </section>
                                                <section class="case-section">
                                                    <h2>What we did</h2>
                                                    <h3>Event-focused digital platform for a new annual film festival launching across NSW.</h3>
                                                    <ul class="solution-list">
                                                        <li>Designed and developed the SAFFA festival website (HTML5/PHP)</li>
                                                        <li>Built programme listing pages with venue and screening information</li>
                                                        <li>Implemented SEO for film festival and South Asian cinema search terms</li>
                                                        <li>Designed festival logo and brand collateral</li>
                                                        <li>Managed domain, hosting, and site launch for the January 2023 opening</li>
                                                    </ul>
                                                </section>
                                                <section class="case-section">
                                                    <h2>Results</h2>
                                                    <div class="outcomes-grid">
                                                        <div class="outcome-item"><div class="outcome-value">On-time</div><div class="outcome-label">Jan 2023 launch</div></div>
                                                        <div class="outcome-item"><div class="outcome-value">NSW-wide</div><div class="outcome-label">audience reach</div></div>
                                                        <div class="outcome-item"><div class="outcome-value">Brand</div><div class="outcome-label">identity established</div></div>
                                                        <div class="outcome-item"><div class="outcome-value">SEO</div><div class="outcome-label">festival visibility</div></div>
                                                    </div>
                                                </section>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="case-sidebar">
                                                    <div class="engagement-card">
                                                        <h4>Engagement details</h4>
                                                        <div class="engagement-item"><strong>Client:</strong> SAFFA</div>
                                                        <div class="engagement-item"><strong>Industry:</strong> Arts, Culture &amp; Events</div>
                                                        <div class="engagement-item"><strong>Geography:</strong> Sydney &amp; NSW</div>
                                                        <div class="engagement-item"><strong>Delivery:</strong> Web design, branding, SEO</div>
                                                        <div class="engagement-item"><strong>Ongoing:</strong> Hosting &amp; maintenance</div>
                                                    </div>
                                                    <div class="capabilities-section">
                                                        <h4>Capabilities applied</h4>
                                                        <div class="capability-tags">
                                                            <span class="tag">HTML5 / PHP</span>
                                                            <span class="tag">Web design</span>
                                                            <span class="tag">SEO</span>
                                                            <span class="tag">Logo &amp; branding</span>
                                                            <span class="tag">Event platform</span>
                                                        </div>
                                                    </div>
                                                    <div class="cta-sidebar">
                                                        <h4>Launching an event or festival?</h4>
                                                        <p>We build event-ready digital platforms that go from zero to live on time.</p>
                                                        <a href="contact-us.php" class="btn btn-primary">Book a discovery session</a>
                                                        <a href="contact-us.php" class="btn btn-outline-primary">Request capabilities briefing</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- CS 30 — Bellfield FC -->
                            <div class="tab-pane fade" id="cs30" role="tabpanel">
                                <div class="case-study-detail">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="case-studies.php">Case studies</a></li>
                                            <li class="breadcrumb-item active">CS 30</li>
                                        </ol>
                                    </nav>
                                    <div class="case-header">
                                        <div class="case-badges">
                                            <span class="badge industry-badge">Sports / Education</span>
                                            <span class="badge tier-badge">Web development</span>
                                            <span class="case-reference">CS 30</span>
                                        </div>
                                        <h1 class="case-title">School football club with no digital platform to engage players, parents, and supporters</h1>
                                        <p class="case-subtitle">Club website for Bellfield Football Club — a Sydney-based club affiliated with Bellfield College, established 2019.</p>
                                        <div class="kpi-grid">
                                            <div class="kpi-item"><div class="kpi-value">Multi</div><div class="kpi-label">age group coverage</div></div>
                                            <div class="kpi-item"><div class="kpi-value">Mobile</div><div class="kpi-label">responsive design</div></div>
                                            <div class="kpi-item"><div class="kpi-value">Brand</div><div class="kpi-label">identity designed</div></div>
                                            <div class="kpi-item"><div class="kpi-value">Hosted</div><div class="kpi-label">and maintained</div></div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="case-body">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <section class="case-section">
                                                    <h2>The problem</h2>
                                                    <blockquote class="problem-quote">
                                                        <p>Bellfield Football Club was rapidly growing after its 2019 founding but had no digital home to communicate with players across age groups, keep parents informed, and build community around the club's values of teamwork, discipline, and sportsmanship.</p>
                                                    </blockquote>
                                                    <ul class="problem-list">
                                                        <li>No website for player registrations, schedules, or news</li>
                                                        <li>No channel to engage parents and supporters online</li>
                                                        <li>Club identity and branding not established digitally</li>
                                                        <li>Difficulty communicating training and coaching programme details</li>
                                                    </ul>
                                                </section>
                                                <section class="case-section">
                                                    <h2>What we did</h2>
                                                    <h3>Community-focused club website for a growing youth football programme.</h3>
                                                    <ul class="solution-list">
                                                        <li>Designed and developed an HTML5 club website</li>
                                                        <li>Built pages covering teams, training schedules, coaching, and registration</li>
                                                        <li>Designed club logo and digital branding materials</li>
                                                        <li>Optimised for mobile access by players and parents</li>
                                                        <li>Managed hosting, domain, and ongoing maintenance</li>
                                                    </ul>
                                                </section>
                                                <section class="case-section">
                                                    <h2>Results</h2>
                                                    <div class="outcomes-grid">
                                                        <div class="outcome-item"><div class="outcome-value">Live</div><div class="outcome-label">club digital presence</div></div>
                                                        <div class="outcome-item"><div class="outcome-value">Mobile</div><div class="outcome-label">player &amp; parent access</div></div>
                                                        <div class="outcome-item"><div class="outcome-value">Brand</div><div class="outcome-label">identity established</div></div>
                                                        <div class="outcome-item"><div class="outcome-value">Community</div><div class="outcome-label">engagement channel live</div></div>
                                                    </div>
                                                </section>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="case-sidebar">
                                                    <div class="engagement-card">
                                                        <h4>Engagement details</h4>
                                                        <div class="engagement-item"><strong>Client:</strong> Bellfield Football Club</div>
                                                        <div class="engagement-item"><strong>Industry:</strong> Sports / Education</div>
                                                        <div class="engagement-item"><strong>Geography:</strong> Sydney, NSW</div>
                                                        <div class="engagement-item"><strong>Delivery:</strong> Web design &amp; branding</div>
                                                        <div class="engagement-item"><strong>Ongoing:</strong> Hosting &amp; maintenance</div>
                                                    </div>
                                                    <div class="capabilities-section">
                                                        <h4>Capabilities applied</h4>
                                                        <div class="capability-tags">
                                                            <span class="tag">HTML5</span>
                                                            <span class="tag">Web design</span>
                                                            <span class="tag">Logo &amp; branding</span>
                                                            <span class="tag">Web hosting</span>
                                                            <span class="tag">Mobile design</span>
                                                        </div>
                                                    </div>
                                                    <div class="cta-sidebar">
                                                        <h4>Sports club or community organisation?</h4>
                                                        <p>We build engaging digital platforms for sports clubs, academies, and community groups.</p>
                                                        <a href="contact-us.php" class="btn btn-primary">Book a discovery session</a>
                                                        <a href="contact-us.php" class="btn btn-outline-primary">Request capabilities briefing</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- CS 31 — NDISHero -->
                            <div class="tab-pane fade" id="cs31" role="tabpanel">
                                <div class="case-study-detail">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="case-studies.php">Case studies</a></li>
                                            <li class="breadcrumb-item active">CS 31</li>
                                        </ol>
                                    </nav>
                                    <div class="case-header">
                                        <div class="case-badges">
                                            <span class="badge industry-badge">Healthcare / NDIS</span>
                                            <span class="badge tier-badge">Web development</span>
                                            <span class="case-reference">CS 31</span>
                                        </div>
                                        <h1 class="case-title">NDIS service provider unable to communicate no-gap payment model to eligible participants online</h1>
                                        <p class="case-subtitle">Participant-focused website for NDISHero — an approved NDIS provider operating a no-gap payment scheme.</p>
                                        <div class="kpi-grid">
                                            <div class="kpi-item"><div class="kpi-value">NDIS</div><div class="kpi-label">approved provider</div></div>
                                            <div class="kpi-item"><div class="kpi-value">No-gap</div><div class="kpi-label">model communicated</div></div>
                                            <div class="kpi-item"><div class="kpi-value">SEO</div><div class="kpi-label">NDIS search terms</div></div>
                                            <div class="kpi-item"><div class="kpi-value">Hosted</div><div class="kpi-label">and maintained</div></div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="case-body">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <section class="case-section">
                                                    <h2>The problem</h2>
                                                    <blockquote class="problem-quote">
                                                        <p>NDISHero offered a differentiated no-gap payment model — meaning every NDIS-funded client could access all approved services without out-of-pocket costs. Without a website, this compelling value proposition couldn't reach eligible participants, carers, and support coordinators.</p>
                                                    </blockquote>
                                                    <ul class="problem-list">
                                                        <li>No digital platform to communicate the no-gap payment model</li>
                                                        <li>Eligible participants unable to find services online</li>
                                                        <li>No SEO presence for NDIS-funded support searches</li>
                                                        <li>Lacked brand identity to build trust with participants and families</li>
                                                    </ul>
                                                </section>
                                                <section class="case-section">
                                                    <h2>What we did</h2>
                                                    <h3>Clear, accessible NDIS provider website communicating participant rights and the no-gap model.</h3>
                                                    <ul class="solution-list">
                                                        <li>Designed and developed a participant-focused NDIS provider website</li>
                                                        <li>Structured messaging around the no-gap payment scheme and approved services</li>
                                                        <li>Implemented SEO for NDIS participant and support coordinator searches</li>
                                                        <li>Designed logo and branding to build participant trust</li>
                                                        <li>Managed domain registration, hosting, and site maintenance</li>
                                                    </ul>
                                                </section>
                                                <section class="case-section">
                                                    <h2>Results</h2>
                                                    <div class="outcomes-grid">
                                                        <div class="outcome-item"><div class="outcome-value">Live</div><div class="outcome-label">no-gap model promoted</div></div>
                                                        <div class="outcome-item"><div class="outcome-value">SEO</div><div class="outcome-label">NDIS participant search</div></div>
                                                        <div class="outcome-item"><div class="outcome-value">Brand</div><div class="outcome-label">trust identity built</div></div>
                                                        <div class="outcome-item"><div class="outcome-value">Hosted</div><div class="outcome-label">with ongoing support</div></div>
                                                    </div>
                                                </section>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="case-sidebar">
                                                    <div class="engagement-card">
                                                        <h4>Engagement details</h4>
                                                        <div class="engagement-item"><strong>Client:</strong> NDISHero</div>
                                                        <div class="engagement-item"><strong>Industry:</strong> Healthcare / NDIS</div>
                                                        <div class="engagement-item"><strong>Geography:</strong> Australia</div>
                                                        <div class="engagement-item"><strong>Delivery:</strong> Web design, SEO, branding</div>
                                                        <div class="engagement-item"><strong>Ongoing:</strong> Hosting &amp; maintenance</div>
                                                    </div>
                                                    <div class="capabilities-section">
                                                        <h4>Capabilities applied</h4>
                                                        <div class="capability-tags">
                                                            <span class="tag">Web design</span>
                                                            <span class="tag">HTML5 / PHP</span>
                                                            <span class="tag">SEO</span>
                                                            <span class="tag">Logo &amp; branding</span>
                                                            <span class="tag">Web hosting</span>
                                                        </div>
                                                    </div>
                                                    <div class="cta-sidebar">
                                                        <h4>NDIS or disability services provider?</h4>
                                                        <p>We build participant-focused, compliant digital platforms for NDIS and healthcare organisations.</p>
                                                        <a href="contact-us.php" class="btn btn-primary">Book a discovery session</a>
                                                        <a href="contact-us.php" class="btn btn-outline-primary">Request capabilities briefing</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- CS 32 — AGF -->
                            <div class="tab-pane fade" id="cs32" role="tabpanel">
                                <div class="case-study-detail">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="case-studies.php">Case studies</a></li>
                                            <li class="breadcrumb-item active">CS 32</li>
                                        </ol>
                                    </nav>
                                    <div class="case-header">
                                        <div class="case-badges">
                                            <span class="badge industry-badge">Community / Non-profit</span>
                                            <span class="badge tier-badge">Web development</span>
                                            <span class="case-reference">CS 32</span>
                                        </div>
                                        <h1 class="case-title">Global advocacy federation with no digital platform to promote Dr. Ambedkar's philosophy internationally</h1>
                                        <p class="case-subtitle">International community website for the Ambedkarite Global Federation (AGF) — promoting social, political, and philosophical reform.</p>
                                        <div class="kpi-grid">
                                            <div class="kpi-item"><div class="kpi-value">Global</div><div class="kpi-label">audience reach</div></div>
                                            <div class="kpi-item"><div class="kpi-value">Multi</div><div class="kpi-label">language ready</div></div>
                                            <div class="kpi-item"><div class="kpi-value">Brand</div><div class="kpi-label">identity designed</div></div>
                                            <div class="kpi-item"><div class="kpi-value">SEO</div><div class="kpi-label">search optimised</div></div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="case-body">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <section class="case-section">
                                                    <h2>The problem</h2>
                                                    <blockquote class="problem-quote">
                                                        <p>The Ambedkarite Global Federation was established in Australia to promote the social, political, and philosophical ideology of Dr. B.R. Ambedkar globally. Without a digital platform, the federation had no way to reach, inform, and mobilise its international community — limiting its ability to build membership and advance its mission.</p>
                                                    </blockquote>
                                                    <ul class="problem-list">
                                                        <li>No international digital presence to reach the Ambedkarite community</li>
                                                        <li>No platform to share ideology, news, and advocacy content</li>
                                                        <li>No SEO visibility for Ambedkarite and community organisation searches</li>
                                                        <li>Federation identity and branding not established digitally</li>
                                                    </ul>
                                                </section>
                                                <section class="case-section">
                                                    <h2>What we did</h2>
                                                    <h3>International community platform for a global advocacy and social reform federation.</h3>
                                                    <ul class="solution-list">
                                                        <li>Designed and developed the AGF website (HTML5/PHP) for international audiences</li>
                                                        <li>Built content pages covering ideology, mission, membership, and news</li>
                                                        <li>Implemented SEO for Ambedkarite and social reform search terms</li>
                                                        <li>Designed federation logo and brand identity materials</li>
                                                        <li>Managed domain registration, hosting, and ongoing maintenance</li>
                                                    </ul>
                                                </section>
                                                <section class="case-section">
                                                    <h2>Results</h2>
                                                    <div class="outcomes-grid">
                                                        <div class="outcome-item"><div class="outcome-value">Live</div><div class="outcome-label">global community platform</div></div>
                                                        <div class="outcome-item"><div class="outcome-value">SEO</div><div class="outcome-label">advocacy search visibility</div></div>
                                                        <div class="outcome-item"><div class="outcome-value">Brand</div><div class="outcome-label">federation identity built</div></div>
                                                        <div class="outcome-item"><div class="outcome-value">Hosted</div><div class="outcome-label">with ongoing support</div></div>
                                                    </div>
                                                </section>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="case-sidebar">
                                                    <div class="engagement-card">
                                                        <h4>Engagement details</h4>
                                                        <div class="engagement-item"><strong>Client:</strong> Ambedkarite Global Federation</div>
                                                        <div class="engagement-item"><strong>Industry:</strong> Community / Non-profit</div>
                                                        <div class="engagement-item"><strong>Geography:</strong> Australia &amp; international</div>
                                                        <div class="engagement-item"><strong>Delivery:</strong> Web design, SEO, branding</div>
                                                        <div class="engagement-item"><strong>Ongoing:</strong> Hosting &amp; maintenance</div>
                                                    </div>
                                                    <div class="capabilities-section">
                                                        <h4>Capabilities applied</h4>
                                                        <div class="capability-tags">
                                                            <span class="tag">HTML5 / PHP</span>
                                                            <span class="tag">Web design</span>
                                                            <span class="tag">SEO</span>
                                                            <span class="tag">Logo &amp; branding</span>
                                                            <span class="tag">Web hosting</span>
                                                        </div>
                                                    </div>
                                                    <div class="cta-sidebar">
                                                        <h4>Non-profit or community organisation?</h4>
                                                        <p>We build purpose-driven digital platforms for community organisations, federations, and advocacy groups.</p>
                                                        <a href="contact-us.php" class="btn btn-primary">Book a discovery session</a>
                                                        <a href="contact-us.php" class="btn btn-outline-primary">Request capabilities briefing</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="portfolio page-bottom-cta case-bottom-cta">
                <div class="cta-section" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="cta-content">
                        <span class="cta-label"><i class="bi bi-lightning-charge-fill"></i> Have a similar challenge?</span>
                        <h3>Turn a complex operating problem into a measurable delivery plan.</h3>
                        <p>Share the workflow, risk or growth constraint you need to solve and we will map the right solution path.</p>
                        <div class="cta-buttons">
                            <a href="contact-us.php" class="btn-cta-primary">Discuss Project <i class="bi bi-arrow-right"></i></a>
                            <a href="products.php" class="btn-cta-secondary"><i class="bi bi-grid"></i> Explore Products</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<script>
// Tab functionality with URL hash support
document.addEventListener('DOMContentLoaded', function() {
    const tabButtons = Array.from(document.querySelectorAll('#caseStudyTabs .nav-link'));
    const tabPanes = Array.from(document.querySelectorAll('.tab-pane'));
    const featureCards = Array.from(document.querySelectorAll('[data-case-target]'));
    const tabContainer = document.querySelector('.case-study-tabs');
    const navList = tabContainer.querySelector('#caseStudyTabs');
    let mobileSelect = null;

    function activateTab(tabId) {
        const targetButton = document.querySelector(`[data-bs-target="#${tabId}"]`);
        const targetPane = document.getElementById(tabId);

        if (!targetButton || !targetPane) {
            return false;
        }

        tabButtons.forEach(btn => btn.classList.remove('active'));
        tabPanes.forEach(pane => pane.classList.remove('show', 'active'));
        featureCards.forEach(card => card.classList.toggle('active', card.dataset.caseTarget === tabId));

        targetButton.classList.add('active');
        targetPane.classList.add('show', 'active');

        if (mobileSelect) {
            mobileSelect.value = tabId;
        }

        return true;
    }

    function updateMobileSelect() {
        if (!mobileSelect) return;
        const activeValue = mobileSelect.value || '';
        const options = ['<option value="">Select a case study</option>'];

        tabButtons.filter(button => button.style.display !== 'none' && !button.classList.contains('is-summary-only')).forEach(button => {
            const value = button.getAttribute('data-bs-target').substring(1);
            const label = button.querySelector('.case-ref').textContent + ' - ' + button.querySelector('.case-title').textContent;
            options.push(`<option value="${value}">${label}</option>`);
        });

        mobileSelect.innerHTML = options.join('');
        if (activeValue) {
            mobileSelect.value = activeValue;
        }
    }

    function filterCaseStudies() {
        const searchInput = document.getElementById('caseStudySearch');
        if (!searchInput) return;
        const query = searchInput.value.trim().toLowerCase();
        let visibleCount = 0;

        tabButtons.forEach(button => {
            const text = button.textContent.toLowerCase();
            const isVisible = text.includes(query);
            button.style.display = isVisible ? '' : 'none';
            if (isVisible) visibleCount++;
        });

        const emptyState = document.getElementById('caseStudyEmpty');
        if (emptyState) {
            emptyState.style.display = visibleCount === 0 ? 'block' : 'none';
        }

        updateMobileSelect();
    }

    tabButtons.forEach(button => {
        const targetId = button.getAttribute('data-bs-target').substring(1);
        const hasDetailPane = Boolean(document.getElementById(targetId));

        if (!hasDetailPane) {
            button.classList.add('is-summary-only');
            button.setAttribute('aria-disabled', 'true');
            button.insertAdjacentHTML('beforeend', '<span class="case-status">Summary queued</span>');
            button.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
            });
            return;
        }

        button.addEventListener('shown.bs.tab', function(e) {
            const activeId = e.target.getAttribute('data-bs-target').substring(1);
            activateTab(activeId);
            history.replaceState(null, null, `#${activeId}`);
        });
    });

    featureCards.forEach(card => {
        card.addEventListener('click', function() {
            const targetId = this.dataset.caseTarget;
            if (activateTab(targetId)) {
                history.replaceState(null, null, `#${targetId}`);
                document.querySelector('.case-study-content')?.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    function createMobileSelect() {
        if (mobileSelect) return;
        mobileSelect = document.createElement('select');
        mobileSelect.className = 'form-select mobile-tab-select';
        mobileSelect.style.display = 'none';
        tabContainer.appendChild(mobileSelect);

        mobileSelect.addEventListener('change', function() {
            if (this.value) {
                activateTab(this.value);
                window.location.hash = this.value;
            }
        });
    }

    function handleMobileTabs() {
        if (window.innerWidth < 768) {
            createMobileSelect();
            navList.style.display = 'none';
            mobileSelect.style.display = '';
            updateMobileSelect();
        } else {
            if (mobileSelect) {
                mobileSelect.style.display = 'none';
            }
            navList.style.display = '';
        }
    }

    const searchInput = document.getElementById('caseStudySearch');
    if (searchInput) {
        searchInput.addEventListener('input', filterCaseStudies);
    }

    const hash = window.location.hash.substring(1);
    if (hash) {
        activateTab(hash);
    }

    handleMobileTabs();
    window.addEventListener('resize', handleMobileTabs);
});
</script>

<?php include 'includes/footer.php'; ?>
