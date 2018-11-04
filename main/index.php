<?php
require_once '../cons.php';
$root_url=ROOT_URL;
require $root_url.'/App/Views/Utils/auth.php';
$user_type=$_SESSION['user_type'];
// if($user_type!='ADMIN'){
//     header("Location:forbidden");
//     exit();
// }
?>
<!DOCTYPE html>
<html lang="en">
<?php 
require_once $root_url.'/App/Views/Home/header.php';
?>

<body class="fix-header fix-sidebar card-no-border">
    <div id="main-wrapper">
        <?php 
        include $root_url.'/App/Views/Utils/navigation.php';
        ?>
        <?php 
        include $root_url.'/App/Views/Utils/sidebar.php';
        ?>
        <div class="page-wrapper">
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Dashboard</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
                <div>
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>
            <div class="container-fluid">
                <?php 
                include $root_url.'/App/Views/Home/dashboard.php';
                ?>
                <!-- .right-sidebar -->
                <?php 
                require_once $root_url.'/App/Views/Utils/rightbar.php';
                ?>
            </div>
            <?php 
            require $root_url.'/App/Views/Utils/footer.php';
            ?>
        </div>
    </div>
    <?php 
    require $root_url.'/App/Views/Utils/scripts.php';
    ?>
</body>

</html>