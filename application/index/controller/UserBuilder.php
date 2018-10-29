<?php
/**
 * Created by PhpStorm.
 * User: xialei
 * Date: 2018/10/29
 * Time: 下午10:45
 */

namespace app\index\controller;

use think\Db;

/**
 * 查询构造器查询
 * Class UserBuilder
 *
 * @package app\index\controller
 */
class UserBuilder
{
    public function create()
    {
        $data = [
            'username'   => 'test',
            'password'   => md5('111111'),
            'created_at' => date('Y-m-d H:i:s')
        ];
        $result = Db::name('user')->insert($data);
        var_dump($result);
    }

    public function update()
    {
        $result = Db::name('user')->where('username', 'test')->update(['password' => md5('123456')]);
        var_dump($result);
    }

    public function show()
    {
        $result = Db::name('user')->where('username', 'test')->find();
        var_dump($result);
    }

    public function list()
    {
        $result = Db::name('user')->select();
        var_dump($result);
    }

    public function delete()
    {
        $result = Db::name('user')->where('username', 'test')->delete();
        var_dump($result);
    }
}