<?php
class postgresql extends database implements crud,log,search{
    public function connect()
    {
        // TODO: Implement connect() method.
        $redis = new Redis();
        $redis->connect('127.0.0.1', 6379);
        echo "Connection to server sucessfully";
        //check whether server is running or not
        echo "Server is running: ".$redis->ping();
    }
    public function wirtelog()
    {
        // TODO: Implement wirtelog() method.
    }
    public function update()
    {
        // TODO: Implement update() method.
    }
    public function search()
    {
    }
    public function readlog()
    {
        // TODO: Implement readlog() method.
    }
    public function read()
    {
        // TODO: Implement read() method.
    }
    public function delete()
    {
        // TODO: Implement delete() method.
    }
    public function creat()
    {
        // TODO: Implement creat() method.
    }
}