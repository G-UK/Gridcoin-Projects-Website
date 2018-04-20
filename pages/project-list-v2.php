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
<section style="overflow-x:auto;">

<?php
echo "<table class=\"projectslist\">";
echo 
    "<tr>
    <th class=\"col-name\">
        <div>Project Name</div>
        <div><a href=\"?orderBy=`Project Name` ASC\"><img src=\"/resources/images/sort-up.png\" alt=\"up\"></a>
        <a href=\"?orderBy=`Project Name` DESC\"><img src=\"/resources/images/sort-down.png\" alt=\"down\"></a></div>
    </th>
    <th class=\"col-votes\">
        <div><div class=\"tooltip\">Vote (In/Out)
            <span class=\"tooltiptext\">Result of last Whitelist Vote</span>
        </div></div>
        <div><a href=\"?orderBy=`Vote (In/Out)` ASC\"><img src=\"/resources/images/sort-up.png\" alt=\"up\"></a>
        <a href=\"?orderBy=`Vote (In/Out)` DESC\"><img src=\"/resources/images/sort-down.png\" alt=\"down\"></a></div>
    </th>
    <th class=\"col-votes\">
        <div><div class=\"tooltip\">Vote (Date)
            <span class=\"tooltiptext\">Date of last Whitelist Vote.<br>Where Applicable</span>
        </div></div>
        <div><a href=\"?orderBy=`Vote (Date)` ASC\"><img src=\"/resources/images/sort-up.png\" alt=\"up\"></a>
        <a href=\"?orderBy=`Vote (Date)` DESC\"><img src=\"/resources/images/sort-down.png\" alt=\"down\"></a></div>
    </th>
    <th class=\"col-credit\">
        <div><div class=\"tooltip\">Total Credit
            <span class=\"tooltiptext\">Total Credit issued by the Project</span>
        </div></div>
        <div><a href=\"?orderBy=`Project Total Credit` ASC\"><img src=\"/resources/images/sort-up.png\" alt=\"up\"></a>
        <a href=\"?orderBy=`Project Total Credit` DESC\"><img src=\"/resources/images/sort-down.png\" alt=\"down\"></a></div>
    </th>
    <th class=\"col-stat\">
        <div><div class=\"tooltip\">Speed (GFlops)
            <span class=\"tooltiptext\">Reported Compute Speed of Project<br>Where Available</span>
        </div></div>
        <div><a href=\"?orderBy=`Project Compute Speed (GFlops)` ASC\"><img src=\"/resources/images/sort-up.png\" alt=\"up\"></a>
        <a href=\"?orderBy=`Project Compute Speed (GFlops)` DESC\"><img src=\"/resources/images/sort-down.png\" alt=\"down\"></a></div>
    </th>
    <th class=\"col-stat\">
        <div><div class=\"tooltip\">W.A.S
            <span class=\"tooltiptext\">Work Availability Score =<br>7 Day Avg Daily Credit /<br>40 Day Avg Daily Credit</span>
        </div></div>
        <div><a href=\"?orderBy=`W.A.S (Work Availability Score)` ASC\"><img src=\"/resources/images/sort-up.png\" alt=\"up\"></a>
        <a href=\"?orderBy=`W.A.S (Work Availability Score)` DESC\"><img src=\"/resources/images/sort-down.png\" alt=\"down\"></a></div>
    </th>
    <th class=\"col-stat\">
        <div><div class=\"tooltip\">Z.C.D
            <span class=\"tooltiptext\">Number Days of Zero Credit reported by the Project<br>aka Zero Credit Days</span>
        </div></div>
        <div><a href=\"?orderBy=`Z.C.D (Zero Days Credit)` ASC\"><img src=\"/resources/images/sort-up.png\" alt=\"up\"></a>
        <a href=\"?orderBy=`Z.C.D (Zero Days Credit)` DESC\"><img src=\"/resources/images/sort-down.png\" alt=\"down\"></a></div>
    </th>
    <th class=\"col-list\">
        <div><div class=\"tooltip\">Calculated Status (V2)
            <span class=\"tooltiptext\">Experimental Whitelist Calculation Utilising Compute Speed.<br>Unapproved</span>
        </div></div>
        <div><a href=\"?orderBy=`Calculated Status (Experimental)` ASC\"><img src=\"/resources/images/sort-up.png\" alt=\"up\"></a>
        <a href=\"?orderBy=`Calculated Status (Experimental)` DESC\"><img src=\"/resources/images/sort-down.png\" alt=\"down\"></a></div>
    </th>
    <th class=\"col-list\">
        <div><div class=\"tooltip\">Recommended Status (V2)
            <span class=\"tooltiptext\">Experimental Whitelist Recommendation, assuming no need for votes.<br>Unapproved</span>
        </div></div>
        <div><a href=\"?orderBy=`Recommended Status (Experimental)` ASC\"><img src=\"/resources/images/sort-up.png\" alt=\"up\"></a>
        <a href=\"?orderBy=`Recommended Status (Experimental)` DESC\"><img src=\"/resources/images/sort-down.png\" alt=\"down\"></a></div>
    </th>
    <th class=\"col-update\">
        <div><div class=\"tooltip\">Last Update
            <span class=\"tooltiptext\">Timestamp from last project stats file downloaded</span>
        </div></div>
        <div><a href=\"?orderBy=`Last Update` ASC\"><img src=\"/resources/images/sort-up.png\" alt=\"up\"></a>
        <a href=\"?orderBy=`Last Update` DESC\"><img src=\"/resources/images/sort-down.png\" alt=\"down\"></a></div>
    </th class=\"col-note\">
    <th><div>Notes</div>
    <div><div></div></th>
    </tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {parent::__construct($it, self::LEAVES_ONLY);}
    function current() {return "<td>" . parent::current(). "</td>";}
    function beginChildren() {echo "<tr>";}
    function endChildren() {echo "</tr>" . "\n";}}

$servername = "localhost";
$username = "php";
$password = "xxxxxxxxxxx";
$dbname = "grc_listings";
$orderBy = array(
    '`Project Name` ASC',
    '`Project Name` DESC',
    '`Vote (In/Out)` ASC',
    '`Vote (In/Out)` DESC',
    '`Vote (Date)` ASC',
    '`Vote (Date)` DESC',
    '`Project Total Credit` ASC',
    '`Project Total Credit` DESC',
    '`Project Compute Speed (GFlops)` ASC',
    '`Project Compute Speed (GFlops)` DESC',
    '`W.A.S (Work Availability Score)` ASC',
    '`W.A.S (Work Availability Score)` DESC',
    '`Z.C.D (Zero Credit Days)` ASC',
    '`Z.C.D (Zero Credit Days)` DESC',
    '`Calculated Status (Experimental)` ASC',
    '`Calculated Status (Experimental)` DESC',
    '`Recommended Status (Experimental)` ASC',
    '`Recommended Status (Experimental)` DESC',
    '`Last Update` ASC',
    '`Last Update` DESC');

$order = '`Project Name` ASC';
if (isset($_GET['orderBy']) && in_array($_GET['orderBy'], $orderBy)) {$order = $_GET['orderBy'];}  

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
            `Calculated Status (Experimental)`,
            `Recommended Status (Experimental)`,
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