<?php


namespace App\Services;


use App\Models\Menu;

class MenuService
{
    public function getMenuWithCategory(array $resto_ids)
    {
        $categories = Menu::WhereIn('resto_id', $resto_ids)
            ->get()
            ->groupBy('category.name');

        return $categories;
    }
}
