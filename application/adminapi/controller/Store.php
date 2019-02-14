<?php
namespace app\adminapi\controller;
use think\Db;

class Store extends Common{
    //公共上传接口
    public function upload()
    {
        $file = request()->file('file');
        $path = input('path', 'common');
        $format = input('format') ? input('format') : config('store.ext');
        $info = $file
                -> rule('date')
                -> validate(['size'=> config('store.uploadMaxSize'),'ext'=> $format])
                -> move(ROOT_PATH . 'public' . DS . 'uploads' . DS . $path);
        if($info){
            $result = [
                'fileName' => $info->getSaveName(),
                'filePath' => config('site.domain') . DS . 'public' . DS . 'uploads' . DS . $path . DS . $info->getSaveName(),
            ];
            out_info(200, '已保存', $result);
        }
        $ex = [
            'path' => $path,
            'format'=>$format
        ];
        out_info(500, $file->getError(),[],0,$ex);
    }
    //下拉选项测试
    public function test()
    {
        $options = [];
        for($i = 0; $i < 6; $i++){
            $options[] = [
                'test_id' => $i + 1,
                'test_name' => '选项' . $i
            ];
        }
        out_info(200, 'success', $options);
    }
}