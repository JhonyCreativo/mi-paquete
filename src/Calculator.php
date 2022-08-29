<?php
namespace Jhonycreativo\Mipaquete;
use Illuminate\Support\Collection;
class Calculator
{
    public function sum($a, $b)
    {
        return $a + $b;
    }
    public function hola(){
        return "hola";
    }
    public function GroupAndSum($value = null,$param=null,$param2=null){
        $data = collect($list);
        $data = $data->groupBy($param)->map(function ($item) {
            if ($item->count() > 1) {
                $item = $item->slice(0, 1)->map(function($subItem) use ($item) {
                    $subItem[$param2] = $item->sum($param2);

                    return $subItem;
                });
            }

            return $item;
        })
        ->flatten(1);
        return $data;
    }
}