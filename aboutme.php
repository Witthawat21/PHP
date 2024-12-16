<?php
// กำหนดตัวแปร PHP
$name = "วิธวัธ กระจ่างวรรณ์";
$student_id = "6606021610184";
$phone_number = "0929211857";
$university = "มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ";
$faculty = "สาขา IT";
$hobbies = "เล่นเกม, ฟังเพลง";
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <link rel="stylesheet" href="sytle.css">
</head>
<body>

    <nav class="navbar">
        <ul class="navbar-menu">
            <li class="navbar-item"><a href="#" class="navbar-link">Home</a></li>
            <li class="navbar-item"><a href="#about-me" class="navbar-link">About Me</a></li>
            <li class="navbar-item"><a href="#contact" class="navbar-link">Contact</a></li>
        </ul>
    </nav>

    <section class="about-me">
        <div class="container">
            <h1 class="heading">About Me</h1>
            <p class="intro">ชื่อ-นามสกุล: <?php echo $name; ?> รหัสนักศึกษา <?php echo $student_id; ?></p>
            
            <h2 class="subheading">ประวัติการศึกษา</h2>
            <p class="education">กำลังศึกษาอยู่ที่ <?php echo $university; ?> สาขา <?php echo $faculty; ?></p>
            
            <h2 class="subheading">ความสนใจและงานอดิเรก</h2>
            <p class="hobbies"><?php echo $hobbies; ?></p>
            
            <h2 class="subheading">Contact</h2>
            <p class="contact">โทรศัพท์: <?php echo $phone_number; ?></p>
        </div>
    </section>
    <img src="owen2.gif" alt="Image">

</body>
</html>
