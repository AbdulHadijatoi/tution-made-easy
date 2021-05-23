$('.owl-carousel').owlCarousel({
    items: 1,
    merge: true,
    loop: true,
    margin: 10,
    video: true,
    lazyLoad: true,
    center: true,
    responsive: {
        480: {
            items: 2
        },
        600: {
            items: 4
        }
    }
})


function signin() {
    var request = new XMLHttpRequest();
    request.open("POST", "database/sign-in.php");

    // Retrieving the form data
    var signinForm = document.getElementById("signinForm");
    var signinFormData = new FormData(signinForm);
    // loginFormData.set("index", "MY VALUE");
    request.send(signinFormData);

    request.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            var response = this.responseText;
            var mesg = "";
            if (response == "success") {
                document.getElementById('signinAlert').innerHTML = '<br><div class="alert alert-success alert-dismissible" role="alert"><strong>Congrats!</strong>Login Successful.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
                window.location = "index.php";
            } else if (response == 'failed') {
                document.getElementById('signinAlert').innerHTML = '<br><div class="alert alert-dismissible alert-danger" role="alert"><strong>Oops!</strong> Invalid email or Password.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
            } else {
                document.getElementById('signinAlert').innerHTML = '<br><div class="alert alert-dismissible alert-danger" role="alert"><strong>Oops!</strong> ' + response + '.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
            }
        }
    };
}


function signup() {
    // alert("activated");
    var request = new XMLHttpRequest();
    request.open("POST", "database/sign-up.php");

    // Retrieving the form data
    var signupForm = document.getElementById("signupForm");
    var signupFormData = new FormData(signupForm);
    // signupFormData.set("index", "MY VALUE");
    request.send(signupFormData);

    request.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            var response = this.responseText;
            var mesg = "";
            if (response == "success") {
                mesg = '<br><div class="alert alert-success alert-dismissible" role="alert"><strong>Congrats!</strong> ' + response + '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
            } else if (response == "failed") {
                mesg = '<br><div class="alert alert-success alert-danger" role="alert">This email is already registered, Kindly Login!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
            } else {
                mesg = '<br><div class="alert alert-success alert-danger" role="alert">Please input all the fields to continue!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
            }

            document.getElementById('signupAlert').innerHTML = mesg;

        }
    };
}

function setProfile() {
    // alert("activated");
    var request = new XMLHttpRequest();
    request.open("POST", "database/setProfile.php");

    // Retrieving the form data
    var profileForm = document.getElementById("profileForm");
    var profileFormmData = new FormData(profileForm);
    // signupFormData.set("index", "MY VALUE");
    request.send(profileFormmData);

    request.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            var response = this.responseText;
            var mesg = "";
            if (response == "success") {
                mesg = '<br><div class="alert alert-success alert-dismissible" role="alert"><strong>Congrats!</strong> ' + response + '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
            } else {
                mesg = '<br><div class="alert alert-success alert-danger" role="alert">' + response + '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
            }

            document.getElementById('profileAlert').innerHTML = mesg;

        }
    };
}