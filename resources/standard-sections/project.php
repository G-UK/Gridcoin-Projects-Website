<?php
echo'
<head>
';

include('/srv/www/gridcoin.ddns.net/resources/standard-sections/head.php');
include('/srv/www/gridcoin.ddns.net/resources/standard-sections/1hr-cache.php');

echo'
    <title>'.$projectname.' Summary</title>
    <script src="/resources/scripts/project_summary.js"></script>
</head>

<body>

<!-- Header -->
';

include('/srv/www/gridcoin.ddns.net/resources/standard-sections/header.php');
include('/srv/www/gridcoin.ddns.net/resources/standard-sections/navbar.php');

echo'
<!-- Containers for equal height Columns -->
<div class=col-container>

<!-- Left Sidebar -->
';

include('/srv/www/gridcoin.ddns.net/resources/standard-sections/project-sidebar.php');

echo'
<!-- Left Column -->

<article class="col-two">
    <section>
        <a href="'.$projecturl.'">
            <img
                src="/resources/images/projects/'.$projectid.'.png"
                alt="'.$projectname.' Logo"
                title="'.$projectname.' Logo. Link to Project Homepage"
                class="projectimg"
            >
        </a>
    </section>
    <section class="center">
        <a href="'.$orgurl.'"><h4>'.$orgname.'</h4></a>
        '.$projectdesc.'
    </section>
    <section>
    <h2 class="center">Publications</h2>
    	<p>
            <img
                src="/resources/images/page.png"
                alt="Page Icon"
                title="Simple Page Icon"
                class="leftimg"
            />
            <a href="'.$pub1url.'">'.$pub1name.'</a>
        </p>
        <p>
            <img
                src="/resources/images/page.png"
                alt="Page Icon"
                title="Simple Page Icon"
                class="leftimg"
            />
            <a href="'.$pub2url.'">'.$pub2name.'</a>
        </p>
        <p>
            <img src="/resources/images/page.png"
            alt="Page Icon"
            title="Simple Page Icon"
            class="leftimg"
            />
            <a href="'.$pub3url.'">'.$pub3name.'</a></p>
        <p>
            <img src="/resources/images/page.png"
            alt="Page Icon"
            title="Simple Page Icon"
            class="leftimg"
            />
            <a href="'.$pub4url.'">'.$pub4name.'</a>
        </p>
    </section>
</article>

<!-- Right Column -->

<article class="col-two">
<section class="liststatus">
';

    $servername = 'localhost';
    $username = 'php';
    $password = 'xxxxxxxxxxx';
    $dbname = 'grc_listings';
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare
            ('SELECT * FROM`Projects_Main`WHERE`Project ID`="'.$projectid.'"');
        $stmt->execute();
        $row = $stmt->fetch();
        echo '<strong>' . $row['Current Status'] . '</strong>';
        }
    catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
        }
    $conn = null;		

echo'	
    </section>
    <section>
    <h3>Project News Feed
    <a href="'.$rsspath.'">
        <img 
            src="/resources/images/rss.png"
            alt="Access the Projects RSS Feed"
            title="RSS Icon. Links to the Projects RSS News Feed"
            class="rightimg"
        />
    </a>
    </h3>
    <br>
';
    $html = '';
    $url = "/srv/www/gridcoin.ddns.net/resources/rss/$projectid";
    $xml = simplexml_load_file($url, null, LIBXML_NOCDATA);

    for($i = 0; $i < 3; $i++){
        $title = $xml->channel->item[$i]->title;
        $link = $xml->channel->item[$i]->link;
        $description = $xml->channel->item[$i]->description;
        $pubDate = $xml->channel->item[$i]->pubDate;

        $html .= "<article class = \"rss\">";
        $html .= "<p class=\"head\"><a href=$link><b>$title</b></a></p>";
        $html .= "<p class=\"date\">$pubDate</p>";
        $html .= "<p class=\"desc\">$description</p>";
        $html .= "</article>";
    }
    echo "$html<br />";
echo'
</section>
</article>

<!-- Right Sidebar -->

