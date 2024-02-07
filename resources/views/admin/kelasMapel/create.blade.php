@extends('admin/layout.main')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Pengajar Perkelas</h5>
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" method="POST" action="{{ route('adminSesuaikanPengajar.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="idKelas">Kelas</label>
                                    <select class="form-control" name="idKelas">
                                        <option value="" selected disabled>Select Kelas</option>
                                        @foreach ($kelas as $item)
                                            <option value="{{ $item->idKelas }}">{{ $item->namaKelas }}</option>
                                        @endforeach
                                    </select>
                                    @error('idKelas')
                                        <label for="idKelas" class="text-danger">{{ $message }}</label>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="mapelGuru">Mapel Guru</label>
                                    <select name="idMapelGuru" class="form-control">
                                        <option value="" selected disabled>Select Mapel Guru</option>
                                        @foreach ($guru as $item)
                                            <option value="{{ $item['idMapelGuru'] }}">
                                                {{ $item->mapel->mataPelajaran }} - {{ $item->guru->nama }} - {{ $item->periode->tahunPeriode }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary mr-2" fdprocessedid="ff1kyw">Simpan</button>
                                <a href="{{ url('adminMapel') }}" class="btn btn-light"
                                    fdprocessedid="s74qgr">Batal</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
