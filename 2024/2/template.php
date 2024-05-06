<?php
//die ("Wir sind derzeit nicht erreichbar. Bitte versuchen Sie es spter wieder!");
if (session_id() == "") {
    session_start();
}
require_once __DIR__ . '/_global/config.php';
require_once __DIR__.'/environment_config.php';
require_once __DIR__ . '/_global/dbconnect.inc';

// if (!$conn_id = @mysql_connect(DB_SERVER_IM, DB_NAME_IM, DB_PASS_IM)) {
//     die("Datenbank steht vorbergehend nicht zur Verfgung.<br><b>Bitte versuchen Sie es zu einem spteren Zeitpunkt noch einmal.</b>");
// }
// else @mysql_select_db(DB_USER_IM, $conn_id);
$clientData = array();
if(!empty($_SESSION['user_id_x'])) {

    //save privacy policy consent
    if($_POST['save_privacypolicy_consent'] && $_POST['privacypolicy_consent'] == '1') {
        $stmt = $conn_id->prepare("UPDATE ig_kunden SET kd_pp_consent='1', kd_pp_ip= ?, kd_pp_ts = NOW() WHERE kd_id = ?");
        $stmt->bind_param('si', $_SERVER['REMOTE_ADDR'], $_SESSION['user_id_x']);
        $stmt->execute();
    }

    $stmt = $conn_id->prepare("SELECT * FROM ig_kunden WHERE kd_id = ?");
    $stmt->bind_param('i', $_SESSION['user_id_x']);
    $stmt->execute();
    $clientData = $stmt->get_result()->fetch_assoc();
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
        <title>immogrundriss.de - Verkaufsoptimierte Grundrisse vom Premiumanbieter - <?php echo $titeltext; ?></title>
        <META NAME="keywords" CONTENT="Grundrisse, Immobilienbranche, Grundrissplan, Immobilienobjekte, verkaufsoptimierte Grundrisse, Marketing, Expose, Immobilienmakler, Verkaufssteigerung, professionell, schnell, Grasberger, Verband, Immobilienverkauf, Immobilienvermietung"/>
        <META NAME="description" CONTENT="Verkaufsoptimierte Grundrisse f&uuml;r die Immobilienbranche f&uuml;r mehr Umsatz. Wir zeichnen Ihre Grundrisse schnell und kosteng&uuml;nstig Grundrisse nach. So verkaufen oder vermieten Sie Ihre Objekte noch schneller und professioneller."/>
        <meta http-equiv="Content-Language" content="de">
        <META NAME="author" CONTENT="Grasberger"/>
        <META NAME="publisher" CONTENT="immogrundriss.de"/>
        <META NAME="copyright" CONTENT="immogrundriss.de"/>
        <META NAME="page-topic" CONTENT="Dienstleistungen f&uuml;r Firmen"/>
        <META NAME="page-type" CONTENT="Kommerzielle Organisation"/>
        <META NAME="audience" CONTENT="Alle"/>
        <META NAME="robots" CONTENT="INDEX,FOLLOW"/>
        <META NAME="expires" CONTENT="NEVER"/>

        <!-- CookieHub -->
        <script src="<?php echo COOKIEHUB_URL; ?>"></script>
        <script type="text/javascript">
            document.addEventListener("DOMContentLoaded", function(event) {
                var cpm = {};
                window.cookiehub.load(cpm);
            });
        </script>
        <!--<link href="style.css" rel="stylesheet" type="text/css">-->
        <link href="style_fresh.css?<?php echo VERSION; ?>" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css?<?php echo VERSION; ?>">
        <link href="jquery-ui-1.8.8.custom.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/immonav.css?<?php echo VERSION; ?>" media="screen" />
		<!--[if lte IE 7]>
        <link rel="stylesheet" type="text/css" href="css/immonav_ie.css?<?php echo VERSION; ?>" media="screen" />
    <![endif]-->
        <link rel="shortcut icon" href="favicon.ico">

        <script src="https://js.hcaptcha.com/1/api.js" async defer></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
        <script type="text/javascript" src="jscripts.js?<?php echo VERSION; ?>"></script>
        <script type="text/javascript" src="js/jquery.lightbox-0.5.js"></script>
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3670845081959955" crossorigin="anonymous"></script>
		<script type="text/javascript" language="javascript" src="js/jquery.dropdownPlain.js"></script>
    </head>

    <body >
	<?php
	include "_global/website_notice.php";

	?>
        <table cellpadding="0" cellspacing="0" border="0" align="center" width="100%" style="width:100% " class="main-table" >
            <tr>
                <td><img src="images/spacer.gif"  height="1" width="20" border="0" alt="" /></td>
                <td valign="top" align="center" style="width:1024px; height:auto; " >
                    <table  border="0" cellspacing="0" cellpadding="0" style="width:1024px; height:auto; background:#FFFFFF;" >

						<?php
						// if($_GET['show'] == 'additional_banner'){
							include "_global/additional_banner.php";
						// }
						?>
                        <tr><td><img src="images/spacer.gif"  height="20" width="1024" border="0" alt="" /></td></tr>
                        <tr>
                            <td align="left" width="1024">
                                <?php if (new DateTime("2024-03-27") < new DateTime() && new DateTime() <= new DateTime("2024-04-02")) { ?>
                                    <div class="custom-holiday-banner">
                                        <div class="container">
                                            <h2>Frohe Ostern!</h2>
                                            <p>Immogrundriss wnscht Ihnen und
                                                Ihren Familien ein frohes Osterfest. Am Karfreitag und Ostermontag ist unser Team im wohlverdienten
                                                Osterurlaub, um Ihnen <span>ab Dienstag, dem 2. April, wieder mit voller Energie zur Verfgung zu stehen!</span>
                                            </p>
                                        </div>
                                    </div>
                                <?php } ?>
                                <table border="0" cellspacing="0" cellpadding="0" width="1024">
                                    <tr>
                                        <td valign="top" width="222">
                                            <?php
                                                if ($holidayDateStart <= $noticeDateCurrent && $noticeDateCurrent <= $holidayDateEnd) {
                                            ?>
                                                    <a href="index.php"><img width="222" src="./images/Immogrundriss_Logo.gif" border="0" alt="logo"/></a>
                                            <?php
                                                } else {
                                            ?>
                                                    <a href="index.php"><img src="./images/logo_immogrundriss.jpg" border="0" alt="logo"/></a>
                                            <?php } ?>
                                        </td>
                                        <td width="50"><img src="images/spacer.gif"  width="50" border="0" alt="" /></td>
                                        <td valign="top">
                                            <table border="0" cellspacing="0" cellpadding="0">
                                                <tr><td><img src="images/spacer.gif"  height="27" border="0" alt="" /></td></tr>
                                                <tr>
                                                    <td><?php include 'main_menu.inc'; ?></td>
                                                </tr>
                                                <?php if (isset($_SESSION["user_id_x"]) &&  $_SESSION["user_id_x"] != ""): ?>
                                                <tr>
                                                    <td><?php include 'sub_menu.inc'; ?></td>
                                                </tr>
                                                <?php endif; ?>
                                            </table>
                                        </td>

                                        <?php if (!isset($_SESSION["user_id_x"]) && $datcon != 'login.inc'): ?>
                                            <td align="right">
                                                <a href="/login.php"><img src="./images/login_button.gif" border="0" alt="Login"/>
                                            </td>
                                        <?php elseif (isset($_SESSION['user_id_x'])): ?>
                                            <td align="right">
                                                <table border="0" cellspacing="0" cellpadding="0" >
                                                    <tr><td><img src="images/spacer.gif"  height="38" border="0" alt="" /></td></tr>
                                                    <tr><td align="center">Sie sind<br>angemeldet:</td></tr>
                                                    <tr><td><img src="images/spacer.gif"  height="5" border="0" alt="" /></td></tr>
                                                    <tr><td align="center"><b>Kd-Nr: <?php echo $_SESSION['user_id_x']; ?></b></td></tr>
                                                </table>
                                            </td>
                                        <?php endif; ?>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr><td><img src="images/spacer.gif"  height="1" border="0" alt="" /></td></tr>
                        <tr>
                            <td valign="top" align="left" width="1024" >

                                <?php
                                include $datcon;
                                ?>

                            </td>
                        </tr>
                        <tr><td><img src="images/spacer.gif"  height="15" border="0" alt=""/></td></tr>
                        <tr><td><img src="images/1px.gif"  width="1024" height="2" border="0" alt="" /></td></tr>
                        <tr>
                            <td valign="top" width="1024" >
                                <table border="0" cellspacing="0" cellpadding="0" width="1024">
                                    <tr><td colspan="2"><img src="images/spacer.gif"  height="10" border="0" alt="" /></td></tr>
                                    <tr>
                                        <td align="center">
                                            <table border="0" cellspacing="0" cellpadding="0">
                                                <tr>
                                                    <td><a href="index.php">Startseite</a></td>
                                                    <td><img src="images/spacer.gif"  width="10" border="0" alt="" /></td>
                                                    <td><img src="images/sep.gif" border="0" alt=""></td>
                                                    <td><img src="images/spacer.gif"  width="10" border="0" alt="" /></td>
                                                    <td><a href="beispiele.php">Layouts & Produkte</a></td>
                                                    <td><img src="images/spacer.gif"  width="10" border="0" alt="" /></td>
                                                    <td><img src="images/sep.gif" border="0" alt=""></td>
                                                    <td><img src="images/spacer.gif"  width="10" border="0" alt="" /></td>
                                                    <td><a href="preise.php">Preise</a></td>
                                                    <td><img src="images/spacer.gif"  width="10" border="0" alt="" /></td>
                                                    <td><img src="images/sep.gif" border="0" alt=""></td>
                                                    <td><img src="images/spacer.gif"  width="10" border="0" alt="" /></td>
                                                    <td><a href="auftrag.php">Auftrag</a></td>
                                                    <td><img src="images/spacer.gif"  width="10" border="0" alt="" /></td>
                                                    <td><img src="images/sep.gif" border="0" alt=""></td>
                                                    <td><img src="images/spacer.gif"  width="10" border="0" alt="" /></td>
                                                    <td><a href="faq.php">F.A.Q.</a></td>
                                                    <td><img src="images/spacer.gif"  width="10" border="0" alt="" /></td>
                                                    <td><img src="images/sep.gif" border="0" alt=""></td>
                                                    <td><img src="images/spacer.gif"  width="10" border="0" alt="" /></td>
                                                    <td><a href="./datenschutzerklaerung.php">Datenschutzerkl&auml;rung</a></td>
                                                    <td><img src="images/spacer.gif"  width="10" border="0" alt="" /></td>
                                                    <td><img src="images/sep.gif" border="0" alt=""></td>
                                                    <td><img src="images/spacer.gif"  width="10" border="0" alt="" /></td>
                                                    <td><a href="kontakt.php">Kontakt/Impressum</a></td>
                                                    <td><img src="images/spacer.gif"  width="10" border="0" alt="" /></td>
                                                    <td><img src="images/sep.gif" border="0" alt=""></td>
                                                    <td><img src="images/spacer.gif"  width="10" border="0" alt="" /></td>
                                                    <td><a href="http://www.mcgrundriss.de" target="_blank">McGrundriss GmbH & Co. KG</a></td>
                                                    <td><img src="images/spacer.gif"  width="10" border="0" alt="" /></td>
                                                    <td><img src="images/sep.gif" border="0" alt=""></td>
                                                    <td><img src="images/spacer.gif"  width="10" border="0" alt="" /></td>
                                                    <td><a href="javascript:void 0" onclick="window.cookiehub.openSettings()">Cookie Einstellungen</a></td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" align="center" style="font-size: 12px;">
                                            <br>
                                            &copy; Copyright by McGrundriss. Alle Rechte vorbehalten.
                                        </td>
                                    </tr>
                                    <tr><td colspan="2"><img src="images/spacer.gif"  height="50" border="0" alt="" /></td></tr>
                                </table>
                            </td>
                        </tr>

                    </table>
                </td>
                <td><img src="images/spacer.gif"  height="1" width="20" border="0" alt="" /></td>
            </tr>
        </table>

    <?php
    $noticeDateStart = new DateTime(ACQUISITION_DATE_MCG);
    $noticeDateCurrent = new DateTime();
    $noticeDateEnd = (new DateTime(ACQUISITION_DATE_MCG))->add(DateInterval::createFromDateString('6 weeks'));
    if ($noticeDateStart <= $noticeDateCurrent && $noticeDateCurrent <= $noticeDateEnd) {
        include "_top_notification.php";
    }
    if(!empty($clientData) && $clientData['kd_pp_consent']!=1 && $noPrivacyPolicyModal!=true) {
        require_once __DIR__ . "/_privacy_policy.php";
    }
    ?>
    <div id="overlay"><div id="overlay_text"></div></div>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}
        let userId = "<?php echo $_SESSION['user_id_x']?:''; ?>"
        let userEmail = "<?php echo $clientData['kd_email']?:''; ?>"
        if(userId) {
            console.log(userId)
            Tawk_API.visitor = {
                name : userId,
                email: userEmail.split(',')[0]
            };
        }
        var Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/622c5efb1ffac05b1d7e36d8/1ftul625v';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
    </body>
</html>
