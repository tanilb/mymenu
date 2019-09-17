<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    private $menus;

    public function __construct()
    {
        $this->menus = [];
    }

    public function index()
    {
        return json_encode($this->menus);
    }

    public function show($id)
    {
        return $this->menus[$id];
    }

    public function store($company)
    {
        $this->menus[] = [
            'id'      => count($this->menus) + 1,
            'company' => 'company',
        ];
    }
}
