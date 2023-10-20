/* js/employee.js */

(function ($, Drupal) {
  Drupal.behaviors.employeeModule = {
    attach: function (context, settings) {
      // Select form fields by their input types or other selectors.
      // Adjust the selectors to match your specific form fields.
      var $formFields = $('input[type="text"], input[type="email"], textarea');

      // Example: Change text color when a form field is focused.
      $formFields.once('employee-field-focus').focus(function () {
        $(this).css('color', 'red');
      });

      // Example: Reset the text color to its default when a form field loses focus.
      $formFields.once('employee-field-blur').blur(function () {
        $(this).css('color', ''); // Reset to default (empty value)
      });
    }
  };
})(jQuery, Drupal);

