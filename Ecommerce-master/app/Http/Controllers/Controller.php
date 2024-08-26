<?php

namespace App\Http\Controllers;

use App\Traits\ActivityLog\ActivityLog;
use App\Traits\Common\CommonTrait;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests,CommonTrait,ActivityLog;

    public function store(Request $request,$model,$table)
    {
        $id = $this->generateModelID($model);
        $model::create($request->all());
        $parameters = ['request' => $request, 'id' => $id];
//        $this->callActivityMethod($table, 'store', $parameters);
        return redirect()->back()->with(['message' => __('common.store')]);
    }

    public function delete($id,$model,$table)
    {
        $parameters = ['id' => $id];
        $m = $model::find($id);
        $m->delete();
//        $this->callActivityMethod($table, 'delete', $parameters);
        return redirect()->back()->with(['message' => __('common.delete')]);
    }
}
