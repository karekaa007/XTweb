<?php include 'includes/header.php'; ?>

<main class="main">

    <section class="inner-banner text-center">
        <div class="container content">
            <p class="section-subtitle">Case Studies</p>
            <h1>21 engagements. Every outcome documented.</h1>
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
                        <strong>21</strong>
                        <span>engagement references</span>
                    </div>
                    <div class="overview-stat">
                        <strong>8+</strong>
                        <span>industries covered</span>
                    </div>
                    <div class="overview-stat">
                        <strong>2</strong>
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

                            <!-- Placeholder for remaining case studies -->
                            <!-- CS 09 through CS 22 would follow the same structure -->

                        </div>
                    </div>
                </div>
            </div>

            <div class="portfolio cta-section page-bottom-cta case-bottom-cta" data-aos="zoom-in" data-aos-duration="1000">
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
