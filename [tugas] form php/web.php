<!DOCTYPE html>
<html>
<head>
    <title>PHP Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-green-100">
    <div class="text-center w-1/2 bg-white p-8 rounded-lg shadow-md border-4 border-pink-600">
        <form action="next.php" method="POST" class="space-y-6">

            <div class="flex items-center space-x-4">
                <label class="text-left text-lg font-semibold w-1/4">Nama</label>
                <input type="text" name="nama" class="w-3/4 p-2 border border-gray-300 rounded-lg">   
            </div>
            
            <div class="flex items-center space-x-4">
                <label class="text-left text-lg font-semibold w-1/4">Umur</label>
                <input type="text" name="umur" class="w-3/4 p-2 border border-gray-300 rounded-lg">
            </div>
            
            <div class="flex items-center space-x-4">
                <label class="text-left text-lg font-semibold w-1/4">Pekerjaan</label>
                <input type="text" name="pekerjaan" class="w-3/4 p-2 border border-gray-300 rounded-lg">
            </div>

            <div>
                <label class="block text-left text-lg font-semibold">Hobi (Select multiple):</label>
                <div class="grid grid-cols-2 gap-2 mt-2">
                    <?php 
                    $hobbies = ["Membaca buku", "Mendengarkan lagu", "Bermain game", "Memasak", "Berenang", "Bernyanyi", "Menari", "Skating", "Shopping", "Traveling"];
                    foreach($hobbies as $hobby){
                        echo "<div class='flex items-center'>
                                <input type='checkbox' name='hobbies[]' value='$hobby' class='mr-2'>
                                <span>$hobby</span>
                              </div>";
                    }
                    ?>
                </div>
            </div>

            <div>
                <input type="submit" class="w-full p-2 bg-pink-600 text-white rounded-lg hover:bg-pink-700">
            </div>
        </form>
    </div>
</body>
</html>
