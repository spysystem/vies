<?php


 function autoload_a491fac2aca0d362cc5399a4dfbe7a5b($class)
{
    $classes = array(
        'VIES\CheckVatService' => __DIR__ .'/CheckVatService.php',
        'VIES\checkVat' => __DIR__ .'/checkVat.php',
        'VIES\checkVatResponse' => __DIR__ .'/checkVatResponse.php',
        'VIES\checkVatApprox' => __DIR__ .'/checkVatApprox.php',
        'VIES\checkVatApproxResponse' => __DIR__ .'/checkVatApproxResponse.php',
        'VIES\matchCode' => __DIR__ .'/matchCode.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_a491fac2aca0d362cc5399a4dfbe7a5b');

// Do nothing. The rest is just leftovers from the code generation.
{
}
