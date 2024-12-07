document.addEventListener("loginform",
    function(ngjarja){
        const validate =(ngjarja) =>{
            const Email = document.getElementById("userid");
            const Password=document.getElementById("passid");
            if(Email.value === ""){
                alert("Ju lutem shkruani email-in");
                Email.focus();
                return false;
    
            }
            if(Password.value ===""){
                alert("Ju lutem shkruani passwor-in");
                Password.focus();
                return false;
            }
        
    
        }
        if(!EmailValid(Email.value)){
            alert("Ju lutem shkruani emailin valid");
            Email.focus();
            return false;
        }
        return true;
    
    const EmailValid=(Email) =>{
        const emailRegex=/^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.]).([A-Za-z]{2-4})$/;
        return emailRegex.test(Email.toLowerCase());
    }
    BtnSubmit.addEventListener('click',validate);
    });