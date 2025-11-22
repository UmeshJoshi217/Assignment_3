<?php
$students = [
     ['Ram',  '20', 'BCA'],
     ['sita', '19', 'BIT'],
     ['Hari', '21', 'BCA'],

];

foreach ($students as $index => $student) {
    $studentNumber = $index + 1;
    echo "Student $studentNumber: {$student[0]}, Age: {$student[1]}, Faculty: {$student[2]}\n";
}

?>
