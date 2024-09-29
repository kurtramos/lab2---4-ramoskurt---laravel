{{-- resources/views/admin/cars/create.blade.php or edit.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ isset($car) ? 'Edit Car' : 'Add New Car' }}</h1>
    <form action="{{ isset($car) ? route('cars.update', $car->id) : route('cars.store') }}" method="POST">
        @csrf
        @if(isset($car))
            @method('PUT')
        @endif

        <div class="form-group">
            <label for="brand">Brand</label>
            <input type="text" class="form-control" id="brand" name="brand" required value="{{ $car->brand ?? '' }}">
        </div>
        <div class="form-group">
            <label for="series">Series</label>
            <input type="text" class="form-control" id="series" name="series" required value="{{ $car->series ?? '' }}">
        </div>
        <div class="form-group">
            <label for="color">Color</label>
            <input type="text" class="form-control" id="color" name="color" required value="{{ $car->color ?? '' }}">
        </div>
        <div class="form-group">
            <label for="price_per_day">Price Per Day</label>
            <input type="text" class="form-control" id="price_per_day" name="price_per_day" required value="{{ $car->price_per_day ?? '' }}">
        </div>
        <div class="form-group">
            <label for="details">Details</label>
            <textarea class="form-control" id="details" name="details" required>{{ $car->details ?? '' }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">{{ isset($car) ? 'Update' : 'Add' }}</button>
    </form>
</div>
@endsection
