<?php 
// connect to the database
$conn = mysqli_connect('localhost','dsmniger_user','ag&qjnd^Bj@','dsmniger_dsm') or die (mysqli_error($conn));
if(!$conn){
    echo'connection error', mysqli_connect_error();
}

$errors = array("name"=>"", "phone"=>"", "email"=>"", "sex"=>"", "maritalStatus"=>"", "city"=>"", "state"=>"", "country"=>"", "church"=>"", "bornAgain"=>"", "venue"=>"" );

$name = "";
$phone = "";
$email = "";
$sex = "";
$maritalStatus = "";
$city = "";
$state = "";
$country = "";
$church = "";
$bornAgain = "";
$venue = "";

$success = "";

if(isset($_POST["submit"])){

    // check for name
    if(empty($_POST['name'])){
        $errors['name'] = 'Please insert Fullname </br>';
    }else{
    $name = $_POST['name']; 
    }

    // check for phone
    if(empty($_POST['phone'])){
        $errors['phone'] = 'Please insert Phone </br>';
    }else{
    $phone = $_POST['phone']; 
    }

    //  check for email address 
    if(empty($_POST['email'])){
        $errors['email'] = 'An e-mail is required </br>';
    }else{
    $email = $_POST['email']; 
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errors['email'] ='email must be valid email address';
    } 
    }

    // check for sex
    if(empty($_POST['sex'])){
        $errors['sex'] = 'Please insert Sex </br>';
    }else{
    $sex = $_POST['sex']; 
    }

    // check for maritalStatus
    if(empty($_POST['maritalStatus'])){
        $errors['maritalStatus'] = 'Please insert Marital Status </br>';
    }else{
    $maritalStatus = $_POST['maritalStatus']; 
    }

    // check for city
    if(empty($_POST['city'])){
        $errors['city'] = 'Please insert city </br>';
    }else{
    $city = $_POST['city']; 
    }

    // check for state
    if(empty($_POST['state'])){
        $errors['state'] = 'Please insert State </br>';
    }else{
    $state = $_POST['state']; 
    }

    // check for country
    if(empty($_POST['country'])){
        $errors['country'] = 'Please insert country </br>';
    }else{
    $country = $_POST['country']; 
    }

    // check for church
    if(empty($_POST['church'])){
        $errors['church'] = 'Please insert church </br>';
    }else{
    $church = $_POST['church']; 
    }

    // check for bornAgain
    if(empty($_POST['bornAgain'])){
        $errors['bornAgain'] = 'Please insert Born Again </br>';
    }else{
    $bornAgain = $_POST['bornAgain']; 
    }

    // check for venue
    if(empty($_POST['venue'])){
        $errors['venue'] = 'Please insert Venue </br>';
    }else{
    $venue = $_POST['venue']; 
    }



    if(array_filter($errors)){

    }else {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $sex = mysqli_real_escape_string($conn, $_POST['sex']);
        $maritalStatus = mysqli_real_escape_string($conn, $_POST['maritalStatus']);
        $city = mysqli_real_escape_string($conn, $_POST['city']);
        $state = mysqli_real_escape_string($conn, $_POST['state']);
        $country = mysqli_real_escape_string($conn, $_POST['country']);
        $church = mysqli_real_escape_string($conn, $_POST['church']);
        $bornAgain = mysqli_real_escape_string($conn, $_POST['bornAgain']);
        $venue = mysqli_real_escape_string($conn, $_POST['venue']);


        $sql = "INSERT INTO registration(name,phone,email,sex,maritalStatus,city,state,country,church,bornAgain,venue)VALUES('$name','$phone','$email','$sex','$maritalStatus','$city','$state','$country','$church','$bornAgain','$venue')";
    

    if(mysqli_query($conn,$sql)){
        $success = "Registration Complete Make payment to continue";
        $name = "";
        $phone = "";
        $email = "";
        $sex = "";
        $maritalStatus = "";
        $city = "";
        $state = "";
        $country = "";
        $church = "";
        $bornAgain = "";
        $venue = "";
    }else{
        echo 'query error'. mysqli_error($conn);
    }
}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/scss/custom.css">
    <title>Language Academy | Register</title>
</head>

