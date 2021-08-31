@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.contact.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.contacts.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="id_user">{{ trans('cruds.contact.fields.id_user') }}</label>
                <input class="form-control {{ $errors->has('id_user') ? 'is-invalid' : '' }}" type="text" name="id_user" id="id_user" value="{{ old('id_user', '') }}" required>
                @if($errors->has('id_user'))
                <div class="invalid-feedback">
                    {{ $errors->first('id_user') }}
                </div>
                @endif
                <span class="help-block">{{ trans('cruds.contact.fields.name_helper') }}</span>
            </div>

            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.contact.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                <div class="invalid-feedback">
                    {{ $errors->first('name') }}
                </div>
                @endif
                <span class="help-block">{{ trans('cruds.contact.fields.name_helper') }}</span>
            </div>

            <div class="form-group">
                <label class="required" for="phone">{{ trans('cruds.contact.fields.phone') }}</label>
                <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="intiger" name="phone" id="phone" value="{{ old('phone', '') }}" required>
                @if($errors->has('phone'))
                <div class="invalid-feedback">
                    {{ $errors->first('phone') }}
                </div>
                @endif
                <span class="help-block">{{ trans('cruds.contact.fields.phone_helper') }}</span>
            </div>

            <div class="form-group">
                <label class="required" for="email">{{ trans('cruds.contact.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email" value="{{ old('email', '') }}" required>
                @if($errors->has('email'))
                <div class="invalid-feedback">
                    {{ $errors->first('email') }}
                </div>
                @endif
                <span class="help-block">{{ trans('cruds.contact.fields.email_helper') }}</span>
            </div>

            <div class="form-group">
                <label class="required" for="series">{{ trans('cruds.contact.fields.series') }}</label>
                <input class="form-control {{ $errors->has('series') ? 'is-invalid' : '' }}" type="text" name="series" id="series" value="{{ old('series', '') }}" required>
                @if($errors->has('series'))
                <div class="invalid-feedback">
                    {{ $errors->first('series') }}
                </div>
                @endif
                <span class="help-block">{{ trans('cruds.contact.fields.series_helper') }}</span>
            </div>

            <div class="form-group">
                <label class="required" for="message">{{ trans('cruds.contact.fields.message') }}</label>
                
                <textarea class="form-control {{ $errors->has('message') ? 'is-invalid' : '' }}" type="text" name="message"  id="message" value="{{ old('message','') }}" required></textarea>
                @if($errors->has('message'))
                <div class="invalid-feedback">
                    {{ $errors->first('message') }}
                </div>
                @endif
                <span class="help-block">{{ trans('cruds.contact.fields.message_helper') }}</span>
            </div>

            <div class="form-group">
                <label class="required" for="date_from">{{ trans('cruds.contact.fields.date_from') }}</label>
                <input class="form-control date {{ $errors->has('date_from') ? 'is-invalid' : '' }}" type="text" name="date_from" id="date_from" value="{{ old('date_from') }}" required>
                @if($errors->has('date_from'))
                <div class="invalid-feedback">
                    {{ $errors->first('date_from') }}
                </div>
                @endif
                <span class="help-block">{{ trans('cruds.contact.fields.date_from_helper') }}</span>
            </div>


            <div class="form-group">
                <label class="required" for="date_to">{{ trans('cruds.contact.fields.date_to') }}</label>
                <input class="form-control date {{ $errors->has('date_to') ? 'is-invalid' : '' }}" type="text" name="date_to" id="date_to" value="{{ old('date_to') }}" required>
                @if($errors->has('date_to'))
                <div class="invalid-feedback">
                    {{ $errors->first('date_to') }}
                </div>
                @endif
                <span class="help-block">{{ trans('cruds.contact.fields.date_to_helper') }}</span>
            </div>

            <div class="form-group">
                <label class="required" for="price">{{ trans('cruds.contact.fields.price') }}</label>
                <input class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" type="text" name="price" id="price" value="{{ old('price','') }}" required>
                @if($errors->has('price'))
                <div class="invalid-feedback">
                    {{ $errors->first('price') }}
                </div>
                @endif
                <span class="help-block">{{ trans('cruds.contact.fields.price_helper') }}</span>
            </div>

            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection