<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css_styles/home_page.css">
    <script src="../js/jquery-3.6.0.min.js"></script>

    <style>
        * {
            margin: 0;
            margin-left: 5px;
            margin-right: 5px;
            padding: 0;
        }

        .logo {
            /* position: static;
            top: 0; */
            width: 100%;
            /* background-color: rgb(15, 13, 10); */
            text-align: center;
            justify-content: center;
            height: 70px;
            overflow: hidden;
        }

        .logo img {
            align-items: center;
            margin-top: 15px;
            margin-bottom: 25px;
            height: 70%;
        }

        .background {
            background: rgba(0, 0, 0, .7) url('../images/sign_back.jpg');
            /* background-size: cover; */
            height: 120vh;
            max-width: 1490px;
            background-blend-mode: darken;
        }
    </style>
    <script>
         function init()
        {
            nam = document.getElementById('phone');
            pass = document.getElementById('password');
            cpass = document.getElementById('cpass');
            err1 = document.getElementById('err1');
            err2 = document.getElementById('err2');
            err3 = document.getElementById('err3');

            console.log(nam+" : : "+err);
        }

        function validation() {
            var phn = nam.value;
            var pas = pass.value;
            var cpas = cpass.value;
            if (phn.length == 0)
            {
                err3.innerHTML = "Plz enter your mobile no";
                err3.style.color = "red";
            }
            else if (isNaN(phn))
            {
                err3.innerHTML = "Plz enter only numeric digit";
                err3.style.color = "red";
            }

            else if (phn.length<10 || phn.length>10) {
                err3.innerHTML = "Plz enter 10 digit mobile no";
                err3.style.color = "red";
            }
            else
            {
                err3.innerHTML = "";
            } 
            if (cpas.length == 0)
            {
                err4.innerHTML = "Plz re-enter password";
                err4.style.color = "red";
            }

            if (pas.length == 0)
            {
                err2.innerHTML = "plz enter your password";
                err2.style.color = "red";
            }
            else if (pas.length<5 && pas.length>0) {
                err2.innerHTML = "plz enter password in 5-8 digit";
                err2.style.color = "red";
            }
            else
            {
                err2.innerHTML = "";
            }

            if (nm=="" || pas=="") {
                alert("enter your details");
            }
        }
        function checkpass() {
            if (cpass.value != pass.value)
            {
                err4.innerHTML = "Password didn't match...";
                err4.style.color = "red";
                err4.innerHTML = "Password didn't match...";
                err4.style.color = "red";
            }
            else
            {
                err4.innerHTML = "";
            }
        }
    </script>
</head>

<body onload="init()">
    <section class="background">
        <div class="logo">
            <img src="../images/logo.png" alt="news.net">
        </div>
        <section class="back" id="login">
            <center>
                <p style="margin-top: 20px;">WELCOME</p><br>
                <p>LOG IN YOUR ACCOUNT</p>
                <section class="sub_back">
                    <div>
                        <form action="register.php" method="post">
                            <table class="tab">
                                <tr hidden>
                                    <td><input type="text" id="pap" name="pap" value="forgot0" readonly></td>
                                </tr>
                                <tr>
                                    <td><label for="phone">Phone No.</label>
                                    </td>
                                    <td> : </td>
                                    <td><input type="text" placeholder="Enter your Phone No" name="phone" id="phone"
                                            onblur="validation()" onkeyup="validation()"></td>
                                <tr>
                                    <td colspan="3"><span id="err3" style="font-size: 10px;"></span></td>
                                </tr>
                                </tr>
                                <tr>
                                    <td><label for="password">Password</label></td>
                                    <td> : </td>
                                    <td><input type="password" placeholder="Enter New Password" name="password"
                                            id="password" onkeyup="validation()"></td>
                                <tr>
                                    <td colspan="3"><span id="err2" style="font-size: 10px;"></span></td>
                                </tr>
                                </tr>
                                <tr>
                                    <td><label for="cpassword">Confirm Password</label></td>
                                    <td> : </td>
                                    <td><input type="password" placeholder="Confirm your Password" name="cpass"
                                            id="cpass" onkeyup="checkpass()"></td>
                                <tr>
                                    <td colspan="3"><span id="err4" style="font-size: 10px;"></span></td>
                                </tr>
                                </tr>
                            </table>
                            <input type="Submit" value="Log In" id="submit" onclick="validation()">
                        </form>
                    </div>
                </section>
            </center>
        </section>
        <!-- </div> -->
    </section>
</body>
</html>