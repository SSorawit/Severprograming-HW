function validateEmail() {
    var email = document.getElementById("emailInput").value;
    var resultElement = document.getElementById("result");
    var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    if (emailPattern.test(email)) {
        resultElement.innerText = "Valid email.";
        resultElement.style.color = "green";
    } else {
        resultElement.innerText = "Invalid email.";
        resultElement.style.color = "red";
    }
}