function setCss() {
    setTimeout(function () {
        // console.log("this is the first message");
        // document.getElementById("msg").innerHTML = "";

    }, 4000);
}


function validateForm() {
    var i = 1;
    // console.log("hii");
    var residence_name = document.getElementById("residence_name").value;
    // var namevalidate = /^[A-Za-z]+$/;
    var email = document.getElementById("email").value;
    var emailvalidate = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    var phone = document.getElementById("phone").value;
    var phoneNum = /^[0-9]+$/;
    var residence_association_details_form = document.getElementById("residence_association_details_form").checked;


    if (residence_association_details_form == true) {
        residence_association_details_form = 1;
    } else {
        residence_association_details_form = 0;
    }

    if (residence_name == "") {
        document.getElementById("residence_msg").style.display = "block";
        document.getElementById("residence_msg").innerHTML = "Residence Name is required!";

        i = 0;
    }
    if (email == "") {
        document.getElementById("mail_msg").style.display = "block";
        document.getElementById("mail_msg").innerHTML = "Email is required !";
        i = 0;

    }
    if (!email.match(emailvalidate)) {
        document.getElementById("mail_msg").style.display = "block";
        document.getElementById("mail_msg").innerHTML = "Invalid Email format !";
        i = 0;
    }
    if (phone == "") {
        document.getElementById("phone_msg").style.display = "block";
        document.getElementById("phone_msg").innerHTML = "Contact No. is required !";
        i = 0;
    }
    if (!phone.match(phoneNum)) {
        document.getElementById("phone_msg").style.display = "block";
        document.getElementById("phone_msg").innerHTML = "Invalid Phone Number !";
        i = 0;
    }

    if (i === 1) {
        $.ajax({
            url: "contact_details.php",
            method: "POST",
            cache: false,
            data: {
                residence_name: residence_name,
                email: email,
                phone: phone,
                residence_association_details_form: residence_association_details_form
            }, success: function (data) {
                if (data == 1) {
                    $("#form-id").trigger("reset");
                    $("#success_msg").html("Your Application is submitted successfully !");
                    setTimeout(function () {
                        $("#success_msg").empty();
                    }, 3000);
                }
            }
        });
    }

}


function residenceField() {
    var residence_name = document.getElementById("residence_name").value;
    if (residence_name != "") {
        // document.getElementById("residence_msg").innerHTML = "";
        $("#residence_msg").hide();
        return true;
    } else {
        return false;
    }
}

function mailField() {
    var email = document.getElementById("email").value;
    if (email != "") {
        // document.getElementById("residence_msg").innerHTML = "";
        $("#mail_msg").hide();
        return true;
    } else {
        return false;
    }
}

function phoneField() {
    var phone = document.getElementById("phone").value;
    if (phone != "") {
        // document.getElementById("residence_msg").innerHTML = "";
        $("#phone_msg").hide();
        return true;
    } else {
        return false;
    }
}