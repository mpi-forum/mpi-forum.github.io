<?
$topdir = ".";
include_once("top-nav.php");

$title = "May 28th - 30th, 2012 Meeting Logistics";
include_once("$topdir/include/header.php");

$map_conference = "http://g.co/maps/4rkn7";
$venue_info = "http://www.epochal.or.jp/eng/index.html";
$map_station = "http://g.co/maps/btmpw";
$map_hotel = "http://www.daiwaroynet.jp/english/locate.html";
$bus_site = "http://www.kantetsu.co.jp/bus/highway/nattts/natts_eng.html";
$train_site_1 = "http://www.keisei.co.jp/keisei/tetudou/skyliner/us/index.html";
$train_site_2 = "http://www.keisei.co.jp/keisei/tetudou/skyliner/pdf/skyliner_time_eck.pdf";
$tsukuba_train = "http://www.mir.co.jp/english_guide/index.html";
$walk_map = "http://g.co/maps/s25qs";
?>


<h3>
<p><a
href="https://www.ornl.gov/ccsd_registrations/nccs_mpi_forums/">Meeting Registration</a>
</p>
</h3>

<p>$200 per person to cover meeting logistics
costs, as well as snacks, and lunch on Monday, Tuesday, and Wednesday.
<br />
&nbsp; This is payable by credit card.

</p>
<p>For logistical reasons, advanced registration is required.</p>

<div align=center><hr width=50%></div>

<h3><a name=location>Meeting Location</a></h3>

<p>The meeting will take
place at the Tsukuba International Congress Center, <br >at <a href="<?
print($map_conference); ?>">2-20-3 Takezono, Tsukuba, Ibarakai,
    305-0032, Japan.</a> <br />
<a href="<?print($venue_info); ?>">Congress center web site.</a> <br />
Phone number: +81-29-861-0001
</p>

<p>A room block is reserved at the Daiwa Roynet Hotel, <br >at
<a href="<?print($map_hotel); ?>">1-5-7 Azuma, Tsukuba-shi, Ibaraki-ken,
    Japan.</a> <br />
This is a few minute walk from the <a href="<?print($map_station);
?>">Tsukuba Station.</a> <br />
Phone number: +81-29-863-3755
</p>


<p>For reaching the conference venue from the hotel follow these
<a href="<? print($walk_map); ?>">directions</a>
</p>

<p>


<div align=center><hr width=50%></div>
<h3><p>Directions from Narita International Airport (NRT) to the
hotel</p></h3>

<p>
First Option:NRT->bus*1->Tsukuba-> walk to hotel<br />
*1 - Highway bus (9 buses per day, from 7:40am to 8:10pm). <br />
     Duration: approximately 100 minutes.  Cost: 2,540yen <br />
     <a href="<? print($bus_site); ?>">Bus web site</a>
</p>

<p>
Second Option:<br />
Step 1: Train from NRT to Nippori Station on the
<a href="<? print($train_site_1); ?>">Keisei Skyliner  </a> <br />
<a href="<? print($train_site_2); ?>">Train Time Tables  </a> <br />
     Duration: approximately 50 minutes.  Cost: 2,400yen
</p>
<p>
Step 2: JR Joban line from Nippori Station to Kitasenju Station <br />
     Duration: approximately 10 minutes.  Cost: 150yen
</p>
<p>
Step 3: Tsukuba Express Line to Tsukuba<br />
</p>
<p>
     Train departs every 15 minutes from 5:40am to 11:26pm. <br />
     Duration: approximately 40 minutes.  Cost: 1,000yen. <br />
     <a href="<? print($tsukuba_train); ?>">Train web site </a>
</p>
<p>
Step 4: walk to the hotel
    
</p>

<?
include_once("$topdir/include/footer.php");
