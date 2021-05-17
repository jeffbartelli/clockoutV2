document.addEventListener('DOMContentLoaded', () => {

    let usernameCheck = false;
    let passwordCheck = false; 

    function verify () {
        if (usernameCheck == true && passwordCheck == true) {
            document.getElementById('loginBtn').disabled = false;
        }
    }

    document.getElementById('loginUsername').addEventListener('blur', function () {
        usernameCheck = this.value != '' ? true : false;
        verify();
    });

    document.getElementById('loginPassword').addEventListener('blur', function () {
        passwordCheck = this.value != '' ? true : false;
        verify();
    })
});