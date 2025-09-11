<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */

require_once('Iter.php');

class DbIter extends Iter
{
    //Changes PVD(8.0.x)
    var $results;
    //Changes PVD(8.0.x)
    function __construct($results)
    {
        $this->results = $results;
        error_log("DEBUG: DbIter __construct - results type: " . gettype($results) . ", num_rows: " . (new QueryAny)->db()->num_rows($results));
    }
    function count()
    {
        $link = (new QueryAny)->db();
        $num_rows = $link->num_rows($this->results);
        error_log("DEBUG: DbIter count - num_rows: " . $num_rows);
        return $num_rows;
    }
    function next()
    {
        $link = (new QueryAny)->db();
        $r = $link->fetch_assoc($this->results);
        error_log("DEBUG: DbIter next - fetch_assoc result: " . print_r($r, true));
        if ($r === false) {
            return NULL;
        }
        return $r;
    }
}
?>