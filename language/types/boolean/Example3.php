<?php
    var_dump((bool) "");        //bool(false)
    var_dump((bool) 1);         //bool(false)
    var_dump((bool) -2);        //bool(false)
    var_dump((bool) "foo");     //bool(false)
    var_dump((bool) 2.3e5);     //bool(false)
    var_dump((bool) array(12)); //bool(false)
    var_dump((bool) array());   //bool(false)
    var_dump((bool) "false");   //bool(false)
?>