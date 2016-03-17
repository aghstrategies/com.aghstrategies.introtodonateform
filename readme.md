
Notes:
<!-- url of form - action -->

Form HTML on: http://newsite.crossroadscommunityfoodnetwork.org/get-involved/

```html
<form action="http://newsite.crossroadscommunityfoodnetwork.org/civicrm/" method="get">
  <input type="hidden" name="id" value="2">
  <input type="hidden" name="reset" value="1">
  <input type="hidden" name="page" value="CiviCRM">
  <input type="hidden" name="q" value="civicrm/contribute/transact">
  <input type="text" name="firstname" placeholder="First Name">
  <input type="text" name="lastname" placeholder="Last Name">
  <input type="email" name="email" placeholder="Email">
  <fieldset>
    <label><input type="radio" name="amount" value="60">60</label>
    <label><input type="radio" name="amount" value="100">100</label>
    <label><input type="radio" name="amount" value="140">140</label>
  </fieldset>
  <input type="submit" value="Donate Now">
</form>
```

Things to do:

+ Need to put form on dev site
+ need to create extension with buildform hook that sets the defaults

http://newsite.crossroadscommunityfoodnetwork.org/civicrm/?page=CiviCRM&q=civicrm/contribute/transact&reset=1&id=2
