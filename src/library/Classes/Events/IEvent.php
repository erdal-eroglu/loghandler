<?php
namespace LogHandler\Classes\Events;

interface IEvent {

    public  function set(Array $message):IEvent;

    public  function run():Array;

}