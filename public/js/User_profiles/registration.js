const form = document.getElementById('registrationForm');
document.addEventListener('DOMContentLoaded', function(e) {
    FormValidation.formValidation(
        document.getElementById('registrationForm'), {
            fields: {
                username: {
                    message: 'The username is not valid',
                    validators: {
	                        notEmpty: {
                            message: 'The username is required',
                        },
                        // The validator will create an Ajax request
                        // sending { username: 'its value' } to the back-end
                        remote: {
                            data: {
                                type: 'username',
                            },
                            message: 'The username is already registered',
                            method: 'POST',
                            url: '/registration/ajax',
                        },
                    },
                },
                email: {
                    message: 'The email is not valid',
                    validators: {
	                        notEmpty: {
                            message: 'The email is required',
                        },
                        emailAddress: {
                            message: 'The value is not a valid email address',
                        },

                        // The validator will create an Ajax request
                        // sending { email;: 'its value' } to the back-end
                        remote: {
                            data: {
                                type: 'email',
                            },
                            message: 'The email is already registered',
                            method: 'POST',
                            url: '/registration/ajax',
                        },
                    },
                },
                password_1: {
                    validators: {
                        notEmpty: {
                            message: 'The password is required',
                        },
                    },
                },

                password_2: {
                    validators: {
                        identical: {
                            compare: function() {
                                return form.querySelector('[name="password_1"]').value;
                            },
                            message: 'The password and its confirm are not the same',
                        },
                    },
                },
            },

            plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                submitButton: new FormValidation.plugins.SubmitButton(),
				defaultSubmit: new FormValidation.plugins.DefaultSubmit(),

                message: new FormValidation.plugins.Message({
                    clazz: 'error_box',
                    container: function(field, ele) {
                        return FormValidation.utils.closest(ele, '.form-group')
                    }
                }),
                passwordStrength: new FormValidation.plugins.PasswordStrength({
                    field: 'password_1',
                    message: 'The password is weak',
                    minimalScore: 3,
                    onValidated: function(valid, message, score) {

                    }
                }),


            },
        }
    );
});