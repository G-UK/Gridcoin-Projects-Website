<!doctype html>
<html lang="en-GB">
<head>
    <?php include('/srv/www/gridcoin.ddns.net/resources/standard-sections/head.php');?>
    <?php include('/srv/www/gridcoin.ddns.net/resources/standard-sections/1hr-cache.php');?>
<title>Gridcoin Project Listings</title>
    <script src="/resources/scripts/colour_projectlist.js"></script>
</head>

<body>
<?php include('/srv/www/gridcoin.ddns.net/resources/standard-sections/header.php');?>

<?php include('/srv/www/gridcoin.ddns.net/resources/standard-sections/navbar.php');?>

<section>

<div class=col-container>
    <aside class=left>
    </aside>
    <article class="col-one center">
        <h1>The Gridcoin Project List</h1>
        <p>The following project list will update on the following schedule (all times UTC) :</p>
        <ul>
            <li>Download project stats @ 05:00, 11:00, 17:00, 23:00</li>
            <li>Stats imported to database @ 06:00, 12:00, 18:00, 00:00</li>
            <li>Project listing status updated only @ 00:30</li>
        </ul>
    </article>
    <aside class=right>
    </aside>
</div>
<table class="projectslist">
<tr>
    <th class="col-name">
        <div>Project Name</div>
        <div>
            <a href="?column=ProjectName&amp;orderBy=ASC">
                <img
                    src="/resources/images/sort-up.png"
                    alt="Sort Ascending"
                    title="Up Arrow"
                >
            </a>
            <a href="?column=ProjectName&amp;orderBy=DESC">
                <img
                    src="/resources/images/sort-down.png"
                    alt="Sort Descending"
                    title="Down Arrow"
                >
            </a>
        </div>
    </th>
    <th class="col-votes">
        <div>
            <div class="tooltip">Vote (In/Out)
                <span class="tooltiptext">Result of last Whitelist Vote</span>
            </div>
        </div>
        <div>
            <a href="?column=Vote(In/Out)&amp;orderBy=ASC">
                <img
                    src="/resources/images/sort-up.png"
                    alt="Sort Ascending"
                    title="Up Arrow"
                >
            </a>
            <a href="?column=Vote(In/Out)&amp;orderBy=DESC">
                <img
                    src="/resources/images/sort-down.png"
                    alt="Sort Descending"
                    title="Down Arrow"
                >
            </a>
        </div>
    </th>
    <th class="col-votes">
        <div>
            <div class="tooltip">Vote (Date)
                <span class="tooltiptext">Date of last Whitelist Vote.<br>Where Applicable</span>
            </div>
        </div>
        <div>
            <a href="?column=Vote(Date)&amp;orderBy=ASC">
                <img
                    src="/resources/images/sort-up.png"
                    alt="Sort Ascending"
                    title="Up Arrow"
                >
            </a>
            <a href="?column=Vote(Date)&amp;orderBy=DESC">
                <img
                    src="/resources/images/sort-down.png"
                    alt="Sort Descending"
                    title="Down Arrow"
                >
            </a>
        </div>
    </th>
    <th class="col-stat">
        <div>
            <div class="tooltip">Speed (GFlops)
                <span class="tooltiptext">Reported Compute Speed of Project<br>Where Available</span>
            </div>
        </div>
        <div>
            <a href="?column=ComputeSpeed&amp;orderBy=ASC">
                <img
                    src="/resources/images/sort-up.png"
                    alt="Sort Ascending"
                    title="Up Arrow"
                >
            </a>
            <a href="?column=ComputeSpeed&amp;orderBy=DESC">
                <img
                    src="/resources/images/sort-down.png"
                    alt="Sort Descending"
                    title="Down Arrow"
                >
            </a>
        </div>
    </th>
    <th class="col-stat">
        <div>
            <div class="tooltip">Compute Availability
                <span class="tooltiptext">(Compute Speed/Active Users)+<br>(Workunit Queue/100)</span>
            </div>
        </div>
        <div>
            <a href="?column=ComputeAvailability&amp;orderBy=ASC">
                <img
                    src="/resources/images/sort-up.png"
                    alt="Sort Ascending"
                    title="Up Arrow"
                >
            </a>
            <a href="?column=ComputeAvailability&amp;orderBy=DESC">
                <img
                    src="/resources/images/sort-down.png"
                    alt="Sort Descending"
                    title="Down Arrow"
                >
            </a>
        </div>
    </th>
    <th class="col-stat">
        <div>
            <div class="tooltip">W.A.S
                <span class="tooltiptext">Work Availability Score =<br>7 Day Avg Daily Credit /<br>40 Day Avg Daily Credit</span>
            </div>
        </div>
        <div>
            <a href="?column=W.A.S&amp;orderBy=ASC">
                <img
                    src="/resources/images/sort-up.png"
                        alt="Sort Ascending"
                        title="Up Arrow"
                    >
                </a>
            <a href="?column=W.A.S&amp;orderBy=DESC">
                <img
                    src="/resources/images/sort-down.png"
                    alt="Sort Descending"
                    title="Down Arrow"
                >
            </a>
        </div>
    </th>
    <th class="col-stat">
        <div>
            <div class="tooltip">Z.C.D
                <span class="tooltiptext">Number Days of Zero Credit reported by the Project<br>aka Zero Credit Days</span>
            </div>
        </div>
        <div>
            <a href="?column=Z.C.D&amp;orderBy=ASC">
                <img
                    src="/resources/images/sort-up.png"
                    alt="Sort Ascending"
                    title="Up Arrow"
                >
            </a>
            <a href="?column=Z.C.D&amp;orderBy=DESC">
                <img
                    src="/resources/images/sort-down.png"
                    alt="Sort Descending"
                    title="Down Arrow"
                >
            </a>
        </div>
    </th>
    <th class="col-list">
        <div>
            <div class="tooltip">Project Status<br>(Official)
                <span class="tooltiptext">Calculated Status Using Currently Approved Process</span>
            </div>
        </div>
        <div>
            <a href="?column=Project Status&amp;orderBy=ASC">
                <img
                    src="/resources/images/sort-up.png"
                    alt="Sort Ascending"
                    title="Up Arrow"
                >
            </a>
            <a href="?column=Project Status&amp;orderBy=DESC">
                <img
                    src="/resources/images/sort-down.png"
                    alt="Sort Descending"
                    title="Down Arrow"
                >
            </a>
        </div>
    </th>
    <th class="col-list">
    <div>
        <div class="tooltip">Is Project Suitable for Gridcoin?<br> (Unofficial)
            <span class="tooltiptext">EXPERIMENTAL<br>For Informational Purposes Only</span>
        </div>
    </div>
    <div>
        <a href="?column=Project Suitability&amp;orderByASC">
            <img
                src="/resources/images/sort-up.png"
                alt="Sort Ascending"
                title="Up Arrow"
            >
        </a>
        <a href="?column=Project Suitability&amp;orderByDESC">
            <img
                src="/resources/images/sort-down.png"
                alt="Sort Descending"
                title="Down Arrow"
            >
        </a>
    </div>
    </th>
    <th class="col-update">
        <div>
            <div class="tooltip">Last Update
                <span class="tooltiptext">Timestamp from last project stats file downloaded</span>
            </div>
        </div>
        <div>
            <a href="?column=LastUpdate&amp;orderBy=ASC">
                <img
                    src="/resources/images/sort-up.png"
                    alt="Sort Ascending"
                    title="Up Arrow"
                >
            </a>
            <a href="?column=LastUpdate&amp;orderBy=DESC">
                <img
                    src="/resources/images/sort-down.png"
                    alt="Sort Descending"
                    title="Down Arrow"
                >
            </a>
        </div>
    <th class="col-note">
        <div>Notes</div>
    </th>
