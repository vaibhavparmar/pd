

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
        <ul class="tiles">
        <li class="blue long">
            <a href="<?php echo site_url('shibir/addShibir_load') ?>"><span><i class="icon-shopping-cart"></i></span><span class='name'>Add Shibir</span>   
        </a>
        </li>


        
        <li class="teal long">
        <a href="<?php echo site_url('shibir/displayall') ?>"><span class='count'><i class="icon-search"></i></span><span class='name'>Manage Shibir</span></a>
        </li>
        
        </ul>
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
                                    <th>Type</th>
                                    <th>Area</th>
                                    <th>City</th>
                                    <th>From date</th>
                                    <th>To date</th>
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
                                            <td><?php echo $value['shibir_type'] ?></td>
                                            <td><?php echo $value['shibir_area'] ?></td>
                                            <td><?php echo $value['shibir_city'] ?></td>
                                            <td><?php echo $value['shibir_from_date'] ?></td>
                                            <td><?php echo $value['shibir_to_date'] ?></td>
                                            <td ><?php echo $value['shibir_created_by'] ?></td>
                                            <td ><?php echo $value['shibir_created_dttm'] ?></td>
                                            <?php $status = ($value['shibir_status'] == '1') ? 'Active' : 'In Active'; ?>
                                            <?php $class = ($value['shibir_status'] == '1') ? 'label-satgreen' : 'lightred'; ?>
                                            <td ><span class="label <?php echo $class ?>"><?php echo $status ?></span></td>
                                            <td ><?php echo $value['shibir_description'] ?></td>
                                            <td class='hidden-480'>
                                               
                                                <a href="<?php echo site_url('shibir/edit_shibir/'.$value['shibir_id']) ?>" class="btn" rel="tooltip" title="Edit"><i class="icon-edit"></i></a>
                                                <a href="<?php  echo site_url('shibir/delete_shibir/'.$value['shibir_id']) ?>" class="btn" rel="tooltip" title="Delete"><i class="icon-remove"></i></a>
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
