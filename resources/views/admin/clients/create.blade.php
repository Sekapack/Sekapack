@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.create') }} {{ trans('cruds.client.title_singular') }}
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route("admin.clients.store") }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group {{ $errors->has('country') ? 'has-error' : '' }}">
                            <label class="required" for="country">{{ trans('cruds.client.fields.country') }}</label>
                            <input class="form-control" type="text" name="country" id="country" value="{{ old('country', '') }}" required>
                            @if($errors->has('country'))
                                <span class="help-block" role="alert">{{ $errors->first('country') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.client.fields.country_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('company') ? 'has-error' : '' }}">
                            <label class="required" for="company">{{ trans('cruds.client.fields.company') }}</label>
                            <input class="form-control" type="text" name="company" id="company" value="{{ old('company', '') }}" required>
                            @if($errors->has('company'))
                                <span class="help-block" role="alert">{{ $errors->first('company') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.client.fields.company_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
                            <label class="required" for="first_name">{{ trans('cruds.client.fields.first_name') }}</label>
                            <input class="form-control" type="text" name="first_name" id="first_name" value="{{ old('first_name', '') }}" required>
                            @if($errors->has('first_name'))
                                <span class="help-block" role="alert">{{ $errors->first('first_name') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.client.fields.first_name_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                            <label class="required" for="last_name">{{ trans('cruds.client.fields.last_name') }}</label>
                            <input class="form-control" type="text" name="last_name" id="last_name" value="{{ old('last_name', '') }}" required>
                            @if($errors->has('last_name'))
                                <span class="help-block" role="alert">{{ $errors->first('last_name') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.client.fields.last_name_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                            <label class="required" for="phone">{{ trans('cruds.client.fields.phone') }}</label>
                            <input class="form-control" type="text" name="phone" id="phone" value="{{ old('phone', '') }}" required>
                            @if($errors->has('phone'))
                                <span class="help-block" role="alert">{{ $errors->first('phone') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.client.fields.phone_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('skype') ? 'has-error' : '' }}">
                            <label class="required" for="skype">{{ trans('cruds.client.fields.skype') }}</label>
                            <input class="form-control" type="text" name="skype" id="skype" value="{{ old('skype', '') }}" required>
                            @if($errors->has('skype'))
                                <span class="help-block" role="alert">{{ $errors->first('skype') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.client.fields.skype_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            <label class="required" for="email">{{ trans('cruds.client.fields.email') }}</label>
                            <input class="form-control" type="email" name="email" id="email" value="{{ old('email') }}" required>
                            @if($errors->has('email'))
                                <span class="help-block" role="alert">{{ $errors->first('email') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.client.fields.email_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('website') ? 'has-error' : '' }}">
                            <label for="website">{{ trans('cruds.client.fields.website') }}</label>
                            <input class="form-control" type="text" name="website" id="website" value="{{ old('website', '') }}">
                            @if($errors->has('website'))
                                <span class="help-block" role="alert">{{ $errors->first('website') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.client.fields.website_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('text') ? 'has-error' : '' }}">
                            <label for="text">{{ trans('cruds.client.fields.text') }}</label>
                            <input class="form-control" type="text" name="text" id="text" value="{{ old('text', '') }}">
                            @if($errors->has('text'))
                                <span class="help-block" role="alert">{{ $errors->first('text') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.client.fields.text_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('status') ? 'has-error' : '' }}">
                            <label for="status_id">{{ trans('cruds.client.fields.status') }}</label>
                            <select class="form-control select2" name="status_id" id="status_id">
                                @foreach($statuses as $id => $entry)
                                    <option value="{{ $id }}" {{ old('status_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('status'))
                                <span class="help-block" role="alert">{{ $errors->first('status') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.client.fields.status_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('vergi_dairesi') ? 'has-error' : '' }}">
                            <label for="vergi_dairesi">{{ trans('cruds.client.fields.vergi_dairesi') }}</label>
                            <input class="form-control" type="text" name="vergi_dairesi" id="vergi_dairesi" value="{{ old('vergi_dairesi', '') }}">
                            @if($errors->has('vergi_dairesi'))
                                <span class="help-block" role="alert">{{ $errors->first('vergi_dairesi') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.client.fields.vergi_dairesi_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('banka_adi') ? 'has-error' : '' }}">
                            <label for="banka_adi">{{ trans('cruds.client.fields.banka_adi') }}</label>
                            <input class="form-control" type="text" name="banka_adi" id="banka_adi" value="{{ old('banka_adi', '') }}">
                            @if($errors->has('banka_adi'))
                                <span class="help-block" role="alert">{{ $errors->first('banka_adi') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.client.fields.banka_adi_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('banka_iban_no') ? 'has-error' : '' }}">
                            <label for="banka_iban_no">{{ trans('cruds.client.fields.banka_iban_no') }}</label>
                            <input class="form-control" type="text" name="banka_iban_no" id="banka_iban_no" value="{{ old('banka_iban_no', '') }}">
                            @if($errors->has('banka_iban_no'))
                                <span class="help-block" role="alert">{{ $errors->first('banka_iban_no') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.client.fields.banka_iban_no_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">
                                {{ trans('global.save') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>



        </div>
    </div>
</div>
@endsection