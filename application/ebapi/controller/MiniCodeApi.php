<?php
/**
 * Created by PhpStorm.
 * User: chenyu
 * Date: 2019-06-03
 * Time: 18:43
 */

namespace app\ebapi\controller;


use app\core\model\routine\RoutineCode;

class MiniCodeApi extends Basic
{

    public function getChannelCode($page = "pages/index", $goods_id = 0, $channel = "")
    {
        $data = [];
        if(!empty($goods_id)){
            $data[] = "id={$goods_id}";
        }

        if(!empty($channel)){
            $data[] = "channel={$channel}";
        }

        if(!empty($data)){
            $data = implode("&", $data);
            header('Content-type: image/jpg');
            echo RoutineCode::getPageCode($page, $data,1280);exit;
        }else{
            echo "二维码生成失败";
        }

    }

}