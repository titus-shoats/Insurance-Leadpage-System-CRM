$(document).ready(function() {

    $('.unsubscribe').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            unsubscribe: {
                validators: {
                    notEmpty: {
                        message: 'Try Again'
                    },
                    regexp:{
                        message:'Please enter a Valid Email Address',
                        regexp:/^\S+@\S+\.\S+$/
                    }
                }
            }
        }
    });




    $('#intro_zip_form').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            enter_zip_code: {
                validators: {
                    notEmpty: {
                        message: 'Try Again'
                    },
                    zipCode: {
                        country: 'US',
                        message: 'Invalid %s Postal'
                    }
                }
            }
        }
    });


    $('.step_1_form').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            first_name: {
                validators: {
                    notEmpty: {
                        message: 'First Name is required'
                    },
                    regexp:{
                        message:'Please enter a valid First Name',
                        regexp:/^[a-zA-Z]/
                    }
                }
            },
            last_name:{
                validators: {
                    notEmpty:{
                        message:'Last Name is required'
                    },
                    regexp:{
                        message:'Please enter a Valid Last Name',
                        regexp:/^[a-zA-Z]/
                    }
                }
            },
            email:{
                validators: {
                    notEmpty:{
                        message:'Email is required'
                    },
                    regexp:{
                        message:'Please enter a Valid Email Address',
                        regexp:/^\S+@\S+\.\S+$/
                    }
                }
            },
            home_phone:{
                validators: {
                    notEmpty:{
                        message:'Contact Phone is required'
                    },
                    phone: {
                        country: 'US',
                        message: 'The value is not valid %s phone number'
                    }
                }
            },
            address:{
                validators: {
                    notEmpty:{
                        message:'Home Address is required'
                    }
                }
            },
            city:{
                validators: {
                    notEmpty:{
                        message:'City is required'
                    },
                    regexp:{

                        regexp:/[a-zA-Z]/,
                        message:'Please enter a Valid City'
                    }
                }
            },
            state:{
                validators: {
                    notEmpty:{
                        message:'State is required'
                    }
                }
            },
            zip_code:{
                validators: {
                    notEmpty:{
                        message:'Zipcode is required',
                        regexp:{
                            message:'Please enter a valid Zipcode',
                            regexp:/^[0-9]/
                        }
                   }
                 }

             },
            dob:{
                validators: {
                    notEmpty:{
                        message:'Birth Date is required'
                    }
                }
            }




        }


    });

    // zip form
    $('#intro_zip_form').on('status.field.bv',function(e,data){
        var formisValid = true;
        $('.form-group',$(this)).each(function(){
            formisValid = formisValid && $(this).hasClass('has-success');
        });

        if(formisValid){
            alert("True");
            $('.continue_btn',$(this)).attr('disable',false);
        }else{
            alert("false");
            $('.continue_btn',$(this)).attr('disable',true);
        }
    });

    //step_1_form

    $('#step_1_form').on('status.field.bv',function(e,data){
        var step1_form_isValid = true;
        $('.form-group',$(this)).each(function(){
            step1_form_isValid = step1_form_isValid && $(this).hasClass('has-success');

            alert("Exist");
        });

        if(step1_form_isValid){
            alert("True");
            $('.custom_submit',$(this)).attr('disable',false);
        }else{
            alert("False");
            $('.custom_submit',$(this)).attr('disable',true);
        }
    });



    // unsubscribe
    $('#unsubscribe').on('status.field.bv',function(e,data){
        var formisValid = true;
        $('.form-group',$(this)).each(function(){
            formisValid = formisValid && $(this).hasClass('has-success');
        });

        if(formisValid){
            alert("True");
            $('unsubscribe_btn',$(this)).attr('disable',false);
        }else{
            alert("false");
            $('unsubscribe_btn',$(this)).attr('disable',true);
        }
    });


});