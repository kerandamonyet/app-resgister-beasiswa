function validateEmail() {
    var emailInput = document.getElementById("email").value;
    var emailPattern = /^[A-Za-z0-9._%+-]+@uniku\.ac\.id$/;
    
    if (!emailPattern.test(emailInput)) {
        alert("Masukkan email dengan domain @uniku.ac.id");
        return false;
    }
    return true;
}

function tampil() {
    semesterSelected = document.formBeasiswa.semester.value;
    
    const rowBeasiswa = document.getElementById('rowBeasiswa');
    const rowBerkas = document.getElementById('rowBerkas');
    const errorMessage = document.getElementById('errorMessage');
    const btnSubmit = document.getElementById('btnSubmit');
    const btnReset = document.getElementById('btnReset');

    switch(semesterSelected) {
        case "1": 
        ipkValue = 2.31;
        break;
        case "2": 
        ipkValue = 3.21;
        break;
        case "3": 
        ipkValue = 2.31;
        break;
        case "4": 
        ipkValue = 3.21;
        break;
        case "5": 
        ipkValue = 2.31;
        break;
        case "6": 
        ipkValue = 3.21;
        break;
        case "7": 
        ipkValue = 2.31;
        break;
        case "8": 
        ipkValue = 3.21;
        break;
        default:
        ipkValue = "";
        break;
    }

    document.formBeasiswa.nilai_ipk.value = ipkValue;

    if (ipkValue >= 3.00 ) {

        rowBeasiswa.style.display = 'table-row';
        rowBerkas.style.display = 'table-row';
        errorMessage.style.display = 'none';
        btnSubmit.disabled = false;
        btnReset.disabled = false;
        
    }  else {

        rowBeasiswa.style.display = 'none';
        rowBerkas.style.display = 'none';
        errorMessage.style.display = 'block';
        btnSubmit.disabled = true;
        btnReset.disabled = true;
       
    } 
}

