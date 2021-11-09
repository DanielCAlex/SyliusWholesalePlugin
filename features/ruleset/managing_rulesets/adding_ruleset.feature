@managing_rulesets
Feature: Adding a new ruleset
  In order to sell products with business rules pertaining to wholesale
  As an Administrator
  I want to add a new wholesale ruleset

  Background:
    Given I am logged in as an administrator

  @ui
  Scenario: Adding a new ruleset
    Given I want to create a new ruleset
    When I want to create a new administrator
    And I specify its name as "Wholesale Ruleset One"
    And I specify its description as "This is the first Wholesale Ruleset created"
    And I enable it
    And I add it
    Then I should be notified that it has been successfully created
    And the ruleset "Wholesale Ruleset One" should appear in the registry
