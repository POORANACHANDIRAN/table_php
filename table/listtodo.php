<html lang="en">
<head>
    
    <title>Dashboard-List</title>
    <!-- <link rel="stylesheet" href="list.css"> -->
    <link rel="stylesheet" type="text/css" media="screen" href="list.php">
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
                <h3 id="name">Chandru</h3>
                <h5 id="position">Founder</h5>
            </div>
        </div>
        <h2 id="seperate">Task List</h2>
        <div class="taskview">
            

            <table>
                <tr class="row">
                    <th>No.</th>
                    <th>Name</th>
                    <th>Password</th>
                    <th>Status</th>
                    <th>Action</th>
                    
                    <!-- <th>Change Status</th> -->
                    <!-- <th>Edit</th>
                    <th>Delete</th> -->
                </tr>
                <tr>
                    <!-- <td>1.</td> -->
                    <!-- <td>Login Form</td>
                    <td>Html/Css</td>
                    <td>Low</td>
                    <td>Pending</td> -->
                    <!-- <td><button>Change Status</button></td> -->
                    <!-- <td>Update</td>
                    <td>Remove</td> -->
                </tr>
                <tr>
                    <!-- <td>2.</td> -->
                    <!-- <td>SignUpForm</td>
                    <td>Html/Css</td>
                    <td>Low</td>
                    <td>Pending</td> -->
                    <!-- <td><button>Change Status</button></td> -->
                    <!-- <td>Update</td>
                    <td>Remove</td> -->
                </tr>
                <tr>
                    <!-- <td>3.</td> -->
                    <!-- <td>App Dev</td>
                    <td>React Js</td>
                    <td>Medium</td>
                    <td>Completed</td> -->
                    <!-- <td><button>Change Status</button></td> -->
                    <!-- <td>Update</td>
                    <td>Remove</td> -->
                </tr>
                <tr>
                    <!-- <td>4.</td> -->
                    <!-- <td>Backend</td>
                    <td>Node Js</td>
                    <td>Hign</td>
                    <td>On Going</td> -->
                    <!-- <td><button>Change Status</button></td> -->
                    <!-- <td>Update</td>
                    <td>Remove</td> -->
                </tr>
                <?php require_once "dblist.php" ?>
            </table>
            <div class="page">
                <a href="" class="nextpage1">&laquo;</a>
                <a href="" class="nextpage active">1</a>
                <a href="" class="nextpage">2</a>
                <a href="" class="nextpage">3</a>
                <a href="" class="nextpage">4</a>
                <a href="" class="nextpage1">&raquo;</a>
            </div>
        </div>
        

        
    </section>
    <a href="addtodo.php" class="add">Add</a>
</body>
</html>