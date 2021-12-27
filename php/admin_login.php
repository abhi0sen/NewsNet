<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css_styles/home_page.css">
    <script>
        function init()
        {
            nam = document.getElementById('paper_name');
            pass = document.getElementById('pass');
            err1 = document.getElementById('err1');
            err2 = document.getElementById('err2');

            console.log(nam+" : : "+err);
        }

        function validation() {
            var nm = nam.value;
            var pas = pass.value;
            if (nm.length == 0)
            {
                err1.innerHTML = "Plz enter your name";
                err1.style.color = "red";
            }
            else
            {
                err1.innerHTML = "";
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
            // if (nm=="" || pas=="") {
            //     alert("enter your details");
            //     window.location="log_in.html";
            // }
        }
        // function blank() {
        //     if (nm=="" || pas=="") {
        //         document.alert("enter your details");
        //         window.location="log_in.html";
        //     }
        // }

        // $(document).ready(function() {
        //     $("#submit").click(function() {
        //         
        //     });
        // });

    </script>
</head>
<body onload="init()">
    <section class= "back">
        <center>
        <img src="../images/logo.png" alt="logo"><br><br>
        <p>WELCOME</p><br>
        <p>LOG IN YOUR ACCOUNT</p>
        <section class="sub_back">
        <div>
        <form action="logsession.php" method="post">
            <table class="tab">
                <tr hidden><td><input type="text" id="pap" name="pap" value="1" readonly></td></tr>
                <tr>
                    <td><label for="paper_name">Papername</label></td>
                    <td> : </td>
                    <td><input type="text" placeholder="Enter your Papername" name="paper_name" id ="paper_name" onblur="validation()"></td>
                    <tr><td colspan="3"><span id="err1" style="font-size: 10px;"></span></td></tr>
                </tr>
                <tr>
                    <td ><label for="pass">Password</label></td>
                    <td> : </td>
                    <td><input type="password" placeholder="Enter your Password" name="pass" id="pass" onkeyup = "validation()"></td>
                    <tr>
                    <td colspan="3"><span id="err2" style="font-size: 10px;"></span></td></tr>
                </tr>
            </table>
            <input type="Submit" value="Log In" id = "submit" onclick="validation()">
        </form>
    </div>
    </section>
    </center>
    </section>
</body>
</html>