<body>
    <div id="content">
        <div class="container-fluid">
            <div class="row">
                <div class="d-none d-md-block col-md-6 bg-primary">
                    <div class="align-middle py-5 m-5">
                        <div class="py-5 text-center">
                            <h3 class="text-white">Come and learn the word of God, <br> from people who know the way.</h3>
                        </div>
                        <div class="row align-middle">
                            <div class="col-lg-8 m-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" class="img-fluid m-auto" data-name="Layer 1"
                                    width="860.36652" height="608.83997" viewBox="0 0 860.36652 608.83997"
                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <path
                                        d="M220.669,659.18112,194.29187,636.8588a111.491,111.491,0,0,1,21.38047-49.19867c.88647,32.24909,33.94223,53.84729,45.3173,84.03661a67.06234,67.06234,0,0,1-5.54685,57.86245l-2.65364,24.36342a112.37511,112.37511,0,0,1-57.57367-74.4214,108.5492,108.5492,0,0,1-2.46963-27.11925C206.25119,656.49162,220.669,659.18112,220.669,659.18112Z"
                                        transform="translate(-169.81674 -145.58002)" fill="#f2f2f2" />
                                    <path
                                        d="M960.06081,701.87713,978.481,672.64128a111.49089,111.49089,0,0,1,51.70226,14.30067c-31.80931,5.38117-48.57985,41.1291-76.8849,56.60848a67.06236,67.06236,0,0,1-58.07009,2.58765l-24.49526.77457a112.37509,112.37509,0,0,1,65.65238-67.40206,108.549,108.549,0,0,1,26.50865-6.23247C960.71059,687.225,960.06081,701.87713,960.06081,701.87713Z"
                                        transform="translate(-169.81674 -145.58002)" fill="#f2f2f2" />
                                    <polygon
                                        points="207.198 460.992 105.065 455 119.065 356 209.065 453 207.198 460.992"
                                        fill="#f2f2f2" />
                                    <polygon
                                        points="194.198 561.992 90.198 554.992 104.065 465 194.667 555.008 194.198 561.992"
                                        fill="#f2f2f2" />
                                    <path
                                        d="M944.99609,289.95329h0V198.5067A52.92668,52.92668,0,0,0,892.06941,145.58H698.32746a52.92673,52.92673,0,0,0-52.92674,52.92673V700.18942a52.92669,52.92669,0,0,0,52.92669,52.92668H892.06946A52.92658,52.92658,0,0,0,944.996,700.18952V355.04646h0a3.33811,3.33811,0,0,0,3.33811-3.33811v-58.417A3.3381,3.3381,0,0,0,944.99609,289.95329Z"
                                        transform="translate(-169.81674 -145.58002)" fill="#3f3d56" />
                                    <path
                                        d="M933.73217,198.87V699.82817A39.50021,39.50021,0,0,1,894.6438,739.331a3.4704,3.4704,0,0,1-.43261.018H699.52632a39.52458,39.52458,0,0,1-39.52086-39.52086V198.87a39.52451,39.52451,0,0,1,39.52086-39.52086h23.626A18.79175,18.79175,0,0,0,740.543,185.22779h110.9936a18.8054,18.8054,0,0,0,17.37263-25.87867h25.302A39.52455,39.52455,0,0,1,933.73217,198.87Z"
                                        transform="translate(-169.81674 -145.58002)" fill="#fff" />
                                    <path
                                        d="M890.86929,727.12q0,7.785-.49,15.44a3.02185,3.02185,0,0,1-.43.02h-194.68a39.53393,39.53393,0,0,1-38.34-29.9,37.33946,37.33946,0,0,1-.85-4.53,38.852,38.852,0,0,1-.33-5.09V479.81a247.29437,247.29437,0,0,1,44.46,6.28c1.43.32995,2.85.68,4.26,1.04.09.02.18006.05.27.07,1.43.36,2.85.74,4.26,1.13a246.32773,246.32773,0,0,1,83.25,40.99c1.43,1.07,2.85,2.17,4.26,3.28l.27.21q3.54,2.79,6.97,5.72c.51.43,1.02.87,1.52,1.31995,1.23,1.06,2.46,2.14,3.66,3.23a248.13916,248.13916,0,0,1,61.8,86.06c.47,1.07.92,2.15,1.37,3.23q.27007.66.54,1.32c.17.4.32995.8.49,1.2A247.05494,247.05494,0,0,1,890.86929,727.12Z"
                                        transform="translate(-169.81674 -145.58002)" fill="#3f3d56" />
                                    <path
                                        d="M646.47139,341.112a4.51065,4.51065,0,0,1-4.50535-4.50534V305.97027a4.50534,4.50534,0,1,1,9.01069,0v30.63634A4.51065,4.51065,0,0,1,646.47139,341.112Z"
                                        transform="translate(-169.81674 -145.58002)" fill="#3f3d56" />
                                    <path
                                        d="M645.57032,281.64141a4.51066,4.51066,0,0,1-4.50535-4.50535V246.49972a4.50534,4.50534,0,0,1,9.01069,0v30.63634A4.51065,4.51065,0,0,1,645.57032,281.64141Z"
                                        transform="translate(-169.81674 -145.58002)" fill="#3f3d56" />
                                    <path
                                        d="M765.41247,164.50246a4.51064,4.51064,0,0,1,4.50534-4.50534h30.63634a4.50535,4.50535,0,1,1,0,9.01069H769.91781A4.51065,4.51065,0,0,1,765.41247,164.50246Z"
                                        transform="translate(-169.81674 -145.58002)" fill="#fff" />
                                    <path
                                        d="M646.47139,393.37394a4.51065,4.51065,0,0,1-4.50535-4.50534V358.23226a4.50534,4.50534,0,1,1,9.01069,0V388.8686A4.51065,4.51065,0,0,1,646.47139,393.37394Z"
                                        transform="translate(-169.81674 -145.58002)" fill="#3f3d56" />
                                    <circle cx="647.85772" cy="18.92245" r="4.50534" fill="#fff" />
                                    <path
                                        d="M801.03927,704.92a71.22057,71.22057,0,0,1,71.23-71.23h.37q-.27-.66-.54-1.32c-.45-1.08-.9-2.16-1.37-3.23h-69.69V539.85h4.23c-.5-.45-1.01-.89-1.52-1.31995q-3.435-2.925-6.97-5.72l-.27-.21v2.7h-87.51V488.33c-1.41-.39-2.83-.77-4.26-1.13-.09-.02-.18-.05-.27-.07V535.3h-44.46v4.55h44.46v89.29h-44.46v4.55h44.46v71.23H660.33932a37.34043,37.34043,0,0,0,.85,4.53h43.28v29.9h4.53v-29.9h87.51v29.9h4.53v-29.9h76.35v-4.53Zm-4.53,0h-87.51V633.69h87.51Zm0-75.78h-87.51v-1.78a87.51059,87.51059,0,0,1,87.51-87.51Z"
                                        transform="translate(-169.81674 -145.58002)" opacity="0.2" />
                                    <polygon
                                        points="238.653 232.79 190.083 606.41 189.773 608.79 187.753 608.79 188.063 606.41 236.673 232.53 238.653 232.79"
                                        fill="#e5e5e5" />
                                    <polygon
                                        points="137.533 233.26 83.973 606.45 83.633 608.83 81.613 608.83 81.953 606.45 135.553 232.98 137.533 233.26"
                                        fill="#e5e5e5" />
                                    <polygon
                                        points="314.173 608.74 312.093 608.75 311.453 606.37 207.843 221.52 209.773 221 313.523 606.37 314.173 608.74"
                                        fill="#3f3d56" />
                                    <rect x="532.23287" y="359.24917" width="1.99965" height="400.32869"
                                        transform="translate(-302.17517 21.06253) rotate(-15.82738)" fill="#3f3d56" />
                                    <rect x="468.09364" y="691.81953" width="101.1033" height="2.00047"
                                        transform="translate(-299.41997 -26.14147) rotate(-11.68842)" fill="#3f3d56" />
                                    <rect x="450.92821" y="631.73994" width="101.1031" height="2.00047"
                                        transform="translate(-287.60443 -30.86485) rotate(-11.68842)" fill="#3f3d56" />
                                    <rect x="434.58889" y="570.9329" width="100.14063" height="1.99931"
                                        transform="translate(-269.65863 -43.0725) rotate(-10.95318)" fill="#3f3d56" />
                                    <rect x="419.5494" y="510.85304" width="98.03455" height="1.99985"
                                        transform="translate(-260.15625 -45.03237) rotate(-11.17824)" fill="#3f3d56" />
                                    <path
                                        d="M305.659,378.77094a37.47642,37.47642,0,1,1,74.08984-11.34131l-1.97656.30273a35.47682,35.47682,0,1,0-70.13672,10.73584Z"
                                        transform="translate(-169.81674 -145.58002)" fill="#3f3d56" />
                                    <path
                                        d="M405.82009,379.2182a37.47655,37.47655,0,1,1,73.93506-12.31152l-1.97266.32812a35.47679,35.47679,0,0,0-69.98974,11.65528Z"
                                        transform="translate(-169.81674 -145.58002)" fill="#3f3d56" />
                                    <polygon
                                        points="339.339 315.25 320.12 362.005 382.739 361.551 376.371 315.146 339.339 315.25"
                                        fill="#ffb6b6" />
                                    <polygon
                                        points="354.63 529.884 363.918 531.239 373.562 496.059 359.854 494.06 354.63 529.884"
                                        fill="#ffb6b6" />
                                    <path
                                        d="M522.81158,670.54663l14.8101,1.26549-.91765,6.29052,12.55249,11.67676a3.97088,3.97088,0,0,1-3.27764,6.837l-17.47978-2.54992-2.10521-6.6618-2.08409,6.05067-6.59057-.96142Z"
                                        transform="translate(-169.81674 -145.58002)" fill="#2f2e41" />
                                    <polygon
                                        points="247.292 503.901 254.702 509.663 280.452 483.824 269.516 475.321 247.292 503.901"
                                        fill="#ffb6b6" />
                                    <path
                                        d="M418.11382,644.39715l12.25657,8.40935-3.90246,5.01832,5.15512,16.35044a3.97088,3.97088,0,0,1-6.22476,4.329l-13.94466-10.844,1.45655-6.833-4.7986,4.23409-5.25769-4.0886Z"
                                        transform="translate(-169.81674 -145.58002)" fill="#2f2e41" />
                                    <path
                                        d="M493.47256,496.49117l-6.16714,8.169-16.41516,71.41921L433.5791,626.47119l12.54227,12.04331,47.58969-46.16876,23.35465-49.32929,11.816,45.56357-3,61,20-1c5.42043-70.79052,13.89957-143.62862,3.91227-164.08446l0,0a64.2254,64.2254,0,0,1-48.37413,15.53119Z"
                                        transform="translate(-169.81674 -145.58002)" fill="#2f2e41" />
                                    <path
                                        d="M526.48386,385.22039l15.77822,17.25343a24.65482,24.65482,0,0,1,6.27933,13.65278l0,0a24.65509,24.65509,0,0,1-.14,6.95367L545,448l6,38s-8.55114,5.21594-25,16c-6.71319,4.40124-38.03834,4.3305-38,3,.17754-6.16186,5.68946-22.76871,7-43,1.61758-24.97114-.5036-54.77469,5-69C506.71856,375.63435,526.48386,385.22039,526.48386,385.22039Z"
                                        transform="translate(-169.81674 -145.58002)" fill="#228190" />
                                    <path
                                        d="M472.338,495.78148a8.31275,8.31275,0,0,0-3.41709-12.28l.61689-18.986-11.44629-3.18891-.4946,26.8241a8.35777,8.35777,0,0,0,14.74109,7.63077Z"
                                        transform="translate(-169.81674 -145.58002)" fill="#ffb6b6" />
                                    <path
                                        d="M457.07035,419.13894a6.839,6.839,0,0,1,3.86337-3.9163c6.09167-2.55947,32.4303-24.08214,33.40073-23.67807l8.36171-4.127c.30843.00347,8.54512.1983,12.5858,4.78019a8.87668,8.87668,0,0,1,2.0782,7.12522c-1.18317,10.91193-38.5213,35.42206-42.47842,35.257l-4.192,30.98192,1.63142,11.83613-15.26962.43377-4.70526-17.42748C451.67078,459.13338,450.818,435.05993,457.07035,419.13894Z"
                                        transform="translate(-169.81674 -145.58002)" fill="#228190" />
                                    <ellipse cx="505.42332" cy="400.71315" rx="15.5" ry="13"
                                        transform="translate(-133.86783 697.41985) rotate(-81.70033)" fill="#228190" />
                                    <polygon
                                        points="233.692 312.393 233.305 310.431 326.183 289.42 326.183 291.42 233.692 312.393"
                                        fill="#3f3d56" />
                                    <rect x="595.32832" y="171.06994" width="63.4475" height="27.82604" rx="13.91301"
                                        fill="#e6e6e6" />
                                    <rect x="529.24148" y="226.72202" width="195.62119" height="27.82604" rx="13.91301"
                                        fill="#e6e6e6" />
                                    <rect x="457.24148" y="268.3741" width="195.62119" height="27.82604" rx="13.91301"
                                        fill="#228190" />
                                    <path
                                        d="M1029.94674,752.92a1.18642,1.18642,0,0,1-1.19,1.19l-592.69.21-2.08.01-122.31994.04h-2.02l-104.12.04h-2.02l-32.5.01a1.19,1.19,0,0,1,0-2.38l32.84-.01h2.02l104.09-.04h2.02l121.37-.04h2.07l103.42-.04h1.36l488.56-.18A1.18645,1.18645,0,0,1,1029.94674,752.92Z"
                                        transform="translate(-169.81674 -145.58002)" fill="#cacaca" />
                                    <path
                                        d="M543.18,367.9911a21.84458,21.84458,0,1,1,3.78472-18.25484c.06284.26181.11584.52219.16733.79246A21.81477,21.81477,0,0,1,543.18,367.9911Z"
                                        transform="translate(-169.81674 -145.58002)" fill="#ffb6b6" />
                                    <path
                                        d="M548.86367,350.78133c-.55051-2.73815-.34253-1.32331-.9044-4.053a6.53869,6.53869,0,0,1-.82727,3.80039l-25.7376-3.75456,2.18258-14.96164c7.97619-1.88843,15.7191-3.35611,19.365,2.82494a15.12064,15.12064,0,0,1,12.77906,17.14422Z"
                                        transform="translate(-169.81674 -145.58002)" fill="#2f2e41" />
                                    <path
                                        d="M533.67322,391.0402c.0206-.27993.03282-.57126.03361-.85407a29.44691,29.44691,0,0,0-.8062-6.18111c-.43757-2.19615-.88358-4.40371-1.331-6.6013a18.1516,18.1516,0,0,1-2.50405,11.27666c-3.85036-4.01786-1.30463-9.83384-6.98456-10.66242-13.65546-1.992-24.76731-16.63688-22.77383-30.30224,1.992-13.65552,9.33971-23.01283,22.99517-21.02079,13.66542,1.99349,23.83584,9.864,22.11093,23.55845C527.01394,351.75753,537.05165,390.11826,533.67322,391.0402Z"
                                        transform="translate(-169.81674 -145.58002)" fill="#2f2e41" />
                                    <circle cx="333.81173" cy="184.45918" r="9.12082" fill="#2f2e41" />
                                    <path
                                        d="M514.44753,322.50818a12.33029,12.33029,0,0,0-9.275-7.00733,9.44208,9.44208,0,0,1,2.6059,15.45563l1.8443-1.585a3.0973,3.0973,0,0,0,3.66143.26154,4.36971,4.36971,0,0,0,1.916-3.29456A7.58466,7.58466,0,0,0,514.44753,322.50818Z"
                                        transform="translate(-169.81674 -145.58002)" fill="#2f2e41" />
                                    <path
                                        d="M630.55186,418.97754a8.31272,8.31272,0,0,0-11.7162,5.02049l-18.89927,1.91456-1.6377,11.7688,26.65145-3.07858a8.35777,8.35777,0,0,0,5.60172-15.62527Z"
                                        transform="translate(-169.81674 -145.58002)" fill="#ffb6b6" />
                                    <path
                                        d="M556.62193,444.30631a6.83909,6.83909,0,0,1-4.39549-3.308c-3.34717-5.697-28.18271-28.938-27.91134-29.95357l-5.20276-7.7383c-.03759-.30616-.94034-8.49554,3.06323-13.10989a8.87669,8.87669,0,0,1,6.78538-3.0077c10.97234-.27912,38.5579,34.44726,38.92079,38.39116l32.93852-.94835L612.33411,421.44l2.46144,15.07616L598.149,443.49825C596.9792,444.33686,573.23322,448.38486,556.62193,444.30631Z"
                                        transform="translate(-169.81674 -145.58002)" fill="#228190" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div>
                        <div class="py-5 text-center">
                            <a href="index.php" class="btn btn-outline-primary">
                                <i class="bi bi-arrow-left-short"></i>
                                Go back
                            </a>
                        </div>
                        <h3 class="py-5 text-center">Register Here!</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-7 col-md-10 col-sm-10 m-auto">
                        <div class="card">
                    <?php 
                    if($success)
                    {
                        echo '<div class="alert alert-success text-center m-2 py-3" role="alert">' ;
                        echo $success;
                        echo '</div>';
                    }
                    ?>                    
                    <div class="card-body ">

                        <form method="POST">
                            
                            <div class=" mb-3">
                                <label for="name" class="form-label">Fullname (Firstname Surname): </label>
                                <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                            </div>
                            <div class="text-danger mb-3">
                                <?php echo $errors['name'] ?>
                            </div>

                            <div class=" mb-3">
                                <label for="phone" class="form-label">Phone Number: </label>
                                <input type="text" name="phone" class="form-control" placeholder="E.g: 080112345678" value="<?php echo $phone; ?>">
                            </div>
                            <div class="text-danger mb-3">
                                <?php echo $errors['phone'] ?>
                            </div>

                            <div class=" mb-3">
                                <label for="email" class="form-label">Email: </label>
                                <input type="text" name="email" class="form-control" placeholder="E.g: hello@gmail.com" value="<?php echo $email; ?>">
                            </div>
                            <div class="text-danger mb-3">
                                <?php echo $errors['email'] ?>
                            </div>

                            <div class=" mb-4">
                                <label for="sex" class="form-label">Sex: </label>
                                <select class="form-select" aria-label="Default select example" name="sex">
                                    <option value=""></option>
                                    <option <?php if($sex == "male"){echo "selected";} ?> value="male">Male</option>
                                    <option <?php if($sex == "female"){echo "selected";} ?> value="female">Female</option>
                                </select>
                            </div>
                            <div class="text-danger mb-3">
                                <?php echo $errors['sex'] ?>
                            </div>

                            <div class=" mb-4">
                                <label for="maritalStatus" class="form-label">Marital Status: </label>
                                <select class="form-select" aria-label="Default select example" name="maritalStatus">
                                <option value=""></option>
                                <option <?php if($maritalStatus == "single"){echo "selected";} ?> value="single">Single</option>
                                    <option <?php if($maritalStatus == "married"){echo "selected";} ?> value="married">Married</option>
                                </select>
                            </div>
                            <div class="text-danger mb-3">
                                <?php echo $errors['maritalStatus'] ?>
                            </div>

                            <div class=" mb-3">
                                <label for="city" class="form-label">City of Residence: </label>
                                <input type="text" name="city" class="form-control" placeholder="" value="<?php echo $city; ?>">
                            </div>
                            <div class="text-danger mb-3">
                                <?php echo $errors['city'] ?>
                            </div>

                            <div class=" mb-3">
                                <label for="state" class="form-label">State/Province: </label>
                                <input type="text" name="state" class="form-control" placeholder="" value="<?php echo $state; ?>">
                            </div>
                            <div class="text-danger mb-3">
                                <?php echo $errors['state'] ?>
                            </div>

                            <div class=" mb-3">
                                <label for="country" class="form-label">Country of Residence: </label>
                                <input type="text" name="country" class="form-control" placeholder="" value="<?php echo $country; ?>">
                            </div>
                            <div class="text-danger mb-3">
                                <?php echo $errors['country'] ?>
                            </div>

                            <div class=" mb-3">
                                <label for="church" class="form-label">Name of Church/Fellowship: </label>
                                <input type="text" name="church" class="form-control" placeholder="" value="<?php echo $church; ?>">
                            </div>
                            <div class="text-danger mb-3">
                                <?php echo $errors['church'] ?>
                            </div>

                            <div class=" mb-4">
                                <label for="bornAgain" class="form-label">Are you born again? </label>
                                <select class="form-select" aria-label="Default select example" name="bornAgain">
                                <option value=""></option>
                                    <option <?php if($bornAgain == "yes"){echo "selected";} ?> value="yes">Yes</option>
                                    <option <?php if($bornAgain == "no"){echo "selected";} ?> value="no">No</option>
                                </select>
                            </div>

                            <div class=" mb-4">
                                <label for="venue" class="form-label">Preferred Venue </label>
                                <select class="form-select" aria-label="Default select example" name="venue">
                                <option value=""></option>
                                    <option <?php if($venue == "online"){echo "selected";} ?> value="online">Online (Virtual)</option>
                                    <option <?php if($venue == "onsite"){echo "selected";} ?> value="onsite">Onsite (Physical)</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <p>already you registered? <a href="about.php">Learn more.</a> </p>
                            </div>
                            <div class=" mb-3 d-grid">
                                <button name="submit" type="submit" class="btn btn-primary text-white">
                                    Register
                                </button>
                            </div>

                        </form>
                    </div>

                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <script src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
</body>

</html>