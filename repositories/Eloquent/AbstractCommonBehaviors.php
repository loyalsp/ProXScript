<?php
/**
 * Created by PhpStorm.
 * User: Adi
 * Date: 10/2/2017
 * Time: 8:50 PM
 */

namespace Repositories\Eloquent;

use Repositories\Contracts\RepositoryInterface,
    Illuminate\Database\Eloquent\Model,
    Illuminate\Container\Container as App,
    Exception,
    Illuminate\Support\Facades\DB;

abstract class AbstractCommonBehaviors implements RepositoryInterface
{

    /**
     * @var App
     */
    private $app;
    /**
     * @var
     */
    protected $model;

    /**
     * @return mixed
     */
    abstract public function getModel();

    /**
     * CommonBehaviors constructor.
     * @param App $app
     */
    public function __construct(App $app)
    {
        $this->app = $app;
        $this->makeModel();
    }

    /**
     * @param $tableName
     * @return mixed
     */
    public function getTable($tableName)
    {
        return DB::table($tableName);
    }

    /**
     * @return mixed
     */
    public function getAllRecords()
    {
        return $this->model->get();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getRecordById($id)
    {
        return $this->model->findOrFail($id);

    }

    /**
     * @param $column
     * @param $value
     * @return mixed
     */
    public function getRecordsByAttributesValues(array $attributes, array $ColumnsToSelect)
    {

        foreach ($attributes as $key => $value)
        {
            $model = $this->model->where($key, $value);
        }
        return $model->select($ColumnsToSelect);
        //OR static context "return User::where($column,$att)->first();"
    }

    /**
     * @param $id
     * @return mixed
     */
    public function deleteRecord($id)
    {
        return $this->getRecordById($id)->delete();
    }

    /**
     * @param array $attributes
     * @return mixed
     */
    public function createRecord(array $attributes)
    {
        $created = $this->model->create($attributes);
        return $created;
    }


    /**
     * @param $id
     * @param array $attributes
     * @return mixed
     */
    public function updateRecord($id,array $attributes)
    {
        $model = $this->getRecordById($id);
        foreach ($attributes as $key => $value)
        {
            $model->$key = $value;
        }
        return $model->update();
    }

    public function getMultipleRecordsByFieldValues($field,array $values)
    {
        return $this->model->whereIn($field, $values);
    }

    public function updateMultipleRecordsByFieldValues($field ,array $values, array $attributes)
    {
        $model = $this->getMultipleRecordsByFieldValues($field,$values);
        return $model->update($attributes);

    }

    public function deleteRecordByValue($field,array $values)
    {
        return $this->getMultipleRecordsByFieldValues($field,$values)->delete();
    }
    /**
     * @return \Illuminate\Database\Eloquent\Builder
     * @throws RepositoryException
     */
    public function makeModel()
    {
        $model = $this->app->make($this->getModel());

        if (!$model instanceof Model)
            throw new Exception("Class {$this->model()} must be an instance of Illuminate\\Database\\Eloquent\\Model");

        return $this->model = $model;
    }

    public function resetModel()
    {
        return $this->makeModel();
    }
}