<?php
class mysql extends database implements crud,log,search{
    public function connect()
    {
        // TODO: Implement connect() method.
        $connection = mysqli_connect("", "", "");
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