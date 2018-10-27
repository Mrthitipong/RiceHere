
function login() {

    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    if (email.length < 4) {
        alert('Please enter an email address.');
        return;
      }
      if (password.length < 4) {
        alert('Please enter a password.');
        return;
      }
    firebase.auth().signInWithEmailAndPassword(email, password).catch(function (error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;

        window.alert("Error : " + errorMessage);

        // ...
    });
    document.getElementById("user_div").style.display = "block";

  
}
function logout() {
    firebase.auth().signOut();
    
}
