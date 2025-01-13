<?php


$file = 'score.txt';

// ตรวจสอบว่าไฟล์มีอยู่หรือไม่
if (!file_exists($file)) {
    echo "ไม่พบไฟล์ score.txt!";
    exit;
}

// อ่านข้อมูลจากไฟล์
$lines = file($file, FILE_IGNORE_NEW_LINES);

// แสดงผลรายงาน
echo "<h2>ผลลัพ์จากการคำนวณเกรด</h2>";
echo "<table border='1'>";
echo "<tr><th>นักศึกษา</th><th>ทดสอบย่อย</th><th>สอบกลางภาค</th><th>สอบปลายภาค</th><th>รวม 100 คะแนน</th><th>เกรด</th></tr>";

// วนลูปแต่ละบรรทัดในไฟล์
foreach ($lines as $line) {
    // แยกข้อมูลในแต่ละบรรทัดโดยใช้เครื่องหมาย ","
    $data = explode(",", $line);

    // ข้ามบรรทัดแรกที่เป็นหัวข้อ
    if (count($data) !== 4) {
        continue;
    }

    $name = $data[0];
    $test1 = (int)$data[1]; // คะแนนทดสอบย่อย
    $test2 = (int)$data[2]; // คะแนนสอบกลางภาค
    $test3 = (int)$data[3]; // คะแนนสอบปลายภาค

    // คำนวณคะแนนรวม
    $total_score = $test1 + $test2 + $test3;

    // คำนวณเกรด
    if ($total_score >= 80) {
        $grade = 'A';
    } elseif ($total_score >= 70) {
        $grade = 'B';
    } elseif ($total_score >= 60) {
        $grade = 'C';
    } elseif ($total_score >= 50) {
        $grade = 'D';
    } else {
        $grade = 'F';
    }

    // แสดงผลข้อมูลนักเรียน
    echo "<tr>
            <td>$name</td>
            <td>$test1</td>
            <td>$test2</td>
            <td>$test3</td>
            <td>$total_score</td>
            <td>$grade</td>
          </tr>";
}

echo "</table>";

?>
