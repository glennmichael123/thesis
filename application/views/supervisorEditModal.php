<?php foreach ($supervisor_list as $supervisor):?>
<div class="modal fade" id="<?php $break = explode('.',$supervisor['id_number']); echo $break[0].$break[1];?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modalContent">
        <div class="modal-header modalHeader">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <h3 class="modal-title" id="lineModalLabel" style="color:white;">Edit supervisor</h3>
        </div>
        <div class="modal-body">
            
            <!-- content goes here -->
            <form>
              <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control capitalize" style="border-radius: 5px;margin-bottom: 10px; width: 100%" id="edit-supName" name="edit-supName" value="<?php echo $supervisor['name']?>">
                    <label>Company</label> <span style="float:right;text-decoration: italic"><a href="#" class="new-company">New</a></span>
                    <input type="text" class="form-control" style="border-radius: 5px;margin-bottom: 10px; width: 100%; display:none" id="" name="edit-new_company" value="<?php echo $supervisor['company_name']?>">
                    <select class="form-control company_list_choice2" style="border-radius:5px;margin-bottom:10px" id="dropCompany" name="dropCompany">
                         <option selected><?php echo $supervisor['company_name']?></option>
                         <?php foreach($company_list as $company):?>  
                           <option value="<?php echo $company['company_name']?>"><?php echo $company['company_name']?></option>
                        <?php endforeach;?>  
                                  
                    </select>
                    <label>Designation</label>
                    <input type="text" class="form-control capitalize" style="border-radius: 5px;margin-bottom: 10px; width: 100%" id="edit-supDesig" name="edit-supDesig" value="<?php echo $supervisor['designation']?>">
                    <label>Username</label>
                    <input type="text" class="form-contro edit-supID" style="border-radius: 5px;margin-bottom: 10px; width: 100%" id="edit-supID" name="edit-supID" value="<?php echo $supervisor['id_number']?>">
                    <label>Password</label>
                    <input type="text" class="form-control" style="border-radius: 5px;margin-bottom: 10px; width: 100%" id="edit-supPass" name="edit-supPass" value="<?php echo $supervisor['password']?>">
                    <label>Email</label>
                    <input type="text" class="form-control" style="border-radius: 5px;margin-bottom: 10px; width: 100%" id="edit-supEmail" name="edit-supEmail" value="<?php echo $supervisor['email']?>">
                    <label>Phone Number</label>
                    <input type="text" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57' style="border-radius: 5px;margin-bottom: 10px; width: 100%" id="edit-supNumber" name="edit-supNumber" value="<?php echo $supervisor['phone_number']?>">
                    <p class="blink_me hide" style="text-align: center">Sending email ... </p> 
                </div>
            </form>

        </div>
        <div class="modal-footer">
            <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                <div class="btn-group" role="group">
                     <button type="button" class="btn btn-success btn-hover-green" data-action="save" role="button" style="width: 270px;border-radius: 5px" id="editSup">Save</button>
                </div>
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" role="button" style="width: 270px;border-radius: 5px; float: right">Cancel</button>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
<?php endforeach;?>

