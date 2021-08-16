<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Kategori;

use App\Post;

use App\Komentar;

use Auth;

use Gate;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post->judul = $request->get('judul');
        $post->subjek = $request->get('subjek');
        $post->isi = $request->get('isi');
        $post->kategori_id = $request->get('kategori_id');
        
        $post->user_id = Auth::user()->id;
        $post->tgl_posting = date('Y-m-d h:i:s');

        $post->save();
        return redirect(redirect()->getUrlGenerator()->previous())->with('status', 'Postingan Anda berhasil dipost!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::whereId($id)->firstOrFail();
        $komentars = $post->komentars;
        return view('post.lihat', ['post'=>$post, 'komentars'=>$komentars]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showBerita() {
        $kategori = Kategori::find(1);
        $posts = $kategori->posts;
        return view('post.berita', ['posts' => $posts]);
    }
    public function showPengumuman() {
        $kategori = Kategori::find(2);
        $posts = $kategori->posts;
        return view('post.pengumuman', ['posts' => $posts]);
    }
    public function showKegiatan() {
        $kategori = Kategori::find(3);
        $posts = $kategori->posts;
        return view('post.kegiatan', ['posts' => $posts]);
    }

    public function masterBerita() {
        if (Gate::denies('admin')) {
            abort(403, 'Anda tidak memiliki hak akses');
        }
        $kategori = Kategori::find(1);
        $posts = $kategori->posts;
        return view('admin.post.berita', ['posts'=>$posts]);
    }
    public function masterPengumuman() {
        if (Gate::denies('admin')) {
            abort(403, 'Anda tidak memiliki hak akses');
        }
        $kategori = Kategori::find(2);
        $posts = $kategori->posts;
        return view('admin.post.pengumuman', ['posts'=>$posts]);
    }
    public function masterKegiatan() {
        if (Gate::denies('admin')) {
            abort(403, 'Anda tidak memiliki hak akses');
        }
        $kategori = Kategori::find(3);
        $posts = $kategori->posts;
        return view('admin.post.Kegiatan', ['posts'=>$posts]);
    }
}
