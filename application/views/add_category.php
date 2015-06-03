

<?php  include('header.php')?>
<div id="main" style="margin-left: 0px;">
    <div class="container-fluid">



        <div class="row-fluid">
            <div class="span12">
                <div class="box box-bordered">
                    <div class="box-title">
                        <h3><i class="icon-th-large"></i> ADD MASTER CATEGORY</h3>
                    </div>

                    <div class="box-content">
                        <form action="#" method="POST" class='form-horizontal form-validate' id="bb">




                                    <div class="control-group">
                                        <label for="textfield" class="control-label">Category Name</label>
                                        <div class="controls">
                                            <input type="text" placeholder="Enter Category Name .." name="Category_name" id="Category_name" class="input-xlarge" data-rule-required="true" data-rule-minlength="1">
                                        </div>
                                    </div>

                            <div class="control-group">
                                <label class="control-label">Category Is Active?</label>
                                <div class="controls">
                                    <label class='checkbox'>
                                        <input type="checkbox" name="category_status"> Is Active?
                                    </label>

                                </div>
                            </div>



                       <div class="control-group">
                           <label for="textarea" class="control-label">Category Description</label>
                           <div class="controls">
                               <textarea name="mission_description" id="category_description" class="input-block-level" data-rule-required="true" data-rule-minlength="1"> </textarea>
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

