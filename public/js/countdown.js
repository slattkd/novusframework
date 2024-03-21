/**
 * A sweet js countdown timer with a custom callback that gives you a JSON object!
 * Heavily modified code originally found on http://www.ricocheting.com/code/javascript/html-generator/countdown-timer
 *
 * @param string|Date String representation of when to countdown to. Date objects probably work too
 * @param callback Function triggered when the interval has passed
 * @param int Number of milliseconds for the timeout. Defaults to 1000 (1 second)
 *
 * @return object Returns a JSON object with properties: days, hours, minutes, seconds
 */

const zeroPad = (num, places) => String(num).padStart(places, '0')

timer1 = function(endDate, callback, interval) {
    endDate = new Date(endDate);
    interval = interval || 1000;
    expired = null;

    var currentDate = new Date()
        , millisecondDiff = endDate.getTime() - currentDate.getTime() // get difference in milliseconds
        , timeRemaining = {
            days: 0
            , hours: 0
            , minutes: 0
            , seconds: 0
        }
        ;

    if(millisecondDiff > 0) {
        millisecondDiff = Math.floor( millisecondDiff/1000 ); // kill the "milliseconds" so just secs

        timeRemaining.days = Math.floor( millisecondDiff/86400 ); // days
        millisecondDiff = millisecondDiff % 86400;

        timeRemaining.hours = Math.floor( millisecondDiff/3600 ); // hours
        millisecondDiff = millisecondDiff % 3600;

        timeRemaining.minutes = Math.floor( millisecondDiff/60 ); // minutes
        millisecondDiff = millisecondDiff % 60;

        timeRemaining.seconds = Math.floor(millisecondDiff); // seconds

        setTimeout(function() {
            timer1(endDate, callback);
        }, interval);
    }

    callback(timeRemaining);
}

timer2 = function(endDate, callback, interval) {
    endDate = new Date(endDate);
    interval = interval || 1000;
    expired = null;

    var currentDate = new Date()
        , millisecondDiff = endDate.getTime() - currentDate.getTime() // get difference in milliseconds
        , timeRemaining = {
            days: 0
            , hours: 0
            , minutes: 0
            , seconds: 0
        }
        ;

    if(millisecondDiff > 0) {
        millisecondDiff = Math.floor( millisecondDiff/1000 ); // kill the "milliseconds" so just secs

        timeRemaining.days = Math.floor( millisecondDiff/86400 ); // days
        millisecondDiff = millisecondDiff % 86400;

        timeRemaining.hours = Math.floor( millisecondDiff/3600 ); // hours
        millisecondDiff = millisecondDiff % 3600;

        timeRemaining.minutes = Math.floor( millisecondDiff/60 ); // minutes
        millisecondDiff = millisecondDiff % 60;

        timeRemaining.seconds = Math.floor(millisecondDiff); // seconds

        setTimeout(function() {
            timer2(endDate, callback);
        }, interval);
    }

    callback(timeRemaining);
}

timer3 = function(endDate, callback, interval) {
    endDate = new Date(endDate);
    interval = interval || 100;
    expired = null;

    var currentDate = new Date()
        , millisecondDiff = endDate.getTime() - currentDate.getTime() // get difference in milliseconds
        , timeRemaining = {
            days: 0
            , hours: 0
            , minutes: 0
            , seconds: 0
            , milli: 0
        }
        ;
        
    if(millisecondDiff > 0) {
        // millisecondDiff = Math.floor( millisecondDiff/1000 ); // kill the "milliseconds" so just secs

        timeRemaining.days = Math.floor( millisecondDiff/86400000 ); // days
        millisecondDiff = millisecondDiff % 86400000;

        timeRemaining.hours = Math.floor( millisecondDiff/3600000 ); // hours
        millisecondDiff = millisecondDiff % 3600000;

        timeRemaining.minutes = Math.floor( millisecondDiff/60000 ); // minutes
        millisecondDiff = millisecondDiff % 60000;

        timeRemaining.seconds = Math.floor(millisecondDiff/1000); // seconds
        millisecondDiff = millisecondDiff % 1000;

        timeRemaining.milli = Math.floor(millisecondDiff/100); // seconds
        millisecondDiff = millisecondDiff % 100;

        setTimeout(function() {
            timer3(endDate, callback);
        }, interval);
    }

    callback(timeRemaining);
}

timerdm = function(endDate, callback, interval) {
    endDate = new Date(endDate);
    interval = interval || 1000;
    expired = null;

    var currentDate = new Date()
        , millisecondDiff = endDate.getTime() - currentDate.getTime() // get difference in milliseconds
        , timeRemaining = {
            days: 0
            , hours: 0
            , minutes: 0
            , seconds: 0
        }
        ;

    if(millisecondDiff > 0) {
        millisecondDiff = Math.floor( millisecondDiff/1000 ); // kill the "milliseconds" so just secs

        timeRemaining.days = Math.floor( millisecondDiff/86400 ); // days
        millisecondDiff = millisecondDiff % 86400;

        timeRemaining.hours = Math.floor( millisecondDiff/3600 ); // hours
        millisecondDiff = millisecondDiff % 3600;

        timeRemaining.minutes = Math.floor( millisecondDiff/60 ); // minutes
        millisecondDiff = millisecondDiff % 60;

        timeRemaining.seconds = Math.floor(millisecondDiff); // seconds

        setTimeout(function() {
            timerdm(endDate, callback);
        }, interval);
    }

    callback(timeRemaining);
}