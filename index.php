<html>

<head>


    <link rel="stylesheet" type="text/css" href="css/bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/main_styles.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.structure.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.theme.css">
</head>

<body>


    <div class="row" style="height:100%;background-image: url(images/salogan.jpg);background-size: 100% 100%;padding:8px;">


        <div class="col-4"> </div>
        <div class="col-4" style="text-align: center;">
            <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
            <a href="tt/PJ/first_buy.php"><button type="button" class="btn btn-primary" style="width:150px;height:60px;">สั่งซื้อ</button></a>
            &nbsp;&nbsp;&nbsp;&nbsp;

            <button type="button" id="sell_user" class="btn btn-success" style="width:150px;height:60px;">ลงขาย
            </button>


            <div id="login_div" class="main-div">
                <div id="box" title="Basic dialog">
                    <div class="container">
                        <label class="email"><b>อีเมล</b></label>
                        <input class="email_user" id="email" type="email" name="uname">
                        <br>
                        <label class="pass"><b>รหัสผ่าน</b></label>
                        <input class="password_user" id="password" type="password" name="password"><br>
                        <div class="row">
                            <div class="col-6" align="center">
                                <button onclick="login()" id="Sign">เข้าสู่ระบบ</button><br></div>

                            <div class="col-6">
                                <button class="sign_up_f" align="center" id="Sign_up1">สมัครสมาชิก</button>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-6" align="center">
                                <button onclick="loginGoogle()" id="Sign_google"> GOOGLE </button><br><br></div>
                            <div class="col-6">
                                <button onclick="loginFacebook()" class="sign_up_f" align="center" id="Sign_up1">FACEBOOK</button>
                            </div>

                        </div>
                    </div>
                </div>
                <div id="signup" title="Basic dialog">
                    <div class="container">
                        <label class="email"><b>อีเมล</b></label>
                        <input class="email_user" id="email_f" type="email" name="uname">
                        <br>
                        <label class="pass"><b>รหัสผ่าน</b></label>
                        <input class="password_user" id="password_f" type="password" name="password"><br>
                        <br>
                        <label class="phon"><b>หมายเลขโทรศัพท์</b></label>
                        <input class="Phone_number" id="Phone_number" type="text" name="Phone_number"><br>
                        <button onclick="signup()" id="Sign_up">สมัครสมาชิก</button>
                        <button style="display: none;" type="button" onclick="close()" id="close">ปิด</button>
                    </div>
                </div>
            </div>
            <br><br>
        </div>
        <footer class="container-fluid text-center foot">
            <div class="copyrights">
                <img class="footimg" src="images/logo.png" alt="Logo">
                <hr class="dark-line">
                <h5 class="active">อีเมล : ricehere.buu@gmail.com </h5>

                <h5 class="active">โทร : 0853939908</h5>
                <p class="white-txt small">
                    ซื้อง่าย ขายข้าว จากชาวนาคุณภาพ นึกถึง Rice Here
                </p>
            </div>
        </footer>

</body>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/loginWeb.js"></script>
<script type="text/javascript" src="js/signUpWeb.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.6/firebase.js"></script>
<script>
    // Initialize Firebase
    var config = {
        apiKey: "AIzaSyCxzWdnO_3SJ_oIsjNWW5VHkK8_x3aomvI",
        authDomain: "rice-here2018.firebaseapp.com",
        databaseURL: "https://rice-here2018.firebaseio.com",
        projectId: "rice-here2018",
        storageBucket: "rice-here2018.appspot.com",
        messagingSenderId: "560163102847"
    };
    firebase.initializeApp(config);
    
    var provider1 = new firebase.auth.GoogleAuthProvider();
    function loginGoogle() {
        firebase.auth().signInWithPopup(provider1).then(function (result) {
            var token = result.credential.accessToken;
            var user = result.user;
        }).catch(function (error) {
            // Handle Errors here.
            var errorCode = error.code;
            var errorMessage = error.message;
            // The email of the user's account used.
            var email = error.email;
            // The firebase.auth.AuthCredential type that was used.
            var credential = error.credential;
            // ...
        });
        
    }
    
</script>
<script>
var provider = new firebase.auth.FacebookAuthProvider();
    function loginFacebook() {
        firebase.auth().signInWithPopup(provider).then(function (result) {
            var token = result.credential.accessToken;

            var user = result.user;
        }).catch(function (error) {
            // Handle Errors here.
            var errorCode = error.code;
            var errorMessage = error.message;
            // The email of the user's account used.
            var email = error.email;
            // The firebase.auth.AuthCredential type that was used.
            var credential = error.credential;
            // ...
        });
    }
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '2061954857198035',
      xfbml      : true,
      version    : 'v3.2'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<script>
    $(function () {
        $("#box").dialog({
            autoOpen: false,
            title: 'กรุณากรอกข้อมูล',
            width: 500,
            height: 600,
            modal: true,
            resizable: false,
            draggable: false,
        });
        $("#signup").dialog({
            autoOpen: false,
            title: 'กรุณากรอกข้อมูล',
            width: 500,
            height: 600,
            modal: true,
            resizable: false,
            draggable: false,
        });
        $("#sell_user").on("click", function () {
            $("#box").dialog("open");
        });
        $("#Sign").on("click", function () {
            $("#box").dialog("close");
        });
        $("#Sign_up1").on("click", function () {
            $("#box").dialog("close");
        });
        $("#Sign_up1").on("click", function () {
            $("#signup").dialog("open");
        });
        $("#close").on("click", function () {
            $("#signup").dialog("close");
        });
    });

</script>

</html>