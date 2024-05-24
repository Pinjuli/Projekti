<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nimi')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Sähköposti')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Salasana')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Vahvista salasana')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
        <!-- Validointi ja tarkistaminen onko tiedot laitettu, jos ei tulee error -->

        <?php
            $sukupuoliErr = $kuskivaitakapenkkiErr =$syntymäaikaErr = "";
            $sukupuoli = $kuskivaitakapenkki = $syntymäaika = "";

                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    if(empty($_POST["sukupuoli"])){
                        $sukupuoliErr = "Tämä on pakollinen";

                        } else {
                            $sukupuoli = test_input($_POST["sukupuoli"]);
                        }
                    }

                        
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    if(empty($_POST["kuskivaitakapenkki"])){
                        $kuskivaitakapenkkiErr = "Tämä on pakollinen";

                        } else {
                            $kuskivaitakapenkki = test_input($_POST["kuskivaitakapenkki"]);
                        }
                    }

                        
                    if($_SERVER["REQUEST_METHOD"] == "POST"){
                        if(empty($_POST["syntymäaika"])){
                            $syntymäaikaErr = "Tämä on pakollinen";

                            } else {
                                $syntymäaika = test_input($_POST["syntymäaika"]);
                        }
                    }

                    function test_input($data){
                            $data = trim($data);
                            $data = stripslashes($data);
                            $data = htmlspecialchars($data);
                        }

                    ?>

                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
               
                                  <!-- Sukupuolen valinta -->
                        <div class="mt-4">
                            <p>Valitse sukupuoli</p>
                            <x-input-error :messages="$errors->get('sukupuoli')" class="mt-2" />
                            
                            <input type="radio" value="0" id="sukupuoli" name="sukupuoli">
                            <label for="sukupuoli">Mies</label><br>
                
                            <input type="radio" value="1" id="sukupuoli" name="sukupuoli">
                            <label for="sukupuoli">Nainen</label><br>
                        </div>
                
                                <!-- Valitse oletko kuski vai takapenkkiläinen  -->
                        <div class="mt-4">
                            <p>Oletko kuski vai takapenkkiläinen?</p>
                            <x-input-error :messages="$errors->get('kuskivaitakapenkki')" class="mt-2" />
                            
                            <input type="radio" value="0" id="kuski" name="kuskivaitakapenkki">
                            <label for="kuski">Kuski</label><br>
                
                            <input type="radio" value="1" id="takapenkki" name="kuskivaitakapenkki">
                            <label for="takapenkki">Takapenkkiläinen</label><br>
                        </div>
                
                                    <!-- Syntymäajan valinta -->
                        <div class="mt-4">
                            <p>Valitse syntymäaika</p>
                            <x-input-error :messages="$errors->get('syntyma_aika')" class="mt-2" />
                            
                                <input type="date" id="start" placeholder="pv-kk-vuosi" name="syntyma_aika" value="1-1-1980" min="1.1.1980" max="1.1.1960"/>
                        
                              <br>
                            
                        </div>

               

      

        <style>
            .error{
                color: red;
            }
            input[type=radio], select, textarea {  

            color: rgb(0, 0, 0) 
            }
        </style>


        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Rekisteröitynyt jo?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Rekisteröidy') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
