<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel1">
                    Add new Item Category
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form id="frm_add_category">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Category Name:</label>
                        <input type="text" name="category_name" class="form-control" id="recipient-name1" required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Unit Price:</label>
                        <input type="number" name="unit_price" class="form-control" id="recipient-name1" required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Category Image:</label>
                        <input type="file" name="file" id="file" required />
                        <img id="image_category" src="" style="width: 120px;">
                    </div>
                    <div class="form-group">
                        <button style="margin:10px;" type="submit" class="btn btn-primary">SAVE CATEGORY</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>