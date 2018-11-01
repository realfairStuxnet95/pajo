<div class="card">
    <div class="card-body">
        <h4 class="card-title">
            Available Products in Stock.
        </h4>
        <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
        <a class="btn btn-info" href="?action=add_stock">ADD NEW ITEM PURCHASES</a>
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
        $categories=$item->get_item_categories();
        if(count($categories)>0){
            ?>
        <div class="table-responsive m-t-40">
            <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Product Image</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
            <?php
            foreach ($categories as $key => $category) {
                $image_url='assets/images/categories/'.$category['image'];
                //get product quantity
                $total_quantity=$util->field_sum(Tables::stock(),"quantity","product_id",$category['category_id']);
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
                        echo $total_quantity;
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
                No Purchases Found.
            </div>
            <?php
        }
        ?>
    </div>
</div>