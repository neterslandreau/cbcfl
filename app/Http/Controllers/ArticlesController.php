<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Carbon\Carbon;
use Illuminate\Support\Str;

class ArticlesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show', 'tagged']);
    }

    public function index()
    {
        $articles = Article::latest()
//            ->filter(request()->input(['date.month', 'date.year']))
            ->paginate(5);
        return view('articles.index', compact('articles'));
    }

    public function show(string $slug)
    {
        $article = Article::where('slug', $slug)->first();
        if (!strlen($article->user->nickname)) {
            $article->user->nickname = $article->user->first_name . ' ' . $article->user->last_name;
        }
        $owner = (auth()->id() === $article->user_id);
        $tags = $article->tags;
        return view('articles.show', compact('article', 'tags', 'owner'));
    }

    public function edit(string $slug, $admin = false)
    {
        $article = Article::where('slug', $slug)->first();
        $articleTags = '';
        foreach ($article->tags as $tag) {
            $articleTags .= $tag->name.',';
        }
        $allTags = Article::existingTags()->pluck('name');
        if ($owner = (auth()->id() === $article->user_id)) {
            if (request()->method() === 'POST') {
                $this->validate(request(), [
                    'title' => 'required',
                    'body' => 'required',

                ]);
                $article = Article::where('slug', $slug)->first();
                $article->title = request('title');
                $article->body = request('body');
                $article->save();
                if (request('tags')) {
                    $article->retag(explode(',', request('tags')));
                }
                $tags = $article->tagnames;
                session()->flash('message', 'The article was successfully editted.');
                return redirect('/articles/'.$article->slug);
            }


            return view('articles.edit', compact('article', 'allTags', 'articleTags', 'owner'));
        }
        session()->flash('error', 'You cannot edit that article!');
        return redirect()->home();
    }

    public function create()
    {
        $tags = Article::existingTags()->pluck('name');
        return view('articles.create', compact('tags'));
    }

    public function store(Request $request)
    {

        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required',

        ]);

        $article = Article::create([
            'user_id' => auth()->id(),
            'title' => request('title'),
            'body' => request('body')
        ]);
        if (request('tags')) {
            $article->tag(explode(',', request('tags')));
        }

        session()->flash('message', 'Your article has been published.');

        return redirect('/articles/'.$article->slug);
    }

    public function tagged(string $tag)
    {
        $articles = Article::withAllTags([$tag])->get();
        return view('articles.index', compact('articles'));
    }

    public function delete(string $slug)
    {
        $article = Article::where('slug', $slug)->first();
        if ($owner = (auth()->id() === $article->user_id)) {
            $article->delete();
            session()->flash('message', 'Your article has been deleted.');
        } else {
            session()->flash('error', 'You cannot delete that article!');
        }

        return redirect()->home();
    }
}
