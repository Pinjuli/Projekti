<ul>
    @foreach ($tapahtuma as $muokkaatapahtumaa)
        <li>Tapahtuma: {{ $muokkaatapahtumaa['tapahtuma'] }}, Pisteet: {{ $muokkaatapahtumaa['pisteet'] }}</li>
        <form method="POST" action="">
            @csrf
            @method('PUT')

            <div class="col-sm-4">
                <input type="text" name="tapahtuma" value="{{$muokkaatapahtumaa->tapahtuma}}" class="form-control">
            </div>

            <div class="col-sm-4">
                <input type="text" name="tapahtuma" value="{{$muokkaatapahtumaa->pisteet}}" class="form-control">
            </div>

            <div class="col-sm-4">
                <input type="submit" value="Tallenna muutokset">
            </div>


        </form>
    @endforeach
    </ul>





    Uus koodi joka tulee tänne, vanhan voi unohtaa:

    <ul>
        @foreach ($muokkaatiedot as $muokkaatapahtumaa)
            <li>Tapahtuma: {{ $muokkaatapahtumaa['tapahtuma'] }}, Pisteet: {{ $muokkaatapahtumaa['pisteet'] }}</li>
            <form method="POST" action="">
                @csrf
                @method('PUT')
    
                <div class="col-sm-4">
                    <input type="text" name="tapahtuma" value="{{$muokkaatapahtumaa->tapahtuma}}" class="form-control">
                </div>
    
                <div class="col-sm-4">
                    <input type="text" name="tapahtuma" value="{{$muokkaatapahtumaa->pisteet}}" class="form-control">
                </div>
    
                <div class="col-sm-4">
                    <input type="submit" value="Tallenna muutokset">
                </div>
    
    
            </form>
        @endforeach
        </ul>