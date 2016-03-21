
Description of Extension:
------------------------
This extension allows one to create a form with the following fields:
+ first name
+ last name
+ email
+ price set amounts
that on submit takes the user to a donation page populated with the information entered into the intro form.

## How to Implement:

1. Install extension
2. Set up your intro form on any page you like, your form should:

A) have input fields using the following names ex: `<input type="text" name="itdf-firstname" placeholder="First Name">`:


  | Input Field | Name          |
  |-------------|---------------|
  | First Name  | itdf-firstname|
  | Last Name   | itdf-lastname |
  | Email       | itdf-email    |
  | Amounts     | itdf-amount   |

B) If using wordpress have a form action formatted like this: `<form action="http://example.com/civicrm/" method="get">` and the following hidden fields:

```html
  <!--instead of 2 use the ID of the contribution page you are redirecting to-->
  <input type="hidden" name="id" value="2">
  <input type="hidden" name="reset" value="1">
  <input type="hidden" name="page" value="CiviCRM">
  <input type="hidden" name="q" value="civicrm/contribute/transact">

```

C) If using drupal have a form action formatted like this: `<form action="http://example.com/civicrm/contribute/transact?" method="get">` and the following hidden fields:

```html

  <input type="hidden" name="id" value="2"> <!--instead of 2 use the ID of the contribution page you are redirecting to--> 
  <input type="hidden" name="reset" value="1">

```

for more info on formatting the urls based on the CMS see: https://wiki.civicrm.org/confluence/display/CRMDOC/Tokens):
Drupal: http://www.myorganization.org/civicrm/contribute/transact?reset=1&id=N
Joomla!: http://www.myorganization.org/index.php?option=com_civicrm&task=civicrm/contribute/transact&reset=1&id=N
WordPress: http://www.myorganization.org/?page=CiviCRM&q=civicrm/contribute/transact&reset=1&id=N

## Example Form for WordPress site
```html
<!-- Example Form -->
<form action="http://example.org/civicrm/" method="get">
  <input type="hidden" name="id" value="2">
  <input type="hidden" name="reset" value="1">
  <input type="hidden" name="page" value="CiviCRM">
  <input type="hidden" name="q" value="civicrm/contribute/transact">
  <input type="text" name="itdf-firstname" placeholder="First Name">
  <input type="text" name="itdf-lastname" placeholder="Last Name">
  <input type="email" name="itdf-email" placeholder="Email">
  <fieldset>
    <label><input type="radio" name="itdf-amount" value="20">$20</label>
    <label><input type="radio" name="itdf-amount" value="60">$60</label>
    <label><input type="radio" name="itdf-amount" value="100">$100</label>
    <label><input type="radio" name="itdf-amount" value="750">$750</label>
  </fieldset>
  <input type="submit" value="Donate Now">
</form>
```
