<?php
$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->id_cliente_gs,
);

$this->menu=array(
array('label'=>'Listar Cliente','url'=>array('index')),

array('label'=>'Administrar Cliente','url'=>array('admin')),
);
?>

<button type="button" class="btn btn-warning">DETALLE CLIENTE
#<?php echo $model->id_cliente; ?>
</button>


<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_cliente_gs',
		'nombre_de_empresa',
		'nombre',
		'apellido',
		'status',
		'proyecto',
		'numero_de_lote',
		'id_cliente',
		'id_proyecto',
		'numero_celular',
		'numero_casa',
		'numero_adicional',
		'correo',
		'cedula',
		'lugar_trabajo',
		'ocupacion',
		'sexo',
		'nacionalidad',
		'referencia_1',
		'referencia_2',
		'telefono_ref_1',
		'telefono_ref_2',
		'relacion_ref_1',
		'relacion_ref_2',
		'id_de_reason',
		'vendedor',
		'id_vendedor',
		'banco_acreedor',
		'id_banco',
		'banco_interino',
		'status_de_lote',
		'direccion',
		'motivo_del_pago',
		'forma_de_pago',
		'cantidad_de_quotas',
		'cantidad_de_quotas_mejoras',
		'tipo_de_cliente',
		'estado_civil',
		'status_plan_pago',
		'monto_ultimo_pago',
		'cartera_corriente',
		'cartera_30_dias',
		'cartera_60_dias',
		'cartera_90_dias',
		'cartera_120_dias',
		'total_vencido',
		'monto_abono',
		'monto_liquidacion',
		'total_venta',
		'monto_quota_abono',
		'gasto_legal',
		'total',
		'monto_mejoras',
		'monto_cuota_mejoras',
		'fecha_de_pago_abono',
		'fecha_ultimo_pago',
		'fecha_de_entrega',
		'fecha_de_permiso_contruccion',
		'fecha_de_permiso_bomberos',
		'fecha_de_permiso_ocupacion',
		'fecha_de_carta_promesa',
),
)); ?>
