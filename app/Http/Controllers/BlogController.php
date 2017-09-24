<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

use App\Models\Blog;


class BlogController extends Controller
{
    public function index()
    {
        // insert biasa
        // $blog = new Blog;
        // $blog->title = 'halo kota';
        // $blog->description = 'isi dari kota';
        // $blog->save();

        // insert mass assignment
        // Blog::create([
        //     'title' => 'halo lamongan',
        //     'description' =>'isi dari kota lamongan',
        //     'created_at' => '2017-02-21 01:35:29',
        //     'updated_at' => '2017-02-21 01:35:29',
        // ]);

        //update
        // $blog = Blog::where('title', 'halo bekasi')->first();
        // $blog->title ='halo cimahi';
        // $blog->save();

        //update mass assingmnet
        // Blog::find(3)->update([
        //     'title'   => 'halo lampung',
        //     'description' => 'ini halo lampung'
        // ]);

        //delete dengan soft deleted
        // $blog = Blog::find(1);
        // $blog->delete();

        //delete destroy
        // Blog::destroy(3);

        //mengembalikan data hilang
        // $blogs = Blog::withTrashed()->get();

        //menhapus deleted_at dan mengembalikan data
        // Blog::withTrashed()->restore();

        $blogs = Blog::all();
    	return view('blog/home', ['blogs' =>$blogs]);
    }

    public function show($id)
    {
    	
        $blog = Blog::find($id);

        if(!$blog)
            abort(404);

        return view('blog/single', ['blog'=>$blog]);
    }

    public function create()
    {
        return view('blog/create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:5',
            'description' =>'required|min:5|max:15'
        ]);

        $blog = new Blog;
        $blog->title = $request->title;
        $blog->description =$request->description;
        $blog->save(); 
        return redirect('blog');
    }

    public function edit($id)
    {
        
        $blog = Blog::find($id);

        if(!$blog)
            abort(404);

        return view('blog/edit', ['blog'=>$blog]);
    }

    public function update(Request $request, $id)
    {
     
        $blog = Blog::find($id);
        $blog->title =$request->title;
        $blog->description =$request->description;
        $blog->save(); 
       return redirect('blog/' . $id);
    }

    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect('blog');
    }
}
