<?php

class dataSource
{
    private $databaseConnection;

    public function loadFixtures()
    {
        $this->createDatabaseConnection();
        $db = $this->getDatabaseConnection();
        $sql = file_get_contents(__DIR__ . '/database.sql');
        $db->exec($sql);
    }

    public function getDatabaseConnection()
    {
        return $this->databaseConnection;
    }

    private function createDatabaseConnection()
    {
        $this->databaseConnection = new Pdo('sqlite:memory');
        $this->databaseConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}
