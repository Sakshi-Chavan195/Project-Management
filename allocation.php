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
 

$query4="select * from allocations";
$data4=mysqli_query($con,$query4);
$total4=mysqli_num_rows($data4);

if($total4!=0);
?>

  <!-- Allocations Section -->
  <section id="allocation-section" class="section">
    <h2>Allocations</h2>
    <table id="allocations-table">
        <thead>
            <tr>
                <th>Employee ID</th>
                <th>Task ID</th>
                <th>Hours</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php

while($result4=mysqli_fetch_assoc($data4)){
echo "<tr>
<td>".$result4['employee_id']."</td>
<td>".$result4['task_id']."</td>
<td>".$result4['hours']."</td>

 </tr>
";
}
?> 


</body>
</html>