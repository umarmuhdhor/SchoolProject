{{-- @extends('layout.main')
@section('content')
    <!--welcome-hero start -->
    <section id="home" class="welcome-hero2">
        <div class="container">
            <div class="welcome-hero-txt2">
                <h2>
                    Tentang Sekolah
                </h2>
            </div>
        </div>
    </section><!--/.welcome-hero-->
    <!--welcome-hero end -->
    <div class="container">
        <div
            style="display: flex; justify-content: space-between; background-color: #f7f7f7; padding: 20px; border-radius: 10px; margin-top: 20px;">
            <div>
                <img src="/path/to/school-logo.png" alt="Logo"
                    style="width: 80px; height: 80px; border-radius: 50%; vertical-align: middle;">
            </div>
            <div style="text-align: center;">
                <h2 style="font-size: 28px; font-weight: bold;">{{ $sekolah[0]->alamat }}</h2>
            </div>
            <div>
                <img src="/path/to/school-logo.png" alt="Logo"
                    style="width: 80px; height: 80px; border-radius: 50%; vertical-align: middle;">
            </div>
        </div>

        <div style="background-color: #f7f7f7; padding: 20px; border-radius: 10px; margin-top: 20px; text-align: left;">
            <div style="display: flex; justify-content: space-between; background-color: #f7f7f7;">
                <p style="margin: 10px 0; color: #333; font-size: 18px;">Alamat </p>
                <p style="margin: 10px 0; color: #333; font-size: 18px;">{{ $sekolah[0]->alamat }}</p>
            </div>
            <div style="display: flex; justify-content: space-between; background-color: #f7f7f7;">
                <p style="margin: 10px 0; color: #333; font-size: 18px;">Kelurahan </p>
                <p style="margin: 10px 0; color: #333; font-size: 18px;">{{ $sekolah[0]->kelurahan }}</p>
            </div>
            <div style="display: flex; justify-content: space-between; background-color: #f7f7f7;">
                <p style="margin: 10px 0; color: #333; font-size: 18px;">Kecamatan </p>
                <p style="margin: 10px 0; color: #333; font-size: 18px;">{{ $sekolah[0]->kecamatan }}</p>
            </div>
            <div style="display: flex; justify-content: space-between; background-color: #f7f7f7;">
                <p style="margin: 10px 0; color: #333; font-size: 18px;">Kota </p>
                <p style="margin: 10px 0; color: #333; font-size: 18px;">{{ $sekolah[0]->kota }}</p>
            </div>
            <div style="display: flex; justify-content: space-between; background-color: #f7f7f7;">
                <p style="margin: 10px 0; color: #333; font-size: 18px;">Provinsi </p>
                <p style="margin: 10px 0; color: #333; font-size: 18px;">{{ $sekolah[0]->kodePos }}</p>
            </div>
            <div style="display: flex; justify-content: space-between; background-color: #f7f7f7;">
                <p style="margin: 10px 0; color: #333; font-size: 18px;">Nomor </p>
                <p style="margin: 10px 0; color: #333; font-size: 18px;">{{ $sekolah[0]->nomorTelpon }}</p>
            </div>
            <div style="display: flex; justify-content: space-between; background-color: #f7f7f7;">
                <p style="margin: 10px 0; color: #333; font-size: 18px;">Email </p>
                <p style="margin: 10px 0; color: #333; font-size: 18px;">{{ $sekolah[0]->email }}</p>
            </div>
            <div style="display: flex; justify-content: space-between; background-color: #f7f7f7;">
                <p style="margin: 10px 0; color: #333; font-size: 18px;">Tahun Berdiri </p>
                <p style="margin: 10px 0; color: #333; font-size: 18px;">{{ $sekolah[0]->tahunBerdiri }}</p>
            </div>
            <div style="display: flex; justify-content: space-between; background-color: #f7f7f7;">
                <p style="margin: 10px 0; color: #333; font-size: 18px;">Akredetasi</p>
                <p style="margin: 10px 0; color: #333; font-size: 18px;">{{ $sekolah[0]->akredetasi }}</p>
            </div>
        </div>
    </div>
@endsection --}}
