
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <meta charset="utf-8">
    <title>Contact Us - Do not Hesitate to reach us</title>
    <?php include 'App/Views/Home/meta.php'; ?>
    <?php include 'App/Views/Home/styles.php'; ?>
</head>

<body class="page no-sidebar header-style-1 menu-has-search menu-has-cart">

<div id="wrapper" class="animsition">
<div id="page" class="clearfix">
<?php include 'App/Views/Products/header.php'; ?>
<!-- Main Content -->
<div id="main-content" class="site-main clearfix" style="margin-top: 7%;">
    <div id="content-wrap">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <div class="page-content">
                    <section class="wprt-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="80" data-mobi="60" data-smobi="60"></div>
                                    <div id="map" class="wprt-gmap"></div>
                                    <div class="wprt-spacer" data-desktop="50" data-mobi="40" data-smobi="40"></div>
                                </div><!-- /.col-md-12 -->

                                <div class="col-md-4">
                                    <div class="wprt-information">
                                        <h4 class="margin-bottom-15">CALL US</h4>
                                        <p>
                                            Pajo Group, a full-service interior design firm is based in Kigali- Rwanda. Pajo Group is committed to design excellence, responsibility and sustainability. Dedicated to the creation of custom interiors, the company prides itself ....
                                        </p>
                                        <ul class="style-2">
                                            <li class="address">
                                                <span class="hl">Address:</span>
                                                <span class="text">
                                                    Pajo Group Industries, Rugenge, Kigali.KG 7 Ave/RN3 and KG 3 Ave
                                                </span>
                                            </li>
                                            <li class="phone">
                                                <span class="hl">Phone:</span> 
                                                <span class="text">+250 788307212</span>
                                            </li>
                                            <li class="email">
                                                <span class="hl">E-mail:</span>
                                                <span class="text">pajogroup@gmail.com </span>
                                            </li>
                                        </ul>
                                    </div><!-- /.wprt-information -->

                                    <div class="wprt-spacer" data-desktop="0" data-mobi="30" data-smobi="30"></div>
                                </div><!-- /.col-md-4 -->
                                <?php include 'App/Views/Contact/contact_form.php'; ?>
                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="80" data-mobi="60" data-smobi="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
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

<!-- Javascript -->
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/animsition.js"></script>
<script type="text/javascript" src="assets/js/plugins.js"></script>
<script type="text/javascript" src="assets/js/countTo.js"></script>
<script type="text/javascript" src="assets/js/flexslider.js"></script>
<script type="text/javascript" src="assets/js/cube.portfolio.js"></script>
<script type="text/javascript" src="assets/js/validate.js"></script>
<script type="text/javascript">
function initMap(){
    var location={lat:-1.9423737, lng:30.064546}
    var map=new google.maps.Map(document.getElementById("map"),{
        zoom:15,
        center:location
    });
    var marker=new google.maps.Marker({
        position:location,
        map:map
    });
}

</script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABuWFjvR1jzYy8sHT36anbqJnJfMQNyiw&callback=initMap"></script>
<script type="text/javascript" src="assets/js/main.js"></script>

</body>
</html>
