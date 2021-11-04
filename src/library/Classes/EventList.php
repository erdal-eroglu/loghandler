<?php

namespace LogHandler\Classes;

/*
 *
 * Erdal EROĞLU <erdal@istanbul-soft.com.tr>
 *
 * 03-09-2020
 *
 */

use LogHandler\Classes\Drivers\IDriver;

class EventList {

    public static Array $list = [

        'mail-send'=>\LogHandler\Classes\Events\Mail\MailSend::class,

        'slack-push'=>\LogHandler\Classes\Events\Slack\SlackPush::class,

    ];

}