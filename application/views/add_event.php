<?php //
$event_id="";
$event_name = "";
$event_date = "";
$event_area = "";
$event_city="";
$event_organiser="";
$event_type="";
$event_created_by="";
$event_created_dttm="";
$event_status="";
$event_description="";
if ($this->session->userdata('tag') == 'edit') {
    $this->session->unset_userdata('tag');
    if (count($events) > 0) {
   $event_id=$events[0]['event_id'];
$event_name = $events[0]['event_name'];
$event_date = $events[0]['event_date'];
$event_area = $events[0]['event_area'];
$event_city=$events[0]['event_city'];
$event_organiser=$events[0]['event_organiser'];
$event_type=$events[0]['event_type'];
$event_status=$events[0]['event_status'];
$event_description=$events[0]['event_description'];
        
    }
}
?>


<div id="main" style="margin-left: 0px;">
    <div class="container-fluid">



        <div class="row-fluid">
            <div class="span12">
                <div class="box box-bordered">
                    <div class="box-title">
                        <h3><i class="icon-calendar"></i> ADD EVENT</h3>
                    </div>

                    <div class="box-content">
                        <form action="<?php if ($event_id == "") {echo site_url('events/add_events');} else {echo site_url("events/update_events/".$event_id); }?>" method="POST" class='form-horizontal form-validate' id="bb">

                            <div class="control-group"> 
                                <h4><span class="text-error"><?php echo $this->session->flashdata('responseMessage'); ?></span></h4>
                            </div>

                            <div class="control-group">
                                <label for="textfield" class="control-label">Event Name</label>
                                <div class="controls">
                                    <input type="text"  value="<?php echo $event_name  ?>"placeholder="Enter Event Name .." name="event_name" id="event_name" class="input-xlarge" data-rule-required="true" data-rule-minlength="1">
                                </div>
                            </div>


                            <div class="control-group">
                                <label for="textfield" class="control-label">Event Date</label>
                                <div class="controls">
                                    <input type="text"  value="<?php echo $event_date ?>"name="event_date" id="event_date" class="input-medium datepick "data-rule-required="true" >

                                </div>
                            </div>

                            <div class="control-group">
                                <label for="textfield" class="control-label">Area</label>
                                <div class="controls">
                                    <select name="event_area" id="event_area" data-rule-required="true">
                                        <option value="">-- Please select --</option>
                                        <option value="1" <?php if ($event_area  == '1') echo 'selected="selected"'?>>Option-1</option>
                                        <option value="2" <?php if ($event_area  == '2') echo 'selected="selected"'?>>Option-2</option>
                                        <option value="3" <?php if ($event_area  == '3') echo 'selected="selected"'?>>Option-3</option>
                                       
                                    </select>
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="textfield" class="control-label">City</label>
                                <div class="controls">
                                    <select name="event_city" id="event_city" data-rule-required="true">
                                        <option value="">-- Please select --</option>
                                        <option value="1" <?php if ($event_city == '1') echo 'selected="selected"'?>>Option-1</option>
                                        <option value="2"<?php if ($event_city == '2') echo 'selected="selected"'?>>Option-2</option>
                                        <option value="3"<?php if ($event_city  == '3') echo 'selected="selected"'?>>Option-3</option>
                                        
                                    </select>
                                </div>
                            </div>



                            <div class="control-group">
                                <label for="textfield" class="control-label">Organiser</label>
                                <div class="controls">
                                    <input type="text"  value="<?php echo $event_organiser?>"placeholder="organiser Name .." name="org_name" id="org_name" class="input-xlarge" data-rule-required="true" data-rule-minlength="1">
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Event Status</label>

                                <div class="controls">
                                    <select name="event_status" id="event_status" data-rule-required="true">
                                        <option value="">-- Please select --</option>
                                        <option value="1" <?php if ($event_status == '1') echo 'selected="selected"'?>>Active</option>
                                        <option value="0" <?php if ($event_status == '0') echo 'selected="selected"'?>>InActive</option>
                                    </select>
                                </div>

                            </div>
                            


                            <div class="control-group">
                                <label for="textarea" class="control-label">Description</label>
                                <div class="controls">
                                    <textarea name="event_descr" id="event_descr" class="input-block-level" data-rule-required="true" data-rule-minlength="1"><?php echo $event_status ?></textarea>
                                </div>

                            </div>



                            <div class="control-group">
                                <label for="textfield" class="control-label">Event Type</label>
                                <div class="controls">
                                    <select name="event_type" id="event_type" data-rule-required="true">
                                        <option value="">-- Please select --</option>
                                        <option value="1" <?php if ($event_type  == '1') echo 'selected="selected"'?>>Option-1</option>
                                        <option value="2" <?php if ($event_type  == '2') echo 'selected="selected"'?>>Option-2</option>
                                        <option value="3" <?php if ($event_type  == '3') echo 'selected="selected"'?>>Option-3</option>
                                        
                                    </select>
                                </div>
                            </div>




                            <div class="form-actions">
                                <input type="submit" class="btn btn-primary" value="Submit">
                                <button type="button" class="btn">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div></div>

</body>


<!-- Mirrored from eakroko.de/flat/forms-validation.html by HTTrack Website Copier/3.x [XR&CO'2010], Sun, 23 Feb 2014 18:00:12 GMT -->
</html>

