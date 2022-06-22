var base_url = $('#base_url').val();

$(document).ready(function () {
    $('#formCadastrarUsuario').formValidation({
        framework: 'bootstrap',
        excluded: ':disabled',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            full_name: {
                validators: {
                    notEmpty: {
                        message: 'O campo nome não pode ser vazio.'
                    }
                }
            },
            documento: {
                validators: {
                    notEmpty: {
                        message: 'O campo de documento não pode ser vazio.'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'O campo email não pode ser vazio.'
                    }
                }
            },
            celular: {
                validators: {
                    notEmpty: {
                        message: 'O campo celular não pode ser vazio.'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'O campo de senha não pode ser vazio.'
                    }
                }
            },
            confirm_password: {
                validators: {
                    notEmpty: {
                        message: 'O campo de senha não pode ser vazio.'
                    }
                }
            }
        }
    }).on('success.form.fv', function (e) {
        e.preventDefault();
        carregando();

        var $form = $(e.target),
            params = $form.serializeArray(),
            formData = new FormData();

        $.each(params, function (i, val) {
            formData.append(val.name, val.value);
        });

        $.ajax({
            url: base_url + 'login/salvar',
            type: 'POST',
            data: formData,
            dataType: 'json',
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                if (data.return) {
                    sucesso(data.msg);
                } else {
                    erro(data.msg);
                }
            },
            error: function () {
                erro('Erro ao executar, atualize e tente novamente.');
            }

        });
    });

    $('#formEntrar').formValidation({
        framework: 'bootstrap',
        excluded: ':disabled',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            email: {
                validators: {
                    notEmpty: {
                        message: 'O campo de email não pode ser vazio.'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'O campo de senha não pode ser vazio.'
                    }
                }
            }
        }
    }).on('success.form.fv', function (e) {
        e.preventDefault();
        btn_carregando();

        var $form = $(e.target),
            params = $form.serializeArray(),
            formData = new FormData();

        $.each(params, function (i, val) {
            formData.append(val.name, val.value);
        });

        $.ajax({
            url: base_url + 'login/entrar',
            type: 'POST',
            data: formData,
            dataType: 'json',
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                if (data.return) {
                    sucesso(data.msg);
                    window.location.replace(base_url + 'dashboard');
                } else {
                    btn_carregando();
                    erro(data.msg);
                }
            },
            error: function () {
                btn_carregando();
                erro('Erro ao executar, atualize e tente novamente.');
            }
        });
    });
})