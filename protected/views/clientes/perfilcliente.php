<?php
$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	'perfilcliente',
);

$this->menu=array(
	array('label'=>'Volver','url'=>array('/gestion/index')),
	//array('label'=>'Administrar Clientes','url'=>array('admin')),
);
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="script.js"></script>
<script>

$(function(){
  $('#demo').on('hide.bs.collapse', function () {
    $('#button').html('<span class="glyphicon glyphicon-collapse-down"></span> Show');
  })
  $('#demo').on('show.bs.collapse', function () {
    $('#button').html('<span class="glyphicon glyphicon-collapse-up"></span> Hide');
  })
})
</script>
<div class="row">
    <!--<div class="col-sm-6" style="background-color:lavender;">-->
    <div class="col-sm-6" style="background-color:#dff0d8;">
        <div class="list-group">
        <a href="#" class="list-group-item list-group-item-info">
            <strong>DATOS GENERALES</strong>
        </a>
            <table class="list-group-item"">
                <tbody>
                    <tr>
                        <td>
                            <?php            
                                echo CHtml::label('Nombre:   ', '????');
                            ?>
                        </td>

                        <td><?php  echo $cliente->NOMBRE_DE_EMPRESA;  ?></td>
                    </tr>    
                    <!--Fecha Ingreos Tramite -->
                  
                    
                                
                    <tr>
                        <td>
                            <?php            
                                echo CHtml::label('Proyecto', '????');
                            ?>
                        </td>

                        <td><?php echo $cliente->PROYECTO; ?></td>
                    </tr>
                    
                    <tr>
                        <td><?php            
                           echo CHtml::label('Lote', '????'); ?>
                        </td>            
                        <td><?php echo $cliente->NUMERO_DE_LOTE; ?></td>
                    </tr>
                    
               
                    </tr>    
                </tbody>
            </table>
    </div>
    </div>
    
    <div class="col-sm-6" style="background-color:#dff0d8;">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-info">
                <strong>DATOS CONTACTO</strong>
            </a>
     
                 <table class="list-group-item"">
                <tbody>
                    <tr>
                        <td>
                            <?php            
                                 echo CHtml::label('Dirección: ', '????');
                            ?>
                        </td>

                        <td><?php  echo $cliente->DIRECCION;  ?></td>
                    </tr>    
                    <!--Fecha Ingreos Tramite -->
                    <tr>
                        <td>
                            <?php            
                                echo CHtml::label('Correo: ', '????');
                            ?>
                        </td>

                        <td><?php echo $cliente->CORREO;  ?></td>
                    </tr>
                    
                                
                    <tr>
                        <td>
                            <?php            
                                echo CHtml::label('Telef. Casa:   ', '????');
                            ?>
                        </td>

                        <td><?php echo $cliente->NUMERO_CASA; ?></td>
                    </tr>
                    
                    <tr>
                        <td><?php            
                           echo CHtml::label('Telefono Celular', '????');?>
                        </td>            
                        <td><?php echo $cliente->NUMERO_CELULAR; ?></td>
                    </tr>
                    
                     <tr>
                        <td><?php            
                          echo CHtml::label('Otro', '????');?>
                        </td>            
                        <td><?php echo $cliente->NUMERO_ADICIONAL; ?></td>
                    </tr>                  
                </tbody>
            </table>
 
     
    </div>
  </div>


<br />

<?php 

//var_dump($cliente->cobroses->id_cobros=>monto_ultimo_pago);
//die;

