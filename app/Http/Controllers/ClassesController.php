<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClassesRequest;
use App\Http\Requests\UpdateClassesRequest;
use App\Http\Resources\ClassesResource;
use App\Models\Classes;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    public function index(Request $request)
    {
        $classesQuery = Classes::query();

        $this->applySearch($classesQuery, $request->search);

        $classes = ClassesResource::collection(
            $classesQuery->paginate(5)
        );

        return inertia('Classes/Index', [
            'classes' => $classes,
            'search' => $request->search ?? '',
        ]);
    }

    protected function applySearch($query, $search)
    {
        return $query->when($search, function ($query, $search) {
            $query->where('name', 'like', '%' . $search . '%');
        });
    }

    public function create()
    {
        return inertia('Classes/Create');
    }

    public function store(StoreClassesRequest $request)
    {
        Classes::create($request->validated());

        return redirect()->route('classes.index')->with('success', 'Class created successfully!');
    }

    public function edit(Classes $class)
    {
        return inertia('Classes/Edit', [
            'class' => new ClassesResource($class),  // Tidak menggunakan collection jika hanya satu data
        ]);
    }

    public function update(UpdateClassesRequest $request, Classes $class)
    {
        $class->update($request->validated());

        return redirect()->route('classes.index')->with('success', 'Classes updated successfully!');
    }

    public function destroy(Classes $class)
    {
        $class->delete();

        return redirect()->route('classes.index')->with('success', 'Classes deleted Successfully!');
    }
}
