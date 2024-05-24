<!-- tämä on se etusivu joka näkyy silloin kun on kirjautunut sisään tai rekisteröitynyt. -->
<x-app-layout>
 

    @include('layouts.navigation')

    <style>      
        body {
        background-image: url(images/testi.jpg);  
        /* saattavat olla turhia:  -webkit-background-size: cover;  
        -moz-background-size: cover;  
        -o-background-size: cover;*/
        background-size: cover;  
        background-repeat: no-repeat;  
        background-attachment: fixed;  
        }  
        
        nav .navbar-nav li a{ 
        
        color: rgb(99, 175, 185) !important; 
        
        } 
        
        
        h2{
        /*margin-top: 3%;*/
        display: inline-block;
        position: absolute;
        left: 42%;
        top: 11%;
        /*margin-top: -14%;*/
        font-size: 49px;  
        text-align: center;   
        font-weight: 100;
        opacity: 94%;
        }  


        
        .nav-link:hover{
            /* background-color: rgb(64, 74, 75); */
            background-color: rgba(239, 160, 91, 0.068)
        }
        
        h5{
            display: inline-block;
            position: absolute;
            left: 44%;
            top: 17%;
            text-align: center;
            font-family: sans-serif;
            font-size: 125%;
            opacity: 93%;
        }

      </style>  

    
    <h2 style="color:rgb(255, 255, 255);">Fairplay 2024</h2>  

    <h5 style="color:rgb(255, 255, 255);">Tervetuloa sivuillemme!</h5>

</x-app-layout>
 


 