@extends('layouts.user')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('Offers history') }} 
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Trip">
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
                
            </table>
        </div>
    </div>
</div>



@endsection
