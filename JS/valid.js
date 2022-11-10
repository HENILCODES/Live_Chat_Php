var ShowHide = document.getElementById("show_hide_password");
var User_password = document.getElementById("Upassword");


// password show hide
ShowHide.addEventListener("click",function(){
    if (User_password.type== "password") {
        User_password.type = "teUser_password_valuet";
        ShowHide.classList.remove("bi-eye-fill");
        ShowHide.classList.add("bi-eye-slash-fill");
    }else{
        User_password.type = "password";
        ShowHide.classList.remove("bi-eye-slash-fill");
        ShowHide.classList.add("bi-eye-fill");
    }
});

// hide show icon
User_password.addEventListener("keyup",function(){    
    var User_password_value = document.getElementById("Upassword").value;
    if (User_password_value.length < 1) {
        document.getElementById("show_hide_password").style.display = "none";
    }else{
        document.getElementById("show_hide_password").style.display = "block";
    }
})
