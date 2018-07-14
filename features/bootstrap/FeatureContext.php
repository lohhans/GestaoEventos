<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;
use Behat\Behat\Context\SnippetAcceptingContext;

/**
 * Defines application features from the specific context.
 */

 //Arquivo de steps.
class FeatureContext extends MinkContext implements Context
{

    public function __construct(){

    }

    /**
     * @Given the user :arg1 with cpf :arg2 is not registered in the system
     */
    public function theUserWithCpfIsNotRegisteredInTheSystem($arg1, $arg2){

    }
     /**
     * @When I register the user :arg1 with cpf :arg2
     */
    public function iRegisterTheUserWithCpf($arg1, $arg2){

    }
    /**
     * @Then the system has the user :arg1 with cpf :arg2 registered
     */
    public function theSystemHasTheUserWithCpfRegistered($arg1, $arg2){

    }




}
