<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Factory;


class TestingTest extends DuskTestCase
{
    private $email = 'user@gmail.com';
    private $password = 'rayhan81';

    private $email1 = 'rayhan.abdillah51@gmail.com';
    private $password1 = 'rayhan81';

    private $admin = 'admin@gmail.com';
    private $adminpass = 'admin';
    /**
     * A Dusk test example.
     *@group dashboard
     * @return void
     */
    public function testdashboard()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('DnJ.id');
        });
    }
    /**
     * A Dusk test example.
     *@group riwayat-donasi
     * @return void
     */
    public function testLihatRiwayatDonasi()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Login')
                    ->type('email',$this->email)
                    ->type('password',$this->password)
                    ->press('Login')
                    ->assertSee('DnJ.id',500)
                    ->clicklink('Donasi')
                    ->click('a[href="/riwayat"')
                    ->assertSee('Donasi yang belum dibayar')
                    ->pause(1000);
        });
    }
    /**
     * A Dusk test example.
     *@group testimoni
     * @return void
     */

    public function testTestimoni()
    {   
        $user = User::where('email',$this->email)->first();
        $this->browse(function (Browser $browser) use ($user) {
            $browser->visit('/')
            ->clickLink('Login')
            ->typeSlowly('email',$this->email)
            ->typeSlowly('password',$this->password)
            ->press('Login')
            ->assertSee('DnJ.id',500)
            ->clicklink($user->name)
            ->clickLink('Testimoni')
            ->assertSee('Testimoni',500)
            ->typeSlowly('testi','Website yang sangat berguna')
            ->press('Kirim');
        });
    }

    /**
     * A Dusk test example.
     *@group riwayat-donasi-admin
     * @return void
     */

    public function testLihatRiwayatDonasiAdmin()
    {   
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->clickLink('Login')
            ->typeSlowly('email',$this->admin)
            ->typeSlowly('password',$this->adminpass)
            ->press('Login')
            ->assertSee('Dashboard Admin')
            ->clickLink('Riwayat Donasi')
            ->pause(1000);
        });
    }
    /**
     * A Dusk test example.
     *@group menerima-donasi
     * @return void
     */

    public function testMenerimaDonasi()
    {   
        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(4))
            ->visit('/')
            ->assertSee('DnJ.id')
            ->clickLink('Donasi')
            ->assertSee('Donasi')
            ->click('a[href="/donasi/berhasil"]')
            ->click('a[href="/donasi/berhasil/detail/1"]')
            ->press('Tutup Donasi')
            ->click('a[href="/donasi/berhasil/detail/1"]')
            ->clickLink('Donasikan')
            ->press('Submit')
            ->clickLink('Oke')
            ->pause(1000);
        });
    }
    /**
     * A Dusk test example.
     *@group keluhan-user
     * @return void
     */

    public function testkeluhanuser()
    {   
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->clickLink('Login')
            ->type('email',$this->email)
            ->type('password',$this->password)
            ->press('Login')
            ->assertSee('DnJ.id',500)
            ->clicklink('Keluhan')
            ->typeSlowly('pesan','selamat pagi')
            ->press('Kirim');
        });
    }
    /**
     * A Dusk test example.
     *@group respon-keluhan
     * @return void
     */

    public function testresponkeluhan()
    {   
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->clickLink('Login')
            ->type('email',$this->admin)
            ->type('password',$this->adminpass)
            ->press('Login')
            ->assertSee('Dashboard Admin')
            ->pause(500)
            ->clicklink('Keluhan')
            ->click('a[href="/admin/keluhan/1"]')
            ->typeSlowly('pesan','Ada yang bisa di bantu?')
            ->press('Kirim');
        });
    }
}
