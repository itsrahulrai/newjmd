<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
    <meta charset="utf-8">
    <title>New Project</title>

    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Themesflat Modave, Multipurpose eCommerce Template">

    <!-- Head link Start -->
    <?php include './includes/head-link.php' ?>
    <!-- Head link End -->

</head>

<body class="preload-wrapper">

    <?php include './includes/scoller.php' ?>


    <div id="wrapper">

        <!-- Header -->
        <?php include './includes/header.php' ?>
        <!-- page-title -->
        <div class="page-title" style="background-image: url(images/section/page-title.jpg);">
            <div class="container-full">
                <div class="row">
                    <div class="col-12">
                        <h3 class="heading text-center">Women</h3>
                        <ul class="breadcrumbs d-flex align-items-center justify-content-center">
                            <li>
                                <a class="link" href="index.html">Homepage</a>
                            </li>
                            <li>
                                <i class="icon-arrRight"></i>
                            </li>
                            <li>
                                Women
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page-title -->
        <!-- Section product -->
        <section class="flat-spacing">
            <div class="container">
                <div class="wrapper-control-shop">
                    <div class="meta-filter-shop">
                        <div id="product-count-grid" class="count-text"></div>
                        <div id="product-count-list" class="count-text"></div>
                        <div id="applied-filters"></div>
                        <button id="remove-all" class="remove-all-filters text-btn-uppercase" style="display: none;">REMOVE ALL <i class="icon icon-close"></i></button>
                    </div>
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="sidebar-filter canvas-filter left">
                                <div class="canvas-wrapper">
                                    <div class="canvas-header d-flex d-xl-none">
                                        <h5>Filters</h5>
                                        <span class="icon-close close-filter"></span>
                                    </div>
                                    <div class="canvas-body">
                                        <div class="widget-facet facet-categories">
                                            <h6 class="facet-title">Product Categories</h6>
                                            <ul class="facet-content">
                                                <li><a href="#" class="categories-item active">MCB & RCCB</a></li>
                                                <li><a href="#" class="categories-item">SWITCHES & ACCESSORIES</a></li>
                                                <li><a href="#" class="categories-item">DISTRIBUITION BOARDS </a></li>
                                                <li><a href="#" class="categories-item">WIRES & CABLES</a></li>
                                                <li><a href="#" class="categories-item">SWITCHGEARSS</a></li>
                                                <li><a href="#" class="categories-item">ELECTRICAL ACCESSORIES</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9">
                            <div class="tf-grid-layout wrapper-shop tf-col-3" id="gridLayout">
                                <!-- Card 1 -->
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="images/collections/grid-cls/DP.png" alt="Washing Machine">
                                    </div>
                                    <h3 class="product-title"><a href="products-details.php">GOLD SERIES</a></h3>
                                    <p class="product-description">Enhance your space with the GOLD SERIES MCB & RCCB</p>
                                    <a href="products-details.php" class="view-btn">View More <i class="icon icon-arrowUpRight"></i></a>
                                </div>
                                <!-- Card 1 -->
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="images/collections/grid-cls/DP.png" alt="Washing Machine">
                                    </div>
                                    <h3 class="product-title">GOLD SERIES</h3>
                                    <p class="product-description">Enhance your space with the GOLD SERIES MCB & RCCB</p>
                                    <a href="#" class="view-btn">View More <i class="icon icon-arrowUpRight"></i></a>
                                </div>
                                <!-- Card 1 -->
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="images/collections/grid-cls/DP.png" alt="Washing Machine">
                                    </div>
                                    <h3 class="product-title">GOLD SERIES</h3>
                                    <p class="product-description">Enhance your space with the GOLD SERIES MCB & RCCB</p>
                                    <a href="#" class="view-btn">View More <i class="icon icon-arrowUpRight"></i></a>
                                </div>



                                <!-- pagination -->
                                <ul class="wg-pagination justify-content-center">
                                    <li><a href="#" class="pagination-item text-button">1</a></li>
                                    <li class="active">
                                        <div class="pagination-item text-button">2</div>
                                    </li>
                                    <li><a href="#" class="pagination-item text-button">3</a></li>
                                    <li><a href="#" class="pagination-item text-button"><i class="icon-arrRight"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- /Section product -->


        <!-- Footer Section Start -->
        <?php include "./includes/footer.php" ?>
        <!-- Footer Sectuin End -->


    </div>

    <!-- Footer Section Start -->
    <?php include "./includes/footer-link.php" ?>
    <!-- Footer Sectuin End -->
</body>

</html>