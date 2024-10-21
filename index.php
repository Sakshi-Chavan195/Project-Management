 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Project Management System</title>

    <!-- Link to CSS for styling -->
    <link rel="stylesheet" href="style.css">
    
    <!-- Google Fonts for better typography -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
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

    <header class="hero">
        <h1>Manage Projects Efficiently</h1>
        <p>Optimize resources, track tasks, and ensure project success.</p>
        <button class="cta-button">Get Started</button>
    </header>

<?php
include("connect.php");

$query="select * from employes";
$data=mysqli_query($con,$query);
$total=mysqli_num_rows($data);

if($total!=0);
?>


    <main>
        <!-- Employees Section -->
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
        <td>".$result['roll']."</td>
        
        </tr>
    ";
    }
}

?>
                   
                </tbody>
            </table>
        </section>




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
                </tbody>
            </table>
        </section>

        <!-- Tasks Section -->
        <section id="task-section" class="section">
            <h2>Tasks</h2>
            <table id="tasks-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Task Name</th>
                        <th>Assigned Project</th>
                        <th>Assigned Employee</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Dynamically added rows -->
                </tbody>
            </table>
        </section>

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
                    <!-- Dynamically added rows -->
                </tbody>
            </table>
        </section>
    </main>

    <footer>
        <p>IT Project Management System © 2024</p>
    </footer>

    <script src="app.js"></script>
</body>
</html>
