<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Agenda;

$factory->define(Agenda::class, function (Faker $faker) {
    $sex = $faker->randomElement(['male', 'female']);
    $sexo =  $sex =='male'?'Masculino':'Femenino';
    return [
            'nombres' => $faker->firstname($gender =$sex),
            'apellidos'=> $faker->lastname.' '.$faker->lastname,
            'telefono'=>$faker->e164phoneNumber,
            'celular'=>$faker->e164phoneNumber,
            'sexo'=>$sexo,
            'email'=>$faker->unique()->safeEmail,
            'posicion'=>$faker->randomElement(['Gerente','Administrativo','Contable','Auditor','Encargado','Ingeniero']),
            'departamento'=>$faker->randomElement(['Gerencia de TI','Auditoria TI','Contabilidad']),
            'salario'=>rand(900000, 300000) / 100,
            'fechadenacimiento'=>$faker->dateTimeThisCentury($max = '-20 years'),
    ];
});
