<?php include 'adminhead.php'; ?>
<div class="sidebar">
    <div class="logo">
        <img src="./media/PLDT-Smart-logo.png" alt="PLDT Logo" />
    </div>
    <div class="department-name">
        <p>*Dept Name Here*</p>
        <br>
        <div id="txt" class="time"></div>
        <div id="date" class="date"></div>
        <br>
    </div>
    <nav class="menu">
        <a href="#" class="menu-item active" id="dashboard" onclick="loadContent('dashboard'); return false;">
            <img src="./media/home-icon.svg" alt="Dashboard Icon" />
            Dashboard
        </a>
        <a href="#" class="menu-item" id="createEmp" onclick="loadContent('createEmp'); return false;">
            <img src="./media/create-emp.svg" alt="create Icon" />
            Create Employee
        </a>
        <a href="#" class="menu-item" id="updateEmp" onclick="loadContent('updateEmp'); return false;">
            <img src="./media/edit-emp.svg" alt="edit Icon" />
            Update Employee
        </a>
        <a href="#" class="menu-item" id="deleteEmp" onclick="loadContent('deleteEmp'); return false;">
            <img src="./media/del-emp.svg" alt="delete Icon" />
            Delete Employee
        </a>
        <a href="#" class="menu-item" id="createTask" onclick="loadContent('createTask'); return false;">
            <img src="./media/create-task.svg" alt="create task Icon" />
            Create Task
        </a>
        <a href="#" class="menu-item" id="taskStatus" onclick="loadContent('taskStatus'); return false;">
            <img src="./media/task-status.svg" alt="task status Icon" />
            Task Status
        </a>
        <a href="#" class="menu-item" id="deleteTask" onclick="loadContent('deleteTask'); return false;">
            <img src="./media/del-task.svg" alt="del task Icon" />
            Delete Task
        </a>
    </nav>
    <div class="logout">
        <a href="index.php" class="logout-btn">Log Out <span class="arrow">»</span></a>
    </div>
</div>
