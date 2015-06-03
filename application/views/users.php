
<script src="<?php echo base_url() ?>assets/js/plugins/datatable/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/plugins/datatable/TableTools.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/plugins/datatable/ColReorderWithResize.js"></script>
<script src="<?php echo base_url() ?>assets/js/plugins/datatable/ColVis.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/plugins/datatable/jquery.dataTables.columnFilter.js"></script>
<script src="<?php echo base_url() ?>assets/js/plugins/datatable/jquery.dataTables.grouping.js"></script>
<script src="<?php echo base_url() ?>assets/js/plugins/multiselect/jquery.multi-select.js"></script>
<script src="<?php echo base_url() ?>assets/js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/plugins/maskedinput/jquery.maskedinput.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/plugins/select2/select2.min.js"></script>
<!-- Chosen -->
<script src="<?php echo base_url() ?>assets/js/plugins/chosen/chosen.jquery.min.js"></script>


<div class="container-fluid nav-hidden" id="content">
    <!-- header ends here !-->
    <div id="main">

        <div class="row-fluid">
        <ul class="tiles">
        <li class="blue long">
            <a href="<?php echo site_url('users/add_user_load') ?>"><span><i class="icon-plus"></i></span><span class='name'>Add Users</span>   
        </a>
        </li>


        <li class="orange long">
        <a href=""><span><i class="icon-group"></i></span><span class='name'>Add Family </span></a>
        </li>

        <li class="teal long">
        <a href="<?php echo site_url('users/displayall') ?>"><span class='count'><i class="icon-search"></i></span><span class='name'>Manage Users</span></a>
        </li>
        
        </ul>
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
                        User List
                    </h3>
                </div>
                <div class="box-content nopadding">


                    <table class="table table-hover table-nomargin table-bordered ">
                        <thead>
                            <tr class='thefilter'>
                                <th>#</th>
                                <th>Name</th>
                                <th >Middle Name</th>
                                <th >Last Name</th>
                                <th >Gender</th>
                                <th >Mobilen Number</th>
                                <th >Email_id</th>
                                <th >Area</th>
                                <th >Adress</th>
                                <th >Eduction</th>
                                <th >Options</th>
                            </tr>



                        </thead>
                        <tbody>
                            <?php
                            if (count($users) > 0) {

                                foreach ($users as $value) {
                                    ?>		<tr>

                                        <td><?php echo $value['users_id'] ?></td>
                                        <td><?php echo $value['users_fname'] ?></td>
                                        <td><?php echo $value['users_mname'] ?></td>
                                        <td><?php echo $value['users_lname'] ?></td>
                                        <td><?php echo $value['users_gender'] ?></td>
                                        <td><?php echo $value['users_mobno1'] ?></td>
                                        <td><?php echo $value['users_email_id'] ?></td>
                                        <td><?php echo $value['users_adress'] ?></td>
                                        <td><?php echo $value['users_area'] ?></td>
                                        <td><?php echo $value['users_education'] ?></td>
                                        <td class='hidden-480'>
                                            <a href="#" class="btn" rel="tooltip" title="View"><i class="icon-search"></i></a>
                                            <a href="#" class="btn" rel="tooltip" title="Edit"><i class="icon-edit"></i></a>
                                            <a href="#" class="btn" rel="tooltip" title="Delete"><i class="icon-remove"></i></a>
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
