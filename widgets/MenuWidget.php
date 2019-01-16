<?php
/**
 * Created by PhpStorm.
 * User: Evil-Neighbour
 * Date: 15.01.2019
 * Time: 12:02
 */

namespace app\widgets;


use app\models\Category;
use yii\base\Widget;

class MenuWidget extends Widget
{
    public $data;

    public function run() {
        $this->data = new Category();
        $this->data = $this->data->getCategories();
        $this->data = $this->categoryToTemplate($this->data );
        return $this->data ;
//        return$this->data[0]['cat_name'];
    }

    public function categoryToTemplate ($data){
        ob_start();
        include __DIR__ . '/template/menu.php';
        return ob_get_clean();
    }

}