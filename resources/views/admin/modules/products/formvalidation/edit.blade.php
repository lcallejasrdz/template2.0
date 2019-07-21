<script>
    document.addEventListener('DOMContentLoaded', function(e) {
        FormValidation.formValidation(
            document.getElementById('formValidation'),
            {
                // Set the default locale
                locale: 'es_ES',
                localization: FormValidation.locales.es_ES,
                fields: {
                    name: {
                        validators: {
                            notEmpty: {},
                            stringLength: {
                                min: 3,
                                max: 255,
                            },
                        }
                    },
                    description: {
                        validators: {
                            notEmpty: {},
                        }
                    },
                    price: {
                        validators: {
                            notEmpty: {},
                            numeric: {
                                // The default separators
                                thousandsSeparator: '',
                                decimalSeparator: '.'
                            }
                        }
                    },
                    inventory: {
                        validators: {
                            notEmpty: {},
                            integer: {
                                // The default separators
                                thousandsSeparator: '',
                                decimalSeparator: '.'
                            }
                        }
                    },
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap(),
                    submitButton: new FormValidation.plugins.SubmitButton(),
                    defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
                },
            }
        );
    });
</script>
