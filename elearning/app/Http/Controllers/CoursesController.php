<?php

namespace App\Http\Controllers;
use App\Models\Courses;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index()
    {
    //mendapatkan data student dari database
        $courses =  Courses::all();

    // panggil view dan kirim data ke view
    return view('admin.contents.courses.index', [
        'courses' => $courses
    ]);
    }

    public function create()
    {
        return view('admin.contents.courses.create');
    }

    // method untuk menyimpan data student
    public function store(Request $request)
    {
        //validasi data yang diterima
        $request->validate([
            'name'       => 'required',
            'category'   => 'required',
            'desc'       => 'required',
        ]);

        // menyimpan data student ke database
        Courses::create([
            'name'       => $request->name,
            'category'   => $request->category,
            'desc'       => $request->desc,
        ]);

        // redirect ke halaman student index
        return redirect('/admin/courses')->with('pesan', 'Berhasil menambahkan data');

    }

    // method untuk menampilkan halaman edit
    public function edit($id){
        // cari data student berdasarkan id
       $course = Courses::find($id); // SELECT * FROM students WHERE id = $id;   
    
       // kirim student ke view edit
        return view('admin.contents.courses.edit', [ 'courses' => $course]);
    }

    // method update
    public function update($id, Request $request){
        // Cari data student berdasarkan id
        $course = Courses::find($id); 
        $request->validate([
            'name'       => 'required',
            'category'   => 'required',
            'desc'       => 'required',
        ]);


        $course->update([
            'name'       => $request->name,
            'category'   => $request->category,
            'desc'       => $request->desc,
        ]);

        return redirect('/admin/courses')->with('pesan','Berhasil edit data.');


    }

    // method delete
    public function destroy($id){
        $course = Courses::find($id); //DELETE FROM student WHERE id=$id;
        $course->delete();

        // Arahkan ke halaman student index
        return redirect('/admin/courses')->with('pesan','Berhasil hapus data.');
    }
}
