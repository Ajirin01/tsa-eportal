<?php

namespace App\Http\Controllers\MyParent;
use App\Http\Controllers\Controller;
use App\Repositories\StudentRepo;
use Illuminate\Support\Facades\Auth;
use App\Models\LearningMaterial;
use App\Models\MyClass;


class MyController extends Controller
{
    protected $student;
    public function __construct(StudentRepo $student)
    {
        $this->student = $student;
    }

    public function children()
    {
        $data['students'] = $this->student->getRecord(['my_parent_id' => Auth::user()->id])->with(['my_class', 'section'])->get();

        return view('pages.parent.children', $data);
    }

    public function learningMaterials($class_id){
        $materials = LearningMaterial::where('my_class_id', $class_id)->get();
        return view('pages.parent.materials', ['materials'=> $materials]);
    }

}