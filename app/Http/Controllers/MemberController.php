<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Member; //add members Model
 
class MemberController extends Controller
{
    public function index(){
        $members = Member::all();
        return view('search')->with('members', $members);
    }
  
    public function search(Request $request){
        $search = $request->input('search');
  
        $members = Member::where('firstname', 'like', "$search%")
           ->orWhere('email', 'like', "$search%")
           ->get();
  
        return view('result')->with('members', $members);
    }
  
    public function viewmember($id){
  
        $member = Member::find($id);
  
        return view('member')->with('member', $member);
    }
  
    public function find(Request $request){
        $search = $request->input('search');
  
        $members = Member::where('firstname', 'like', "$search%")
           ->orWhere('email', 'like', "$search%")
           ->get();
  
        return view('searchresult')->with('members', $members);
    }
}