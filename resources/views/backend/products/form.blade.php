<div class="form-body">
    <div class="form-row">
        <div class="col-md-8">

            <div class="form-group">
                <label>Name</label>
                <div class="input-group">
                    <input type="text" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" id="input-10"
                        name="title" placeholder="Title"
                        value="@if($addProduct->title){{$addProduct->title}}@else{{old('title')}}@endif">
                </div>
                @if ($errors->has('title'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group">
                <label>Category</label>
                <div class="input-group">
                    <select name="category_id" id="" class="form-control">
                        <option value="">Select Category</option>
                        @foreach ($allCategory as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
                @if ($errors->has('category_id'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('category_id') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label>Quantity</label>
                <div class="input-group">
                    <input type="text" class="form-control {{ $errors->has('quantity') ? ' is-invalid' : '' }}" id="input-10"
                        name="quantity" placeholder="Quantity"
                        value="@if($addProduct->quantity){{$addProduct->quantity}}@else{{old('quantity')}}@endif">
                </div>
                @if ($errors->has('quantity'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('quantity') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group">
                <label>Price</label>
                <div class="input-group">
                    <input type="text" class="form-control {{ $errors->has('price') ? ' is-invalid' : '' }}" id="input-10"
                        name="price" placeholder="Price"
                        value="@if($addProduct->price){{$addProduct->price}}@else{{old('price')}}@endif">
                </div>
                @if ($errors->has('price'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('price') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group">
                <label>Price</label>
                <div class="input-group">
                   <textarea name="product_details" id="" cols="30" rows="3" class="form-control"></textarea>
                </div>
                @if ($errors->has('product_details'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('product_details') }}</strong>
                </span>
                @endif
            </div>

        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Upload Thumbanill</label>
                <div class="input-group">
                    <input type="file" class="form-control {{ $errors->has('photo') ? ' is-invalid' : '' }}" id="input-10"
                        name="photo" value="@if($addProduct->photo){{$addProduct->photo}}@else{{old('photo')}}@endif">
                </div>
                @if ($errors->has('photo'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('photo') }}</strong>
                </span>
                @endif
            </div>
        </div>
    </div>
</div>
