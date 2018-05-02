<!doctype html>
<html lang="en-GB">
<head>
<?php include('/srv/www/gridcoin.ddns.net/resources/standard-sections/head.php');?>
<?php include('/srv/www/gridcoin.ddns.net/resources/standard-sections/24hr-cache.php');?>
    <script async src="https://platform.twitter.com/widgets.js"></script>
    <meta name="twitter:widgets:autoload" content="on">
    <meta name="twitter:widgets:csp" content="on">
    <title>Gridcoin Projects</title>
</head>

<body>
<!-- Header -->
<?php include('/srv/www/gridcoin.ddns.net/resources/standard-sections/header.php');?>

<?php include('/srv/www/gridcoin.ddns.net/resources/standard-sections/navbar.php');?>

<!-- Containers for equal height Columns -->
<div class=col-container>

<!-- Left Sidebar -->
<aside class=left>
    <iframe id='widget-ticker-preview-btc'
        src="//www.coingecko.com/en/widget_component/ticker/gridcoin-research/btc">
    </iframe>
    <iframe id="widget-ticker-preview-usd"
        src="//www.coingecko.com/en/widget_component/ticker/gridcoin-research/usd">
    </iframe>
    <iframe id="widget-ticker-preview-gbp"
        src="//www.coingecko.com/en/widget_component/ticker/gridcoin-research/gbp">
    </iframe>
    <div><p class=center>Affiliate Link</p>
    <a href=https://wallet.bitshares.org/?r=g-uk rel=nofollow>
        <img
            src="/resources/images/bitshares.png"
            alt="Sign-up for Bitshares the Decentralised Exchange"
            title="Bitshares Logo, Links to wallet.bitshares.org"
            class="grcimg"
        >
    </a>
    </div>
    <a class="twitter-timeline" data-height="700" data-dnt="true" data-theme="dark" href="https://twitter.com/GridcoinNetwork">
    Tweets by GridcoinNetwork</a>
</aside>

<!-- Main Column -->
<article class=col-one>
    <h1 class=center>Latest News</h1>
    <br>
    <h2 class=center>Project Complete!! and other updates</h2>
    <p class="date center">2nd May 2018</p>
    <p>The Project Administrator over at the POGS:Skynet project has announced that the project has now been completed. All 
    of the Galaxy Data that needed to be processed has now been worked through thanks to all the BOINC and Gridcoin volunteers.
    The next stage of the project will be to train an auto-encoder neural network to classify the processed Galaxies by their features.</p>
    <p>As far as the Gridcoin Whitelist is concerned the project will remain on the Whitelist for the next few days as the remaining
    Work Units that are in progress are processed.</p>
    <p>The Citizen Science Grid project has fixed the problem that they have been experiencing with their database.
    As such, as long as the next project statistic update completes correctly the project will be saved from the Greylist.</p>
    <p>In other news, I have found a minor problem in how the statistics database processes and presents the Calculated Listing
    status. The problem can cause the Whitelist status of project to display incorrectly when it is on the cusp of the Greylist.
    The fix I have in mind is to only update the listing status of each project once at the end of each day when 
    we are sure a projects stats have updated for the day if they are going to update for the day.</p>
    <h2 class=center>New Project Pages</h2>
    <p class="date center">1st May 2018</p>
    <p>I've added two more project pages to the site, ClimatePrediction.net and Collatz Conjecture. Hopefully their rss news feeds
    should synchronise soon</p>
    <h2 class=center>Greylist Updates</h2>
    <p class="date center">30th April 2018</p>
    <p>TnGrid has moved to the project Greylist due to lack of available work after a storage issue on the universities servers.
    The project is working to fix the hardware fault and hopefully should be back soon
    <br><br>
    Remember that a project needs to have less than 7 days of Zero Credit (Z.C.D) in the last 20 days to be whitelisted, this will
    mean TNGrid which is balancing around th 7-8 Day mark currently will remain Greylisted until these last few days have fallen
    outside the 20 Day window that we check.
    <br><br>
    In other news the Citizen Science Grid Project have seemingly been having database problems the last few days meaning that the
    projects stats have not been updating properly, if you are crunching this project please be aware that it will be at risk of
    being Greylisted in the next few days.</p>
    <h2 class=center>Headline Test</h2>
    <p class="date center">29th April 2018</p>
    <p>This is a test for the upcoming news feature.
    <br><br>
    General website news, Project news and My own comments will be being posted here.</p>
</article>

<!-- Right Sidebar -->
<aside class=right>
    <div>
    <h2 class=center>What is</h2>
    <br>
    <a href="https://gridcoin.us">
        <img
             src="/resources/images/GRCHorizontal.png"
             alt="Visit the Official Gridcoin Homepage for more details"
             title="Gridcoin Horizontal Logo, Links to gridcoin.us"
             class="grcimg"
        >
    </a>
    <p>
    Gridcoin is an open-source blockchain that rewards the processing power a distributed computing network participant
    directs toward data-driven analysis and scientific discovery. This is accomplished by minting and distributing a
    cryptocurrency that is secured through a proof-of-stake protocol and monitors processing contributions to the
    distributed computing infrastructure, BOINC.
    </p>
    <br>
    </div>
    <div>
    <h2 class=center>What is</h2>
    <br>
    <a href="https://boinc.berkeley.edu/">
        <img
             src="/resources/images/boinc_logo_3d.png"
             alt="Visit the Official BOINC Homepage for more details"
             title="BOINC Logo, Links to boinc.berkeley.edu"
             class="boincimg"
         >
    </a>
    <p>
    The Berkeley Open Infrastructure for Network Computing (BOINC) is an open-source distributed computing infrastructure which
    provides anyone with data the opportunity to process that data for near zero cost by utilizing a global volunteer-base
    distributed computing network.
    <br><br>
    BOINC hosts major institutional computing projects such as IBM’s World Community Grid, SETI, and data from the Large Hadron
    Collider, alongside projects developed by students, enthusiasts, mathematicians, researchers, and citizen scientists.
    <br><br>
    </div>
    <div>
    <h2 class=center>What are the Gridcoin Listings?</h2>
    <br>
    <p>The Gridcoin listings were created to provide fair rewards, increase security and to focus user's resources on active projects.
    The essence of the listing processes are that projects must meet certain requirements regarding work availability,
    fair distribution of work and security.</p>
    </div>
</aside>
</div>

<!-- Footer -->
<?php include('/srv/www/gridcoin.ddns.net/resources/standard-sections/footer.php');?>

</body>
</html>