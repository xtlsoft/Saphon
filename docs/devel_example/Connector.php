<?php

namespace _\Devel\Example;

use Saphon\Protocol\ConnectorAbstract;

class HttpConnector extends ConnectorAbstract
{
    /**
     * Init initializes the connector
     *
     * @return void
     */
    public function init()
    {
        $server = new HttpServer();
        $server->on('request', [$this, 'handleRequest']);
    }
    /**
     * Handles a request
     *
     * @param PsrRequest $req
     * 
     * @return void
     */
    public function handleRequest(PsrRequest $req)
    { }
}
