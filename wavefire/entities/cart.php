<?php

session_start();

function getAllStudents()
{
    return isset($_SESSION['students']) ? $_SESSION['students'] :array();
}

function getStudent($student_id)
{
    $students = getAllStudents();
    
    foreach ($students as $item)
    {
        if($item['pro_id'] == $student_id){
            return $item;
        }
    }
    return array();
}
function deleteall()
{
    $students = getAllStudents();
    unset($students);
    $_SESSION['students'] = $students;

    return $students;

}
function total()
{
   
    $students = getAllStudents();
    
    foreach ($students as $item)
    {
       $tong= $item['pro_gia'] +$item['Soluong'];
            return $tong;
        
    }
    return array();

}
function deleteStudent($student_id)
{
    $students = getAllStudents();

    foreach($students as $key => $item)
    {
        if($item['pro_id'] == $student_id){
            unset($students[$key]);
        }
    }

    $_SESSION['students'] = $students;

    return $students;
}

function updateStudent($student_id, $student_name, $student_email,$img,$Soluong=1)
{
    $students = getAllStudents();
     
    $new_student = array(
        'pro_id' => $student_id,
        'pro_name' => $student_name,
        'pro_gia' => $student_email,
       'IMG'=> $img,
       'Soluong' =>$Soluong,
    );

    $is_update_action = false;
    foreach ($students as $key => $item)
    {
        if($item['pro_id'] == $student_id){
        


         
              
           // $students[$key] = $new_student;
           $students[$key]   =   $new_student = array(
                'pro_id' => $student_id,
                'pro_name' => $student_name,
                'pro_gia' => $student_email,
               'IMG'=> $img,

               
               'Soluong' =>$Soluong+=$Soluong,
            );
            $is_update_action = true;
         
           
        }
    }

    if(!$is_update_action){
        $students[] = $new_student;
    }

    $_SESSION['students'] = $students;

    return $students;
}

?>