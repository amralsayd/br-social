(function ($, Drupal) {

    'use strict';

    // let all = `<div class="form-item js-form-item form-type-radio js-form-type-radio form-item-field-event-date-value js-form-item-field-event-date-value radio form-group">
    //                 <input data-drupal-selector="edit-field-event-date-value-1-2" class="form-radio form-control" type="radio" id="edit-field-event-date-value-1--2" name="field_event_date_value" value="1" checked="checked">
    //                 <label for="edit-field-event-date-value-1--2" class="control-label option">All</label>
    //             </div>`;

    // $("#edit-field-event-date-value--2--wrapper .fieldset-wrapper").prepend(all);

    $("#edit-username-login > div > div.form-item.js-form-item.form-type-textfield.js-form-type-textfield.form-item-name-or-mail.js-form-item-name-or-mail.form-group.error.has-error > div.form-item--error-message.alert.alert-danger.alert-sm.alert-dismissible.form-control-radius > p:nth-child(3) > a").attr("href", "/user/password");

    // add poll button in post (photo type)
    // $("#edit-field-post-image").after(`
    //     <button type="button" id="post-poll-add" class="btn btn-default waves-effect waves-btn">
    //         <svg class="btn-icon">
    //         <use id="btnicon" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-plus"></use>
    //         </svg>
    //         <span>Add Poll</span>
    //     </button>`);


    // $("#post-poll-add").click((event) => {
    //     $("#edit-field-poll-0").slideToggle();
    // });
    // $("#edit-field-poll-0").css("display", "none");


})(jQuery, Drupal);
