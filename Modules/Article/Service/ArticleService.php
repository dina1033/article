<?php

namespace Modules\Article\Service;
use Modules\Article\Service\ArticleServiceInterface;
use Modules\Article\Repository\ArticleRepositoryInterface;

class ArticleService extends BaseService implements ArticleServiceInterface
{
    protected $repo;
    public function __construct(ArticleRepositoryInterface $repo)
    {
        $this->repo = $repo;
    }

    function all(array $columns=['*'], array $relations = []){
        return $this->repo->all($columns);
    }
    function update(int $resource_id, array $data){
        return $this->repo->update($resource_id,$data);
    }



}
