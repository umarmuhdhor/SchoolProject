@extends('guru/layout.main')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <h5 class="card-title fw-semibold mb-4">{{ $kelas->guru->nama }}</h5>
                        </div>
                        <div class="col-md-4 text-center">
                            <h5 class="card-title fw-semibold ">{{ $kelas->namaKelas }}</h5>
                            <p class="card-text mb-4">{{ $kelas->periode->tahunPeriode }}</p>
                        </div>
                        <div class="col-md-4 text-end">
                            <h5 class="card-title fw-semibold mb-4">{{ $jumlahMurid }}</h5>
                        </div>

                        {{-- <div class="row"> --}}
                        @if ($dataMurids)
                            @foreach ($dataMurids as $item)
                                <div class="col-md-12 mb-3">
                                    <div class="card d-flex flex-row align-items-center" style="padding-right: 10px">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $item->nama }}</h5>
                                        </div>
                                        <div class="ml-auto">
                                            <form action="{{ route('adminKelasMurid.destroy', $item->idKelasMurid) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Keluarkan</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif



                        {{-- </div> --}}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
