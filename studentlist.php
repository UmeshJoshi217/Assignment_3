<?php
function displayStudents($students, $label) {
    echo $label . ": " . implode(", ", $students) . "\n";
}

function studentManager() {

    $students = ["Ram", "Sita", "Hari"];
    
    echo str_repeat("=", 50) . "\n";
    echo "STUDENT LIST MANAGER\n";
    echo str_repeat("=", 50) . "\n\n";
    

    displayStudents($students, "Initial students");
    
 
    $students[] = "Gita";
    $students[] = "Laxman";
    displayStudents($students, "After adding");
    

    $removedStudent = array_pop($students);
    displayStudents($students, "After removing last");
    
   
    echo "Total students: " . count($students) . "\n";
    
  
    $searchStudent = "Ram";
    if (in_array($searchStudent, $students)) {
        echo "$searchStudent is in the list\n";
    } else {
        echo "$searchStudent is not in the list\n";
    }
    
    echo str_repeat("=", 50) . "\n";
}

studentManager();
?>
