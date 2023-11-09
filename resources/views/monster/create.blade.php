<x-layout>
    <x-navbar/>
    <form class="container" method="POST" action="{{route('rule.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome mostro</label>
            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" value="{{old('name')}}">
            @error('name')
            <p class="text-danger">
                {{$message}}
            </p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">descrizione</label>
            <textarea cols="30" rows="10" name="description" type="text" class="form-control @error('description') is-invalid @enderror" id="description" >{{old('description')}}</textarea>
            @error('description')
            <p class="text-danger">
                {{$message}}
            </p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="img" class="form-label">descrizione</label>
            <input name="img" type="file" class="form-control @error('img') is-invalid @enderror" id="img">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</x-layout>
