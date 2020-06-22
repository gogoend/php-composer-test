<?php
/*
 * @Author: gogoend
 * @Date: 2020-06-22 15:59:18
 * @LastEditors: gogoend
 * @LastEditTime: 2020-06-22 16:12:37
 * @FilePath: \php-composer-test\app\Controllers\News.php
 * @Description: 
 */

namespace App\Controllers;

use App\Models\NewsModel;

class News extends \CodeIgniter\Controller
{
    public function index()
    {
        $model = new NewsModel();

        // $data['news'] = $model->getNews();

        $data = [
            'news'  => $model->getNews(),
            'title' => 'News archive',
        ];

        echo view('templates/header', $data);
        echo view('news/index', $data);
        echo view('templates/footer');
    }

    public function view($slug = NULL)
    {
        $model = new NewsModel();
    
        $data['news'] = $model->getNews($slug);
    
        if (empty($data['news']))
        {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: '. $slug);
        }
    
        $data['title'] = $data['news']['title'];
    
        echo view('templates/header', $data);
        echo view('news/view', $data);
        echo view('templates/footer', $data);
    }
}
