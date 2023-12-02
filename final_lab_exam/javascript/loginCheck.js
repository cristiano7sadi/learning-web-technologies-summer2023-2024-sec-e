function validateLogin() 
{
    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;

    if (username === "" || password === "")
    {
        console.log("Null username or password!");
        return false;
    }

    return true;
}