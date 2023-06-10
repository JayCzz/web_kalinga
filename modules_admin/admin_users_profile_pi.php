<?php 
    session_start();

    include '../components/connection.php';
    include '../components/functions.php';

	$user_data = check_login($con);

    $id = $_GET['edit'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Account Profile</title>

		<!-- swiper link  -->
        <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

		<!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

		<!-- google fonts link  -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap">

        <!-- header css file link  -->
        <link rel="stylesheet" href="../css/header.css">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="../css/admin_users_profile.css">
    </head>

    <body>
        <!-- Admin Header -->
        <?php
            include '../components/header_admin.php'; 
        ?>

        <!-- Calendar -->
        <section class="dashboard">
            <h1 class="heading">Your Profile</h1>
            
            <?php
                $select = mysqli_query($con, "SELECT * FROM users  WHERE id = '$id'");
                while($row = mysqli_fetch_assoc($select)){
            ?>

            <div class="info">
                <div class="user">
                    <img src="../uploaded_qr/<?php echo $row['familyNumber']; ?>" alt="">
                    <h3><?php echo $row['firstName']; ?> <?php echo $row['lastName']; ?></h3>
                    <p><?php echo $row['familyNumber']; ?></p>
                </div>
        
                <div class="box-container slim">
                    <div class="infomenu active">
                        <a href="admin_users_profile_pi.php?edit=<?php echo $row['id']; ?>" class="infomenu-box">
                            <img src="../img/icon01.png" alt="">
                            <h3>Personal Info</h3>
                        </a>
                    </div>
                    <div class="infomenu">
                        <a href="admin_users_profile_pc.php?edit=<?php echo $row['id']; ?>" class="infomenu-box">
                            <img src="../img/icon02.png" alt="">
                            <h3>Preconsultation</h3>
                        </a>
                    </div>
                    <div class="infomenu">    
                        <a href="admin_users_profile_ai.php?edit=<?php echo $row['id']; ?>" class="infomenu-box">
                            <img src="../img/icon03.png" alt="">
                            <h3>Account Info</h3>
                        </a>
                    </div>
                </div>

                <div class="details">
                    <div class="rowone">
                        <h3>Birthday:</h3>
                    </div>
                    <div class="rowtwo">
                        <p><?php echo $row['birthday']; ?></p>
                    </div>
                    
                    <div class="rowone">
                        <h3>Age:</h3>
                    </div>
                    <div class="rowtwo">
                        <p><?php echo $row['age']; ?></p>
                    </div>
                    
                    <div class="rowone">
                        <h3>Sex:</h3>
                    </div>
                    <div class="rowtwo">
                        <p><?php echo $row['sex']; ?></p>
                    </div>
                </div>

                <div class="updt">
                    <a href="admin_users_profile_pi_update.php?edit=<?php echo $row['id']; ?>" class="inline-btn">update profile</a>
                </div>
            </div>
            <?php } ?>

        </section>

        <!-- custom js file link  -->
        <script src="../js/script.js"></script>
    </body>
</html>