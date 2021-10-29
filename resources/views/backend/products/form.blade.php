<div class="form-body">
    <div class="form-row">
        <div class="form-group col-md-8">
            <label>Name</label>
            <div class="input-group">
                <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" id="input-10"
                    name="name" placeholder="Enter Role Name"
                    value="@if($addProduct->name){{$addProduct->name}}@else{{old('name')}}@endif">
            </div>
            @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif
        </div>
    </div>
</div>
