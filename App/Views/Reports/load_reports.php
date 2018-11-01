<div class="card">
    <div class="card-body">
        <h4 class="card-title">
            Available System Reports.
        </h4>
        <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
        <?php 
        if(isset($_GET['status']) && $_GET['status']=="success"){
            ?>
                <div class="alert alert-success">
                    User successfully saved !!!!!!!!!!!!!!!!!!!!!
                </div>
            <?php
        }
        ?>
        <?php 
        $inventory_logs=$stock->get_inventory_logs();
        if(count($inventory_logs)>0){
            ?>
        <div class="table-responsive m-t-40">
            <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Issue Date</th>
                        <th>User</th>
                        <th>Activity</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
            <?php
            foreach ($inventory_logs as $key => $log) {
              ?>
                <tr>
                    <td>
                        <?php 
                        echo $log['log_id'];
                        ?>
                    </td>
                    <td>
                        <span class="badge badge-info">
                        <?php 
                        echo $log['log_date'];
                        ?>
                        </span>
                    </td>
                    <td>
                        <?php 
                        echo $log['user_id'];
                        ?>
                    </td>
                    <td>
                        <?php 
                        echo $log['activity'];
                        ?>
                    </td>
                    <td>
                        <?php 
                        if($log['status']=='ACTIVE'){
                            ?>
                            <span class="badge badge-success">
                                <?php 
                                echo $log['status'];
                                ?>
                            </span>
                            <?php
                        }
                        ?>
                    </td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-info"><i class="fa fa-align-left"></i></button>
                            <button type="button" class="btn btn-info"><i class="fa fa-align-justify"></i></button>
                            <button action="<?php //echo $user['user_id']; ?>" type="button" class="btn btn-danger btn_delete_user" data-toggle="tooltip" data-placement="top" title data-original-title="Delete User">
                                <i class="fa fa-times"></i>
                            </button>
                        </div>
                    </td>
                </tr>
              <?php  
            }
            ?>
                </tbody>
            </table>
        </div>
            <?php
        }
        ?>
    </div>
</div>