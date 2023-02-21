<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Private</title>
    <link rel="icon" type="image/x-icon" sizes="128x128" href="./icon.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body class="min-h-[100vh] flex justify-center items-center">
    <main class="w-[380px] h-[560px] bg-orange-200/10 p-5 rounded-[20px]">
        <header class="flex gap-4 justify-center items-center border-b-4 text-orange-100 border-orange-200 pb-5">
            <a href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-10 h-10 hover:-translate-x-1 transition-all">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 16.811c0 .864-.933 1.405-1.683.977l-7.108-4.062a1.125 1.125 0 010-1.953l7.108-4.062A1.125 1.125 0 0121 8.688v8.123zM11.25 16.811c0 .864-.933 1.405-1.683.977l-7.108-4.062a1.125 1.125 0 010-1.953L9.567 7.71a1.125 1.125 0 011.683.977v8.123z" />
                </svg>
            </a>
            <h1 class="text-2xl">03 / Private</h1>
        </header>
        <section class="max-h-[450px] text-orange-100 overflow-y-auto my-4">
            <h2 class="mb-3 text-center text-xl">Table Maker</h2>
            <form action="" class="p-2 w-[330px] mb-4 bg-orange-200/10 rounded-md grid grid-col-2" method="post">
                <div class="text-center mb-4 flex flex-col gap-4 items-center p-3 bg-orange-200/20 rounded-md">
                    <label>Rows: </label>
                    <input type="range" min="1" max="13" step="1" value="1" name="nr" oninput="onr.value=this.value">
                    <output id="onr">1</output>
                </div>
                <div class="text-center mb-4 items-center flex flex-col gap-4 p-3 bg-orange-200/20 rounded-md">
                    <label>Columns: </label>
                    <input type="range" min="1" max="13" step="1" value="1" name="nc" oninput="onc.value=this.value">
                    <output id="onc">1</output>
                </div>
                <button class="bg-white/20 text-orange-100 rounded px-4 py-2 w-[100%] items-center hover:scale-105 hover:bg-orange-300 hover:text-orange-900 opacity-100 transition-all">Make Table</button>
            </form>
            <?php
            class Table
            {
                private $nr;
                private $nc;

                public function __construct($nr, $nc)
                {
                    $this->nr = $nr;
                    $this->nc = $nc;
                    $this->makeTable();
                }
                private function makeTable()
                {
                    echo "<table class='border-collapse mx-auto mb-4'>";
                    for ($r = 1; $r <= $this->nr; $r++) {
                        echo "<tr class=''>";
                        for ($c = 1; $c <= $this->nc; $c++) {
                            echo "<td class='p-3 rounded-md ring-orange-200/50 ring-1'></td>";
                        }
                        echo "</tr>";
                    }
                    echo "</table>";
                }
            }
            if ($_POST) {
                $table = new Table($_POST['nr'], $_POST['nc']);
            }
            ?>
        </section>
    </main>
    <script src="js/tailwind-3.2.4.js"></script>
</body>

</html>