<div class="form-body">
    <div class="form-row">
        <div class="col-md-8">
            <div class="form-group">
                <label>Name</label>
                <div class="input-group">
                    <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" id="input-10"
                        name="name" placeholder="name"
                        value="@if($addCategory->name){{$addCategory->name}}@else{{old('name')}}@endif">
                </div>
                @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
            </div>

        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Upload Thumbanill</label>
                <div class="input-group">
                    <input type="file" class="form-control {{ $errors->has('photo') ? ' is-invalid' : '' }}" id="input-10"
                        name="photo" value="@if($addCategory->photo){{$addCategory->photo}}@else{{old('photo')}}@endif">
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
