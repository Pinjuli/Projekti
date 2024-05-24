<!-- kisaajalle näkyy omat pisteet ja admin näkee muiden pisteet-->

<!-- seuraavaksi:  admin käyttäjälle syöttölomake (pisteytykset pystyy syöttämään esim käynti kalajoen moottoripyörällä 13 pistettä ulkomaankäynti ruotsi 12 pistettä)
kun on pistetilanne olemssa, kisailijan etusivulla voi näkyä suoraan esim.  et kävin ruotsissa. 

viiva, kävin ruotsissa +

tietokanta pisteitä varten, middleware, migration

syöttölomake

breezen kautta saa admin ja kisailija roolin
käytä middlewarea


mistä pisteet saa?
tietokanta, controllerit, viewit

https://www.youtube.com/watch?v=SCUTItTUnUc&list=PLsg6zl1zd97cVriYzo5UEU4R9OhD4Kpg4&index=2
katso todosta mallia pisteytystä varten


https://www.konepyoraklubi.fi/wp-content/uploads/2024/03/Konepyoraklubi-Farplay-pistejako-ja-perusteet-2024.pdf

https://docs.google.com/forms/d/e/1FAIpQLSfbQ0-0SMp4xlWuWw5rGz1aziqCdm-OR1P_S5kglrrVieUSHQ/viewform

https://www.konepyoraklubi.fi/wp-content/uploads/2023/12/Vuoden-2023-tulokset.pdf

miten kisailija näkee listan 

tee seuraavaksi admin käyttäjän kirjautuminen 


-->
<style>

    body{

        background-image: url(images/motorbike.jpg); 
        background-size: cover;  
        background-repeat: no-repeat;  
        background-attachment: fixed;  
    }

    .button{
       /* padding: 20px;
        margin-top: 10%;
        color: white; */
        font-family: Helvetica;
        background-color: rgba(240, 146, 96, 0.793);
        border: none;
        color: white;
        padding: 8px 8px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 90%;
        margin: 4px 2px;
        transition-duration: 0.1s;
        cursor: pointer;
        border-radius: 14px;
        /*width: 4%;
        height: 5%;
        text-align: center;
        border-radius: 6px; */
    }

    .button:hover{
        background-color: rgb(245, 151, 101);
    }

    h2{
        margin-top: 10%;
        text-align: center;
        color: rgba(255, 255, 255, 0.949);
        font-size: 200%;
        font-weight: 100;
        font-family: cursive;
        background-color: rgba(223, 151, 106, 0.27);
    }
    
</style>
<!-- <button class="button">Lataa pdf tiedostona</button>-->
<h2>Pistetilanne</h2>




