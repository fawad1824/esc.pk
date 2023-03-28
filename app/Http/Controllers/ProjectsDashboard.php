<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use App\Models\ProjectsBiddig;
use App\Models\ProjectsDesign;
use App\Models\Services;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class ProjectsDashboard extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    // Commerical
    public function projectCom()
    {
        $projects = Projects::where('is_commerical', '1')->get();
        $title = "Commerical Buildings";
        return view('projects.commerical.index', compact('title', 'projects'));
    }
    public function projectComCreate()
    {
        $title = "Create Commerical Buildings";
        return view('projects.commerical.create', compact('title'));
    }
    public function projectComAdd(Request $request)
    {
        return $this->Project($request);
    }

    // Residentail
    public function residential()
    {
        $title = "Residential Buildings";
        $projects = Projects::where('is_residential', '1')->get();
        return view('projects.residential.index', compact('title', 'projects'));
    }
    public function residentialCreate()
    {
        $title = "Create Residential Buildings";
        return view('projects.residential.create', compact('title'));
    }
    public function residentialAdd(Request $request)
    {
        return $this->Project($request);
    }

    public function Project($request)
    {
        if ($request->id) {
            $projects = Projects::where('id', $request->id)->first();
        } else {
            $projects = new Projects();
        }

        $projects->name = $request->name;
        $projects->types = $request->types;
        $projects->location = $request->location;
        $projects->typeof = $request->typeof;
        $projects->budget = $request->budget;
        $projects->area = $request->area;
        $projects->desc = $request->des;
        $projects->stories = $request->stories;
        $projects->phone = $request->phone;
        $projects->email = $request->email;
        $projects->userName = Auth::user()->name;
        $projects->userID = Auth::user()->id;
        $projects->status = "Biding";
        if ($request->is_commerical) {
            $projects->is_commerical = "1";
            $projects->is_residential = "0";
            $projects->is_maintaning = "0";
            $projects->is_retrofitting = "0";
        }
        if ($request->is_residential) {
            $projects->is_commerical = "0";
            $projects->is_residential = "1";
            $projects->is_maintaning = "0";
            $projects->is_retrofitting = "0";
        }
        if ($request->is_maintaning) {
            $projects->is_commerical = "0";
            $projects->is_residential = "0";
            $projects->is_maintaning = "1";
            $projects->is_retrofitting = "0";
        }
        if ($request->is_retrofitting) {
            $projects->is_commerical = "0";
            $projects->is_residential = "0";
            $projects->is_maintaning = "0";
            $projects->is_retrofitting = "1";
        }
        $projects->save();

        $images = $request->file('design');
        $filenames = [];
        if ($images) {
            foreach ($images as $image) {
                $filename = $image->store('images');
                $filenames[] = $filename;
            }

            $content = new ProjectsDesign();
            $content->document = implode(',', $filenames);
            $content->project_id = $projects->id;
            $content->save();
        }

        if ($request->id) {
            return redirect()->back()->with("message", "Project Update successfully");
        } else {
            return redirect()->back()->with("message", "Project Add successfully");
        }
    }

    public function deleteProject($id)
    {
        $proj = Projects::where('id', $id)->delete();
        return redirect()->back()->with("message", "Project Deleted successfully");
    }
    public function projectedit($id, $is_commerical, $is_residential, $is_maintaning, $is_retrofitting)
    {
        $proj = Projects::where('id', $id)->first();
        $title = "Edit Project";
        return view('projects.commerical.edit', compact('proj', 'title', 'id', 'is_commerical', 'is_residential', 'is_maintaning', 'is_retrofitting'));
    }
    public function projectmaintaning()
    {
        $projects = Projects::where('is_maintaning', '1')->get();
        $title = "Maintaining Projects";
        return view('projects.maintainces.index', compact('title', 'projects'));
    }
    public function projectmaintaningCreate()
    {
        $title = "Create Maintaining Projects";
        return view('projects.maintainces.create', compact('title'));
    }

    public function projectplumbing()
    {
        $projects = Projects::where('is_maintaning', '1')->get();
        $title = "Pumbing Projects";
        return view('projects.pumbing.index', compact('title', 'projects'));
    }
    public function projectplumbingCreate()
    {
        $title = "Create Pumbing Projects";
        return view('projects.pumbing.create', compact('title'));
    }

    public function projectRetrofitting()
    {
        $projects = Projects::where('is_retrofitting', '1')->get();
        $title = "Retrifitting Projects";
        return view('projects.reporfiting.index', compact('title', 'projects'));
    }
    public function projectRetrofittingcreate()
    {
        $title = "Create Retrifitting Projects";
        return view('projects.reporfiting.create', compact('title'));
    }

    public function projectbidding()
    {
        $projects = ProjectsBiddig::with('project', 'user')->where('user_id', Auth::user()->id)->get();
        $title = "Bidding Projects";
        return view('projects.bid.index', compact('title', 'projects'));
    }
    public function myprojectbidding()
    {
        $projects = ProjectsBiddig::with('project', 'user')->where('user_id', Auth::user()->id)->get();
        $title = "My Bidding Projects";
        return view('projects.bid.myindex', compact('title', 'projects'));
    }
    public function profile(Request $request)
    {
        $title = "Profile Update";
        return view('projects.profile', compact('title'));
    }
    public function profileadd(Request $request)
    {
        // return $request->all();
        $user = User::where('id', $request->id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        if ($request->hasFile('prodile')) {
            $file = $request->file('prodile');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $user->profile = $filename;
        }
        $user->save();
        return redirect()->back()->with("message", "Profile Updated successfully");
    }
    public function servicesscreate()
    {
        $title = "Services Added";
        return view('projects.services', compact('title'));
    }
    public function servicess()
    {
        $title = "Services";
        $service = Services::all();
        return view('projects.index', compact('title', 'service'));
    }

    public function Serviceadd(Request $request)
    {
        $user = new Services();
        $user->name = $request->name;
        $user->desc = $request->des;

        if ($request->hasFile('prodile')) {
            $file = $request->file('prodile');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $user->image = $filename;
        }
        $user->save();
        return redirect()->back()->with("message", "Services Added successfully");
    }
    public function servicessdelete($id)
    {
        Services::where('id', $id)->delete();
        return redirect()->back()->with("message", "Services Delete successfully");
    }

    public function servicessedit(Request $request, $id)
    {
        $title = "Services Updated";
        $user = Services::where('id', $request->id)->first();
        return view('projects.udoaa', compact('title', 'user'));
    }
    public function servicessupdate(Request $request)
    {
        $user = Services::where('id', $request->id)->first();
        $user->name = $request->name;
        $user->desc = $request->des;

        if (isset($request->prodile)) {
            if ($request->hasFile('prodile')) {
                $file = $request->file('prodile');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('images/', $filename);
                $user->image = $filename;
            }
        }

        $user->save();
        return redirect()->back()->with("message", "Services Updated successfully");
    }
    public function projectBiddAdd($id, $status)
    {
        $pr = ProjectsBiddig::where('id', $id)->first();
        $pr->status = $status;
        $pr->save();
        return redirect()->back()->with("message", "Bid update successfully");
    }
    public function deletebiding($id)
    {
        ProjectsBiddig::where('id', $id)->delete();
        return redirect()->back()->with("message", "Deleted successfully");
    }
}
