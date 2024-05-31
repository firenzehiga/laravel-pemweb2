@extends('admin.main')

@section('content')
    <div class="pagetitle">
        <h1>Edit Student</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                <li class="breadcrumb-item"><a href="/admin/student">Student</a></li>
                <li class="breadcrumb-item active">Edit Student</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="card">
            <div class="card-body p-3">
                <form action="/admin/courses/update/{{ $courses->id }}" method="post" class="mt-3">
                    @csrf
                    @method('PUT')
                    <div class="mb-2">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $courses->name ?? '' }}">
                    </div>

                    <div class="mb-2">
                        <label for="nim" class="form-label">Category</label>
                        <input type="text" name="category" id="category" class="form-control" value="{{ $courses->category ?? '' }}">
                    </div>

                    <div class="mb-2">
                        <label for="nim" class="form-label">Description</label>
                        <textarea name="desc" id="desc" cols="30" rows="10" class="form-control">{{$courses->desc}}</textarea>
                    </div>

                    <div class="mb-4">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="/admin/courses/" class="btn btn-danger">Kembali</a>

                    </div>
                </form>

            </div>
        </div>
    </section>
@endsection
