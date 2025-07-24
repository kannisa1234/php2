<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ตรวจสอบจำนวนวันในแต่ละเดือน</title>
</head>
<body>

<h2>กรอกเดือนที่ท่านต้องการ</h2>
<form method="post">
<label for="month">เดือน:</label>
<input type="text" name="month" id="month" required>
<button type="submit">ตรวจสอบ</button>
</form>

<?php
if (isset($_POST['month'])) {
    $month = $_POST['month'];
    switch ($month) {
        case 'มกราคม':
        case 'มีนาคม':
        case 'พฤษภาคม':
        case 'กรกฎาคม':
        case 'สิงหาคม':
        case 'ตุลาคม':
        case 'ธันวาคม':
            echo "เดือน $month มี 31 วัน";
            break;
        case 'เมษายน':
        case 'มิถุนายน':
        case 'กันยายน':
        case 'พฤศจิกายน':
            echo "เดือน $month มี 30 วัน";
            break;
        case 'กุมภาพันธ์':
            echo "เดือน $month มี 28 หรือ 29 วัน";
            break;
        default:
            echo "ไม่พบชื่อเดือนที่ระบุ";
    }
}
?>

</body>
</html>
