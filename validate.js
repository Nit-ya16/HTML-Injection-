function validateForm() {
    let username = document.getElementById("username").value.trim();
    let email = document.getElementById("email").value.trim();

    if (username === "") {
        alert("Name is required!");
        return false;
    }
    if (email === "" || !email.includes("@")) {
        alert("Valid email is required!");
        return false;
    }
    return true;
}
