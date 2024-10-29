@extends ('frontend.layout.app')

@section('content')
    <!-- New Physiotherapy Section -->
    <section class="container my-5">
        <h1 class="text-center mb-5">{{ $data['judul'] }}</h1>
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset($data['gambar']) }}" alt="Physiotherapy session" class="img-fluid rounded mb-3">
            </div>
            <div class="col-md-6">
                {!! $data['isi'] !!}
            </div>
        </div>
    </section>
@endsection
