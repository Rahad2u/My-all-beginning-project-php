<?php

class NetworkProblem extends Exception{};
class DatabaseProblem extends Exception{};
class DiskProblem extends Exception{};

interface Errorhandeling{
    function connect();
    function getname();
    function report($name);
}

class Netowork_P implements Errorhandeling{
    function connect()
    {
        throw new NetworkProblem();
    }
    function getname(){
        return "Netowork";
    }
    function report($name){

    }
}
class SQL_P implements Errorhandeling{
    function connect()
    {
        throw new DatabaseProblem();
    }
    function getname(){
        return "SQL";
    }
    function report($name){
        
    }
}
class MonggoDB_P implements Errorhandeling{
    function connect()
    {
        return $this;
    }
    function getname(){
        return "MonggoDB";
    }
    function report($name){
        
    }
}
class connection_poll{
    private $storage;
    private $connection;
    function __construct(){
        $this->storage = array();
    }
    function PushDocuments(Errorhandeling $storage){
        array_push($this->storage, $storage);
    }
    function getconnection(){
        foreach($this->storage as $storage){
            try{
               $this->connection = $storage->connect();
            }catch(NetworkProblem $e){
                echo $storage->getname(). " is having some problem with it's netowork\n";
                $storage->report("ip => 103.147.162.33","error => load");
            }catch(DatabaseProblem $e){
                echo $storage->getname(). " is facing huge load\n";
                $storage->report("ip => 103.147.162.33","error => Databse issue");
            }catch(DiskProblem $e){
                echo $storage->getname(). " Disk full\n";
                $storage->report("ip => 103.147.162.33","error => Disk Full");
            }
            if($this->connection){
                break;
            }
        }
        if($this->connection){
            return $this->connection;
        }
        return false;
    }
}

$netowork    = new Netowork_P();
$sql         = new SQL_P();
$diskproblem = new MonggoDB_P();

$cp = new connection_poll();

$cp->PushDocuments($netowork);
$cp->PushDocuments($sql);
$cp->PushDocuments($diskproblem);

$connection = $cp->getconnection();

