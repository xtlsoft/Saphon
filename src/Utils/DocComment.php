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
     * Prepare the comments
     *
     * @param array $comments
     * @return array
     */
    public static function prepare(array $comments): array {
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

    /**
     * Process the comments
     *
     * @param array $comments
     * @return array
     */
    public static function process(array $comments): array {
        static $multiple = ['param'];
        foreach ($comments as $key=>&$comment) {
            $rslt = ["description" => []];
            $curr = "";
            foreach (explode("\n", $comment) as $line) {
                if (substr($line, 0, 1) !== '@') {
                    if ($curr === "") $curr = "description";
                    if (in_array($curr, $multiple)) $rslt[$curr][count($rslt[$curr]) - 1] = array_merge($rslt[$curr][count($rslt[$curr]) - 1], self::explodeWithBrackets($line, " ", '[', ']'));
                    else $rslt[$curr] = array_merge($rslt[$curr], self::explodeWithBrackets($line, " ", '[', ']'));
                } else {
                    $ex = self::explodeWithBrackets($line, " ", '[', ']');
                    $curr = substr($ex[0], 1);
                    if (in_array($curr, $multiple)) $rslt[$curr][] = array_slice($ex, 1);
                    else $rslt[$curr] = array_slice($ex, 1);
                }
            }
            $comment = $rslt;
        }
        return $comments;
    }

    /**
     * Explode a string with brackets
     *
     * @param string $str
     * @param string $bracket
     * @return array
     */
    public static function explodeWithBrackets(string $str, string $delimiter, string $_bracket, string $bracket_): array {
        $rslt = [""];
        $str = str_split($str);
        $depth = 0;
        $curr = 0;
        foreach ($str as $k=>$ch) {
            if ($depth < 0) return explode($delimiter, $str);
            if ($ch === $_bracket && $str[$k - 1] !== '\\') ++ $depth;
            else if ($ch === $bracket_ && $str[$k - 1] !== '\\') -- $depth;
            else if ($ch === $delimiter) {
                if ($depth === 0) {
                    ++ $curr;
                    $rslt[$curr] = "";
                } else $rslt[$curr] .= $delimiter;
            }
            else if ($ch === '\\' && ($str[$k + 1] === $_bracket || $str[$k + 1] === $bracket_))
                $rslt[$curr] .= '';
            else {
                $rslt[$curr] .= $ch;
            }
        }
        if ($rslt === [""]) return [];
        return $rslt;
    }

}