<?php

namespace Database\Seeders;
use App\Models\Reservation;
use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reservacion = new Reservation();
        $reservacion->room_id=1;
        $reservacion->client_id=1;
        $reservacion->price = 1895;
        $reservacion->fecha_entrada="2022-10-10";
        $reservacion->fecha_salida="2022-12-12";

        $reservacion->save();

        $reservacion = new Reservation();
        $reservacion->room_id=2;
        $reservacion->client_id=2;
        $reservacion->price = 1900;
        $reservacion->fecha_entrada="2022-11-11";
        $reservacion->fecha_salida="2022-12-12";

        $reservacion->save();

        $reservacion = new Reservation();
        $reservacion->room_id=3;
        $reservacion->client_id=3;
        $reservacion->price = 1001;
        $reservacion->fecha_entrada="2022-09-09";
        $reservacion->fecha_salida="2022-10-10";

        $reservacion->save();
    }
}
