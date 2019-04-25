<?php

return [
    [
        'name'  => 'self-update',
        'description' => 'When executed via the Phar file, performs a self-update by querying
the package repository. If successful, it will report the new version.',
        'short_description' => 'Perform a self-update of the script',
    ],
    [
        'name' => 'build',
        'route' => '<package> [--target=]',
        'description' => 'Build a package, using <package> as the package filename, and --target
as the application directory to be packaged.',
        'short_description' => 'Build a package',
        'options_descriptions' => [
            '<package>' => 'Package filename to build',
            '--target'  => 'Name of the application directory to package; defaults to current working directory',
        ],
        'defaults' => [
            'target' => getcwd(), // default to current working directory
        ],
        'handler' => 'My\Builder',
    ],
];
