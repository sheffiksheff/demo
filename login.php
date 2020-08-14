

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
	<link href='https://fonts.googleapis.com/css?family=Blinker' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Buda:300' rel='stylesheet'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
/*.login {
   margin: auto;
  width: 60%;
  border: 3px solid #73AD21;
  padding: 10px;

  background-color: #1e3a3d;
  .vl {
  border-left: 2px solid green;
  height: 300px;
}
}*/
body
{
  background-color: #001f23;

}

.split {
	display: inline-block;
  height: 80%;
  width: 50%;
  margin : 60px;
  /*margin-right : 30px;*/
  /*margin-bottom: 100px;*/
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-right: 20px;
}

/* Control the left side */
.left {
  left: 0;
  background-color: #001f23;
  font-size: 20pt;
  font-variant-caps: titling-case;
   margin-left : 50px;
}

/* Control the right side */
.right {
  right: 0;
  background-color: #001f23;
  /*background-color: #001f23;*/
 border-left: 2px solid #1e3a3d;
 /*padding-right: 20px;*/
 /*padding-bottom: 50px;*/
 margin-right : 20px;
  /*border-height: 300px;*/
}

/* If you want the content centered horizontally and vertically */
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  padding-bottom: 50px;

}
.centered1 {
  position: absolute;
  top: 60%;
  left: 40%;
  transform: translate(-50%, -50%);
  text-align: center;
  padding-bottom: 50px;
  /*margin-bottom:300px;*/

}

/* Style the image inside the centered container, if needed */
.centered img {
  width: 50px;
  border-radius: 50%;
}
.vl {
  border-left: 2px solid green;
  height: 300px;
}
.rcorners1 {
  border-radius: 5px;
  background: #fff;
  padding: 10px; 
  width: 150%;
  height: 10px;  
  margin: 6px;
  text-align: center;
  font-size: 12px;
  font-family: 'Blinker';
}
.button {
  display: inline-block;
  margin-top: 50px;
  margin-left: 20px;
  width : 150%;
  padding: 10px 30px;
  font-size: 12px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #bec7c8;
  background-color: #f2681b;
  border: none;
  border-radius: 15px;
  box-shadow: 0 2px #bec7c8;
  font-family: 'Blinker';
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.head {
  color: #fff;
   font-family: 'Buda';
   /*font-size: 22px;*/
  /*font-style: normal;*/
  /*font-family: "Times New Roman", Times, serif;*/
  /*font-family: Arial, Helvetica, sans-serif;*/
  font-size: 30px;
}
.url {
  color: #fff;
   font-family: 'Buda';
   /*font-size: 22px;*/
  /*font-style: normal;*/
  /*font-family: "Times New Roman", Times, serif;*/
  /*font-family: Arial, Helvetica, sans-serif;*/
  font-size: 30px;
}
.subhead {
  color: #bec7c8;
  font-style: normal;
  font-size: 20px;
  font-family: 'Blinker';
}
		

</style>
 
</head>
<body>

 	<div class="split left">
  <div class="centered">
  	<div class="img">
  		<!--  <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8"> -->
      <img src="dist/img/AdminLTELogo.png"><p class="url"> ASWANGROUP.IN</p>
  	</div>
  	
   <!-- <img src="dist/img/AdminLTELogo.png" alt="ASWANGROUP.IN">  -->
   <!-- <span style="font-family: fantasy; color: #bec7c8;">ASWANGROUP.IN<i src="dist/img/AdminLTELogo.png"></i></span> -->
    <!-- <h2>Jane Flex</h2>
    <p>Some text.</p> -->
  </div>
</div>

<div class="split right">
	<div style="text-align: center;margin-left: 10px;">
		<p class="head">Welcome</p>
  	<p class="subhead">LOGIN TO ADMIN DASHBOARD</p>
	</div>
  <div class="centered1">
  	<form  method="post" id="myForm" >
     <div  style="align-content: left;">  
                        
    <input type="text" class="rcorners1" name="username" id="username" placeholder="UserName" autofocus>
  </div>
<div  style="align-content: left;">  
                        
    <input type="Password" class="rcorners1"  name="password" id="password" placeholder="password" autofocus>
  </div>
  <div  style="align-content: center; margin-bottom: 20px;">  
                        
    <button class="button" type="button" onclick="submitForm()"> LOGIN </button>

  </div>
  <div style="width:100%;margin-left:  70px">
  	<i style="display: inline-block; text-align: center; color: #a7b4b5;font-size: 12px;">Forgotten Your Password?</i>
  </div>
 </form>
  </div>
</div>
<script type="text/javascript">
	// function login() {
	// 	$.ajax({

 //              url:'jquery/login.php',
 //              type:'POST',
 //              data:{username : username},
 //              success: function(data){
 //                window.location = "index.php";CCCD06B5-D0C7-45B0-8268-F7582D61C919
 //              	alert(data);
 //              }
              
 //          });
		
//	}

  
  function submitForm() {
    // alert($('#myForm').serialize());
    $.ajax({
         url:'jquery/login.php',
            type:'POST',
            data:$('#myForm').serialize(),
            success: function(data){
               $("#myForm")[0].reset();
              if (data.trim() == "success") {
               console.log(data);
               // showAlert();
               
                
              window.location.href = "index.php";
                // window.location.href = "list-purchase.php";  
              }
             
              alert(data);
            
            }
        });

  }
    function validate() {
        var $valid = true;
        document.getElementById("user_info").innerHTML = "";
        document.getElementById("password_info").innerHTML = "";
        
        var userName = document.getElementById("user_name").value;
        var password = document.getElementById("password").value;
        if(userName == "") 
        {
            document.getElementById("user_info").innerHTML = "required";
          $valid = false;
        }
        if(password == "") 
        {
          document.getElementById("password_info").innerHTML = "required";
            $valid = false;
        }
        return $valid;
    }
   
</script>
 </body>
</html>