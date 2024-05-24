<!-- navigointi-->
<!-- navbar toimii jälleen, ongelmana oli rivi 12. Div class oli aikaisemmin collapse, jonka takia linkit eivät näkyneet
ja dropdown ei toiminut. Muutin collapsen visibleksi. 
seuraava ongelma on, että navbar aukeaa automaattisesti .. -->



<!--

  To do:


-Lisää rekisteröintilomakkeelle sukupuoli (tehty)

-tieto kuski tai takapenkki (radiobuttonit) (boolean onko kuski = kyllä    ei ole takapenkkki (kenttä jää tyhjäksi)) (tehty)

-syntymäaika (tehty)

-php artisan make:migration add_field_to_users (tehty)

-sen jälkeen php artisan migrate (tehty)

-lisää nimen ja sähköpostin alle (sukupuolen voi vaihtaa, kuski takapenkki ja syntymäaika) (tehty)

-lomake täytyy muuttaa (tehty)

-sarja johon osallistut ja kisankilometrit asti kaikki pois (tehty)

-registered.user controlleriin täytyy tehdä muutoksia (tehty)

-id ja loppumerkinnät pois, lisätään uudet kentät mitä haluaa lisätä (tehty)

- tapahtumille controller (tehty)

-tiedot taulu (tehty)

-tapahtumat taulu (tehty)

-valmistajataulu (tehty)

- mallitaulu (tehty)

- pisteet taulu (tehty)
- tiedot tauluun tulee moottoripyörän rekisteritunnus (tehty)










-profiilisivun täytyy hakea tiedot

- sukupuoli, takapenkki tai kuski ja syntymäaika tallentuu profiiliin

-tapahtumat tauluun tulee ne tiedot mitä virallisella etusivulla on)

-admin syöttää tapahtumapisteet

- täyttölomake tapahtumille
- listaus niille
- muokkaus
- poisto


// php artisan migrate:fresh (tekee kaiken uusiksi ja tyhjentää tietokannat)




-->




<nav class="navbar navbar-expand-lg navbar-dark bg-dark">  
  <div class="container-fluid">   
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">  
      <span class="navbar-toggler-icon"></span>  
    </button>
          <div class="visible navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">  
                <a class="nav-link" href="tietoakisasta">Tietoa kisoista</a>  
              </li>  
              <!-- <li class="nav-item">  
                <a class="nav-link" href="ilmoittaudu">Liity kisaan</a>  
              </li> -->
           
              <li class="nav-item">  
                <a class="nav-link" href="pistejako">Pistejako</a>  
              </li>
            </ul>
          </div>
          
      <x-dropdown align="right" width="47">
        <x-slot name="trigger">
          <button class="inline-flex items-center px-3 py-2 border border-black text-sm leading-4 font-medium rounded-md text-white dark:text-gray-400 bg-gray-400 dark:bg-gray-700 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
            <div>{{ Auth::user()->name }}</div>
            <div class="ms-1">
              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
              </svg>
            </div>
          </button>
        </x-slot>

       <x-slot name="content">
          <div class="px-4">
            <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
            <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
          </div>

          <x-dropdown-link :href="route('profile.edit')">
           {{ __('Profiili') }}
          </x-dropdown-link>

          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-dropdown-link :href="route('logout')"
              onclick="event.preventDefault();
              this.closest('form').submit();">
                {{ __('Kirjaudu ulos') }}
            </x-dropdown-link>
          </form>
        </x-slot>
      </x-dropdown>
  </div>
</nav>



  <style>

              /*   Media queryt  */

           /* Mobile S */
@media(max-width:320px){
    h2{
        font-size: 280%;
        margin-top: 35%;
        margin-left: -35%;
    }

    h5{
      margin-top: 15%;
      margin-left: -28%;
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















    


  .sarja_johon_osallistut_otsikko{
    color: white;
    margin-bottom: 1%;
    margin-left: 4%;
  }


 
  .valitse_tapahtuma{
    display: block;
    font-size: 110%;
    color: white;
    margin-left: 4%;
  }

  .tapahtumien_nimet{
    color: white;
    margin-left: 4%;
  }

  input[type=checkbox], select, textarea {  

  color: rgb(0, 0, 0) 
  }  

  .pisteet_yhteensa{
    width: 9%;
    margin-left: 4%;
  }

  .kuva{
    margin-left: 4%;
    color: white;
  }
  .moottoripyoran_tiedot{
    display: block;
    color: white;
    font-size: 110%;
    text-align: right;
    margin-right: 8%;
  }

  .moottoripyoran_rekkari{
    
    width: 9%;
    display: block;
    position: absolute;
    margin-left: 82%;
    margin-top: -32%;

  }
 

 .moottoripyoran_valmistaja{
  width: 7%;
  display: block;
  position: absolute;
  margin-left: 83%;
  margin-top: -29%;
 }

 .moottoripyoran_malli{
  width: 7%;
  display: block;
  position: absolute;
  margin-left: 83%;
  margin-top: -26%;
 }

 
 .lähetä_tiedot{
    display: inline-block;
    position: absolute;
    left: 1%;
    top: 48%;
    color: white;
    font-family: 'Trebuchet MS';
    background-color: rgb(68, 91, 95);
    cursor: pointer; 
    padding:1% 1%;
    border-radius:6px;
    margin-left: 82%;
    -webkit-transition-duration: 0.1s; /* Safari */
    transition-duration: 0.1s;
    text-decoration: none;
    overflow: hidden;

 
  }

  .lähetä_tiedot:after{
    content: "";
    background-color: rgb(130, 171, 178);
    display: block;
    position: absolute;
    padding-top: 300%;
    padding-left: 350%;
    margin-left: -20px!important;
    margin-top: -120%;
    opacity: 0;
    transition: all 0.5s
  }

  .lähetä_tiedot:active:after{
    padding:0;
    margin:0;
    opacity: 1;
    transition:0s;
  }

  .lähetä_tiedot:hover{
    background-color: rgb(60, 79, 83);
  }

</style>