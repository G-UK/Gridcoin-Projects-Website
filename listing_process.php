<!doctype html>
<html lang="en-GB">
<head>
    <?php include('resources/head.php');?>
    <title>Listings Process</title>
</head>

<body>
<?php include('resources/header.php');?>
<?php include('resources/navbar.php');?>
<section class="col-12">
    <h2>Management of listed BOINC projects (Greylisting)</h2>
    <p>The Greylist enables temporary removal and relisting of BOINC projects from the Gridcoin Whitelist based upon some simple rules.</p>
    <p>A project will be automatically Greylisted if ANY ONE of the following requirements are met:</p>
    <ul>
        <li>Projects Work Availability Score (WAS) is Red</li>
        <li>Number of Zero Credit Days (ZCD) > 7 in 20</li>
    </ul>
    <p>A project will be automatically re-whitelisted without requiring a new vote within the Gridcoin wallet if ALL of the following requirements are met:</p>
    <ul>
        <li>Project is Greylisted</li>
        <li>Projects Work Availability Score (WAS) is Green</li>
        <li>Number of Zero Credit Days (ZCD) ≤ 7 in 20</li>
    </ul>
</section>
<section class="col-12">
    <h2>Whitelisting a new BOINC project</h2>
    <p>A project is eligible to be whitelisted only if it meets ALL of the following criteria:</p>
    <ul>
        <li>Projects Work Availability Score (WAS) is Green</li>
        <li>Number of Zero Credit Days (ZCD) ≤ 7 in 20</li>
        <li>The purpose of the projects work is as described</li>
        <li>Allows new user sign-ups</li>
        <li>All users have an equal chance of receiving work units within any one application / platform with the following exceptions:</li>
        <ul>
            <li>A project may restrict work to computers generating faulty results</li>
            <li>A project may restrict / ban users or computers for breach of either BOINC or the projects terms of service</li>
        </ul>
    </ul>   
    <p>If all of these criteria are met, the following process must be followed.</p>
    <ol type="1">
        <li>Discussion thread opened on <a href="https://cryptocurrencytalk.com/forum/2436-projects/">https://cryptocurrencytalk.com</a></li>
        <li>Poll is opened within the Gridcoin client in the form:</li>
            <ul>
                <li>[Whitelist] Should the project "Project Name" be Whitelisted?</li>
                <li>Answer Options: Yes, No, Abstain</li>
                <li>Link to Discussion Thread provided</li>
                <li>2 Week duration</li>
                <li>Magnitude &amp; Balance</li>
            </ul>
            <p>No other opinion must be given in the wallet poll to ensure neutrality.</p>
            <p>Poll is successful if "Yes" gains greater than 50% of vote share and vote participation is above a weight of 7.5%</p>
        </li>
        <li>Agree go-live date on the TeamGridcoin Slack # boinc_projects channel with the admins with whitelist admin privileges.</li>
        <li>Inform the project of Gridcoins intention to whitelist the project on the agreed date and ask if there is any objection to this.</li>
            <ul>
                <li>Done via post on forum and PM to admin.</li>
                <li>Project will not be whitelisted if project administrator raises any objection.</li>
            </ul>
        <li>Project is added to whitelist on the agreed date.</li>
    </ol>
</section>
<section class="col-12">
<h2>Notes &amp; References</h1>
    <h3>Work Availability Score</h2>
    <pre>WAS = Green If (Mean daily credit for 7 Days > (0.1 * Mean daily credit for 40 Days)) Else Red</pre>

    <h3>Project Delisting</h2>
    <p>Project De-listing process will follow separately after further discussion</p>

    <h3>TCD (Total Credit Delta)</h2>
    <p>If TCD is implemented then Work Availability Score (WAS) would still work in terms of whitelisting/greylisting however replacement by a TCD solution should be considered.</p>

    <h3>Data Sources</h2>
    <p>All data used for calculations can be scraped from the existing available project XML files.</p>

    <p>eg. <a href=https://boinc.bakerlab.org/rosetta/stats/tables.xml>https://boinc.bakerlab.org/rosetta/stats/tables.xml</a></p>

    <p>Currently removal/re-adding will need to be requested on the Gridcoin Slack # boinc_projects channel for an admin with whitelisting permissions to manually process.</p>
</section>
<section class="col-12">
<h2>Change Log</h1>
<p>v1.0: 20th Jan 2018</p>
<ul>
    <li>Final Release for public vote.</li>
    <li>Split off de-listing for further discussion</li>
    <li>Removed polls needing both greater than 50% Vote weight and 50% number of votes due to abuse concerns</li>
    <li>Added requirement for vote participation of 7.5%</li>
    <li>Added Project Administrator opt-out added</li>
</ul>
<p>v0.5: 17th Jan 2018</p>
<ul>
    <li>Capitalised BOINC</li>
    <li>Removed need for explanation from project administrator for Greylist -> Whitelist</li>
    <li>Increased time-limit for Greylist -> Unlist to 60 Days</li>
    <li>Added polls needing both greater than 50% Vote weight and 50% number of votes</li>
</ul>
<p>v0.4: 4th Jan 2018</p>
<ul>
    <li>Renamed "Parejan Score" to "Work Availability Score" to be more descriptive</li>
    <li>Added "Zero Credit Days" requirement</li>
    <li>Moved calcs to reference section</li>
    <li>Removed Computing Power calcs as they would be unreliable and hard to implement</li>
    <li>Implementation Actions added</li>
</ul>
<p>v0.3: 19th Dec 2017</p>
<ul>
    <li>Moved from Steemit to Github</li>
    <li>Changed versioning to 0.x to denote drafts</li>
    <li>Changed "Demand" calculation to hopefully be more accurate</li>
    <li>Added notes regarding TCD and data sources</li>
    <li>General formatting and wording changes to clear up ambiguity</li>
</ul>
<p>v0.2: 16th Dec 2017</p>
<ul>
    <li>Requirements changed to use "Parejan" score</li>
    <ul>
        <li>Score = Red If (Mean Daily credit of last 7 Days ≤ (0.1 * Mean daily credit of last 40 Days))</li>
        <li>Score = Green If (Mean Daily credit of last 7 Days > (0.1 * Mean daily credit of last 40 Days))</li>
    </ul>
    <li>Added "Demand" calculation utilising Boinstats data.</li>
    <li>Expected Project RAC Increase (%) = ("Gridcoin Combined RAC"/"Overall Combined RAC)*100</li>
    <ul>
        <li>Example at time of writing: (724,799,691/4,011,866,296)*100 = 18%</li>
    </ul>
    <li>Removed requirement for Project Administrator to directly comment regarding whitelisting</li>
    <li>Reworded whitelisting process step 4</li>
    <li>Reworded re-whitelisting requirement point 3</li>
</ul>
<p>v0.1: 13th Dec 2017</p>
<ul> 
    <li>Initial Draft</li>
</ul>
    <br><br>
</section>
<?php include('resources/footer.php');?>
</body>
</html>