<?php

namespace Automile\Sdk\Storage;

/**
 * Interface to be implemented by all storage concrete classes
 */
interface StorageInterface
{

    /**
     * @param StorableInterface $storable
     * @return bool
     */
    public function save(StorableInterface $storable);


    /**
     * @param string $storableClass
     * @return StorableInterface
     */
    public function restore($storableClass);

}
