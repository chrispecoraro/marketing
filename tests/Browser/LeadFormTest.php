<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LeadFormTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function test_contact_form_loads()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Contact Us');
        });
    }

    public function test_contact_form_complete()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Contact Us')
                ->type('lead_full_name', 'Robert Jones')
                ->type('lead_email_address', 'email@example.com')
                ->type('lead_postal_code','90210')
                ->type('lead_telephone_number','412-555-1212')
                ->press('submit_lead')
                ->assertSee('Thank you for your interest in our product');
        });
    }

    public function test_contact_form_incomplete()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Contact Us')
                ->type('lead_full_name', 'Robert Jones')
                ->type('lead_email_address', 'not.an.email.address.com')
                ->type('lead_postal_code','9021')
                ->type('lead_telephone_number','412-555-1212')
                ->press('submit_lead')
                ->assertDontSee('Thank you for your interest in our product');
        });
    }

}
