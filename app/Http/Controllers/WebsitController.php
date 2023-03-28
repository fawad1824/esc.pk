<?php

namespace App\Http\Controllers;

use App\Models\ContactSer;
use App\Models\Projects;
use App\Models\ProjectsBiddig;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebsitController extends Controller
{
    public function addBid(Request $request)
    {
        $pro = new ProjectsBiddig();
        $pro->price = $request->price;
        $pro->desc = $request->desc;
        $pro->project_id = $request->project_id;
        $projecuser=Projects::where('id',$request->project_id)->first();
        $pro->user_id = Auth::user()->id;
        $pro->userproject_id = $projecuser->userID;
        $pro->stauts = '1';
        $pro->save();
        return redirect()->back()->with("message", "Bid Add successfully");
    }
    public function addcontact(Request $request)
    {
        $con=new ContactSer();
        $con->name=$request->name;
        $con->email=$request->email;
        $con->subject=$request->subject;
        $con->msg=$request->msg;
        $con->save();
        return redirect()->back()->with("message", "Contact Add successfully");
    }
}
