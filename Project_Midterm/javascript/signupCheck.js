function validateForm()
{
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('confirmPassword').value;
    var email = document.getElementById('email').value;
    var fullName = document.getElementById('fullName').value;
    var contactNo = document.getElementById('contactNo').value;

    if (username.length < 6)
    {
        alert("Username must be at least 6 characters long!");
        return false;
    }

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

    if (username === "" || password === "" || email === "" || fullName === "" || contactNo === "")
    {
        alert("Null username or password or email or contact number!");
        return false;
    }

    return true;
}
