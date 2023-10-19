<?php
namespace GlobalPayments\Api\Tests\Integration\Gateways\Terminals;

use GlobalPayments\Api\Terminals\Abstractions\ILogManagement;
use GlobalPayments\Api\Entities\Exceptions\ConfigurationException;

class LogManagement implements ILogManagement
{

    public string $logLocation;

    public function __construct()
    {
        $this->logLocation = 'logmanagement_'. date('Y-m-d') . '.log';
    }

    public function setLog($message, $backTrace = '')
    {
        try {
            $message = "\n$message\n$backTrace";
            file_put_contents($this->logLocation, $message, FILE_APPEND);
        } catch (\Exception $e) {
            throw new ConfigurationException('Error in log management config: ', $e->getMessage());
        }
    }
}
