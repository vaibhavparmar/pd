<?php
$shibir_id="";
$shibir_name = "";
$shibir_type = "";
$shibir_area = "";
$shibir_city = "";
$shibir_status = "";
$shibir_descr = "";
if ($this->session->userdata('tag') == 'edit') {
    $this->session->unset_userdata('tag');
    if (count($shibir) > 0) {
        $shibir_id=$shibir[0]['shibir_id'];
        $shibir_name = $shibir[0]['shibir_name'];
        $shibir_type = $shibir[0]['shibir_type'];
        $shibir_area = $shibir[0]['shibir_area'];
        $shibir_city = $shibir[0]['shibir_city'];        
        $shibir_status =$shibir[0]['shibir_status'] ;
        $shibir_descr = $shibir[0]['shibir_description'];
    }
}
?>

<div id="main" style="margin-left: 0px;">
    <div class="container-fluid">



        <div class="row-fluid">
            <div class="span12">
                <div class="box box-bordered">
                    <div class="box-title">
                        <h3><i class="icon-group"></i> ADD SHIBIR</h3>
                    </div>

                    <div class="box-content">
                        <form action="<?phpif ($shibir_id == "") { echo site_url('shibir/add_shibir'))else{echo site_url("shibir/update_shibir/".$shibir_id);}?>" method="POST" class='form-horizontal form-validate' id="bb">



                            <div class="control-group">
                                <label for="textfield" class="control-label">Shibir Name</label>
                                <div class="controls">
                                    <input type="text" placeholder="Enter Shibir Name .." name="shibir_name" value="<?php echo $shibir_name ?>" id="shibir_name" class="input-xlarge" data-rule-required="true" data-rule-minlength="1">
                                </div>
                            </div>



                            <div class="control-group">
                                <label for="textfield" class="control-label">Shibir Type</label>
                                <div class="controls">
                                    <select name="shibir_type" id="shibir_type" value="<?php echo $shibir_type ?>" data-rule-required="true">
                                        <option value="">-- Please select --</option>
                                        <option value="1">Option-1</option>
                                        <option value="2">Option-2</option>
                                        <option value="3">Option-3</option>
                                        <option value="4">Option-4</option>
                                        <option value="5">Option-5</option>
                                        <option value="6">Option-6</option>
                                        <option value="7">Option-7</option>
                                        <option value="8">Option-8</option>
                                        <option value="9">Option-9</option>
                                        <option value="10">Option-10</option>
                                    </select>
                                </div>
                            </div>






                            <div class="control-group">
                                <label for="textfield" class="control-label">Area</label>
                                <div class="controls">
                                    <select name="shibir_area" id="shibir_area" value="<?php echo $shibir_area ?>" data-rule-required="true">
                                        <option value="">-- Please select --</option>
                                        <option value="1">Option-1</option>
                                        <option value="2">Option-2</option>
                                        <option value="3">Option-3</option>
                                        <option value="4">Option-4</option>
                                        <option value="5">Option-5</option>
                                        <option value="6">Option-6</option>
                                        <option value="7">Option-7</option>
                                        <option value="8">Option-8</option>
                                        <option value="9">Option-9</option>
                                        <option value="10">Option-10</option>
                                    </select>
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="textfield" class="control-label">City</label>
                                <div class="controls">
                                    <select name="shibir_city" id="shibir_city" value="<?php echo $shibir_city ?>" data-rule-required="true">
                                        <option value="">-- Please select --</option>
                                        <option value="1">Option-1</option>
                                        <option value="2">Option-2</option>
                                        <option value="3">Option-3</option>
                                        <option value="4">Option-4</option>
                                        <option value="5">Option-5</option>
                                        <option value="6">Option-6</option>
                                        <option value="7">Option-7</option>
                                        <option value="8">Option-8</option>
                                        <option value="9">Option-9</option>
                                        <option value="10">Option-10</option>
                                    </select>
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="textfield" class="control-label">Shibir Start Date</label>
                                <div class="controls">
                                    <input type="text"  value="" name="from_date" id="from_date" class="input-medium datepick " data-rule-required="true" >

                                </div>
                            </div>

                            <div class="control-group">
                                <label for="textfield" class="control-label">Shibir End Date</label>
                                <div class="controls">
                                    <input type="text" name="to_date" id="to_date" class="input-medium datepick " data-rule-required="true" >

                                </div>
                            </div>



                             <div class="control-group">
                                <label class="control-label">Shibir Status</label>

                                <div class="controls">
                                    <select name="shibir_status" id="shibir_status" value="<?php echo $shibir_status ?>" data-rule-required="true">
                                        <option value="">-- Please select --</option>
                                        <option value="1">Active</option>
                                        <option value="0">InActive</option>
                                    </select>
                                </div>

                            </div>
                            
                        
                            
                            <div class="control-group">
                                <label for="textarea" class="control-label">Description</label>
                                <div class="controls">
                                    <textarea name="shibir_descr" value="<?php echo $shibir_descr ?>" id="shibir_descr" class="input-block-level" data-rule-required="true" data-rule-minlength="1"> </textarea>
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
<?php
include('footer.php');
?>
</body>


<!-- Mirrored from eakroko.de/flat/forms-validation.html by HTTrack Website Copier/3.x [XR&CO'2010], Sun, 23 Feb 2014 18:00:12 GMT -->
</html>

