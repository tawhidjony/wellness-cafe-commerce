@extends('layouts.app')

@section('content')
<div class="card radius-15">
    <div class="card-header border-bottom-0">
        <div class="d-flex align-items-center">
            <div>
                <h5 class="mb-0">Product</h5>
            </div>
            <div class="ml-auto">
                <a href="{{route('product.create')}}" class="btn btn-white radius-15">Create Product</a>
            </div>
        </div>
    </div>
    <div class="p-0 card-body">
        <div class="table-responsive">
            <table class="table mb-0">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        {{-- <th class="text-center">Action</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @forelse($productList as $key => $product )
                    <tr>
                        <td>
                            <div class="bg-transparent border product-img">
                                <img src="{{URL::to($product->photo)}}" width="35" alt="">
                            </div>
                        </td>
                        <td >{{$product->title}}</td>
                        <td >{{$product->price}}</td>
                        <td width="33%"  style=" display: flex; width: 100%; justify-content: center;"> 
                    
                        </td>
                    </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="my-3 text-center">No Items Available</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
