<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('/', function () {
    return view('welcome');
});

// --- RUTA DE EMERGENCIA PARA SEMBRAR DATOS ---
Route::get('/sembrar-ya', function () {
    try {
        // 1. Limpiamos la caché para que no haya dudas
        Artisan::call('config:clear');
        
        // 2. Ejecutamos la migración y el seeder a la fuerza
        // El --force es obligatorio en producción
        Artisan::call('migrate:fresh --seed --force');
        
        return "<h1>¡ÉXITO! 🎉</h1><p>La base de datos se ha reiniciado y sembrado correctamente.</p><pre>" . Artisan::output() . "</pre>";
        
    } catch (\Exception $e) {
        return "<h1>❌ ERROR FATAL</h1><p>" . $e->getMessage() . "</p>";
    }
});
```

### 🛠️ Paso 2: Subir el cambio

Sube esto a GitHub para que Railway actualice tu servidor.

```powershell
git add .
git commit -m "Agregando ruta de emergencia para sembrar"
git push