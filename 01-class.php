<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class</title>
    <link rel="icon" type="image/x-icon" sizes="128x128" href="./icon.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body class="min-h-[100vh] flex justify-center items-center">
    <main class="w-[380px] h-[580px] bg-orange-200/10 p-5 rounded-[20px]">
        <header class="flex gap-4 justify-center items-center border-b-4 text-orange-100 border-orange-200 pb-5">
            <a href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-10 h-10 hover:-translate-x-1 transition-all">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 16.811c0 .864-.933 1.405-1.683.977l-7.108-4.062a1.125 1.125 0 010-1.953l7.108-4.062A1.125 1.125 0 0121 8.688v8.123zM11.25 16.811c0 .864-.933 1.405-1.683.977l-7.108-4.062a1.125 1.125 0 010-1.953L9.567 7.71a1.125 1.125 0 011.683.977v8.123z" />
                </svg>
            </a>
            <h1 class="text-2xl">01 / Class</h1>
        </header>
        <section class="max-h-[460px] text-orange-100 overflow-y-auto my-4">
            <?php
            class Vehicle
            {
                // Attributes
                public $brand;
                public $refer;
                public $model;
                public $color;

                // Methods
                public function setAttributes($brand, $refer, $model, $color)
                {
                    $this->brand = $brand;
                    $this->refer = $refer;
                    $this->model = $model;
                    $this->color = $color;
                }

                public function getAttributes()
                {
                    return "<div class='p-3 w-[320px] justify-center items-center mb-4 bg-orange-200/20 rounded-md'>
                                    <p>Brand: <span class='font-normal'>$this->brand</span></p>
                                    <p>Reference: <span class='font-normal'>$this->refer</span></p>
                                    <p>Model: <span class='font-normal'>$this->model</span></p>
                                    <p>Color: <span class='font-normal'>$this->color</span></p>
                                </div>";
                }
            }

            // Create an Object
            $vehicle1 = new Vehicle;
            $vehicle1->setAttributes('BMW', 'Tiguan', '2023', 'SpaceGray');
            $vehicle2 = new Vehicle;
            $vehicle2->setAttributes('Chevrolet', 'Onix', '2023', 'Black');
            $vehicle3 = new Vehicle;
            $vehicle3->setAttributes('Toyota', 'Prado', '2022', 'White');
            $vehicle4 = new Vehicle;
            $vehicle4->setAttributes('Renault', 'Twingo', '2022', 'Red');

            // Access Attributes
            echo $vehicle1->getAttributes();
            echo $vehicle2->getAttributes();
            echo $vehicle3->getAttributes();
            echo $vehicle4->getAttributes();

            // echo $vehicle1->brand . '<br>';
            // echo $vehicle1->refer . '<br>';
            // echo $vehicle1->model . '<br>';
            // echo $vehicle1->color . '<br>';
            ?>
        </section>
    </main>
    <script src="js/tailwind-3.2.4.js"></script>
</body>

</html>