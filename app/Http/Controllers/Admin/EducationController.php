<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    //
    public function index()
    {
        $educations = Education::query()->orderBy('id', 'DESC')->get();

        return view('admin.educations.index', compact('educations'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'institution' => 'required',
            'period' => 'required',
        ]);

        $education = new Education();
        $education->institution = $request->input('institution');
        $education->period = $request->input('period');
        $education->degree = $request->input('degree');
        $education->department = $request->input('department');
        $education->save();

        return redirect()->route('admin.educations.index')->with('flash_message', 'Education added successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'institution' => 'required',
            'period' => 'required',
        ]);

        $education = Education::query()->find($id);

        $education->institution = $request->input('institution');
        $education->period = $request->input('period');
        $education->degree = $request->input('degree');
        $education->department = $request->input('department');
        $education->save();

        return redirect()->route('admin.educations.index')->with('flash_message', 'Education updated successfully.');
    }

    public function destroy($id)
    {
        $education = Education::query()->find($id);

        $education->delete();

        return redirect()->route('admin.educations.index')->with('flash_message', 'Education deleted successfully.');
    }

}
