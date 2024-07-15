<?php

foreach ([410, 451] as $errorCode) {
    $GLOBALS['TCA']['sys_redirect']['columns']['target_statuscode']['config']['items'][] = [
        'label' => 'HTTP ' . $errorCode,
        'value' => $errorCode,
        'group' => 'error',
    ];
}
$GLOBALS['TCA']['sys_redirect']['columns']['target_statuscode']['config']['itemGroups']['error'] = 'Errors';
