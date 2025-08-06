<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 2;
        if(!empty($keyword)) {
            $skills = Skill::query()->where('name', 'LIKE', "%$keyword%")
                ->orderBy('id', 'DESC')->paginate($perPage);
        } else {
            $skills = Skill::query()->with('service')->orderBy('id', 'DESC')->paginate($perPage);
            $services = Service::all();
        }

        return view('admin.skills.index', compact(['skills', 'services']))->with('1', (request()->input('page', 1) - 1) * $perPage);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'proficiency' => 'required',
        ]);

        $skill = new Skill();
        $skill->name = $request->input('name');
        $skill->proficiency = $request->input('proficiency');
        $skill->service_id = $request->input('service_id');
        $skill->save();

        return redirect()->route('admin.skills.index')->with('flash_message', 'Skill created successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'proficiency' => 'required',
        ]);

        $skill = Skill::query()->find($id);
        $skill->name = $request->input('name');
        $skill->proficiency = $request->input('proficiency');
        $skill->service_id = $request->input('service_id');
        $skill->save();

        return redirect()->route('admin.skills.index')->with('flash_message', 'Skill updated successfully.');
    }

    public function destroy($id)
    {
        $skill = Skill::query()->find($id);

        $skill->delete();

        return redirect()->route('admin.skills.index')->with('flash_message', 'Skill deleted successfully.');
    }

}
