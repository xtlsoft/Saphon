<?php
/**
 * Saphon project
 * 
 * @author Tianle Xu <xtl@xtlsoft.top>
 * @category CLI
 * @package Saphon
 */

namespace Saphon\Configure;

class Application implements ConfigureInterface {

    /**
     * The name of the application
     *
     * @var string
     */
    public $package = "test-example-app";

    /**
     * The description of the application
     *
     * @var string
     */
    public $description = "No description given.";

    /**
     * The license of the application
     *
     * @var string
     */
    public $license = "(unknown)";

    /**
     * The version of the application
     *
     * @var string
     */
    public $version = "(unknown)";

    /**
     * The author of the application
     *
     * @var Author
     */
    public $author = null;

}