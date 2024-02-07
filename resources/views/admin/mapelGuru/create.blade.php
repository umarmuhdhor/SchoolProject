@extends('admin/layout.main')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Sesuaikan Pengajar</h5>
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" method="POST" action="{{ route('adminMapelGuru.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="exampleInputUsername1">Mapel</label>
                                    <select name="idMapel" class="form-control">
                                        @foreach ($mapel as $item)
                                            <option value="{{ $item->idMapel }}">{{ $item->mataPelajaran }} || kelas : {{$item->kelas}}</option>
                                        @endforeach
                                    </select>
                                    {{-- @error('fakultas_id')
                                        <label for="nama" class="text-danger">{{ $$message }}</label>
                                    @enderror --}}
                                </div>

                                <div class="form-group mb-3">
                                    <label for="exampleInputUsername1">Guru Pengajar</label>
                                    <select name="idGuru" class="form-control">
                                        @foreach ($guru as $item)
                                            <option value="{{ $item->idGuru }}">{{ $item->nama }}</option>
                                        @endforeach
                                    </select>
                                    {{-- @error('fakultas_id')
                                        <label for="nama" class="text-danger">{{ $$message }}</label>
                                    @enderror --}}
                                </div>

                                <div class="form-group mb-3">
                                    <label for="exampleInputUsername1">Periode</label>
                                    <select name="idPeriode" class="form-control">
                                        @foreach ($periode as $item)
                                            <option value="{{ $item->idPeriode }}">{{ $item->tahunPeriode }} semester
                                                {{ $item->semester }}</option>
                                        @endforeach
                                    </select>
                                    {{-- @error('fakultas_id')
                                        <label for="nama" class="text-danger">{{ $$message }}</label>
                                    @enderror --}}
                                </div>

                                <button type="submit" class="btn btn-primary mr-2" fdprocessedid="ff1kyw">Simpan</button>
                                <a href="{{ url('adminMapelGuru') }}" class="btn btn-light"
                                    fdprocessedid="s74qgr">Batal</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
