<x-layout>
    <x-navbar/>
    <h1>{{$data->name}}</h1>
    <img src="{{Storage::url($data->img)}}" alt="">
    <p>{{$data->description}}</p>
</x-layout>