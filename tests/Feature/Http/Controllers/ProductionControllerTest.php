<?php

namespace Tests\Feature\Http\Controller;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ExampleTest extends TestCase
{

    public function test_store()
    {
        $production = New Production;
        $production->nome = fake('pt_BR')->name();
        $production->controller = fake('pt_BR')->text(255);
        $production->preco = fake()->randomFloat(2, 0, 1000);
        $production->maximo_itens = rand(0, 2000);
        $response = $this->post("api/curso", $curso->toArray());
        $response->assertStatus(201);
    }

}
