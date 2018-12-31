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
     * The description of the parameter
     * 
     * @var string
     */
    public $description = "No description given.";

    /**
     * The mapping variable
     *
     * @var string
     */
    public $mapping = '$help';

}