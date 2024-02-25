@extends('admin/layout.main')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <h5 class="card-title fw-semibold mb-4">Berita
                            <a href="{{ route('adminBerita.create') }}"><span class="btn btn-outline-primary mx-3 ">Tambah
                                    Berita</span></a>
                        </h5>
                        @foreach ($berita as $item)
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="fotoBerita/{{ $item->thumbnail }}" class="card-img-top" alt="..."
                                        width="20" height="230">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $item->judulBerita }}</h5>
                                        <p class="card-text">{{ substr($item->sinopsis, 0, 150) }}...</p>
                                        <div class="ml-auto" style="display: flex;flex-direction: row">
                                            <a href="{{ route('adminBerita.edit', $item->idBerita) }}"
                                                class="btn btn-primary" style="margin-right: 5px">Edit</a>
                                            <form action="{{ route('adminBerita.destroy', $item->idBerita) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
