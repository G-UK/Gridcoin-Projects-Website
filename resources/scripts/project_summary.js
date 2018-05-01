$(document).ready(function(){
    $('.liststatus').filter('section:contains(Whitelisted)')
    .addClass("whitelist");
    $('.liststatus').filter('section:contains(Greylisted)')
    .addClass("greylist");
    $('.liststatus').filter('section:contains(Unlisted)')
    .addClass("blacklist");

    $('[href=""]')
    .parent()
    .css({'display': 'none'});

    $('.rss')
    .children('p:empty')
    .parent()
    .append("<p class=center>Project news could not be read.</p>");

});