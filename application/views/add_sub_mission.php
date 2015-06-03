
<?php
$mission_id = "";
$mission_name = "";
$mission_status = "";
$mission_description = "";
if ($this->session->userdata('tag') == 'edit') {
    $this->session->unset_userdata('tag');
    if (count($mission) > 0) {
        $mission_id = $mission[0]['mission_id'];
        $mission_name = $mission[0]['mission_name'];
        $mission_status = $mission[0]['mission_status'];
        $mission_description = $mission[0]['mission_description'];
    }
}
$city = unserialize(CITY);
$area = unserialize(AREA);
//$selcted_area = 'Borivali';
?>



<div id="main" style="margin-left: 0px;">
    <div class="container-fluid">



        <div class="row-fluid">
            <div class="span12">
                <div class="box box-bordered">
                    <div class="box-title">
                        <h3><i class="glyphicon-eye_open"></i> ADD SUB-MISSION </h3>
                    </div>

                    <div class="box-content">
                        <form action="<?php  echo site_url('submission/add_submission') ?>" method="POST" class='form-horizontal form-validate' id="bb">

                             <div class="control-group"> 
                                <h4><span class="text-error"><?php echo $this->session->flashdata('responseMessage'); ?></span></h4>
                            </div>

                            <div class="control-group">
                                <label for="textfield" class="control-label">Sub mission Name</label>
                                <div class="controls">
                                    <input type="text" placeholder="Enter Sub-Mission Name .." name="submission_mname" id="submission_mname" class="input-xlarge" data-rule-required="true" data-rule-minlength="1">
                                </div>
                            </div>


                            <div class="control-group">
                                <label for="textfield" class="control-label">Area</label>
                                <div class="controls">
                                    <select name="area" id="area" data-rule-required="true">
                                        <option value="">-- Please select --</option>
                                        <?php
                                        for ($x = 0; $x < count($area); $x++) {
                                            echo "<option value='$area[$x]' if ($selcted_area == '$area[$x]') selected='selected'>$area[$x]</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="textfield" class="control-label">City</label>
                                <div class="controls">
                                    <select name="city" id="city" data-rule-required="true">
                                        <option value="">-- Please select --</option>
                                        <?php
                                        for ($x = 0; $x < count($city); $x++) {
                                            echo "<option value='$city[$x]'>$city[$x]</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="textfield" class="control-label">Inception Date</label>
                                <div class="controls">
                                    <input type="text" name="inception_date" id="inception_date" class="input-medium datepick "data-rule-required="true" >

                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Mission Status</label>

                                <div class="controls">
                                    <select name="mission_stat" id="mission_stat" data-rule-required="true">
                                        <option value="">-- Please select --</option>
                                        <option value="1" <?php if ($mission_status == '1') echo 'selected="selected"' ?>>Active</option>
                                        <option value="0" <?php if ($mission_status == '0') echo 'selected="selected"' ?>>In Active</option>

                                    </select>
                                </div>

                            </div>
                            <div class="control-group">
                                <label for="textarea" class="control-label">Description</label>
                                <div class="controls">
                                    <textarea name="description" id="description" class="input-block-level" data-rule-required="true" data-rule-minlength="1"> </textarea>
                                </div>

                            </div>



                            <div class="control-group">
                                <label for="textfield" class="control-label">Master Mision</label>
                                <div class="controls">
                                    <select name="Master_mission" id="Master_mission" data-rule-required="true">
                                        <option value="">-- Please select --</option>

                                        <?php
                                        if (count($master_mission) > 0) {

                                            foreach ($master_mission as $value) {
                                                ?>
                                                <option value="<?php echo $value['mission_id'] ?> "><?php echo $value['mission_name'] ?> </option>";
                                                <?php
                                            }
                                        }
                                        ?>
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

