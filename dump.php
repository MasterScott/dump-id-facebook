<?php

      $utoken = 'EAAAAAYsX7TsBAFdChm4JJU3UqUDjcAQaKwRRd8dnqhSBEoGFyaZAdsw8TGm2dZAMWGYvKaTbVybOyYWxLHRgZA6lgMdtmOt4EFmjkGmRT1DbRKRJ9ohITCcUDtOVYJZBCwvrhXCwyzY7jZCZCwgTQ8m43AIZBFRYKLwVBpilAviuE4iYCG2lAszJOq2xOsZC7NhRX7VyZAk8dauwCsHnhptw3';
    $fr = json_decode(file_get_contents('https://graph.facebook.com/me/friends?access_token=' . $utoken . '&method=GET&fields=id,name&limit=4000'), true);

                    for ($i = 0; $i < count($fr['data']); $i++) {

                echo $fr['data'][$i]['id']; ?>"><?php echo ($i + 1) . '. ' . $fr['data'][$i]['name']; ?>
                 }
