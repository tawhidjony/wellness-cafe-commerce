@extends('layouts.app')

@section('content')
<div class="card radius-15">
    <div class="card-header border-bottom-0">
        <div class="d-flex align-items-center">
            <div>
                <h5 class="mb-0">Product</h5>
            </div>
            <div class="ml-auto">
                <a href="{{route('category.create')}}" class="btn btn-white radius-15">Create category</a>
            </div>
        </div>
    </div>
    <div class="p-0 card-body">
        <div class="table-responsive">
            <table class="table mb-0">
                <thead>
                    <tr>
                        <th class="text-center">SL</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($categoryList as $key => $category )
                    <tr>
                        <td width="33%" class="text-center">{{$key + 1}}</td>
                        <td width="33%" class="text-center">{{$category->name}}</td>
                        <td width="33%" class="text-center" style=" display: flex; width: 100%; justify-content: center;">
                            {{-- <a href="{{route('categorys.edit', $category->id)}}" class="float-left btn btn-primary btn-sm ">
                                <i class="far fa-edit"></i>
                                Edit
                            </a> --}}
                            <a href="{{route('category.edit', $category->id)}}"><i class="fadeIn animated bx bx-edit-alt" ></i></a>
                            {{-- <form action="{{route('categorys.destroy', $category->id)}}", method="POST" class="ml-3">
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
