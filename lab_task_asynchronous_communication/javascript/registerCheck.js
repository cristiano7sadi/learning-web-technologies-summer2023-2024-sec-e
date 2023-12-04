function validateForm()
{
    let name = document.getElementById('name').value;
    let password = document.getElementById('password').value;
    let confirmPassword = document.getElementById('confirmPassword').value;
    let emailId = document.getElementById('emailId').value;
    let phone = document.getElementById('phone').value;

    if (password.length < 4)
    {
        alert("Password must be at least 4 characters long!");
        return false;
    }

    if (password !== confirmPassword)
    {
        alert("Password and Confirm Password do not match!");
        return false;
    }

    if (name == "" || password == "" || emailId == "" || phone == "")
    {
        alert("Null username or password or email or contact number!");
        return false;
    }

    return true;
}

function checkEmailAvailability(){
    let email = document.getElementById('emailId').value;
    
    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                document.getElementById('emailAvailability').innerHTML = xhr.responseText;
            }
        }
    };

    xhr.open('POST', '../controller/registerCheck.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.send('emailCheck=' + email);
}

// Function to trigger the check when typing finishes
document.getElementById('emailId').addEventListener('input', function() {
    clearTimeout(window.typingTimer);
    window.typingTimer = setTimeout(checkEmailAvailability, 500); // Adjust delay as needed
});

// Clear timer if the user continues typing
document.getElementById('emailId').addEventListener('keydown', function() {
    clearTimeout(window.typingTimer);
});
