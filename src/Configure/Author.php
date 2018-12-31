<?php
/**
 * Saphon project
 * 
 * @author Tianle Xu <xtl@xtlsoft.top>
 * @category CLI
 * @package Saphon
 */

namespace Saphon\Configure;

class Author implements ConfigureInterface {

    /**
     * The name of the developer
     *
     * @var string
     */
    public $name = "anonymous";

    /**
     * The email of the developer
     *
     * @var string
     */
    public $mail = "anonymous@example.com";

}