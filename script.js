
const form = document.querySelector("form");
btn = form.querySelector("#btn");
span = form.querySelector("span");

form.onsubmit = (e)=>{
    e.preventDefault();
    span.style.display = "block";
    let xhr = new XMLHttpRequest();
    xhr.open("POST","server.php",true);
    xhr.onload=()=>{
        if(xhr.readyState==4 && xhr.status==200){
            let response = xhr.response;
            console.log(response)
            span.innerText=response;
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}