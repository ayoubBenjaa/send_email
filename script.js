
const form = document.querySelector("form");
btn = form.querySelector("#btn");
span = form.querySelector("span");

form.onsubmit = (e)=>{
    e.preventDefault();
    span.style.display = "block";
    span.style.color = "#3676dc";
    let xhr = new XMLHttpRequest();
    xhr.open("POST","server.php",true);
    xhr.onload=()=>{
        if(xhr.readyState==4 && xhr.status==200){
            let response = xhr.response;
            if(response.indexOf("Email and message are required!") != -1 || response.indexOf("Enter a validate email") != -1 || response.indexOf("Sorry you email field") != -1){
                span.style.color = "red";
            }
            else{
                form.reset();
                setTimeout(()=>{
                    span.style.display = "none";
                },3000)
            }
            span.innerText = response;
        }
    }
    formData = new FormData(form);
    xhr.send(formData);
}