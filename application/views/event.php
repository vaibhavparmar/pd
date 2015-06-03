

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
            <a href="<?php echo site_url('events/addevents_load') ?>"><span><i class="icon-shopping-cart"></i></span><span class='name'>Add Events</span>   
        </a>
        </li>


        
        <li class="teal long">
        <a href="<?php echo site_url('events/displayall') ?>"><span class='count'><i class="icon-search"></i></span><span class='name'>Manage Events</span></a>
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
                            Event List
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
                                    <th>Organizer</th>
                                    <th >Created By</th>
                                    <th >Created date</th>
                                    <th >Event status</th>
                                    <th >Description</th>
                                    <th >Options</th>
                                    </tr>
                            <form action="<?php echo site_url('events/search') ?>" method="POST" class='form-horizontal form-validate' id="bb">

                            </form>

                            </thead>
                            <tbody>
                                <?php
                                if (count($events) > 0) {

                                    foreach ($events as $value) {
                                        ?>		<tr>
                                            <td><?php echo $value['event_id'] ?></td>
                                            <td><?php echo $value['event_name'] ?></td>
                                            <td><?php echo $value['event_type'] ?></td>
                                            <td><?php echo $value['event_area'] ?></td>
                                            <td><?php echo $value['event_city'] ?></td>
                                            <td><?php echo $value['event_organiser'] ?></td>
                                            <td ><?php echo $value['event_created_by'] ?></td>
                                            <td ><?php echo $value['event_created_dttm'] ?></td>
                                            <?php $status = ($value['event_status'] == '1') ? 'Active' : 'In Active'; ?>
                                            <?php $class = ($value['event_status'] == '1') ? 'label-satgreen' : 'lightred'; ?>
                                            <td ><span class="label <?php echo $class ?>"><?php echo $status ?></span></td>
                                            <td ><?php echo $value['event_description'] ?></td>
                                            <td class='hidden-480'>                                                
                                                <a href="<?php echo site_url('events/edit_events/'.$value['event_id']) ?>" class="btn" rel="tooltip" title="Edit"><i class="icon-edit"></i></a>
                                                <a href="<?php  echo site_url('events/delete_events/'.$value['event_id']) ?>" class="btn" rel="tooltip" title="Delete"><i class="icon-remove"></i></a>
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
