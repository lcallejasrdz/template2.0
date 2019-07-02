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
	            },
	            plugins: {
	                trigger: new FormValidation.plugins.Trigger(),
	                bootstrap: new FormValidation.plugins.Bootstrap(),
	                submitButton: new FormValidation.plugins.SubmitButton(),
	                defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
	                icon: new FormValidation.plugins.Icon({
	                    valid: 'fa fa-check',
	                    invalid: 'fa fa-times',
	                    validating: 'fa fa-refresh',
	                }),
	            },
	        }
	    );
	});
</script>
