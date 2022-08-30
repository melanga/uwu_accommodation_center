<x-dashboard>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">Hostal Change Appeal</h2>
    <div class="w-full grid place-items-center">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors"/>

            <form method="POST" action="{{ route('student.appeal') }}">
                @csrf
                <!-- appeal hostal -->
                <div>
                    <x-label for="hostal" :value="__('Hostal')"/>

                    <x-input id="hostal" class="block mt-1 w-full" type="text" name="hostal"
                             :value="old('hostal')" required autofocus/>
                </div>
                <!-- Last Name -->
                <div class="mt-4">
                    <x-label for="message" :value="__('Message')"/>

                    <x-input id="message" class="block mt-1 w-full" type="text" name="message" :value="old('message')"
                             required autofocus/>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ url()->previous() }}">
                        {{ __('back') }}
                    </a>
                    <x-button class="ml-4">
                        {{ __('Submit') }}
                    </x-button>
                </div>
            </form>
        </div>
    </div>
</x-dashboard>
