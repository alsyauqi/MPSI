.btn{
  position: absolute;
  margin-top: 24px;
  color: rgb(51, 128, 1);
  border-radius: 3px;
  border: 1px solid rgb(51, 128,1);
  font-size: 21px;
  background-color: rgb(51, 128,1);
  color:white;  
  width: 120px;
  text-align: center;
  padding: 6px 0px;
}

.btnkiri {
  margin-left: 3px; 
}

.btnkanan {
  margin-left: 140px; 
}

.btn:hover{
  color:white;
  background-color: darkgreen;
}


/*L O G I N  S T Y L E*/
/* Full-width input fields */
.input_login {
    width: 100%;
    padding: 12px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 40%; /* Could be more or less, depending on screen size */
    font-size:20px;
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 10px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)}
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)}
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

.wrapper-daftar {
  margin-left: 260px;
  margin-top: 160px;
}

.daftar_beasiswa {
  font-size: 18px;
  background-color: #FEFEFE;
  padding: 15px;
  width: 60%;
  border:  1px solid #cacaca;
  margin-top: -1px;
}

.input_daftar {
  font-size: 16px;
  width: 65% !important;
  height: 35px;
  padding: 5px;
  margin-top: 5px;
}

.dropdown-daftar{
  width: 86%;
  height: 52px;
}