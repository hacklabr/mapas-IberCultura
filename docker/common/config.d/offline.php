<?php
$offline = env('OFFLINE', false);

return [
    'app.offline' => $offline && date('Y-m-d H:i:s') < env('OFFLINE_UNTIL', '2024-12-26 00:00:00'),
    'app.offlineUrl' => '/mantenimiento.php',
    'app.offlineBypassFunction' => function() {
        $senha = $_GET['online'] ?? '';
        
        if ($senha === env('OFFLINE_BYPASS')) {
            $_SESSION['online'] = true;
        }

        return $_SESSION['online'] ?? false;
    }
];

