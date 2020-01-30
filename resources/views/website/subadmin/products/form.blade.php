{{ csrf_field() }}
@php $input = "name"; @endphp
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control @error('name') is-invalid @enderror" name="name"  required autocomplete="name" autofocus value="{{ isset($row) ? $row->{$input} : '' }}">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

 @php $input = "color"; @endphp
                            <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('color') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="color"  required autocomplete="name" autofocus value="{{ isset($row) ? $row->{$input} : '' }}">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
@php $input = "details"; @endphp
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('details') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="details"  required autocomplete="email" value="{{ isset($row) ? $row->{$input} : '' }}">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
@php $input = "image"; @endphp
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('image') }}</label>

                            <div class="col-md-6">
                                <input  type="file" class="form-control @error('password') is-invalid @enderror" name="image"  autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>

  @php $input = "category_id"; @endphp                      <!---->
                            <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">category</label>

                            <div class="col-md-6">
                                <select name="category_id" class="form-control">
                         @foreach($categories as $type)
                                <option value="{{ $type->id }}" {{ isset($row) && $row->{$input} == $type->id ? 'selected'  :'' }}>{{ $type->name }}</option>
                @endforeach
            </select>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>
 @php $input = "price"; @endphp  
<!---->
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('price') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="number" class="form-control" name="price" required autocomplete="new-password" value="{{ isset($row) ? $row->{$input} : '' }}">
                            </div>
                        </div>