<?php header("Content-type: text/css"); ?>
body{
    <!-- display: flex; -->
    margin: 0;
    padding: 0;
    font-family: Zilla Slab;
    
}

.dashboard{
    flex: 1.7;
    background-color: #313a46;
    height: 100vh;
    position: fixed;
    width: 300px;
    
}
.table{
    flex: 9;
    background: #e6e7eafd;
    height: 200vh;

    z-index:-1;
}
.tit{
    display: inline;
    text-align: center;
    
    color: white;
}
.img{
    height: px;
    width: 25px;
    margin-top:10px;
    border-radius: 40%;
}
.subparent{
    margin-left:70px;
    margin-top: 20px;
    
}
#topic{
    color: #6c757d;
    margin-left: 20px;
    margin-top: 30px;
}
#c1{
    display: flex;
    
}
.fa-house ,.fa-table ,.fa-list ,.fa-user{
    color: white;
    margin-left: 30px;
    margin-top: 23px;
}
#dash{
    text-decoration: none;
    color: #ffffff;
    margin-left: 35px;
    
}

.header{
    height: 70px;
    width: 86%;
    border: 2px solid white;
    background: white;
    margin-left: 300px;
    position:sticky;
    top:0;
    z-index:1;
}
.sub{
    display: flex;
    
    margin-top:-5px;
    position: fixed;
    
}
.fa-bars{
    color: #6c757d;
    margin-left: 50px;
    font-size: 25px;
    margin-top: 31px;
    cursor: pointer;

}
.inp{
    margin-left: 29px;
    margin-top: 27px;
    
    
}
.in{
    padding: 7px;
    border-radius: 5px 0px 0px 5px;
    border: #c9cdd2 2px solid;
    background: #f2f3f6fd;
}
.search{
    margin-top:27px ;
    border-radius: 0px 5px 5px 0px;
    margin-left: -2px;
    width: 90px;
    padding: 7px;
    background: rgb(98, 98, 249);
    color: white;
    border: 2px solid rgb(98, 98, 249);
    cursor: pointer;
}
.search:hover{
    background: rgb(97, 105, 208);
}
.bar2{
    margin-left: 475px;
    margin-top: 7px;
    color: #6c757d;
    
}
.fa-bell{
    padding: 20px;
    font-size: 23px;
    cursor: pointer;
}
.fa-border-all{
    padding: 20px;
    font-size: 23px;
    cursor: pointer;
}
.fa-gear{
    padding: 20px;
    font-size: 23px;
    cursor: pointer;
}
.fa-moon{
    padding: 20px;
    font-size: 23px;
    cursor: pointer;
}
.fa-expand{
    padding: 20px;
    font-size: 23px;
    cursor: pointer;
}
.fa-bell:hover{
    color: rgb(97, 105, 208);
}
.fa-border-all:hover{
    color: rgb(97, 105, 208);
}
.fa-gear:hover{
    color: rgb(97, 105, 208);
}
.fa-moon:hover{
    color: rgb(97, 105, 208);
}
.fa-expand:hover{
    color: rgb(97, 105, 208);
}

#pic{
    position: absolute;
    left: 89%;
    top: 19px;
    height: 30px;
    width: 30px;
    border-radius: 100%;
    position: fixed;
}

.profile{
    color: #6c757d;
    cursor: pointer;
}
#name{
    position: absolute;
    position: fixed;
    left: 92%;
    top: -6px;
}
#position{
    position: absolute;
    position: fixed;
    left: 92%;
    top: 20px;
}
#name:hover{
    color:rgb(97, 105, 208);
}
#position:hover{
    color: rgb(97, 105, 208);
}
.taskview{
    margin-left: 500px;
    margin-top: 150px;
}
table,th,td{
    border: 2px solid black;
    border-collapse: collapse;
    padding: 30px;
}
th{
    color: white;
    background: rgb(76, 76, 252);
    font-size: 24px;
}
td{
    font-size: 20px;
}
#seperate{
    position: absolute;
    margin: 50px 0px 0px 900px;
    color: rgb(76, 76, 252);
    font-size: 30px;
    
}



.add{
    margin: 8px 0px 0px 200px; 
    position: absolute;
    left: 72%;
    top: 125px;
    
    padding: 5px 15px 5px 15px;
    background: rgb(98, 98, 249);
    
    border: 2px solid rgb(98, 98, 249);
    
    border-radius: 5px;
}
a{
    color: white;
    text-decoration:none;
}
.add:hover{
    background: rgb(97, 105, 208);
}
.page{
    position:static;
    margin-left:60% ;
    margin-top:2%;
}
.nextpage ,.nextpage1{
    padding:10px;
    text-decoration: none;
    color:blue;


    
}
.nextpage:hover{
    background:rgb(98, 98, 249);

}

.active{
    background: rgb(98, 98, 249);

}

#btn-status{
   background-color:green;
   width:100px;
   height:40px;
   border:none;
   border-radius:5px;
   color:white;
}
#btn-delete{
   background-color:green;
   width:100px;
   height:40px;
   border:none;
   border-radius:5px;
   color:white;
}


