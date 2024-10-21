<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="logo">Project Management</div>
        <ul class="nav-links">
        <li><a href="Employee.php">Employees</a></li>
            <li><a href="Project.php">Projects</a></li>
            <li><a href="Task.php">Tasks</a></li>
            <li><a href="allocation.php">Allocations</a></li>
        </ul>
    </nav>

    <?php
include("connect.php");
 

$query3="select * from tasks";
$data3=mysqli_query($con,$query3);
$total3=mysqli_num_rows($data3);

if($total3!=0);
?>

 <!-- Tasks Section -->
 <section id="task-section" class="section">
    <h2>Tasks</h2>
    <table id="tasks-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Task Name</th>
                <th>Assigned Project Id</th>
                <th>Assigned Employee ID</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
<?php

while($result3=mysqli_fetch_assoc($data3)){
echo "<tr>
<td>".$result3['task_id']."</td>
<td>".$result3['task_name']."</td>
<td>".$result3['project_id']."</td>
<td>".$result3['employee_id']."</td>
 </tr>
";
}
?> 


    
</body>
</html>