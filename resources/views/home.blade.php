@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                <form action="{{ route('category.store') }}" method="POST">
                @csrf
                    <div class="form-group">
                      <label for="">Category Name</label>
                      <input type="text" name="name" id="" class="form-control" placeholder="name" aria-describedby="helpId">
                    </div>

                    <button type="submit" class="btn btn-sm btn-danger">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
