   {{csrf_field()}}
                    <div class="row">
                    
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input type="text" value="{{isset($row)? $row->name: ''}}" class="form-control" name="name">
                          {{$errors->first('name')}}

             @error('name')
            <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
            </span>
            @enderror
                        </div>
                      </div>


                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email address</label>
                          <input type="email" value="{{isset($row)? $row->email: ''}}"  class="form-control" name="email">
                          {{$errors->first('email')}}
             @error('email')
            <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
            </span>
           
                        </div>

                      </div>



                        
           {{$errors->first('phone')}}
            <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
            </span>
            @enderror
                        </div>
                      </div>

                          <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">message</label>
                          <input type="Phone" value="{{isset($row)? $row->message: ''}}"  class="form-control" name="message">
                          {{$errors->first('message')}}
             @error('message')
            <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
            </span>
            @enderror
                        </div>
                      </div>

                          <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">phone</label>
                          <input type="Phone" value="{{isset($row)? $row->phone: ''}}"  class="form-control" name="phone">
                          {{$errors->first('phone')}}
             @error('message')
            <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
            </span>
            @enderror
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">password</label>
                          <input type="password" class="form-control" name="password" class="form-control @error('password') is-invalid @enderror">
{{$errors->first('password')}}
                          @error('password')
            <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
            </span>
            @enderror
                        </div>
                      </div>

                      
                       @php $input = "image"; @endphp
    <div class="col-md-6">
        <div >
            <label >upload image</label>
            <input type="file" name="photo">
            @error($input)
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
             </span>
            @enderror
        </div>
    </div>


                    </div>
