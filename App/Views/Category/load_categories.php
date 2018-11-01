<div class="card">
    <div class="card-body">
        <h4 class="card-title">
            Available Items Categories.
        </h4>
        <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
            ADD ITEM CATEGORY
        </button>
        <?php 
        include 'modal.php';
        ?>
        <?php 
        $categories=$item->get_item_categories();
        if(count($categories)>0){
            ?>
        <div class="table-responsive m-t-40">
            <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Save Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
            <?php
            foreach ($categories as $key => $category) {
                $image_url='assets/images/categories/'.$category['image'];
              ?>
                <tr>
                    <td>
                        <?php 
                        echo $category['category_id'];
                        ?>
                    </td>
                    <td>
                        <img src="<?php echo $image_url ?>" style="width:50px;height: 50px;">
                    </td>
                    <td>
                        <?php 
                        echo $category['name'];
                        ?>
                    </td>
                    <td>
                        <?php 
                        if($category['status']=='ACTIVE'){
                            ?>
                            <span class="badge badge-success">
                                <?php 
                                echo $category['status'];
                                ?>
                            </span>
                            <?php
                        }
                        ?>
                    </td>
                    <td>
                        <?php 
                        echo $category['regDate'];
                        ?>
                    </td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-info">
                                <i class="fa fa-edit"></i></button>
                            <button type="button" class="btn btn-info"><i class="fa fa-eye" data-toggle="tooltip" data-placement="top" title data-original-title="Desactivate"></i></button>
                            <button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title data-original-title="Delete">
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
        }else{
            ?>
        <div class="alert alert-warning" style="margin: 5px;">
            <h3 class="text-warning"><i class="fa fa-exclamation-triangle"></i> Warning</h3>
            No Item category found you can add it by clicking the button above.
        </div>
            <?php
        }
        ?>
    </div>
</div>