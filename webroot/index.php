<?php
require '../lib/craft.php';

config(array(
));

using(array(
    'foo'
));

route(array(
    '/' => 'index.index',
));

run('../app');
