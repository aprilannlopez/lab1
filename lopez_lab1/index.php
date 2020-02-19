<!DOCTYPE html>
<head>
<title>PHP User Registration Form</title>
<link href="./css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <form name="frmRegistration" method="post" action="">
        <div class="demo-table">
        <div class="form-head">Registration Form</div>
            
<?php
if (! empty($errorMessage) && is_array($errorMessage)) {
    ?>	
            <div class="error-message">
            <?php 
            foreach($errorMessage as $message) {
                echo $message . "<br/>";
            }
            ?>
            </div>
<?php
}
?>

            <div class="field-column">
                <label>Firstname</label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="First Name"
                        value="<?php if(isset($_POST['Firstname'])) echo $_POST['Firstname']; ?>">
                </div>
            </div>

            <div class="field-column">
                <label>Lastname</label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="Last Name"
                        value="<?php if(isset($_POST['userName'])) echo $_POST['userName']; ?>">
                </div>
            </div>

            <div class="field-column">
                <label>Middlename</label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="Middle Name"
                        value="<?php if(isset($_POST['userName'])) echo $_POST['userName']; ?>">
                </div>
            </div>
            
            <div class="field-column">
                <label>Address</label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="Address"
                        value="<?php if(isset($_POST['userName'])) echo $_POST['userName']; ?>">
                </div>
            
                <div class="field-column">
                <label>Date of Birth</label>
                <div>
                    <input type="date" class="demo-input-box"
                        name="Date of Birth"
                        value="<?php if(isset($_POST['userName'])) echo $_POST['userName']; ?>">
                </div>
            </div>

            <div class="field-column">
                <label>Place of Birth</label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="First Name"
                        value="<?php if(isset($_POST['userName'])) echo $_POST['userName']; ?>">
                </div>
            </div>

            <div class="field-column">
                <label>Gender</label>
                <div>   
                    <input type="radio" name="gender" value="male"> Male<br>
                    <input type="radio" name="gender" value="female"> Female<br>
                    <input type="radio" name="gender" value="other"> Other
                        <value="<?php if(isset($_POST['userName'])) echo $_POST['userName']; ?>">
                </div>
            </div>

            <div class="field-column">
                <label>Guardian</label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="Guardian"
                        value="<?php if(isset($_POST['userName'])) echo $_POST['userName']; ?>">
                </div>
            </div>

            <div class="field-column">
                <label>Contact Number</label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="Contact Number"
                        value="<?php if(isset($_POST['userName'])) echo $_POST['userName']; ?>">
                </div>
            </div>

            <div class="field-column">
                <label>Civil Status</label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="Civil Status"
                        value="<?php if(isset($_POST['userName'])) echo $_POST['userName']; ?>">
                </div>
            </div>

            <div class="field-column">
                <label>Year Level</label>
                <select id="Year Level">
                    <option value="volvo">1st Year</option>
                    <option value="saab">2nd Year</option>
                    <option value="mercedes">3rd Year</option>
                    <option value="audi">4th Year</option>
                </select>
            </div>

            <div class="field-column">
                <label>Course</label>
                <select id="Course">
                    <option value="volvo">Information Technology</option>
                    <option value="saab">TCM</option>
                    <option value="mercedes">Civil Engineering</option>
                    <option value="audi">EMT</option>
                    <option value="audi">Education</option>
                    </select>

            <div class="field-column">
                <label>School Year</label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="School Year"
                        value="<?php if(isset($_POST['firstName'])) echo $_POST['firstName']; ?>">
                </div>

            <div class="field-column">
                <div class="terms">
                    <input type="checkbox" name="terms"> I accept terms
                    and conditions
                </div>
                <div>
                    <input type="submit"
                        name="register-user" value="Register"
                        class="btnRegister">
                </div>
            </div>
        </div>
    </form>
</body>
</html>