<?php


// add_action("disctance_matrix_form", "distance_matrix_api");

// function distance_matrix_api() {

    // Create a new CURL instance<br>
    $ch = curl_init();

    // Api Url<br>
    $url = "https://maps.googleapis.com/maps/api/distancematrix/json";

    // Array of options to be passed to API<br>
    $options = array(
        "origins" => "england",
        "destinations" => "spain",
        "units" => "imperial",
        "language" => "en-GB",
        "key" => 'AIzaSyBU4dtPkXTcKoixvug48eOAs7J3K1WmMgo'
    );

    $request = $url . "?" . http_build_query( $options );

    // set url <br>
    curl_setopt($ch, CURLOPT_URL, $request);

    //return the transfer as a string  <br>
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    // $output contains the output string <br>
    $output = json_decode(curl_exec($ch), true);

    echo serialize($output);

    // close curl resource to free up system resources <br>
    curl_close($ch);


// }

// function awepop_popularity_list($post_count = 10) {
//     $args = array(
//         "posts_per_page" => 10,
//         "post_type" => "post",
//         "post_status" => "publish",
//         "meta_key" => "awepop_views",
//         "orderby" => "meta_value_num",
//         "order" => "DESC"
//     );
  
//     $awepop_list = new WP_Query($args);
  
//     if($awepop_list->have_posts()) { echo "<ul>"; }
  
//     while ( $awepop_list->have_posts() ) : $awepop_list->the_post();
//       echo '<li><a href="'.get_permalink($post->ID).'">'.the_title(’, ’, false).'</a></li>';
//     endwhile;
//     if($awepop_list->have_posts()) { 
//       echo "
// 		<form action="/action_page.php">
// 			<label for="fname">First name:</label><br>
// 			<input type="text" id="fname" name="fname" value="John"><br>
// 			<label for="lname">Last name:</label><br>
// 			<input type="text" id="lname" name="lname" value="Doe"><br><br>
// 			<input type="submit" value="Submit">
// 		</form>
//       ";
//   }

    // if($awepop_list->have_posts()) { 
    //     echo "
    //     <!DOCTYPE html>
    //     <html>
    //       <head>
    //         <title>Simple Map</title>
    //         <meta name='viewport' content='initial-scale=1.0'>
    //         <meta charset='utf-8'>
    //         <style>
    //           /* Always set the map height explicitly to define the size of the div
    //            * element that contains the map. */
    //           #map {
    //             height: 100%;
    //           }
    //           /* Optional: Makes the sample page fill the window. */
    //           html, body {
    //             height: 100%;
    //             margin: 0;
    //             padding: 0;
    //           }
    //         </style>

    //         <script>
    //             var origin1 = new google.maps.LatLng(55.930385, -3.118425);
    //             var origin2 = 'Greenwich, England';
    //             var destinationA = 'Stockholm, Sweden';
    //             var destinationB = new google.maps.LatLng(50.087692, 14.421150);

    //             var service = new google.maps.DistanceMatrixService();
    //             service.getDistanceMatrix(
    //             {
    //                 origins: [origin1, origin2],
    //                 destinations: [destinationA, destinationB],
    //                 travelMode: 'DRIVING',
    //                 transitOptions: TransitOptions,
    //                 drivingOptions: DrivingOptions,
    //                 unitSystem: UnitSystem,
    //                 avoidHighways: Boolean,
    //                 avoidTolls: Boolean,
    //             }, callback);

    //             function callback(response, status) {
    //             // See Parsing the Results for
    //             // the basics of a callback function.
    //             }
    //         </script>

    //       </head>
    //       <body>
    //         <div id='map'></div>
    //         <script>
    //           var map;
    //           function initMap() {
    //             map = new google.maps.Map(document.getElementById('map'), {
    //               center: {lat: -34.397, lng: 150.644},
    //               zoom: 8
    //             });
    //           }
    //         </script>
    //         <script src='https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap'
    //         async defer></script>
    //       </body>
    //     </html>
        
    //     ";
    // }

?>