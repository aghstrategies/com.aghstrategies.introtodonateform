
Description of Extension:
------------------------
This is an extension for creating an intro to donate form where the user enters a little information specifically the following fields:

+ first name
+ last name
+ email
+ price set amounts

and on submit is taken to a civicrm donation page populated with the information entered into the intro to donate form.

## How to Implement:

Install the extension and set up your intro to donate form on any page you like. (There are example "Intro to Donate forms" for WordPress and Drupal below you can copy the form for your CMS and customize the form action url and contribution page id # and be ready to go) or follow the instructions below to build the form from scratch.

1) for the relevant input tags use the following name attributes ex: `<input type="text" name="itdf-firstname" placeholder="First Name">`:

  | Input Field | Name          |
  |-------------|---------------|
  | First Name  | itdf-firstname|
  | Last Name   | itdf-lastname |
  | Email       | itdf-email    |
  | Amounts     | itdf-amount   |

2) Set up the contribution page you will be linking to. Get the ID number of the contribution page. add to your form a hidden field that looks like this ``  <input type="hidden" name="id" value="{the id number of the contribution page you are using}">
`` in the example below I use ID #2.

3) Set up the following hidden fields and the form action according to what CMS you are using:

### WordPress:

If using wordpress have a form action formatted like this: `<form action="http://example.com/civicrm/" method="get">` and the following hidden fields:

```html
  <!--instead of 2 use the ID of the contribution page you are redirecting to-->
  <input type="hidden" name="id" value="2">
  <input type="hidden" name="reset" value="1">
  <input type="hidden" name="page" value="CiviCRM">
  <input type="hidden" name="q" value="civicrm/contribute/transact">

```

#### Example Form for WordPress site
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
### Drupal:

If using drupal have a form action formatted like this: `<form action="http://example.com/civicrm/contribute/transact" method="get">` and the following hidden fields:

```html

  <input type="hidden" name="id" value="2"> <!--instead of 2 use the ID of the contribution page you are redirecting to-->
  <input type="hidden" name="reset" value="1">

```
#### Example Form for Drupal site
```html
<form action="http://example.com/civicrm/contribute/transact" method="get">
  <input type="hidden" name="id" value="2">
  <input type="hidden" name="reset" value="1">
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
