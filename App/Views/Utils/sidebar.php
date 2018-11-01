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
                <li style="background: #FFF;"> <a class="has-arrow waves-effect waves-dark"  style="background:none;" 
                    href="dashboard">
                    <i class="fa fa-users menu" aria-hidden="true"></i>
                    <span class="hide-menu">Manage Users</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="users">System Users </a></li>
                        <li><a href="#">Clients</a></li>
                        <li><a href="suppliers">Suppliers</a></li>
                    </ul>
                </li>
                <li style="background: #FFF;"> <a class="has-arrow waves-effect waves-dark"  style="background:none;" 
                    href="dashboard">
                    <i class="fa fa-file menu" aria-hidden="true"></i>
                    <span class="hide-menu">Manage Invoices</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="invoice?action=create_invoice">Create Invoice</a></li>
                        <li><a href="invoice">Invoice Format</a></li>
                        <li><a href="#">Purchase Porfroma</a></li>
                    </ul>
                </li>
                <li style="background: #FFF;"> <a class="menu"  style="background:none;color: #2B6ECE;"
                    href="categories">
                    <i class="fa fa-bars menu" aria-hidden="true"></i>
                    <span class="hide-menu">Product Categories</span>
                    </a>
                </li>
                <li style="background: #FFF;"> <a class="has-arrow waves-effect waves-dark"  style="background:none;" 
                    href="dashboard">
                    <i class="fa fa-book menu" aria-hidden="true"></i>
                    <span class="hide-menu">Reports</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="reports">Daily Reports</a></li>
                        <li><a href="#">Sales Report</a></li>
                        <li><a href="#">Purchase Report</a></li>
                    </ul>
                </li>
                <li style="background: #FFF;"> <a class="menu"  style="background:none;color: #2B6ECE;"
                    href="categories">
                    <i class="fa fa-gears menu" aria-hidden="true"></i>
                    <span class="hide-menu">System Settings</span>
                    </a>
                </li>
                <?php
            }elseif($user_type=="FINANCE"){
                ?>
                <li style="background: #FFF;"> <a class="menu"  style="background:none;color: #2B6ECE;"
                    href="categories">
                    <i class="fa fa-cart-arrow-down menu" aria-hidden="true"></i>
                    <span class="hide-menu">Manage Orders</span>
                    </a>
                </li>
                <li style="background: #FFF;"> <a class="menu"  style="background:none;color: #2B6ECE;"
                    href="categories">
                    <i class="fa fa-cube menu" aria-hidden="true"></i>
                    <span class="hide-menu">Sales Report</span>
                    </a>
                </li>
                <li style="background: #FFF;"> <a class="menu"  style="background:none;color: #2B6ECE;"
                    href="categories">
                    <i class="fa fa-user-o menu" aria-hidden="true"></i>
                    <span class="hide-menu">Suppliers</span>
                    </a>
                </li>
                <li style="background: #FFF;"> <a class="menu"  style="background:none;color: #2B6ECE;"
                    href="categories">
                    <i class="fa fa-envelope-o menu" aria-hidden="true"></i>
                    <span class="hide-menu">Messages</span>
                    </a>
                </li>
                <?php
            }elseif($user_type=="STOCK"){
                ?>
                <li style="background: #FFF;"> <a class="menu"  style="background:none;color: #2B6ECE;"
                    href="purchases">
                    <i class="fa fa-sort-amount-desc menu" aria-hidden="true"></i>
                    <span class="hide-menu">Manage Purchase</span>
                    </a>
                </li>
                <li style="background: #FFF;"> <a class="menu"  style="background:none;color: #2B6ECE;"
                    href="stock">
                    <i class="fa fa-cubes menu" aria-hidden="true"></i>
                    <span class="hide-menu">Manage Stock</span>
                    </a>
                </li>
                <li style="background: #FFF;"> <a class="menu"  style="background:none;color: #2B6ECE;"
                    href="categories">
                    <i class="fa fa-area-chart menu" aria-hidden="true"></i>
                    <span class="hide-menu">Manage Reports</span>
                    </a>
                </li>
                <?php
            }
            ?>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>