var idSite = 1;
var piwikTrackingApiUrl = 'https://gridcoin.ddns.net/piwik/piwik.php';

var _paq = _paq || [];
  _paq.push(['setTrackerUrl', piwikTrackingApiUrl]);
  _paq.push(['setSiteId', idSite]);
  _paq.push(["setDocumentTitle", document.domain + "/" + document.title]);
  _paq.push(["setCookieDomain", "*.gridcoin.ddns.net"]);
  _paq.push(["setDomains", ["*.gridcoin.ddns.net"]]);
  _paq.push(['enableHeartBeatTimer']);
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);