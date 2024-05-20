@extends('admin.main')

@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Datatables</h5>
        <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable. Check for <a href="https://fiduswriter.github.io/simple-datatables/demos/" target="_blank">more examples</a>.</p>

        <table class="table datatable">
            <thead>
            <tr>
                <th>No</th>
                <th>Kode Pasien</th>
                <th>Nama Pasien</th>
                <th>Tgl Lahir</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($list_pasien as $pasien )
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pasien->kode }}</td>
                    <td>{{ $pasien->nama }}</td>
                    <td>{{ $pasien->tgl_lahir }}</td>
                    <td>
                        <a href="">View</a>|<a href="">Edit</a>|<a href="">Delete</a>
                    </td>
                </tr>   
                @endforeach
        
            </tbody>
        </table>
    
    </div>
</div>


    @endsection