<?php

    namespace App\Services\CategoriesService;

use App\Models\Categories;

    class CategoriesService{

        public function create( array $data): Categories{
            return   Categories::create($data);
        }
    }


?>