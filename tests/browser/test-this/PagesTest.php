<?php

/**
 * PagesTest
 */
class PagesTest extends BrowserTestCase
{
    use \October\Test\Tests\Browser\Concerns\InteractsWithAuth;

    /**
     * testBrowserLogin
     */
    public function testBrowserLogin()
    {
        $this->browse(function($browser) {
            $this->loginToBrowser($browser);
        });
    }

    /**
     * testPagesIndex
     */
    public function testPagesIndex()
    {
        $this->browse(function($browser) {
            $browser
                ->visit('/admin/october/test/pages')
                ->assertTitleContains('Manage Pages |');

            $browser
                ->click('.list-cell-index-1')
                ->waitForLocation('/admin/october/test/pages/update/1')
                ->waitForEvent('page:load', 'document')
                ->assertTitleContains('Edit Page |');

            // Prepopulate repeater
            $browser
                ->click('a[href="#primarytab-people"]')
                ->pause(300)
                ->waitFor('#Form-field-Page-_prepopulate_people')
                ->check('#Form-field-Page-_prepopulate_people')
                ->waitFor('#Form-formPeopleForm0-field-Page-people-0-description')
                ->assertValue('#Form-formPeopleForm0-field-Page-people-0-description', 'First Person')
                ->assertValue('#Form-formPeopleForm1-field-Page-people-1-description', 'Second Person')
            ;

            // Unpopulate repeater
            $browser
                ->uncheck('#Form-field-Page-_prepopulate_people')
                ->waitUntilMissing('#Form-formPeopleForm0-field-Page-people-0-description')
                ->waitUntilMissing('#Form-formPeopleForm1-field-Page-people-1-description')
            ;

            $browser
                ->pause(300)
                ->click('.form-buttons [data-request=onSave]')
                ->waitForTextIn('.oc-flash-message.success', 'Page Updated')
                ->click('a.flash-close');
        });
    }
}
