<?php
declare(strict_types=1);


namespace App\Base\Repository;

use Illuminate\Container\Container as Application;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

abstract class AbstractRepository{

    /**
     * @var Application
     */
    protected  $app;

    /**
     * @var Model
     */
    protected  $model;

    public function __construct(Application $app)
    {
        $this->app = $app;
        $this->makeModel();
    }

    /**
     * @return Model
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    protected function makeModel()
    {
        $model = $this->app->make($this->model());
        if (!$model instanceof Model) {
            throw new \Exception("Class {$this->model()} must be an instance of Illuminate\\Database\\Eloquent\\Model");
        }
        return $this->model = $model;
    }

    /**
     * Model class name
     *
     * @return string
     */
    abstract public function model():string;

    /**
     * @return Model
     */
    public function getModel():Model
    {
        return $this->model;
    }
    /**
     * @return Builder
     */
    public function query()
    {
        return $this->model->newQuery();
    }

    public function getPageSize(array $params): int
    {
        $value = $params['size'] ?? config('constants.pagination.per_page');
        return intval($value);
    }
}
