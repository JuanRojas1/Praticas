<?php
header("content-Type: text/css; charset: UTF-8");
?>
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

body {
    font-family: cursive;
    background-image: url(../img/fondo1.jpg);
}

.menu {

    background: rgba(26, 29, 71, 0.712);
    width: 30%;
    height: 70px;
    max-width: 1000px;
    margin-left: auto;
    margin-top: 5px;
    border-radius: 10px 10px 10px 10px;
    display: flex;
    justify-content: space-between;

}

.menu li a {
    text-decoration: none;
    color: white;
    padding: 20px;
    display: block;

}

.menu li {
    display: inline-block;
    text-align: center;
}

.menu li a:hover {
    background: #ef8354;
}

table {
    table-layout: auto;
    margin-top: 40px;
    margin-bottom: 30px;
    margin-left: 40px;
    margin-right: auto;
    margin: auto;
    width: 80%;
    border-collapse: collapse;
    background-color: rgb(37, 82, 100);
    color: rgb(192, 189, 189);
}

.from {
    background-color: rgb(101, 125, 134);
    text-align: center;
    width: 800px;
    margin-left: 250px;
    margin-top: 20px;
    margin-bottom: 30px;

}

h1{
    
    margin-bottom: 20px;
    color: black;
}

td,
thead,
th {
    border: 2px solid black;

}

input {
    margin-top: 10px;
    margin-bottom: 10px;
    font-size: 18px;
    height: 35px;
    width: 70%;
    padding: 8px;
}

input[type ="submit"] {
    background: linear-gradient(rgb(76, 81, 97), rgb(98, 105, 126));
   border-radius: 10px 10px 10px 10px;
   color: rgb(255, 255, 255);
   opacity: 0.8;
   cursor: pointer;
   margin-bottom: 40px;
   width: 20%;
   height: 50px;
   margin-left: 10px;
   margin-top: 30px;

}


