@extends('guru/layout.main')
@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title fw-semibold mb-7">
                Anda telah menyelesaikan latihan ini sebelumnya. Jika ingin membukanya kembali, mohon berikan alasan dan
                kirimkan permintaan untuk membuka kembali latihan.
            </h4>
            <form class="forms-sample" method="POST" action="{{ route('adminalasan.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label for="alasan">alasan</label>
                    <textarea class="form-control" name="alasan" rows="8" placeholder="Isi alasan">{{ old('alasan') }}</textarea>
                    @error('alasan')
                        <label for="alasan" class="text-danger">{{ $message }}</label>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary mr-2" fdprocessedid="ff1kyw">Simpan</button>
            </form>
        </div>
    </div>
@endsection
