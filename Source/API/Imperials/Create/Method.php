<?php

namespace Liloi\Imperial\API\Imperials\Create;

use Liloi\API\Response;
use Liloi\Imperial\API\Method as SuperMethod;
use Liloi\Imperial\Engine\Domain\Imperials\Manager;

class Method extends SuperMethod
{
    public static function execute(): Response
    {
        Manager::create();

        return new Response();
    }
}