const formOpenBtn = document.querySelector("#form-open"),
  home = document.querySelector(".home"),
  formContainer = document.querySelector(".form_container"),
  formCloseBtn = document.querySelector(".form_close"),
  registerBtn = document.querySelector("#register"),
  loginBtn = document.querySelector("#login"),
  pwShowHide = document.querySelectorAll(".pw_hide");
  

formOpenBtn.addEventListener("click", () => home.classList.add("show"));
formCloseBtn.addEventListener("click", () => home.classList.remove("show"));

pwShowHide.forEach((icon) => {
  icon.addEventListener("click", () => {
    let getPwInput = icon.parentElement.querySelector("input");
    if (getPwInput.type === "password") {
      getPwInput.type = "text";
      icon.classList.replace("uil-eye-slash", "uil-eye");
    } else {
      getPwInput.type = "password";
      icon.classList.replace("uil-eye", "uil-eye-slash");
    }
  });
});

registerBtn.addEventListener("click", (e) => {
  e.preventDefault();
  formContainer.classList.add("active");
});
loginBtn.addEventListener("click", (e) => {
  e.preventDefault();
  formContainer.classList.remove("active");
});


// validation part

//register part

//passqord and cpassword

  const getPass = document.querySelector('input[name="Password"]');
  const getCpass = document.querySelector('input[name="Cpassword"]');
  const passErr = document.querySelector(".passerr");
  const cpassErr = document.querySelector(".cpasserr");

  const regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

  getPass.addEventListener("blur", () => {
    const getPassValue = getPass.value;
    if (!regex.test(getPassValue)) {
      passErr.innerHTML = "Password format mismatch";
      passErr.style.color = "red";
      passErr.style.fontFamily = "cursive";
      getPass.style.borderColor = "red";
    } else {
      passErr.innerHTML = "";
      getPass.style.borderColor = "";
    }
  });

  getPass.addEventListener("focus", () => {
    passErr.innerHTML = "";
    getPass.style.borderColor = "";
    cpassErr.style.color = "";
  });

  getCpass.addEventListener("blur", () => {
    const getPassValue = getPass.value;
    const getCpassValue = getCpass.value;
    if (getPassValue !== getCpassValue || getCpassValue === "" || getCpassValue === null) {
      cpassErr.innerHTML = "*Password doesn't match";
      cpassErr.style.color = "red";
      cpassErr.style.fontFamily = "cursive";
      getPass.style.borderColor = "red";
      getCpass.style.borderColor = "red";
    } else {
      cpassErr.innerHTML = "";
      getPass.style.borderColor = "";
      getCpass.style.borderColor = "";
    }
  });

  getCpass.addEventListener("focus", () => {
    cpassErr.innerHTML = "";
    getPass.style.borderColor = "";
    getCpass.style.borderColor = "";
    passErr.style.color = "";
  });







//username validation

const userRegex = /^[a-zA-Z0-9]{3,8}$/;

const user = document.getElementById("username"); 
const usererr = document.getElementById("usererr");

user.addEventListener("blur", () => {
  const userValue = user.value;
  if(userValue==="" || userValue==null)
  {
    usererr.innerHTML = "*username can't be empty";
    usererr.style.color = "red";
    usererr.style.fontFamily="cursive";
    user.style.borderColor = "red"; 
    return;
  } 

  
  if (!userRegex.test(userValue)) {
    usererr.innerHTML = "*Username must start with a letter or digit and have a minimum length of 3 and a maximum length of 8.";
    usererr.style.color = "red";
    usererr.style.fontFamily="cursive";
    user.style.borderColor = "red"; 

  } else {
    usererr.innerHTML = ""; 
    user.style.borderColor = ""; 
  }
});

user.addEventListener("focus", () => {
  usererr.innerHTML = ""; 
  user.style.borderColor = "";
});




// //AD to BS
// const bsDateInput = document.getElementById("bsDate");
// const adDateInput = document.getElementById("adDate");

// // Convert BS to AD
// bsDateInput.addEventListener("change", () => {
//   const bsDateValue = bsDateInput.value;
//   if (bsDateValue) {
//     const adDateValue = convertBsToAd(bsDateValue);
//     adDateInput.value = adDateValue;
//   }
// });

// // Convert AD to BS
// adDateInput.addEventListener("change", () => {
//   const adDateValue = adDateInput.value;
//   if (adDateValue) {
//     const bsDateValue = convertAdToBs(adDateValue);
//     bsDateInput.value = bsDateValue;
//   }
// });

// // Conversion functions
// function convertBsToAd(bsDate) {
//   //logic
// }

// function convertAdToBs(adDate) {
//   //logic
// }


//login form
const lemail= document.querySelector("#emaill");
const lpass = document.querySelector('#id');

lemail.addEventListener("blur", function() {
  const vlemail = lemail.value;
  const lemailerr = document.getElementById("lemailerr");
  if(vlemail==="" || vlemail==null){
    lemailerr.innerHTML="*required";
    lemailerr.style.color="red";
    lemail.style.borderColor="red";
    lemailerr.style.fontFamily="cursive";

  }
});
lemail.addEventListener("focus", () => {
  lemailerr.innerHTML = ""; 
  lemail.style.borderColor = "";
});


//to make the submit button enable only after accepting the terms and conditions


document.addEventListener("DOMContentLoaded", function () {
  const acceptCheckbox = document.getElementById("ok");
  const submitButton = document.getElementById("submitButton");

  acceptCheckbox.addEventListener("change", function () {
      submitButton.disabled = !acceptCheckbox.checked;
  });
  // Delay to display login form after 1.1 seconds
  setTimeout(() => {
    home.classList.add("show"); // Display the login form
  }, 1100); 
});












