function validateLogin() 
{
    let emailId = document.getElementById('emailId').value;
    let password = document.getElementById('password').value;

    if (emailId == "" || password == "")
    {
        console.log("Null username or password!");
        return false;
    }

    return true;
}