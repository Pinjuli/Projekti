<!--  Täältä löytyy profiilin tiedot kohta   -->
<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profiilin tiedot') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Päivitä tilisi tiedot.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Nimi')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Sähköposti')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

                <!--  Tietojen muuttaminen (sukupuoli, syntymäaika, takapenkkiläinen vai kuski)   -->
                <div class="mt-4">
                    
                    <x-input-label for="sukupuoli" :value="__('Sukupuoli')" />
                   <!-- <x-text-input id="sukupuoli" name="sukupuoli" type="text" class="mt-1 block w-full" :value="old('sukupuoli', $user->gender)" required autofocus autocomplete="sukupuoli" />-->

                    <input type="radio" id="sukupuoli" name="sukupuoli">
                    <label for="sukupuoli">Mies</label><br>
        
                    <input type="radio" id="sukupuoli" name="sukupuoli">
                    <label for="sukupuoli">Nainen</label><br>
                </div>

                
                <!-- Syntymäajan valinta  -->
                    <div class="mt-4">
                        <x-input-label for="syntyma_aika" :value="__('Syntymäaika')" />
                       <!-- <x-text-input id="syntymaika" name="syntymaika" type="text" class="mt-1 block w-full" :value="old('syntyma_aika', $user->syntyma_aika)" required autofocus autocomplete="syntymaika" />-->
                                
                     <input type="date" id="start" placeholder="pv-kk-vuosi" name="trip-start" value="1-1-1980" min="1.1.1980" max="1.1.1960" />
                            
                        <br>
                                
                    </div>
        
                  <!--   Valitse oletko kuski vai takapenkkiläinen        -->
                <div class="mt-4">
                    <x-input-label for="kuskivaitakapenkki" :value="__('Kuski vai takapenkkiläinen')" />
                    <!-- <x-text-input id="kuskivaitakapenkki" name="kuskivaitakapenkki" type="text" class="mt-1 block w-full" :value="old('kuskivaitakapenkki', $user->kuskivaitakapenkki)" required autofocus autocomplete="kuskivaitakapenkki" />-->
                    
                    <input type="radio" id="kuski" name="kuski">
                    <label for="kuski">Kuski</label><br>
        
                    <input type="radio" id="takapenkki" name="takapenkki">
                    <label for="takapenkki">Takapenkkiläinen</label><br>
                </div>
        


            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Tallenna') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Tallennettu.') }}</p>
            @endif
        </div>
    </form>
</section>
