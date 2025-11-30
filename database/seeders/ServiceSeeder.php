<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $cortes = [
            [
                'nombre' => "Bronze service",
                'precio' => "$12000",
                'duracion' => "45 min",
                'descripcion' => "El servicio Bronze consiste en un corte de precisión con tijera más un fade americano o europeo al gusto del cliente. Finalizando con lavado y secado de cabello mas Styling con los mejores productos del mercado. Incluye asesoría de imagen.",
            ],
            [
                'nombre' => "Gold Service",
                'precio' => "$15000",
                'duracion' => "45 min",
                'descripcion' => "El servicio Gold consiste en un corte de precisión con tijera más un fade americano o europeo al gusto del cliente, perfilado de cejas, lavado de cabello y secado. Finalizando un Styling con los mejores productos del mercado. Incluye asesoría de imagen .",
            ],
            [
                'nombre' => "Diamond Service",
                'precio' => "$25000",
                'duracion' => "60 min",
                'descripcion' => "El servicio Diamond consiste en un corte de precisión con tijera más un fade americano o europeo al gusto del cliente,perfilado de barba express, perfilado de cejas , lavado de cabello, secado y Styling con los mejores productos del mercado.Incluye asesoría de imagen .",
            ],
            [
                'nombre' => "Silver Service",
                'precio' => "$18000",
                'duracion' => "60 min",
                'descripcion' => "El servicio Silver consiste en un corte de precision con tijera más un fade americano o europeo al gusto del cliente, perfilado de barba express, Finalizando lavado de cabello,secado y Styling con los mejores productos del mercado. Incluye asesoría de imagen .",
            ],
            [
                'nombre' => "Decoloración + color",
                'precio' => "$70000",
                'duracion' => "180 min",
                'descripcion' => "Servicio de color global o visos rubio platinado o color de fantasía (preguntar colores disponibles)Incluye asesoría de imagen,corte de cabello y perfilado de cejas.",
            ],
            [
                'nombre' => "Rizos permanentes",
                'precio' => "$60000",
                'duracion' => "180 min",
                'descripcion' => "Rizos permanentes, servicio tendencia a nivel mundial con una duración de 3 meses aproximadamente dependiendo de la manipulación y cuidado de estos. el servicio incluye corte de cabello, perfilado de cejas y lavado de cabello pasadas 48hrs después del servicio. incluye asesoría de imagen.",
            ],
            [
                'nombre' => "Limpieza Facial",
                'precio' => "$10000",
                'duracion' => "30 min",
                'descripcion' => "limpieza completa con vapor ozono, desmaquillante,exfoliación facial, mascara para impurezas y masaje craneal en el proceso de limpieza que te brindará una experiencia muy excepcional y relajante. ",
            ],
            [
                'nombre' => "Perfilado Barba",
                'precio' => "$10000",
                'duracion' => "30 min",
                'descripcion' => " servicio solo de afeitado completo o perfilado y degradado estético en la barba para una mejor presentación de esta, acompañado de los mejores productos de afeitado del mercado. ",
            ],
        ];

        foreach ($cortes as $corte) {
            Service::create($corte);
        }
    }
}