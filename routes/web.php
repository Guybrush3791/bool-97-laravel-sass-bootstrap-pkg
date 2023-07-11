<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $db = [
        'paste' => [
            [
                "src" => "https://www.lamolisana.it/wp-content/uploads/2021/09/4-spaghetto-quadrato-bucato.jpg",
                "src-h" => "https://www.lamolisana.it/wp-content/uploads/2021/09/4-spaghetto-quadrato-bucato.png",
                "src-p" => "https://www.lamolisana.it/wp-content/uploads/2021/09/spaghetto-quadrato-bucato.jpg",
                "titolo" => "N.4 Spaghetto Quadrato Bucato",
                "tipo" => "lunga",
                "cottura" => "6 min",
                "peso" => "500g",
                "descrizione" => "È la vera rivelazione della gamma! Lo Spaghetto Quadrato Bucato n.4 fa pensare subito ad una pasta molto succulenta che ha lo stesso potenziale dello Spaghetto Quadrato (N.1 Spaghetto Quadrato). La sua consistenza soda si sprigiona in bocca con un’esplosione di emozioni, grazie agli spessori corposi, al colore elegantemente ambrato, alla texture delicatamente ruvida, cangiante e piacevolissima al tatto che trattiene il condimento sulla superficie. <br> Da provare per rivoluzionare le sorti del primo piatto sia a casa che al ristorante.Dedicato a chi in cucina ama sperimentare nuove forme del gusto, ma vuole stupire affidandosi ad una pasta che garantisce ottime performance in cottura, lo Spaghetto Quadrato Bucato n .4 è il formato perfetto che racchiude tutte caratteristiche uniche di Pasta La Molisana. <br> Da provare per quelli che… il Bucatino già mi piace, lo Spaghetto Quadrato Bucato n .4 sarà il paradiso della pasta!"
            ],
            [
                "src" => "https://www.lamolisana.it/wp-content/uploads/2021/09/4-spaghetto-quadrato-bucato.jpg",
                "src-h" => "https://www.lamolisana.it/wp-content/uploads/2021/09/4-spaghetto-quadrato-bucato.png",
                "src-p" => "https://www.lamolisana.it/wp-content/uploads/2021/09/spaghetto-quadrato-bucato.jpg",
                "titolo" => "N.5 Spaghetto Quadrato Bucato",
                "tipo" => "corta",
                "cottura" => "4 min",
                "peso" => "500g",
                "descrizione" => "È la vera rivelazione della gamma! Lo Spaghetto Quadrato Bucato n.4 fa pensare subito ad una pasta molto succulenta che ha lo stesso potenziale dello Spaghetto Quadrato (N.1 Spaghetto Quadrato). La sua consistenza soda si sprigiona in bocca con un’esplosione di emozioni, grazie agli spessori corposi, al colore elegantemente ambrato, alla texture delicatamente ruvida, cangiante e piacevolissima al tatto che trattiene il condimento sulla superficie. <br> Da provare per rivoluzionare le sorti del primo piatto sia a casa che al ristorante.Dedicato a chi in cucina ama sperimentare nuove forme del gusto, ma vuole stupire affidandosi ad una pasta che garantisce ottime performance in cottura, lo Spaghetto Quadrato Bucato n .4 è il formato perfetto che racchiude tutte caratteristiche uniche di Pasta La Molisana. <br> Da provare per quelli che… il Bucatino già mi piace, lo Spaghetto Quadrato Bucato n .4 sarà il paradiso della pasta!"
            ],
            [
                "src" => "https://www.lamolisana.it/wp-content/uploads/2021/09/4-spaghetto-quadrato-bucato.jpg",
                "src-h" => "https://www.lamolisana.it/wp-content/uploads/2021/09/4-spaghetto-quadrato-bucato.png",
                "src-p" => "https://www.lamolisana.it/wp-content/uploads/2021/09/spaghetto-quadrato-bucato.jpg",
                "titolo" => "N.6 Spaghetto Quadrato Bucato",
                "tipo" => "lunga",
                "cottura" => "8 min",
                "peso" => "500g",
                "descrizione" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, doloribus corporis? Corporis, ipsa. Reiciendis, fuga suscipit. Illo quis ex reiciendis, dignissimos minima laudantium sunt culpa dolor unde quo, ipsam nihil."
            ],
        ]
    ];

    // $paste = [
    //     [
    //         "src" => "https://www.lamolisana.it/wp-content/uploads/2021/09/4-spaghetto-quadrato-bucato.jpg",
    //         "src-h" => "https://www.lamolisana.it/wp-content/uploads/2021/09/4-spaghetto-quadrato-bucato.png",
    //         "src-p" => "https://www.lamolisana.it/wp-content/uploads/2021/09/spaghetto-quadrato-bucato.jpg",
    //         "titolo" => "N.4 Spaghetto Quadrato Bucato",
    //         "tipo" => "lunga",
    //         "cottura" => "6 min",
    //         "peso" => "500g",
    //         "descrizione" => "È la vera rivelazione della gamma! Lo Spaghetto Quadrato Bucato n.4 fa pensare subito ad una pasta molto succulenta che ha lo stesso potenziale dello Spaghetto Quadrato (N.1 Spaghetto Quadrato). La sua consistenza soda si sprigiona in bocca con un’esplosione di emozioni, grazie agli spessori corposi, al colore elegantemente ambrato, alla texture delicatamente ruvida, cangiante e piacevolissima al tatto che trattiene il condimento sulla superficie. <br> Da provare per rivoluzionare le sorti del primo piatto sia a casa che al ristorante.Dedicato a chi in cucina ama sperimentare nuove forme del gusto, ma vuole stupire affidandosi ad una pasta che garantisce ottime performance in cottura, lo Spaghetto Quadrato Bucato n .4 è il formato perfetto che racchiude tutte caratteristiche uniche di Pasta La Molisana. <br> Da provare per quelli che… il Bucatino già mi piace, lo Spaghetto Quadrato Bucato n .4 sarà il paradiso della pasta!"
    //     ],
    //     [
    //         "src" => "https://www.lamolisana.it/wp-content/uploads/2021/09/4-spaghetto-quadrato-bucato.jpg",
    //         "src-h" => "https://www.lamolisana.it/wp-content/uploads/2021/09/4-spaghetto-quadrato-bucato.png",
    //         "src-p" => "https://www.lamolisana.it/wp-content/uploads/2021/09/spaghetto-quadrato-bucato.jpg",
    //         "titolo" => "N.5 Spaghetto Quadrato Bucato",
    //         "tipo" => "corta",
    //         "cottura" => "4 min",
    //         "peso" => "500g",
    //         "descrizione" => "È la vera rivelazione della gamma! Lo Spaghetto Quadrato Bucato n.4 fa pensare subito ad una pasta molto succulenta che ha lo stesso potenziale dello Spaghetto Quadrato (N.1 Spaghetto Quadrato). La sua consistenza soda si sprigiona in bocca con un’esplosione di emozioni, grazie agli spessori corposi, al colore elegantemente ambrato, alla texture delicatamente ruvida, cangiante e piacevolissima al tatto che trattiene il condimento sulla superficie. <br> Da provare per rivoluzionare le sorti del primo piatto sia a casa che al ristorante.Dedicato a chi in cucina ama sperimentare nuove forme del gusto, ma vuole stupire affidandosi ad una pasta che garantisce ottime performance in cottura, lo Spaghetto Quadrato Bucato n .4 è il formato perfetto che racchiude tutte caratteristiche uniche di Pasta La Molisana. <br> Da provare per quelli che… il Bucatino già mi piace, lo Spaghetto Quadrato Bucato n .4 sarà il paradiso della pasta!"
    //     ],
    //     [
    //         "src" => "https://www.lamolisana.it/wp-content/uploads/2021/09/4-spaghetto-quadrato-bucato.jpg",
    //         "src-h" => "https://www.lamolisana.it/wp-content/uploads/2021/09/4-spaghetto-quadrato-bucato.png",
    //         "src-p" => "https://www.lamolisana.it/wp-content/uploads/2021/09/spaghetto-quadrato-bucato.jpg",
    //         "titolo" => "N.6 Spaghetto Quadrato Bucato",
    //         "tipo" => "lunga",
    //         "cottura" => "8 min",
    //         "peso" => "500g",
    //         "descrizione" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, doloribus corporis? Corporis, ipsa. Reiciendis, fuga suscipit. Illo quis ex reiciendis, dignissimos minima laudantium sunt culpa dolor unde quo, ipsam nihil."
    //     ],
    // ];

    return view('home', compact('db'));
}) -> name('home');

Route::get('/posts', function() {

    $posts = [
        [
            'title' => 'learn php',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, quos.',
            'img' => '9238479283749283749234849237.png'
        ],
        [
            'title' => 'learn java',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, quos.',
            'img' => '9238479283749283749234667788.png'
        ],
        [
            'title' => 'learn javascript',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, quos.',
            'img' => '9238479283749283749234849237.png'
        ],
        [
            'title' => 'learn python',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, quos.',
            'img' => '9238479283749283749234667788.png'
        ]
    ];

    return view('posts', compact('posts'));
}) -> name('posts');

Route::get('/about', function() {
    return view('about');
}) -> name('about');
