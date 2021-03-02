<!-- EDIT CA  Model-->
<div class="modal fade" id="edit_ca" tabindex="-1" role="dialog" aria-labelledby="ca_">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
    
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Edit Brochure  </h4>                    
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <!--/.modal-header-->
    
                <div class="modal-body">
                    <form id="edit_ca_form" enctype="multipart/form-data" >
                        <div class="form-group" id="currentPass-group">
                            <label for="main_cat"> Main Category :</label>
                            <input class="form-control" type="text" name="main_cat" id="main_cat">
                        </div>
                        <div class="form-group" id="currentPass-group">
                            <label for="main_link"> File URL :</label>
                            <input class="form-control" type="text" name="main_link" id="main_link" >
                        </div>
                        <input type="text" name="ca_id" id="ca_id" hidden>
                        <input type="text" name="sub_ca_count" id="sub_ca_count" hidden> 

                        <hr>
                        
                        <h6 class="text-center"> Sub Categories </h6>
                        <table class="table" id="sub_cat_table">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Link</th>
                                </tr>
                            </thead>
                            <tbody align='center' id="sub_cat_table_body">

                            </tbody>
                            </table>                        
                        <div class="resp2" style="font-size: 14px; color: red;"></div>

                        <div class="modal-footer">
                            <!-- <input type="submit" name="submit" class="btn btn-block btn-warning" value="Save changes" /> -->
                            <input type="submit" name="submit_edit_ca" class="btn btn-success" id="submit_edit_ca" value="Save changes" value="Save Changes">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>

                    </form>
                </div>
    
            </div>
        </div>
    </div>
<!-- END Model -->


<!-- ADD CA  Model-->
<div class="modal fade" id="add_ca_model" tabindex="-1" role="dialog" aria-labelledby="ca_">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
    
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">
                    Add Brochure  </h4>  
                              
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <!--/.modal-header-->
    
                <div class="modal-body">
                    <form id="add_ca_form" enctype="multipart/form-data" >
                        <div class="form-group" id="currentPass-group">
                            <label for="add_main_cat"> Menu Item name :</label>
                            <input class="form-control" type="text" name="add_main_cat" id="add_main_cat">
                        </div>
                        <div class="form-group">
                            <label for="add_main_link">File URL</label>
                            <input class="form-control" type="text" name="add_main_link" id="add_main_link" >
                        </div>
                        <hr>
                        
                        <h6 class="text-center"> Sub Categories </h6>
                        <table class="table" id="add_sub_cat_table">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Link</th>
                                </tr>
                            </thead>
                            <tbody align='center' id="add_sub_cat_table_body">

                            </tbody>
                            
                            </table>                        
                        <div class="add_ca_resp" style="font-size: 14px; color: red;"></div>
                        <div class="text-center">
                            <a href="#" class="btn btn-success btn-sm add_sub_cat"> <i class="fas fa-plus"> </i> </a>
                        </div>
                        <br>
                        <div class="modal-footer">
                            <input type="submit" name="submit_add_ca" class="btn btn-success" id="submit_add_ca" value="Save changes" value="Save Changes">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>

                    </form>
                </div>
    
            </div>
        </div>
    </div>
<!-- END Model -->