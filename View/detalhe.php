<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content="Hugo do Valle"/>
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
        <h4 class="page-head-line titulo">Detalhes do Produto</h4>
    </div>
</div>
<div class="content-wrapper">
    <div class="container">
        <p class="text-right">
            <a href="<?php echo Router::base(); ?>/" class="btn btn-primary">
                <i class="fa fa-home"></i>
                Página Home
            </a>
        </p>
        <div class="row">
            <div class="form-group col-md-12">
                <label for="produto_nome">Nome:</label> <?php echo $dados['produto']->produto_nome; ?>
            </div>

            <div class="form-group col-md-12 col-xs-12">
                <label for="produto_preco">Preço:</label> <?php echo $dados['produto']->produto_preco; ?>
            </div>

            <div class="form-group col-md-12 col-xs-12">
                <label for="produto_quantidade">Quantidade:</label> <?php echo $dados['produto']->produto_quantidade; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="produto_desc">Descrição:</label>
            <?php echo $dados['produto']->produto_desc; ?>
        </div>
        <br/>
    </div>
</div>
<?php require_once 'common/rodape.php'; ?>
<script type="text/javascript" src="<?php echo Router::base(); ?>/assets/summernote/summernote.js"></script>
<script type="text/javascript" src="<?php echo Router::base(); ?>/assets/js/jquery.mask.js"></script>
<script>$("#menu-produto").addClass('menu-top-active');</script>
</body>
</html>