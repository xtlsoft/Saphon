<?php

/**
 * The file is a part of Saphon
 * project. Please use it under
 * its license.
 *
 * @package  Saphon
 * @license  MIT
 * @author   Tianle Xu <xtl@xtlsoft.top>
 * @category framework
 * @link     https://github.com/xtlsoft/Saphon/
 */

namespace Saphon;

/**
 * Class Environment provides utilities
 * to deal with current environment.
 */
class Environment
{
    /**
     * Cache of Saphon's version
     *
     * @var string
     */
    protected static $_version = null;

    /**
     * Get Saphon's version
     *
     * @return string
     */
    public static function getVersion(): string
    {
        if (self::$_version)
            return self::$_version;

        // from file
        $version_file = dirname(__DIR__) . "/VERSION";
        if (file_exists($version_file)) {
            self::$_version = $version_string = file_get_contents($version_file);
            return self::$_version
        }

        // from .git
        $git_head_file = dirname(__DIR__) . "/.git/HEAD";
        if (file_exists($git_head_file)) {
            $lines = explode("\n", trim(file_get_contents($git_head_file)));
            $next_file = dirname(__DIR__) . "/.git/";
            foreach ($lines as $line) {
                if (substr($line, 0, 5) == "ref: ") {
                    $next_file .= substr($line, 5);
                    break;
                }
            }
            $commit_hash = '';
            if ($next_file === dirname(__DIR__) . "/.git/")
                $commit_hash = substr(trim($lines[0]), 0, 7);
            else
                $commit_hash = substr(trim(file_get_contents($next_file)), 0, 7);

            self::$_version = $version_string = "$version_string-git$commit_hash";
            return self::$_version
        }

        self::$_version = $version_string = "0.0.0-unknown";

        return self::$_version;
    }

    /**
     * Get PHP's SAPI name
     *
     * @return string
     */
    public static function getSapi(): string
    {
        return php_sapi_name();
    }
}
