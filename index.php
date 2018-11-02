<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <title>Pajo Group | Quality is Our Reference.</title>
    <?php include 'App/Views/Home/meta.php'; ?>
    <?php include 'App/Views/Home/styles.php'; ?>
</head>

<body class="front-page no-sidebar site-layout-full-width header-style-5 menu-has-search menu-has-cart header-sticky">

<div id="wrapper" class="animsition">
<div id="page" class="clearfix">
<?php include 'App/Views/Home/header.php'; ?>
<?php include 'App/Views/Home/slideshow.php'; ?>

<!-- Main Content -->
<div id="main-content" class="site-main clearfix">
    <div id="content-wrap">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <div class="page-content">

                    <!-- Promotion -->
                    <section class="wprt-section promotion">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="wprt-spacer" data-desktop="8" data-mobi="8" data-smobi="8"></div>
                                    <h2 class="text-white text-center-mobile argin-bottom-0" style="font-size: 16px;">
                                        You can Request an Invoice in advance and get it as PDF file (<i class="fa fa-info"></i> No need to leave your place.).
                                    </h2>
                                    <div class="wprt-spacer" data-desktop="0" data-mobi="20" data-smobi="20"></div>
                                </div><!-- /.col-md-8 -->

                                <div class="col-md-4">
                                    <div class="text-right text-center-mobile"><a href="#" class="wprt-button white rounded-3px">GET AN INVOICE</a></div>
                                    <div class="wprt-spacer" data-desktop="0" data-mobi="15" data-smobi="15"></div>
                                </div><!-- /.col-md-4 -->

                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section>

                    <!-- SERVICES -->
                    <section id="services-section" class="wprt-section services">
                        <?php include 'App/Views/Home/services_section.php'; ?>
                    </section>

                    <!-- WORKS -->
                    <section class="wprt-section works parallax">
                        <?php include 'App/Views/Home/featured_works.php'; ?>
                    </section>

                    <!-- WHY CHOOSE US -->
                    <section class="wprt-section">
                        <?php include 'App/Views/Home/why.php'; ?>
                    </section>

                    <!-- OFFER -->
                    <section class="wprt-section offer">
                        <?php include 'App/Views/Home/offer.php'; ?>
                    </section>

                    <!-- FACTS -->
                    <section class="wprt-section facts parallax">
                        <?php include 'App/Views/Home/fact.php'; ?>
                    </section>

                    <!-- TESTIMONIALS -->
                    <section class="wprt-section testiminials">
                        <?php include 'App/Views/Home/testimony.php'; ?>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'App/Views/Utils/web_footer.php'; ?>
</div><!-- /#page -->
</div><!-- /#wrapper -->

<a id="scroll-top"></a>

<?php include 'App/Views/Utils/home_script.php'; ?>

</body>
</html>
