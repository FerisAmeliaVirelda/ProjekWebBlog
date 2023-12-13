<?php

namespace App\Http\Controllers;

//import Model "Amelia"
use App\Models\Amelia;
//return type View
use Illuminate\View\View;
//return type redirectResponse
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Illuminate\Http\RedirectResponse;
//import Facade "Storage"
use Illuminate\Support\Facades\Storage;
//import DB
use Illuminate\Support\Facades\DB;

class AmelController extends Controller
{
    public function index(): View 
    {
        //get amelias
        $amelias = Amelia::latest()->paginate(4);

        //render view with post
        return view('amelias.index', compact('amelias'));
    }
    public function tampil(): View 
    {
        //get amelias
        $amelias = Amelia::latest()->paginate(2);

        //render view with post
        return view('tampil', compact('amelias'));
    }
    public function create() : View
    {
        return view('amelias.create');
    }
    public function store(Request $request) : RedirectResponse 
    {
        //validate form
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpeg,png|max:2048',
            'title'     => 'required',
            'content'   => 'required'
        ]);
        //upluod image
        $image = $request->file('image');
        $image->storeAs('public/amelias', $image->hashName());
        //create Amelia
        // dd($request->content);
        Amelia::create([
            'image'     => $image->hashName(),
            'title'     => $request->title,
            'content'   => $request->content
        ]);
        //redirect to index
        return redirect()->route('amelias.index')->with(['success' => 'Data Berhasil Disimpan']);
    }
    public function show(string $id): View 
    {
        //get post by ID
        $amelias = Amelia::findOrFail($id);
        //render view with post
        return view('amelias.show', compact('amelias'));
    }
    public function destroy($id): RedirectResponse 
    {
        //get post by ID
        $amelias = Amelia::findOrFail($id);
        //delete image
        Storage::delete('public/amelias/'. $amelias->image);
        //delete post
        $amelias->delete();
        //redirect to index
        return redirect()->route('amelias.index')->with(['success' => 'Data Berhasil Dihapus']);
    }
    public function edit(string $id): View 
    {
        //get post by ID
        $amelias = Amelia::findOrFail($id);
        //render view with post
        return view('amelias.edit', compact('amelias'));
    }
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'image' => 'image|mimes:jpeg,jpg,png|max:2048',
            'title' => 'required',
            'content' => 'required'
        ]);
        //get post by ID
        $amelias = Amelia::findOrFail($id);
        //check if image is uploaded
        if ($request->hasFile('image')) {
            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/amelias', $image->hashName());
            //delete old image
            Storage::delete('public/amelias/'.$amelias->image);
            //update amelias with new image
            $amelias->update([
                'image' => $image->hashName(),
                'title' => $request->title,
                'content' => $request->content
            ]);
        } else {
            //update amelias without image
            $amelias->update([
                'title' => $request->title,
                'content' => $request->content
            ]);
        }
        //redirect to index
        return redirect()->route('amelias.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
    public function search (Request $request)
    {
        $search = $request->search;
        $amelias = DB::table('amelias')
        ->where('title','like', "%".$search."%")
        ->paginate();
        return view('amelias/index', compact('amelias'));
    }
}
