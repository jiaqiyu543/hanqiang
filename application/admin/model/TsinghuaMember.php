<?php

namespace app\admin\model;

use think\Model;


class TsinghuaMember extends Model
{

    

    

    // 表名
    protected $name = 'tsinghua_member';
    
    // 自动写入时间戳字段
    protected $autoWriteTimestamp = false;

    // 定义时间戳字段名
    protected $createTime = false;
    protected $updateTime = false;
    protected $deleteTime = false;

    // 追加属性
    protected $append = [
        'type_text'
    ];
    

    
    public function getTypeList()
    {
        return ['Professor' => __('Type professor'), 'Postdoctorate' => __('Type postdoctorate'), 'Graduate Students' => __('Type graduate students'), 'Undergraduate Students' => __('Type undergraduate students')];
    }


    public function getTypeTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['type']) ? $data['type'] : '');
        $list = $this->getTypeList();
        return isset($list[$value]) ? $list[$value] : '';
    }




}
