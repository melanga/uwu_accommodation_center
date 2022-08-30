<form action={{$route}}>
    <div class="relative flex space-x-8 border-2 border-gray-100 m-4 rounded-lg">
        <input type="text" name="search"
               class="h-10 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none"
               placeholder="{{$text}}"/>
        <div>
            <button type="submit" class="h-10 w-20 text-white bg-cyan-800 rounded-lg">
                Search
            </button>
        </div>
    </div>
</form>
