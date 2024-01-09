@extends('admin/layout.main')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Tambahkan Data Murid </h5>
            <form class="forms-sample" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="role" value="murid">

                <div class="form-group mb-3">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" name="name" placeholder="Nama Murid"
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
                    <label for="tempatLahir">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempatLahir" placeholder="Tempat Lahir"
                        value="{{ old('tempatLahir') }}">
                    @error('tempatLahir')
                        <label for-"tempatLahir" class="text-danger">{{ $message }}</label>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="tanggalLahir">Tanggal Lahir</label>
                    <input id="tanggalLahir" class="form-control" type="date" name="tanggalLahir" value="{{old('tanggalLahir')}}" required
                        autocomplete="username" placeholder="tanggalLahir"/>
                    <x-input-error :messages="$errors->get('tanggalLahir')" class="mt-2" />
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
                    <label for="exampleInputUsername1">Agama</label>
                    <select name="agama" class="form-control">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Khonghucu">Khonghucu</option>
                    </select>
                    {{-- @error('mapel_id')
                        <label for="name" class="text-danger">{{ $$message }}</label>
                    @enderror --}}
                </div>

                <div class="form-group mb-3">
                    <label for="tanggalPenerimaan">Tanggal Penerimaan</label>
                    <input id="tanggalPenerimaan" class="form-control" type="date" name="tanggalPenerimaan" value="{{old('tanggalPenerimaan')}}" required
                        autocomplete="username" placeholder="tanggalPenerimaan"/>
                    <x-input-error :messages="$errors->get('tanggalPenerimaan')" class="mt-2" />
                </div>

                <div class="form-group mb-3">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" name="alamat" placeholder="Alamat Murid"
                        value="{{ old('alamat') }}">
                    @error('alamat')
                        <label for-"alamat" class="text-danger">{{ $message }}</label>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="password">Password</label>

                    <input id="password" class="form-control" type="password" name="password" required
                        autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <input type="hidden" name="role" value="Murid">

                <!-- Confirm Password -->
                <div class="form-group mb-3">
                    <label for="password_confirmation">Konfirmasi Password</label>

                    <input id="password_confirmation" class="form-control" type="password"
                        name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="form-group mb-3">
                    <label for="foto">Foto Siswa

                    </label>
                    <input type="file" class="form-control" name="foto" placeholder="Foto" value="{{ old('foto') }}"
                        accept="image/png, image/jpeg">
                    @error('foto')
                        <label for-"foto" class="text-danger">{{ $message }}</label>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary mr-2" fdprocessedid="ff1kyw">Simpan</button>
                <a href="{{ url('adminMurid') }}" class="btn btn-light" fdprocessedid="s74qgr">Batal</button>
            </form>
        </div>
    </div>
@endsection