</tr>

<?php
class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {parent::__construct($it, self::LEAVES_ONLY);}
    function current() {return "<td>" . parent::current(). "</td>";}
    function beginChildren() {echo "<tr>";}
    function endChildren() {echo "</tr>" . "\n";}}
$servername = "localhost";
$username = "php";
$password = "#qea%vLK3LZw";
$dbname = "grc_listings";
$column = array(
    'ProjectName',
    'Vote(In/Out)',
    'Vote(Date)',
    'ComputeSpeed',
    'ComputeAvailability',
    'W.A.S',
    'Z.C.D',
    'Project Status',
    'Project Suitability',
    'LastUpdate');
$order = '`Project Name` ASC';
if ($_GET['column'] === 'ProjectName') {$columns="`Project Name`";}
if ($_GET['column'] === 'Vote(In/Out)') {$columns="`Vote (In/Out)`";}
if ($_GET['column'] === 'Vote(Date)') {$columns="`Vote (Date)`";}
if ($_GET['column'] === 'ComputeSpeed') {$columns="`Project Compute Speed (GFlops)`";}
if ($_GET['column'] === 'ComputeAvailability') {$columns="`Compute Availability`";}
if ($_GET['column'] === 'W.A.S') {$columns="`W.A.S (Work Availability Score)`";}
if ($_GET['column'] === 'Z.C.D') {$columns="`Z.C.D (Zero Credit Days)`";}
if ($_GET['column'] === 'Project Status') {$columns="`Project Status`";}
if ($_GET['column'] === 'Project Suitability') {$columns="`Project Suitability`";}
if ($_GET['column'] === 'LastUpdate') {$columns="`Last Update`";}
if (isset($_GET['column']) && in_array($_GET['column'], $column)) {$order = $columns . ' ' . $_GET['orderBy'];}  
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare
        ("SELECT
            `Project Name`,
            `Vote (In/Out)`,
            `Vote (Date)`,
            `Project Compute Speed (GFlops)`,
            `Compute Availability`,
            `W.A.S (Work Availability Score)`,
            `Z.C.D (Zero Credit Days)`,
            `Project Status`,
            `Project Suitability`,
            `Last Update`,
            `Notes`
        FROM
            `Projects_Main`
        ORDER BY
            $order");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {echo $v;}
    }
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?> 

</section>
<?php include('/srv/www/gridcoin.ddns.net/resources/standard-sections/footer.php');?>
</body>
</html>
