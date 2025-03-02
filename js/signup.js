const form = document.querySelector(".signup form"),
continueBtn = form.querySelector(".button input"),
errorText = form.querySelector(".error-text");

form.onsubmit = (e) => {
    e.preventDefault();
};

continueBtn.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "./php/signup.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response.trim();  // Trim to remove unwanted spaces
                console.log("Response from PHP:", data);  // Debugging purpose
                
                if (data === "success") {
                    window.location.href = "./users.php";  // Ensure correct redirection
                } else {
                    errorText.style.display = "block";  // Fix incorrect style access
                    errorText.textContent = data;
                }
            }
        }
    };

    let formData = new FormData(form);
    xhr.send(formData);
};
