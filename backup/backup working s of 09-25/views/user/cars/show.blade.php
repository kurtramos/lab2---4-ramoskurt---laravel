{{-- resources/views/user/cars/show.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card mb-3">
        <img src="{{ $car->image }}" class="card-img-top" alt="{{ $car->brand }}">
        <div class="card-body">
            <h5 class="card-title">{{ $car->brand }} - {{ $car->series }}</h5>
            <p class="card-text">{{ $car->details }}</p>
            <p class="card-text"><small class="text-muted">Price per day: ${{ $car->price_per_day }}</small></p>
        </div>
    </div>

    <!-- Review Form -->
    <h4>Add Your Review</h4>
    <form action="{{ route('reviews.store') }}" method="POST">
        @csrf
        <input type="hidden" name="car_id" value="{{ $car->id }}">
        <div class="form-group">
            <textarea name="content" class="form-control" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit Review</button>
    </form>

    <!-- List Reviews -->
    <div class="reviews mt-4">
        <h5>Reviews:</h5>
        @foreach ($car->reviews as $review)
            <div class="review">
                <p class="review-content">{{ $review->content }}</p>
                <p class="review-user">By: {{ $review->user->name }}</p>
            </div>
        @endforeach
    </div>
</div>
@endsection
