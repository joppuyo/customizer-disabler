<?php

// SPDX-License-Identifier: GPL-2.0-or-later
// SPDX-FileCopyrightText: 2021 Johannes Siipola

class AcceptanceCest
{
    public function iDoSetup(AcceptanceTester $I)
    {
        $I->cli(['core', 'update-db']);
        $I->cli(['config', 'set', 'AUTOMATIC_UPDATER_DISABLED', 'true', '--raw']);
        $I->cli(['theme', 'install', 'twentynineteen']);
        $I->cli(['theme', 'activate', 'twentynineteen']);
    }
    
    public function iClickAppearanceInMenu(AcceptanceTester $I)
    {
        $I->loginAsAdmin();
        $I->amOnAdminPage('index.php');
        $I->click('a.menu-icon-appearance');
        $I->see('Customize');
        $I->click('.hide-if-no-customize');
        $I->waitForText('You are customizing');
        $I->see('You are customizing');
        $I->saveSessionSnapshot('login');
    }

    public function iClickAppearanceInTopBar(AcceptanceTester $I)
    {
        $I->loadSessionSnapshot('login');
        $I->amOnPage('/');
        $I->see('Customize');
        $I->click('Customize');
        $I->waitForText('You are customizing');
        $I->see('You are customizing');
    }

    public function iClickCustomizerOnMenusPage(AcceptanceTester $I)
    {
        $I->loadSessionSnapshot('login');
        $I->amOnAdminPage('nav-menus.php');
        $I->see('Manage with Live Preview');
        $I->click('Manage with Live Preview');
        $I->waitForText('You are customizing');
        $I->see('You are customizing');
    }

    public function iActivatePlugin(AcceptanceTester $I)
    {
        $I->loadSessionSnapshot('login');
        $I->amOnPluginsPage();
        $I->activatePlugin('customizer-disabler');
    }

    public function iCantSeeCustomizeInAppearanceMenu(AcceptanceTester $I)
    {
        $I->loadSessionSnapshot('login');
        $I->amOnAdminPage('edit.php');
        $I->click('a.menu-icon-appearance');
        $I->dontSee('Customize');
    }

    public function iCantSeeCustomizeInTopBar(AcceptanceTester $I)
    {
        $I->loadSessionSnapshot('login');
        $I->amOnPage('/');
        $I->dontSee('Customize');
    }

    public function iDontSeeCustomizerOnMenusPage(AcceptanceTester $I)
    {
        $I->loadSessionSnapshot('login');
        $I->amOnAdminPage('nav-menus.php');
        $I->dontSee('Manage with Live Preview');
    }

    public function iCantAccessCustomizerDirectly(AcceptanceTester $I)
    {
        $I->loadSessionSnapshot('login');
        $I->amOnAdminPage('customize.php');
        $I->see('The Customizer is currently disabled.');
        $I->dontSee('You are customizing');
    }

}
