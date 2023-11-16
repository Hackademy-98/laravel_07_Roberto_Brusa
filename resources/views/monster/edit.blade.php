<x-layout>
    <x-navbar/>
    <form class="container" method="POST" action="{{route('rule.update',compact('data'))}}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="name" class="form-label">Nome mostro</label>
            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" value="{{$data->name}}" >
            @error('name')
            <p class="text-danger">
                {{$message}}
            </p>
            @enderror
        </div>

        {{-- <button id="cazzoProva">prova</button> --}}
        
        <div class="mb-3">
            <label for="description" class="form-label">descrizione</label>
            <textarea cols="30" rows="10" name="description" type="text" class="form-control @error('description') is-invalid @enderror" id="description" >{{$data->description}}</textarea>
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
        
        <div class="mb-3">
            <label for="category_id" class="form-label">categoria</label>
            <select id="category_id" name="category_id" class="form-select">
                @foreach ($categories as $el)
                <option @if($el->id==$data->category_id) selected @endif value="{{$el->id}}">{{$el->name}}</option>
                @endforeach
            </select>
            @error('category_id')
            <p class="text-danger">
                {{$message}}
            </p>
            @enderror
        </div>

        {{-- azioni --}}
        <div class="mb-3">
            <h5>AZIONI</h5>
            <div class="row p-4">
                @foreach($actions as $action)
                <div class="form-check col-2 ">
                    <input class="form-check-input" @checked($data->actions->contains($action)) name="actions[]" type="checkbox" value="{{$action->id}}" id="id_{{$action}}">
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
