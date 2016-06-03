<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 16-6-3
 * Time: 下午2:54
 */

class CategoryManage {
    public function getCategoryList($category_id = 0) {
        $category_list = \app\models\Category::find()
            ->where(['parent_id' => $category_id])
            ->orderBy('id')
            ->all();

        if(!empty($category_list)){
            //如果不为空，则递归
            foreach ($category_list as $category) {
//                 $res = $this->getCategoryList($category->id);
//                 var_dump($res);
            }
            return $category_list;
        }
        return false;
    }
}