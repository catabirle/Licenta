@extends('layouts.user')
@section('content')

<div class="card">
    <div class="card-header">
        Vizualizeaza {{ trans('cruds.contact.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ url()->previous() }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.contact.fields.id') }}
                        </th>
                        <td>
                            {{ $contact->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contact.fields.id_user') }}
                        </th>
                        <td>
                            {{ $contact->id_user }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contact.fields.name') }}
                        </th>
                        <td>
                            {{ $contact->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contact.fields.email') }}
                        </th>
                        <td>
                            {{ $contact->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contact.fields.phone') }}
                        </th>
                        <td>
                            {{ $contact->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contact.fields.series') }}
                        </th>
                        <td>
                            {{ $contact->series }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contact.fields.message') }}
                        </th>
                        <td>
                            {{ $contact->message }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contact.fields.date_from') }}
                        </th>
                        <td>
                            {{ $contact->date_from }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contact.fields.date_to') }}
                        </th>
                        <td>
                            {{ $contact->date_to }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contact.fields.price') }}
                        </th>
                        <td>
                            {{ $contact->price }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contact.fields.accept') }}
                        </th>
                        <td>
                            {{ $contact->accept }}
                        </td>
                    </tr>

                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ url()->previous() }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection