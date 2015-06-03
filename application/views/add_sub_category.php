

<?php  include('header.php')?>
<div id="main" style="margin-left: 0px;">
    <div class="container-fluid">



        <div class="row-fluid">
            <div class="span12">
                <div class="box box-bordered">
                    <div class="box-title">
                        <h3><i class="icon-th-large"></i> ADD SUB-CATEGORY</h3>
                    </div>

                    <div class="box-content">
                        <form action="#" method="POST" class='form-horizontal form-validate' id="bb">



                                    <div class="control-group">
                                        <label for="textfield" class="control-label">Sub Category Name</label>
                                        <div class="controls">
                                            <input type="text" placeholder="Enter Sub-category Name .." name="subcateg_name" id="subcateg_name" class="input-xlarge" data-rule-required="true" data-rule-minlength="1">
                                        </div>
                                    </div>



                            <div class="control-group">
                                <label class="control-label">Sub-Category Is Active?</label>
                                <div class="controls">
                                    <label class='checkbox'>
                                        <input type="checkbox" name="subvateg_status"> Is Active?
                                    </label>

                                </div>
                            </div>






                       <div class="control-group">
                           <label for="textarea" class="control-label">Description</label>
                           <div class="controls">
                               <textarea name="description" id="description" class="input-block-level" data-rule-required="true" data-rule-minlength="1"> </textarea>
                           </div>

                       </div>



                            <div class="control-group">
                                <label for="textfield" class="control-label">Master Category</label>
                                <div class="controls">
                                    <select name="Master_category" id="state" data-rule-required="true">
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

