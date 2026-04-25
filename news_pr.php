<?php
include 'includes/db_con.php';

if (isset($_GET['page_url']))
{

    $page_url = mysqli_real_escape_string($con, $_GET['page_url']);


    $blog_query = "SELECT * FROM blogs WHERE blog_url = '$page_url'";
    $blog_result = mysqli_query($con, $blog_query);

    if ($blog_result && mysqli_num_rows($blog_result) > 0)
    {

        $blog = mysqli_fetch_assoc($blog_result);


        $image_query = "SELECT * FROM blogs_images WHERE blog_id = '{$blog['id']}'";
        $image_result = mysqli_query($con, $image_query);
        ?>


<?php
    } else
    {

        echo "<p>Product not found.</p>";
    }
} else
{

    echo "<p>No product URL provided.</p>";
}
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx" dir="ltr">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $blog['blog_desc_first'] ?></title>
    <meta name="description" content="<?php echo $blog['blog_desc_second'] ?>">
    <meta name="keywords" content="<?php echo $blog['blog_point_one'] ?>">
    <link rel="icon" href="../assets/images/favicon.png">
    <!-- Favicons -->
    <link href="../assets2/images/favicon.png" rel="icon">
    <link href="../assets2/images/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- ===CSS-1=== -->
    <link rel="stylesheet" href="../assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="../assets/css/plugins/plugins.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">

    <!-- jQuery JS -->
    <script src="../assets/js/vendor/jquery-3.5.1.min.js"></script>
    <!-- ===CSS-1 ENDS===-->

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&amp;family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets2\css\bootstrap.min.css" rel="stylesheet">
    <link href="../assets2\css\bootstrap-icons.css" rel="stylesheet">
    <link href="../assets2\css\glightbox.min.css" rel="stylesheet">
    <link href="../assets2\css\swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets2\css\bootstrap.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="../assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="../assets/css/plugins/plugins.min.css">
    <link rel="icon" href="../assets/images/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- jQuery JS -->
    <script src="../assets/js/vendor/jquery-3.5.1.min.js"></script>
    <!-- Main CSS File -->
    <link href="../assets2\css\style.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
    .service-details .stats-widget .stat-item p,
    .service-details .cta-widget p {
        color: #fff !important;
        text-align: center;
    }

    p {
        box-sizing: border-box;
        margin-right: 0px;
        margin-bottom: 20px;
        margin-left: 0px;
        padding: 0px;
        color: #696969 !important;
        font-family: inherit !important;
        font-size: 15px;
        letter-spacing: 1px;
        text-align: justify;
    }


    .blog-content * {
        box-sizing: border-box;
        margin: 0 0 20px 0;
        padding: 0;
        color: #696969 !important;
        font-family: inherit !important;
        font-size: 15px;
        letter-spacing: 1px;
        text-align: justify;
    }

    .blog-content h1,
    .blog-content h2,
    .blog-content h3,
    .blog-content h4,
    .blog-content h5,
    .blog-content h6 {
        font-size: 20px !important;
        color: #000000 !important;
        font-weight: bold;

    }

    .page-sidebar-right {
        padding-left: 0px;
        background: #ededed;
        color: white;
        padding: 13px;
    }

    .widget-blog-recent-post ul li a::after,
    .widget-blog-recent-post ul li a::before {
        display: none;
    }

    .widget-blog-recent-post ul li a {

        padding: 15px;
        border: 1px solid #9aa3ad;
        border-radius: 8px;
    }

    .single-blog-item .post-feature img {
        border: 1px solid #bfbfbf;
    }

    @media (min-width: 320px) and (max-width: 470px) {
        .blog-content * {

            font-size: 14px !important;
        }

        p {
            font-size: 14px !important;
        }


    }
    </style>
</head>

