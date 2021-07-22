<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Jobs;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class jobsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function createJob()
    {
        return view('portalPages.postJob', ['categories'=>DB::table('categories')->get()]);
    }

    public function storeJob(Request $request)
    {
        $request->validate([
            'title' => 'required|min:5|max:25',
            'description' => 'required|min:10|max:255',
            'company' => 'required|min:3|max:35',
            'category' => 'required',
            'salary' => 'required',
            'email' => 'required|email',
            'published' => 'required',
            'deadline' => 'required'
        ]);

        Jobs::create([
            'user_id' => auth()->user()->id,
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category'),
            'company' => $request->input('company'),
            'salary' => $request->input('salary'),
            'email' => $request->input('email'),
            'published' => $request->input('published'),
            'deadline' => $request->input('deadline')
        ]);

        return redirect('/my_posted_jobs');
    }

    public function jobsView()
    {
        $jobs = User::find(auth()->user()->id)->jobs()->orderBy('published', 'desc')->get();

        return view('portalPages.myJobs', ['jobs'=>$jobs]);
    }

    public function deleteJob($id)
    {
        if(User::find(auth()->user()->id)->jobs()->whereId($id)->exists())
        {
            User::find(auth()->user()->id)->jobs()->whereId($id)->delete();
            return redirect('/my_posted_jobs');
        }
        else
        {
            return 'Sorry, result not found';
        }
    }

    public function my_job_details($id)
    {
        if(User::find(auth()->user()->id)->jobs()->whereId($id)->exists())
        {
            $jobs = User::find(auth()->user()->id)->jobs()->whereId($id)->get();

            return view('portalPages.myJobDetails', ['jobs'=>$jobs]);
        }
        else
        {
            return 'Sorry, result not found';
        }

    }

    public function job_details($id)
    {
        if(Jobs::whereId($id)->exists())
        {
            $jobs = Jobs::whereId($id)->get();

            return view('portalPages.jobDetails', ['jobs'=>$jobs]);
        }
        else
        {
            return 'Sorry, result not found';
        }

    }

    public function editJob($id){
        if(User::find(auth()->user()->id)->jobs()->whereId($id)->exists())

        {
            $job = User::find(auth()->user()->id)->jobs()->whereId($id)->first();
            $category = DB::table('categories')->get();

            return view('portalPages.editJob', [
                'categories'=>$category,
                'jobs' => $job
            ]);
        }
        else
        {
            return 'Sorry, result not found';
        }
    }

    public function updateJob(Request $request, $id)
    {
        Jobs::whereId($id)->first()->update([
            'user_id' => auth()->user()->id,
            'title' => $request->post('title'),
            'description' => $request->post('description'),
            'category_id' => $request->post('category'),
            'company' => $request->post('company'),
            'salary' => $request->post('salary'),
            'email' => $request->post('email'),
            'published' => $request->post('published'),
            'deadline' => $request->post('deadline')
        ]);
        return redirect('/my_posted_jobs');
    }

    public function allJobs()
    {
        $jobs = Jobs::orderBy('published', 'desc')->get();
        $categories = DB::table('categories')->get();
        return view('portalPages.allJobs',['jobs'=>$jobs,
            'categories'=>$categories]);
    }

    public function categoryFilter($id)
    {
        $categories = DB::table('categories')->get();
        return view('portalPages.filteredJobs',['jobs'=>Category::find($id)->jobs()->orderBy('published', 'desc')->get(),
            'categories'=>$categories]);
    }

}
