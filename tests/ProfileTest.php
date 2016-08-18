<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * Class ProfileTest
 */
class ProfileTest extends TestCase
{
    // DatabaseTransactions = Used for the database queries
    // DatabaseMigrations   = Used for the database Migrations.
    use DatabaseMigrations, DatabaseTransactions;

    /**
     * POST:  /profile/update/password.
     * ROUTE: profile.password
     *
     * @group all
     * @group profile
     */
    public function testPasswordUpdate()
    {
        $this->withoutMiddleware();

        $user     = factory(App\User::class)->create();
        $route    = route('profile.password');
        $password = bcrypt('sudoSaysNo');

        $input['password']              = $password;
        $input['password_confirmation'] = $password;

        // Database
        $dbCheck = ['id' => $user->id, 'password' => $user->password];

        // Authencation
        $this->actingAs($user);
        $this->seeIsAuthenticatedAs($user);

        // With errors
        $this->seeInDatabase('users', $dbCheck);
        $this->post($route, []);
        $this->seeStatusCode(302);
        $this->seeInDatabase('users', $dbCheck);
        $this->assertHasOldInput();

        // Without errors.
        $this->post($route, $input);
        $this->dontSeeInDatabase('users', $dbCheck);
        $this->seeStatusCode(302);
        $this->see('Credentials has been updated');
    }

    /**
     * POST: profile/update/contact
     *
     * @group all
     * @group profile
     */
    public function testContactUpdate()
    {
        $this->withoutMiddleware();

        $user  = factory(App\User::class)->create();
        $route = route('profile.contact');

        // Database
        $dbCheck['id']           = $user->id;
        $dbCheck['email']        = $user->email;
        $dbCheck['phone']        = $user->phone;
        $dbCheck['mobile']       = $user->mobile;
        $dbCheck['skype']        = $user->skype;
        $dbCheck['intern_phone'] = $user->intern_phone;

        // Input
        $input['email']        = 'JhonDoe@exaple.be';
        $input['phone']        = '0000/00.00.00';
        $input['mobile']       = '1111/11.11.11';
        $input['skype']        = 'Tjoosten';
        $input['intern_phone'] = '2222/22.22.22';

        // Authencation
        $this->actingAs($user);
        $this->seeIsAuthenticatedAs($user);

        // With Errors
        $this->seeInDatabase('users', $dbCheck);
        $this->post($route, []);
        $this->seeStatusCode(302);
        $this->seeInDatabase('users', $dbCheck);
        $this->assertHasOldInput();

        // Without errors
        $this->post($route, $input);
        // $this->dontSeeInDatabase('users', $dbCheck);
        // $this->seeInDatabase('users', array_merge($input, ['id' => $user->id]));
        $this->seeStatusCode(302);
        $this->see('Contact information has been updated');
    }
}
