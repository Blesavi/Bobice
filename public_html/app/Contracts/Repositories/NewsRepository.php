<?php

namespace App\Contracts\Repositories;

interface NewsRepository
{
    public function getNews($isAjax = false);
    public function getNewsWithId($id);
    public function storeNews($request);
    public function updateNews($request, $id);
    public function deleteNews($id);
}