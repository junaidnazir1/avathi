<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use App\Models\category;
use App\Models\tag;
use Log;
use Illuminate\Support\Str;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::all();
        foreach ($posts as $p) {

            $arr=explode(',',$p->tags);
            $p->tags=count($arr)-1;
            $arr=explode(',',$p->categories);
            $p->categories=count($arr)-1;
           
          }
        return view('welcome', compact('posts'));
    }
    public function get_posts()
    {
        $posts=Post::all();
        foreach ($posts as $p) {

            $arr=explode(',',$p->tags);
            $p->tags=count($arr)-1;
            $arr=explode(',',$p->categories);
            $p->categories=count($arr)-1;
           
          }
        return view('posts.index', compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags=Tag::all();
        $categories=Category::all();
        return view('posts.create', compact('tags', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    
        $input = $request->all();
        
        $slug = Str::slug($request->input('title'));
        $categories=$request->input('categories');
        $temp_cat='';
        for($i=0;$i<sizeof($categories); $i++)
        {
            $temp_cat.=$categories[$i].',';
        }
        echo $temp_cat;

        $tags=$request->input('tags');
        $temp_tag='';
        for($i=0;$i<sizeof($tags); $i++)
        {
            $temp_tag.=$tags[$i].',';
        }
        $post = new Post();
      
        $post->title = $request->title;
        $post->tags = $temp_tag;
        $post->categories = $temp_cat;
        $post->description = $request->description;
        $post->slug = $slug;
        $post->save();
        return redirect()->route('get_posts');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post=Post::where('slug', $slug)->first();;
      
        $arr=explode(',',$post->tags);
        $tags='';
            for($i=0; $i<count($arr)-1; $i++)
            {
                $tag = Tag::where('id', $arr[$i])->first(); 
                $tags.=$tag->title. ',';
            }
            $tags=substr($tags, 0, strlen($tags)-1);
            $post->tags=$tags;
           
            $arr=explode(',',$post->categories);
            $categories='';
                for($i=0; $i<count($arr)-1; $i++)
                {
                    $category = Category::where('id', $arr[$i])->first(); 
                    $categories.=$category->title. ',';
                }
                $categories=substr($categories, 0, strlen($categories)-1);
                $post->categories=$categories;
               
        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {
        //
    }
}
