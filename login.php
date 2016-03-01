<?php

session_start();

if (isset($_GET["error"]))
{
    echo("<pre>OAuth Error: " . $_GET["error"]."\n");
    echo('<a href="index.php">Retry</a></pre>');    
    die;
}

$authorizeUrl = 'https://github.com/login/oauth/authorize';
$accessTokenUrl = 'https://github.com/login/oauth/access_token';
$clientId = $_SERVER['OAUTH2_CLIENT_ID'];
$clientSecret = $_SERVER['OAUTH2_CLIENT_SECRET'];
$userAgent = 'cwalk';

$redirectUrl = "http://www.cwalk.guru/login.php";

require("OAuth2/Client.php");
require("OAuth2/GrantType/IGrantType.php");
require("OAuth2/GrantType/AuthorizationCode.php");

$client = new OAuth2\Client($clientId, $clientSecret, OAuth2\Client::AUTH_TYPE_AUTHORIZATION_BASIC);
$client->setCurlOption(CURLOPT_USERAGENT,$userAgent);

if (!isset($_GET["code"]))
{
    $authUrl = $client->getAuthenticationUrl($authorizeUrl, $redirectUrl, array("scope" => "user,user:email", "state" => "SomeUnguessableValue"));
    header("Location: ".$authUrl);
    die("Redirect");

}
else
{
    $params = array("code" => $_GET["code"], "redirect_uri" => $redirectUrl);

    $response = $client->getAccessToken($accessTokenUrl, "authorization_code", $params);
     $accessTokenResult = $response["result"];
    parse_str($accessTokenResult, $accessTokenResultArray);
    $accessTokenFirst = $accessTokenResultArray["access_token"];
    $accessToken = $accessTokenResultArray["access_token"];

    $client->setAccessToken($accessToken);
    $client->setAccessTokenType(OAuth2\Client::ACCESS_TOKEN_BEARER);

    $response = $client->fetch("https://api.github.com/user");
    $responseArray = $response["result"];
    $login = $responseArray["login"];
    $email = $responseArray["email"];

    $_SESSION["user_name"]= $login;

    $goToPage = NULL;
    require_once('mysql_connect.php');

    // check if exist
    $queryExist = "SELECT user_name,last_page from users WHERE user_name = '$login'";
    $responseExist  = @mysqli_query($dbc, $queryExist);
    if (!$responseExist) {
        die('Query failed to execute for some reason');
    }
   if (mysqli_num_rows($responseExist) ==1) {
        // incrment $goToPage
    $result = mysqli_fetch_array($responseExist) ;
        $goToPage = $result['last_page'];
    }
    else{
        // create new user :
        $query = "INSERT INTO users (user_name, email, user_id) VALUES (?, ?, NULL)" ;
        $stmt = mysqli_prepare($dbc, $query);
        mysqli_stmt_bind_param($stmt,"ss",$login,$email);
        mysqli_stmt_execute($stmt);

        $affected_rows = mysqli_stmt_affected_rows($stmt);
        if ( $affected_rows == 1 ){
            mysqli_stmt_close($stmt);
            mysqli_close($dbc);
        } else {
            echo mysqli_error();
            mysqli_stmt_close($stmt);
            mysqli_close($dbc);
        }
        }
    if( $goToPage == NULL ){
        // header('Location: http://www.cwalk.guru/index.php');
        $actual_url = $_SESSION['actual_url'];
        $location = "http://www.cwalk.guru$actual_url";
        header('Location: '.$location);
    }
    else{
          require_once('mysql_connect.php');
          $queryPage = "SELECT name FROM pages WHERE page_order='$goToPage' ";
          $responsePage  = @mysqli_query($dbc, $queryPage);
          if ($responsePage){
            $result = mysqli_fetch_array($responsePage) ;
            $actual_page = $result['name'];
            $location = "http://www.cwalk.guru$actual_page";
            // echo $location;
            header('Location: '.$location);
          } else {
            echo 'Could not issue database query' ;
            echo mysqli_error($dbc);
          }
    }
}

?>

