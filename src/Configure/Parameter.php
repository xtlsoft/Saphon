<?php
/**
 * Saphon project
 * 
 * @author Tianle Xu <xtl@xtlsoft.top>
 * @category CLI
 * @package Saphon
 */

namespace Saphon\Configure;

class Parameter implements ConfigureInterface {

    /**
     * The name of the parameter
     *
     * @var string[]
     */
    public $name = ["help"];

    /**
     * The type of the parameter
     * 
     * @var string
     */
    public $type = "mixed";

    /**
     * The mapping variable
     *
     * @var string
     */
    public $mapping = '$help';

    /**
     * Is a flag
     *
     * @var boolean
     */
    public $flag = true;

}