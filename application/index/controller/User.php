<?php
/**
 * Created by PhpStorm.
 * User: xialei
 * Date: 2018/10/29
 * Time: 下午10:23
 */

namespace app\index\controller;


use think\Db;

class User
{
    public function create()
    {
        $sql = 'insert into think_user (username,password,created_at) VALUES (?,?,?)';
        $result = Db::execute($sql, ['test', md5('111111'), date('Y-m-d H:i:s')]);
        var_dump($result);
    }

    public function update()
    {
        $sql = 'update think_user set password = ? where username = ?';
        $result = Db::execute($sql, [md5('123456'), 'test']);
        var_dump($result);
    }

    public function show()
    {
        $sql = 'select * from think_user WHERE username = ?';
        $result = Db::query($sql, ['test']);
        var_dump($result);
    }

    public function list()
    {
        $sql = 'select * from think_user';
        $result = Db::query($sql);
        var_dump($result);
    }

    public function delete()
    {
        $sql = 'delete from think_user where username = ?';
        $result = Db::execute($sql, ['test']);
        var_dump($result);
    }
}