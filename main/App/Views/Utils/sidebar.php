<?php
$user_names=$_SESSION['user_names'];
$user_id=$_SESSION['user_id'];
$user_type=$_SESSION['user_type'];
?>
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile">
            <!-- User profile image -->
            <div class="profile-img"> <img src="assets/images/users/profile.png" alt="user" />
                <!-- this is blinking heartbit-->
                <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
            </div>
            <!-- User profile text-->
            <div class="profile-text">
                <h5><?php echo $user_names ; ?></h5>
                <a href="logout" class="" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
            </div>
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-devider"></li>
                <li class="nav-small-cap">NAVIGATION MENUS</li>
                <li style="background: #FFF;"> <a class="menu"  style="background:none;color: #2B6ECE;"
                    href="dashboard?action=buy">
                    <i class="fa fa-dashboard menu" aria-hidden="true"></i>
                    <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
            <?php 
            if($user_type=="ADMIN"){
                ?>
                <?php
            }elseif($user_type=="FINANCE"){
                ?>
                <?php
            }elseif($user_type=="STOCK"){
                ?>
                
                <?php
            }
            ?>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>