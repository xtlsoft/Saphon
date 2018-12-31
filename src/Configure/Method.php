<?php
/**
 * Saphon project
 * 
 * @author Tianle Xu <xtl@xtlsoft.top>
 * @category CLI
 * @package Saphon
 */

namespace Saphon\Configure;

class Method implements ConfigureInterface {

    /**
     * The name of the method
     *
     * @var string[]
     */
    public $name = ["help"];

    /**
     * The description of the method
     * 
     * @var string
     */
    public $description = "No description given.";

    /**
     * The parameters
     *
     * @var Parameter[]
     */
    public $parameter = [];

}