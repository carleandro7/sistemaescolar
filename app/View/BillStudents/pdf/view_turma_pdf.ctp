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
    <b><a> Historico de Aluno por Turma </a></b>
    </div>
    <hr  width="100%" size="3"  align="left">  
    <div id="tbcentral">
    <table >
    <tr>
        <td  width=360px><b>  Turma </b><br><?php echo $disciplineStudents[0]['Group']['nome']; ?></td>
        <td  width=200px><b> Nivel </b><br><?php echo $disciplineStudents[0]['Group']['nivel']; ?></td>
        <td width=50px><b> Ano </b><br><?php echo $disciplineStudents[0]['Group']['ano']; ?></td>
        <td width=100px><b> Turno </b><br><?php echo $disciplineStudents[0]['Group']['turno']; ?></td>
    </tr>
     <tr>
        <td colspan="4"><b>  Aluno </b><br><?php echo ""; ?></td>
    </tr>
    </table>
    
     <table>
        <tr>
        <td  width=331px height=40px><b>  Disciplinas </b><br></td>
        <td  width=40px height=40px><b>  Nota 1 </b><br></td>
        <td  width=40px height=40px><b>  Nota 2 </b><br></td>
        <td  width=40px height=40px><b>  Nota 3 </b><br></td>
        <td  width=40px height=40px><b>  Nota 4 </b><br></td>
        <td  width=40px height=40px><b>  Nota 5 </b><br></td>
        <td  width=40px height=40px><b>  Nota 6 </b><br></td>
        <td  width=40px height=40px><b>  Media </b><br></td>
        <td  width=40px height=40px><b>  Faltas </b><br></td>
        <td  width=40px height=40px><b>  FT(%) </b><br></td>
        </tr>
	<?php
        foreach ($disciplineStudents as $disciplineStudent):  $i=0;?>
            <tr>
            <td  width=331px><b> <?php echo $disciplineStudent['Discipline']['nome']; ?> </b><br></td>
          <?php foreach ($classnotes as $classnote):
               if($disciplineStudent['DisciplineStudent']['id'] === $classnote['BillStudent']['discipline_student_id']){ ?>
                <td  width=40px><?php echo $classnote['BillStudent']['nota']; ?></td>
               <?php $i++;}endforeach; ?>
            
            <?php for($j = $i; $j<6; $j++):?>
                <td  width=40px> </td>
            <?php endfor;?>     
            <td  width=40px><b> <?php echo $disciplineStudent[0]['frequencias']; ?> </b><br></td>    
            <td  width=40px><b> <?php echo $disciplineStudent[0]['media']; ?> </b><br></td>
            <td  width=40px><b> <?php echo $disciplineStudent[0]['media']; ?> </b><br></td>
            
         </tr>
        <?php  endforeach; ?>
    </table>
    </div>
    </body>
    </html>