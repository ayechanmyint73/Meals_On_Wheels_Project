@extends('Users.Member.layouts.app')

@section('title', 'Give Feedback')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Give Feedback for Order #{{ $order->id }}</div>

                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('feedback.store') }}">
                        @csrf
                        <input type="hidden" name="order_id" value="{{ $order->id }}">

                        <div class="form-group row mb-3">
                            <label for="rating" class="col-md-4 col-form-label text-md-right">Rating</label>
                            <div class="col-md-6">
                                <select id="rating" name="rating" class="form-control" required>
                                    <option value="">Select a rating</option>
                                    <option value="5">5 - Excellent</option>
                                    <option value="4">4 - Very Good</option>
                                    <option value="3">3 - Good</option>
                                    <option value="2">2 - Fair</option>
                                    <option value="1">1 - Poor</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="comments" class="col-md-4 col-form-label text-md-right">Comments</label>
                            <div class="col-md-6">
                                <textarea id="comments" name="comments" class="form-control" rows="4"></textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit Feedback
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection