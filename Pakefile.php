<?php

pake_import('pear');

pake_desc('package and install current snapshot');
pake_task('install', 'pear_package');

pake_desc('run Demo-application');
pake_task('demo');

function run_install()
{
    pake_superuser_sh('pear install -f aip-0.9.3.tgz');
}

function run_demo()
{
    pake_sh('aip app '.realpath(__DIR__.'/examples/new/aip.yaml'), true);
}
