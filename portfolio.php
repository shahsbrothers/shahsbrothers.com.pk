<section id="portfolio" class="portfolio">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Products </h2>
        </div>
        <div class="row portfolio-container">

            <?php
            include_once('core/get_products.php');
            foreach ($products as $p) {
                
            ?>
                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="<?php echo substr($p['thumb'],3) ?>" class="img-fluid" alt="<?php echo $p['title'] ?>">
                        <div class="portfolio-info">
                            <h4> <?php echo $p['title'] ?> </h4>
                            <p><?php echo $p['description'] ?></p>
                            <div class="portfolio-links">
                                <a href="<?php echo substr($p['thumb'],3) ?>" data-gall="portfolioGallery" class="venobox" title="<?php echo $p['title'] ?>"><i class="fas fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>

    </div>
</section>