<div class="col-6">

    <div class="card" style="width: 18rem;">
        <img src="{{Storage::url($data->img)}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$data->name}}</h5>
            <p class="card-text">{{$data->description}}</p>
            <a href="{{route('rule.show',compact('data'))}}" class="btn btn-primary">apri</a>
            <a href="{{route('rule.edit',compact('data'))}}" class="btn btn-warning">modifica</a>
            <form action="{{route('rule.delete',compact('data'))}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">elimina</button>
            </form>
        </div>
    </div>
</div>