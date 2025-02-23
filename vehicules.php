<?php
session_start();

if (!isset($_SESSION['userid'])) {
    header("Location: login.php");
    exit();
}

$categories = [
    "sport" => [
        ["name" => "Golf 7", "image" => "golf.jpg", "description" => "Une voiture polyvalente et appréciée, reconnue pour son confort et ses performances équilibrées", "price" => "300,000 DH"],
        ["name" => "Audi Q8", "image" => "audi.jpg", "description" => "Luxe, performances et technologies avancées pour une expérience de conduite haut de gamme", "price" => "700,000 DH"],
        ["name" => "Ford Fiesta", "image" => "ford.jpg", "description" => "Une voiture sportive et élégante, parfaite pour les amateurs de sensations fortes", "price" => "150,000 DH"]
    ],
    "luxe" => [
        ["name" => "Mercedes", "image" => "mercedes.jpg", "description" => "Une voiture de luxe et de sport, appréciée pour ses performances puissantes et son allure élégante", "price" => "800,000 DH"],
        ["name" => "Porsche", "image" => "porche.jpg", "description" => "Une voiture de sport haut de gamme, célèbre pour ses performances et son style distinctif", "price" => "1,000,000 DH"],
        ["name" => "BMW", "image" => "bmw.jpg", "description" => "Une voiture de luxe connue pour son style élégant et ses performances puissantes", "price" => "900,000 DH"]
    ],
    "familier" => [
        ["name" => "Peugeot 208", "image" => "208.jpg", "description" => "Une petite voiture pratique et confortable, idéale pour la ville", "price" => "120,000 DH"],
        ["name" => "Clio 4", "image" => "clio.jpg", "description" => "Compacte populaire, idéale pour la conduite en ville, avec un confort et des fonctionnalités pratiques", "price" => "100,000 DH"],
        ["name" => "Citroen C3", "image" => "citroen.jpg", "description" => "Design ludique, confort notable et personnalisation poussée, parfaite pour la vie en ville", "price" => "115,000 DH"]
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Véhicules</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            background-color: #000;
            color: #fff;
            line-height: 1.6;
        }

        main {
            padding: 20px 40px;
        }

        .category {
            margin-bottom: 50px;
        }

        .category h1 {
            color: #ffd700;
            text-align: center;
            text-transform: uppercase;
            margin-bottom: 30px;
            font-size: 2.5em;
            display: inline-block;
            padding-bottom: 5px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 15px;
            justify-items: center;
        }

        .card {
            background: linear-gradient(145deg, #111, #222);
            border: 1px solid #ffd700;
            border-radius: 20px;
            box-shadow: 0px 0px 20px 15px rgba(102, 102, 23, 0.6); /* Initial shadow */
            overflow: hidden;
            animation: shadowChange 6s infinite alternate; /* Infinite animation */
            width: 100%;
            max-width: 350px;
        }
        .texte:hover {
    transform: scale(1.05);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
}

        /* Keyframes to animate the box-shadow color */
        @keyframes shadowChange {
            0% {
                box-shadow: 0px 0px 20px 4px rgb(180 98 24 / 60%);
            }
            50% {
                box-shadow: -7px -6px 20px 4px rgb(119 203 105 / 80%);
            }
            75% {
                box-shadow: 13px 12px 20px 4px rgb(23 113 159 / 74%);
            }
            100% {
                box-shadow: 0px 0px 20px 10px rgb(204 19 16 / 74%);
            }
        }
        

        .card img {
            width: 100%;
            height: 230px;
            object-fit: cover;
        }

        .card .text {
            padding: 25px;
            text-align: center;
        }

        .card h2 {
            font-size: 2em;
            color: #d3b30b;
            margin: 15px 0;
            font-weight: bold;
        }

        .card p {
            font-size: 1.1em;
            margin-bottom: 20px;
            color: #ddd;
        }

        .card .price {
            font-size: 1.4em;
            color: #049606;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .card button {
            background-color: #049606;
            color: #000;
            border: none;
            border-radius: 8px;
            padding: 12px 25px;
            cursor: pointer;
            font-size: 1.1em;
            font-weight: bold;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        

        .card button:hover {
            background-color:rgba(6, 248, 54, 0.7);
            transform: scale(1.08);
        }

        .card button:active {
            background-color: #ccaa00;
        }

        @media (max-width: 768px) {
            main {
                padding: 15px;
            }

            .category h1 {
                font-size: 1.8em;
            }

            .card h2 {
                font-size: 1.5em;
            }

            .card .price {
                font-size: 1.2em;
            }
        }
          
        .category {
    text-align: center;
    position: relative;
    margin-top: 100px;
}

.category h1 {
    font-size: 3em;
    font-weight: bold;
    background: linear-gradient(45deg, #ffd700,rgb(218, 104, 17));
    -webkit-background-clip: text;
    color: transparent;
    position: relative;
    z-index: 2;
    padding-bottom: 20px;
    display: inline-block;
}

.category h1::before{
    content: "";
    position: absolute;
    top: 70%;
    width: 120%;
    height: 5px;
    background: linear-gradient(45deg,rgb(146, 76, 11),rgb(187, 220, 25));
    border-radius: 10px;
    animation: wave 2s ease-in-out 1.5;
}
.category h1::after {
    content: "";
    position: absolute;
    top: 70%;
    width: 120%;
    height: 5px;
    background: linear-gradient(45deg, #ffd700,rgb(187, 220, 25));
    border-radius: 10px;
    animation: wave1 2s ease-in-out 1.5;
}

.category h1::before {
    left: -10%;
    animation-delay: -1s;
}

.category h1::after {
    right: -10%;
}

@keyframes wave {
    0% {
        transform: translateX(-100%) rotate(0deg);
    }
    50% {
        transform: translateX(100%) rotate(180deg);
    }
    100% {
        transform: translateX(-100%) rotate(360deg);
    }
}

@keyframes wave1 {
    0% {
        transform: translateX(-100%) rotate(0deg);
    }
    50% {
        transform: translateX(100%) rotate(180deg);
    }
    100% {
        transform: translateX(-100%) rotate(360deg);
    }
}

.particles {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    z-index: 1;
}

.particle {
    position: absolute;
    background-color: #ffd700;
    border-radius: 50%;
    opacity: 0.8;
    animation: moveParticles 5s 1.5;
}

@keyframes moveParticles {
    0% {
        transform: translateX(0) translateY(0);
    }
    100% {
        transform: translateX(300px) translateY(300px);
    }
}

        
       
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
    const particleContainer = document.querySelector('.particles');
    
    for (let i = 0; i < 100; i++) {
        const particle = document.createElement('div');
        particle.classList.add('particle');
        particle.style.width = `${Math.random() * 10 + 5}px`;
        particle.style.height = particle.style.width;
        particle.style.top = `${Math.random() * window.innerHeight}px`;
        particle.style.left = `${Math.random() * window.innerWidth}px`;
        particleContainer.appendChild(particle);
    }
});

        </script>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Bodoni&display=swap" rel="stylesheet">
</head>
<body>
    <main id="main">
        <?php foreach ($categories as $category => $vehicles) { ?>
            <section class="category <?php echo htmlspecialchars($category); ?>">
                <nav style="text-align: center;">
                <h1 style="font-family: 'Libre Bodoni', serif; position: relative;"><?php echo ucfirst($category); ?></h1></nav>
                <div class="cards">
                    <?php foreach ($vehicles as $vehicle) { ?>
                        <div class="card">
                            <img src="images/<?php echo $vehicle['image']; ?>" alt="<?php echo htmlspecialchars($vehicle['name']); ?>">
                            <div class="text">
                                <h2  style="font-family: 'Libre Bodoni', serif;"><?php echo htmlspecialchars($vehicle['name']); ?></h2>
                                <p><?php echo htmlspecialchars($vehicle['description']); ?></p>
                                <p class="price"><?php echo htmlspecialchars($vehicle['price']); ?></p>
                                <button onclick="window.location.href='reservation.php?vehicle=<?php echo urlencode($vehicle['name']); ?>'">Acheter</button>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </section>
        <?php } ?>
    </main>
</body>
</html>
