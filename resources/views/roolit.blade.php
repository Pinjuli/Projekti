<!DOCTYPE html>
<html lang="fin">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Kirjaudu sisään</title>
    <h4 class="otsikko">Valitse rooli ja rekisteröidy</h4>
</head>
        

    <style>
    body{
             
        /*font-family: trebuchet ms, sans-serif;*/ 
    }
    body {   
    /* entinen tausta: background-image: url(images/testitausta.jpg);*/
    background-image: url(images/test3.jpg);  
    -webkit-background-size: cover;  
    -moz-background-size: cover;  
    -o-background-size: cover;  
    background-size: cover;  
    background-repeat: no-repeat;  
    background-attachment: fixed;

    }  
    
    .otsikko{
        /* entinen fontti koko: font-size: 34px; */
       /* font-size: 2rem;
        margin-top: 11%; 
        margin-left: 29%;
        color:rgb(236, 236, 236);
        background-color:rgba(107, 138, 148, 0.615);
        width: max-content;
        border-radius:4px */

        font-size: 2rem;
        margin-top: 7%; 
        /*margin-left: 37%;*/
        text-align: center;
        color:rgb(255, 254, 254);
        background-color:rgba(107, 138, 148, 0.416);
        /*width: max-content;*/
        border-radius:4px

        
    }

    .button1{
        background-color:rgb(113, 143, 156);
        color: rgb(236, 236, 236);
        font-size: 160%; 
        cursor: pointer; 
        padding:0.01em 0.1em;
        border-radius:6px;
        position: absolute;
        transform: translate(-15%);
        left: 47%;
      
      
    }
        .button1:hover{
            background-color:rgb(95, 124, 136);
        }
 
      .button2{
         
         background-color:rgba(113, 143, 156, 0.638);
         color: rgb(236, 236, 236);
         font-size: 150%;
         cursor: pointer;
         /*position:fixed;*/
         /*right: 56%;*/
         padding:0.01em 0.1em;
         position: absolute;
         transform: translate(-14%, -40%);
         left: 46%;
         border-radius:6px
         
        }
 
        .button2:hover{
            background-color:rgba(95, 124, 136, 0.824);
           
        }
 
     .button3{
        background-color:rgba(113, 143, 156, 0.638);
        color: rgb(236, 236, 236);
        font-size: 150%;
        cursor: pointer;
        position: absolute;
        transform: translate(-11%, -90%);
        left: 46%;
        /*position:fixed;*/ 
        /*right: 42em;*/
        /* padding: 1px 10px;*/
        padding:0.01em 0.1em;
        border-radius:6px
        
        
        
    }

 
     .button3:hover{
             /* kiva väri background-color:rgb(100, 146, 167);  */
             background-color:rgba(95, 124, 136, 0.824);
        }



    /* Mobile S, M, L */
@media(max-width:425px){
   
    .otsikko{
        background-color:rgba(107, 138, 148, 0.64);
        margin-top: 40%;
    }

    .button1{
        left: 15%;
        width: 100%;
    }

    .button2{
        left: 14%;
        width: 100%;
    }

    .button3{
        left: 11%;
        width: 100%;
    }
 

}

    /*   Tablet  */
    @media(max-width:768px){
        .otsikko{
            margin-top: 18%;
        }
    }

    @media(min-width:768px){
        .button1{
        margin-left: -5%;
        width: 20%;
    }

    .button2{
        margin-left: -4%;
        width: 20%;
    }

    .button3{
        margin-left: -5%;
        width: 20%;
    }
}

    /*  Laptop  */
    @media(min-width:1024px){
        .otsikko{
            margin-top:13%;
        }

        .button1{
            margin-top:2%;
        }

        .button2{
            margin-top:2%;
        }

        .button3{
            margin-top:2%;
        }
    }

    /* Computer screen */
    @media(min-width:1440px){
        .otsikko{
            margin-top: 8%;
        }
    }





    </style> 
  
<!--  row-flex 


tailwind css-->



  <br><br><br>
<div class="md:flex">
        <a href="register">
        <br><button class="button1">Kisailija</button>
        </a>
    </div>


<div class="md:max-lg:flex">
        <a href="login">
        <br><br><br><button class="button2"disabled>Kisan valvoja</button>
    </div>

    <div class="md:max-lg:flex">
        <a href="login ">
       <br><br><br><button class="button3"disabled>Pääkäyttäjä</button>
    </div>   

    <body>
    

    </body>   
    
</html>