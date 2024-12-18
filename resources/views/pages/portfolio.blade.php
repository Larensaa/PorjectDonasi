@extends('layouts.home')

@section('title')
    Portopolio | Donation
@endsection

@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Portopolio</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Portfolio</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-xxl py-8">
        <div class="container">
            <div class="text-center mx-auto mb-3 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Portopolio</div>
                <h4 class="display-6 mb-5">Mari Kenali Kami</h4>
            </div>
            <div class="row g-5 justify-content-center align-items-center">
                @foreach($portfolio as $item)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative rounded overflow-hidden d-flex flex-column align-items-center">
                        <div class="overflow-hidden mb-3">
                            <img class="img-fluid img-thumbnail" src="{{ asset('storage/' . $item->image) }}" alt="" style="border-radius: 10%; max-width: 100%; height: auto;">
                        </div>
                        <div class="team-text bg-light text-center p-1 mt-1">
                            <h5>{{ $item->nama }}</h5>
                            <h6>{{ $item->nim }} | {{ $item->role }}</h6>
                            <p class="text-primary">{{ $item->description }}</p>
                            <div class="team-social text-center mt-2">
                                <a class="btn btn-square" href="{{ $item->link }}"><i class="fab fa-github"></i></a>
            
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div> <!-- Tutup row -->
        </div>
    </div>
@endsection
