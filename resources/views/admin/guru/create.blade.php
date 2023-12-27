@extends('admin/layout.main')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Tambahkan Data Guru </h5>
            <form class="forms-sample" method="POST" action="{{ route('adminGuru.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama Guru"
                        value="{{ old('nama') }}">
                    @error('nama')
                        <label for-"nama" class="text-danger">{{ $message }}</label>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="noHp">Nomor Hp</label>
                    <input type="text" class="form-control" name="noHp" placeholder="Nomor Hp"
                        value="{{ old('noHp') }}">
                    @error('noHp')
                        <label for-"noHp" class="text-danger">{{ $message }}</label>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="Email" class="form-control" name="email" placeholder="Isi email"
                        value="{{ old('email') }}">
                    @error('email')
                        <label for-"email" class="text-danger">{{ $message }}</label>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputUsername1">Jenis Kelamin</label>
                    <select name="fakultas_id" class="form-control">
                        <option value="lk">Laki-laki</option>
                        <option value="pr">Perempuan</option>
                    </select>
                    {{-- @error('fakultas_id')
                        <label for="nama" class="text-danger">{{ $$message }}</label>
                    @enderror --}}
                </div>


                {{-- <div class="form-group">
                    <label for="exampleInputUsername1">Bidang</label>
                    <select name="fakultas_id" class="form-control">
                        @foreach ($fakultas as $item)
                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
                    @error('fakultas_id')
                        <label for="nama" class="text-danger">{{ $$message }}</label>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputUsername1">Kelas</label>
                    <select name="fakultas_id" class="form-control">
                        @foreach ($fakultas as $item)
                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
                    @error('fakultas_id')
                        <label for="nama" class="text-danger">{{ $$message }}</label>
                    @enderror
                </div> --}}

{{--
                <div class="form-group">
                    <label for="exampleInputUsername1">Status</label>
                    <select name="fakultas_id" class="form-control">
                        @foreach ($fakultas as $item)
                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
                    @error('fakultas_id')
                        <label for="nama" class="text-danger">{{ $$message }}</label>
                    @enderror
                </div> --}}

                <div class="form-group mb-3">
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" class="form-control" name="deskripsi" placeholder="Nomor Hp"
                        value="{{ old('deskripsi') }}">
                    @error('deskripsi')
                        <label for-"deskripsi" class="text-danger">{{ $message }}</label>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="foto">Thumbnail

                    </label>
                    <input type="file" class="form-control" name="foto" placeholder="Foto"
                        value="{{ old('foto') }}" accept="image/png, image/jpeg">
                    @error('foto')
                        <label for-"foto" class="text-danger">{{ $message }}</label>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary mr-2" fdprocessedid="ff1kyw">Simpan</button>
                <a href="{{ url('email') }}" class="btn btn-light" fdprocessedid="s74qgr">Batal</button>
            </form>
        </div>
    </div>
@endsection
