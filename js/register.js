document.addEventListener('DOMContentLoaded', () => {

    let usernameCheck = false;
    let emailCheck = false;
    let passwordCheck = false; 
    let passwordConfCheck = false;

    function verify () {
        console.log('triggered');
        if (usernameCheck == true && emailCheck == true && passwordCheck == true && passwordConfCheck == true) {
            document.getElementById('signupBtn').disabled = false;
        }
    }

    // Replace these CSS changes with actual CSS and use this function to apply a class to activate them
    function reject (param, action, message) {
        let name = param;
        if (action == 'add') {
            document.getElementById(`${name}Error`).innerHTML = `${message}`;
            document.getElementById(`${name}`).style.backgroundColor = "mistyrose";
            document.getElementById(`${name}`).style.color = 'darkred';
            document.getElementById(`${name}`).style.borderColor = 'firebrick';
            document.getElementById(`${name}`).style.boxShadow = "0 0 8px mistyrose"; 
        } else if (action == 'delete') {
            document.getElementById(`${name}Error`).innerHTML = '';
            document.getElementById(`${name}`).style.backgroundColor = '';
            document.getElementById(`${name}`).style.color = '';
            document.getElementById(`${name}`).style.borderColor = '';
            document.getElementById(`${name}`).style.boxShadow = ''; 
        }
    }

    document.getElementById('username').addEventListener("blur", function(e) {
        let username = document.getElementById('username');
        if (username.value == '') {
            usernameCheck = false;
            reject('username','delete');
            return;
        }

        $.ajax({
            url: 'check.php',
            type: 'post',
            data: {
                'username': username.value,
                'username_check': 1
            },
            success: function(response){
                if (response == 'taken') {
                    usernameCheck = false;
                    reject('username','add','Already Taken');
                } else if (response == 'not_taken') {
                    usernameCheck = true;
                    reject('username','delete');
                }
            }
        });
        verify();
    });

    document.getElementById('email').addEventListener("blur", function(e) {
        let email = document.getElementById('email');
        if (email.value == '') {
            emailCheck = false;
            reject('email','delete');
            return;
        }

        $.ajax({
            url: 'check.php',
            type: 'post',
            data: {
                'email': email.value,
                'email_check': 1
            },
            success: function(response){
                if (response == 'taken') {
                    emailCheck = false;
                    reject('email','add', 'Already Has an Account');
                } else if (response == 'not_taken') {
                    emailCheck = true;
                    reject('email','delete');
                }
            }
        });
        verify();
    });

    document.getElementById('password').addEventListener("blur", function(e) {
        if (document.getElementById('password').value.length > 0) {
            passwordCheck = true;
        } else {
            passwordCheck = false;
        }
        verify();
    });

    document.getElementById('passwordConf').addEventListener("keyup", function(e) {
        let password = document.getElementById('password').value;
        let passwordConf = document.getElementById('passwordConf').value;
        if (password != passwordConf) {
            passwordConfCheck = false;
            reject('passwordConf','add',"<i class='bi bi-emoji-dizzy'></i> Doesn't Match");
        } else {
            passwordConfCheck = true;
            reject('passwordConf','delete','');
        }
        verify();
    });
});