<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use App\Models\Student;
use Illuminate\View\View;

class StudentController extends Controller
{
    public function index(): View
    {
        $student = Student::paginate(2);
        return view('student.index')->with('student', $student);
    }

    public function create()
    {
        return view('student.create');
    }


    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'img' => 'required| mimes:png,jpg,jpeg,webp',
            'name' => 'required',
            'Idnumber' => 'required',
            'email' => 'required',
            'mobile' => 'required',
        ]);
        if ($request->has("img")) {
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . "_" . $extension;
            $path = public_path('images');
            $file->move($path, $filename);
        }
        $input = $request->all();
        $input["img"] = $filename;
        Student::create($input);

        return redirect()->route('student.index')->with('success', 'New student is added successfully');
    }


    public function show(string $id): View
    {
        $student = Student::find($id);
        return view('student.show')->with('student', $student);
    }


    public function edit(string $id): View
    {
        $student = Student::find($id);
        return view('student.edit')->with('student', $student);
    }


    public function update(Request $request, string $id): RedirectResponse
    {
        $student = Student::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('student')->with('flash_message', 'Info Updated!');
    }


    public function destroy(string $id): RedirectResponse
    {
        Student::destroy($id);
        return redirect('student')->with('flash_message', 'deleted!');
    }
}
