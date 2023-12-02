function searchUser()
{
    let username = document.getElementById('username').value;

    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function ()
    {
        if (xhr.readyState == 4 && xhr.status == 200)
        {
            document.getElementById('storeResult').innerHTML = xhr.responseText;
        }
    };
    xhr.open("POST", "../controller/searchEmployeeCheck.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("username=" + username);
}