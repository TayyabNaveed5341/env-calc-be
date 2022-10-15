<?php
namespace App\Repositories;

use Illuminate\Support\Collection;

class ApplianceRepository{
    public static function all():Collection{
        return collect([
            ["id"=>1, "name"=>"Fluorescent Tube"],
            ["id"=>2, "name"=>"Incandescent Lamp"],
            ["id"=>3, "name"=>"LED Light"],
            ["id"=>4, "name"=>"AC Conventional"],
            ["id"=>5, "name"=>"AC Invertor"],
            ["id"=>6, "name"=>"Fan Conventional"],
            ["id"=>7, "name"=>"Fan BLDC/Invertor"],
        ]);
    }
}