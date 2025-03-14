<?php
     session_start();
     if(isset($_SESSION['unique_id'])){
        header("location: users.php");
     }
?>

<?php include_once "./header.php"; ?>

<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Realtime Chat App</header>
            <form action="./php/signup.php" method="post" enctype="multipart/form-data" autocomplete="on">
                <div class="error-text">
                    
                </div>
                <div class="name-details">
                        <div class="field input">
                            <label>First name</label>
                            <input type="text" name="fname" placeholder="First Name" required>
                        </div>
                        <div class="field input">
                            <label>Last name</label>
                            <input type="text" name="lname" placeholder="Last Name" required>
                        </div>
                    </div>
                <div class="field input">
                    <label>Email Address</label>
                    <input type="text" name="email" placeholder="Enter Your Email" required>
                </div>

                <div class="field input">
                    <label>password</label>
                    <input type="Password" name="password" placeholder="Enter New Password" required>
                    <i class="fas fa-eye"></i>
                </div>

                <div class="field image">
                    <label>Image</label>
                    <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" require>
                </div>

                <div class="field button">
                    <input type="submit" name="submit" value="Continue-to-Chat" >
                </div>

            </form>
            
            <div class="link">Alreaby signed up? <a href="./login.php">Login now</a></div>
        </section>
    </div>

<script type="text/javascript" src="./js/pass_show_hide.js"></script>

<script type="text/javascript" src="./js/signup.js"></script>

</body>
</html>