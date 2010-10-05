<table>
  <thead>
    <tr>
      <th>Cd municipio</th>
      <th>Nm municipio</th>
      <th>Dt lei criacao</th>
      <th>De lei criacao</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Municipioss as $Municipios): ?>
    <tr>
      <td><a href="<?php echo url_for('municipios/show?cd_municipio='.$Municipios->getCdMunicipio()) ?>">
                   <?php echo $Municipios->getCdMunicipio() ?></a></td>
      <td><?php echo $Municipios->getNmMunicipio() ?></td>
      <td><?php echo $Municipios->getDtLeiCriacao() ?></td>
      <td><?php echo $Municipios->getDeLeiCriacao() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('municipios/new') ?>">New</a>
