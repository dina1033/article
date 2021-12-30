<?php

namespace Modules\Article\Repository;

use Modules\Article\Entities\Article;
use Illuminate\Database\Eloquent\Collection;
use Modules\Article\Repository\ArticleRepositoryInterface;
use Modules\Article\Repository\BaseRepository;

use Illuminate\Support\Facades\Auth;

class ArticleRepository extends BaseRepository implements ArticleRepositoryInterface
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * BaseRepository constructor.
     *
     * @param Model $model
     */
    public function __construct(Article $model)
    {
        $this->model = $model;
    }

    public function all(array $columns = ['*'], array $relations = []): Collection
    {
        return $this->model->orderBy('id','desc')->get($columns);
    }


}
