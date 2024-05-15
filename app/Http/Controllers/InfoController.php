<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Info;
use Illuminate\View\View;

class InfoController extends Controller
{
    public function index(): View
    {
        $info = Info::paginate(2);
        return view('info.index')->with('info', $info);
    }
    
    public function create()
    {
        return view('info.create');
    }

    
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'idnumber' => 'required',
            'date_one' => 'required',
            'date_tow' => 'required',
            'count' => 'max:255',

        ]);

        $input = $request->all();
        Info::create($input);

        return redirect()->route('info.index')->with('success', 'Data was successfully sent');
    }

    public function show(string $id): View
    {
        $info = Info::find($id);
        return view('info.show')->with('info', $info);
    }

    public function edit(string $id): View
    {
        $info = Info::find($id);
        return view('info.edit')->with('info', $info);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $info = Info::find($id);
        $input = $request->all();
        $info->update($input);
        return redirect('info')->with('flash_message', 'Info Updated!');
    }

    public function destroy(string $id): RedirectResponse
    {
        Info::destroy($id);
        return redirect('info')->with('flash_message', 'Info deleted!');
    }
}
