

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 5px;
  background: linear-gradient(135deg,  rgb(176,168,168),  rgb(176,168,168));
}
.container{
  max-width: 700px;
  width: 100%;
  background-color: #fff;
  padding: 20px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.hello{
  padding-top: 90px  ;

}
.imagee{
  margin: 40px 0px 10px -10px;

}

.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}
 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,
 #dot-3:checked ~ .category label .three{
   background: #9b59b6;
   border-color: #d9d9d9;
 }
 form input[type="radio"]{
   display: none;
 }
 form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, rgb(213,161,161), rgb(199,29,29));
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, rgb(191,102,102), rgb(199,29,29));
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}

     </style>
   </head>
<body>
  <div class="container">
  <img src='ensiasgrapht.png' class="imagee" style= 'width:120px ; height:120px;  float:right; vertical-align:top;'/>
  
   <div class="hello">
  <div class="title"> Welcome to Ensias Graph
  
  
  </div>
</div>
    <div class="content">
      <form action="test.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Graph title  </span>
            <input type="text" name="title" placeholder="" required>
          </div>
          <div class="input-box">
            <span class="details">Background color</span>
            <input type="color" name="color_bg">
          </div>
          <div class="input-box">
            <span class="details"> Chart color</span>
            <input type="color" name="color_cb">
          </div>
          <div class="input-box">
            <span class="details"> Axes color</span>
            <input type="color" name="color_axe">
          </div>
          <div class="input-box">
            <span class="details">X Axis:</span>
            <input type="text" name="axe_x">
          </div>
          <div class="input-box">
            <span class="details">Y Axis:</span>
            <input type="text" name="axe_y">
          </div>
          <div class="input-box">
            <span class="details">Text color</span>
            <input type="color" name="color_text">
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="chart" value="line" id="dot-1">
          <input type="radio" name="chart" value="bar" id="dot-2">
          <input type="radio" name="chart" value="pie" id="dot-3">
          <span class="gender-title">Graph</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Line chart</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Bar chart</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Pie chart</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" name="submit" value="Generate">
        </div>
        <div class="details">
          <p><b>NB:</b> You have to complete all the fields just if you select line or bar charts</p>
        </div>
      </form>
    </div>
   
  </div>
  
</body>
</html>


