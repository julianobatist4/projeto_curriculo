<?php
// gerar.php - processamento simples e compatível
function h($s){ return htmlspecialchars($s ?? '', ENT_QUOTES, 'UTF-8'); }

$nome = $_POST['nome'] ?? '[SEU NOME]';
$email = $_POST['email'] ?? '';
$telefone = $_POST['telefone'] ?? '';
$cidade = $_POST['cidade'] ?? '[SEU POLO]';
$nascimento = $_POST['nascimento'] ?? '';
$idade = $_POST['idade'] ?? '';
$resumo = $_POST['resumo'] ?? '';
$curso = $_POST['curso'] ?? '';
$habilidades = $_POST['habilidades'] ?? '';

$empresas = $_POST['empresa'] ?? array();
$cargos = $_POST['cargo'] ?? array();
$inicios = $_POST['inicio'] ?? array();
$fins = $_POST['fim'] ?? array();
$atividades = $_POST['atividades'] ?? array();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Currículo - <?php echo h($nome); ?></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body{background:#fff;padding:20px;font-family:Arial,Helvetica,sans-serif;color:#222}
.header{margin-bottom:18px}
.section{margin-bottom:14px}
</style>
</head>
<body>
<div class="container">
  <div class="d-flex justify-content-between header">
    <div>
      <h2><?php echo h($nome); ?></h2>
      <div><?php echo h($cidade); ?> — <?php echo h($telefone); ?> — <?php echo h($email); ?></div>
    </div>
    <div class="text-end">
      <button class="btn btn-sm btn-primary" onclick="window.print()">Baixar / Imprimir</button>
      <a class="btn btn-sm btn-secondary" href="../index.php">Voltar</a>
    </div>
  </div>

  <?php if(trim($resumo)!=''){ ?>
  <div class="section">
    <h5>Resumo profissional</h5>
    <p><?php echo nl2br(h($resumo)); ?></p>
  </div>
  <?php } ?>

  <div class="section">
    <h5>Experiência profissional</h5>
    <?php
    $count = count($empresas);
    $has = false;
    for($i=0;$i<$count;$i++){
        $e = isset($empresas[$i]) ? trim($empresas[$i]) : '';
        $c = isset($cargos[$i]) ? trim($cargos[$i]) : '';
        if($e=='' && $c=='') continue;
        $has = true;
        echo '<div style="margin-bottom:8px">';
        echo '<strong>'.h($c).' — '.h($e).'</strong><br>';
        $ini = isset($inicios[$i]) ? h($inicios[$i]) : '';
        $fim = isset($fins[$i]) ? h($fins[$i]) : '';
        echo '<small>'.$ini.' — '.$fim.'</small>';
        $ativ = isset($atividades[$i]) ? trim($atividades[$i]) : '';
        if($ativ!='') echo '<div>'.nl2br(h($ativ)).'</div>';
        echo '</div>';
    }
    if(!$has) echo '<p>Sem experiências informadas.</p>';
    ?>
  </div>

  <?php if(trim($curso)!=''){ ?>
  <div class="section">
    <h5>Formação acadêmica</h5>
    <p><strong><?php echo h($curso); ?></strong></p>
  </div>
  <?php } ?>

  <?php if(trim($habilidades)!=''){ ?>
  <div class="section">
    <h5>Habilidades</h5>
    <p><?php echo h($habilidades); ?></p>
  </div>
  <?php } ?>

  <footer class="text-muted mt-4">
    <small>Gerado com propósito acadêmico para a disciplina Fundamentos de Programação para Internet - UNIPAR EAD</small>
  </footer>
</div>
</body>
</html>
