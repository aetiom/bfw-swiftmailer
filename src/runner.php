<?php

$config = $this->getConfig();
$param = $config->getConfigByFilename('config.php');

if (!isset($param['transport'])) {
    throw new \Exception('transport is missing in config file');
}

if ($param['transport'] == 'sendmail') {
    if (!isset($param['path'])) {
        throw new \Exception('path is missing in config file');
    }

    $transport = new \Swift_SendmailTransport($param['path']);

} elseif ($param['transport'] == 'smtp') {
    if (!isset($param['server'])) {
        throw new \Exception('server is missing in config file');
    }

    if (!isset($param['port'])) {
        throw new \Exception('port is missing in config file');
    }

    $transport = new \Swift_SmtpTransport($param['server'], $param['port']);

    if (isset($param['username'])) {
        $transport->setUsername($param['username']);
    }

    if (isset($param['password'])) {
        $transport->setUsername($param['password']);
    }

} else {
    throw new \Exception('unknow transport type. only sendmail and smtp are allowed. '.$param['transport'].'given.');
}

$this->mailer = new \Swift_Mailer($transport);