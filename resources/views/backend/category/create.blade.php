
@extends('layouts.app')
@section('title','users | ')
@section('content')
    <div class="card radius-15">
        <div class="card-header border-bottom-0">
            <div class="d-flex align-items-center">
                <div>
                    <h5 class="mb-0">Add New Product</h5>
                </div>
                <div class="ml-auto">
                    <a href="{{route('category.index')}}" class="btn btn-white radius-15">Back</a>
                </div>
            </div>
            <hr/>
        </div>
        <div class="px-4 card-body">
            <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @include('backend.category.form')
                <button type="submit" class="float-right px-5 btn btn-primary">create</button>
            </form>
        </div>
    </div>
@endsection
