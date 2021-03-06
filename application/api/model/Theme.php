<?php
/**
 * Created by PhpStorm.
 * User: CHUNLAI
 * Date: 2018/10/7
 * Time: 9:50
 */

namespace app\api\model;


class Theme extends BaseModel
{
    protected $hidden = ['update_time', 'delete_time', 'topic_img_id', 'head_img_id'];

    public function topicImg()
    {
        return $this->belongsTo('Image', 'topic_img_id', 'id');
    }

    public function headImg()
    {
        return $this->belongsTo('Image', 'head_img_id', 'id');
    }
    public function products()
    {
        return $this->belongsToMany('Product', 'theme_product',
            'product_id', 'theme_id');
    }
}