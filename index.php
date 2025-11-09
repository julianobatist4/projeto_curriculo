<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Gerador de Currículo - UNIPAR</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-light">
<div class="container py-4">
<h1 class="mb-4">Gerador de Currículo</h1>
<form action="php/gerar.php" method="post">
<div class="row g-3">
<div class="col-md-6">
<label class="form-label">Nome completo</label>
<input name="nome" class="form-control" required>
</div>
<div class="col-md-6">
<label class="form-label">E-mail</label>
<input type="email" name="email" class="form-control" required>
</div>
<div class="col-md-4">
<label class="form-label">Telefone</label>
<input name="telefone" class="form-control">
</div>
<div class="col-md-4">
<label class="form-label">Cidade / Estado</label>
<input name="cidade" class="form-control">
</div>
<div class="col-md-4">
<label class="form-label">Data de nascimento</label>
<input type="date" id="nascimento" name="nascimento" class="form-control" required onchange="calcularIdade()">
</div>
<div class="col-md-2">
<label class="form-label">Idade</label>
<input id="idade" name="idade" class="form-control" readonly>
</div>
<div class="col-12">
<label class="form-label">Resumo profissional</label>
<textarea name="resumo" class="form-control"></textarea>
</div>
<div class="col-12">
<label class="form-label">Experiências profissionais</label>
<div id="experiencias">
<div class="exp-item mb-2 p-2 border rounded bg-white">
<input name="empresa[]" class="form-control mb-1" placeholder="Empresa">
<input name="cargo[]" class="form-control mb-1" placeholder="Cargo">
<div class="d-flex gap-2">
<input name="inicio[]" class="form-control" placeholder="Ano início">
<input name="fim[]" class="form-control" placeholder="Ano fim ou Atual">
</div>
<textarea name="atividades[]" class="form-control mt-1" placeholder="Atividades (breve)"></textarea>
<button type="button" class="btn btn-sm btn-outline-danger mt-2 removeExp">Remover</button>
</div>
</div>
<button type="button" id="addExp" class="btn btn-sm btn-outline-secondary mt-2">+ Adicionar experiência</button>
</div>
<div class="col-12">
<label class="form-label">Formação acadêmica</label>
<input name="curso" class="form-control">
</div>
<div class="col-12">
<label class="form-label">Habilidades (separe por vírgula)</label>
<input name="habilidades" class="form-control">
</div>
<div class="col-12">
<button class="btn btn-primary mt-3">Gerar Currículo</button>
</div>
</div>
</form>
</div>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>