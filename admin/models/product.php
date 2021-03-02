<!-- ADD PRODUCT  Model-->
<div class="modal fade" id="add_product" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
    
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Add Product </h4>                    
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <!--/.modal-header-->
    
                <div class="modal-body">
                    <form id="add_product_form" enctype="multipart/form-data" >
                        <div class="form-group" id="currentPass-group">
                            <label for="current_pass"> Title :</label>
                            <input class="form-control" type="text" name="prod_title" id="prod_title" >
                        </div>
    
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea class="form-control" id="prod_desc" name="prod_desc" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Thumbnail</label>
                            <input type="file" class="form-control-file" id="prod_thumb" name="prod_thumb">
                        </div>
                        <div class="resp2" style="font-size: 14px; color: red;"></div>

                        <div class="modal-footer">
                            <!-- <input type="submit" name="submit" class="btn btn-block btn-warning" value="Save changes" /> -->
                            <input type="submit" name="submit_prod" class="btn btn-success" id="submit_prod" value="Save changes" value="Save Changes">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>

                    </form>
                </div>
    
            </div>
        </div>
    </div>
<!-- END Model -->