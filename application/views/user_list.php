
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
                        <form action="<?php echo site_url('users/search') ?>" method="POST" class='form-vertical'>
                            <div class="row-fluid">

                                <div class="span3">
                                    <div class="control-group">
                                        <label for="textfield" class="control-label"> Name</label>
                                        <div class="controls controls-row">
                                            <div class="controls controls-row">
                                            <input type="text" name="users_fname" id="mission_name" placeholder="User name" class="input-block-level">
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="span3">
                                    <div class="control-group">
                                        <label for="textfield" class="control-label">Middle Name</label>
                                        <div class="controls controls-row">
                                            <div class="controls controls-row">
                                            <input type="text" name="users_mname" id="mission_name" placeholder="User Middle name" class="input-block-level">
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="span3">
                                    <div class="control-group">
                                        <label for="textfield" class="control-label">Last Name</label>
                                        <div class="controls controls-row">
                                            <div class="controls controls-row">
                                            <input type="text" name="users_lname" id="mission_name" placeholder="User last name" class="input-block-level">
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="span3">
                                    <div class="control-group">
                                        <label for="textfield" class="control-label">Mobile Number</label>
                                        <div class="controls controls-row">
                                            <input type="text" name="users_mobno1" id="mission_name" placeholder="Mobile Number" class="input-block-level">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row-fluid">
                                <div class="span3">
                                    <div class="control-group">
                                        <label for="textfield" class="control-label">Address</label>
                                        <div class="controls controls-row">
                                            <input type="text" name="users_adress" id="mission_name" placeholder="Users Address" class="input-block-level">
                                        </div>
                                    </div>
                                </div>

                                <div class="span3">
                                <div class="control-group">
				<label for="textfield" class="control-label">Shibir</label>
				<div class="controls">
				<select name="shibir" id="shibir" multiple="multiple" class="chosen-select input-xxlarge">
				<option value="1">shibir1</option>
				<option value="2">shibir2</option>
				<option value="3">borivali</option>
				<option value="4">kancivali</option>
				<option value="5">Option-5</option>
				<option value="6">Option-6</option>
				<option value="7">Option-7</option>
				</select>
				</div>
				</div>
                                </div>
                                
                                
                                
                            </div>
                            <div class="row-fluid">
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
