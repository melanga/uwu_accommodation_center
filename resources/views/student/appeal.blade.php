<x-dashboard>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">Hostel Change Appeal</h2>
    <div class="w-full grid place-items-center">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors"/>
            <form method="GET" action="{{ route('student.appeal') }}">
                <div class="flex">
                    <div class="flex items-center mr-4">
                        <input id="male_selected" type="checkbox"
                               name="male_selected"
                               @checked($male_selected)
                               onchange="submit()"
                               class="w-4 h-4 text-orange-500 bg-gray-100 rounded border-gray-300 focus:ring-orange-500 focus:ring-2">
                        <label for="male_selected" class="ml-2 text-sm font-medium text-gray-900">Male</label>
                    </div>
                    <div class="flex items-center mr-4">
                        <input id="female_selected" type="checkbox"
                               name="female_selected"
                               @checked($female_selected)
                               onchange="submit()"
                               class="w-4 h-4 text-orange-500 bg-gray-100 rounded border-gray-300 focus:ring-orange-500 focus:ring-2">
                        <label for="female_selected" class="ml-2 text-sm font-medium text-gray-900">Female</label>
                    </div>
                </div>
            </form>
            <form method="POST" action="{{ route('student.appeal') }}">
                @csrf
                <!-- appeal hostel -->
                <div>
                    <label for="hostels" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Select
                        a Hostel</label>
                    <select id="hostel" name="hostel"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 ">
                        <option selected>Choose a Hostel</option>
                        @foreach($hostels as $hostel)
                            <option value="{{$hostel->id}}">{{$hostel->name}}</option>
                        @endforeach
                    </select>
                </div>
                <!-- Last Name -->
                <div class="mt-4">
                    <x-label for="message" :value="__('Message')"/>
                    <textarea id="message" rows="4" name="message"
                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-orange-500 focus:border-orange-500"
                              placeholder="Your message..."></textarea>
                    {{--                    <x-input id="message" class="block mt-1 w-full" type="textarea" rows="4" name="message"--}}
                    {{--                             :value="old('message')"--}}
                    {{--                             required autofocus/>--}}
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
