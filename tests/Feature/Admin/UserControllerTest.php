<?php

namespace Tests\Feature\Admin;

use App\Models\Admin;
use App\Models\User;
use Carbon\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_user_index()
    {
        // $admin = Admin::find(1);
        $admin = Admin::create([
            'name' => 'alex', //regex covered "required"
            'email' => 'aa@jj.cgh',
            'mobile' => '123456789', //regex covered "min:8" regex covered "required"
            'sex' => 'female',
            'password' => '12345678'
        ]);
        
        $role = Role::create([
            'name' => 'admin',
            'guard_name'=>'admin'
        ]);

        $admin->assignRole('admin', 'admin');



        $this->actingAs($admin, 'admin');
        $response = $this->get(route('admin.users.index'));
        $response->assertStatus(200);
        // $response = $this->get(route('admin.users.index'));
        // $response->assertStatus(500);
        // $response->assertSeeText("");
    }

    // public function test_user_store_validation_throws_error_if_email_is_not_email()
    // {
    //     // $user = User::factory()->create([
    //     //     'name' => 'alex', //regex covered "required"
    //     //     'email' => 'aa@jj.cgh',
    //     //     'mobile' => '123456789', //regex covered "min:8" regex covered "required"
    //     //     'sex' => 'female',
    //     //     'password' => '12345678'
    //     // ]);
    //     // $this->actingAs($user, 'admin');

    //     $response = $this->post(route('admin.users.store'), [
    //         'name' => 'alex', //regex covered "required"
    //         'email' => 'aa@jj.cgh',
    //         'mobile' => '123456789', //regex covered "min:8" regex covered "required"
    //         'sex' => 'female',
    //         'password' => '12345678'
    //     ]);

    //     $response->assertRedirect();
    //     $this->followRedirects($response)->assertSeeText('User saved');
    // }
}
