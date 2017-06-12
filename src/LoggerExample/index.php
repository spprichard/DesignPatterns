<?php
//Stategy Design Pattern

//Encapsulate and make interchangeable by coding to interface
interface Logger
{
    public function log($data);
}


//Family of algorithms
class LogToFile implements Logger
{

    public function log($data)
    {
        var_dump("Log data to file");
    }
}

class LogToDatabase implements Logger

{

    public function log($data)
    {
        var_dump("Log data to database");
    }
}

class LogToXWebService implements Logger
{

    public function log($data)
    {
        var_dump("Log to x web service");
    }
}


class App
{
    public function Log($data, Logger $logger = null)
    {
        $logger = $logger ?: new LogToFile();
        $logger->log($data);

    }
}

$app = new App();

$app->log("Some data goes here");

//$app->log("Some data goes here", new LogToXWebService());