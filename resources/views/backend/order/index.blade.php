@extends('layouts.app')

@section('content')
<div class="card radius-15">
    <div class="card-header border-bottom-0">
        <div class="d-flex align-items-center">
            <div>
                <h5 class="mb-0">Orders</h5>
            </div>
            <div class="ml-auto">
                <a href="{{route('dashboard')}}" class="btn btn-white radius-15">Back</a>
            </div>
        </div>
    </div>
    <div class="p-0 card-body">
        <div class="table-responsive">
            <table class="table mb-0">
                <thead>
                    <tr>
                        <th class="text-center">SL</th>
                        <th class="text-center">User</th>
                        <th class="text-center">Shipping</th>
                        <th class="text-center">Order Total</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($order as $key => $item )
                    <tr>
                        <td class="text-center">{{$key + 1}}</td>
                        <td class="text-center">{{$item->user_id}}</td>
                        <td class="text-center">{{$item->shipping_id}}</td>
                        <td class="text-center">{{$item->order_total}}</td>
                        <td class="text-center">{{$item->status == 0 ? "Pending":"success"}}</td>
                        <td width="33%" class="text-center" style=" display: flex; width: 100%; justify-content: center;">
                            <a href="{{route('order.show', $item->id)}}" class="float-left btn btn-primary btn-sm ">
                                show
                            </a>
                            {{-- <a href="{{route('product.edit', $product->id)}}"><i class="fadeIn animated bx bx-edit-alt" ></i></a> --}}
                            {{-- <form action="{{route('products.destroy', $product->id)}}", method="POST" class="ml-3">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm "><i class="fas fa-trash"></i> Delete</button>
                            </form> --}}
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
