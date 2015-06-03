
<script src="<?php echo base_url() ?>assets/js/plugins/datatable/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/plugins/datatable/TableTools.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/plugins/datatable/ColReorderWithResize.js"></script>
<script src="<?php echo base_url() ?>assets/js/plugins/datatable/ColVis.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/plugins/datatable/jquery.dataTables.columnFilter.js"></script>
<script src="<?php echo base_url() ?>assets/js/plugins/datatable/jquery.dataTables.grouping.js"></script>
<!-- Chosen -->
<script src="<?php echo base_url() ?>assets/js/plugins/chosen/chosen.jquery.min.js"></script>


<div class="container-fluid nav-hidden" id="content">
    <!-- header ends here !-->
    <div id="main">

        <div class="row-fluid">
            <div class="span12">
                <div class="box">
                    <div class="box-title">
                        <h3>
                            <i class="icon-search"></i>Search Here 

                        </h3>
                        <div class="actions">
                            <a href="#" class="btn btn-mini content-slideUp"><i class="icon-angle-down"></i></a>
                        </div>

                    </div>
                    <div class="box-content">
                        <form action="<?php echo site_url('mission/search') ?>" method="POST" class='form-vertical'>
                            <div class="row-fluid">

                                <div class="span3">
                                    <div class="control-group">
                                        <label for="textfield" class="control-label">Mission Status</label>
                                        <div class="controls controls-row">
                                            <select name="mission_status" id="area" data-rule-required="true">
                                                <option value="">-- Please select --</option>
                                                <option value="1">Active</option>
                                                <option value="0" >Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="span3">
                                    <div class="control-group">
                                        <label for="textfield" class="control-label">Mission Name</label>
                                        <div class="controls controls-row">
                                            <?php
                                            if (count($missio_name) > 0) {
                                                  ?>
                                            <select name="mission_name" id="mission_name" data-rule-required="true">
                                                <option value="">-- Please select --</option>
                                                <?php
                                                foreach ($missio_name as $value) 
                                                    {
                                                    ?>
                                                    
                                                        <option value="<?php echo $value['mission_name'] ?>"><?php echo $value['mission_name'] ?></option>
                                                    
                                                    <?php
                                                    }
                                                    ?>
                                            </select>
                                                 <?php
                                                        
                                                    }
                                                   
                                                    ?>
                                                </div>
                                            </div>
                                        </div>

                                <div class="span3">
                                    <div class="control-group">
                                        <label for="textfield" class="control-label">Created Date</label>
                                        <div class="controls controls-row">
                                            <input type="text" name="created_date" id="inception_date" class="input-medium datepick " >
                                        </div>
                                    </div>
                                </div>
                                <div class="span3">
                                    <div class="control-group">
                                       
                                        <div class="controls controls-row">
                                            <input type="submit" class="btn btn-primary" value="Submit">
                                            <button type="button" class="btn">Cancel</button>

                                        </div>
                                    </div>
                                </div>
                                
                            </div>


                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row-fluid">
        <div class="span12">

            <div class="control-group"> 
                <h4><span class="text-error"><?php echo $this->session->flashdata('responseMessage'); ?></span></h4>
            </div>
            <div class="box box-color box-bordered">
                <div class="box-title">
                    <h3>
                        Mission List
                    </h3>
                </div>
                <div class="box-content nopadding">


                    <table class="table table-hover table-nomargin table-bordered ">
                        <thead>
                            <tr class='thefilter'>
                                <th>#</th>
                                <th>Name</th>
                                <th >Created By</th>
                                <th >Created date</th>
                                <th >Mission status</th>
                                <th >Description</th>
                                <th >Options</th>
                            </tr>



                        </thead>
                        <tbody>
                            <?php
                            if (count($mission) > 0) {

                                foreach ($mission as $value) {
                                    ?>		<tr>

                                        <td><?php echo $value['mission_id'] ?></td>
                                        <td><?php echo $value['mission_name'] ?></td>
                                        <td ><?php echo $value['mission_created_by'] ?></td>
                                        <td ><?php echo $value['mission_created_dttm'] ?></td>
                                        <?php $status = ($value['mission_status'] == '1') ? 'Active' : 'In Active'; ?>
                                        <?php $class = ($value['mission_status'] == '1') ? 'label-satgreen' : 'lightred'; ?>
                                        <td ><span class="label <?php echo $class ?>"><?php echo $status ?></span></td>
                                        <td ><?php echo $value['mission_description'] ?></td>
                                        <td class='hidden-480'>
                                            <!--<a href="#" class="btn" rel="tooltip" title="View"><i class="icon-search"></i></a>-->
                                            <a href="<?php echo site_url('mission/edit_mission/' . $value['mission_id']) ?>" class="btn" rel="tooltip" title="Edit"><i class="icon-edit"></i></a>
                                            <a href="<?php echo site_url('mission/delete_mission/' . $value['mission_id']) ?>" class="btn" rel="tooltip" title="Delete"><i class="icon-remove"></i></a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
