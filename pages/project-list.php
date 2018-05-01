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

<?php
echo "<table class=\"projectslist\">";
echo 
    "<tr>
    <th class=\"col-name\">
        <div>Project Name</div>
        <div><a href=\"?column=ProjectName&orderBy=ASC\"><img src=\"/resources/images/sort-up.png\" alt=\"up\"></a>
        <a href=\"?column=ProjectName&orderBy=DESC\"><img src=\"/resources/images/sort-down.png\" alt=\"down\"></a></div>
    </th>
    <th class=\"col-votes\">
        <div><div class=\"tooltip\">Vote (In/Out)
            <span class=\"tooltiptext\">Result of last Whitelist Vote</span>
        </div></div>
        <div><a href=\"?column=Vote(In/Out)&orderBy=ASC\"><img src=\"/resources/images/sort-up.png\" alt=\"up\"></a>
        <a href=\"?column=Vote(In/Out)&orderBy=DESC\"><img src=\"/resources/images/sort-down.png\" alt=\"down\"></a></div>
    </th>
    <th class=\"col-votes\">
        <div><div class=\"tooltip\">Vote (Date)
            <span class=\"tooltiptext\">Date of last Whitelist Vote.<br>Where Applicable</span>
        </div></div>
        <div><a href=\"?column=Vote(Date)&orderBy=ASC\"><img src=\"/resources/images/sort-up.png\" alt=\"up\"></a>
        <a href=\"?column=Vote(Date)&orderBy=DESC\"><img src=\"/resources/images/sort-down.png\" alt=\"down\"></a></div>
    </th>
    <th class=\"col-credit\">
        <div><div class=\"tooltip\">Total Credit
            <span class=\"tooltiptext\">Total Credit issued by the Project</span>
        </div></div>
        <div><a href=\"?column=ProjectTotalCredit&orderBy=ASC\"><img src=\"/resources/images/sort-up.png\" alt=\"up\"></a>
        <a href=\"?column=ProjectTotalCredit&orderBy=DESC\"><img src=\"/resources/images/sort-down.png\" alt=\"down\"></a></div>
    </th>
    <th class=\"col-stat\">
        <div><div class=\"tooltip\">Speed (GFlops)
            <span class=\"tooltiptext\">Reported Compute Speed of Project<br>Where Available</span>
        </div></div>
        <div><a href=\"?column=ProjectComputeSpeed(GFlops)&orderBy=ASC\"><img src=\"/resources/images/sort-up.png\" alt=\"up\"></a>
        <a href=\"?column=ProjectComputeSpeed(GFlops)&orderBy=DESC\"><img src=\"/resources/images/sort-down.png\" alt=\"down\"></a></div>
    </th>
    <th class=\"col-stat\">
        <div><div class=\"tooltip\">W.A.S
            <span class=\"tooltiptext\">Work Availability Score =<br>7 Day Avg Daily Credit /<br>40 Day Avg Daily Credit</span>
        </div></div>
        <div><a href=\"?column=W.A.S&orderBy=ASC\"><img src=\"/resources/images/sort-up.png\" alt=\"up\"></a>
        <a href=\"?column=W.A.S&orderBy=DESC\"><img src=\"/resources/images/sort-down.png\" alt=\"down\"></a></div>
    </th>
    <th class=\"col-stat\">
        <div><div class=\"tooltip\">Z.C.D
            <span class=\"tooltiptext\">Number Days of Zero Credit reported by the Project<br>aka Zero Credit Days</span>
        </div></div>
        <div><a href=\"?column=Z.C.D&orderBy=ASC\"><img src=\"/resources/images/sort-up.png\" alt=\"up\"></a>
        <a href=\"?column=Z.C.D&orderBy=DESC\"><img src=\"/resources/images/sort-down.png\" alt=\"down\"></a></div>
    </th>
    <th class=\"col-list\">
        <div><div class=\"tooltip\">Current Status
            <span class=\"tooltiptext\">Current Whitelist Status</span>
        </div></div>
        <div><a href=\"?column=CurrentStatus&orderBy=ASC\"><img src=\"/resources/images/sort-up.png\" alt=\"up\"></a>
        <a href=\"?column=CurrentStatus&orderBy=DESC\"><img src=\"/resources/images/sort-down.png\" alt=\"down\"></a></div>
    </th>
    <th class=\"col-list\">
        <div><div class=\"tooltip\">Calculated Status
            <span class=\"tooltiptext\">Calculated Status Using Currently Approved Process</span>
        </div></div>
        <div><a href=\"?column=CalculatedStatus&orderBy=ASC\"><img src=\"/resources/images/sort-up.png\" alt=\"up\"></a>
        <a href=\"?column=CalculatedStatus&orderBy=DESC\"><img src=\"/resources/images/sort-down.png\" alt=\"down\"></a></div>
    </th>
    <th class=\"col-update\">
        <div><div class=\"tooltip\">Last Update
            <span class=\"tooltiptext\">Timestamp from last project stats file downloaded</span>
        </div></div>
        <div><a href=\"?column=LastUpdate&orderBy=ASC\"><img src=\"/resources/images/sort-up.png\" alt=\"up\"></a>
        <a href=\"?column=LastUpdate&orderBy=DESC\"><img src=\"/resources/images/sort-down.png\" alt=\"down\"></a></div>
    <th class=\"col-note\">
    <div>Notes</div>
    <div></div></th>
    </tr>";

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
    'ProjectTotalCredit',
    'ProjectComputeSpeed(GFlops)',
    'W.A.S',
    'Z.C.D',
    'CurrentStatus',
    'CalculatedStatus',
    'LastUpdate');

$order = '`Project Name` ASC';
if ($_GET['column'] === 'ProjectName') {$columns="`Project Name`";}
if ($_GET['column'] === 'Vote(In/Out)') {$columns="`Vote (In/Out)`";}
if ($_GET['column'] === 'Vote(Date)') {$columns="`Vote (Date)`";}
if ($_GET['column'] === 'ProjectTotalCredit') {$columns="`Project Total Credit`";}
if ($_GET['column'] === 'ProjectComputeSpeed(GFlops)') {$columns="`Project Compute Speed (GFlops)`";}
if ($_GET['column'] === 'W.A.S') {$columns="`W.A.S (Work Availability Score)`";}
if ($_GET['column'] === 'Z.C.D') {$columns="`Z.C.D (Zero Credit Days)`";}
if ($_GET['column'] === 'CurrentStatus') {$columns="`Current Status`";}
if ($_GET['column'] === 'CalculatedStatus') {$columns="`Calculated Status`";}
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
            `Project Total Credit`,
            `Project Compute Speed (GFlops)`,
            `W.A.S (Work Availability Score)`,
            `Z.C.D (Zero Credit Days)`,
            `Current Status`,
            `Calculated Status`,
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