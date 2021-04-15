<?php

namespace Tests\Feature\Admin;

use Carbon\Factory;
use Tests\TestCase;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use App\Http\Middleware\VerifyCsrfToken;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

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
        $this->actingAs_admin();

        $response = $this->get(route('admin.users.index'));
        $response->assertSeeText('Users');
        $response->assertSeeText('Add New');
        $response->assertSee('btn btn-primary float-right');
        $response->assertOk();
    }

    public function test_user_store_validation_throws_error_if_name_validation_does_not_have_min_3()
    {
        $this->actingAs_admin();

        $user = $this->fake_user_post();
        
        $user['name'] = Str::random(2);

        $response = $this
            ->from(route('admin.users.create'))
            ->post(route('admin.users.store'), $user);

        $response->assertRedirect(route('admin.users.create'));
    }

    public function test_user_store_validation_throws_error_if_name_validation_does_not_have_max_255()
    {
        $this->actingAs_admin();

        $user = $this->fake_user_post();
        
        $user['name'] = Str::random(256);

        $response = $this
            ->from(route('admin.users.create'))
            ->post(route('admin.users.store'), $user);

        $response->assertRedirect(route('admin.users.create'));
    }

    public function test_user_store_validation_throws_error_if_name_validation_does_not_have_regex()
    {
        $this->actingAs_admin();

        $user = $this->fake_user_post();
        
        $user['name'] = 'a|a'; $this->from(route('admin.users.create'))->post(route('admin.users.store'), $user)->assertRedirect(route('admin.users.create'));
        $user['name'] = 'a!a'; $this->from(route('admin.users.create'))->post(route('admin.users.store'), $user)->assertRedirect(route('admin.users.create'));
        $user['name'] = 'a#a'; $this->from(route('admin.users.create'))->post(route('admin.users.store'), $user)->assertRedirect(route('admin.users.create'));
        $user['name'] = 'a$a'; $this->from(route('admin.users.create'))->post(route('admin.users.store'), $user)->assertRedirect(route('admin.users.create'));
        $user['name'] = 'a%a'; $this->from(route('admin.users.create'))->post(route('admin.users.store'), $user)->assertRedirect(route('admin.users.create'));
        $user['name'] = 'a^a'; $this->from(route('admin.users.create'))->post(route('admin.users.store'), $user)->assertRedirect(route('admin.users.create'));
        $user['name'] = 'a&a'; $this->from(route('admin.users.create'))->post(route('admin.users.store'), $user)->assertRedirect(route('admin.users.create'));
        $user['name'] = 'a*a'; $this->from(route('admin.users.create'))->post(route('admin.users.store'), $user)->assertRedirect(route('admin.users.create'));
        $user['name'] = 'a(a'; $this->from(route('admin.users.create'))->post(route('admin.users.store'), $user)->assertRedirect(route('admin.users.create'));
        $user['name'] = 'a)a'; $this->from(route('admin.users.create'))->post(route('admin.users.store'), $user)->assertRedirect(route('admin.users.create'));
        $user['name'] = 'a+a'; $this->from(route('admin.users.create'))->post(route('admin.users.store'), $user)->assertRedirect(route('admin.users.create'));
        $user['name'] = 'a`a'; $this->from(route('admin.users.create'))->post(route('admin.users.store'), $user)->assertRedirect(route('admin.users.create'));
        $user['name'] = 'a"a'; $this->from(route('admin.users.create'))->post(route('admin.users.store'), $user)->assertRedirect(route('admin.users.create'));
        $user['name'] = 'a?a'; $this->from(route('admin.users.create'))->post(route('admin.users.store'), $user)->assertRedirect(route('admin.users.create'));
        $user['name'] = 'a\a'; $this->from(route('admin.users.create'))->post(route('admin.users.store'), $user)->assertRedirect(route('admin.users.create'));
        $user['name'] = 'a/a'; $this->from(route('admin.users.create'))->post(route('admin.users.store'), $user)->assertRedirect(route('admin.users.create'));
        $user['name'] = 'a>a'; $this->from(route('admin.users.create'))->post(route('admin.users.store'), $user)->assertRedirect(route('admin.users.create'));
        $user['name'] = 'a<a'; $this->from(route('admin.users.create'))->post(route('admin.users.store'), $user)->assertRedirect(route('admin.users.create'));
        $user['name'] = 'a;a'; $this->from(route('admin.users.create'))->post(route('admin.users.store'), $user)->assertRedirect(route('admin.users.create'));
        $user['name'] = 'a}a'; $this->from(route('admin.users.create'))->post(route('admin.users.store'), $user)->assertRedirect(route('admin.users.create'));
        $user['name'] = 'a{a'; $this->from(route('admin.users.create'))->post(route('admin.users.store'), $user)->assertRedirect(route('admin.users.create'));
        $user['name'] = 'a]a'; $this->from(route('admin.users.create'))->post(route('admin.users.store'), $user)->assertRedirect(route('admin.users.create'));
        $user['name'] = 'a[a'; $this->from(route('admin.users.create'))->post(route('admin.users.store'), $user)->assertRedirect(route('admin.users.create'));
        $user['name'] = 'a:a'; $this->from(route('admin.users.create'))->post(route('admin.users.store'), $user)->assertRedirect(route('admin.users.create'));
        $user['name'] = 'aa '; $this->from(route('admin.users.create'))->post(route('admin.users.store'), $user)->assertRedirect(route('admin.users.create'));
        $user['name'] = ' aa'; $this->from(route('admin.users.create'))->post(route('admin.users.store'), $user)->assertRedirect(route('admin.users.create'));
        $user['name'] = '  a'; $this->from(route('admin.users.create'))->post(route('admin.users.store'), $user)->assertRedirect(route('admin.users.create'));
        $user['name'] = 'a  '; $this->from(route('admin.users.create'))->post(route('admin.users.store'), $user)->assertRedirect(route('admin.users.create'));
        for($i = 3; $i < 255;$i++){
            $username = Str::random($i);
            $this->assertMatchesRegularExpression('/^[a-z0-9-_@\.\']+[a-z0-9-_@\s\.\']*[a-z0-9-_@\.\']+$/i', $username);
            $username = \Faker\Factory::create()->name;
            $this->assertMatchesRegularExpression('/^[a-z0-9-_@\.\']+[a-z0-9-_@\s\.\']*[a-z0-9-_@\.\']+$/i', $username);
            $username = \Faker\Factory::create()->email;
            $this->assertMatchesRegularExpression('/^[a-z0-9-_@\.\']+[a-z0-9-_@\s\.\']*[a-z0-9-_@\.\']+$/i', $username);
            $username = \Faker\Factory::create()->sentence;
            $this->assertMatchesRegularExpression('/^[a-z0-9-_@\.\']+[a-z0-9-_@\s\.\']*[a-z0-9-_@\.\']+$/i', $username);
        }
    }

    public function test_user_store_validation_throws_error_if_email_validation_does_not_have_require()
    {
        $this->actingAs_admin();

        $user = $this->fake_user_post();
        $user['email'] = '';
        $response = $this
            ->from(route('admin.users.create'))
            ->post(route('admin.users.store'), $user);

        $response->assertRedirect(route('admin.users.create'));
    }

    public function test_user_store_validation_throws_error_if_email_validation_does_not_have_email()
    {
        $this->actingAs_admin();
        
        $user = $this->fake_user_post();
        $user['email'] = 'alfjklsj.com';
        $response = $this
            ->from(route('admin.users.create'))
            ->post(route('admin.users.store'), $user);

        $response->assertRedirect(route('admin.users.create'));
    }

    public function test_user_store_validation_throws_error_if_email_validation_does_not_have_unique()
    {
        $this->actingAs_admin();

        User::create([
            'name' => 'abc',
            'email' => 'abc@abc.com',
            'mobile'  => '12356789',
            'password' => '12345678',
            'sex' => 'male',
        ]);

        $user = [
            'name' => 'abcd',
            'email' => 'abc@abc.com',
            'mobile'  => '12356788',
            'password' => '12345678',
            'password_confirmation' => '12345678',
            'sex' => 'male',
        ];

        $response = $this
            ->from(route('admin.users.create'))
            ->post(route('admin.users.store'), $user);

        $response->assertRedirect(route('admin.users.create'));
    }

    public function test_user_store_validation_throws_error_if_mobile_validation_does_not_have_regex()
    {
        $this->actingAs_admin();

        $user = $this->fake_user_post();
        $user['mobile'] = '71585844*';
        $response = $this
            ->from(route('admin.users.create'))
            ->post(route('admin.users.store'), $user);

        $response->assertRedirect(route('admin.users.create'));

        $user = $this->fake_user_post();
        $user['mobile'] = '111';
        $response = $this
            ->from(route('admin.users.create'))
            ->post(route('admin.users.store'), $user);

        $response->assertRedirect(route('admin.users.create'));

        $mobile = '+4571717171';
        $this->matchesRegularExpression('/\+*[0-9]{8,}$/', $mobile);
    }

    public function test_user_store_validation_throws_error_if_sex_validation_is_not_male_female_other()
    {
        $this->actingAs_admin();

        $user = $this->fake_user_post();
        $user['sex'] = 'klja';
        $response = $this
            ->from(route('admin.users.create'))
            ->post(route('admin.users.store'), $user);

        $response->assertRedirect(route('admin.users.create'));

        $user = $this->fake_user_post();
        $user['sex'] = 'male';
        $response = $this
            ->from(route('admin.users.create'))
            ->post(route('admin.users.store'), $user);

        $response->assertRedirect(route('admin.users.index'));

        $user = $this->fake_user_post();
        $user['sex'] = 'female';
        $response = $this
            ->from(route('admin.users.create'))
            ->post(route('admin.users.store'), $user);

        $response->assertRedirect(route('admin.users.index'));

        $user = $this->fake_user_post();
        $user['sex'] = 'other';
        $response = $this
            ->from(route('admin.users.create'))
            ->post(route('admin.users.store'), $user);

        $response->assertRedirect(route('admin.users.index'));
    }

    public function test_user_store_validation_throws_error_if_password_validation_is_not_required()
    {
        $this->actingAs_admin();

        $user = [
            'name' => 'abcd',
            'email' => 'abc@abc.com',
            'mobile'  => '12356788',
            'password' => '',
            'password_confirmation' => '',
            'sex' => 'male',
        ];

        $response = $this
            ->from(route('admin.users.create'))
            ->post(route('admin.users.store'), $user);

        $response->assertRedirect(route('admin.users.create'));
    }

    public function test_user_store_validation_throws_error_if_password_validation_is_not_confirm()
    {
        $this->actingAs_admin();
        
        $user = [
            'name' => 'abcd',
            'email' => 'abc@abc.com',
            'mobile'  => '12356788',
            'password' => '123456789',
            'password_confirmation' => '12345678',
            'sex' => 'male',
        ];
        $response = $this
            ->from(route('admin.users.create'))
            ->post(route('admin.users.store'), $user);

        $response->assertRedirect(route('admin.users.create'));
    }

    public function test_user_store_validation_throws_error_if_password_validation_is_min_8()
    {
        $this->actingAs_admin();

        $user = [
            'name' => 'abcd',
            'email' => 'abc@abc.com',
            'mobile'  => '12356788',
            'password' => '1234',
            'password_confirmation' => '1234',
            'sex' => 'male',
        ];
        $response = $this
            ->from(route('admin.users.create'))
            ->post(route('admin.users.store'), $user);

        $response->assertRedirect(route('admin.users.create'));
    }


    /**
     * for send a user to store or update method.
     *
     * @return array
     */
    public function fake_user_post()
    {
        $faker = \Faker\Factory::create();
        $password = Str::random(8);
        return [
            'name' => $faker->name, //regex covered "required"
            'email' => $faker->unique()->safeEmail,
            'mobile' => $faker->numberBetween(10000000,2119999999), //regex covered "min:8" regex covered "required"
            'sex' => $faker->randomElement(['male', 'female', 'other']),
            'password' => $password,
            'password_confirmation' => $password,
        ];
    }

    public function actingAs_admin()
    {
        // $faker = \Faker\Factory::create();
        // $admin = Admin::create([
        //     'name' => $faker->name, //regex covered "required"
        //     'email' => $faker->unique()->safeEmail,
        //     'mobile' => $faker->numberBetween(10000000,99999999999), //regex covered "min:8" regex covered "required"
        //     'sex' => $faker->randomElement(['male', 'female', 'other']),
        //     'password' => Hash::make(Str::random(8)),
        // ]);
        $admin = Admin::factory()->create();
        Role::create([
            'name' => 'admin',
            'guard_name' => 'admin'
        ]);
        $admin->assignRole('admin', 'admin');
        $this->actingAs($admin, 'admin');
    }

    public function from(string $url)
    {
        $this->app['session']->setPreviousUrl($url);
        return $this;
    }
}
