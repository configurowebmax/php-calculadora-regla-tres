<?php
header('Content-Type: text/html; charset=utf-8');
$r = null;
if ($_POST) {
    $a = (float)($_POST['a'] ?? 0); $b = (float)($_POST['b'] ?? 0); $c = (float)($_POST['c'] ?? 0);
    if ($a != 0) $r = ($b * $c) / $a;
}
?>
<!DOCTYPE html><html lang="es"><head><meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Calculadora Regla de Tres Online | ConfiguroWeb</title>
<meta name="description" content="Calculadora de regla de tres simple online gratis. Resuelve proporciones rapidamente.">
<meta name="keywords" content="regla de tres, calculadora proporciones, regla tres simple">
<link rel="canonical" href="https://demoscweb.com/github/php-calculadora-regla-tres/">
<link rel="stylesheet" href="assets/style.css"></head><body>
<header><h1>🔢 Calculadora Regla de Tres</h1>
<p class="subtitle">Si A es a B, entonces C es a X</p></header>
<main><form method="POST">
<label for="a">Valor A</label><input type="number" step="any" name="a" id="a" value="<?php echo htmlspecialchars($_POST['a']??''); ?>" required>
<label for="b">Valor B</label><input type="number" step="any" name="b" id="b" value="<?php echo htmlspecialchars($_POST['b']??''); ?>" required>
<label for="c">Valor C</label><input type="number" step="any" name="c" id="c" value="<?php echo htmlspecialchars($_POST['c']??''); ?>" required>
<button type="submit" class="btn-primary">Calcular X</button></form>
<?php if ($r !== null): ?>
<div class="resultado"><span class="etiqueta">Resultado X</span><div class="valor"><?php echo round($r,4); ?></div></div>
<?php endif; ?>
<section class="info"><h2>Formula</h2><p class="formula">X = (B x C) / A</p>
<p>La regla de tres resuelve proporcionalidades: si A corresponde a B, entonces C corresponde a X.</p></section>
</main><footer><p>Desarrollado por <a href="https://configuroweb.com" target="_blank">ConfiguroWeb</a></p>
<p>&copy; <?php echo date('Y'); ?> ConfiguroWeb</p></footer></body></html>