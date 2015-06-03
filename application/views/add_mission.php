<?php
$mission_id="";
$mission_name = "";
$mission_status = "";
$mission_description = "";
if ($this->session->userdata('tag') == 'edit') {
    $this->session->unset_userdata('tag');
    if (count($mission) > 0) {
        $mission_id=$mission[0]['mission_id'];
        $mission_name = $mission[0]['mission_name'];
        $mission_status =$mission[0]['mission_status'] ;
        $mission_description = $mission[0]['mission_description'];
    }
}
?>


<div id="main" style="margin-left: 0px;">
    <div class="container-fluid">



        <div class="row-fluid">
            <div class="span12">
                <div class="box box-bordered">
                    <div class="box-title">
                        <h3><i class="glyphicon-eye_open"></i>ADD MISSION</h3>
                    </div>

                    <div class="box-content">


                        <form action="<?php if ($mission_id == "") {echo site_url('mission/add_mission');} else {echo site_url("mission/update_mission/".$mission_id); }?>" method="POST" class='form-horizontal form-validate' id="add_user">

                            <div class="control-group"> 
                                <h4><span class="text-error"><?php echo $this->session->flashdata('responseMessage'); ?></span></h4>
                            </div>

                            <div class="control-group">
                                <label for="textfield" class="control-label">Mission Name</label>
                                <div class="controls">
                                    <input type="text" placeholder="Enter Mission Name .." name="mission_name"   value="<?php echo $mission_name ?>"  id="mission_name" class="input-xlarge" data-rule-required="true" data-rule-minlength="1">
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Mission Status</label>

                                <div class="controls">
                                    <select name="mission_stat" id="area" data-rule-required="true">
                                        <option value="">-- Please select --</option>
                                        <option value="1" <?php if ($mission_status == '1') echo 'selected="selected"'?>>Active</option>
                                        <option value="0" <?php if ($mission_status == '0') echo 'selected="selected"'?>>In Active</option>

                                    </select>
                                </div>

                            </div>



                            <div class="control-group">
                                <label for="textarea" class="control-label">Mission Description</label>
                                <div class="controls">
                                    <textarea name="mission_description" id="mission_description" value="vaiabhv" data-rule-required="true" data-rule-minlength="1"><?php echo $mission_description ?></textarea> 

                                </div>
                            </div>
                            <div class="form-actions">
                                <input type="submit" class="btn btn-primary" value="submit">
                                <button type="button" class="btn">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div></div>
        <?php
        include('footer.php');
        ?>
</body>

</html>

