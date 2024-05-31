<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;


class StudentController extends Controller
{
    public function index()
    {
        //mendapatkan data student dari database
            $students =  Student::all();

        // panggil view dan kirim data ke view
        return view('admin.contents.student.index', [
            'students' => $students
        ]);
    }

    public function create()
    {
        return view('admin.contents.student.create');
    }

    // method untuk menyimpan data student
    public function store(Request $request)
    {
        //validasi data yang diterima
        $request->validate([
            'name'  => 'required',
            'nim'   => 'required|numeric',
            'major' => 'required',
            'class' => 'required'
        ]);

        // menyimpan data student ke database
        Student::create([
            'name'  => $request->name,
            'nim'   => $request->nim,
            'major' => $request->major,
            'class' => $request->class
        ]);

        // redirect ke halaman student index
        return redirect('/admin/student')->with('pesan', 'Berhasil menambahkan data');

    }

    // method untuk menampilkan halaman edit
    public function edit($id){
        // cari data student berdasarkan id
       $student = Student::find($id); // SELECT * FROM students WHERE id = $id;   
    
       // kirim student ke view edit
        return view('admin.contents.student.edit', [ 'student' => $student]);
    }

    // method update
    public function update($id, Request $request){
        // Cari data student berdasarkan id
        $student = Student::find($id); 
        $request->validate([
            'name' => 'required',
            'nim' => 'required|numeric',
            'major' => 'required',
            'class' => 'required',
        ]);


        $student->update([
            'name' => $request->name,
            'nim' => $request->nim,
            'major' => $request->major,
            'class' => $request->class,
        ]);

        return redirect('/admin/student')->with('pesan','Berhasil edit data.');


    }

    // method delete
    public function destroy($id){
        $student = Student::find($id); //DELETE FROM student WHERE id=$id;
        $student->delete();

        // Arahkan ke halaman student index
        return redirect('/admin/student')->with('pesan','Berhasil hapus data.');
    }

}