<body>

    <!--====================  header area ====================-->
    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container position-relative d-flex align-items-center justify-content-between">

            <a href="../index" class="logo d-flex align-items-center me-auto me-xl-0">

                <h1 class="sitename"><img src="../assets2/images/logo.png" alt="logo"></h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="../index" class="active">Home</a></li>
                    <li><a href="../about">About Us</a></li>


                    <li class="dropdown"><a href="#"><span> Services</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="../our-services#engineering-applications">Digital Engineering &
                                    Applications</a></li>
                            <li><a href="../our-services#it-security">Managed IT & Security</a></li>
                            <li><a href="../our-services#ai-intelligent">AI & Intelligent Automation</a></li>
                            <li><a href="../our-services#data-business">Data & Business Intelligence</a></li>
                            <li><a href="../our-services#cloud">Cloud Services</a></li>
                        </ul>
                    </li>

                    <li class="dropdown"><a href="#"><span> Industry
                                Solutions</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="../telecom-services">Telecom Services</a></li>
                            <li><a href="../talent-acquisition-solutions"> Talent Acquisition Services </a>
                            </li>
                            <li><a href="../education-solutions">Education Solutions </a>
                            </li>
                            <li><a href="../smart-city-surveillance">Smart City & Surveillance</a></li>
                        </ul>
                    </li>


                    <li class="dropdown"><a href="#"><span>Products</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="../xims-invoice-management-system">XIMS- Invoice Management System</a></li>
                            <li><a href="../xt-vms-visitor-management-system">XT-VMS- Visitor Management System </a>
                            </li>
                            <li><a href="../foodways">Foodways </a></li>
                            <li><a href="../salon-management-system">Salon Management System </a></li>
                            <li><a href="../xevent">xEvent </a></li>
                            <li><a href="../human-resource-management-system">XHRMS- Human Resource Management System
                                </a>
                            </li>
                            <li><a href="../sports-academy-management-system"> Sports Academy Management System </a>
                            </li>

                        </ul>
                    </li>

                    <li><a href="../case-studies">Case Studies</a></li>
                    <!-- <li><a href="../news-pr">News &amp; PR </a></li> -->

                    <li><a href="contact-us.php">Contact Us</a></li>
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
                                    <a href="../index">
                                        <img src="../assets/images/logo.png" class="img-fluid" alt="">
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
                            <li><a href="../index">Home</a></li>

                            <!-- About -->
                            <li><a href="../about">About Us</a></li>


                            <!-- Our Services -->
                            <li class="has-children">
                                <span class="menu-expand"><i></i></span>
                                <a href="../#">Services</a>

                                <ul class="sub-menu" style="display:none;">
                                    <li><a href="../our-services#engineering-applications">Digital Engineering &
                                            Applications</a></li>
                                    <li><a href="../our-services#it-security">Managed IT & Security</a></li>
                                    <li><a href="../our-services#ai-intelligent">AI & Intelligent Automation</a></li>
                                    <li><a href="../our-services#data-business">Data & Business Intelligence</a></li>
                                    <li><a href="../our-services#cloud">Cloud Services</a></li>
                                </ul>
                            </li>

                            <!-- Our Services -->
                            <li class="has-children">
                                <span class="menu-expand"><i></i></span>
                                <a href="#">Industry
                                    Solutions</a>

                                <ul>
                                    <li><a href="../telecom-services">Telecom Services</a></li>
                                    <li><a href="../talent-acquisition-solutions"> Talent Acquisition Services </a>
                                    </li>
                                    <li><a href="../education-solutions">Education Solutions </a>
                                    </li>
                                    <li><a href="../smart-city-surveillance">Smart City & Surveillance</a></li>
                                </ul>
                            </li>


                            <!-- Products -->
                            <li class="has-children">
                                <span class="menu-expand"><i></i></span>
                                <a href="#">Products</a>

                                <ul class="sub-menu" style="display:none;">
                                    <li><a href="../xims-invoice-management-system">XIMS - Invoice Management System</a>
                                    </li>
                                    <li><a href="../xt-vms-visitor-management-system">XT-VMS - Visitor Management
                                            System</a></li>
                                    <li><a href="../foodways">Foodways</a></li>
                                    <li><a href="../salon-management-system">Salon Management System</a></li>
                                    <li><a href="../xevent">xEvent</a></li>
                                    <li><a href="../human-resource-management-system">XHRMS - Human Resource Management
                                            System</a></li>
                                    <li><a href="../sports-academy-management-system">Sports Academy Management
                                            System</a>
                                    </li>
                                </ul>
                            </li>


                            <!-- Case Studies -->
                            <li><a href="../case-studies">Case Studies</a></li>

                            <!-- News -->
                            <!-- <li><a href="../news-pr">News &amp; PR</a></li> -->

                            <!-- Contact -->
                            <li><a href="contact-us.php">Contact Us</a></li>

                        </ul>
                    </nav>

                </div>
            </div>
        </div>
        <!--====================  End of mobile menu overlay  ====================-->

    </header>
    <!--====================  End of header area  ====================-->



    <div id="main-wrapper">
        <div class="site-wrapper-reveal">
            <!-- breadcrumb-area start -->
            <section class="inner-banner text-center">
                <div class="container content">
                    <h1><?php echo $blog['blog_desc_first'] ?> </h1>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">News &amp; PR </li>
                        </ol>
                    </nav>
                </div>
            </section>
            <!--====================  Blog Area Start ====================-->
            <div class="blog-pages-wrapper">
                <div class="container service-details">
                    <div class="row">

                        <div class="col-lg-4 order-lg-2 order-2">
                            <!-- Service List -->
                            <div class="sidebar-widget service-list ">
                                <h3>Recent Posts</h3>
                                <ul>

                                    <?php
                            $sql = "SELECT 
                                        b.id,
                                        b.blog_heading,
                                        b.blog_url,
                                        bi.image
                                    FROM blogs b
                                    LEFT JOIN blogs_images bi 
                                        ON b.id = bi.blog_id
                                        AND bi.id = (
                                            SELECT MIN(id) 
                                            FROM blogs_images 
                                            WHERE blog_id = b.id
                                        )
                                    ORDER BY b.id DESC
                                    LIMIT 3";

                            $result = $con->query($sql);

                            if ($result && $result->num_rows > 0) {

                                while ($row = $result->fetch_assoc()) {

                                    $heading = $row['blog_heading'];
                                    $url     = $row['blog_url'];
                                    $image   = $row['image'];
                            ?>

                                    <li>
                                        <div class="list-group mb-3">
                                            <a class="list-group-item list-group-item-action d-flex align-items-center"
                                                href="<?php echo $url; ?>">

                                                <img style="object-fit:cover;" src="blog_uploads/<?php echo $image; ?>"
                                                    alt="<?php echo $heading; ?>" width="60" height="60"
                                                    class="rounded me-2" loading="lazy">

                                                <span>
                                                    <strong>
                                                        <?php echo substr($heading, 0, 70); ?>...
                                                    </strong>
                                                </span>

                                            </a>
                                        </div>
                                    </li>

                                    <?php
                                }
                            } else {
                            ?>

                                    <li>
                                        <div class="alert alert-warning">
                                            No latest blogs found
                                        </div>
                                    </li>

                                    <?php } ?>

                                </ul>
                            </div><!-- End Service List -->


                            <!-- Stats Widget -->
                            <div class="sidebar-widget stats-widget">
                                <div class="stat-item">
                                    <div class="stat-number">
                                        <span data-purecounter-start="0" data-purecounter-end="850"
                                            data-purecounter-duration="1" class="purecounter">850</span>+
                                    </div>
                                    <p>Projects Delivered</p>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-number">
                                        <span data-purecounter-start="0" data-purecounter-end="99"
                                            data-purecounter-duration="1" class="purecounter">99</span>%
                                    </div>
                                    <p>Client Satisfaction</p>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-number">
                                        <span data-purecounter-start="0" data-purecounter-end="24"
                                            data-purecounter-duration="1" class="purecounter">24</span>/7
                                    </div>
                                    <p>Support Available</p>
                                </div>
                            </div><!-- End Stats Widget -->


                            <!-- CTA Widget -->
                            <div class="sidebar-widget cta-widget">
                                <div class="cta-content">
                                    <div class="cta-icon">
                                        <i class="bi bi-chat-dots"></i>
                                    </div>
                                    <h3>Ready to Transform Your Business?</h3>
                                    <p>Connect with our specialists for a complimentary consultation.</p>
                                    <a href="contact-us.php" class="cta-btn">Schedule a Call <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div><!-- End CTA Widget -->

                        </div>
                        <div class="col-lg-8 order-lg-1 order-1">
                            <div class="main-blog-wrap">
                                <!--======= Single Blog Item Start ========-->
                                <div class="single-blog-item">
                                    <!-- Post Feature Start -->
                                    <div class="post-feature blog-thumbnail wow move-up"> <?php

                                    $image_row = mysqli_fetch_assoc($image_result);
                                    if ($image_row)
                                    {
                                        echo "<img src='blog_uploads/{$image_row['image']}' class='img-fluid' />";
                                    } else
                                    {
                                        echo "<p>No product images available.</p>";
                                    }
                                    ?>
                                    </div>
                                    <!-- Post Feature End -->

                                    <!-- Post info Start -->
                                    <div class="post-info lg-blog-post-info  wow move-up">
                                        <div class="post-categories">
                                            <a href="#"> Xpansion Technologies</a>
                                        </div>

                                        <h3 class="post-title">
                                            <?php echo $blog['blog_heading'] ?>
                                        </h3>

                                        <div class="post-meta mt-20">

                                            <div class="post-date">
                                                <span class="far fa-calendar meta-icon"></span>
                                                <?php echo date("F d, Y", strtotime($blog['created_at'])); ?>
                                            </div>


                                        </div>

                                        <div class="post-excerpt mt-15 blog-content">
                                            <p>
                                                <?php echo $blog['blog_desc_two'] ?>
                                            </p>





                                        </div>

                                    </div>
                                    <!-- Post info End -->
                                </div>
                                <!--===== Single Blog Item End =========-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====================  Blog Area End  ====================-->

            <div class="contact-us-section-wrappaer machine-learning-contact-us-bg section-space--ptb_120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6">
                            <div class="conact-us-wrap-three">
                                <h6 class="mb-3 section-sub-title">Let’s Connect</h6>
                                <h3 class="heading text-white">Start Your Digital & AI Transformation Journey With Us
                                </h3>
                            </div>
                            <div class="contact-info-two mt-40 text-left">
                                <div class="contact-us-button mt-20">
                                    <a href="contact-us.php" class="btn btn--secondary" style="line-height: 2.5;">Contact
                                        us</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Toolbar -->
    <!--====================  scroll top ====================-->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top fas fa-chevron-up"></i>
        <i class="arrow-bottom fas fa-chevron-up"></i>
    </a>
    <!--====================  End of scroll top  ====================-->



    <footer id="footer" class="footer light-background">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-3 col-md-6 footer-info">
                    <a href="../index" class="logo d-flex align-items-center mb-4">
                        <span class="sitename"><img src="../assets2/images/logo.png" alt="logo"
                                class="footer-logo"></span>
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
                        <a href="https://www.instagram.com/xpansiontechnologies/" aria-label="Instagram"
                            target="_blank"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="../our-services#engineering-applications">Digital Engineering & Applications</a>
                        </li>
                        <li><a href="../our-services#it-security">Managed IT & Security</a></li>
                        <li><a href="../our-services#ai-intelligent">AI & Intelligent Automation</a></li>
                        <li><a href="../our-services#data-business">Data & Business Intelligence</a></li>
                        <li><a href="../our-services#cloud">Cloud Services</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Products</h4>
                    <ul>
                        <li><a href="../xims-invoice-management-system">XIMS- Invoice Management System</a></li>
                        <li><a href="../xt-vms-visitor-management-system">XT-VMS- Visitor Management System </a></li>
                        <li><a href="../foodways">Foodways </a></li>
                        <li><a href="../salon-management-system">Salon Management System </a></li>
                        <li><a href="../xevent">xEvent </a></li>
                        <li><a href="../human-resource-management-system">XHRMS- Human Resource Management System </a>
                        </li>
                        <li><a href="../sports-academy-management-system"> Sports Academy Management System </a></li>
                    </ul>
                </div>



                <div class="col-lg-3 col-md-6">
                    <div class="footer-newsletter">
                        <h4>Stay Updated</h4>
                        <p>Subscribe to our newsletter for exclusive offers, new arrivals, and fashion tips.</p>
                        <form action="forms/newsletter.php" method="post" class="php-email-form">
                            <div class="position-relative">
                                <input type="email" name="email" placeholder="Your Email" required="">
                                <button type="submit" class="btn-subscribe"><i class="bi bi-arrow-right"></i></button>
                            </div>
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container footer-bottom">
            <div class="row gy-3">
                <div class="col-md-6 order-2 order-md-1">
                    <div class="copyright">
                        <p>© <span>Copyright 2026</span> <strong class="sitename">Xpansion Technologies</strong>. All
                            Rights
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
    <script src="../assets2\js\bootstrap.bundle.min.js"></script>
    <script src="../assets2\js\aos.js"></script>
    <script src="../assets2\js\glightbox.min.js"></script>
    <script src="../assets2\js\imagesloaded.pkgd.min.js"></script>
    <script src="../assets2\js\isotope.pkgd.min.js"></script>
    <script src="../assets2\js\purecounter_vanilla.js"></script>
    <script src="../assets2\js\swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Main JS File -->
    <script src="../assets/js/main.js"></script>
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



</body>

</html>
