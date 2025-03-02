const form = document.querySelector(".typing-area"),
incoming_id = form.querySelector(".incoming_id").value,
inputField = form.querySelector(".input-field"),
sendBtn = form.querySelector("button"),
chatBox = document.querySelector(".chat-box");

form.onubmit = (e) => {
    e.preventDefault();
}

inputField.focus();

inputField.onkeyup = ()=> {
    if(inputField.value != ""){
        sendBtn.classList.add("active")
    }else{
        sendBtn.classList.remove("active");
    }
}

sendBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "./php/insert-chat.php", true);
    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.ststus === 200){
                inputField.value = "";
                scrollTOBottom();
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}

chatBox.onmouseenter = ()=>{
    chatBox.classList.add("active");
}

chatBox.onmouseleave = () => {
    chatBox.classList.remove("active");
}


setInterval(() => {
     let xhr = new XMLHttpRequest();
     xhr.open("POST", "./php/get-chat.php", true);
     xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200) {
                let data = xhr.response;
                chatBox.innerHTML = data;
                if(!chatBox.classList.contains("active")){
                    scrollTOBottom();
                }
            }
        }
     }

   xhr.setRequestHeader("content-type", "application/x-www-form-urlencoded");
   xhr.send("incoming_id="+incoming_id);
}, 500);

function scrollTOBottom() {
    chatBox.scrollTop = chatBox.scrollHeight;
}