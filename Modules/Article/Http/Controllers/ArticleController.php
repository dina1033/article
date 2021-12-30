<?php

namespace Modules\Article\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Article\Entities\Article;
use Modules\Article\Service\ArticleServiceInterface;

class ArticleController extends Controller
{

    private $article;
    public function __construct(ArticleServiceInterface $article)
    {
        $this->article = $article;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $articles=$this->article->all();
        return $articles;
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $data=$request->toArray();
        $this->article->store($data);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $article=$this->article->findById($id);
        return $article;
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $data=$request->toArray();
        $this->article->update($id,$data);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $this->article->destroy($id);
    }
}
