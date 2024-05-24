<!DOCTYPE html>  
<html>  
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title>Ilmoittaudu</title>  
<style> 

h4.header{ 

color:rgb(255, 255, 255); 

font-family: 'Garamond', sans; 

} 

 
input[type=text], select, textarea {  

width: 80%; 

padding: 3px;  

border: 1px solid #9e9d9d; 

color: rgb(80, 80, 80) 
}  

input[type=submit] {  

background-color: #2b2e2d;  
color: white; 
padding: 6px 15px; 
border: none;  
border-radius: 4px;  
cursor: pointer;  
margin-left: 2%;  
margin-bottom:7%;  
}  

input[type=submit]:hover {  
background-color: #252121;  

}  

.col-25 {  

float: left;  
width: 19%;  
margin-top: 6px;  

}  

.col-75 {  

float: left;  
width: 15%;  
margin-top: 6px;  
}  

.row:after {  

content: "";  
display: table;  
clear: both;  
}  


/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */  

@media screen and (max-width: 600px) {  
.col-25, .col-75, input[type=submit] {  

width: 36%;  
margin-top: 0;  
}  

}  

body {  
background-image: url(images/testi.jpg);  
-webkit-background-size: cover;  
-moz-background-size: cover;  
-o-background-size: cover;  
background-size: cover;  
background-repeat: no-repeat;  
background-attachment: fixed;  

} 

p.text{ 

font-weight: bold; 
color: #ffffff; 
} 

label.name{ 

color:rgb(255, 255, 255); 

} 

label.lastname{ 

color:rgb(255, 255, 255); 

} 

label.email{ 

color:rgb(255, 255, 255); 

} 

label.motorbike{ 

color:rgb(255, 255, 255); 

} 

label.registernumber{ 

color:rgb(255, 255, 255); 

} 

label.startkilometers{ 

color:rgb(255, 255, 255); 

} 

label.endkilometers{ 

color:rgb(255, 255, 255); 

} 

label.kilometers{ 

color:rgb(255, 255, 255); 

} 

label.gendermale{ 

color:rgb(255, 255, 255); 

} 

label.genderfemale{ 

color:rgb(255, 255, 255); 

} 


</style>  
</head>  
<body>  

<h4 class="header">Kisan ilmoittautumislomake</h4> 

<div class="container">  

<form action="#">  

<div class="row">  

<div class="col-25">  

<label class="name">Nimi</label>  

</div>  
 
<div class="col-75">  
<input type="text" id="name" name="etunimi">  
</div>  
</div>  
<div class="row">  
<div class="col-25">  
<label class="lastname">Sukunimi</label>  

</div>  
<div class="col-75">  

<input type="text" id="lname" name="sukunimi">  

</div>  
</div>  

<div class="row">  
<div class="col-25">  

<label class="email">Sähköposti</label>  
</div>  

<div class="col-75">  

<input type="text" id="email" name="sahkoposti">  

</div>  

</div>  

<div class="row">  

<div class="col-25">  

<label class="motorbike">Moottoripyörä</label>  

</div>  

<div class="col-75">  

<input type="text" id="mbike" name="moottoripyora">  

</div>  

</div>  

<div class="row">  

<div class="col-25">  

<label class="registernumber">Rekisterinumero</label>  

</div>  

<div class="col-75">  

<input type="text" id="rnumero" name="rekisterinumero">  

</div>  

</div>  

<div class="row">  
<div class="col-25">  

<label class="startkilometers">Alkukilometrit</label>  
</div>  

<div class="col-75">  

<input type="text" id="alkilo" name="alkukilometrit">  
</div>  
</div>  

<div class="row">  
<div class="col-25">  

<label class="endkilometers">Loppukilometrit</label>  

</div>  

<div class="col-75">  
    
<input type="text" id="lokilo" name="loppukilometrit">  

</div>  
</div>  

<div class="row">  
<div class="col-25">  

<label class="kilometers">Kilometrit yhteensä</label>  

</div>  
<div class="col-75">  
<input type="text" id="kyhteensa" name="kilometrityhteensa">  
</div>  
</div>  

<p class="text">Osallistun kilpailuun sarjassa:</p> 

<input type="radio" id ="test" name="sukupuoli" value="gender"> 
<label class="gendermale">Mies</label><br>  

<input type="radio" id ="test" name="sukupuoli" value="gender"> 
<label class="genderfemale">Nainen</label><br> 

<div class="col-sm-2"><br>  
<input type="submit" value="Lähetä">  

</div>  
</div>  
</form>  
</div>  
</body>  
</html> 