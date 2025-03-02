<?php
       session_start();
       if(isset($_SESSION['uniqjue_id'])){
        // header("Location: ./users.php");
       }
     
?>

<?php include_once "./header.php"; ?>

<body>
    <div class="wrapper">
        <section class="form login">
            <header>Realtime Chat App</header>
            <form action="./php/login.php" method="POST" enctype="multipart/form-data" autocomplete="on">
                <div class="error-text"></div>
               
                <div class="field input">
                    <label>Email Address</label>
                    <input type="email" name="email" placeholder="Enter your Email" required>
                </div>

                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter your password" required>
                    <i class="fas fa-eye"></i>
                </div>

                <div class="field button">
                    <input type="submit" name="submit" placeholder="Continue to Chat" required>
                </div>
           
            </form>

            <div class="link">NOt yet signed up?<a href="index.php">Signup now</a></div>
        </section>
    </div>

   <script type="text/javascript" src="./js/pass_show_hide.js"></script>

<script type="text/javascript" src="./js/signup.js"></script>
<script type="text/javascript" src="./js/login.js"></script>
</body>
</html>