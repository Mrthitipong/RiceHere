function login() {
  firebase.auth().onAuthStateChanged(function (user) {
    if (user) {
      // User is signed in.

      if (user != null) {
        document.location.href = "./tt/PJ/after_login_sell.php";
        var email_id = user.email;
        document.getElementById("user_para").innerHTML =  email_id;

      }

    } else {
      var userEmail = document.getElementById("email").value;
      var userPass = document.getElementById("password").value;

      firebase.auth().signInWithEmailAndPassword(userEmail, userPass).catch(function (error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;

        window.alert("Error : " + errorMessage);

        // ...
      });

    }
  });


}


