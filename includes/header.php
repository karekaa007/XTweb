<?php
//
    // ⚠️ PERFORMANCE CRITICAL CODE – DO NOT REMOVE
    // The code below is implemented specifically to optimise website speed,
    // Removing or modifying this section may negatively impact.
//
    ob_start(function($buffer){

        return preg_replace(
            '/<img(?![^>]*loading=)([^>]+)>/i',
            '<img loading="lazy"$1>',
            $buffer
        );
    });

$current_page = basename($_SERVER['PHP_SELF']);

function nav_active($page) {
    global $current_page;
    return $current_page === $page ? ' class="active"' : '';
}

$services_pages = ['digital-engineering-applications.php','managed-it-security.php','ai-intelligent-automation.php','data-business.php','cloud-services.php'];
$industry_pages = ['telecom-services.php','talent-acquisition-solutions.php','education-solutions.php','smart-city-surveillance.php'];
$product_pages  = ['xims-invoice-management-system.php','xt-vms-visitor-management-system.php','foodways.php','salon-management-system.php','xevent.php','human-resource-management-system.php','sports-academy-management-system.php'];
?>
<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden;">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Xpansion Technologies | Digital Engineering, Cloud, AI & IT Solutions Company</title>

    <meta name="description"
        content="Xpansion Technologies delivers advanced digital engineering, cloud transformation, AI solutions, smart city platforms, and enterprise IT services to help businesses innovate, scale, and achieve measurable growth with secure and future-ready technology.">

    <meta name="keywords"
        content="Xpansion Technologies, IT solutions company, digital engineering services, cloud transformation, AI solutions, smart city technology, business intelligence services, enterprise software development, IT consulting company, scalable technology solutions, digital transformation services">

    <!-- Favicons -->
    <link href="assets2/images/favicon.png" rel="icon">
    <link href="assets2/images/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400&family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,400&family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
    <link href="assets2/css/bootstrap-icons.css" rel="stylesheet">
    <link href="assets2/css/glightbox.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Site Styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="assets2/css/style.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container position-relative d-flex align-items-center justify-content-between">

            <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0" aria-label="Xpansion Technologies – Home">
                <img src="assets2/images/logo.png" alt="Xpansion Technologies" class="sitename">
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="index.php"<?= nav_active('index.php') ?>>Home</a></li>
                    <li><a href="about.php"<?= nav_active('about.php') ?>>About Us</a></li>

                    <li class="dropdown<?= in_array($current_page, $services_pages) ? ' active' : '' ?>"><a href="#"><span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="digital-engineering-applications.php"<?= nav_active('digital-engineering-applications.php') ?>>Digital Engineering &amp; Applications</a></li>
                            <li><a href="managed-it-security.php"<?= nav_active('managed-it-security.php') ?>>Managed IT &amp; Security</a></li>
                            <li><a href="ai-intelligent-automation.php"<?= nav_active('ai-intelligent-automation.php') ?>>AI &amp; Intelligent Automation</a></li>
                            <li><a href="data-business.php"<?= nav_active('data-business.php') ?>>Data &amp; Business Intelligence</a></li>
                            <li><a href="cloud-services.php"<?= nav_active('cloud-services.php') ?>>Cloud Services</a></li>
                        </ul>
                    </li>

                    <li class="dropdown<?= in_array($current_page, $industry_pages) ? ' active' : '' ?>"><a href="#"><span>Industry Solutions</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="telecom-services.php"<?= nav_active('telecom-services.php') ?>>Telecom Services</a></li>
                            <li><a href="talent-acquisition-solutions.php"<?= nav_active('talent-acquisition-solutions.php') ?>>Talent Acquisition Services</a></li>
                            <li><a href="education-solutions.php"<?= nav_active('education-solutions.php') ?>>Education Services</a></li>
                            <li><a href="smart-city-surveillance.php"<?= nav_active('smart-city-surveillance.php') ?>>Smart City &amp; Surveillance</a></li>
                        </ul>
                    </li>

                    <li class="dropdown<?= in_array($current_page, $product_pages) || $current_page === 'products.php' ? ' active' : '' ?>"><a href="#"><span>Products</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="xims-invoice-management-system.php"<?= nav_active('xims-invoice-management-system.php') ?>>XIMS – Invoice Management System</a></li>
                            <li><a href="xt-vms-visitor-management-system.php"<?= nav_active('xt-vms-visitor-management-system.php') ?>>XT-VMS – Visitor Management System</a></li>
                            <li><a href="foodways.php"<?= nav_active('foodways.php') ?>>Foodways</a></li>
                            <li><a href="salon-management-system.php"<?= nav_active('salon-management-system.php') ?>>Salon Management System</a></li>
                            <li><a href="xevent.php"<?= nav_active('xevent.php') ?>>xEvent</a></li>
                            <li><a href="human-resource-management-system.php"<?= nav_active('human-resource-management-system.php') ?>>XHRMS – Human Resource Management System</a></li>
                            <li><a href="sports-academy-management-system.php"<?= nav_active('sports-academy-management-system.php') ?>>Sports Academy Management System</a></li>
                        </ul>
                    </li>

                    <li><a href="case-studies.php"<?= nav_active('case-studies.php') ?>>Case Studies</a></li>

                    <li><a href="contact-us.php"<?= nav_active('contact-us.php') ?>>Contact Us</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list" id="mobile-menu-trigger"></i>
            </nav>

            <a class="btn-getstarted" href="contact-us.php">Discuss Project</a>

        </div>

        <!--====================  mobile menu overlay ====================-->
        <div class="mobile-menu-overlay" id="mobile-menu-overlay">
            <div class="mobile-menu-overlay__inner">
                <div class="mobile-menu-overlay__header">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-8">
                                <!-- logo -->
                                <div class="logo">
                                    <a href="index.php">
                                        <img src="assets/images/logo.png" class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-4">
                                <!-- mobile menu content -->
                                <div class="mobile-menu-content text-end">
                                    <span class="mobile-navigation-close-icon" id="mobile-menu-close-trigger"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-menu-overlay__body">
                    <nav class="offcanvas-navigation">
                        <ul style="padding-left:0px;">

                            <!-- Home -->
                            <li><a href="index.php">Home</a></li>

                            <!-- About -->
                            <li><a href="about.php">About Us</a></li>


                            <!-- Our Services -->
                            <li class="has-children">
                                <span class="menu-expand"><i></i></span>
                                <a href="#">Services</a>

                                <ul class="sub-menu" style="display:none;">
                                    <li><a href="digital-engineering-applications.php">Digital Engineering &
                                            Applications</a>
                                    </li>

                                    <li><a href="managed-it-security.php">Managed IT & Security</a>
                                    </li>
                                    <li><a href="ai-intelligent-automation.php">AI & Intelligent Automation</a></li>
                                    <li><a href="data-business.php">Data & Business Intelligence</a></li>
                                    <li><a href="cloud-services.php">Cloud Services</a></li>
                                </ul>
                            </li>

                            <!-- Our Services -->
                            <li class="has-children">
                                <span class="menu-expand"><i></i></span>
                                <a href="#">Industry
                                    Solutions</a>

                                <ul class="sub-menu" style="display:none;">
                                    <li><a href="telecom-services.php">Telecom Services</a></li>
                                    <li><a href="talent-acquisition-solutions.php"> Talent Acquisition Services </a>
                                    </li>
                                    <li><a href="education-solutions.php">Education Services </a>
                                    </li>
                                    <li><a href="smart-city-surveillance.php">Smart City & Surveillance</a></li>
                                </ul>
                            </li>


                            <!-- Products -->
                            <li class="has-children">
                                <span class="menu-expand"><i></i></span>
                                <a href="#">Products</a>

                                <ul class="sub-menu" style="display:none;">
                                    <li><a href="xims-invoice-management-system.php">XIMS - Invoice Management System</a>
                                    </li>
                                    <li><a href="xt-vms-visitor-management-system.php">XT-VMS - Visitor Management
                                            System</a></li>
                                    <li><a href="foodways.php">Foodways</a></li>
                                    <li><a href="salon-management-system.php">Salon Management System</a></li>
                                    <li><a href="xevent.php">xEvent</a></li>
                                    <li><a href="human-resource-management-system.php">XHRMS - Human Resource Management
                                            System</a></li>
                                    <li><a href="sports-academy-management-system.php">Sports Academy Management System</a>
                                    </li>
                                </ul>
                            </li>


                            <!-- Case Studies -->
                            <li><a href="case-studies.php">Case Studies</a></li>

                            <!-- News -->
                            <!-- <li><a href="news-pr">News &amp; PR</a></li> -->

                            <!-- Contact -->
                            <li><a href="contact-us.php">Contact Us</a></li>

                        </ul>
                    </nav>

                </div>
            </div>
        </div>
        <!--====================  End of mobile menu overlay  ====================-->

    </header>
