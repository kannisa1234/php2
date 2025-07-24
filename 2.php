<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ตรวจสอบช่วงอายุ</title>
</head>
<body>

<h2>กรอกอายุของคุณ</h2>
<form method="post">
<label for="age">อายุ:</label>
<input type="number" name="age" id="age" required>
<button type="submit">ตรวจสอบ</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$age = intval($_POST["age"]);

switch (true) {
case ($age >= 60):
echo "<p>คุณอยู่ในวัยสูงอายุ</p>";
break;
case ($age >= 40):
echo "<p>คุณอยู่ในวัยกลางคน</p>";
break;
case ($age >= 20):
echo "<p>คุณอยู่ในวัยผู้ใหญ่</p>";
break;
case ($age >= 12):
echo "<p>คุณอยู่ในวัยรุ่น</p>";
break;
case ($age >= 6):
echo "<p>คุณอยู่ในวัยเด็ก</p>";
break;
case ($age >= 0):
echo "<p>คุณอยู่ในวัยทารก</p>";
break;
default:
echo "<p>กรุณากรอกอายุให้ถูกต้อง</p>";
break;
}
}
?>

</body>
</html>
