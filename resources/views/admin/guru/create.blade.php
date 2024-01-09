@extends('admin/layout.main')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Tambahkan Data Guru </h5>
            <form class="forms-sample" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" name="name" placeholder="Nama Guru"
                        value="{{ old('name') }}">
                    @error('name')
                        <label for-"name" class="text-danger">{{ $message }}</label>
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
                    <input id="email" class="form-control" type="email" name="email" value="{{old('email')}}" required
                        autocomplete="username" placeholder="Email"/>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="form-group mb-3">
                    <label for="password">Password</label>

                    <input id="password" class="form-control" type="password" name="password" required
                        autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <input type="hidden" name="role" value="guru">

                <!-- Confirm Password -->
                <div class="form-group mb-3">
                    <label for="password_confirmation">Konfirmasi Password</label>

                    <input id="password_confirmation" class="form-control" type="password"
                        name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="form-group mb-3">
                    <label for="exampleInputUsername1">Jenis Kelamin</label>
                    <select name="jk" class="form-control">
                        <option value="lk">Laki-laki</option>
                        <option value="pr">Perempuan</option>
                    </select>
                    {{-- @error('mapel_id')
                        <label for="name" class="text-danger">{{ $$message }}</label>
                    @enderror --}}
                </div>

                <div class="form-group mb-3">
                    <label for="exampleInputUsername2">Status</label>
                    <select name="status" class="form-control">
                        <option value="aktif">aktif</option>
                        <option value="nonAktif">tidak aktif</option>
                    </select>
                    {{-- @error('mapel_id')
                        <label for="name" class="text-danger">{{ $$message }}</label>
                    @enderror --}}
                </div>

                <div class="form-group mb-3">
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi"
                        value="{{ old('deskripsi') }}">
                    @error('deskripsi')
                        <label for-"deskripsi" class="text-danger">{{ $message }}</label>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="foto">Thumbnail

                    </label>
                    <input type="file" class="form-control" name="foto" placeholder="Foto" value="{{ old('foto') }}"
                        accept="image/png, image/jpeg">
                    @error('foto')
                        <label for-"foto" class="text-danger">{{ $message }}</label>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary mr-2" fdprocessedid="ff1kyw">Simpan</button>
                <a href="{{ url('adminGuru') }}" class="btn btn-light" fdprocessedid="s74qgr">Batal</button>
            </form>
        </div>
    </div>
@endsection
