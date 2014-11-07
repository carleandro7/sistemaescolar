<html>
    <head>
        <style="text/css">
            body {
            font-family: Courier New;
            margin: 0;
            padding: 0;
            border: none;
            font-size: 18px;
            }
            #exemplo {
            width: 100%;
            height: auto;
            overflow: hidden;
            padding: 5px 0;
            text-align: left;
            }
            #tbcentral {
            width: 100%;
            height: auto;
            overflow: hidden;
            padding: 5px 0;
            text-align: left;
            font-size: 12px;
            }
            #data {
            height: auto;
            overflow: hidden;
            padding: 5px 0;
            text-align: right;
            font-size: 12px;
            }
            table {
                border-collapse: collapse;
            }
            td, th {
                border: 1px solid black;
            }
    </style>
</head>
<body>
    <div id="data">
        <?php   echo $this->Time->format('d/m/Y' , time()); ?>
    </div>
    <div id="exemplo">
    <b><a> Relat&oacute;rio de Disciplina por Aluno </a></b>
    </div>
    <hr  width="100%" size="3"  align="left">  
    <div id="tbcentral">
    <table >
    <tr>
        <td  width=360px><b>  Turma </b><br><?php echo $discipline[0]['Group']['nome']; ?></td>
        <td  width=220px><b> Nivel </b><br><?php echo $discipline[0]['Group']['nivel']; ?></td>
        <td colspan="3" width=50px><b> Ano </b><br><?php echo $discipline[0]['Group']['ano']; ?></td>
    </tr>
    <tr>
        <td><b>  Discipline </b><br><?php echo $discipline[0]['Discipline']['nome']; ?></td>
        <td width=100px><b> Turno </b><br><?php echo $discipline[0]['Group']['turno']; ?></td>
        <td width=40px><b> Media </b><br><?php echo number_format($mediapoderada[0][0]['AVG(`BillStudent`.`nota`)'], 2); ?></td>
        <td width=40px><b> Faltas </b><br><?php if($frequency[0][0]['SUM(`Frequency`.`falta`)'] != null){
                                                echo h($frequency[0][0]['SUM(`Frequency`.`falta`)']);
                                              }else{
                                                  echo h("0");
                                              }
                                          ?>
        </td>
        <td width=40px><b> FT(%) </b><br><?php if($classnote[0][0]['SUM(`Classnote`.`qtdaula`)'] != null) {
                                                    if($frequency[0][0]['SUM(`Frequency`.`falta`)'] != null){
                                                        $resultado = ($frequency[0][0]['SUM(`Frequency`.`falta`)']*100)/$classnote[0][0]['SUM(`Classnote`.`qtdaula`)'];
                                                        echo h(number_format($resultado,0));
                                                    }else{
                                                        echo h("0");
                                                    }

                                            } else {
                                                echo h("0");
                                            }
        ?></td>
    </tr>
     <tr>
        <td colspan="5"><b>  Aluno </b><br><?php echo $student[0]['Student']['nome']; ?></td>
    </tr>
    </table>
    
     <table>
    <tr align=center>
        <?php if (!empty($billStudents)): 
            $i=0;
         ?>
	<?php foreach ($billStudents as $billStudent):  $i++;?>
                <td  width=50px><b>  Nota <?php echo $i;?> </b><br><?php echo $billStudent['BillStudent']['nota']; ?></td>
	<?php endforeach; ?>
        <?php endif; ?>
    </tr>
    </table>
    </div>
    </body>
    </html>