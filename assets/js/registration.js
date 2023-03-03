// Alert Box Handler
const alert = (type, msg) => {
  $(".notification").html(`<div class="${type}" role="alert">
    ${msg}
</div>`);
};

$(".show_password").click((e) => {
  var passType = $("#password").attr("type");
  if (passType === "text") {
    $("#password").attr("type", "password");
    $(".show_password").removeClass("fa-eye-slash");
    $(".show_password").addClass("fa-eye");
  } else {
    $("#password").attr("type", "text");
    $(".show_password").removeClass("fa-eye");
    $(".show_password").addClass("fa-eye-slash");
  }
});

$("#signinBtn").click((e) => {
  let email = $("#email").val(),
    pass = $("#password").val();

  if (!$("#signinBtn").hasClass("disable")) {
    $.ajax({
      url: "./services/_login.php",
      method: "POST",
      type: "json",
      data: {
        loginUser: "loginUser",
        email: email,
        pass: pass,
      },
      success: (data) => {
        window.location.replace("./index.php");
      },
      error: (data) => {
        if (data.statusText === "User Not Found") alert("danger", "User Not Found");
        else alert("danger", "Error! Try Again Later.");
        // $("#user_submit_btn").html(`Login`);
        // btn.attr("disabled", false);
      },
    });
  } else {
    $("#nameField").css("max-height", "0px");
    $("#title").html("Sign In");
    $("#signupBtn").addClass("disable");
    $("#signinBtn").removeClass("disable");
  }
});
$("#signupBtn").click((e) => {
  alert(" ", " ");
  let username = $("#username").val(),
    email = $("#email").val(),
    pass = $("#password").val();

  if (!$("#signupBtn").hasClass("disable")) {
    if (username === "" || email === "" || pass === "") {
      alert("danger", "Input fields can not be empty");
    } else {
      $.ajax({
        url: "./services/_signup.php",
        method: "POST",
        type: "json",
        data: {
          newUser: "newUser",
          username: username,
          email: email,
          pass: pass,
        },
        success: (data) => {
          if (data === "200")
          {
            alert("success", "Registration Successful. Please log in");
            $("#nameField").css("max-height", "0px");
            $("#title").html("Sign In");
            $("#signupBtn").css("display","none");
          }
        },
        error: (data) => {
          if(data.statusText === "Email Exists") alert("danger", "Email Already Exists.");
          else if(data.statusText === "Username Exists") alert("danger", "Username Already Exists.");
          else if (data.statusText === "Not Acceptable Password.") alert("danger", "Invalid character used in password.");
          else alert("danger", "Error! Try Again Later.");
          // $("#user_submit_btn").html(`Login`);
          // btn.attr("disabled", false);
        },
      });
    }
  } else {
    $("#nameField").css("max-height", "60px");
    $("#title").html("Sign Up");
    $("#signupBtn").removeClass("disable");
    $("#signinBtn").addClass("disable");
  }
});
