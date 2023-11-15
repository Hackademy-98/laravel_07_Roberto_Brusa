<x-layout>
    <x-navbar/>
    <h1>{{$data->name}}</h1>
    <img class="custom_img" src="{{Storage::url($data->img)}}" alt="">
    <p>{{$data->CA}}</p>
    <p>{{$data->PF}}</p>
    <p>{{$data->description}}</p>
</x-layout>