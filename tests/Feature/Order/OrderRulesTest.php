<?php

namespace Tests\Feature\Order;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OrderRulesTest extends TestCase
{
    public function test_a_order_require_customer_name() : void
    {
        $order = $this->orderData(['customer_name'=>null]);
        $response = $this->post('/order/store',$order);
        $response->assertSessionHasErrors('customer_name');
    }

    public function test_a_order_require_customer_email() : void
    {
        $order = $this->orderData(['customer_email'=>null]);
        $response = $this->post('/order/store',$order);
        $response->assertSessionHasErrors('customer_email');
    }

    public function test_a_order_require_customer_mobile() : void
    {
        $order = $this->orderData(['customer_mobile'=>null]);
        $response = $this->post('/order/store',$order);
        $response->assertSessionHasErrors('customer_mobile');
    }

    public function orderData( $overrides = []) : array
    {
        return array_merge([
            'customer_name'=> 'default customer',
            'customer_email'=>'customer@email.com',
            'customer_mobile'=> '3004005000',
            'status'=>'CREATED',
            'product_id'=>1,
        ], $overrides);
    }
}
