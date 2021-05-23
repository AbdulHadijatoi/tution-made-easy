// firstName lastName username email phoneNumber sectorName password role

function login() {
    var request = new XMLHttpRequest();
    request.open("POST", "controller/login.php");

    // Retrieving the form data
    var loginForm = document.getElementById("loginForm");
    var loginFormData = new FormData(loginForm);
    // loginFormData.set("index", "MY VALUE");
    request.send(loginFormData);

    request.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            var response = this.responseText;
            var mesg = "";
            if (response == "success") {
                document.getElementById('loginAlert').innerHTML = '<br><div class="alert alert-success alert-dismissible" role="alert"><strong>Congrats!</strong>Login Successful.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
                window.location = "index.php";
            } else if (response == 'failed') {
                document.getElementById('loginAlert').innerHTML = '<br><div class="alert alert-dismissible alert-danger" role="alert"><strong>Oops!</strong> Invalid email or Password.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
            } else {
                document.getElementById('loginAlert').innerHTML = '<br><div class="alert alert-dismissible alert-danger" role="alert"><strong>Oops!</strong> ' + response + '.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
            }
        }
    };
}


function register() {
    // alert("activated");
    var request = new XMLHttpRequest();
    request.open("POST", "controller/register.php");

    // Retrieving the form data
    var registerForm = document.getElementById("registerForm");
    var registerFormData = new FormData(registerForm);
    // registerFormData.set("index", "MY VALUE");
    request.send(registerFormData);

    request.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            var response = this.responseText;
            var mesg = "";
            if (response == "success") {
                mesg = '<br><div class="alert alert-success alert-dismissible" role="alert"><strong>Congrats!</strong> ' + response + '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
                window.location = "login.php";
            } else if (response == "failed") {
                mesg = '<br><div class="alert alert-success alert-danger" role="alert">This email is already registered, Kindly Login!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
            } else {
                mesg = '<br><div class="alert alert-success alert-danger" role="alert">' + response + '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
            }
            document.getElementById('registerAlert').innerHTML = mesg;
        }
    };
}