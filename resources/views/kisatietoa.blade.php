<!-- responsiivisuus done -->
<!DOCTYPE html>
<html lang="en">
<title>kisatietoa</title>
<head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
</head>  
<style>      
    body {
    background-image: url(images/testi.jpg);  
    -webkit-background-size: cover;  
    -moz-background-size: cover;  
    -o-background-size: cover;  
    background-size: cover;  
    background-repeat: no-repeat;  
    background-attachment: fixed;  
    } 
h2{
    color: #ffffff;
    margin-top: 8%;
    font-family: sans-serif;
    text-align: center;
    font-weight: 100;
}

.lista{
    
    color: #ffffff;
    text-align: center;
    font-family: sans-serif;
    margin: 1%;
    
}

.lista2{
    
    color: #ffffff;
    text-align: center;
    font-family: sans-serif;
    margin: 1%;
    
}

.takaisin{
    /* background-color: rgba(51, 81, 106, 0.25);*/
    position: relative;
    text-align: center;
    font-size: 20px;
    /*margin-left: 45%;*/
    
}

#btn{

    
    background-color: rgba(24, 24, 24, 0.611);
    color: white;
    cursor: pointer; 
    border-radius:5px;
    font-size: 89%;
    /*border-color: #223251;*/
    border-color:rgb(117, 148, 150);


}
#btn:hover{
    
    background-color:rgba(81, 81, 81, 0.841);
    
}

   /* Mobile S */
   @media(max-width:500px){ 
    h2{
    
    margin-top: 30%;
    font-family: sans-serif;
    text-align: center;
    font-weight: 100;
    }

    .lista{
        margin-top: 23%;
        
    }
    .lista2{
    margin-top: 4%;
    color: #ffffff;
    text-align: center;
    font-family: sans-serif;
    
    
}

    #btn{
        background-color: rgb(0, 0, 0);
        border-color: black;
        margin-top: 23%;
        font-size: 90%;
    }
}



/* Mobile M */
@media(max-width:375px){
    h2{
        margin-top: 17%;
    }

   #btn{
    margin-top: 13%;
   }
}


/* Mobile L  */
@media(max-width:425px){
    h2{
        margin-top: 25%;
    }

    .lista{
        margin-top: 17%;
    }

    .lista2{
        margin-top: 3%;
    }

    #btn{
        margin-top: 13%;
    }
}




/* Tablet  */
@media(max-width:768px){
    h2{
        margin-top: 5%;
    }

    .lista{
        margin-top: 4%;
    }

    .lista2{
        margin-top: 2%;
    }

    #btn{
        margin-top: 9%;
        background-color: rgba(24, 24, 24, 0.668);
    }
}

/*  Laptop */
@media(max-width:1024px){
    h2{
        margin-top: 4%;
    }
}









</style>


<h2>Tietoa kisoistamme:</h2>
<li class="lista">Aloituskatsastukset alkavat 26.4 klo 18:00-19.00</li>
<li class="lista2">Aloituskatsastukset ovat myös seuraavana päivänä klo 10:00-12.00</li>



<div class="takaisin">
<a href="http://127.0.0.1:8000/dashboard">
<button id="btn">Takaisin etusivulle</button>
</div>
</html>

