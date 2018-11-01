<div class="card card-outline-info">
    <div class="card-header">
        <h4 class="m-b-0 text-white">
            Fill Form to save new Stock
        </h4>
    </div>
    <div class="card-body">
        <form id="frm_add_stock">
            <div class="form-body">
                <h3 class="card-title">Product Info</h3>
                <hr>
                <div class="row p-t-20">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Select Products</label>
                            <?php 
                            //get available products
                            $products=$item->get_item_categories();
                            ?>
                            <select id="product_id" name="product_id" class="form-control custom-select" required>
                                <?php 
                                foreach ($products as $key => $product) {
                                    ?>
                                    <option value="<?php echo $product['category_id']; ?>">
                                        <?php echo $product['name']; ?>
                                    </option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Enter available quantity</label>
                            <input type="number" id="quantity" name="quantity" class="form-control" placeholder="" required>
                            <small class="form-control-feedback">
                                Quantity may be peice or numbers or KG.
                            </small>
                        </div>
                    </div>
                    <!--/span-->
                </div>
                <!--/row-->
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-info">
                    <i class="fa fa-check"></i> Save Member
                </button>
                <a href="users" class="btn btn-inverse">Cancel</a>
            </div>
        </form>
    </div>
</div>