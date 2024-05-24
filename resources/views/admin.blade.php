
<!DOCTYPE html>  
<html lang="fin">  
<head>  
<meta charset="UTF-8">  
<meta name="viewport" content="width=device-width, initial-scale=1.0">  
<meta http-equiv="X-UA-Compatible" content="ie=edge">  
<title>Fairplay 2024</title>  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>  



<nav class="navbar navbar-expand-lg navbar-dark bg-dark">  
    <div class="container-fluid">  
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">  
          <span class="navbar-toggler-icon"></span>  
        </button>
        
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">  
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">  
            <a class="nav-link" aria-current="page" href="kisatietoa">Tietoa kisoista</a>  
          </li>  
            <li class="nav-item">  
                <a class="nav-link" href="pistejako">Pistejako</a>  
            </li>
            <li class="nav-item">  
                <a class="nav-link" href="kaikkipisteet">Katso muiden pisteet</a>  
            </li>
            <li class="nav-item">  
                <a class="nav-link" href="#">Tapahtumat</a>  
                <ul>
                    <li><a href="{{ route('kaikkitapahtumat') }}">Kaikki tapahtumat</a></li>
                    <li><a href="uusitapahtuma">Lisää tapahtuma</a></li>

                </ul>
            </li>
        </ul>
      </div>
    </div>
  </nav>


<style>      

nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

nav ul li {
    display: inline-block;
    position: relative;
}

nav ul li a {
    display: block;
    padding: 10px 20px;
    text-decoration: none;
    color: #333;
    transition: background-color 0.3s;
}

nav ul li a:hover {
    background-color: #f0f0f0;
   
}

nav ul li ul {
    display: none;
    position: absolute;
    background-color:rgb(33, 37, 41);
    box-shadow: 0 2px 4px  color: rgb(99, 175, 185);
    border: 1px solid #000000;
}

nav ul li:hover ul {
    display: block;
}

nav ul li ul li {
    display: block;
    white-space: nowrap;
}

nav ul li ul li a {
    display: block;
    padding: 10px 20px;
    text-decoration: none;
    color: #333;
    transition: background-color 0.3s;
}

nav ul li ul li a:hover {
    background-color:rgb(51, 60, 61);
}




body{
background-image: url(images/testi.jpg); 
-webkit-background-size: cover;  
-moz-background-size: cover;  
-o-background-size: cover;  
background-size: cover;  
background-repeat: no-repeat;  
background-attachment: fixed;  
}  

nav .navbar-nav li a{ 

color: rgb(99, 175, 185) !important; 

} 


h2{  

color:rgb(255, 255, 255);    
font-size: 49px;  
text-align: center;  
margin: 3%;  
font-weight: 100;
opacity: 94%;  
}  

.nav-link:hover{
    /* background-color: rgb(64, 74, 75); */
    /*background-color: rgba(239, 160, 91, 0.129)*/
    background-color: rgba(239, 160, 91, 0.068)
}

h5{
    color:rgb(255, 255, 255);
    margin-top: -3%;
    text-align: center;
    font-family: sans-serif;
    opacity: 93%;
    
    
}

/* Mobile S */
@media(max-width:320px){
    h2{
        font-size: 280%;
        margin-top: 26%;
    }

 

}

/* Mobile M */
@media(max-width:375px){
    h2{
        margin-top: 20%;
    }
}

/* Mobile L  */
@media(max-width:425px){
    h2{
        margin-top: 20%;
    }
}

/* Tablet  */
@media(max-width:768px){
    h2{
        margin-top: 14%;
    }
}

/*  Laptop */
@media(max-width:1024px){
    h2{
        margin-top: 8%;
    }
}


.dropdown {
  display: inline-block;
  position: relative;
  background-color: rgb(33, 37, 41)
}

.dropdown-options {
  display: none;
  position: absolute;
  overflow: auto;
}

.dropdown:hover .dropdown-options {
  display: block;
}





</style>  
</head>  
<body>  

    
    <h2>Fairplay 2024</h2>  

    <h5>Tervetuloa sivuillemme!</h5>  




</body>  
</html> 

 