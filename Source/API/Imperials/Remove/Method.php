<?php

namespace Liloi\Imperial\API\Imperials\Remove;

use Liloi\API\Response;
use Liloi\Imperial\API\Method as SuperMethod;
use Liloi\Imperial\Engine\Domain\Imperials\Manager;
use Liloi\Imperial\Engine\Domain\Imperials\Statuses;

class Method extends SuperMethod
{
    public static function execute(): Response
    {
        $entity = Manager::load(self::getParameter('key'));
        $entity->setStatus(Statuses::OBSOLETE);
        $entity->save();

        return new Response();
    }
}