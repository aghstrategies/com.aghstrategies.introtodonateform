
Notes:
-----
Form HTML on: http://newsite.crossroadscommunityfoodnetwork.org/get-involved/

```html
<!-- styled -->
  <div class="et_pb_contact">
    <form class="et_pb_contact_form clearfix" method="get" action="http://newsite.crossroadscommunityfoodnetwork.org/civicrm/">
      <input type="hidden" name="id" value="2">
      <input type="hidden" name="reset" value="1">
      <input type="hidden" name="page" value="CiviCRM">
      <input type="hidden" name="q" value="civicrm/contribute/transact">
      <p class="et_pb_contact_field et_pb_contact_field_0">
        <input class="input" placeholder="First Name" name="itdf-firstname" type="text">
      </p>
      <p class="et_pb_contact_field et_pb_contact_field_0">
        <input class="input" placeholder="Last Name" name="itdf-lastname" type="text">
      </p>
      <p class="et_pb_contact_field et_pb_contact_field_1  et_pb_contact_field_last">
        <input class="input" placeholder="Email Address" name="itdf-email" type="email">
      </p>
      <div class="et_contact_bottom_container">
      </div>
      <input type="submit" class="et_pb_contact_submit et_pb_button" value="Donate Now">
    </form>
  </div>

<!-- functioning -->
<form action="http://newsite.crossroadscommunityfoodnetwork.org/civicrm/" method="get">
  <input type="hidden" name="id" value="2">
  <input type="hidden" name="reset" value="1">
  <input type="hidden" name="page" value="CiviCRM">
  <input type="hidden" name="q" value="civicrm/contribute/transact">
  <input class="input" type="text" name="itdf-firstname" placeholder="First Name">
  <input class="input" type="text" name="itdf-lastname" placeholder="Last Name">
  <input class="input" type="email" name="itdf-email" placeholder="Email">
  <fieldset>
    <label><input type="radio" name="itdf-amount" value="20">$20</label>
    <label><input type="radio" name="itdf-amount" value="60">$60</label>
    <label><input type="radio" name="itdf-amount" value="100">$100</label>
    <label><input type="radio" name="itdf-amount" value="750">$750</label>
  </fieldset>
  <input class="et_pb_contact_submit et_pb_button" type="submit" value="Donate Now">
</form>

```



http://newsite.crossroadscommunityfoodnetwork.org/civicrm/?page=CiviCRM&q=civicrm/contribute/transact&reset=1&id=2
