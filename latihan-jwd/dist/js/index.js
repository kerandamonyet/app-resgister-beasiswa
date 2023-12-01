function validateEmail() {
    var emailInput = document.getElementById("email").value;
    var emailPattern = /^[A-Za-z0-9._%+-]+@uniku\.ac\.id$/;
    
    if (!emailPattern.test(emailInput)) {
        alert("Masukkan email dengan domain @uniku.ac.id");
        return false;
    }
    return true;
}