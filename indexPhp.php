<?php
include 'arrayList.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/css/bootstrap.min.css' integrity='sha512-o/MhoRPVLExxZjCFVBsm17Pkztkzmh7Dp8k7/3JrtNCHh0AQ489kwpfA3dPSHzKDe8YCuEhxXq3Y71eb/o6amg==' crossorigin='anonymous' />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="app ">
        <div class="py-2 bg-secondary container-fluid d-flex align-items-center">
            <img src="img/Spotify_icon.svg.png" alt="" class="spoty-logo">
        </div>
        <div class="container-fluid bg-lightblue">

            <div class="container pt-5">
                <div class="row row-cols-5">
                    <?php
                    foreach ($diskList as $disk) :
                        echo '
                    <div class="col mb-5 ">
                      <div class="card h-100 mb-5 bg-secondary">
                      <img src="'   . $disk["poster"] . '" class="p-3"'  . $disk["author"] . '" />
                       <div class="card-body text-center">
                            <div class="card-title text-white fs-3">' . $disk["title"] . '</div>
                          <div class="card-author">' . $disk["author"] . '</div>
                            <div class="card-year">' . $disk["year"] . '</div>
                      </div>
                     </div>  
                    </div>
                    ';
                    endforeach;
                    ?>
                </div>
            </div>
        </div>

    </div>
</body>

</html>