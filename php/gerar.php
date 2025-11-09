<?php
function h($s){ return htmlspecialchars($s ?? '', ENT_QUOTES, 'UTF-8'); }
$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$telefone = $_POST['telefone'] ?? '';
$cidade = $_POST['cidade'] ?? '';
$idade = $_POST['idade'] ?? '';
$resumo = $_POST['resumo'] ?? '';
$curso = $_POST['curso'] ?? '';
$habilidades = $_POST['habilidades'] ?? '';
$empresas = $_POST['empresa'] ?? [];
$cargos = $_POST['cargo'] ?? [];
$inicios = $_POST['inicio'] ?? [];
$fins = $_POST['fim'] ?? [];
$atividades = $_POST['atividades'] ?? [];
?>
<!DOCTYPE html>
<html lang='pt-br'>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width,initial-scale=1'>
<title>Currículo - <?php echo h($nome); ?></title>
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' rel='stylesheet'>
</head>
<body class='bg-white p-4'>
<div class='container'>
<div class='d-flex justify-content-between'>
<div>
<h2><?php echo h($nome); ?></h2>
<div><?php echo h($cidade); ?> — <?php echo h($telefone); ?> — <?php echo h($email); ?></div>
</div>
<button class='btn btn-primary' onclick='window.print()'>Baixar / Imprimir</button>
</div>
<hr>
<?php if($resumo){ ?><h4>Resumo Profissional</h4><p><?php echo nl2br(h($resumo)); ?></p><?php } ?>
<h4>Experiência Profissional</h4>
<?php for($i=0;$i<count($empresas);$i++){
if(trim($empresas[$i])==='') continue;
echo "<div><strong>".h($cargos[$i])." — ".h($empresas[$i])."</strong><br>";
echo "<small>".h($inicios[$i])." — ".h($fins[$i])."</small>";
echo "<p>".nl2br(h($atividades[$i]))."</p></div>";
} ?>
<?php if($curso){ ?><h4>Formação Acadêmica</h4><p><?php echo h($curso); ?></p><?php } ?>
<?php if($habilidades){ ?><h4>Habilidades</h4><p><?php echo h($habilidades); ?></p><?php } ?>
</div>
</body>
</html>