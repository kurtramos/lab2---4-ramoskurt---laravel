{{-- resources/views/admin/cars/index.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-3">Car Listings</h1>
    <a href="{{ route('cars.create') }}" class="btn btn-primary mb-3">Add New Car</a>
    <div class="row">
        @foreach ($cars as $car)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $car->brand }} - {{ $car->series }}</h5>
                        <p class="card-text">{{ $car->color }} - ${{ $car->price_per_day }} per day</p>
                        <p class="card-text">{{ $car->details }}</p>
                        <a href="{{ route('cars.edit', $car->id) }}" class="btn btn-info">Edit</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
