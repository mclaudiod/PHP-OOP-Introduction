<?php 

    include 'includes/header.php';

    // Include the other classes

    require "vendor/autoload.php";
    
    // require "classes/Clients.php";
    // require "classes/Details.php";

    use App\Clients;
    use App\Details;

    use Firebase\JWT\JWT;
    use Firebase\JWT\Key;

    $key = 'example_key';
    $payload = [
        'iss' => 'http://example.org',
        'aud' => 'http://example.com',
        'iat' => 1356999524,
        'nbf' => 1357000000
    ];

    /**
    * IMPORTANT:
    * You must specify supported algorithms for your application. See
   * https://tools.ietf.org/html/draft-ietf-jose-json-web-algorithms-40
    * for a list of spec-compliant algorithms.
    */
    $jwt = JWT::encode($payload, $key, 'HS256');
    $decoded = JWT::decode($jwt, new Key($key, 'HS256'));

    print_r($decoded);

    /*
     NOTE: This will now be an object instead of an associative array. To get
    an associative array, you will need to cast it as such:
    */

    $decoded_array = (array) $decoded;

    /**
     * You can add a leeway to account for when there is a clock skew times between
     * the signing and verifying servers. It is recommended that this leeway should
     * not be bigger than a few minutes.
     *
     * Source: http://self-issued.info/docs/draft-ietf-oauth-json-web-token.html#nbfDef
     */
    JWT::$leeway = 60; // $leeway in seconds
    $decoded = JWT::decode($jwt, new Key($key, 'HS256'));

    // function my_autoload($class) {
    //     $parts = explode("\\", $class);
    //     require __DIR__ . "/classes/" . $parts[1] . ".php";
    // }

    // spl_autoload_register("my_autoload");

    // class Clients {
    //     public function __construct()
    //     {
    //         echo "From 08.php which contains the clients";
    //     }
    // }

    $details = new App\Details();
    $clients = new App\Clients();
    // $clients2 = new Clients();

    include 'includes/footer.php';

?>