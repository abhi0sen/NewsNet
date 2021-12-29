<?php
include('database.php');
session_start();
$name = $_SESSION['paper_name'];
// echo "name is : ".$name;
// $con = mysqli_connect('localhost', 'root', '', 'newsnet') or die ("connection failed");
// $article = "select * from newspaper where paper_name = $name";
// $res = mysqli_query($con, $article);
// $arr = mysqli_affected_rows($res);
$res = updateAgencyRecord($name);
$pap_name = $res['paper_name'];
$price = $res['price'];
$phone = $res['contact_no'];
$mail = $res['mail_id'];
// $pap_name = $res[''];
?>

<center>
<form action="register.php" method="post">
            <table class="tab">
                <tr hidden>
                    <td><input type="text" id="pap" name="pap" value="1.1" readonly></td>
                </tr>
                <tr>
                    <td><label for="paper_name">Paper Name</label></td>
                    <td> : </td>
                    <td><input type="text" id="paper_name" name="paper_name" value="<?php echo $pap_name ?>" onblur="validation()" onkeyup = "validation()" readonly></td>
                    <tr><td colspan="3"><span id="err1" style="font-size: 10px;"></span></td></tr>
                </tr>
                <tr>
                    <td><label for="price">Price</label></td>
                    <td> : </td>
                    <td><input type="text" id="price" name="price" value="<?php echo $price ?>"></td>
                </tr>
                <tr>
                    <td><label for="m_id">Mail Id</label></td>
                    <td> : </td>
                    <td><input type="text" id="m_id" name="m_id" value="<?php echo $mail ?>"></td>
                </tr>
                <tr>
                    <td><label for="cont">Contact No</label></td>
                    <td> : </td>
                    <td><input type="text" id="cont" name="cont" value="<?php echo $phone ?>" onkeyup="validation()"></td>
                    <tr><td colspan="3"><span id="err3" style="font-size: 10px;"></span></td></tr>
                </tr>
            </table>
            <input type="Submit" value="Update Record" id = "submit" onclick="validation()">
        </div>
        </form>
</center>
