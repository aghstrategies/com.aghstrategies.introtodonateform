Feature: In order to encourage donors into the donation process while they are visiting the get involved page a form will be created to capture information about the donor and donation and then transmitted to the donation page where the transaction can be completed

Scenario: Someone is visiting the Get Involved page
  Given They decide to donate while on the page
  And They enter their first name, last name, email address, and choose an amount in the donate section
  When They hit submit
  Then They are taken to the donate page to complete their transaction
  And Their first and last names have been populated on the donation form
  And Their email address has been populated on the donation form
  And Their donation choice has been populated on the donation form
  And They complete the remainder of the donation page
  When They hit Contribute
  Then They will be taken to PayPal to make their payment
  And They enter their billing information in PayPal
  When They hit Submit
  Then They are taken back to CCFN
  And Their transaction completes

Scenario: Someone has entered information into the donation form of the get involved page
  Given They enter their first name, last name, email and choose a donation amount and hit submit and are taken to the donation page
  When The donor decides to edit the information entered on the get involved page (the first name, last name, amount or email)
  Then The new information replaces the previously entered information
