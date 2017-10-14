<?php
/**
 * Created by PhpStorm.
 * Filename:  testQuerylist.php
 * User:      cmder
 * Date:      2017/10/14
 * Time:      22:07
 */
require 'QueryList/vendor/autoload.php';

use QL\QueryList;

/**
 * 测试用例来自官网 https://querylist.cc/
 */

////采集某页面所有的图片
//$data = QueryList::get('http://cms.querylist.cc/bizhi/453.html')->find('img')->attrs('src');
////打印结果
//print_r($data->all());
//
////采集某页面所有的超链接和超链接文本内容
////可以先手动获取要采集的页面源码
//$html = file_get_contents('http://cms.querylist.cc/google/list_1.html');
////然后可以把页面源码或者HTML片段传给QueryList
//$data = QueryList::html($html)->rules([  //设置采集规则
//    // 采集所有a标签的href属性
//    'link' => ['a','href'],
//    // 采集所有a标签的文本内容
//    'text' => ['a','text']
//])->query()->getData();

////打印结果
//print_r($data->all());

// 采集该页面[正文内容]中所有的图片
$data = QueryList::get('http://cms.querylist.cc/bizhi/453.html')->find('.post_content img')->attrs('src');
//打印结果
print_r($data->all());

// 采集该页面文章列表中所有[文章]的超链接和超链接文本内容
$data = QueryList::get('http://cms.querylist.cc/google/list_1.html')->rules([
    'link' => ['h2>a', 'href', '', function ($content) {
        //利用回调函数补全相对链接
        $baseUrl = 'http://cms.querylist.cc';
        return $baseUrl . $content;
    }],
    'text' => ['h2>a', 'text']
])->range('.cate_list li')->query()->getData();

//打印结果
print_r($data->all());