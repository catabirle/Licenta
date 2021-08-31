@extends('layouts.user')
@section('content')
<div class="card">
    <div class="card-header">
        
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Contact">
                <thead>
                    <tr>
                        <th>
                            {{ trans('cruds.contact.fields.id') }}
                        </th>

                        <th>
                            {{ trans('cruds.contact.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.contact.fields.email') }}
                        </th>

                        <th>
                            {{ trans('cruds.contact.fields.phone') }}
                        </th>
                        <th>
                            {{ trans('cruds.contact.fields.series') }}
                        </th>
                        <th>
                            {{ trans('cruds.contact.fields.message') }}
                        </th>
                        <th>
                            {{ trans('cruds.contact.fields.accept') }}
                        </th>
                        <th>
                            {{ trans('cruds.contact.fields.price') }}
                        </th>
                        <th>
                            {{ trans('cruds.contact.fields.date_from') }}
                        </th>
                        <th>
                            {{ trans('cruds.contact.fields.date_to') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contacts as $key => $contact)

                    <tr data-entry-id="{{ $contact->id }}">
                        <td>
                            {{ $contact->id ?? '' }}
                        </td>

                        <td>
                            {{ $contact->name ?? '' }}
                        </td>
                        <td>
                            {{ $contact->email ?? '' }}
                        </td>
                        <td>
                            {{ $contact->phone ?? '' }}
                        </td>
                        <td>
                            {{ $contact->series ?? '' }}
                        </td>
                        <td>
                            {{ $contact->message ?? '' }}
                        </td>
                        <td>
                            {{ $contact->accept ?? '' }}
                        </td>
                        <td>
                            {{ $contact->price ?? '' }}
                        </td>
                        <td>
                            {{ $contact->date_from ?? '' }}
                        </td>
                        <td>
                            {{ $contact->date_to ?? '' }}
                        </td>
                        <td>

                            <a class="btn btn-xs btn-primary" href="{{ route('user.contact.show',  $contact->id) }}">
                                Vizualizeaza
                            </a>
                            

                        </td>

                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>




@endsection
@section('scripts')
@parent
<script>
    $(function() {
        let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
        $.extend(true, $.fn.dataTable.defaults, {
            orderCellsTop: true,
            order: [
                [1, 'desc']
            ],
            pageLength: 100,
        });
        let table = $('.datatable-Contact:not(.ajaxTable)').DataTable({
            buttons: dtButtons
        })
        $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
            $($.fn.dataTable.tables(true)).DataTable()
                .columns.adjust();
        });

    })
</script>
@endsection