<aside class="right">
<table>
    <tr>
        <th colspan="5"><h3>CPU</h3></th>
    </tr>
    <tr>
        <th><img src="/resources/images/blank.png" alt="" title="Placeholder Blank Image/></th>
        <th><img src="/resources/images/x86.png" alt="x86 Achitecture" title="Text x86" /></th>
        <th><img src="/resources/images/x64.png" alt="x64 (x86-64, AMD64 etc) Architecture" title="Text x64" /></th>
        <th><img src="/resources/images/arm_hf.png" alt="ArmHF (Hard Float) Architecture title="ArmHF Logo" /></th>
        <th><img src="/resources/images/arm_64.png" alt="Arm64 (AArch64) Architecture" title="Arm64 Logo" /></th>
    </tr>
    <tr>
        <td><img src="/resources/images/windows.png" alt="Microsoft Windows OS" title="MS Windows Logo" /></td>
        <td><img src="/resources/images/'.$win86.'.png" alt="'.$win86.'" title="Tick (yes) or Cross (no)" /></td>
        <td><img src="/resources/images/'.$win64.'.png" alt="'.$win64.'" title="Tick (yes) or Cross (no)" /></td>
        <td><img src="/resources/images/'.$winarm32.'.png" alt="'.$winarm32.'" title="Tick (yes) or Cross (no)" /></td>
        <td><img src="/resources/images/'.$winarm64.'.png" alt="'.$winarm64.'" title="Tick (yes) or Cross (no)" /></td>
    </tr>
    <tr>
        <td><img src="/resources/images/linux.png" alt="Linux OS" title="Linux Penguin Logo"/></td>
        <td><img src="/resources/images/'.$linux86.'.png" alt="'.$linux86.'" title="Tick (yes) or Cross (no)" /></td>
        <td><img src="/resources/images/'.$linux64.'.png" alt="'.$linux64.'" title="Tick (yes) or Cross (no)" /></td>
        <td><img src="/resources/images/'.$linuxarm32.'.png" alt="'.$linuxarm32.'" title="Tick (yes) or Cross (no)" /></td>
        <td><img src="/resources/images/'.$linuxarm64.'.png" alt="'.$linuxarm64.'" title="Tick (yes) or Cross (no)" /></td>
    </tr>
    <tr>
        <td><img src="/resources/images/mac.png" alt="MacOSX OS" title="Apple Logo"/></td>
        <td><img src="/resources/images/'.$mac86.'.png" alt="'.$mac86.' title="Tick (yes) or Cross (no)" "/></td>
        <td><img src="/resources/images/'.$mac64.'.png" alt="'.$mac64.' title="Tick (yes) or Cross (no)" "/></td>
        <td><img src="/resources/images/'.$macarm32.'.png" alt="'.$macarm32.'" title="Tick (yes) or Cross (no)" /></td>
        <td><img src="/resources/images/'.$macarm64.'.png" alt="'.$macarm64.'" title="Tick (yes) or Cross (no)" /></td>
    </tr>
    <tr>
        <td><img src="/resources/images/android.png" alt="Android OS" title="Android Logo"/></td>
        <td><img src="/resources/images/'.$android86.'.png" alt="'.$android86.'" title="Tick (yes) or Cross (no)" /></td>
        <td><img src="/resources/images/'.$android64.'.png" alt="'.$android64.'" title="Tick (yes) or Cross (no)" /></td>
        <td><img src="/resources/images/'.$androidarm32.'.png" alt="'.$androidarm32.'" title="Tick (yes) or Cross (no)" /></td>
        <td><img src="/resources/images/'.$androidarm64.'.png" alt="'.$androidarm64.'" title="Tick (yes) or Cross (no)" /></td>
    </tr>
</table>
<br>
<table>
    <tr>
        <th colspan="5"><h3>GPU</h3></th>
    </tr>
    <tr>
        <td><img src="/resources/images/blank.png" alt="" title="Placeholder Blank Image" /></td>
        <td><img src="/resources/images/nvidia.png" alt="NVidia GPUs" title="NVidia Logo" /></td>
        <td><img src="/resources/images/amd.png" alt="AMD GPUs" title="AMD Logo" /></td>
        <td><img src="/resources/images/intel.png" alt="Intel GPUs" title="Intel Logo" /></td>
        <td><img src="/resources/images/blank.png" alt="" title="Placeholder Blank Image" /></td>
    </tr>
    <tr>
        <td><img src="/resources/images/blank.png" alt="" title="Placeholder Blank Image" /></td>
        <td><img src="/resources/images/'.$nvidia.'.png" alt="'.$nvidia.'" title="Tick (yes) or Cross (no)" /></td>
        <td><img src="/resources/images/'.$amd.'.png" alt="'.$amd.'" title="Tick (yes) or Cross (no)" /></td>
        <td><img src="/resources/images/'.$intel.'.png" alt="'.$intel.'" title="Tick (yes) or Cross (no)" /></td>
        <td><img src="/resources/images/blank.png" alt="" title="Placeholder Blank Image" /></td>
    </tr>
</table>
    <section class="center">
    <br>
    <h3>Useful Links</h3>
        <p><a href="'.$projecturl.'">Project Home Page</a></p>
        <p><a href="'.$orgurl.'">Owning Organisation</a></p>
        <p><a href="'.$boincstats.'">BoincStats Project Stats</a></p>
        <p><a href="'.$gridcoinstats.'">GridcoinStats Project Stats</a></p>
    </section>
    <section class="center">
    <h3>Project Stats</h3>
';
    $servername = 'localhost';
    $username = 'php';
    $password = 'xxxxxxxxxx';
    $dbname = 'grc_listings';

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare
            ('SELECT * FROM`Projects_Main`WHERE`Project ID`="'.$projectid.'"');
        $stmt->execute();
        $row = $stmt->fetch();

    echo '<p><strong>Project Total Credit</strong></p>';
    echo '<p>' . $row['Project Total Credit'] . '</p>';
    echo '<p><strong>Project Avg Daily Credit (7 Day)</strong></p>';
    echo '<p>' . $row['Project Avg Daily Credit (7 Day)'] . '</p>';
    echo '<p><strong>Project Avg Daily Credit (40 Day)</strong></p>';
    echo '<p>' . $row['Project Avg Daily Credit (40 Day)'] . '</p>';
    echo '<p><strong>Project Compute Speed (GFlops)</strong></p>';
    echo '<p>' . $row['Project Compute Speed (GFlops)'] . '</p>';
    echo '<p><strong>W.A.S (Work Availability Score)</strong></p>';
    echo '<p>' . $row['W.A.S (Work Availability Score)'] . '</p>';
    echo '<p><strong>Z.C.D (Zero Credit Days)</strong></p>';
    echo '<p>' . $row['Z.C.D (Zero Credit Days)'] . '</p>';
    echo '<p><strong>Last Update</strong></p>';
    echo '<p>' . $row['Last Update'] . '</p>';
    }
    catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    }
    $conn = null;

echo'
    </section>
</aside>

</div>

<!-- Footer -->
';

include('/srv/www/gridcoin.ddns.net/resources/standard-sections/footer.php');

echo
'</body>
';
?>
