<div class="row studentSearch">
            <div class="col-lg-3">
                <select class="form-control" id="course_option" name="course_option">
                    <option value="courseDefault" selected disabled>Qwe</option>
                    <?php foreach ($courses as $course):?>
                      <option><?php echo $course['course'];?></option>
                    <?php endforeach?>
                </select>
            </div>
            <div class="col-lg-2">
                <select class="form-control" id="sy_option" name="sy_option">
                    <option value="syDefault" selected disabled>School Year</option>
                </select>
            </div>
            <div>
                <div class="col-lg-3">
                 <select class="form-control" id="program_option" name="program_option">
                    <option value="evalDefault" selected disabled>Current Program</option>
                    <option value="all">All</option>
                    <option value="ojt_one">OJT-1</option>
                    <option value="ojt_two">OJT-2</option>
                </select>
            </div>
            <div class="col-lg-3">
                 <select class="form-control" id="status_option" name="status_option">
                    <option value="statDefault" selected disabled>Status</option>
                    <option value="all">All</option>
                    <option value="ON-GOING">On Going</option>
                    <option value="COMPLETED">Completed</option>
                </select>
            </div>
        <!-- </form> -->
        <div class="col-lg-1">
             <button class="btn btn-default" id="disp"><i class="fa fa-refresh" aria-hidden="true" style="color:#7f715a"></i></button>
        </div>
        
        </div>
    </div>