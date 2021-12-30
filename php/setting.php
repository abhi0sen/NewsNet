<?php
include('database.php');
session_start();
$name = $_SESSION['paper_name'];
// echo $name;
$res = updateAgencyRecord($name);
$pap_name = $res['paper_name'];
$price = $res['price'];
$phone = $res['contact_no'];
$mail = $res['mail_id'];
// $pap_name = $res[''];
?>
<?php
include('admin_nav.php');
?>
<center>
    <p style="font-size: 40px; padding:20px">Update your Information </p>
<form action="register.php" method="post">
            <table class="tab">
                <tr hidden>
                    <td><input type="text" id="pap" name="pap" value="1.1" readonly></td>
                </tr>
                <tr>
                    <td><label for="paper_name">Paper Name</label></td>
                    <td> : </td>
                    <td><input type="text" id="paper_name" name="paper_name" value="<?php echo $pap_name ?>" onblur="validation()" onkeyup = "validation()" readonly></td>
                    <tr><td colspan="3"><span id="err1" style="font-size: 10px; color:red;">Paper Name can not be Changed</span></td></tr>
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
<br><br>

<?php
include('footer.php')
?>
