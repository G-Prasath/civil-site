
// search-box open close js code
let navbar = document.querySelector(".navbar");
let searchBox = document.querySelector(".search-box .bx-search");
// let searchBoxCancel = document.querySelector(".search-box .bx-x");

// sidebar open close js code
let navLinks = document.querySelector(".nav-links");
let menuOpenBtn = document.querySelector(".navbar .bx-menu");
let menuCloseBtn = document.querySelector(".nav-links .bx-x");
menuOpenBtn.onclick = function() {
navLinks.style.left = "0";
}
menuCloseBtn.onclick = function() {
navLinks.style.left = "-100%";
}

// sidebar submenu open close js code
let htmlcssArrow = document.querySelector(".htmlcss-arrow");
htmlcssArrow.onclick = function() {
 navLinks.classList.toggle("show1");
}
let moreArrow = document.querySelector(".tst-arrow");
moreArrow.onclick = function() {
 navLinks.classList.toggle("show2");
}
let jsArrow = document.querySelector(".js-arrow");
jsArrow.onclick = function() {
 navLinks.classList.toggle("show3");
}



// ======== Side Stick Button ============== 
var mainDiv = document.getElementById('main-button');
mainDiv.addEventListener('click', function(){
    this.children.item(0).classList.toggle('bx-plus');
    this.classList.toggle('open');
});

// =============== Tab-Gallery-Active-Btn ======== 
$('.tab-menu-btn ul li').click(function() {
    var value = $(this).attr('class');
    if (value != "tab-ctive") {
        $('.tab-active').removeClass("tab-active");
        $(this).addClass("tab-active");
    }
});

// =========== Tab- Gallery- Service -change =====
$('.tab-menu-btn ul li').click(function() {
    var txt = $(this).text();
    var Residential = document.getElementById("Residential");
    var Industrial = document.getElementById("Industrial");
    var Commercial = document.getElementById("Commercial");
    var name = [Residential, Industrial, Commercial];
    for(let i=0; i<name.length; i++){
      if($(name[i]).attr("id") == txt){
        $(".service-show").addClass("service-hide");
        $(".service-show").removeClass("service-show");
        $(name[i]).addClass("service-show");
        $(name[i]).removeClass("service-hide");
      }
    }
  });

//   =================== Quote Form Validation ================ 
// $(document).ready(function(){
//     var form = document.querySelector("#enquiry");
//     var name = document.querySelector("#name");
//     var email = document.querySelector("#email");
//     var phone = document.querySelector("#phone");
//     var msg = document.querySelector("#msg");

//     form.addEventListener('submit', (e)=>{
//         e.preventDefault();
//         let res = validateInputs();
//     })

//     function validateInputs(){
//         var nameVal = name.value.trim();
//         var emailVal = email.value.trim();
//         var phoneVal = phone.value.trim();
//         var msgVal = msg.value.trim();

//         if(nameVal === ""){
//             setError(name, "Name Is Required")
//         }
//         else{
//             setSuccess(name);
//             flag = true;
//         }
//         if(emailVal === ""){
//             setError(email, "Email Is Required")
//         }
//         else if(!validateEmail(emailVal)){
//             setError(email, "Enter Valid Email")
//         }
//         else{
//             setSuccess(email)
//         }
//         if(phoneVal === ""){
//             setError(phone, "Phone Number Is Required")
//         }
//         else if(!validatePhone(phoneVal)){
//             setError(phone, "Your Entered in "+phoneVal.length+" Numbers");
//         }
//         else{
//             setSuccess(phone)
//         }
//         if(msgVal === ""){
//             setError(msg, "Enter Message")
//         }
//         else{
//             setSuccess(msg)
//         }
        
//     }

//     function setError(element, message){
//         var inputGroup = element.parentElement;
//         var errorElement = inputGroup.querySelector(".error");
//         var errorinput = inputGroup.querySelector("input");

//         errorElement.innerText = message;
//         errorinput.classList.add('error-element');
//         errorinput.classList.remove('success-element');
//     }
//     function setSuccess(element){
//         var inputGroup = element.parentElement;
//         var errorElement = inputGroup.querySelector('.error');
//         var successElement = inputGroup.querySelector('input');

//         errorElement.innerText = "";
//         successElement.classList.add('success-element');
//         successElement.classList.remove('error-element');
//     }

//     const validateEmail = (email) => {
//         return String(email)
//           .toLowerCase()
//           .match(
//             /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
//           );
//       };

//       const validatePhone = (phone) => {
//         return String(phone)
//           .match(/^\d{10}$/)
//       };
// })


if ($("#enquiry").length) {
    $("#enquiry").validate({
        rules:{
            name:false,
            email:{
                email:true
            },
            phone:{
                number:true,
                minlength: 10,
                maxlength: 10
            },
            msg:false
        },
        messages: {
            name:{
                required: "Enter Your Full Name",
            },
            email:"Please Enter Your Mail",
            phone:"Enter Your correct Mobile Number",
            sub:"Enter Your Subject",
            msg:"This Feild is Required"
          },

        submitHandler: function (form) {
                
            $.ajax({
                type: "POST",
                url: "PHP_Mail/submit.php",
                data: $('#enquiry').serialize(),
                beforeSend: function() {
                   window.location.href = "index.php";
                }
            });
            return false; 
        }

    });
}

// ================ Career Form ==================== 
/*------------------------------------------
        = CAREER FORM SUBMISSION
    -------------------------------------------*/
    if ($("#career-form").length) {
        $("#career-form").validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },

                email: "required",

                phone: "required",
                
                msg: {
                    required: true
                },
                resume: "required"

            },

            messages: {
                name: "Please enter your name",
                email: "Please enter your email address",
                phone: "Please enter your phone number",
                msg: "Please select your contact subject",
                resume: "Please Choose Your Resume"
            },
            submitHandler: function(form) {
                form.submit();
              }
        });
    }


    $(document).ready(function () {
        $("#role").change(function () {
        var value = $("#role option:selected").text();
        if(value == "Other"){
            $("#others").css("display","block");
        }
        else{
        $("#others").css("display","none");
        }
        });
    });




// ============ contact Form Enquiry ================== 
if ($("#contact-form").length) {
    $("#contact-form").validate({
        rules:{
            name:false,
            email:{
                email:true
            },
            phone:{
                number:true,
                minlength: 10,
                maxlength: 10
            },
            msg:false
        },
        messages: {
            name:{
                required: "Enter Your Full Name",
            },
            email:"Please Enter Your Mail",
            phone:"Enter Your correct Mobile Number",
            sub:"Enter Your Subject",
            msg:"This Feild is Required"
          },

        submitHandler: function (form) {
                
            $.ajax({
                type: "POST",
                url: "PHP_Mail/submit.php",
                data: $('#contact-form').serialize(),
                beforeSend: function() {
                   window.location.href = "index.php";
                }
            });
            return false; 
        }

    });
}

// ================== FAQ ================ 
$(document).ready(function() {
    $('.accordion a').click(function(){
      $(this).toggleClass('active');
      $(this).next('.content').slideToggle(400);
     });
  });







