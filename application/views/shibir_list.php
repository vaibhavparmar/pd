

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
                        <form action="<?php echo site_url('shibir/search') ?>" method="POST" class='form-vertical'>
                            <div class="row-fluid">

                                <div class="span3">
                                    <div class="control-group">
                                        <label for="textfield" class="control-label">Shibir Status</label>
                                        <div class="controls controls-row">
                                            <select name="shibir_status" id="shibir_status" data-rule-required="true">
                                                <option value="1">Active</option>
                                                <option value="0" >Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="span3">
                                    <div class="control-group">
                                        <label for="textfield" class="control-label">Shibir Name</label>
                                        <div class="controls controls-row">
                                            <input type="text" name="shibir_name" id="shibir_name" placeholder="Shibir name" class="input-block-level">
                                        </div>
                                    </div>
                                </div>

                                <div class="span3">
                                    <div class="control-group">
                                        <label for="textfield" class="control-label">Shibir Type</label>
                                        <div class="controls controls-row">
                                            <input type="text" name="shibir_type" id="shibir_type" placeholder="Shibir type" class="input-block-level">
                                        </div>
                                    </div>
                                </div>
                                <div class="span3">
                                    <div class="control-group">
                                       
                                        <div class="controls controls-row">
                                            <input type="submit" class="btn btn-primary" value="Search">
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
                            Shibir List
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
                                    <th >Shibir status</th>
                                    <th >Description</th>
                                    <th >Options</th>
                                </tr>
                            <form action="<?php echo site_url('shibir/search') ?>" method="POST" class='form-horizontal form-validate' id="bb">

                            </form>

                            </thead>
                            <tbody>
                                <?php
                                if (count($shibir) > 0) {

                                    foreach ($shibir as $value) {
                                        ?>		<tr>

                                            <td><?php echo $value['shibir_id'] ?></td>
                                            <td><?php echo $value['shibir_name'] ?></td>
                                            <td ><?php echo $value['shibir_created_by'] ?></td>
                                            <td ><?php echo $value['shibir_created_dttm'] ?></td>
                                            <?php $status = ($value['shibir_status'] == '1') ? 'Active' : 'In Active'; ?>
                                            <?php $class = ($value['shibir_status'] == '1') ? 'label-satgreen' : 'lightred'; ?>
                                            <td ><span class="label <?php echo $class ?>"><?php echo $status ?></span></td>
                                            <td ><?php echo $value['shibir_description'] ?></td>
                                            <td class='hidden-480'>
                                                <a href="#" class="btn" rel="tooltip" title="View"><i class="icon-search"></i></a>
                                                <a href="<?php echo site_url('shibir/edit_shibir/' . $value['shibir_id']) ?>" class="btn" rel="tooltip" title="Edit"><i class="icon-edit"></i></a>
                                                <a href="<?php echo site_url('shibir/delete_shibir/' . $value['shibir_id']) ?>" class="btn" rel="tooltip" title="Delete"><i class="icon-remove"></i></a>
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
