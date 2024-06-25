@extends('admin.main')

@section('content')
<div class="pagetitle">
    <h1>Courses</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
            <li class="breadcrumb-item">Pages</li>
            <li class="breadcrumb-item active">Blank</li>
        </ol>
    </nav>
</div><!-- End Page Title -->


@auth
<section class="section">
    <div class="card">
        <div class="card-body p-3">
            <a href="/admin/courses/create" class="btn btn-primary">+ Courses</a>
          
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Description</th>
                        @if(Auth::user()->role=='administrator')
                        <th>Action</th>
                        @endif
                    </tr>
                    @foreach ($courses as $course)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $course->name }}</td>
                        <td>{{ $course->category }}</td>
                        <td>{{ $course->desc }}</td>
                        @if(Auth::user()->role=='administrator')
                        <td class="d-flex">
                            <a href="/admin/courses/edit/{{ $course->id }}" class="btn btn-warning me-2" >Edit</a>
                            <form action="/admin/courses/delete/{{ $course->id }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger" type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                        @endif
                    </tr>
                    @endforeach
                
                </table>
            </div>
        </div>
    </div>
</section>
@endauth
@endsection