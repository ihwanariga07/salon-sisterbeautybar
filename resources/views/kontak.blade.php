@extends('layouts.app')

@section('title', 'Kontak Kami - Sister Beauty Bar')

@section('content')
<div class="container mt-5">
    <h2 class="text-center">Kontak Kami</h2>
    <p class="text-center">Hubungi kami untuk layanan terbaik!</p>

    <div class="row">
        <div class="col-md-6">
            <h4>Informasi Kontak</h4>
            <p><strong>Alamat:</strong> Jl. Tengku Nyak Makam, Kec. Ulee Kareng, Pango Raya, Banda Aceh</p>
            <p><strong>Email:</strong> sisterbeautybar@gmail.com</p>
            <p><strong>Telepon:</strong> +62 812 3456 5050</p>
            <p><strong>Jam Operasional:</strong> 10:00 - 22:00 WIB <p>Minggu Tutup</p></p>

        </div>

        <div class="col-md-6">
            <h4>Kirim Pesan</h4>
            <form action="{{ route('contact.index') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Pesan</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
        </div>
    </div>
</div>
<br><br>
@endsection
