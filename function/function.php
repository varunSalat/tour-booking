<?php 
// !VERSION CONTROL

$version=0.1;


// !REDIRECT FUNCTION
function redirect($url){
    header("Location: ./$url");
}

// !VIEW FUNCTION
function view($view,$dir){
    require( "./views/$dir/$view.view.php");
}

// !FETCH DATA
function fetch_data(){
    $json = file_get_contents("./data/data.json");
    $data = json_decode($json,"");
    return $data;
}

// !SEARCH FOR PACKGE TYPE(tour/trending/trip)
// function trending_packges(){
//     $data = fetch_data();
//     $new_array= array_filter($data,function($term){
//         if($term->type =="trending") {
//         return $term;
//     }
//     });
//     return $new_array;
// }
// function trek_packges(){
//     $data = fetch_data();
//     $new_array= array_filter($data,function($term){
//         if($term->type =="trek") {
//         return $term;
//     }
//     });
//     return $new_array;
// }
// function tour_packges(){
//     $data = fetch_data();
//     $new_array= array_filter($data,function($term){
//         if($term->type =="tour") {
//         return $term;
//     }
//     });
//     return $new_array;
// }



// !DETAILS PAGE
// *TRIP KEY IS SET OR NOT?
function is_set_key(){
    if(!isset($_GET["trip"])){
    redirect("index.php");
    die();
}
    $key= str_replace('_', ' ',  $_GET["trip"]);
    $data = fetch_data();
foreach($data as $term){
    if($term->Name==$key){
        return $term;
    }
}}


?>