@extends('front')

@section('content')
<div class="row">
    @foreach ($menus as $menu)
    <div class="card mx-2 mb-2" style="width: 18rem;">

        <img src="{{ asset('gambar/'.$menu->gambar) }}" class="card-img-top" alt="..." style="width: 16rem" height= 150px>

        <div class="card-body">
            <h5 class="card-title">{{ $menu->menu }}</h5>
            <p class="card-text">{{ $menu->deskripsi }}</p>
            <h5 class="card-title">{{ $menu->harga }}</h5>
            <a href="#" class="btn btn-outline-primary">Beli</a>
        </div>
    </div>
    @endforeach
    
</div>
@endsection
