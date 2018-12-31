<?php
/**
 * Saphon project
 * 
 * @author Tianle Xu <xtl@xtlsoft.top>
 * @category CLI
 * @package Saphon
 */

namespace Saphon;

abstract class Application extends MethodProvider {
    
    /**
     * The methods
     *
     * @var array
     */
    protected $methods = [];

    /**
     * Constructor
     */
    public function __construct() {

    }

    /**
     * Register a MethodProvider
     *
     * @param MethodProvider $provider
     * @return self
     */
    public function registerMethodProvider(MethodProvider $provider): self {
        return $this;
    }

}