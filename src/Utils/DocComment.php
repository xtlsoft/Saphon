<?php
/**
 * Saphon project
 * 
 * @author Tianle Xu <xtl@xtlsoft.top>
 * @category CLI
 * @package Saphon
 */

namespace Saphon\Utils;

class DocComment {

    /**
     * Extract DocComments
     *
     * @param mixed $obj
     * @return array
     */
    public static function extract($sth): array {
        $reflection = new \ReflectionClass($sth);
        $rslt = [];
        $rslt['__class__'] = $reflection->getDocComment();
        foreach ($reflection->getMethods() as $method) {
            $rslt[$method->name] = $method->getDocComment();
        }
        return $rslt;
    }

    /**
     * Deal with the comments
     *
     * @param array $comments
     * @return array
     */
    public static function process(array $comments): array {
        foreach ($comments as &$comment) {
            $lines = explode("\n", $comment);
            $rslt = "";
            foreach ($lines as $line) {
                $line = trim($line);
                if (substr($line, 0, 1) != "*" || substr($line, 0, 2) == "*/") continue;
                else $rslt .= trim(substr($line, 1)) . "\n";
            }
            $comment = $rslt;
        }
        return $comments;
    }

}