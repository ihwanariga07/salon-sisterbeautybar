@extends('layouts.app')

@section('title', 'Kontak Kami - Salon SisterBeautyBar')

@section('content')



<div class="container mt-5">
    <h2 class="text-center fw-bold mb-4">Kontak Kami</h2>
    <p class="text-center text-muted">Hubungi kami untuk informasi lebih lanjut atau reservasi.</p>

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card shadow-sm p-4">
                <h4 class="fw-bold">Informasi Kontak</h4>
                <p><strong>Alamat:</strong> jl. tengku nyak makam, pango raya, ulee kareng, banda aceh</p>
                <p><strong>Email:</strong> sisterbeautybar@gmail.com</p>
                <p><strong>Telepon:</strong> +62 857-8189-5050</p>
                <p><strong>Jam Operasional:</strong> Senin - Sabtu, 10:00 - 22:00</p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow-sm p-4">
                <h4 class="fw-bold">Kirim Pesan</h4>
                <form action="{{ route('kontak.kirim') }}" method="POST">
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
                    <button type="submit" class="btn btn-dark">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
