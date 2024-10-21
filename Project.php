<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
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
     
    
$query2="select * from project1";
$data2=mysqli_query($con,$query2);
$total2=mysqli_num_rows($data2);

if($total2!=0);
    ?>

        <!-- Projects Section -->
        <section id="project-section" class="section">
            <h2>Projects</h2>
            <table id="projects-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Project Name</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Dynamically added rows -->
                    <?php
    
    while($result2=mysqli_fetch_assoc($data2)){
        echo "<tr>
        <td>".$result2['project_id']."</td>
        <td>".$result2['project_name']."</td>
        <td>".$result2['status']."</td>
         </tr>
    ";
    }
    ?> 

    
</body>
</html>