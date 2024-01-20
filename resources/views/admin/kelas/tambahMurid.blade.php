@extends('admin/layout.main')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="card-title fw-semibold mb-4">Tambahkan Siswa</h5>
                        </div>
                        <div class="col-md-6 text-end">
                            <h5 class="card-title fw-semibold mb-4">{{ $jumlahMurid }}</h5>
                        </div>
                        {{-- <div class="row"> --}}
                            @foreach ($muridNoKelas as $item)
                            <div class="col-md-12 mb-3">
                                <div class="card d-flex flex-row align-items-center" style="padding-right: 10px">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $item['nama'] }}</h5>
                                        <p class="card-text">{{ $item['idMurid'] }}</p>
                                    </div>
                                    <div class="ml-auto">
                                        <!-- Form untuk mengirim data idMurid dan idKelas ke route adminKelasMurid.create -->
                                        <form action="{{ route('adminKelasMurid.store') }}" method="post">
                                            @csrf
                                            <!-- Input hidden untuk menyimpan nilai idMurid dan idKelas -->
                                            <input type="hidden" name="idMurid" value="{{ $item['idMurid'] }}">
                                            <input type="hidden" name="idKelas" value="{{ $idKelas }}">
                                            <input type="hidden" name="status" value="aktif">

                                            <!-- Tombol submit untuk mengirimkan form -->
                                            <button type="submit" class="btn btn-success">Tambahkan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                        {{-- </div> --}}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
