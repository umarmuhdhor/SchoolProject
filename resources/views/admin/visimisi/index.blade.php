@extends('admin/layout.main')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <h5 class="card-title fw-semibold mb-4">Visi Misi
                            <a href="{{ route('adminVisimisi.create') }}"><span
                                    class="btn btn-outline-primary mx-3 ">Tambahkan Misi</span></a>
                        </h5>
                        @foreach ($visimisi as $item)
                            <div class="col-md-12 mb-3">
                                <div class="card d-flex flex-row align-items-center" style="padding-right: 10px">
                                    <div class="card-body">
                                        <h2><span style="text-transform: capitalize;">
                                                    {{ $item->judul }}</span></h2>
                                        <p style="text-align: justify;text-justify: inter-word;hyphens: auto;">
                                            {{ $item->misi }}
                                        </p>
                                    </div>
                                    <div class="ml-auto"> <!-- Menempatkan tombol edit di sisi kanan (ml-auto) -->
                                        <form action="{{ route('adminVisimisi.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
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
