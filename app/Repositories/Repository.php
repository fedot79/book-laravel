<?php
namespace Book\Repositories;

use Illuminate\Config;



abstract class Repository  {
    protected $model = false;

    public function get($select = '*' ,$take = false,$pagination = false){
        $builder = $this->model->select($select);

        if ($take)(
            $builder->take($take)
        );
        if ($pagination){
            return $builder->paginate(\Illuminate\Support\Facades\Config::get('settings.paginate'));
        }

        return $this->check($builder->get());
    }
    protected function check($result){
        if ($result->isEmpty()){
            return false;
        }
        return $result;


    }

}

