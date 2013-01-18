<?php
function dump($var = null) {
    ob_start();
    var_dump($var);
    $html = ob_get_clean();
    echo '<pre>', htmlspecialchars($html), '</pre>';
}

function libs() {
    return array(
        'foo' => 'lib/foo.php',
    );
}

function route($routes = array()) {
}

function run($app = '') {
}

function using($libs = array()) {
    dump($libs);
    foreach ($libs as $lib) {
        try {
            if (!file_exists($lib)) {
                throw new Exception('Lib load failure.');
            }

            require $lib;
        } catch (Exception $e) {
            dump($e);
        }
    }
}
