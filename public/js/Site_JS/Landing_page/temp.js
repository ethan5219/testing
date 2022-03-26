 document.addEventListener('DOMContentLoaded', function (e) {
                const form = document.getElementById('demoForm');
                FormValidation.formValidation(form, {
                    fields: {
                        framework: {
                            validators: {
                                notEmpty: {
                                    message: 'Please select a framework',
                                },
                            },
                        },
                        otherFramework: {
                            validators: {
                                notEmpty: {
                                    message: 'Please specific the framework',
                                },
                            },
                        },
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger(),
                        bootstrap: new FormValidation.plugins.Bootstrap(),
                        submitButton: new FormValidation.plugins.SubmitButton(),
                        excluded: new FormValidation.plugins.Excluded({
                            excluded: function (field, ele, eles) {
                                const selectedCheckbox = form.querySelector('[name="framework"]:checked');
                                const framework = selectedCheckbox ? selectedCheckbox.value : '';
								console.log(field === 'otherFramework' && framework !== 'other') ||(field === 'framework' && framework === 'other'); 
                                return (
                                    (field === 'otherFramework' && framework !== 'other') ||
                                    (field === 'framework' && framework === 'other')
                                );
                            },
                        }),
                        icon: new FormValidation.plugins.Icon({
                            valid: 'fa fa-check',
                            invalid: 'fa fa-times',
                            validating: 'fa fa-refresh',
                        }),
                    },
                });

                Array.from(form.querySelectorAll('[name="framework"]')).forEach(function (ele) {
                    // Revalidate the otherFramework field when user picks any available framework
                    ele.addEventListener('change', function (e) {
                        fv.revalidateField('otherFramework');
                    });
                });
            });