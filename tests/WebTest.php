<?php

use c7test\WebTestCase;
use PHPUnit\DbUnit\DataSet\ArrayDataSet;

/**
 * 接口测试
 */
class WebTest extends WebTestCase {

    private $baseUrl='http://www.baidu.com';

    /**
     * 构造数据库的状态
     *
     * @return ArrayDataSet|\PHPUnit\DbUnit\DataSet\IDataSet
     */
    public function getDataSet(){

        return new ArrayDataSet([

        ]);
    }

    /**
     * 接口访问测试
     */
    public function test1(){
        $res=$this->client->get($this->baseUrl);
        $this->assertEquals(200,$res->getStatusCode());
    }

}