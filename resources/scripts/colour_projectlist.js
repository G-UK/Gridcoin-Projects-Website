$(document).ready(function(){

    /*Vote Status*/
    $('td:nth-child(2)').filter('td:contains(In)')
    .addClass("whitelist");
    $('td:nth-child(2)').filter('td:contains(NO VOTE)')
    .addClass("greylist");
    $('td:nth-child(2)').filter('td:contains(Out)')
    .addClass("blacklist");
/*
    W.A.S
    $('td:nth-child(10)').filter('value="<0.1"')
    .addClass("whitelist");
    $('td:nth-child(10)').filter('value="0.1 - 0.5"')
    .addClass("greylist");
    $('td:nth-child(10)').filter('value=">0.5"')
    .addClass("blacklist");

    Z.C.D

    $('td:nth-child(9)').filter(function(){
            var number = parseInt(, 10);
            return(number <= 7);})
        .addClass("whitelist");
    $('td:nth-child(9)').filter
        (function(){
        var number = parseInt($(this).find('.number').text(), 10);
        return number > 7;})
    .addClass("blacklist");
*/
    /*Project Status*/
    $('td:nth-child(8)').filter('td:contains(Whitelisted)')
    .addClass("whitelist");
    $('td:nth-child(8)').filter('td:contains(Greylisted)')
    .addClass("greylist");
    $('td:nth-child(8)').filter('td:contains(Unlisted)')
    .addClass("blacklist");
    /*Recommended Status*/
    $('td:nth-child(9)').filter('td:contains("Suitable for Rewards")')
    .addClass("whitelist");
    $('td:nth-child(9)').filter('td:contains(Greylisted)')
    .addClass("greylist");
    $('td:nth-child(9)').filter('td:contains("Unsuitable for Rewards")')
    .addClass("blacklist");
});