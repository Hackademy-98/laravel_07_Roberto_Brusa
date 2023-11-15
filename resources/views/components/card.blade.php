<div class="col-6">
    <div class="card">
        <div class="card-body d-flex flex-column justify-content-center align-items-center">
            <a href="{{route('rule.show',compact('data'))}}">
                <h2 class="card-title">{{$data->name}}</h5>
            </a>
            <a href="{{route('rule.show',compact('data'))}}">
                <img src="{{Storage::url($data->img)}}" class="card-img-top custom_img" alt="...">
            </a>

            <a href="{{route('rule.filter',$data->category)}}">
                <p>
                    {{$data->category->name}}
                </p>
            </a>

            @auth
                <a href="{{route('rule.edit',compact('data'))}}" class="btn btn-warning">modifica</a>    
                <button id="{{$data->id}}" class="btn btn-danger button-monster-delete">elimina</button>
            @endauth
        </div>
    </div>
</div>
<div class="container-fluid posizione-div-delete d-none" id="delete-{{$data->id}}">
    <div class="row justify-content-center">
        <div class="col-3 d-flex justify-content-center">
            <div class="card posizione-card-delete" style="width: 18rem;">
                <div>
                    <h3 class="prova">vuoi eliminare {{$data->name}} ?</h3>
                </div>
                <div class="d-flex justify-content-around mt-4">
                    <button id="delete-back-{{$data->id}}" class="btn btn-secondary">No</button>
                    <form action="{{route('rule.delete',compact('data'))}}" method="POST" class="d-flex justify-content-between flex-column align-items-center h-100">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Elimina</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>