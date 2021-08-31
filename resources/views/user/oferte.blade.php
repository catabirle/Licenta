@extends('layouts.user')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('cruds.oferta.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Oferta">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.oferta.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.oferta.fields.city_from') }}
                        </th>
                        <th>
                            {{ trans('cruds.oferta.fields.date_from') }}
                        </th>
                        <th>
                            {{ trans('cruds.oferta.fields.city_to') }}
                        </th>
                        <th>
                            {{ trans('cruds.oferta.fields.date_to') }}
                        </th>
                        <th>
                            {{ trans('cruds.oferta.fields.adults') }}
                        </th>
                        <th>
                            {{ trans('cruds.oferta.fields.children') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($oferte as $key => $oferta)
                    <tr data-entry-id="{{ $oferta->id }}">
                        <td>

                        </td>
                        <td>
                            {{ $oferta->id ?? '' }}
                        </td>
                        <td>
                            {{ $oferta->city_from->name ?? '' }}
                        </td>
                        <td>
                            {{ $oferta->date_from ?? '' }}
                        </td>
                        <td>
                            {{ $oferta->city_to->name ?? '' }}
                        </td>
                        <td>
                            {{ $oferta->date_to ?? '' }}
                        </td>
                        <td>
                            {{ $oferta->adults ?? '' }}
                        </td>
                        <td>
                            {{ $oferta->children ?? '' }}
                        </td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="form-group text-center">
                <button class="btn btn-success btn-submit">Accept</button>
            </div>
        </div>
    </div>
</div>
@endsection
