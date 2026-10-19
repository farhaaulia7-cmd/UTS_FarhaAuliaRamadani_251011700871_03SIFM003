@extends('layouts.app')

@section('title', 'Tentang - Toko Tanaman Hias')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm p-4">
        <center><h1 class="mb-4 text-success">Tentang Toko Tanaman Hias</h1>
        <p class="lead">Selamat datang di <strong>Toko Tanaman Hias</strong>! Kami menyediakan berbagai jenis tanaman hias segar, berkualitas, dan siap mempercantik hunian serta ruang kerja Anda.
</p>
    <div class="my-4 text-center">
        <img src="{{ asset('images/toko-tanaman.jpg') }}" class="img-fluid rounded shadow" alt="Suasana Toko Tanaman Hias" style="max-height: 400px; object-fit: cover; width: 100%;">
    </div>

<p>
    Berdiri sejak tahun 2020, kami berkomitmen untuk menghadirkan keindahan alam langsung ke dalam kehidupan sehari-hari Anda. Kami percaya bahwa menghadirkan elemen hijau di dalam ruangan tidak hanya sekadar mempercantik estetika dekorasi, tetapi juga meningkatkan kualitas udara, menurunkan tingkat stres, serta menciptakan suasana lingkungan yang lebih sehat dan menenangkan.
</p>

<p>
    Koleksi kami sangat beragam—mulai dari tanaman indoor penyaring udara, sukulen dan kaktus yang minim perawatan, hingga tanaman hias daun eksotis yang cocok untuk menjadi daya tarik utama sudut rumah Anda. Setiap tanaman yang kami jual telah melewati proses pembibitan dan perawatan yang ketat oleh tim ahli hortikultura kami, guna memastikan tanaman tiba dalam kondisi sehat, bebas hama, dan siap tumbuh subur di tempat Anda.
</p>

<p>
    Tidak hanya menjual tanaman, kami juga berdedikasi untuk mendampingi perjalanan berkebun Anda. Kami siap memberikan konsultasi gratis mengenai pemilihan jenis tanaman yang sesuai dengan intensitas cahaya ruangan Anda, panduan penyiraman, pemupukan, hingga penyediaan perlengkapan berkebun berkualitas tinggi seperti pot dekoratif dan media tanam organik. Mari wujudkan hunian yang asri, hijau, dan penuh energi positif bersama Toko Tanaman Hias!
</p>
    </div>

    <div class="text-center mt-4">
        <a class="btn btn-success" href="{{ url('/') }}">Kembali ke Home</a>
    </div>
</div>
@endsection