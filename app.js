// Wait for the DOM content to be fully loaded
document.addEventListener('DOMContentLoaded', function() {
  // Fetch data when the page loads
  loadEmployees();
  loadProjects();
  loadTasks();
  loadAllocations();
});

// Function to load Employees from the backend
function loadEmployees() {
  fetch('/ProjectManagementSystem/project?type=employees')
      .then(response => response.json())
      .then(data => {
          const employeesTable = document.getElementById('employees-table').getElementsByTagName('tbody')[0];
          employeesTable.innerHTML = '';  // Clear previous data
          data.forEach(employee => {
              const row = employeesTable.insertRow();
              row.innerHTML = `
                  <td>${employee.id}</td>
                  <td>${employee.name}</td>
                  <td>${employee.role}</td>
                  <td><button class="action-btn">Edit</button> <button class="action-btn">Delete</button></td>
              `;
          });
      })
      .catch(error => console.error('Error loading employees:', error));
}

// Function to load Projects from the backend
function loadProjects() {
  fetch('/ProjectManagementSystem/project?type=projects')
      .then(response => response.json())
      .then(data => {
          const projectsTable = document.getElementById('projects-table').getElementsByTagName('tbody')[0];
          projectsTable.innerHTML = '';  // Clear previous data
          data.forEach(project => {
              const row = projectsTable.insertRow();
              row.innerHTML = `
                  <td>${project.id}</td>
                  <td>${project.project_name}</td>
                  <td>${project.status}</td>
                  <td><button class="action-btn">Edit</button> <button class="action-btn">Delete</button></td>
              `;
          });
      })
      .catch(error => console.error('Error loading projects:', error));
}

// Function to load Tasks from the backend
function loadTasks() {
  fetch('/ProjectManagementSystem/project?type=tasks')
      .then(response => response.json())
      .then(data => {
          const tasksTable = document.getElementById('tasks-table').getElementsByTagName('tbody')[0];
          tasksTable.innerHTML = '';  // Clear previous data
          data.forEach(task => {
              const row = tasksTable.insertRow();
              row.innerHTML = `
                  <td>${task.id}</td>
                  <td>${task.task_name}</td>
                  <td>${task.project_id}</td>
                  <td>${task.employee_id}</td>
                  <td><button class="action-btn">Edit</button> <button class="action-btn">Delete</button></td>
              `;
          });
      })
      .catch(error => console.error('Error loading tasks:', error));
}

// Function to load Allocations from the backend
function loadAllocations() {
  fetch('/ProjectManagementSystem/project?type=allocations')
      .then(response => response.json())
      .then(data => {
          const allocationsTable = document.getElementById('allocations-table').getElementsByTagName('tbody')[0];
          allocationsTable.innerHTML = '';  // Clear previous data
          data.forEach(allocation => {
              const row = allocationsTable.insertRow();
              row.innerHTML = `
                  <td>${allocation.employee_id}</td>
                  <td>${allocation.task_id}</td>
                  <td>${allocation.hours}</td>
                  <td><button class="action-btn">Edit</button> <button class="action-btn">Delete</button></td>
              `;
          });
      })
      .catch(error => console.error('Error loading allocations:', error));
}
