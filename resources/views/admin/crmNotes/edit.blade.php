@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.edit') }} {{ trans('cruds.crmNote.title_singular') }}
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route("admin.crm-notes.update", [$crmNote->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group {{ $errors->has('created_by') ? 'has-error' : '' }}">
                            <label class="required" for="created_by_id">{{ trans('cruds.crmNote.fields.created_by') }}</label>
                            <select class="form-control select2" name="created_by_id" id="created_by_id" required>
                                @foreach($created_bies as $id => $entry)
                                    <option value="{{ $id }}" {{ (old('created_by_id') ? old('created_by_id') : $crmNote->created_by->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('created_by'))
                                <span class="help-block" role="alert">{{ $errors->first('created_by') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.crmNote.fields.created_by_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('note') ? 'has-error' : '' }}">
                            <label class="required" for="note">{{ trans('cruds.crmNote.fields.note') }}</label>
                            <textarea class="form-control" name="note" id="note" required>{{ old('note', $crmNote->note) }}</textarea>
                            @if($errors->has('note'))
                                <span class="help-block" role="alert">{{ $errors->first('note') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.crmNote.fields.note_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('customer') ? 'has-error' : '' }}">
                            <label class="required" for="customer_id">{{ trans('cruds.crmNote.fields.customer') }}</label>
                            <select class="form-control select2" name="customer_id" id="customer_id" required>
                                @foreach($customers as $id => $entry)
                                    <option value="{{ $id }}" {{ (old('customer_id') ? old('customer_id') : $crmNote->customer->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('customer'))
                                <span class="help-block" role="alert">{{ $errors->first('customer') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.crmNote.fields.customer_helper') }}</span>
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