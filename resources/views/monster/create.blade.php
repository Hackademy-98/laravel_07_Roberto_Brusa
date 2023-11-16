<x-layout>
    <x-navbar/>
    <form class="container" method="POST" action="{{route('rule.store')}}" enctype="multipart/form-data">
        @csrf
        
        {{-- nome --}}
        <div class="mb-3">
            <label for="name" class="form-label">Nome mostro</label>
            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" value="{{old('name')}}">
            @error('name')
            <p class="text-danger">
                {{$message}}
            </p>
            @enderror
        </div>
        
        {{-- classe armatura --}}
        <div class="mb-3">
            <label for="CA" class="form-label">Classe armatura</label>
            <input name="CA" type="text" class="form-control @error('CA') is-invalid @enderror" id="CA" value="{{old('CA')}}">
            @error('CA')
            <p class="text-danger">
                {{$message}}
            </p>
            @enderror
        </div>
        
        {{-- punti ferita --}}
        <div class="mb-3">
            <label for="PF" class="form-label">Punti Feita</label>
            <input name="PF" type="text" class="form-control @error('PF') is-invalid @enderror" id="PF" value="{{old('PF')}}">
            @error('PF')
            <p class="text-danger">
                {{$message}}
            </p>
            @enderror
        </div>
        
        {{-- descrizione --}}
        <div class="mb-3">
            <label for="description" class="form-label">descrizione</label>
            <textarea cols="30" rows="10" name="description" type="text" class="form-control @error('description') is-invalid @enderror" id="description" >{{old('description')}}</textarea>
            @error('description')
            <p class="text-danger">
                {{$message}}
            </p>
            @enderror
        </div>
        
        {{-- immagine --}}
        <div class="mb-3">
            <label for="img" class="form-label">immagine</label>
            <input name="img" type="file" class="form-control @error('img') is-invalid @enderror" id="img">
            @error('img')
            <p class="text-danger">
                {{$message}}
            </p>
            @enderror
        </div>
        
        {{-- categoria --}}
        <div class="mb-3">
            <label for="category_id" class="form-label">categoria</label>
            <select id="category_id" name="category_id" class="form-select">
                <option selected disabled>scegli una categoria</option>
                @foreach ($data as $el)
                <option value="{{$el->id}}">{{$el->name}}</option>
                @endforeach
            </select>
            @error('category_id')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        
        {{-- azioni --}}
        <div class="mb-3">
            <h5>AZIONI</h5>
            <div class="row p-4">
                @foreach($actions as $action)
                <div class="form-check col-2 ">
                    <input class="form-check-input" name="actions[]" type="checkbox" value="{{$action->id}}" id="id_{{$action}}">
                    <label class="form-check-label" for="id_{{$action}}">
                        {{$action->name}}
                    </label>
                </div>
                @endforeach
            </div>
        </div>
        
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
</x-layout>
