<?php

use App\Http\Controllers\CadastroController;
use App\Http\Controllers\ProdutosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/**
 * Verboses:
 * GET, POST, PUT, DELETE
 */



Route::get('/', function () {
    return view('welcome');
});
//http://localhost:8000/hello

//uri é a / depois do 8000
//return pasta resources, views, arquivo dentro welcome.blade.php
//welcome é o nome e .blade.php é nome padrao que temque ter no arquivo

Route::get("/hello", function(){
    return view("hello");
});


//ROta com parametro // Passou o $id pelo url: http://localhost:8000/user/240   id ficou 240
//?page=user&id=240

Route::get("/user/{id}", function($id){
    return "User id: ".$id;
});

//------------------------------------------------------




//produtos
// //Parametros opcionais
// Route::get("/produtos/{id?}", function($id = null){      //id?    a interrogaçao tora o parametro opcional. http://localhost:8000/produtos/2 pode passar sem o2 que traz o else.
//     $produtos = [
//         "Cerveja",
//         "Amendoim",
//         "Torresmo"
//     ];

//     if($id){
//         echo $produtos[$id];
//     } else {
//         print_r($produtos);
//     }
// });



//Views organizadas em pastas
Route::get("/empresa", function(){
    return view("site/empresa");
});

//----------------------------------



//CRUD usuarios

Route::get("/usuarios", function(){
    return view("usuarios/lista");
});

Route::get("/usuarios/add", function(){
    return view("usuarios/adiciona");
});

Route::get("/usuarios/edit", function(){
    return view("usuarios/edita");
});

//---------------------------------



//Usar rotas de qualquer verbose (GET, POST, DELETE...)

Route::any("/any", function(){
    return "Aceita qualquer tipo de verbose. Usando: ".$_SERVER["REQUEST_METHOD"];
});

//---------------------------------



//Rota para definir mais de uma verbose

Route::match(["POST", "GET"], "/contato", function(){
    return view("site/contato");
});

//---------------------------------



//REDIRECIONAMENTO
Route::redirect("/users", "/usuarios");        //se colocar users ele manda pra usuario, tem dois "dominios"

//---------------------------------


//CHAMAR uma view direto sem usar verbose
Route::view("politica-de-privacidade", "site/politica");

//---------------------------------



//ROTAS NOMEADAS
Route::get("/news", function(){
    return view("site/news");
})->name("noticias");

//rota de redirecionamento das nomeadas
Route::get("/novidades", function(){
    return redirect()->route("noticias");
});

//-------------------------------------


//Grupos de Rotas
//Serve para definir um padrao repetitivo de rotas

//JEITO REPETITIVO
// Route::get("/admin/dashboard", function(){
//     return view("admin/dashboard");
// });

// Route::get("/admin/produtos", function(){
//     return view("admin/produtos");
// });

// Route::get("/admin/usuarios", function(){
//     return view("admin/usuarios");
// });


//FORMA 1 GRUPO DE ROTAS: por prefixo
// Route::prefix("admin")->group(function(){

//     //definir as rotas
//     Route::get("dashboard", function(){
//         return view("admin/dashboard");
//     });
//     Route::get("dashboard", function(){
//         return view("admin/produtos");
//     });
//     Route::get("dashboard", function(){
//         return view("admin/usuarios");
//     });
// });


//FORMA 2: agrupamento por nome
// Route::name("admin.")->group(function(){

//     Route::get("admin/dashboard", function(){
//         return view("admin/dashboard");
//     })->name("dashboard");

//     Route::get("admin/usuarios", function(){
//         return view("admin/usuarios");
//     })->name("usuarios");

//     Route::get("admin/produtos", function(){
//         return view("admin/produtos");
//     })->name("produtos");
// });


//FORMA 3: agrupamento por GRUPO
Route::group([
    "prefix" => "admin",
    "as" => "admin."
], function(){
    Route::get("dashboard", function(){
        return view("admin/dashboard");
    })->name("dashboard");

    Route::get("usuarios", function(){
        return view("admin/usuarios");
    })->name("usuarios");

    Route::get("produtos", function(){
        return view("admin/produtos");
    })->name("produtos");
});

//--------------------------------------------------


//ROTAS COM CONTROLLERS
//sintaxe -> Route::get("rota", [NomeCLasse::class, "metodo"])

//Comando pra criar controller no terminal: php artisan make:controller NomeDoController
Route::get("/produtos", [ProdutosController::class, "index"]);
Route::get("/produto/{id}", [ProdutosController::class, "detail"]);


//Resources
//controller de recurso
//php artisan make:controller CadastroController --resource

Route::resource("/cadastro", CadastroController::class);
