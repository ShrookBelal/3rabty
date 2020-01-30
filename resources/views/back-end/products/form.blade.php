{{ csrf_field() }}
<div class="row">
    @php $input = "name"; @endphp
    <div class="col-md-4">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Product Name</label>
            <input type="text" name="{{ $input }}" value="{{ isset($row) ? $row->{$input} : '' }}"
                   class="form-control @error($input) is-invalid @enderror">
            @error($input)
            <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    @php $input = "text"; @endphp
    <div class="col-md-4">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">text</label>
            <input type="text" name="{{$input}}" value="{{ isset($row) ? $row->{$input} : '' }}"
                   class="form-control @error($input) is-invalid @enderror">
            @error($input)
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
             </span>
            @enderror
        </div>
    </div>
    @php $input = "image"; @endphp
    <div class="col-md-6">
        <div >
            <label >product image</label>
            <input type="file" name="{{$input}}">
            @error($input)
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
             </span>
            @enderror
        </div>
    </div>

    @php $input = "price"; @endphp
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">price</label>
            <input type="number" name="{{$input}}" value="{{ isset($row) ? $row->{$input} : '' }}"
                   class="form-control @error($input) is-invalid @enderror">
            @error($input)
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
             </span>
            @enderror
        </div>
    </div>
    @php $input = "color"; @endphp
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">color</label>
            <input type="text" name="{{$input}}" value="{{ isset($row) ? $row->{$input} : '' }}"
                   class="form-control @error($input) is-invalid @enderror">
            @error($input)
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
             </span>
            @enderror
        </div>
    </div>
    @php $input = "cat_id"; @endphp
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">product Category</label>
            <select name="{{$input}}" class="form-control @error($input) is-invalid @enderror">
              @foreach($categories  as $caegory)
                               <option value="{{ $caegory->id }}" {{ isset($row) && $row->{$input} == $caegory->id ? 'selected'  :'' }}>{{ $caegory->name }}</option>
                           @endforeach
            </select>
            @error($input)
            <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
             </span>
            @enderror
        </div>
    </div>





</div>
