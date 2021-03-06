<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'pago-remuneracion-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php //echo $form->textFieldGroup($model,'porcentaje',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
      <?php echo $form->labelEx($model, 'Porcentaje');?></b>
        <br />
 <?php $this->widget(
                 'booster.widgets.TbSelect2', array(            
                 'model' => $model,
                 'attribute' => 'porcentaje',
                 'data' => array(
                    '5' => '5',
                    '10' => '10',
                    '15' => '15',
                    '20' => '20',
                    '25' => '25',
                    '30' => '30',
                    '35' => '35',
                    '40' => '40',
                    '45' => '45',
                    '50' => '50',
                    '55' => '55',
                    '60' => '60',
                    '65' => '65',
                    '70' => '70',
                    '75' => '75',
                    '80' => '80',
                    '85' => '85',
                    '90' => '90',
                    '95' => '95',
                    '100' => '100'),

 'options' => array(
                   'placeholder' => "Peso Cartera Vencida",
                  //     'id' => "proyecto",
                  /* 'allowClear'=>true,
                   'minimumInputLength'=>2,*/
                 ),
                 'htmlOptions'=>array(
                   'style'=>'width:380px',
                     
                 ),
               ));
   ?>   
	<?php echo $form->textFieldGroup($model,'dinero',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'bono',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>
