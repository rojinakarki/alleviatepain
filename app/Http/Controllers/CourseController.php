<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Course;

class CourseController extends Controller
{

    public function index()
    {
        $courses = Course::all();
        return view('courses.index',compact('courses'));
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(StoreCourseRequest $request)
    {
        Course::create($request->validated());
//       $attachment = new Attachment();
//       $course ->attachment()->save($attachment);
        return redirect()->route('courses.index');


//        $courses = Course::create([
//           'course_title'=> $validated['course_title'],
//           'course_description'=> $validated['course_description'],
//           'course_category'=> $validated['course_category'],
//           'course_type'=> $validated['course_type'],
//           'course_cost'=> $validated['course_cost'],
//           'course_duration'=> $validated['course_duration'],
//           'sets'=> $validated['sets'],
//           'reps'=> $validated['reps'],
//           ]);
//        $courses->attachment()->save($courses);


    }

    public function show(Course $course)
    {
        return view('courses.show',compact('course'));
    }

    public function edit(Course $course)
    {
        return view('courses.edit',compact('course'));
    }

    public function update(UpdateCourseRequest $request, Course $course)
    {
        $course->update($request->validated());
        return redirect()->route('courses.index');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('courses.index');
    }
}
