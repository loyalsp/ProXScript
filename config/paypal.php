<?php
/**
 * Created by PhpStorm.
 * User: Adi
 * Date: 4/26/2018
 * Time: 9:18 AM
 */
return array(
    /** set your paypal credential **/
    'client_id' =>'AQf-xPpvTFB6NwIvQOPfR3U86bmTGjYJ7Fc3zYAeg6K5bMjl8DvP0nkpd--wqNU5rOQ9chF2aJH5v70R',
    'secret' => 'EOZ-BSTpr_fd9Qjp-r-AClsovDvsYrpLhBG8X3fmxentAd1vDHxX0DMNSwiy0ujmGhI55acMHj9Eq2Bg',
    /**
     * SDK configuration
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',
        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30000,
        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,
        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',
        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);