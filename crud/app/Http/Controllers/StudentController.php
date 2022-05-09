<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Show Table
     */
    public function index()
    {
        $datas = Student::all();
        return view('student.index', [
            'datas' => $datas
        ]);
    }

    /**
     * View Form
     */
    public function form()
    {
        return view('student.form');
    }

    /**
     * Add Student Data
     */
    public function addData(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required | unique:students',
            'cell' => 'required | unique:students',
            'username' => 'required | unique:students'
        ]);

        /**
         * Image Setting
         */

         if($request->hasFile('photo')){
            $image = $request->file('photo');
            $photo_name = md5(time().rand()).'.'.$image->getClientOriginalExtension();
            $image->move(public_path('media/student/'), $photo_name);
         }
         else{
            $photo_name = '';
         }

       Student::create([
          'name' => $request->name,
          'email' => $request->email,
          'cell' => $request->cell,
          'username' => $request->username,
          'photo' => $photo_name

       ]);

       return redirect()->back()->with('success', 'Student Data inserted successful!');
    }

    public function view($id)
    {
        $find_student = Student::find($id);
        return view('student.view', [
           'value' => $find_student 
        ]);
    }

    /**
     * Delete Data
     */
    public function delete($id)
    {
        $delete_id = Student::find($id);
        $delete_id->delete();
        return redirect()->back()->with('success', 'Stduent Data Deleted successful!');

    }
    /**
     * Edit Data
     */
    public function edit($id)
    {
        $find_student = Student::find($id);
        return view('student.edit', [
            'data' => $find_student
        ]);
    }

    /**
     * Update Data
     */
    public function update(Request $request, $id)
    {
        if($request->hasFile('new_photo')){
            $image = $request->file('new_photo');
            $photo_name = md5(time().rand()).'.'.$image->getClientOriginalExtension();
            $image->move(public_path('media/student/'), $photo_name);
            unlink('media/student/'.$request->old_photo);
        }
        else{
            $photo_name = $request->old_photo;
        }


        $update = Student::find($id);

        $update->name = $request->name;
        $update->email = $request->email;
        $update->cell = $request->cell;
        $update->username = $request->username;
        $update->photo = $photo_name;

        $update->update();
        return redirect()->back()->with('success', 'Data Updated Successful!');

    }
}
