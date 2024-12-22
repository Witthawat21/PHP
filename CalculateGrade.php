<?php
// ฟังก์ชันสำหรับคำนวณเกรด
function calculateGrade($midterm, $project, $final) {
    $total = $midterm + $project + $final;

    if ($total >= 80 && $total <= 100) {
        return "A";
    } elseif ($total >= 75 && $total < 80) {
        return "B+";
    } elseif ($total >= 70 && $total < 75) {
        return "B";
    } elseif ($total >= 65 && $total < 70) {
        return "C+";
    } elseif ($total >= 60 && $total < 65) {
        return "C";
    } elseif ($total >= 55 && $total < 60) {
        return "D+";
    } elseif ($total >= 50 && $total < 55) {
        return "D";
    } else {
        return "F";
    }
}

// รับค่าคะแนนจากแบบฟอร์ม
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $midterm = isset($_POST['midterm']) ? (int)$_POST['midterm'] : 0;
    $project = isset($_POST['project']) ? (int)$_POST['project'] : 0;
    $final = isset($_POST['final']) ? (int)$_POST['final'] : 0;

    // ตรวจสอบคะแนนให้อยู่ในช่วงที่กำหนด
    if ($midterm < 0 || $midterm > 30 || $project < 0 || $project > 35 || $final < 0 || $final > 35) {
        $grade = "Invalid scores entered!";
    } else {
        $grade = calculateGrade($midterm, $project, $final);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
</head>
<body>
    <h1>Grade Calculator</h1>
    <form method="post">
        <label for="midterm">Midterm (0-30):</label>
        <input type="number" id="midterm" name="midterm" min="0" max="30" required><br><br>
        
        <label for="project">Project (0-35):</label>
        <input type="number" id="project" name="project" min="0" max="35" required><br><br>
        
        <label for="final">Final (0-35):</label>
        <input type="number" id="final" name="final" min="0" max="35" required><br><br>
        
        <button type="submit">Calculate Grade</button>
    </form>

    <?php if (isset($grade)): ?>
        <h2>Your Grade: <?php echo htmlspecialchars($grade); ?></h2>
    <?php endif; ?>
</body>
</html>
