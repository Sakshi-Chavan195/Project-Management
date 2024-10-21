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
            <li><a href="#employee-section">Employees</a></li>
            <li><a href="#project-section">Projects</a></li>
            <li><a href="#task-section">Tasks</a></li>
            <li><a href="#allocation-section">Allocations</a></li>
        </ul>
    </nav>

    <?php
    include("connect.php");
    
    $query="select * from employes";
    $data=mysqli_query($con,$query);
    $total=mysqli_num_rows($data);
    
    if($total!=0);
    ?>


    <section id="employee-section" class="section">
        <h2>Employees</h2>
        <table id="employees-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody> 

    <?php
    
    while($result=mysqli_fetch_assoc($data)){
        echo "<tr>
        <td>".$result['emp_id']."</td>
        <td>".$result['name']."</td>
        <td>".$result['role']."</td>
        
        </tr>
    ";
    }
?>



</body>
</html>