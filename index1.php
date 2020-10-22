<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data call parameters</title>
</head>
<body>

    <h1>Thank You</h1>
    <p>Here is the information you have submitted:</p>
    <ol>
        <li><em>SEID :</em> <?php echo htmlspecialchars($_POST["seid"])?></li>
        <li><em>PDR STATE :</em> <?php echo $_POST["pdr_state"]?></li>
        <li><em>IN TEID :</em> <?php echo $_POST["in_teid"]?></li>
        <li><em>OUT TEID :</em> <?php echo $_POST["out_teid"]?></li>
        <li><em>UE IP ADDRESS :</em> <?php echo $_POST["ue_ip_addr"]?></li>
        <li><em>gNB IP ADDRESS :</em> <?php echo $_POST["gnb_ip_addr"]?></li>
        <li><em>RULE ID :</em> <?php echo $_POST["rule_id"]?></li>
        <li><em>DESTINATION IPv4 :</em> <?php echo $_POST["ipv4_dst"]?></li>
        <li><em>PRIORITY :</em> <?php echo $_POST["priority"]?></li>
    </ol>
</body>
</html>
