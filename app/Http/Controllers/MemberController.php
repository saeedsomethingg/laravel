<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
        public function index(){
        $members= Member::all();
        return view('members.index',compact('members'));
    }

        public function create(){
        return view('members.create');
    }

     public function store(Request $request)
    {
   
        $request->validate([
            'name' => 'required|max:30',
            'family' => 'required|max:35',
            'phone' => 'required|max:12',
            'address' => 'required|max:190',
        ]);

        $data=$request->all();
   
        Member::create($data);

        return redirect()->route('members')->with('success', 'عضو با موفقیت اضافه شد.');
    }

        public function edit($id)
    {
        $member = Member::findOrFail($id);
        return view('members.edit', compact('member'));
    }

    public function update(Request $request, $id){
                $request->validate([
            'name' => 'required|max:30',
            'family' => 'required|max:35',
            'phone' => 'required|max:12',
            'address' => 'required|max:190',
        ]);

        $member = Member::findOrFail($id);
        $member->name = $request->name;
        $member->family = $request->family;
        $member->phone = $request->phone;
        $member->address = $request->address;
        $member->save();

        return redirect()->route('members')->with('success', 'عضو با موفقیت ویرایش شد.');
    }

    public function destroy($id)
    {
    $member = Member::findOrFail($id);
    $member->delete();

    return redirect()->route('members')->with('success', 'عضو با موفقیت حذف شد.');
    }
}
