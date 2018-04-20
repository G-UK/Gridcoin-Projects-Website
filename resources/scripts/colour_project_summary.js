$(document).ready(function(){
    $('.liststatus').filter('section:contains(Whitelisted)')
    .addClass("whitelist");
    $('.liststatus').filter('section:contains(Greylisted)')
    .addClass("greylist");
    $('.liststatus').filter('section:contains(Unlisted)')
    .addClass("blacklist");
});