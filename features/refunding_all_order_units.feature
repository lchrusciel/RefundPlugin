@refunds
Feature: Refunding all order units
    In order to give back money for all of the bought products to Customer
    As an Administrator
    I want to be able to refund all order units

    Background:
        Given the store operates on a single channel in "United States"
        And the store has a product "Mr. Meeseeks T-Shirt" priced at "$10"
        And the store allows shipping with "Galaxy Post"
        And the store allows paying with "Space money"
        And there is a customer "rick.sanchez@wubba-lubba-dub-dub.com" that placed an order "#00000022"
        And the customer bought 3 "Mr. Meeseeks T-Shirt" products
        And the customer chose "Galaxy Post" shipping method to "United States" with "Space money" payment
        And I am logged in as an administrator

    @ui @javascript
    Scenario: Refunding all order units
        When I want to refund some units of order "#00000022"
        And I decide to refund all units of this order
        Then I should be notified that selected order units have been successfully refunded
        And this order refunded total should be "$30.00"
        And I should not be able to refund 1st unit with product "Mr. Meeseeks T-Shirt"
        But I should not be able to refund 2nd unit with product "Mr. Meeseeks T-Shirt"
        But I should not be able to refund 3rd unit with product "Mr. Meeseeks T-Shirt"