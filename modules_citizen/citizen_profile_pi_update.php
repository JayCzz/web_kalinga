<?php 
    session_start();

    include '../components/connection.php';
    include '../components/functions.php';

	$user_data = check_login($con);

    $id = $_GET['edit'];

    if(isset($_POST['update_profile'])) {

        $update_firstName = $_POST['update_firstName'];
        $update_lastName = $_POST['update_lastName'];
        $update_birthday = $_POST['update_birthday'];
        $update_age = $_POST['update_age'];
        $update_sex = $_POST['update_sex'];
		$cpass = $_POST['cpass'];

        if(empty($update_firstName) || empty($update_lastName) || empty($update_birthday) || empty($update_age) || empty($update_sex)) {
            $warning_msg[] = 'Please fill out all';
        }

        if($user_data['password'] != $cpass) {
            $error_msg[] = 'Password is incorrect';
        }
        
        else {
            $update_data = "UPDATE users SET firstName='$update_firstName', lastName='$update_lastName', birthday='$update_birthday', age='$update_age', sex='$update_sex'  WHERE id = '$id'";
            mysqli_query($con, $update_data);
			header("Location: citizen_profile_pi.php");
        }
    };
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inventory</title>

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="../css/citizen_profile.css">
    </head>

    <body>
        <?php
            include '../components/header_citizen.php'; 
        ?>

        <!-- Inventory Header -->
        <section class="dashboard">
            <h1 class="heading">Update Profile</h1>
        </section>

        <!-- Product Update -->
        <div class="container">
            <div class="admin-product-form-container">

                <form action="" method="post" enctype="multipart/form-data">
                    <h3 class="title">User Account Info</h3>
                    <div class="label">
                        <h4>First Name:</h4>
                    </div>
                    <input type="text" class="box" name="update_firstName" value="<?php echo $user_data['firstName']; ?>" placeholder="Enter First Name" required>
                    
                    <div class="label">
                        <h4>Last Name:</h4>
                    </div>
                    <input type="text" class="box" name="update_lastName" value="<?php echo $user_data['lastName']; ?>" placeholder="Enter Last Name" required>
                    
                    <div class="label">
                        <h4>Birthday:</h4>
                    </div>
                    <input type="date" class="box" name="update_birthday" value="<?php echo $user_data['birthday']; ?>" placeholder="Enter Birthday" required>
                    
                    <div class="label">
                        <h4>Age:</h4>
                    </div>
                    <input type="number" min="0" class="box" name="update_age" value="<?php echo $user_data['age']; ?>" placeholder="Enter Age" required>
                    
                    <div class="label">
                        <h4>Sex:</h4>
                    </div>
                    <input type="text" class="box" name="update_sex" value="<?php echo $user_data['sex']; ?>" placeholder="Enter Sex" required>
                    
                    <div class="label">
                        <h4>Enter Password:</h4>
                    </div>
                    <input type="text" class="box" name="cpass" placeholder="Enter Password" required>
                    <input type="submit" value="Update Profile" name="update_profile" class="btn">
                    <a href="citizen_profile_pi.php" class="btn">go back!</a>
                </form>
                
            </div>
        </div>
		
		<!-- sweetalert cdn link -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

        <!-- custom js file link  -->
        <script src="../js/script.js"></script>

		<?php include '../components/message.php'; ?>
    </body>
</html>