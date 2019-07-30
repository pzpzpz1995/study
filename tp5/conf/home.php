<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2019/5/24
 * Time: 10:07
 */
return[
    'app_address'=>'home',
    'database'=>[
        'password' =>'root', //设置为自己家里的数据库文件配置

    //若要使用这个方式  在应用配置里面只有这一句  所以要进行把原来的database所有配置复制
        'type'            => 'mysql',
    // 数据库连接DSN配置
    'dsn'             => '',
    // 服务器地址
    'hostname'        => '127.0.0.1',
    // 数据库名
    'database'        => 'user',
    // 数据库用户名
    'username'        => 'root',
    // 数据库密码
    'password'        => '',
    // 数据库连接端口
    'hostport'        => '',
    // 数据库连接参数
    'params'          => [],
    // 数据库编码默认采用utf8
    'charset'         => 'utf8',
    // 数据库表前缀
    'prefix'          => '',
    // 数据库调试模式
    'debug'           => false,
    // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
    'deploy'          => 0,
    // 数据库读写是否分离 主从式有效
    'rw_separate'     => false,
    // 读写分离后 主服务器数量
    'master_num'      => 1,
    // 指定从服务器序号
    'slave_no'        => '',
    // 是否严格检查字段是否存在
    'fields_strict'   => true,
    // 数据集返回类型
    'resultset_type'  => 'array',
    // 自动写入时间戳字段
    'auto_timestamp'  => false,
    // 时间字段取出后的默认时间格式
    'datetime_format' => 'Y-m-d H:i:s',
    // 是否需要进行SQL性能分析
    'sql_explain'     => false,
    ]
];