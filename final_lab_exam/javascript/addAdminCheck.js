function validateForm()
{
    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;
    let confirmPassword = document.getElementById('confirmPassword').value;
    let email = document.getElementById('email').value;
    let fullName = document.getElementById('fullName').value;
    let contactNo = document.getElementById('contactNo').value;

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

    if (username == "" || password == "" || email == "" || fullName == "" || contactNo == "")
    {
        alert("Null username or password or email or contact number!");
        return false;
    }

    return true;
}