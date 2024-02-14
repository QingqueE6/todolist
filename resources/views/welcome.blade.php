<x-layout>

@auth {{-- Only shows when logged in --}}





@else {{--  Only shows when NOT logged in --}}
<x-center-content>

        <x-loginform>
        </x-loginform>

        <x-registerform> 
        </x-registerform>

</x-center-content>

@endauth




</x-layout>