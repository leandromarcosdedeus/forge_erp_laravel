<?php

namespace Tests\Feature\Http\Controller;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Production;

class ProductionControllerTest extends TestCase
{

    #teste do cadastro de producao
    public function test_store()
    {
        $production = New Production;
        $production->name = fake('pt_BR')->name();
        //$production->controller = fake('pt_BR')->text(255);
        $production->price = fake()->randomFloat(2, 0, 1000);
        $production->quantity = rand(0, 2000);
        $response = $this->post("api/production", $production->toArray());
        $response->assertStatus(202);
    }

}
