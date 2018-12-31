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
     * Constructor
     */
    public function __construct() {
        parent::__construct();
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