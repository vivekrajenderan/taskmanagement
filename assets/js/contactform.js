/*
 * Created by css on 7/3/14.
 */


(function () {

    "use strict";

    var Contact = {

        initialized: false,

        initialize: function () {

            if (this.initialized) return;
            this.initialized = true;

            this.build();
            this.events();

        },

        build: function () {

            // Containers
            var map = $("#googlemaps"),
                contactForm = $("#contactForm");

            // Validations Form Type
            if (contactForm.get(0)) {

                if (contactForm.data("type") == "advanced") {
                    this.advancedValidations();
                } else {
                    this.basicValidations();
                }

            }

        },

        events: function () {


        },

        basicValidations: function () {

            var contactform = $("#contactForm"),
                url = contactform.attr("action");

            contactform.validate({
                submitHandler: function (form) {

                    // Loading State
                    var submitButton = $(this.submitButton);
                    submitButton.button("loading");

                    // Ajax Submit
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {
                            "name": $("#name").val(),
                            "email": $("#email").val(),
                            "phone": $("#phone").val(),
                            "subject": $("#contactForm #subject").val(),
                            "message": $("#message").val()
                        },
                        dataType: "json",
                        success: function (data) {
                            if (data.response == "success") {

                                $("#contactSuccess").removeClass("hidden");
                                $("#contactError").addClass("hidden");

                                // Reset Form
                                $("#contactForm .form-control")
                                    .val("")
                                    .blur()
                                    .parent()
                                    .removeClass("has-success")
                                    .removeClass("has-error")
                                    .find("label.error")
                                    .remove();

                                if (($("#contactSuccess").position().top - 80) < $(window).scrollTop()) {
                                    $("html, body").animate({
                                        scrollTop: $("#contactSuccess").offset().top - 80
                                    }, 300);
                                }

                            } else {

                                $("#contactError").removeClass("hidden");
                                $("#contactSuccess").addClass("hidden");

                                if (($("#contactError").position().top - 80) < $(window).scrollTop()) {
                                    $("html, body").animate({
                                        scrollTop: $("#contactError").offset().top - 80
                                    }, 300);
                                }

                            }
                        },
                        complete: function () {
                            submitButton.button("reset");
                        }
                    });
                },
                rules: {
                    name: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    phone: {
                        required: true,
                        digits:true,
                        minlength: 10,
                        maxlength:10                        
                    },
                    subject: {
                        required: true
                    },
                    message: {
                        required: true
                    }
                },
                messages:
                    {
                        name:
                        {
                            required: 'Please enter name'
                           
                        },
                        email:
                        {
                            required: 'Please enter email'
                           
                        },
                        phone:
                        {
                            required: 'Please enter phone number'
                           
                        },
                        subject:
                        {
                            required: 'Please enter subject'
                           
                        },
                        message:
                        {
                            required: 'Please enter message'
                           
                        }

                    },
                highlight: function (element) {
                    $(element)
                        .parent()
                        .removeClass("has-success")
                        .addClass("has-error");
                },
                success: function (element) {
                    $(element)
                        .parent()
                        .removeClass("has-error")
                        .addClass("has-success")
                        .find("label.error")
                        .remove();
                }
            });

        }

    };

    Contact.initialize();

})();