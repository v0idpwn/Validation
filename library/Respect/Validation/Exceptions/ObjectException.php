<?php

namespace Respect\Validation\Exceptions;

class ObjectException extends ValidationException
{

    public static $defaultTemplates = array(
        self::STANDARD => '"%s" is not an object',
    );

}