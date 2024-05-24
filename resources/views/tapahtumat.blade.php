<!--   Tässä sivussa näkee kaikki tapahtumat mitä on laittanut,
 niitä pystyy muokkaamaan ja poistamaan        --->

 
 <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Testi') }}
        </h2>
    </x-slot>
<h2><u>Kaikki tapahtumat</u></h2>

<br><br>


<table class="table table-bordered">
    <tr>
      <th>Tapahtuma</th>
      <th>Pisteet</th> 
      <th width="60%">Toiminnat</th>
    </tr>
   
    
    @foreach ($tapahtumat as $tapahtuma)
        <tr>
            <td>{{$tapahtuma['tapahtuma']}}</td>
            <td>{{$tapahtuma['pisteet']}}</td>
            <td>
                <a href="{{route('naytatapahtuma', ['tapahtuma'=>$tapahtuma['id']])}}">Katso</a>
              
                <form-class="delete-tapahtuma-form d-inline" action="{{route('tapahtumadelete', $tapahtuma->id)}}" method="POST">
                @csrf
                @method('DELETE')
                    <button class=" btn btn-danger btn-sm" title="Delete"><i class=" fas fa-trash">Poista</i></button>
                <form>
                    <a href="">Lisää etusivuun</a>
                
            </td>
        </tr>
    @endforeach
    
</table>



<style>

h2{
    text-align: center;
    margin-top: 5%;
    font-weight: 100;
    font-size: 170%;
    font-family: 'Trebuchet MS';
}

table, th, td {
    margin-left: auto;
    margin-right: auto;
    color: rgb(70, 70, 70);
    font-family: sans-serif;
  border: 1px solid rgb(42, 42, 42);
  border-collapse: collapse;
}

/*.poista{
    background-color:rgb(72, 145, 145);
    color: white;
        font-size: 100%;
        cursor: pointer;
        position: absolute;
        transform: translate(283%, 140%);
        left: 46%;
        /*position:fixed;*/ 
        /*right: 42em;*/
        /* padding: 1px 10px;*/
        
        /*border-radius:6px
        
        .poista:hover{
    background-color:rgb(61, 182, 182);
        }

        */




/*.muokkaa{
    background-color:rgb(10, 93, 106);
    color: white;
        font-size: 100%;
        cursor: pointer;
        position: absolute;
        transform: translate(293%, 140%);
        left: 46%;
        /*position:fixed;*/ 
        /*right: 42em;*/
        /* padding: 1px 10px;*/
        /*border-radius:6px 
        
        
.muokkaa:hover{
    background-color:rgb(93, 137, 143);
}

        */



/*.lisaa_etusivulle{
    background-color:rgb(124, 134, 137);
    color: white;
        font-size: 100%;
        cursor: pointer;
        position: absolute;
        transform: translate(600%, 140%);
        left: 46%;
        /*position:fixed;*/ 
        /*right: 42em;*/
        /* padding: 1px 10px;
        border-radius:6px*/

/*.lisaa_etusivulle:hover
    background-color:rgb(142, 146, 147); 
}*/
</style>

<!-- 
    BUTTONIT
    
    <button class="poista">Poista</button>
<button class="muokkaa">Muokkaa</button>
<button class="lisaa_etusivulle">Lisää</button> -->




  

<!-- {$tapahtumat}}-->

</x-app-layout>




