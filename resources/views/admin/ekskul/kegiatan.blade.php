@extends('admin/layout.main')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <h5 class="card-title fw-semibold mb-4">Kegiatan Ekskul
                            <a href="{{ route('adminKegiatanEkskul.show', $idEkskul) }}"><span
                                    class="btn btn-outline-primary mx-3 ">Tambah
                                    Kegiatan</span></a>
                        </h5>
                        {{-- <div class="row"> --}}
                        @if ($kegiatan)
                            @foreach ($kegiatan as $item)
                                <div class="col-md-12 mb-3">
                                    <div class="card d-flex flex-row align-items-center" style="padding-right: 10px">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $item->judulKegiatan }}</h5>
                                            {{-- <p class="card-text">{{ $item->periode->tahunPeriode }} ||
                                                {{ $item->periode->semester }}</p> --}}
                                        </div>
                                        <div class="ml-auto" style="display: flex;flex-direction: row">
                                            <a href="{{ route('adminKegiatanEkskul.edit', $item->id) }}" class="btn btn-primary"
                                                style="margin-right: 10px">Edit</a>
                                            <form action="{{ route('adminKegiatanEkskul.destroy', $item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <h3>Belum ada kegiatan</h3>
                        @endif

                        {{-- </div> --}}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
