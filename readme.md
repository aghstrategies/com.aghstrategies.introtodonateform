
Notes:
<!-- url of form - action -->

Form HTML on: http://newsite.crossroadscommunityfoodnetwork.org/get-involved/

```html
<form action="" method="get">
  <input type="text" name="firstname" placeholder="First Name">
  <input type="text" name="lastname" placeholder="Last Name">
  <input type="email" name="email" placeholder="Email">
  <fieldset>
    <label><input type="radio" name="amount" value="60">60</label>
    <label><input type="radio" name="amount" value="100">100</label>
    <label><input type="radio" name="amount" value="100">140</label>
  </fieldset>
  <input type="submit" value="Donate Now">
</form>
```

Things to do:

+ Need to add hidden fields that corresopond to url <input type="hidden" name="id" value="6">
+ Need to put form on dev site
+ Action: need URL of donation page
+ need to create extension with buildform hook that sets the defaults
