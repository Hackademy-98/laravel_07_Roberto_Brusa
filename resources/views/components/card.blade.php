<div class="col-4">
    <div class="card" style="width: 18rem;">
        <img src="{{Storage::url($data->img)}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$data->name}}</h5>
            <p class="card-text">{{$data->description}}</p>
            <a href="{{route('rule.show',compact('data'))}}" class="btn btn-primary">apri</a>
            <a href="{{route('rule.edit',compact('data'))}}" class="btn btn-warning">modifica</a>    
            <button id="{{$data->id}}" class="btn btn-danger button-monster-delete">elimina</button>
        </div>
    </div>
</div>
<div class="container-fluid posizione-div-delete d-none" id="delete-{{$data->id}}">
    <div class="row justify-content-center">
        <div class="col-3">
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