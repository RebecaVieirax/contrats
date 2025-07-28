<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Email extends BaseConfig
{
    public bool $SMTPAuth = true;

    public string $fromEmail = '';
    public string $fromName  = '';
    public string $recipients = '';

    public string $userAgent = 'CodeIgniter';
    public string $protocol  = 'smtp';
    public string $mailPath  = '/usr/sbin/sendmail';

    public string $SMTPHost = '';
    public string $SMTPUser = '';
    public string $SMTPPass = '';
    public int    $SMTPPort = 587;
    public int    $SMTPTimeout = 10;
    public bool   $SMTPKeepAlive = false;
    public string $SMTPCrypto = 'tls';

    public bool $wordWrap = true;
    public int  $wrapChars = 76;
    public string $mailType = 'html';
    public string $charset = 'UTF-8';
    public bool $validate = false;
    public int $priority = 3;
    public string $CRLF = "\r\n";
    public string $newline = "\r\n";
    public bool $BCCBatchMode = false;
    public int $BCCBatchSize = 200;
    public bool $DSN = false;

    public function __construct()
    {
        parent::__construct();
    
        $this->SMTPHost   = env('app.emailSMTPHost');
        $this->SMTPUser   = env('app.emailSMTPUser');
        $this->SMTPPass   = env('app.emailSMTPPass');
        $this->SMTPPort   = (int) env('app.emailSMTPPort');
        $this->SMTPCrypto = env('app.emailSMTPCrypto');
        $this->fromEmail  = env('app.emailFromEmail');
        $this->fromName   = env('app.emailFromName');
    }
    
}
