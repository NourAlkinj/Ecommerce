<?php

namespace App\Traits\Common;


use App\Models\Branch;
use App\Models\Currency;
use App\Models\Store;
use App\Models\User;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use function Spatie\Ignition\Config\merge;
use function Spatie\LaravelIgnition\Recorders\JobRecorder\resolveCommandProperties;
use function Symfony\Component\HttpFoundation\normalizeAndFilterClientIps;
use function Termwind\ValueObjects\my;

trait  CommonTrait
{


    public function getCountRawsInModel($Model)
    {
        return $Model::count();
    }


    public function generateModelID($Model)
    {
        if ($this->getCountRawsInModel($Model) == 0)
            $id = 1;
        else
            $id = $Model::orderBy('id', 'desc')->first()->id + 1;
        return $id;
    }


    public function callActivityMethod($table, $method, $parameters)
    {
        $this->makeActivity([
            'table' => $table,
            'operation' => $method,
            'parameters' => $parameters
        ]);
    }

    public function getAllIDs($Model)
    {
        $models = $Model::all();
        $allIDs = [];
        foreach ($models as $model) {
            $allIDs[] = $model->id;
        }
        return $allIDs;
    }

    public function getObjectByValue($Model, $value, $column)
    {
        return $model = $Model::where($column, 'like', $value . '%')->orderBy($column, 'asc')->first();
    }

    public function queryEqual(array $values, $table, $firstValueOfCondition, $secondValueOfCondition,$thirdValueOfCondition=null,$fourthValueOfCondition=null)
    {
        $column = ' ';
        foreach ($values as $value) {
            $column .= $value . ",";
        }
        $column = substr($column, 0, strlen($column) - 1);
        $query = DB::select("select $column from $table where($firstValueOfCondition = $secondValueOfCondition && $thirdValueOfCondition=$fourthValueOfCondition)");
        return $query;
    }

    public function getModelData($myModel, $id, $value)
    {
        $model = $myModel::find($id);
        $valueOfModel = $model->$value;
        return $valueOfModel;
    }

    public function updateValueInDB($id, $Model, $key, $value)
    {
        $model = $Model::find($id);
        $model->$key = $value;
        $model->save();
    }

}

















