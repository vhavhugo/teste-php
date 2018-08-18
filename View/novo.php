<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <title>Teste</title>
    <link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.5/cosmo/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo Router::base(); ?>/assets/css/font-awesome.css" rel="stylesheet"/>
    <link href="<?php echo Router::base(); ?>/assets/css/style.css" rel="stylesheet"/>
    <link href="<?php echo Router::base(); ?>/assets/summernote/summernote.css" rel="stylesheet"/>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php require_once 'common/menu.php'; ?>
<div class="container-fluid back ">
    <div class="container text-center">
        <h4 class="page-head-line titulo">Novo Produto</h4>
    </div>
</div>
<div class="content-wrapper">
    <div class="container">
        <!--        <form id="formulario_cliente" >-->
        <form method="post" action="<?php echo Router::base(); ?>/index/incluir/">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="produto_nome">Nome</label>
                    <input type="text" name="produto_nome" placeholder="Informe o nome do produto"
                           class="form-control altura" required/>
                </div>

                <div class="form-group col-md-3 col-xs-12">
                    <label for="produto_preco">Preço</label>
                    <input type="text" name="produto_preco" id="produto_preco" class="form-control altura money"
                           placeholder="Informe o valor" required/>
                </div>

                <div class="form-group col-md-3 col-xs-12">
                    <label for="produto_quantidade">Quantidade</label>
                    <input type="text" name="produto_quantidade" id="produto_quantidade" class="form-control altura"
                           placeholder="Informe o estoque" required/>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="form-group col-md-12 col-xs-12">
                    <label for="produto_desc">Descrição</label>
                    <textarea name="produto_desc" id="produto_desc"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 text-center">
                    <div class="hidden-xs">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-check-circle"></i> Cadastrar Dados
                        </button>
                    </div>
                    <div class="visible-xs">
                        <br/>
                        <button type="submit" class="btn btn-block btn-primary"><i class="fa fa-check-circle"></i>
                            Cadastrar Dados
                        </button>
                        <br/>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php require_once 'common/rodape.php'; ?>
<script>$("#menu-produto").addClass('menu-top-active');</script>
<script type="text/javascript" src="<?php echo Router::base(); ?>/assets/summernote/summernote.js"></script>
<script type="text/javascript" src="<?php echo Router::base(); ?>/assets/js/jquery.mask.js"></script>
<script>$('.money').mask("#.##0,00", {reverse: true});</script>
<script type="text/javascript">
    $(function () {
        $('#produto_desc').summernote({
            height: 200
        });
    });
</script>
</body>
</html>      