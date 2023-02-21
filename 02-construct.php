<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construct</title>
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
            <h1 class="text-2xl">02 / Construct</h1>
        </header>
        <section class="max-h-[440px] text-orange-100 overflow-y-auto my-4">
            <?php
            class PlayList
            {
                // Atributes
                private $name;
                private $artist = array();
                private $album  = array();
                private $cover  = array();
                private $year   = array();

                // Methods

                public function __construct($name)
                {
                    $this->name = $name;
                }

                public function setPlayList($artist, $album, $cover, $year)
                {
                    $this->artist[] = $artist;
                    $this->album[]  = $album;
                    $this->cover[]  = $cover;
                    $this->year[]   = $year;
                }

                public function getPlayList()
                {
                    echo "<div class='p-3 w-[320px] rounded-md bg-orange-200/10'>
                                <h2 class='my-2 text-center'>
                                    PLAYLIST: <span class='font-normal'> " . $this->name . " </span>
                                </h2>";
                    for ($i = 0; $i < count($this->artist); $i++) {
                        echo "  <div class='p-2 text-center justify-center flex flex-col gap-1 items-center mb-4 bg-orange-200/20 rounded-md'>
                                    <img class='rounded-md' width='200' height='200' src='" . $this->cover[$i] . "' alt='Album Cover'>
                                    <p>Artist: <span class='font-normal'>" . $this->artist[$i] . "</span> </p>
                                    <p>Album: <span class='font-normal'>" . $this->album[$i] . "</span> </p>
                                    <p>Year: <span class='font-normal'>" . $this->year[$i] . "</span> </p>
                                </div>";
                    }
                    echo "</div>";
                }
            }
            $playList = new PlayList('Phonk');
            $playList->setPlayList('INTERWORLD', 'zxcphonkk?', 'https://tinyurl.com/5yvshb2a', 2021);
            $playList->setPlayList('Kordhell', 'Phonkageddon', 'https://tinyurl.com/4xj5rp5z', 2021);
            $playList->setPlayList('phonk.me, KIIXSHI', 'GHOST!', 'https://tinyurl.com/2p87c58n', 2022);
            $playList->setPlayList('PlayaPhonk', 'Phonky Town', 'https://tinyurl.com/sjwdem9w', 2021);
            $playList->setPlayList('TWISTED', 'WORTH NOTHING', 'https://tinyurl.com/53zt9b4s', 2022);
            $playList->setPlayList('PHONK KNIGHT', 'Dr Livesey Phonk', 'https://tinyurl.com/2ca5yttu', 2022);
            $playList->getPlayList();
            ?>
        </section>
    </main>
    <script src="js/tailwind-3.2.4.js"></script>
</body>

</html>