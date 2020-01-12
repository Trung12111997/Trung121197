<?php
class postgresql extends database implements crud,log,search{
    public function connect()
    {
        // TODO: Implement connect() method.
        $db_connection = pg_connect("host=localhost dbname=DBNAME user=USERNAME password=PASSWORD");
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