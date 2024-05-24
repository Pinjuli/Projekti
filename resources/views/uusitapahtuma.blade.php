<!--  Täällä tapahtuu tapahtuman lisäys      -->


<x-app-layout>
    <x-slot name="header">
        
        
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lisää tapahtuma') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
    </div>
    </div>

    <form method="POST" action="{{ route('tapahtumat') }}">  
        @csrf
        <div class="lomake">
        <label for="tapahtuma">Tapahtuman nimi</label><br>
        <input type="text" id="tapahtuma" name="tapahtuma"><br><br>
        <label for="pisteet">Pisteet</label><br>
        <input type="text" id="pisteet" name="pisteet"><br>
        </div>

        <button class="submit">Lisää tapahtuma</button>
        
    </form>



    <style>

        .submit{
        margin-left: 675px;
        margin-top: 2%;
        border-radius: 6px;
        color: rgb(0, 0, 0);
        border: 2px solid rgb(144, 144, 144);
        background-color: rgba(179, 179, 179, 0.42);
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        }

        .submit:hover{
            background-color: rgba(145, 145, 145, 0.42);
        }

        .lomake{
            margin-left: 40%;
            margin-top: 5%;
        }

        #tapahtuma{
            border-radius: 10px;
        }

        #pisteet{
            border-radius: 10px;
        }

    </style>

</x-app-layout>
