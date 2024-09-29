{{-- resources/views/user/cars/index.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-3">Available Cars for Rent</h1>
    <div class="row">
        @foreach ($cars as $car)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ $car->image }}" alt="{{ $car->brand }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ $car->brand }} - {{ $car->series }}</h5>
                        <p class="card-text">{{ $car->details }}</p>
                        <a href="{{ route('cars.show', $car->id) }}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
