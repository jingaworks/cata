@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Company form</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-lg-12">
                        
                            
                            <form method="POST" action="{{ route('customer.edit') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nume Firma') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="@if(old('name')){{ old('name') }}@else{{ $customer->name }}@endif" required @if($customer->confirmed)disabled @endif>

                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="cui" class="col-md-4 col-form-label text-md-right">{{ __('CUI/CIF') }}</label>

                                    <div class="col-md-6">
                                        <input id="cui" type="text" class="form-control{{ $errors->has('cui') ? ' is-invalid' : '' }}" name="cui" value="@if(old('cui')){{ old('cui') }}@else{{ $customer->cui }}@endif" required @if($customer->confirmed)disabled @endif>

                                        @if ($errors->has('cui'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('cui') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Numar Telefon') }}</label>

                                    <div class="col-md-6">
                                        <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="@if(old('phone')){{ old('phone') }}@else{{ $customer->phone }}@endif" required>

                                        @if ($errors->has('phone'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                

                                <div class="form-group row">
                                    <label for="region" class="col-md-4 col-form-label text-md-right">{{ __('Judet') }}</label>

                                    <div class="col-md-6">
                                        <input id="region" type="text" class="form-control{{ $errors->has('region') ? ' is-invalid' : '' }}" name="region" value="@if(old('region')){{ old('region') }}@else{{ $customer->region }}@endif" required>

                                        @if ($errors->has('region'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('region') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="place" class="col-md-4 col-form-label text-md-right">{{ __('Localitate') }}</label>

                                    <div class="col-md-6">
                                        <input id="place" type="text" class="form-control{{ $errors->has('place') ? ' is-invalid' : '' }}" name="place" value="@if(old('place')){{ old('place') }}@else{{ $customer->place }}@endif" required>

                                        @if ($errors->has('place'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('place') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Adresa') }}</label>

                                    <div class="col-md-6">
                                        <textarea id="address" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" required>@if(old('address')){{ old('address') }}@else{{ $customer->address }}@endif</textarea>

                                        @if ($errors->has('address'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('address') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Editeaza Firma') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
