function product(){
    let name = document.getElementById('name').value;
    let price = document.getElementById('price').value;
    let qnt = document.getElementById('quantity').value;

    let nameerror=document.getElementById('nameerror');
    let priceerror=document.getElementById('priceerror');
    let qnerror=document.getElementById('qnerror');
    let success = document.getElementById('success');

   
    nameerror.innerHTML="";
    priceerror.innerHTML="";
    qnerror.innerHTML="";
    success.innerHTML="";


    let xhttp = new XMLHttpRequest();

    xhttp.open('POST', '../controller/addproduct.php', true);

   
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    
    let data = 'name=' + name + '&price=' + price + '&qnt=' + qnt ;

    xhttp.send(data);

    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            var response = JSON.parse(this.responseText);
            

            if (response.status === 1) {
                nameerror.innerHTML = response.message;
            }
            if (response.status === 2) {
                priceerror.innerHTML = response.message;
            }
            if (response.status === 3) {
                qnerror.innerHTML = response.message;
            }
            
            if(response.status==10){
                success.innerHTML=response.message;

            }
        }
    }






}