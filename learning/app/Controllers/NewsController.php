<?php

namespace App\Controllers;

use App\Models\NewsCreate;
use App\Models\NewsRead;

class NewsController extends Controller{
    function createNews()
    {
        $news = new NewsCreate();
        $news->setData($_POST);
        $news->createNews();
    }

    function readNews()
    {
        $news = new NewsRead();
        $allNews = $news->get();
        echo '<main>
                 <div class="w-75 text-center mx-auto">
                    <div class="h1 pb-3">
                        Список новостей
                    </div>';
        foreach ($allNews as $news){
            echo "
            <div class='border w-75 mx-auto text-start p-3 mb-4 border rounded'>
                <div class='d-flex justify-content-between'>
                    <div class='h4'>" .
                    $news['heading']
                . "</div>
                    <div>" .
                        $news['writing_date']
                    . "</div>
                </div>
                <div>" .
                    $news['text']
                . "</div>
                <div class='m-2 row'>
                    <div class='col-4'>
                        <i class='fa-regular fa-heart'> </i>
                    </div>
                    <div class='col-8'>".
                        //$news['id_author']
                    "</div>
                </div>
            </div>";
        }
        echo "</main>";


    }
}