?>
<div class="row">
    <!--<div class="col-sm-6" style="background-color:lavender;">-->
    <div class="col-sm-6" style="background-color:#f2dede;">
        <div class="list-group">
        <a href="#" class="list-group-item list-group-item-danger">
            <strong>DATOS COBROS</strong>
        </a>    
         
              <table class="list-group-item">
                <tbody>
                    <tr>
                        <td>
                            <?php            
                                echo CHtml::label('Monto Ultimo Pago','',array('size'=>12)); 
                            ?>
                        </td>

                        <td><?php  echo $cliente->MONTO_ULTIMO_PAGO;  ?></td>
                    </tr>    
                    <!--Fecha Ingreos Tramite -->
                    <tr>
                        <td>
                            <?php            
                                echo CHtml::label('Fecha de Ultimo Pago','',array('size'=>12));
                            ?>
                        </td>

                        <td><?php echo $cliente->FECHA_ULTIMO_PAGO;  ?></td>
                    </tr>
                    
                                
                    <tr>
                        <td>
                            <?php            
                                echo CHtml::label('Monto Abono','',array('size'=>12));
                            ?>
                        </td>

                        <td><?php echo $cliente->TOTAL; ?></td>
                    </tr>
                    
                    <tr>
                        <td><?php            
                           echo CHtml::label('Cantidad Cuotas Abono','',array('size'=>12)); ?>
                        </td>            
                        <td><?php echo $cliente->CANTIDAD_DE_QUOTAS; ?></td>
                    </tr>
                    
                    <tr>
                        <td><?php            
                           echo CHtml::label('Fecha Pago Abono','',array('size'=>8));  ?>
                        </td>            
                        <td><?php echo $cliente->FECHA_DE_PAGO_ABONO; ?></td>
                    </tr>  
                    
                                <tr>
                        <td><?php            
                           echo CHtml::label('Monto Mejoras','',array('size'=>8)); ?>
                        </td>            
                        <td><?php echo $cliente->MONTO_MEJORAS; ?></td>
                    </tr> 
                    
                                <tr>
                        <td><?php            
                           echo CHtml::label('Cantidad Cuotas Mejoras ','',array('size'=>8)); ?>
                        </td>            
                        <td><?php echo $cliente->CANTIDAD_DE_QUOTAS_MEJORAS; ?></td>
                    </tr> 
                    
                    <!--OJOOO-->
                                <tr>
                        <td><?php            
                           echo CHtml::label('Fecha pago mejoras','',array('size'=>8)); ?>
                        </td>            
                        <td><?php echo $cliente->FECHA_DE_PAGO_ABONO; ?></td>
                    </tr>
                    
                                <tr>
                        <td><?php            
                           echo CHtml::label('Monto Mensualidad Abono','',array('size'=>8)); ?>
                        </td>            
                        <td><?php echo $cliente->MONTO_QUOTA_ABONO; ?></td>
                    </tr> 
  
                  
                <div id="demo" class="collapse">   
                    <tr>
                        <td><?php            
                           echo CHtml::label('Monto Mensualidad Mejoras','',array('size'=>8)); ?>
                        </td>            
                        <td><?php echo $cliente->MONTO_CUOTA_MEJORAS; ?></td>
                    </tr> 
            
                    <tr>
                        <td><?php            
                           echo CHtml::label('0-30','',array('size'=>8)); ?>
                        </td>            
                        <td><?php echo $cliente->CARTERA_30_DIAS; ?></td>
                    </tr> 
                    
                    
                    <tr>
                        <td><?php            
                           echo CHtml::label('31-60','',array('size'=>8)); ?>
                        </td>            
                        <td><?php echo $cliente->CARTERA_60_DIAS; ?></td>
                    </tr> 
                    
                    <tr>
                        <td><?php            
                           echo CHtml::label('61-90','',array('size'=>8)); ?>
                        </td>            
                        <td><?php echo $cliente->CARTERA_90_DIAS; ?></td>
                    </tr> 
                        <tr>
                        <td><?php            
                           echo CHtml::label('91-120','',array('size'=>8)); ?>
                        </td>            
                        <td><?php echo $cliente->CARTERA_120_DIAS; ?></td>
                    </tr> 
                  </div>
                </tbody>
            </table>                 
        </div>
    </div>
  <!-----------***********************  TRAMITES ************************--->  
    
    <div class="col-sm-6" style="background-color:#f2dede;">     
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-danger">
                <strong>TRAMITES</strong>
              <!--  <a><image src="../../images/email.png" /></a>-->
            </a>
  
        
  
    
     
            <table class="list-group-item"">
                <tbody>
                    <tr>
                        <td>
                            <?php            
                             echo CHtml::label('Monto Liquidacion','',array('size'=>8)); ?>
                        </td>

                        <td><?php echo $cliente->MONTO_LIQUIDACION?></td>
                    </tr>    
                    <!--Fecha Ingreos Tramite -->
                    <tr>
                        <td><?php            
                        echo CHtml::label('Fecha ingreso a Tramite','',array('size'=>8));  ?></td>            
                        <td>2015-01-01</td>
                    </tr>
                    
                                
                    <tr>
                        <td><?php            
                        echo CHtml::label('Estatus Tramite','',array('size'=>8));  ?></td>            
                        <td>----</td>
                    </tr>
                    
                    <tr>
                        <td><?php            
                        echo CHtml::label('Días en Estatus','',array('size'=>8));  ?>
                        </td>            
                        <td>----</td>
                    </tr>
                    
                    <tr>
                        <td><?php            
                        echo CHtml::label('Banco Cliente','',array('size'=>8));  ?>
                        </td>            
                        <td>----</td>
                    </tr>
                    
                    <tr>
                        <td><?php            
                        echo CHtml::label('Generar Paz y Salvo','',array('size'=>8));  ?>
                        </td>             
                        <td>
                              <?php
          $this->widget('zii.widgets.CMenu', array(
            'items'=>array(
                    array(
                            'label'=>CHtml::image(Yii::app()->request->baseUrl."/images/pdf.png").'',
                            'url'=>array('/clientes/generatePdf/134'),
                    ),
                array(
                            'label'=>CHtml::image(Yii::app()->request->baseUrl."/images/email.png").'',
                            'url'=>array('/clientes/generatePdf/134'),
                    ),
            ),
            'encodeLabel' => false,
        ));
        ?>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        
        
      
  
  
</div>
</div>
</div>

</div>