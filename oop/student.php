


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div>
        <h1>Daftar Nilai</h1>
        <h3>Rombel ; PPLG X-3</h3>
    </div>

    <?php

class  Student {
    private $name;
    private $grades;
    
         public function __construct($name, $grades) {
             $this->name = $name;
             $this->grades = $grades;
         }

         public function getName() {
                return $this->name;
          }

         public function getGrades() {
               return $this->grades;
         }

      public function getAverageGrade() {
        $total = array_sum($this->grades);
        $count = count($this->grades);
            if ($count > 0) {
                return $total/ $count;
            }else {
                return 0;
            }
       }
}


$student1  = new Student("Adly"         , [80,75,90,85]);
$student2  = new Student("Andi"         , [80,85,70,95]);
$student3  = new Student("Dimas"        , [70,76,88,80]);
$student4  = new Student("Fayyadh"      , [77,81,70,8]);
$student5  = new Student("Febri"        , [79,74,80,88]);
$student6  = new Student("Fajri"        , [80,68,73,85]);
$student7  = new Student("Kafiya"       , [80,77,86,80]);
$student8  = new Student("yamani"       , [78,85,79,75]);
$student9  = new Student("Bintang"      , [85,77,84,80]);
$student10 = new Student("Naufal"       , [80,77,80,85]);
$student11 = new Student("Delvin"       , [70,76,68,80]);
$student12 = new Student("Rafli"        , [77,81,75,85]);
$student13 = new Student("Mumtaz"       , [74,65,70,85]);
$student14 = new Student("Fadhlan"      , [70,85,70,75]);
$student15 = new Student("Billy"        , [70,76,88,80]);
$student15 = new Student("Rafid"        , [77,70,75,81]);
$student16 = new Student("Rahmat"       , [70,84,80,88]);
$student17 = new Student("Tubagus"      , [83,64,73,75]);
$student18 = new Student("Rafif"        , [80,77,86,80]);
$student19 = new Student("Valensio"     , [75,85,70,75]);
$student20 = new Student("Vedric"       , [90,75,70,95]);

?>

<table border="10" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Nilai</th>
            <th>Average grade</th>
        </tr>
        <?php for($i = 1; $i <= 20; $i++): ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td> <?php echo ${"student".$i}->getName(); ?> </td>
            <td> <?php echo implode(", ", ${"student".$i}->getGrades()); ?> </td>
            <td> <?php echo number_format(${"student".$i}->getAverageGrade(), 2); ?> </td>
        </tr>
        <?php endfor; ?>
</table>

</body>
</html>