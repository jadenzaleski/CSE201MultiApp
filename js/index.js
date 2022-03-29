// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation');

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
})()

function checkPassword(p, cp) {

    // If Not same return False.
    if (p.length < 8 || p !== cp) {
        alert("Passwords do not match or are less than 8 characters long.")
        return false;
    }

    // If same return True.
    else {
        return true;
    }
}

$(document).ready(function () {
    $('#loginButton').click(function () {
        var username = $('#usernameLoginInput').val();
        var password = $('#passwordLoginInput').val();
        if (username != '' && password != '') {
            $.ajax({
                url: "login.php",
                method: "POST",
                data: {username: username, password: password},
                success: function (data) {
                    // alert(data);
                    if (data == 'No') {
                        alert("The username or password is incorrect or does not exist.");
                    } else {
                        $('#accountModal').hide();
                        location.reload();
                        // alert("success");
                    }
                }
            });
        } else {
            $('#loginForm').toggleClass("was-validated");
        }
    });

    $('#logout').click(function () {
        var action = "logout";
        $.ajax({
            url: "login.php",
            method: "POST",
            data: {action: action},
            success: function () {
                location.reload();
            }
        });
    });

    $('#registrationSubmitButton').click(function () {
        var firstName = $('#fn').val();
        var lastName = $('#ln').val();
        var username = $('#registrationUsername').val();
        var password = $('#registrationPassword').val();
        var confirmPassword = $('#confirmRegistrationPassword').val();
        if (fn != '' && ln != '' && username != '' && password != '' && confirmPassword != '') {
            if (checkPassword(password, confirmPassword)) {
                $.ajax({
                    url: "createAccount.php",
                    method: "POST",
                    data: {firstName: firstName, lastName: lastName, username: username, password: password, level: 0},
                    success: function (data) {
                        if (data == 'Yes') {
                            $('#accountModal').hide();
                            location.reload();
                            // alert("success");
                        } else {
                            alert(data);
                        }
                    }
                });
            }
        } else {
            $('#createAccountForm').toggleClass("was-validated");
        }
    });
    $('#submit').click(function () {
        var appName = $('#applicationNameInput').val();
        var devName = $('#devNameInput').val();
        var descrip = $('#applicationDescription').val();
        var version = $('#applicationVersionInput').val();
        var mac = $('macCheckbox').val();
        var windows = $('windowsCheckbox').val();
        var image = $('applicationImageInput').val();
        $.ajax({
            url: "addApp.php",
            method: "POST",
            data: {appName: devName, descrip: version, mac: windows, image},
                    success: function (data) {
                        if (data == 'Yes') {
                            $('#accountModal').hide();
                            location.reload();
                            // alert("success");
                        } else {
                            alert(data);
                        }
                    }
                });
            }
        } else {
            $('#createAccountForm').toggleClass("was-validated");
        }
    });
});