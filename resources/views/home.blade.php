@extends('layouts.app')

@section('content')




    <section class="container my-5">
        <h3 class="text-center">Artikel Terkait</h3>
        <ul class="list-group w-75 mx-auto">
            <li class="list-group-item">SAY GOODBYE TO HIPERPIGMENTATION</li>
            <li class="list-group-item">5 RESEP ALAMI MASKER WAJAH</li>
            <li class="list-group-item">BULU MATA LENTIK DENGAN LASHTIQUE</li>
            <li class="list-group-item">KOREAN STYLE GLASS SKIN FACE</li>
            <li class="list-group-item">MAKE-UP FOR BROWN SKIN</li>
            <li class="list-group-item">LONG LASTING HIGHLIGHTER</li>
            <li class="list-group-item">PAC SATIN MATTE LIP CREAM</li>
        </ul>
    </section>

    <section class="container text-center my-5">
        <h2>Suasana di Salon Kami</h2>
        <p>Nikmati kenyamanan dan layanan terbaik di salon kami dengan suasana yang elegan dan modern.</p>
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="{{ asset('images/salon-interior.jpg') }}" alt="Salon Interior" class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6 text-start">
                <h4>Kenapa Memilih Kami?</h4>
                <ul class="list-unstyled">
                    <li>💆‍♀️ Ruangan nyaman dan ber-AC</li>
                    <li>💇‍♂️ Alat modern dan higienis</li>
                    <li>✨ Tim profesional & berpengalaman</li>
                    <li>🕯️ Suasana tenang untuk relaksasi</li>
                </ul>
            </div>
        </div>
    </section>


@endsection



