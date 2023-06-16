<?php
require_once "database.php";


class ClientList
{
    private $Clients = array();

    function __construct(array $Data2)
    {
        $this->Clients = $Data2;

    }

    public function DisplayClientList()
    {

        foreach ($this->Clients as $key => $client)
            echo $client (["first_name"], $client["last_name"], $client["adresse"], $client ["zip_code"], $client ["city"]);

//        var_dump($client["first_name"]);
    }

}

$db = new DB();
$clients = $db->GetAllClients($db);

$data = new ClientList ($clients);
$data->DisplayClientList();

