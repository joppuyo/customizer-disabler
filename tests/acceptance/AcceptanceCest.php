<?php

// SPDX-License-Identifier: GPL-2.0-or-later
// SPDX-FileCopyrightText: 2021 Johannes Siipola

class AcceptanceCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->cli(['core', 'update-db']);
        $I->loginAsAdmin();
    }

    public function iClickAppearanceInMenu(AcceptanceTester $I)
    {
        $I->amOnAdminPage('index.php');
        $I->moveMouseOver('.menu-icon-appearance');
        $I->see('Customize');
        $I->click('.hide-if-no-customize');
        $I->waitForText('You are customizing');
        $I->see('You are customizing');
    }

    public function iClickAppearanceInTopBar(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('Customize');
        $I->click('Customize');
        $I->waitForText('You are customizing');
        $I->see('You are customizing');
    }

    public function iClickCustomizerOnMenusPage(AcceptanceTester $I)
    {
        $I->amOnAdminPage('nav-menus.php');
        $I->see('Manage with Live Preview');
        $I->click('Manage with Live Preview');
        $I->waitForText('You are customizing');
        $I->see('You are customizing');
    }

    public function iActivatePlugin(AcceptanceTester $I)
    {
        $I->amOnPluginsPage();
        $I->activatePlugin('disable-customizer');
    }

    public function iCantSeeCustomizeInAppearanceMenu(AcceptanceTester $I)
    {
        $I->amOnAdminPage('edit.php');
        $I->moveMouseOver('.menu-icon-appearance');
        $I->dontSee('Customize');
    }

    public function iCantSeeCustomizeInTopBar(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->dontSee('Customize');
    }

    public function iDontSeeCustomizerOnMenusPage(AcceptanceTester $I)
    {
        $I->amOnAdminPage('nav-menus.php');
        $I->dontSee('Manage with Live Preview');
    }

    public function iCantAccessCustomizerDirectly(AcceptanceTester $I)
    {
        $I->amOnAdminPage('customize.php');
        $I->see('The Customizer is currently disabled.');
        $I->dontSee('You are customizing');
    }

}
