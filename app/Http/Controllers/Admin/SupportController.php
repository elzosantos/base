<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index(Support $support)
    {
        $supports = $support->all();

        return view('admin.supports.index', compact('supports'));
    }

    public function create()
    {
        return  view('admin/supports/create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['status'] = 'a';
        Support::create($data);

        return redirect()->route('supports.index');
    }

    public function show(string|int $id)
    {
     
        if(!$support = Support::find($id)){
            return back();
        }
        return view('admin.supports.show', compact('support'));
        
    }

    public function edit(string|int $id)
    {
     
        if(!$support = Support::find($id)){
            return back();
        }
        return view('admin.supports.edit', compact('support'));
        
    }

    public function update(string|int $id, Request $request, Support $support)
    {
        if(!$support = Support::find($id)){
            return back();
        }

        $support->update($request->only('subject','body'));
        return redirect()->route('supports.index');
    }
    public function destroy(string|int $id,  Support $support)
    {
        if(!$support = Support::find($id)){
            return back();
        }

        $support->delete();
        return redirect()->route('supports.index');
    }
} 
