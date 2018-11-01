<div class="card card-outline-info">
    <div class="card-header">
        <h4 class="m-b-0 text-white">
            Fill Form to create a new Invoice.
        </h4>
    </div>
    <div class="card-body">
        <form id="frm_create_invoice">
            <div class="form-body">
                <h3 class="card-title">Customer Info</h3>
                <hr>
                <div class="row p-t-20">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Customer names.</label>
                            <input type="text" id="names" name="names" class="form-control" placeholder="Ex:john" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                            <a style="margin-top: 30px;" class="btn btn-info" href="customers?action=add_customer">
                                NEW CUSTOMER 
                            </a>
                    </div>
                    <!--/span-->
                </div>
                <!--/row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Date:</label>
                                <input id="inv_date" class="form-control" type="date"  id="example-date-input">
                            <small class="form-control-feedback">
                                This field is required for user login.
                            </small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Select Products</label>
                            <?php 
                            //get available products
                            $products=$item->get_item_categories();
                            ?>
                            <select id="product_key" name="product_id" class="form-control custom-select" required>
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
<div id="collapse1" style="display: block;" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
    <div class="card-body">
        <p>Unit price per piece:<input id="unit_price" type="text" class="form-control" readonly></p>
        <p>Amount to Pay:<input id="amount_pay" type="text" class="form-control" readonly></p>
    </div>
</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Quantiry Bought</label>
                            <input id="quantity" type="number" class="form-control" required>
                        </div>
                    </div>
                    <!--/span-->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Rates</label>
                            <input id="rates" type="number" class="form-control" name="">
                        </div>
                    </div>
                    <!--/span-->
                </div>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-info">
                    <i class="fa fa-check"></i> CREATE & SAVE INVOICE
                </button>
                <a href="invoice" class="btn btn-inverse">Cancel</a>
            </div>
        </form>
    </div>
</div>