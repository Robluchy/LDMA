<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>


    <div class="flex h-screen w-screen items-center justify-center bg-gradient-to-bl from-violet-900 to-teal-400">
        <div class="p-8 w-3/4 cursor-pointer rounded-3xl bg-gray-100 transition duration-300 ease-in-out hover:scale-105 hover:drop-shadow-2xl">
            <?php
        $data = file_get_contents("https://randomuser.me/api/?results=1&nat=ES");
        $datos = json_decode($data, true);
        foreach ($datos["results"] as $user) {
            echo " <div class='flex flex-col items-center justify-center'>
            <img src='" . $user["picture"]["large"] . "' alt='avatar' class='rounded-full w-32 h-32'>
            </div>";
            echo '
                <div class="text-center">
                    <h3 class="text-center text-4xl font-bold">'. $user["name"]["title"] .' '.$user["name"]["first"] . '</h3>
                    <span class="text-sm">'.$user["name"]["last"].'</span>
                ';

                
                if ($user["gender"] = "male") {
                    echo '<i class="fa-solid fa-venus-mars"></i>';
                } else {
                    echo '<i class="fa-solid fa-mars-double"></i>';
                }


                echo "</div>";

            echo '            
            <table class="table-fixed "></table>
                <tbody>
                    <tr>
                        <td class="px-4 py-2">
                            <span class="text-sm font-bold">
                                <i class="fas fa-envelope"></i>
                            </span>
                        </td>
                        <td class="px-4 py-2">
                            <span class="text-sm">
                                '.$user["email"].'
                            </span>
                        </td>
                    </tr>
                    <br>
                    <tr>
                        <td class="px-4 py-2">
                            <span class="text-sm font-bold">
                                <i class="fas fa-phone"></i>
                            </span>
                        </td>
                        <td class="px-4 py-2">
                            <span class="text-sm">
                                '.$user["phone"].'
                            </span>
                        </td>
                    <br>
                    </tr>
                    <tr>
                        <td class="px-4 py-2">
                            <span class="text-sm font-bold">
                                <i class="fas fa-map-marker-alt"></i>
                            </span>
                        </td>
                        <td class="px-4 py-2">
                            <span class="text-sm">
                                '.$user["location"]["country"].'
                            </span>
                        </td>
                    </tr>
                    <br>
                    <tr>
                        <td class="px-4 py-2">
                            <span class="text-sm font-bold">
                                <i class="fas fa-birthday-cake"></i>
                            </span>
                        </td>
                        <td class="px-4 py-2">
                            <span class="text-sm">
                                '.$user["dob"]["date"].'
                            </span>
                        </td>
                    </tr>
                    <br>
                </tbody>
            </table>

            <div class="text-center">
                <p class="my-4  text-center text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, molestias! Placeat quidem excepturi, suscipit ea odit fugit aspernatur eos, labore deserunt iure magni necessitatibus voluptatum, voluptas facilis facere quibusdam consectetur.
                Odit consectetur iusto maiores recusandae consequuntur corrupti! Tempore possimus necessitatibus, libero eligendi voluptatibus dicta quidem tenetur illum explicabo ab? Deserunt quo facere consectetur obcaecati fugit aspernatur consequuntur exercitationem soluta nisi!
                Sint ipsa provident impedit perspiciatis reiciendis itaque cupiditate nihil inventore corrupti atque, iste magnam! Voluptatibus eos id molestias culpa, eligendi quia nam eveniet tempore quo, maiores a, nihil eum! Quisquam!
                Ut, molestias earum autem, ullam illum natus quo quos molestiae odit ipsa numquam aliquid odio neque exercitationem similique. Rerum laboriosam ab, odit numquam atque assumenda reiciendis optio rem odio consectetur.
                Dolores sunt dolorem eligendi tempora molestias doloribus aut temporibus placeat maiores repellendus velit, corrupti modi atque aliquid perspiciatis rerum dolor doloremque, incidunt odio fugiat perferendis. Ducimus doloremque inventore maxime illum.</p>
            </div>

            ';
        }
        ?>
            <div class="text-center">
                <button class="rounded-xl bg-black px-24 py-2 text-white">Seleciona a tu nuevo empleado</button>
            </div>
        </div>
    </div>
    <footer class="fixed w-full bottom-0  bg-gray-900 text-center lg:text-left">
      
        <div class="text-white text-center p-4">Dionny © 2022 Copyright</div>
    
    </footer>
</body>

</html>