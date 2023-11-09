<x-layout>
    <x-navbar/>
    <div class="container">
        <div class="row">
            @foreach ($monster as $el)
            <x-card :data='$el'></x-card>
            @endforeach
        </div>
    </div>
</x-layout>