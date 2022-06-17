<div class="d-grid gap-2 d-md-block m-3 w-100">
    <h2>Categorias de elementos HTML 5</h2>
    @for($i=0; $i<count($categorias); $i++)
        <a href="{{$categorias[$i]["url"]}}" class="btn btn-outline-dark m-3 align-middle gshtml-grid-item" >
                {{$categorias[$i]["nombre"]}}
        </a>
    @endfor
</div>
