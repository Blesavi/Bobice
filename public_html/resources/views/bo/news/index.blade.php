@extends('bo.layout.app')
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Novosti</h2>
        </div>
        <div class="col-lg-2">
        </div>
    </div>
    @if ($errors->has('message'))
        <div class="alert alert-success">
            {{ $errors->first('message') }}
        </div>
    @endif
    <div class="row main_view_wraper">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-content p-xl">
                    <div class="row m-b-lg">
                        <a href="{{ route('news.create') }}" class="btn btn-primary m-r-md">CREATE NEWS</a>
                    </div>
                    <div class="row table-responsive">
                        <table id="data-table" class="table table-striped table-bordered table-hover our-data-table dataTable">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Text</th>
                                <th>Category</th>
                                <th>Created at</th>
                                <th class="nosort"></th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    @include('bo.layout.datatablescript')
    <script>
        $(function() {
            $('#data-table').DataTable({
                processing: true,
                serverSide: true,
                paging: true,
                autoWidth: true,
                {{--ajax: '{!! route('news.index', $ajaxParams) !!}',--}}
                ajax: '{!! route('news.index') !!}',
                columns: [
                    { data: 'title', name: 'title'},
                    { data: 'text', name: 'text'},
                    { data: 'category', name: 'category'},
                    { data: 'created_at', name: 'created_at'},
                    { data: 'action', name: 'action', orderable: false, searchable: false }
                ]
            });
        });
    </script>
@endsection
