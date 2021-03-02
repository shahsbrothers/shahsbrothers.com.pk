<!-- ADD USER  Model-->
<div class="modal fade" id="add_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
    
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Add User </h4>                    
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <!--/.modal-header-->
    
                <div class="modal-body">
                    <form id="add_user_form" >
                        <div class="form-group" id="currentPass-group">
                            <label for="current_pass"> Email :</label>
                            <input class="form-control" type="text" name="email_c" id="email_c" >
                        </div>
    
                        <div class="form-group">
                            <label for="new_pass"> Username :</label>
                            <input class="form-control" type="text" name="username_c" id="username_c" >
                        </div>
                       
                        <div class="form-group">
                            <label for="confirm_pass">Passwrod :</label>
                            <input class="form-control" type="password" name="password_c" id="password_c" >
                        </div>

                        <div class="form-group">
                            <label for="confirm_pass"> Confirm Password :</label>
                            <input class="form-control" type="password" name="confirm_pass_c" id="confirm_pass_c" >
                        </div>

                        <div class="resp1" style="font-size: 14px; color: red;"></div>

                        <div class="modal-footer">
                            <!-- <input type="submit" name="submit" class="btn btn-block btn-warning" value="Save changes" /> -->
                            <input type="submit" name="add_user_submit" class="btn btn-success" id="add_user_submit" value="Save changes" value="Save Changes">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>

                    </form>
                </div>
    
            </div>
        </div>
    </div>
<!-- END ADD USER Model -->


<!-- EDIT USER  Model-->
<div class="modal fade" id="edit_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
    
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Modify User </h4>                    
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <!--/.modal-header-->
    
                <div class="modal-body">
                    <form id="edit_user_form" >
                        <div class="form-group" id="currentPass-group">
                            <label for="email_e"> Email :</label>
                            <input class="form-control" type="email" name="email_e" id="email_e" readonly>
                        </div>
    
                        <div class="form-group">
                            <label for="username_e"> Username :</label>
                            <input class="form-control" type="text" name="username_e" id="username_e" readonly>
                        </div>
                       
                        <div class="form-group">
                            <label for="new_pass_e"> New Password :</label>
                            <input class="form-control" type="password" name="new_pass_e" id="new_pass_e" >
                        </div>

                        <div class="form-group">
                            <label for="confirm_pass_e"> Confirm Password :</label>
                            <input class="form-control" type="password" name="confirm_pass_e" id="confirm_pass_e" >
                        </div>
                        <div class="error" style="font-size: 14px; color: red;"></div>
                        <div class="modal-footer">
                            <!-- <input type="submit" name="submit" class="btn btn-block btn-warning" value="Save changes" /> -->
                            <input type="submit" name="edit_user_submit" class="btn btn-success" id="edit_user_submit" value="Save changes" value="Save Changes">
                            <button type="button" data-action = "2" class="btn btn-danger deactivate" id="enable_disb_button">Deactivate</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>

                    </form>
                </div>
    
            </div>
        </div>
    </div>
<!-- END EDIT USER Model -->