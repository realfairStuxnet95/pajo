<div class="card card-outline-info">
    <div class="card-header">
        <h4 class="m-b-0 text-white">
            Fill Form to save new Supplier
        </h4>
    </div>
    <div class="card-body">
        <form id="frm_add_supplier">
            <div class="form-body">
                <h3 class="card-title">Person Info</h3>
                <hr>
                <div class="row p-t-20">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">First Name & Last Name</label>
                            <input type="text" id="supplier_names" name="names" class="form-control" placeholder="Ex:john" required>
                        </div>
                    </div>
                    <!--/span-->
                </div>
                <!--/row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Email</label>
                            <input type="email" id="supplier_email" name="supplier_email" class="form-control" placeholder="" required>
                            <small class="form-control-feedback">
                                This field is required for user login.
                            </small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Phone Number</label>
                            <input type="number" id="supplier_phone" name="phone" class="form-control" placeholder="Format: +2507XXXXXXXX" required>
                            <small class="form-control-feedback">
                                This field can be alternate to email on login.
                            </small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">TIN Number</label>
                            <input id="tin" type="text" class="form-control">
                        </div>
                    </div>
                    <!--/span-->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Address Info</label>
                            <textarea id="address" class="form-control"></textarea>
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