<?php

namespace Liloi\Imperial\API\Imperials\Edit;

use Liloi\API\Response;
use Liloi\Imperial\API\Method as SuperMethod;
use Liloi\Imperial\Engine\Domain\Imperials\Manager;
use Liloi\Imperial\Engine\Domain\Imperials\Statuses;

class Method extends SuperMethod
{
    public static function execute(): Response
    {
        $entity = Manager::load(self::getParameter('key'));
        $response = new Response();

        $response->set('render', static::render(__DIR__ . '/Template.tpl', [
            'entity' => $entity,
            'statuses' => Statuses::$list,
        ]));

        return $response;
    }
}