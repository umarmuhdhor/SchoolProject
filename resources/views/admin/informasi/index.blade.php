@extends('admin/layout.main')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <h5 class="card-title fw-semibold mb-4">Informasi
                        <a href="{{ route('adminInformasi.create') }}"><span class="btn btn-outline-primary mx-3">Tambah Data
                                Informasi</span></a>
                    </h5>
                    @foreach ($informasi as $item)
                        <div class="col-md-12 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->judul }} || {{ $item->tujuan }}</h5>
                                    <p class="card-text">{{ substr($item->isiInformasi, 0, 500) }}...</p>
                                    <div class="ml-auto" style="display: flex;flex-direction: row">
                                        <a href="{{ route('adminInformasi.edit', $item->idInformasi) }}" class="btn btn-primary"
                                            style="margin-right: 10px">Edit - > belom</a>
                                        <form action="{{ route('adminInformasi.destroy', $item->idInformasi) }}" method="POST">
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
@endsection

<style>
    /* Tambahkan gaya CSS berikut */
    @media (max-width: 576px) {

        .card-title,
        .card-text,
        .btn {
            text-align: justify;
        }

        .mt-3 {
            margin-top: 10px;
            /* Sesuaikan sesuai kebutuhan */
        }
    }
</style>
