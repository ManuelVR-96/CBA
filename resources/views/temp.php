<!-- <div class="form-group row">
                            <label for="encargado" class="col-md-4 col-form-label text-md-right">{{ __('Encargado') }}</label>
                            <div class="col-md-6">
                                
                                <select id="encargado" type="text" class="form-control @error('encargado') is-invalid @enderror" name="encargado" value="{{ old('encargado') }}" required autocomplete="encargado" autofocus>
                                <option value="null">--------</option>
                                    @foreach($encargados as $encargado)
                                    <option value="{{$encargado->id}}">{{$encargado->nombres}}</option>
                                    @endforeach()
                                @error('encargado')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </select>
                            </div>
                        </div> -->