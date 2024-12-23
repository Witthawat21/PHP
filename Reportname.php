<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XReportName</title>
</head>
<body>
    <h1>Report Name</h1>
    <form method="post">
        <label for="filename">File Name:</label>
        <input type="text" name="filename" required><br><br>
        <button type="submit" name="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $filename = $_POST['filename'];  // รับชื่อไฟล์ที่กรอกมา
        
        // ตรวจสอบว่าไฟล์มีอยู่หรือไม่
        if (file_exists($filename)) {
            $fileContent = file($filename);  // อ่านเนื้อหาของไฟล์เป็นอาร์เรย์

            foreach($fileContent as $tr_data){
                $colum = 1;  // เริ่มต้นคอลัมน์ที่ 1
                $Report_names = explode(",", $tr_data);  // แยกข้อมูลแต่ละคอลัมน์ในบรรทัด

            
                foreach($Report_names as $value){
                    $value = trim($value);  
                    if($colum == 1){
                        echo $value . "  ";  
                    }
                    else{
                      
                        if($value == "Robert") {
                            echo "Dick" . "<br>";

                        } elseif($value == "Bill") {
                            echo "Willam" . "<br>";

                        } elseif($value == "James") {
                            echo "Test" . "<br>";

                        } elseif($value == "Margaret") {
                            echo "Test" . "<br>";

                        } elseif($value == "Ed") {
                            echo "Test" . "<br>";

                        } elseif($value == "Sarah") {
                            echo "Test" . "<br>";

                        } elseif($value == "Andy") {
                            echo "Test" . "<br>";

                        } elseif($value == "Anthony") {
                            echo "Test" . "<br>";

                        } else {
                            echo "Test". "<br>";  // แสดงชื่อเล่นอื่นๆ
                        }
                    }
                    $colum++;  // เพิ่มค่า column สำหรับการตรวจสอบคอลัมน์ถัดไป
                }
            }
        } else {
            echo "<p>File not found. Please check the file name.</p>";
        }
    }
    ?>
</body>
</html>
