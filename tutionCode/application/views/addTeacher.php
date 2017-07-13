<?php include "header.php";?>
<?php $page='five';include "sidebar.php";?>
<?php include "nav.php";?>
<?php $this->load->library('form_validation'); ?>
<?php echo form_open('Teacher_cont/addTeacher'); ?>
<br>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Add Faculty</h4>
                    </div>
   
                    <div class="content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Teacher's Name</label>
                                    <input type="text" class="form-control border-input" name="teachersname" value="<?php if(isset($_POST['teachersname'])){echo $_POST['teachersname'];} ?>" placeholder="FirstName &emsp;&emsp;&emsp; LastName  " required>
                                    
                                    <?php echo form_error('teachersname', '<div class="alert alert-danger contact-warning">', '</div>'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Gender</label>
                                    <div class="row">
                                        <div class="col-md-4"><input type="radio" name="gender" value="male" checked> Male</div>
                                        <div class="col-md-6"><input type="radio" name="gender" value="female"> Female</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>DOB</label>
                                    <input type="date" class="form-control border-input" name="dob" value="<?php if(isset($_POST['dob'])){echo $_POST['dob'];} ?>" required>
                                    <?php echo form_error('dob', '<div class="alert alert-danger contact-warning">', '</div>'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>EmailID</label>
                                    <input type="email" class="form-control border-input" name="email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];} ?>" placeholder="dummy@mail.com" required>
                                    <?php echo form_error('email', '<div class="alert alert-danger contact-warning">', '</div>'); ?>
                                </div>   
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Mobile</label>
                                    <input type="text" class="form-control border-input" name="mobile" value="<?php if(isset($_POST['mobile'])){echo $_POST['mobile'];} ?>" placeholder="9876541236" required>
                                    <?php echo form_error('mobile', '<div class="alert alert-danger contact-warning">', '</div>'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Qualification</label>
                                    <input type="text" class="form-control border-input" name="qualification" value="<?php if(isset($_POST['qualification'])){echo $_POST['qualification'];} ?>" placeholder="B.E" required>
                                    <?php echo form_error('qualification', '<div class="alert alert-danger contact-warning">',   '</div>'); ?>
                                </div>   
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Salary</label>
                                    <input type="text" class="form-control border-input" name="salary" value="<?php if(isset($_POST['salary'])){echo $_POST['salary'];} ?>" placeholder="10000" required>
                                    <?php echo form_error('salary', '<div class="alert alert-danger contact-warning">', '</div>'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea rows="2" type="text" class="form-control border-input" name="address" value="<?php if(isset($_POST['address'])){echo $_POST['address'];} ?>" required></textarea>
                                    <?php echo form_error('address', '<div class="alert alert-danger contact-warning">', '</div>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Joining Date</label>
                                    <input type="date" class="form-control border-input" name="joiningdate" value="<?php if(isset($_POST['joiningdate'])){echo $_POST['joiningdate'];} ?>" placeholder="FirstName &emsp;&emsp;&emsp;  MiddleName &emsp;&emsp;&emsp; LastName  " required>
                                    <?php echo form_error('joiningdate', '<div class="alert alert-danger contact-warning">', '</div>'); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">                   
                                <label class="col-sm-6">Profile photo:</label>
                                <div class="row">
                                    <input type="file" class="form-control" name="photo" accept="image/*"><br>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div><hr>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Select Subjects</h4>
                    </div>

                    <div class="content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Courses</label> 
                                    <select class="form-control border-input" id="course" name="course" required>
                                        <option value="">---Select Course---</option>
                                        <option value="course1">course1</option>
                                        <option value="course2">course2</option>
                                        <option value="course3">course3</option>
                                    </select>
                                    <?php echo form_error('course', '<div class="alert alert-danger contact-warning">', '</div>'); ?>
                                </div>
                            </div>
                            <!--<div class="col-md-12">
                                    <div class="form-group">
                                        <label>Standard</label>
                                        <div class="col-sm-12">
                                            <select class="form-control border-input" id="standard" name="standard" required>
                                                <option value="">---Select Standard---</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="Engineering">Engineering</option>
                                                <option value="Commerce">Commerce</option>
                                            </select>
                                            <?php echo form_error('standard', '<div class="alert alert-danger contact-warning">', '</div>'); ?>
                                        </div>
                                    </div>
                            </div>-->
                        </div><br> 
                       
                            
                        <div id="subjects" style="display:none;">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Subjects:</label>
                                        <div class="col-sm-12">
                                            <div class="row">
                                                <label class="checkbox-inline">
                                                  <input type="checkbox" value="" name="checkbox" >Hindi
                                                </label>
                                                <label class="checkbox-inline">
                                                  <input type="checkbox" value="checkbox">English
                                                </label>
                                                <label class="checkbox-inline">
                                                  <input type="checkbox" value="checkbox">Marathi
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Add Faculty</button>
                    <!--<button type="reset" class="btn btn-danger">Clear Form</button>-->	
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo form_close(); ?>
<?php include "footer.php";?>
<?php include "addModel.php"?>
<?php include "script_include.php"; ?>
<?php include "custom_script.php";?>