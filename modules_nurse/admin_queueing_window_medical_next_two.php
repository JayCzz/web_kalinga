<?php 
    session_start();

    include '../components/connection.php';
    include '../components/functions.php';

	$user_data = check_login($con);
    $queue = $_GET['edit'];

    if(isset($_POST['done'])) {
        $insert = "UPDATE queue_list SET status='Active' WHERE id = '$queue'";
        $upload = mysqli_query($con,$insert);
        header("location:admin_queueing_window_medical.php");
    };
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>

		<!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

		<!-- google fonts link  -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="../css/admin_queueing.css">
    </head>

    <body>
        <!-- Admin Header -->
        <?php
            include '../components/header_admin.php'; 
        ?>

        <!-- Queueing Registration Display -->
        <?php
            include '../components/queueing_live_medical.php'; 
        ?>

        <!-- Queue Number -->           
        <?php
            $select = mysqli_query($con, "SELECT id, queue_id, name, status FROM queue_list  WHERE id = '$queue'");
            while($row = mysqli_fetch_assoc($select)){
        ?>

        <section class="dashboard">
            <div class="popup">
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                    <h2><?php echo $row["queue_id"]; ?></h2>
                    <p><?php echo $row['name']; ?></p>
                    <input type="submit" name="done" class="btn" value="Set As Active">
                </form>
            </div>
        </section>

        <?php }; ?>

        <!-- custom js file link  -->
        <script src="../js/script.js"></script>
    </body>
</html>