<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form 1</title>
</head>

<body>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "form1");
    if (isset($_POST['dangky'])) {
        $hoten = "";
        $ngaysinh = "";
        $gioitinh = "";
        $quequan = "";
        $sothich1 = "";
        $sothich2 = "";
        $sothich3 = "";
        $sothich = "";
        $khunggio = "";


        $hoten = $_POST['hoten'];
        $ngaysinh = $_POST['ngaysinh'];
        if (isset($_POST['gioitinh'])) {
            $gioitinh = $_POST['gioitinh'];
        }
        $quequan = $_POST['quequan'];
        if (isset($_POST['sothich1'])) {
            $sothich1 = $_POST['sothich1'];
        }
        if (isset($_POST['sothich2'])) {
            $sothich2 = $_POST['sothich2'];
        }
        if (isset($_POST['sothich3'])) {
            $sothich3 = $_POST['sothich3'];
        }
        $sothich = $sothich1 . " " . $sothich2 . " " . $sothich3;
        $khunggio = $_POST['khunggio'];
        echo $hoten."/".$ngaysinh."/".$gioitinh."/".$quequan."/".$sothich."/".$khunggio;
        $sql = "INSERT INTO form1(hovaten, ngaysinh, gioitinh, quequan, sothich, khunggio) VALUES ('$hoten','$ngaysinh','$gioitinh','$quequan','$sothich','$khunggio')";
        $result = mysqli_query($conn,$sql);
    }
    ?>
    <h1 style="text-align:center;">ĐĂNG KÝ THÀNH VIÊN</h1>
    <form action="" method="POST">
        <table border="1" style="margin-left: 600px;">
            <tr>
                <td class="td">Họ và tên</td>
                <td class="input"> <input type="text" name="hoten" style="margin-left: 10px;"> </td>


            </tr>
            <tr>
                <td class="td">Ngày sinh</td>
                <td class="input"> <input type="text" name="ngaysinh" style="margin-left: 10px;"> </td>

            </tr>
            <tr>
                <td class="td">Giới tính</td>
                <td class="input">
                    <input type="radio" name="gioitinh" value="nam" style="margin-left: 10px;">nam
                    <input type="radio" name="gioitinh" value="nu">Nữ
                    <input type="radio" name="gioitinh" value="koxacdinh">Không xác định
                </td>

            </tr>
            <tr>
                <td class="td" id="td1">Quê quán</td>
                <td class="input"> <textarea name="quequan" id="1" cols="40" rows="5" style="margin-left: 10px;"></textarea> </td>

            </tr>
            <tr>
                <td class="td">Sở thích</td>
                <td class="input">
                    <input type="checkbox" name="sothich1" value="thethao" style="margin-left: 10px;">Thể thao <br>
                    <input type="checkbox" name="sothich2" value="amnhac" style="margin-left: 10px;">Âm nhạc <br>
                    <input type="checkbox" name="sothich3" value="xemphim" style="margin-left: 10px;">Xem Phim <br>
                </td>
            </tr>
            <tr>
                <td class="td">Khung giờ</td>
                <td class="input">
                    <select name="khunggio" style="margin-left: 10px;">
                        <option value="sang">Sáng</option>
                        <option value="chieu">Chiều</option>
                        <option value="toi">Tối</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="td" colspan="2"><input type="submit" name="dangky" value="Đăng ký"></td>
            </tr>


        </table>
    </form>
    <style>
        .td {
            width: 100px;
            text-align: center;
            height: 30px;
        }

        #td1 {
            height: 100px;
        }

        .input {
            width: 400px;
        }
    </style>

</body>

</html>