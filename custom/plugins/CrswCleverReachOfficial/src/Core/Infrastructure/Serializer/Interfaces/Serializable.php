<?php

namespace Crsw\CleverReachOfficial\Core\Infrastructure\Serializer\Interfaces;

/**
 * Interface Serializable
 *
 * @package Crsw\CleverReachOfficial\Core\Infrastructure\Serializer\Interfaces
 */
interface Serializable extends \Serializable
{
    /**
     * Transforms array into an serializable object,
     *
     * @param array $array Data that is used to instantiate serializable object.
     *
     * @return \Crsw\CleverReachOfficial\Core\Infrastructure\Serializer\Interfaces\Serializable
     *      Instance of serialized object.
     */
    public static function fromArray(array $array);

    /**
     * Transforms serializable object into an array.
     *
     * @return array Array representation of a serializable object.
     */
    public function toArray();
}