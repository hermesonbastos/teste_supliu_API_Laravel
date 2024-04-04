<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\FaixaController;
use Illuminate\Support\Facades\Route;

/* helper que cria automaticamente:
    - GET /api/albuns: Recupera todos os álbuns.
    - GET /api/albuns/{id}: Recupera um álbum específico pelo ID.
    - POST /api/albuns: Cria um novo álbum.
    - PUT /api/albuns/{id}: Atualiza um álbum existente (opcional, dependendo da sua implementação).
    - DELETE /api/albuns/{id}: Exclui um álbum.
*/

Route::apiResource('albuns', AlbumController::class);

Route::apiResource('faixas', FaixaController::class);
// buscar todas as faixas de um álbum específico
Route::get('/albuns/{id}/faixas', [AlbumController::class, 'getFaixasByAlbumId']);

Route::get('/with-faixas', [AlbumController::class, 'getAllAlbumsWithFaixas']);
