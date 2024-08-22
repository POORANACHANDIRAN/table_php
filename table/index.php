<html lang="en">
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" media="screen" href="style.php">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Arsenal+SC:ital,wght@0,400;0,700;1,400;1,700&family=Zilla+Slab:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <section class="dashboard">
        <div class="subparent">
            <img src="logo.jpg" alt="" class="img">
            <h1 class="tit">HYPER</h1>
        </div>
        
        <div class="sp1">
            <h3 id="topic">Navigation</h3>
            <span id="c1">
                <i class="fa-solid fa-house"></i>
                <h4><a href="index.php" id="dash">Dashboards</a></h4>
            </span>
            <span id="c1">
                <i class="fa-solid fa-table"></i>
                <h4><a href="addtodo.php" id="dash">Add Task</a></h4>
            </span>
            <span id="c1">
                <i class="fa-solid fa-list"></i>
                <h4><a href="listtodo.php" id="dash">View Task</a></h4>
            </span>
            <span id="c1">
                <i class="fa-solid fa-list"></i>
                <h4><a href="employee_addtodo.php" id="dash">Todo</a></h4>
            </span>
            <span id="c1">
                <i class="fa-solid fa-list"></i>
                <h4><a href="employee_listtodo.php" id="dash">Employee</a></h4>
            </span>


        </div>



        
    </section>

    <section class="table">
        <div class="header">
            <div class="sub">
                <div class="bar">
                    <i class="fa-solid fa-bars"></i>
                
                </div>
                <div class="inp">
                    <input type="text" placeholder="Search" class="in">
                </div>
                <div class="but">
                    <button class="search">Search</button>
                </div>
                <div class="bar2">
                    <i class="fa-regular fa-bell"></i>
                    <i class="fa-solid fa-border-all"></i>
                    <i class="fa-solid fa-gear"></i>
                    <i class="fa-solid fa-moon"></i>
                    <i class="fa-solid fa-expand"></i>
                </div>
            </div>
            <div class="profile">
                <img src="avatar-1.jpg" alt="" id="pic">
                <h3 id="name">Chandru </h3>
                <h5 id="position">Founder</h5>
            </div>
        </div>
        <h2 id="seperate">Add Task</h2>
        <div class="content">
            
            <div class="totalbox bdr">
                <h2 id="boxname">Task</h2>
                <p id="count">10</p>
            </div>
            <div class="totalbox bdr">
                <h2 id="boxname">Active Task</h2>
                <p id="count">10</p>
            </div>
            <div class="totalbox bdr">
                <h2 id="boxname">In Task</h2>
                <p id="count">10</p>
            </div>
            <div class="totalbox bdr">
                <h2 id="boxname">Completed Task</h2>
                <p id="count">10</p>
            </div>
        </div>
    </section>
</body>
</html>