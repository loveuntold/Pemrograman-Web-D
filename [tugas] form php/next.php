<!DOCTYPE html>
<html>
<head>
    <title>Form Processing PHP</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-green-100">
    <div class="text-center w-1/2 bg-white p-8 rounded-lg shadow-md border-4 border-pink-600">
        <?php
        
            $name = $_POST['nama'];
            $age = $_POST['umur'];
            $job = $_POST['pekerjaan'];

            if(isset($_POST['hobbies'])){
                $selectedHobbies = $_POST['hobbies'];
            } else{
                $selectedHobbies = [];
            }
            
            $hurufVokal = ['a', 'i', 'u', 'e', 'o', 'A', 'I', 'U', 'E', 'O'];
            $nameWithX = str_replace($hurufVokal, 'x', $name);

            $reversedAge = strrev($age);

            $jobUppercase = strtoupper($job);

            $allHobbies = ["Membaca buku", "Mendengarkan lagu", "Bermain game", "Memasak", "Berenang", "Bernyanyi", "Menari", "Skating", "Shopping", "Traveling"];
            $unselectedHobbies = array_diff($allHobbies, $selectedHobbies);

            echo "<p class='flex text-lg font-semibold'>Nama    : $nameWithX</p>";
            echo "<p class='flex text-lg font-semibold'>Umur    : $reversedAge</p>";
            echo "<p class='flex text-lg font-semibold'>Pekerjaan   : $jobUppercase</p>";
            echo "<p class='flex text-lg font-semibold'>Hobi</p>";

            echo "<ul class='grid grid-cols-2 gap-2 list-disc text-justify'>";
            foreach($unselectedHobbies as $hobi){
                echo "<li>$hobi</li>";
            }
            echo "</ul>";
        ?>
    </div>
</body>
</html>