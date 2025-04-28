<!-- Data Tables -->
<link href="{{ asset('bo/css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">

<script src="{{ asset('bo/js/plugins/dataTables/datatables.min.js') }}"></script>

<!-- Page-Level Scripts -->
<script>
    if ($('#data-table').length == 0) {
        $('.dataTable').dataTable();
    }
</script>