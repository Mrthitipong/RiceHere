function signup() {
  var email = document.getElementById("email_f").value;
  var password = document.getElementById("password_f").value;
  firebase.auth().createUserWithEmailAndPassword(email, password).catch(function (error) {
    // Handle Errors here.
    var errorCode = error.code;
    var errorMessage = error.message;
    firebase.auth().sendSignInLinkToEmail(email, actionCodeSettings)
      .then(function () {
        // The link was successfully sent. Inform the user.
        // Save the email locally so you don't need to ask the user for it again
        // if they open the link on the same device.
        window.localStorage.setItem('emailForSignIn', email);
      })
      .catch(function (error) {
        // Some error occurred, you can inspect the code: error.code
      });
  });
}