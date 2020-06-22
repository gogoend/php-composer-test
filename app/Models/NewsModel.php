<?php
/*
 * @Author: gogoend
 * @Date: 2020-06-22 15:57:12
 * @LastEditors: gogoend
 * @LastEditTime: 2020-06-22 15:58:52
 * @FilePath: \php-composer-test\app\Models\NewsModel.php
 * @Description: 
 */

namespace App\Models;

class NewsModel extends \CodeIgniter\Model
{
    protected $table = 'news';
    public function getNews($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }

        return $this->asArray()
            ->where(['slug' => $slug])
            ->first();
    }
}
