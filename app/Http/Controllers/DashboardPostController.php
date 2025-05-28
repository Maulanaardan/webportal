<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardPostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::where('author_id', auth()->id())->get();
        $categories = Category::all();

        return view('dashboard.posts.index', compact('posts', 'categories'));
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.posts.index', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'body' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);
    
        $validated['author_id'] = auth()->id();
    
        Post::create($validated);
    
        return redirect('/loby')->with('success', 'Post berhasil dibuat!');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::where('id', $id)->where('author_id', auth()->id())->firstOrFail();
        $categories = Category::all();
    
        return view('dashboard.posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::where('id', $id)->where('author_id', auth()->id())->firstOrFail();

    $validated = $request->validate([
        'judul' => 'required|max:255',
        'slug' => 'required|unique:posts,slug,' . $post->id,
        'body' => 'required',
        'category_id' => 'required|exists:categories,id',
    ]);

    $post->update($validated);

    return redirect('/loby')->with('success', 'Post berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    $post = Post::where('id', $id)->where('author_id', auth()->id())->firstOrFail();
    $post->delete();

    return redirect('/loby')->with('success', 'Post berhasil dihapus!');
    }
}
