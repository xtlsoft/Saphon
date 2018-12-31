<?php
/**
 * Saphon project
 * 
 * @author Tianle Xu <xtl@xtlsoft.top>
 * @category CLI
 * @package Saphon
 */

namespace Saphon\Configure\Parser;

use \Saphon\Utils\DocComment;
use \Saphon\Configure as C;

class Parser {

    /**
     * Parse it
     *
     * @param mixed $obj
     * @return \Saphon\Configure\ConfigureInterface[]
     */
    public static function parse($obj): array {
        $chk = function ($a) {if ($a) return $a; else return null;};
        $rslt = [];
        $processed = DocComment::process(DocComment::prepare(DocComment::extract($obj)));
        foreach ($processed as $key=>$value) {
            if ($value === []) break;
            if ($key === "__class__") { // Application class
                $r = new C\Application;
                $r->package = $chk(@$value['package'])[0];
                $r->description = join(" ", $chk(@$value['description']));
                $r->license = $chk(@$value['license'])[0];
                $r->version = $chk(@$value['version'])[0];
                $au = new C\Author;
                $au->name = trim(explode("<", join(" ", $chk(@$value['author'])))[0]);
                $au->mail = trim(substr(trim(explode("<", join(" ", $chk(@$value['author'])))[1]), 0, -1));
                $r->author = $au;
                $rslt[$key] = $r;
            }
        }
        return $rslt;
    }

}