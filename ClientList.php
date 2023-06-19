<?php
include "database.php";


class ClientList
{
    protected $clients;

    public function __construct(array $clients)
    {
        $this->clients = $clients;

    }

    public function DisplayClientList()
    {

        foreach ($this->clients as $client)

            include "template/clientT.php";

//            var_dump($client);
    }

}

$db = new DB();
$clients = $db->GetAllClients($db);
var_dump($clients);

$clientlist = new ClientList($clients);;
$clientlist->DisplayClientList();

