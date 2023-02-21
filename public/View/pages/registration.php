<?php
require_once("../Database/Connection.php");
// Load Config
require_once '../config/config.php';
require_once '../vendor/autoload.php';
// Routes
require_once '../routes/web.php';
//require_once '../app/Router.php';

// echo $_POST["FullName"];
// echo $_POST["UserName"];
// echo $_POST["Email"];
// echo $_POST["password"];





if (isset($_POST["FullName"])) {

    $FullName = $_POST["FullName"];
    $UserName =  $_POST["UserName"];
    $Email =  $_POST["Email"];
    $password =  $_POST["password"];

    $sql = "INSERT INTO users (FullName, UserName, Email, password) VALUES ('$FullName', '$UserName','$Email', '$password')";

    if ($connect->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}

if (isset($_POST["EmailSignIN"])) {


    $EmailSignIN =  $_POST["EmailSignIN"];
    $passwordSignIn =  $_POST["passwordSignIn"];

    $email = mysqli_real_escape_string($connect, $_POST['EmailSignIN']);
    $password = mysqli_real_escape_string($connect, $_POST['passwordSignIn']);




    $sql = "SELECT * FROM users WHERE Email = '$email' AND password = '$password'";
    $result = mysqli_query($connect, $sql);

    if (mysqli_num_rows($result) > 0) {
        $url = $routes->get('home')->getPath();
        header("Location: " . $url);
        exit;
    } else {

        echo "Wrong email or password";
    }
    mysqli_close($connect);
}




?>




<?php require_once './View/layout/withoutCSSLinkedHeader.php'; ?>

<!-- Custom CSS-->
<link rel="stylesheet" href="public/css/registration.css">
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="registration.php" method="post">
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input type="text" name="FullName" placeholder="Name" />
                <input type="text" name="UserName" placeholder="Handle Name" />
                <input type="email" name="Email" placeholder="Email" />
                <input type="password" name="password" placeholder="Password" />
                <button>Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="" method="post">
                <h1>Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your account</span>
                <input type="email" name="EmailSignIN" placeholder="Email" />
                <input type="password" name="passwordSignIn" placeholder="Password" />
                <a href="#">Forgot your password?</a>
                <button>Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Coders!</h1>
                    <p>Not a member? </br> Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>
            Made with <i class="fa fa-heart"></i> by Freon Devs
        </p>
    </footer>

    <script src="public/js/singup.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js"></script>



    <?php require_once './View/layout/footer.php'; ?>