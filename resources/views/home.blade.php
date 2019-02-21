@extends('layouts.app')

@section('content')
<div class="container" style="width: 100%;padding: 2%;">
    <!-- <h1>Welcome!</h1>-->
    <!--<table id="example" class="table table-striped table-bordered" style="width:100%">-->
        <table id="example" class="table table-striped table-bordered" data-page-length='10' style="width:100%;">
        <!-- <thead style="background-color: #66b3ff;"> -->
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
            </tr>
            @empty
                <tr>
                    <td>No Hay Usuarios Registrado</td>
                </tr>
            @endforelse
        </tbody>
        <tfoot>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Email</th>
            </tr>
        </tfoot>
    </table>
</div>
@endsection
@section('scripts')   
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"> </script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"> </script>
<script >
    $(document).ready(function() {
    $('#example').DataTable(
        {
            "language": {
                "lengthMenu": "Mostrar:_MENU_",
                "search": "Buscar:",
                "zeroRecords": "Nothing found - sorry",
                "info": "Showing page _PAGE_ of _PAGES_",
                "infoEmpty": "No records available",
                "infoFiltered": "(filtered from _MAX_ total records)",
                "paginate": {
                    "first":      "First",
                    "last":       "Last",
                    "next":       "Siguiente",
                    "previous":   "Anterior"
                }
            }
        });
    } );
</script>
@endsection
