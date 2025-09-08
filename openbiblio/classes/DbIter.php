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
    }
    function count()
    {
        $link = (new QueryAny)->db();
        return $link->num_rows($this->results);
    }
    function next()
    {
        $link = (new QueryAny)->db();
        $r = $link->fetch_assoc($this->results);
        if ($r === false) {
            return NULL;
        }
        return $r;
    }
}
?>