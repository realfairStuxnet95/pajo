<div class="card">
    <div class="card-body">
        <h4 class="card-title">
            Available System Users.
        </h4>
        <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
        <a class="btn btn-info" href="?action=add_user">ADD NEW USER</a>
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
        $users=$user->get_users("system_users","names",30);
        if(count($users)>0){
            ?>
        <div class="table-responsive m-t-40">
            <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Names</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
            <?php
            foreach ($users as $key => $user) {
              ?>
                <tr>
                    <td>
                        <?php 
                        echo $user['user_id'];
                        ?>
                    </td>
                    <td>
                        <?php 
                        echo $user['names'];
                        ?>
                    </td>
                    <td>
                        <?php 
                        echo $user['email'];
                        ?>
                    </td>
                    <td>
                        <?php 
                        echo $user['phone'];
                        ?>
                    </td>
                    <td>
                        <?php 
                        if($user['status']=='ACTIVE'){
                            ?>
                            <span class="badge badge-success">
                                <?php 
                                echo $user['status'];
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
                            <button action="<?php echo $user['user_id']; ?>" type="button" class="btn btn-danger btn_delete_user" data-toggle="tooltip" data-placement="top" title data-original-title="Delete User">
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