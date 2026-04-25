 <?php include'includes/header.php'; ?>
<style>
.service-details .service-hero {
    margin-bottom: 10px;
}

.service-details .service-overview .overview-label {
    margin-bottom: 5px;
}

.service-details .service-overview h2 {
    margin-bottom: 10px;
    font-size: 30px;
}

.service-details .service-overview p {
    margin-bottom: 10px;
}

.service-details .service-hero .service-badge {
    top: 15px;
    left: 15px;
    gap: 5px;
    padding: 5px 10px;
    font-size: 11px;
}

.service-details .service-hero .service-badge i {
    font-size: 11px;
}

@media (max-width: 768px) {
    .service-details .service-overview h2 {
        font-size: 24px;
    }
}
</style>
<main class="main">

    <section class="inner-banner text-center">
        <div class="container content">
            <h1>News &amp; PR </h1>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <!--  <li class="breadcrumb-item"><a href="#">About Us</a></li> -->
                    <li class="breadcrumb-item active" aria-current="page">News &amp; PR </li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

        <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-5">

                <!-- Main Content Column -->
                <div class="col-lg-8">

                    <?php
include('includes/db_con.php');

$sql = "SELECT 
            b.id,
            b.blog_heading,
            b.blog_desc_two,
            b.blog_url,
            b.created_at,
            bi.image
        FROM blogs b
        LEFT JOIN blogs_images bi 
            ON b.id = bi.blog_id
            AND bi.id = (
                SELECT MIN(id) 
                FROM blogs_images 
                WHERE blog_id = b.id
            )
        ORDER BY b.id DESC";

$result = $con->query($sql);

if ($result && $result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

        $heading   = $row['blog_heading'];
        $desc      = $row['blog_desc_two'];
        $url       = $row['blog_url'];
        $date      = $row['created_at'];
        $image     = $row['image'];

?>
                    <!-- Blog Hero Image -->
                    <div class="service-hero" data-aos="fade-up" data-aos-delay="100">
                        <a href="news_pr/<?php echo $url; ?>">
                            <img src="news_pr/blog_uploads/<?php echo $image; ?>" alt="<?php echo $heading; ?>"
                                class="img-fluid">
                        </a>

                        <div class="service-badge">
                            <i class="bi bi-star-fill"></i>
                            <span><?php echo $heading; ?></span>
                        </div>
                    </div>


                    <!-- Blog Overview -->
                    <div class="service-overview" data-aos="fade-up" data-aos-delay="200">

                        <div class="overview-label">
                            <span class="dot"></span>
                            <span><?php echo date("d-m-Y", strtotime($date)); ?></span>
                        </div>

                        <h2>
                            <a href="news_pr/<?php echo $url; ?>">
                                <?php echo $heading; ?>
                            </a>
                        </h2>

                        <p>
                            <?php echo substr(strip_tags($desc), 0, 180); ?>...
                        </p>

                        <a class="btn-getstarted read-more" href="news_pr/<?php echo $url; ?>">
                            Read more
                        </a>

                    </div>

                    <?php
    }
} else {
?>
                    <div class="alert alert-warning text-center">
                        Blog not found!
                    </div>
                    <?php
}
?>

                </div><!-- End Main Content Column -->

                <!-- Sidebar Column -->
                <div class="col-lg-4">

                    <!-- Service List -->
                    <div class="sidebar-widget service-list aos-init aos-animate" data-aos="fade-up"
                        data-aos-delay="200">
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
                                        href="news_pr/<?php echo $url; ?>">

                                        <img style="object-fit:cover;" src="news_pr/blog_uploads/<?php echo $image; ?>"
                                            alt="<?php echo $heading; ?>" width="60" height="60" class="rounded me-2"
                                            loading="lazy">

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
                    <div class="sidebar-widget stats-widget aos-init" data-aos="fade-up" data-aos-delay="300">
                        <div class="stat-item">
                            <div class="stat-number">
                                <span data-purecounter-start="0" data-purecounter-end="850"
                                    data-purecounter-duration="1" class="purecounter">850</span>+
                            </div>
                            <p>Projects Delivered</p>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">
                                <span data-purecounter-start="0" data-purecounter-end="99" data-purecounter-duration="1"
                                    class="purecounter">99</span>%
                            </div>
                            <p>Client Satisfaction</p>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">
                                <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1"
                                    class="purecounter">24</span>/7
                            </div>
                            <p>Support Available</p>
                        </div>
                    </div><!-- End Stats Widget -->


                    <!-- CTA Widget -->
                    <div class="sidebar-widget cta-widget aos-init" data-aos="fade-up" data-aos-delay="500">
                        <div class="cta-content">
                            <div class="cta-icon">
                                <i class="bi bi-chat-dots"></i>
                            </div>
                            <h3>Ready to Transform Your Business?</h3>
                            <p>Connect with our specialists for a complimentary consultation.</p>
                            <a href="contact-us.php" class="cta-btn">Schedule a Call <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End CTA Widget -->

                </div><!-- End Sidebar Column -->

            </div>

            <!-- Service Overview -->
        </div>

    </section><!-- /Service Details Section -->



</main>

<?php include'includes/footer.php'; ?>
