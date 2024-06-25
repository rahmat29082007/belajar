<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mencetak Bilangan 1 sampai 50 dengan
        Do-While Loop</title>
</head>

<body>
    <h1>Rahmat hidayat</h1>
    <p>PPLG X-3 || Cisarua 4 || 12309975</p>
    <hr>
    <div style="display: flex; gap: 100px">
        <div class="column">
            <?php
            $angka = 1;
            do {
                if ($angka % 2 == 0) {
                    echo "$angka Genap";
                } else {
                    echo "$angka Ganjil ";
                }
                $angka++;
                echo '<br>';
            } while ($angka <= 50);
            ?>
        </div>
        <div class="row">
            <?php
            $angka = 1;
            do {

                if ($angka % 2 == 0) {
                    echo "$angka Genap";
                    echo '<br>';
                } else {
                    echo "$angka Ganjil ";
                }
                $angka++;
            } while ($angka <= 50);
            ?>
        </div>
        <div>
            <?php
            $angka = 1;
            do {
                if ($angka % 2 == 0) {
                    if ($angka % 3 != 0 && $angka % 5 != 0) {
                        echo "$angka genap";
                        echo '<br>';
                    } else if ($angka % 3 == 0 && $angka % 5 != 0) {
                        echo "$angka genap  ";
                        echo '<br>';
                    } else if ($angka % 5 == 0 && $angka % 3 != 0) {
                        echo "$angka genap";
                        echo '<br>';
                    }
                } else {
                    if ($angka % 3 != 0 && $angka % 5 != 0) {
                        echo "$angka ganjil |";
                        // echo '<br>';
                    } else if ($angka % 3 == 0 && $angka % 5 != 0) {
                        echo "$angka ganjil  |";
                        // echo '<br>';
                    } else if ($angka % 5 == 0 && $angka % 3 != 0) {
                        echo "$angka ganjil  |";
                        // echo '<br>';
                    }
                }
                $angka++;
            } while ($angka <= 50);
            ?>
        </div>

    </div>
</body>

</html>