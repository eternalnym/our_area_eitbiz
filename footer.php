<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="footer__Box col-sm-6 col-lg-4">
                <h4 class="footer__Box--title">Our Area</h4>
                <p>A residents association (RA) connects residents of an area into a community to provide a
                    healthy, safe, and caring environment where one is proud to belong.</p>
                <ul class="footer__Box--social">
                    <li><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="footer__Box col-sm-6 col-lg-4">
                <h4 class="footer__Box--title">Help & Contact</h4>
                <ul class="footer__Box--info">
                    <li>
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <address>1234 King Street, Australia</address>
                    </li>
                    <li>
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <span><a href="tel:118004324536">1-1800-432-4536</a></span>
                    </li>
                    <li>
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <span><a href="mailto:RAcare@ourarea.net">RAcare@ourarea.net</a></span>
                    </li>
                </ul>
            </div>
            <div class="footer__Box col-lg-4" id="register">
                <h4 class="footer__Box--title">Register Now</h4>

                <form id="registration_form" action="javascript:;" method="post">
                    <div class="form-group">
                        <input type="text" id="username" onkeydown="usernameField()" class=" form-control" placeholder="Email" />
                        <span class="msg" id="username_msg"></span>
                    </div>
                    <div class="form-group">
                        <input type="password" id="pswd" onkeydown="passField()" class="form-control" placeholder="Password" />
                        <span class="msg" id="pass_msg"></span>
                    </div>
                    <div class="form-group">
                        <button type="submit" id="submit" class="btn btn-secondary w-100">
                            <span>Submit</span>
                        </button>
                    </div>
                    <div class="message_block">
                        <p id="error_msg"></p>
                        <!-- <p id="error_msg1">Email Id already registered</p> -->
                    </div>
                </form>
            </div>
        </div>
        <p class="footer__copyright">Copyright 2021 &copy;. All Rights Reserved</p>
    </div>
</footer>
<!-- End Footer Section -->

</div>
<script type="text/javascript"></script>
<script>
    function usernameField() {
        var username = document.getElementById("username").value;
        if (username != "") {
            $("#username_msg").hide();
            return true;
        } else {
            return false;
        }
    }

    function passField() {
        var pass = document.getElementById("pswd").value;
        if (pass != "") {
            $("#pass_msg").hide();
            return true;
        } else {
            return false;
        }
    }


    $(document).ready(function() {

        var i = 1;

        $("#submit").on("click", function() {

            var username = $("#username").val();
            var emailvalidate = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var pswd = $("#pswd").val();

            if (username === "" || username == null) {
                document.getElementById("username_msg").style.display = "block";
                document.getElementById("username_msg").innerHTML = "Email is required !";
                i = 0;
            }
            if (!username.match(emailvalidate)) {
                document.getElementById("username_msg").style.display = "block";
                document.getElementById("username_msg").innerHTML = "Invalid Email format !";
                i = 0;
            }
            if (pswd === "" || pswd == null) {
                console.log(pswd);
                document.getElementById("pass_msg").style.display = "block";
                document.getElementById("pass_msg").innerHTML = "Password is required !";
                i = 0;
            }
            console.log(username, pswd);
            console.log(i);

            if (i === 1) {

                $.ajax({
                    url: "register.php",
                    method: "POST",
                    cache: false,
                    data: {
                        username: username,
                        pswd: pswd
                    },
                    success: function(data) {
                        if (data == 1) {
                            $("#registration_form").trigger("reset");
                            $("#error_msg").text("Registered Successfully");
                            setTimeout(function() {
                                $("#error_msg").empty();
                            }, 3000);
                        } else {
                            $("#registration_form").trigger("reset");
                            $("#error_msg").text("Email already registered");
                            setTimeout(function() {
                                $("#error_msg").empty();
                            }, 3000);
                        }
                    }
                });
            }
        });
    });
</script>

</body>

</html>