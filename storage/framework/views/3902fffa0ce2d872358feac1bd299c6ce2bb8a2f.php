<?php echo $__env->make('layouts.all-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <style>
        section {
            width: 80%;
            height: 80vh;
            display: grid;
            font-family: Ubuntu;
        }

        .block {
            border-radius: 15px;
            box-shadow: 0 10px 25px -10px rgba(33, 150, 243, 0.5);
            background-color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .block .numbers {
            font-size: 3rem;
        }

        .block .label {
            font-size: 1.2rem;
            padding: 15px 0 0 0;
            color: #424242;
        }

        .news {
            grid-column: 2/4;
            grid-row: 2/3;
            background: #fff;
            box-shadow: 0 10px 25px -10px rgba(33, 150, 243, 0.5);
            border-radius: 15px;
            overflow-y: auto;
            display: flex;
            flex-wrap: wrap;

        }

        .news .card {
            width: 35%;
            background: #e5eff8;
            display: flex;
            flex-direction: column;
            margin: 50px auto;
            border-radius: 15px;
        }

        .card img {
            width: 100%;
            border-radius: 15px 15px 0 0;
        }

        .card .headline,
        .summary {
            padding: 10px 15px;
            font-size: 1.5rem;
        }

        .summary {
            font-size: 1rem;
            color: #424242;
        }

        .read-more button {
            width: 100%;
            padding: 15px 0;
            border: none;
            font-size: 1.1rem;
            border-radius: 0 0 15px 15px;
            background: #2196F3;
            color: #fff;
            transition: 0.3s;
            outline: none;
        }
        .read-more button:hover {
            background: #FFC107;
            color: #000;
            cursor: pointer;
        }
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #fff;
        }

        ::-webkit-scrollbar-thumb {
            background: #9e999e;

        }
    </style>

</head>

<body>

    <section>

        <div class="news">
        </div>

    </section>

    <script>
        fetch("https://covid-19-statistics.p.rapidapi.com/reports/total?date=2020-04-07", {

                "method": "GET",
                "headers": {
                    "x-rapidapi-key": "2d2dea647fmsh577c57bb54abd69p13249djsn06827c6f1fe8",
                    "x-rapidapi-host": "covid-19-statistics.p.rapidapi.com"
                }
            })
            .then(response => response.json())
            .then(data => {

                var numbers = document.querySelectorAll('.numbers');
                num = new Intl.NumberFormat('en-US');
                numbers[0].innerHTML = num.format(data.data.confirmed);
                numbers[1].innerHTML = num.format(data.data.active);
                numbers[2].innerHTML = num.format(data.data.deaths);
                numbers[3].innerHTML = num.format(data.data.recovered);
            })

            .catch(err => {

                console.error(err);

            });
        fetch("https://covid-19-news.p.rapidapi.com/v1/covid?q=covid&lang=en&media=True", {

                "method": "GET",

                "headers": {

                    "x-rapidapi-key": "2d2dea647fmsh577c57bb54abd69p13249djsn06827c6f1fe8",

                    "x-rapidapi-host": "covid-19-news.p.rapidapi.com"

                }

            })

            .then(response => response.json())

            .then(data => {

                var news = document.querySelector('.news');

                for (let i = 0; i < 20; i++) {

                    var newsData = `<div class="card">

                    <img src="${data.articles[i].media}" alt="news_image">

                    <p class="headline">${data.articles[i].title}</p>

                    <p class="summary">${data.articles[i].summary}</p>

                    <a href="${data.articles[i].link}" class="read-more">

                    <button>Read More</button>

                    </a>

                    </div>`;

                    news.innerHTML += newsData;

                }

            })

            .catch(err => {

                console.error(err);

            });
    </script>
<?php /**PATH C:\xampp\htdocs\CoviGuardFinal\resources\views/user/News/world_news_page.blade.php ENDPATH**/ ?>