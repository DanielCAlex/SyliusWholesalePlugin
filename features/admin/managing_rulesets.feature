@managing_rulesets
Feature: Managing wholesale rulesets
  In order to sell products with business rules pertaining to wholesale
  As an Administrator
  I want to be able to manage existing wholesale rulesets

  Background:
    Given the store operates on a single channel in the "United States" named "Fashion"
    And I am logged in as an administrator

  @ui @fail
  Scenario: Deleting ruleset
    Given there is a ruleset in the store
    When I go to the rulesets page
    And I delete this ruleset
    Then I should be notified that the ruleset has been deleted
    And I should see empty list of rulesets

  @ui @javascript
  Scenario: Updating ruleset
    Given there is a ruleset with "store_phone_number" code and "123456789" content
    When I go to the update "store_phone_number" ruleset page
    And I fill the content with "987654321"
    And I update it
    Then I should be notified that the ruleset has been successfully updated

  @ui
  Scenario: Disabling ruleset
    Given there is an existing ruleset with "bitbag_quote" code
    When I go to the update "bitbag_quote" ruleset page
    And I disable it
    And I update it
    Then I should be notified that the ruleset has been successfully updated
    And this ruleset should be disabled

  @ui
  Scenario: Seeing disabled code field while editing a ruleset
    Given there is a ruleset in the store
    When I want to edit this ruleset
    Then the code field should be disabled
