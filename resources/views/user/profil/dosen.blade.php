@extends('user.layout')
@section('content')

<head>
    <title>Dosen Pengajar D3 Teknik Informatika</title>
    <link rel="stylesheet" href="{{ url ('user/css/box.css') }}">
</head>

<div class="container-xxl py-6">
    <div class="container mt-50 mb-80">
        <div class="text-center mx-auto mb-5 wow fadeInUp">
            <h1 class="text-dark mb-4">Dosen Pengajar D3 Teknik Informatika</h1>
        </div>

        <div class="row g-0 team-items">
            @foreach($data_dosen as $data)
            <div class="col-lg-3 col-md-6 wow fadeInUp">
                <div class="team-item position-relative">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ url('storage/profile/'.$data->user_picture) }}" alt="">                    
                    </div>
                    <div class="bg-light text-center p-4" style="height: 150px; justify-content: center; align-items: center;">
                        <h5 class="text-dark mb-4">{{ $data->user_name }}</h5>
                        <span>{{ $data->user_email }}</span>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</div>

@endsection