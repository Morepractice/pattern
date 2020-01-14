<?php
namespace Tests\DesignPatterns\Behavioral\Mediator;

class Mediator implements MediatorInterface
{
    /**
     * @var Subsystem\Client
     */
    private $client;

    /**
     * @var Subsystem\Database
     */
    private $database;

    /**
     * @var Subsystem\Server
     */
    private $server;

    public function __construct(Subsystem\Client $client, Subsystem\Server $server,Subsystem\Database $database)
    {
        $this->client = $client;
        $this->server = $server;
        $this->database = $database;

        $this->client->setMediator($this);
        $this->server->setMediator($this);
        $this->database->setMediator($this);
    }

    public function makeRequest()
    {
        $this->server->process();
    }

    public function queryDB():string
    {
        return $this->database->query();
    }

    public function sendResponse(string $content)
    {
        $this->client->output($content);
    }
}